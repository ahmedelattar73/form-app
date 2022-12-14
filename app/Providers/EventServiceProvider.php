<?php

namespace App\Providers;

use App\Listeners\TraceRequest;
use App\Modules\Form\Events\FormCreated;
use App\Modules\Form\Events\QuestionnaireSubmitted;
use App\Modules\Form\Listeners\PublishDenormalizedForm;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        FormCreated::class => [
            PublishDenormalizedForm::class,
        ],
        QuestionnaireSubmitted::class => [
            PublishDenormalizedForm::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
