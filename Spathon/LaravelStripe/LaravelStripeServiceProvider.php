<?php

namespace Spathon\LaravelStripe;

use Stripe;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class LaravelStripeServiceProvider extends ServiceProvider
{

  /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
      Stripe::setApiKey(Config::get('services.stripe.secret'));
    }
}
