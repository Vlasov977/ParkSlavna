<?php

namespace App\Providers;

use App\Album;
use App\Number;
use App\Post;
use App\Photo;
use App\Slider;
use App\Review;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('partials.thubnails', function ($view){
            $view->with('photos', Photo::thubnails_photos());
        });

        view()->composer('partials.latest_publications', function ($view){
            $view->with('posts', Post::thubnails_posts());
        });

        view()->composer('partials.photo_report', function ($view){
            $view->with('photos', Album::thubnails_albums());
        });

        view()->composer('partials.reviews', function ($view){
            $view->with('reviews', Review::thubnails_reviews());
        });

        view()->composer('partials.intro', function ($view){
            $view->with('sliders', Slider::thubnails_slider());
        });

        view()->composer('partials.reservation', function ($view){
            $view->with('numbers', Number::reservation());
        });
    }
}
