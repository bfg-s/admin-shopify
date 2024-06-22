<?php

namespace Admin\Extend\AdminShopify\Controllers;

use Admin\Delegates\Card;
use Admin\Delegates\Form;
use Admin\Delegates\ModelInfoTable;
use Admin\Delegates\ModelTable;
use Admin\Delegates\SearchForm;
use Admin\Delegates\Tab;
use Admin\Extend\AdminShopify\Models\PaymentMethod;
use Admin\Page;
use App\Admin\Controllers\Controller;

/**
 * PaymentMethodsController Class
 * @package App\Admin\Controllers
 */
class PaymentMethodsController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = PaymentMethod::class;

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
                $searchForm->input('controller', 'admin-shopify.controller'),
                $searchForm->at(),
            ),
            $card->statisticBody(
                $modelTable->col('admin-shopify.logo', 'logo')->sort()->avatar,
                $modelTable->col('admin-shopify.name', 'name')->sort(),
                $modelTable->col('admin-shopify.controller', 'controller')->sort(),
                $modelTable->col('admin-shopify.active', 'active')->sort()->input_switcher,
            ),
        );
    }

    /**
     * @param Page $page
     * @param Card $card
     * @param Form $form
     * @param Tab $tab
     * @return Page
     */
    public function matrix(Page $page, Card $card, Form $form, Tab $tab) : Page
    {
        return $page->card(
            $card->form(
                $form->tabGeneral(
                  $tab->image('logo', 'admin-shopify.logo'),
                  $tab->lang()->input('name', 'admin-shopify.name')->required()->vertical(),
                  $tab->lang()->ckeditor('description', 'admin-shopify.description')->vertical(),
                  $tab->input('controller', 'admin-shopify.controller'),
                  $tab->switcher('active', 'admin-shopify.active'),
                ),
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
                $modelInfoTable->row('admin-shopify.controller', 'controller'),
                $modelInfoTable->row('admin-shopify.active', 'active')->input_switcher,
                $modelInfoTable->at(),
            ),
        );
    }

}
