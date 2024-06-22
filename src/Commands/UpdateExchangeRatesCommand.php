<?php

namespace Admin\Extend\AdminShopify\Commands;

use Admin\Extend\AdminShopify\Models\Currency;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Throwable;

class UpdateExchangeRatesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:exchange-rates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update exchange rates for all currencies.';

    /**
     * Execute the console command.
     * @link https://publicapis.io/exchange-rate-api
     * @throws Throwable
     */
    public function handle()
    {

//        if (! Currency::count()) {
//
//            $detailRequest = \Http::get(
//                "https://v6.exchangerate-api.com/v6/$key/codes"
//            );
//            $supportedCodes = $detailRequest->json('supported_codes');
//            if ($supportedCodes) {
//                foreach ($supportedCodes as $code) {
//                    Currency::create([
//                        'code' => $code[0],
//                        'name' => $code[1],
//                    ]);
//            }
//        }

        $ratesResult = \Http::get(
            "https://api.exchangerate-api.com/v4/latest/USD"
        );
        $rates = $ratesResult->json('rates');

        if ($rates) {
            DB::transaction(function () use ($rates) {
                foreach ($rates as $code => $rate) {
                    $currency = Currency::where('code', $code)->first();
                    $currency?->update([
                        'exchange_rate' => $rate,
                    ]);
                }
            });
        }
    }
}
