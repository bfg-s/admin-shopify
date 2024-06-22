<?php

namespace Admin\Extend\AdminShopify\Controllers;

use Admin\Delegates\Card;
use Admin\Delegates\Form;
use Admin\Delegates\ModelInfoTable;
use Admin\Delegates\ModelTable;
use Admin\Delegates\SearchForm;
use Admin\Delegates\Tab;
use Admin\Extend\AdminShopify\Models\Country;
use Admin\Extend\AdminShopify\Models\Shop;
use Admin\Page;
use App\Admin\Controllers\Controller;

/**
 * ShopsController Class
 * @package App\Admin\Controllers
 */
class ShopsController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = Shop::class;

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
                $searchForm->input('slug', 'admin-shopify.slug'),
                $searchForm->input('name', 'admin-shopify.name'),
                $searchForm->input('description', 'admin-shopify.description'),
                $searchForm->select('country_id', 'admin-shopify.country')
                    ->load(Country::class),
                $searchForm->select('user_id', 'admin-shopify.user')
                    ->load(config('auth.providers.users.model'), '{id}) {email}'),
                $searchForm->at(),
            ),
            $card->statisticBody(
                $modelTable->col('admin-shopify.photo', 'photo')->sort()->avatar,
                $modelTable->col('admin-shopify.name', 'name')->sort()->copied,
                $modelTable->col('admin-shopify.country', 'country.name')->sort('country_id'),
                $modelTable->col('admin-shopify.user', 'user.email')->sort('user_id')->copied,
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
                    $tab->select('country_id', 'admin-shopify.country')
                        ->load(Country::class)
                        ->required(),
                    $tab->select('user_id', 'admin-shopify.user')
                        ->load(config('auth.providers.users.model'), '{id}) {email}'),
                    $tab->image('photo', 'admin-shopify.photo'),
                    $tab->lang()
                        ->input('name', 'admin-shopify.name')
                        ->required()
                        ->duplication_how_slug('#input_seo_slug')
                        ->duplication('#input_seo_title')
                        ->vertical(),
                    $tab->lang()
                        ->textarea('description', 'admin-shopify.description')
                        ->vertical(),
                    $tab->switcher('active', 'admin-shopify.active'),
                ),
                $form->tab(
                    $tab->title('Work Time')->icon_clock(),
                    $tab->time('work_weekdays_from', 'admin-shopify.work_weekdays_from')->default('09:00'),
                    $tab->time('work_weekdays_to', 'admin-shopify.work_weekdays_to')->default('18:00'),
                    $tab->time('work_weekends_from', 'admin-shopify.work_weekends_from')->default('09:00'),
                    $tab->time('work_weekends_to', 'admin-shopify.work_weekends_to')->default('18:00'),
                ),
                $form->tab(
                    $tab->title('Work Days')->icon_calendar(),
                    $tab->switcher('work_in_monday', 'admin-shopify.work_in_monday')->default(1),
                    $tab->switcher('work_in_tuesday', 'admin-shopify.work_in_tuesday')->default(1),
                    $tab->switcher('work_in_wednesday', 'admin-shopify.work_in_wednesday')->default(1),
                    $tab->switcher('work_in_thursday', 'admin-shopify.work_in_thursday')->default(1),
                    $tab->switcher('work_in_friday', 'admin-shopify.work_in_friday')->default(1),
                    $tab->switcher('work_in_saturday', 'admin-shopify.work_in_saturday')->default(1),
                    $tab->switcher('work_in_sunday', 'admin-shopify.work_in_sunday')->default(1),
                ),
                $form->tabAddresses(),
                $form->tabSeo(),
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
                $modelInfoTable->row('admin-shopify.photo', 'photo')->avatar,
                $modelInfoTable->row('admin-shopify.slug', 'slug'),
                $modelInfoTable->row('admin-shopify.name', 'name'),
                $modelInfoTable->row('admin-shopify.description', 'description'),
                $modelInfoTable->row('admin-shopify.country', 'country.name'),
                $modelInfoTable->row('admin-shopify.work_weekdays_from', 'work_weekdays_from'),
                $modelInfoTable->row('admin-shopify.work_weekdays_to', 'work_weekdays_to'),
                $modelInfoTable->row('admin-shopify.work_weekends_from', 'work_weekends_from'),
                $modelInfoTable->row('admin-shopify.work_weekends_to', 'work_weekends_to'),
                $modelInfoTable->row('admin-shopify.work_in_monday', 'work_in_monday')->yes_no,
                $modelInfoTable->row('admin-shopify.work_in_tuesday', 'work_in_tuesday')->yes_no,
                $modelInfoTable->row('admin-shopify.work_in_wednesday', 'work_in_wednesday')->yes_no,
                $modelInfoTable->row('admin-shopify.work_in_thursday', 'work_in_thursday')->yes_no,
                $modelInfoTable->row('admin-shopify.work_in_friday', 'work_in_friday')->yes_no,
                $modelInfoTable->row('admin-shopify.work_in_saturday', 'work_in_saturday')->yes_no,
                $modelInfoTable->row('admin-shopify.work_in_sunday', 'work_in_sunday')->yes_no,
                $modelInfoTable->row('admin-shopify.active', 'active')->input_switcher,
                $modelInfoTable->row('admin-shopify.user', 'user.email'),
                $modelInfoTable->at(),
            ),
        );
    }

}
