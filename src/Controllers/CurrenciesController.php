<?php

namespace Admin\Extend\AdminShopify\Controllers;

use Admin\Delegates\Card;
use Admin\Delegates\Form;
use Admin\Delegates\ModelInfoTable;
use Admin\Delegates\ModelTable;
use Admin\Delegates\SearchForm;
use Admin\Delegates\Tab;
use Admin\Extend\AdminShopify\Models\Currency;
use Admin\Page;
use App\Admin\Controllers\Controller;

/**
 * CurrenciesController Class
 * @package App\Admin\Controllers
 */
class CurrenciesController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = Currency::class;

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
                $searchForm->input('code', 'admin-shopify.code'),
                $searchForm->input('name', 'admin-shopify.name'),
                $searchForm->input('symbol', 'admin-shopify.symbol'),
                $searchForm->input('exchange_rate', 'admin-shopify.exchange_rate'),
                $searchForm->input('active', 'admin-shopify.active'),
                $searchForm->at(),
            ),
            $card->statisticBody(
                $modelTable->col('admin-shopify.code', 'code')->sort(),
                $modelTable->col('admin-shopify.name', 'name')->sort(),
                $modelTable->col('admin-shopify.symbol', 'symbol')->sort(),
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
                  $tab->input('code', 'admin-shopify.code'),
                  $tab->lang()->input('name', 'admin-shopify.name')->vertical()->required(),
                  $tab->input('symbol', 'admin-shopify.symbol'),
                  $tab->info('exchange_rate', 'admin-shopify.exchange_rate'),
                  $tab->input('exchange_rate_adjustment', 'admin-shopify.exchange_rate_adjustment'),
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
                $modelInfoTable->row('admin-shopify.code', 'code'),
                $modelInfoTable->row('admin-shopify.name', 'name'),
                $modelInfoTable->row('admin-shopify.symbol', 'symbol'),
                $modelInfoTable->row('admin-shopify.exchange_rate', 'exchange_rate'),
                $modelInfoTable->row('admin-shopify.exchange_rate_adjustment', 'exchange_rate_adjustment'),
                $modelInfoTable->row('admin-shopify.active', 'active')->input_switcher,
                $modelInfoTable->at(),
            ),
        );
    }

}
