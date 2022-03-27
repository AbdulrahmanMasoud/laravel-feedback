<?php

namespace TheAMasoud\LaravelFeedback\Providers;

use Illuminate\Support\ServiceProvider;

class FeedbackServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/feedback.php' => config_path('feedback.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../../database/migrations' => database_path('migrations'),
        ], 'migrations');
    }
}
