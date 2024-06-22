<?php

namespace Admin\Extend\AdminShopify\Controllers;

use Admin\Delegates\Card;
use Admin\Delegates\Form;
use Admin\Delegates\ModelInfoTable;
use Admin\Delegates\ModelRelation;
use Admin\Delegates\ModelTable;
use Admin\Delegates\SearchForm;
use Admin\Delegates\Tab;
use Admin\Extend\AdminShopify\Models\Country;
use Admin\Extend\AdminShopify\Models\Currency;
use Admin\Extend\AdminShopify\Models\Delivery;
use Admin\Extend\AdminShopify\Models\Order;
use Admin\Extend\AdminShopify\Models\PaymentMethod;
use Admin\Extend\AdminShopify\Models\Product;
use Admin\Page;
use App\Admin\Controllers\Controller;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * @method Order model()
 */
class OrdersController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = Order::class;

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
                $searchForm->input('total_price', 'admin-shopify.total_price'),
                $searchForm->input('discount', 'admin-shopify.discount'),
                $searchForm->input('shipping', 'admin-shopify.shipping'),
                $searchForm->input('payment_commission', 'admin-shopify.payment_commission'),
                $searchForm->input('details', 'admin-shopify.details'),
                $searchForm->select('status', 'admin-shopify.status')
                    ->options(config('admin-shopify.payment_statuses')),
                $searchForm->select('user_id', 'admin-shopify.user')
                    ->load(config('auth.providers.users.model'), '{id}) {email}'),
                $searchForm->select('payment_method_id', 'admin-shopify.payment_method')
                    ->load(PaymentMethod::class),
                $searchForm->select('country_id', 'admin-shopify.country')
                    ->load(Country::class),
                $searchForm->select('currency_id', 'admin-shopify.currency')
                    ->load(Currency::class),
                $searchForm->select('delivery_id', 'admin-shopify.delivery')
                    ->load(Delivery::class),
                $searchForm->at(),
            ),
            $card->statisticBody(
                $modelTable->col('admin-shopify.code', 'code')->sort(),
                $modelTable->col('admin-shopify.total_price', 'total_price')->sort()->money(''),
                $modelTable->col('admin-shopify.discount', 'discount')->sort()->money(''),
                $modelTable->col('admin-shopify.shipping', 'shipping')->sort()->money(''),
                $modelTable->col('admin-shopify.payment_commission', 'payment_commission')->sort()->money(''),
                $modelTable->col('admin-shopify.status', 'status')->sort(),
                $modelTable->col('admin-shopify.user', 'user.email')->sort('user_id')->copied,
                $modelTable->col('admin-shopify.payment_method', 'paymentMethod.name')->sort('payment_method_id'),
                $modelTable->col('admin-shopify.country', 'country.name')->sort('country_id'),
                $modelTable->col('admin-shopify.currency', 'currency.name')->sort('currency_id'),
                $modelTable->col('admin-shopify.delivery', 'delivery.name')->sort('delivery_id'),
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
                  $tab->input('code', 'admin-shopify.code'),
                  $tab->input('total_price', 'admin-shopify.total_price'),
                  $tab->input('discount', 'admin-shopify.discount'),
                  $tab->input('shipping', 'admin-shopify.shipping'),
                  $tab->input('payment_commission', 'admin-shopify.payment_commission'),
                  $tab->input('details', 'admin-shopify.details'),
                  $tab->select('status', 'admin-shopify.status')
                      ->options(config('admin-shopify.payment_statuses')),
                  $tab->select('user_id', 'admin-shopify.user')
                      ->load(config('auth.providers.users.model'), '{id}) {email}'),
                  $tab->select('payment_method_id', 'admin-shopify.payment_method')
                      ->load(PaymentMethod::class),
                  $tab->select('country_id', 'admin-shopify.country')
                      ->load(Country::class),
                  $tab->select('currency_id', 'admin-shopify.currency')
                      ->load(Currency::class),
                  $tab->select('delivery_id', 'admin-shopify.delivery')
                      ->load(Delivery::class),
                ),
                $form->tab(
                    $tab->title('admin-shopify.items')->icon_cart_plus(),
                    $tab->model_relation('orderItems')->template(
                        $modelRelation->select('product_id', 'admin-shopify.product')
                            ->load(Product::class),
                        $modelRelation->select('currency_id', 'admin-shopify.currency')
                            ->load(Currency::class),
                        $modelRelation->input('quantity', 'admin-shopify.quantity'),
                        $modelRelation->amount('price', 'admin-shopify.price'),
                        $modelRelation->fullControl(),
                    )
                ),
                $form->tabAddresses()
            ),
            $card->footer_form(),
        );
    }

    /**
     * @param  Page  $page
     * @param  Card  $card
     * @param  ModelInfoTable  $modelInfoTable
     * @param  ModelTable  $modelTable
     * @return Page
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function show(Page $page, Card $card, ModelInfoTable $modelInfoTable, ModelTable $modelTable) : Page
    {
        return $page->card(
            $card->model_info_table(
                $modelInfoTable->id(),
                $modelInfoTable->row('admin-shopify.code', 'code'),
                $modelInfoTable->row('admin-shopify.total_price', 'total_price'),
                $modelInfoTable->row('admin-shopify.discount', 'discount'),
                $modelInfoTable->row('admin-shopify.shipping', 'shipping'),
                $modelInfoTable->row('admin-shopify.payment_commission', 'payment_commission'),
                $modelInfoTable->row('admin-shopify.details', 'details')->to_json,
                $modelInfoTable->row('admin-shopify.status', 'status'),
                $modelInfoTable->row('admin-shopify.user', 'user.email'),
                $modelInfoTable->row('admin-shopify.payment_method', 'paymentMethod.name'),
                $modelInfoTable->row('admin-shopify.country', 'country.name'),
                $modelInfoTable->row('admin-shopify.currency', 'currency.name'),
                $modelInfoTable->row('admin-shopify.delivery', 'delivery.name'),
                $modelInfoTable->at(),
            ),
        )->card(
            $card->title('admin-shopify.addresses')->info_type(),
            $card->model_table(
                $modelTable->model($this->model()->addresses()),
                $modelTable->id(),
                $modelTable->col('admin-shopify.city', 'city')->sort()->copied,
                $modelTable->col('admin-shopify.postcode', 'postcode')->sort()->copied,
                $modelTable->col('admin-shopify.address_line1', 'address_line1')->sort()->copied,
                $modelTable->col('admin-shopify.phone', 'phone')->sort()->copied,
                $modelTable->col('admin-shopify.email', 'email')->sort()->copied,
                $modelTable->col('admin-shopify.latitude_longitude', function (Address $address) {
                    return $address->latitude . ', ' . $address->longitude;
                })->sort()->copied,
                $modelTable->col('admin-shopify.active', 'active')->sort()->input_switcher,
                $modelTable->at(),
            ),
        )->card(
            $card->title('admin-shopify.items'),
            $card->model_table(
                $modelTable->model($this->model()->orderItems()),
                $modelTable->id(),
                $modelTable->col('admin-shopify.image', function (Product $product) {
                    return $product->images()->first()?->photo ?: '/vendor/admin-shopify/product-photo-no-available.png';
                })->avatar,
                $modelTable->col('admin-shopify.name', 'name')->sort(),
                $modelTable->col('admin-shopify.rating', 'rating')->rating_stars()->sort(),
                $modelTable->col('admin-shopify.views', 'views')->badge->sort(),
                $modelTable->col('admin-shopify.new', 'new')->input_switcher->sort(),
                $modelTable->col('admin-shopify.best_selling', 'best_selling')->input_switcher->sort(),
                $modelTable->col('admin-shopify.active', 'active')->input_switcher->sort(),
                $modelTable->at(),
            ),
        );
    }

}
