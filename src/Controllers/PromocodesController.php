<?php

namespace Admin\Extend\AdminShopify\Controllers;

use Admin\Delegates\Card;
use Admin\Delegates\Form;
use Admin\Delegates\ModelInfoTable;
use Admin\Delegates\ModelTable;
use Admin\Delegates\SearchForm;
use Admin\Delegates\Tab;
use Admin\Extend\AdminShopify\Models\Promocode;
use Admin\Page;
use App\Admin\Controllers\Controller;

class PromocodesController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = Promocode::class;

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
                $searchForm->input('code', 'admin-shopify.code'),
                $searchForm->input('discount_percent', 'admin-shopify.discount_percent'),
                $searchForm->input('discount_price', 'admin-shopify.discount_price'),
                $searchForm->at(),
            ),
            $card->statisticBody(
                $modelTable->col('admin-shopify.name', 'name')->sort(),
                $modelTable->col('admin-shopify.code', 'code')->sort()->copied,
                $modelTable->col('admin-shopify.discount_percent', 'discount_percent')->sort()->percent,
                $modelTable->col('admin-shopify.discount_price', 'discount_price')->sort()->money(''),
                $modelTable->col('admin-shopify.delete_after_use', 'delete_after_use')->sort()->input_switcher,
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
                  $tab->input('name', 'admin-shopify.name')->required(),
                  $tab->input('code', 'admin-shopify.code')->required(),
                  $tab->percent('discount_percent', 'admin-shopify.discount_percent')
                      ->rule(function (string $attribute, mixed $value, \Closure $fail) {
                          if ($value <= 0 && request()->input('discount_price') <= 0) {
                              $fail(__('admin-shopify.at_least_one_of_discount_percent_or_discount_price_is_required'));
                          }
                      })->default(0),
                  $tab->amount('discount_price', 'Discount Price')
                      ->rule(function (string $attribute, mixed $value, \Closure $fail) {
                            if ($value <= 0 && request()->input('discount_percent') <= 0) {
                                $fail(__('admin-shopify.at_least_one_of_discount_percent_or_discount_price_is_required'));
                            }
                      })->default(0),
                  $tab->switcher('delete_after_use', 'admin-shopify.delete_after_use')->default(0),
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
                $modelInfoTable->row('admin-shopify.code', 'code')->copied,
                $modelInfoTable->row('admin-shopify.discount_percent', 'discount_percent')->badge,
                $modelInfoTable->row('admin-shopify.discount_price', 'discount_price')->badge,
                $modelInfoTable->row('admin-shopify.delete_after_use', 'delete_after_use')->input_switcher,
                $modelInfoTable->row('admin-shopify.active', 'active')->input_switcher,
                $modelInfoTable->at(),
            ),
        );
    }

}
