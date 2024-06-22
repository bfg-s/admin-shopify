<?php

namespace Admin\Extend\AdminShopify\Controllers;

use Admin\Delegates\Card;
use Admin\Delegates\Form;
use Admin\Delegates\ModelInfoTable;
use Admin\Delegates\ModelRelation;
use Admin\Delegates\ModelTable;
use Admin\Delegates\SearchForm;
use Admin\Delegates\Tab;
use Admin\Extend\AdminShopify\Models\Cart;
use Admin\Extend\AdminShopify\Models\Currency;
use Admin\Extend\AdminShopify\Models\Product;
use Admin\Page;
use App\Admin\Controllers\Controller;

/**
 * CartsController Class
 * @package App\Admin\Controllers
 */
class CartsController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = Cart::class;

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
                $searchForm->select('user_id', 'admin-shopify.user')
                    ->load(config('auth.providers.users.model'), '{id}) {email}'),
                $searchForm->input('session_id', 'admin-shopify.session_id'),
                $searchForm->at(),
            ),
            $card->statisticBody(
                $modelTable->col('admin-shopify.user', 'user.email')->sort('user_id')->copied,
                $modelTable->col('admin-shopify.session_id', 'session_id')->sort()->copied,
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
                  $tab->select('user_id', 'admin-shopify.user')
                    ->load(config('auth.providers.users.model'), '{id}) {email}'),
                  $tab->input('session_id', 'admin-shopify.session_id'),
                ),
                $form->tab(
                    $tab->title('admin-shopify.items')->icon_cart_plus(),
                    $tab->model_relation('cartItems')->template(
                        $modelRelation->select('product_id', 'admin-shopify.product')
                            ->load(Product::class),
                        $modelRelation->select('currency_id', 'admin-shopify.currency')
                            ->load(Currency::class),
                        $modelRelation->input('quantity', 'admin-shopify.quantity'),
                        $modelRelation->amount('price', 'admin-shopify.price'),
                        $modelRelation->fullControl(),
                    )
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
                $modelInfoTable->row('admin-shopify.user', 'user.email'),
                $modelInfoTable->row('admin-shopify.session_id', 'session_id'),
                $modelInfoTable->at(),
            ),
        );
    }

}
