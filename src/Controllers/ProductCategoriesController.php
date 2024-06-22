<?php

namespace Admin\Extend\AdminShopify\Controllers;

use Admin\Core\ModelSaver;
use Admin\Delegates\Card;
use Admin\Delegates\Form;
use Admin\Delegates\ModelInfoTable;
use Admin\Delegates\ModelRelation;
use Admin\Delegates\ModelTable;
use Admin\Delegates\SearchForm;
use Admin\Delegates\Tab;
use Admin\Extend\AdminShopify\Models\ProductCategory;
use Admin\Extend\AdminShopify\Models\ProductCategoryProperty;
use Admin\Extend\AdminShopify\Models\ProductCategoryPropertyValue;
use Admin\Page;
use App\Admin\Controllers\Controller;

/**
 * ProductCategoriesController Class
 * @package App\Admin\Controllers
 */
class ProductCategoriesController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = ProductCategory::class;

    /**
     * @param Page $page
     * @param Card $card
     * @param SearchForm $searchForm
     * @param ModelTable $modelTable
     * @return Page
     */
    public function index(Page $page, Card $card, SearchForm $searchForm, ModelTable $modelTable) : Page
    {
        return $page->card(
            $card->search_form(
                $searchForm->id(),
                $searchForm->input('name', 'admin-shopify.name'),
                $searchForm->input('description', 'admin-shopify.description'),
                $searchForm->input('short_description', 'admin-shopify.short_description'),
                $searchForm->select('parent_id', 'admin-shopify.parent')
                    ->load(ProductCategory::class),
                $searchForm->at(),
            ),
            $card->nestedModelTable(
                $modelTable->col('admin-shopify.photo', 'photo')->sort()->avatar,
                $modelTable->col('admin-shopify.name', 'name')->sort(),
                $modelTable->col('admin-shopify.parent', 'parent.name')->sort('parent_id'),
                $modelTable->col('admin-shopify.active', 'active')->sort()->input_switcher,
            ),
        );
    }

    /**
     * @param  Page  $page
     * @param  Card  $card
     * @param  Form  $form
     * @param  Tab  $tab
     * @param  ModelRelation  $modelRelation
     * @return Page
     */
    public function matrix(Page $page, Card $card, Form $form, Tab $tab, ModelRelation $modelRelation) : Page
    {
        ModelSaver::on_save(ProductCategoryProperty::class, function ($data, $model) {
            $category = ModelSaver::modelProcessed(ProductCategory::class)->first();
            if ($category) {
                foreach ($data['propertyValues'] ?? [] as $key => $datum) {
                    if (is_array($datum)) {
                        $data['propertyValues'][$key]['category_id'] = $category->id;
                    }
                }
            }
            return $data;
        });

        return $page->card(
            $card->form(
                $form->tabGeneral(
                  $tab->image('photo', 'admin-shopify.photo'),
                  $tab->lang()->input('name', 'admin-shopify.name')
                      ->required()
                      ->duplication_how_slug('#input_seo_slug')
                      ->duplication('#input_seo_title')
                      ->vertical(),
                  $tab->lang()->ckeditor('description', 'admin-shopify.description')->vertical(),
                  $tab->lang()->ckeditor('short_description', 'admin-shopify.short_description')->vertical(),
                  $tab->select('parent_id', 'admin-shopify.parent')
                    ->load(ProductCategory::class),
                  $tab->switcher('active', 'admin-shopify.active')->default(1),
                ),
                $form->tab(
                    $tab->title('admin-shopify.properties')->icon_project_diagram(),
                    $tab->model_relation('properties')->ordered()->title('admin-shopify.properties')->template(
                        $modelRelation->lang()->input('name', 'admin-shopify.name')->required()->vertical(),
                        $modelRelation->select('type', 'admin-shopify.type')->required()->options(
                            config('admin-shopify.category_property_types')
                        ),
                        $modelRelation->model_relation('propertyValues')->ordered()->title('admin-shopify.values')->template(
                            $modelRelation->lang()->input('value', 'admin-shopify.value')->vertical(),
                            $modelRelation->fullControl(),
                        ),
                        $modelRelation->fullControl(),
                    )
                ),
                $form->tabSeo()
            ),
            $card->footer_form(),
        );
    }

    /**
     * @param Page $page
     * @param Card $card
     * @param ModelInfoTable $modelInfoTable
     * @return Page
     */
    public function show(Page $page, Card $card, ModelInfoTable $modelInfoTable) : Page
    {
        return $page->card(
            $card->model_info_table(
                $modelInfoTable->id(),
                $modelInfoTable->row('admin-shopify.photo', 'photo')->avatar(400),
                $modelInfoTable->row('admin-shopify.name', 'name'),
                $modelInfoTable->row('admin-shopify.description', 'description'),
                $modelInfoTable->row('admin-shopify.short_description', 'short_description'),
                $modelInfoTable->row('admin-shopify.parent', 'parent.name'),
                $modelInfoTable->row('admin-shopify.order', 'order')->badge,
                $modelInfoTable->row('admin-shopify.active', 'active')->input_switcher(),
                $modelInfoTable->at(),
            ),
        );
    }

}
