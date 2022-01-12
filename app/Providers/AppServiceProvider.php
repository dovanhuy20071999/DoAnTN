<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\JsonResource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\User\UserRepositoryInterface::class,
            \App\Repositories\User\UserRepositoryEloquent::class,
        );
        $this->app->singleton(
            \App\Repositories\Essay\EssayRepositoryInterface::class,
            \App\Repositories\Essay\EssayRepositoryEloquent::class,
        );
        $this->app->singleton(
            \App\Repositories\Deadline\DeadlineRepositoryInterface::class,
            \App\Repositories\Deadline\DeadlineRepositoryEloquent::class,
        );
        $this->app->singleton(
            \App\Repositories\Criterion\CriterionRepositoryInterface::class,
            \App\Repositories\Criterion\CriterionRepositoryEloquent::class,
        );
        $this->app->singleton(
            \App\Repositories\Image\ImageRepositoryInterface::class,
            \App\Repositories\Image\ImageRepositoryEloquent::class,
        );
        $this->app->singleton(
            \App\Repositories\Level\LevelRepositoryInterface::class,
            \App\Repositories\Level\LevelRepositoryEloquent::class,
        );
        $this->app->singleton(
            \App\Repositories\Order\OrderRepositoryInterface::class,
            \App\Repositories\Order\OrderRepositoryEloquent::class,
        );
        $this->app->singleton(
            \App\Repositories\Rate\RateRepositoryInterface::class,
            \App\Repositories\Rate\RateRepositoryEloquent::class,
        );
        $this->app->singleton(
            \App\Repositories\Result\ResultRepositoryInterface::class,
            \App\Repositories\Result\ResultRepositoryEloquent::class,
        );
        $this->app->singleton(
            \App\Repositories\Type\TypeRepositoryInterface::class,
            \App\Repositories\Type\TypeRepositoryEloquent::class,
        );
        $this->app->singleton(
            \App\Repositories\Topic\TopicRepositoryInterface::class,
            \App\Repositories\Topic\TopicRepositoryEloquent::class,
        );
        $this->app->singleton(
            \App\Repositories\Test\TestRepositoryInterface::class,
            \App\Repositories\Test\TestRepositoryEloquent::class,
        );
        $this->app->singleton(
            \App\Repositories\Bank\BankRepositoryInterface::class,
            \App\Repositories\Bank\BankRepositoryEloquent::class,
        );
        $this->app->singleton(
            \App\Repositories\Teacher\TeacherRepositoryInterface::class,
            \App\Repositories\Teacher\TeacherRepositoryEloquent::class,
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
