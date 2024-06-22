<?php

namespace Admin\Extend\AdminShopify\Controllers;

use Admin\Delegates\Card;
use Admin\Delegates\Form;
use Admin\Delegates\ModelInfoTable;
use Admin\Delegates\ModelTable;
use Admin\Delegates\SearchForm;
use Admin\Delegates\Tab;
use Admin\Extend\AdminShopify\Models\Country;
use Admin\Extend\AdminShopify\Models\Currency;
use Admin\Page;
use App\Admin\Controllers\Controller;

class CountriesController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = Country::class;

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
                $searchForm->input('iso_code', 'admin-shopify.iso_code'),
                $searchForm->input('phone_code', 'admin-shopify.phone_code'),
                $searchForm->select('currency_id', 'admin-shopify.currency')
                    ->load(Currency::class),
                $searchForm->at(),
            ),
            $card->statisticBody(
                $modelTable->col('admin-shopify.name', 'name')->sort(),
                $modelTable->col('admin-shopify.iso_code', 'iso_code')->sort(),
                $modelTable->col('admin-shopify.phone_code', 'phone_code')->sort(),
                $modelTable->col('admin-shopify.currency', 'currency.name')->sort('currency_id'),
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
                  $tab->lang()->input('name', 'admin-shopify.name')->required()->vertical(),
                  $tab->input('iso_code', 'admin-shopify.iso_code')->required(),
                  $tab->input('phone_code', 'admin-shopify.phone_code')->required(),
                  $tab->select('currency_id', 'admin-shopify.currency')
                    ->load(Currency::class)->required(),
                  $tab->switcher('active', 'admin-shopify.active')->default(1),
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
                $modelInfoTable->row('admin-shopify.iso_code', 'iso_code'),
                $modelInfoTable->row('admin-shopify.phone_code', 'phone_code'),
                $modelInfoTable->row('admin-shopify.currency', 'currency.name'),
                $modelInfoTable->row('admin-shopify.active', 'active')->input_switcher,
                $modelInfoTable->at(),
            ),
        );
    }

}
