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
use Admin\Extend\AdminShopify\Models\Currency;
use Admin\Extend\AdminShopify\Models\Product;
use Admin\Extend\AdminShopify\Models\ProductCategory;
use Admin\Extend\AdminShopify\Models\ProductCategoryProperty;
use Admin\Extend\AdminShopify\Models\ProductCategoryPropertyValue;
use Admin\Extend\AdminShopify\Models\Shop;
use Admin\Page;
use App\Admin\Controllers\Controller;

/**
 * @method Product model()
 */
class ProductsController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = Product::class;

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
                $searchForm->input('rating', 'admin-shopify.rating'),
                $searchForm->input('views', 'admin-shopify.views'),
                $searchForm->at(),
            ),
            $card->statisticBody(
                $modelTable->col('admin-shopify.image', function (Product $product) {
                    return $product->images()->first()?->photo ?: '/vendor/admin-shopify/product-photo-no-available.png';
                })->avatar,
                $modelTable->col('admin-shopify.name', 'name')->sort(),
                $modelTable->col('admin-shopify.rating', 'rating')->rating_stars()->sort(),
                $modelTable->col('admin-shopify.views', 'views')->badge->sort(),
                $modelTable->col('admin-shopify.new', 'new')->input_switcher->sort(),
                $modelTable->col('updated_at', 'updated_at')->sort(),
                $modelTable->col('admin-shopify.best_selling', 'best_selling')->input_switcher->sort(),
                $modelTable->col('admin-shopify.active', 'active')->input_switcher->sort(),
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
        return $page->card(
            $card->form(
                $form->tabGeneral(
                    $tab->select('shop_id', 'admin-shopify.shop')
                        ->load(Shop::class)->required(),
                    $tab->lang()->input('name', 'admin-shopify.name')
                      ->required()
                      ->duplication_how_slug('#input_seo_slug')
                      ->duplication('#input_seo_title')
                      ->vertical(),
                    $tab->lang()->ckeditor('description', 'admin-shopify.description')->vertical(),
                    $tab->lang()->ckeditor('short_description', 'admin-shopify.short_description')->vertical(),
                    $tab->rating('rating', 'admin-shopify.rating')->max(5)->default(0),
                    $tab->numeric('views', 'admin-shopify.views')->default(0),
                    $tab->switcher('new', 'admin-shopify.new')->default(0),
                    $tab->switcher('best_selling', 'admin-shopify.best_selling')->default(0),
                    $tab->switcher('active', 'admin-shopify.active')->default(1),
                ),
                $form->tab(
                    $tab->title('admin-shopify.categories')->icon_globe_europe(),
                    $tab->multi_select('categories[]', 'admin-shopify.categories')
                        ->load(ProductCategory::class),
                    $tab->live(
                        $tab->withCollection($this->modelInput('categories', []), function (ProductCategory|int $categoryId) use ($tab) {
                            $category = $categoryId instanceof ProductCategory
                                ? $categoryId
                                : ProductCategory::find($categoryId);
                            return [
                                $tab->divider($category->name),
                                $tab->withCollection($category->properties, function (ProductCategoryProperty $property) use ($tab) {
                                    return [
                                        $tab->multi_select("categoryPropertyValues[$property->id][]", $property->name)
                                            ->vertical()
                                            ->value_to(
                                                fn () => $this->model()->categoryPropertyValues()->where('category_property_id', $property->id)->get()
                                            )
                                            ->load($property->propertyValues(), '{id}) {value}'),
                                    ];
                                }),
                            ];
                        }),
                    ),
                ),
                $form->tab(
                    $tab->title('admin-shopify.prices')->icon_money_bill(),
                    $tab->model_relation('prices')->title('admin-shopify.prices')->template(
                        $modelRelation->numeric('availability', 'admin-shopify.count')
                            ->default(-1)
                            ->info('admin-shopify.set_-1_if_the_quantity_is_not_limited'),
                        $modelRelation->select_currency_id('admin-shopify.currency')->load(Currency::class),
                        $modelRelation->amount_price('admin-shopify.price')->required()->default('0'),
                        $modelRelation->amount_discount_price('admin-shopify.discount_price')->required()->default('0'),
                        $modelRelation->percent_discount_percent('admin-shopify.discount_percent')->required()->default('0'),
                        $modelRelation->fullControl(),
                    )
                ),
                $form->tab(
                    $tab->title('admin-shopify.images')->icon_images(),
                    $tab->model_relation('images')->ordered()->title('admin-shopify.images')->template(
                        $modelRelation->image_photo('admin-shopify.photo'),
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
                $modelInfoTable->row('admin-shopify.name', 'name'),
                $modelInfoTable->row('admin-shopify.description', 'description'),
                $modelInfoTable->row('admin-shopify.short_description', 'short_description'),
                $modelInfoTable->row('admin-shopify.rating', 'rating'),
                $modelInfoTable->row('admin-shopify.views', 'views'),
                $modelInfoTable->row('admin-shopify.new', 'new'),
                $modelInfoTable->row('admin-shopify.best_selling', 'best_selling'),
                $modelInfoTable->row('admin-shopify.active', 'active'),
                $modelInfoTable->at(),
            ),
        );
    }

}
