<?php

namespace Jiny\Hello;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $pakageName = "hello";

        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // 모듈: 뷰폴더 설정
        $this->loadViewsFrom(__DIR__.'/views', $pakageName);

        // 데이터베이스 마이그레이션 설정
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        // 환경설정파일
        $this->mergeConfigFrom(__DIR__.'/config/hello.php', $pakageName);

        // 번역
        $this->loadTranslationsFrom(__DIR__.'/translations', 'hello');

        //배포
        // php artisan vendor:publish
        $this->publishes([
            //환경설정
            // __DIR__.'/config/hello.php' => config_path('hello.php'),

            // view 리소스
            // __DIR__.'/views' => base_path('resources/views/vendor/Hello'),

            // 번역데이터
            // __DIR__.'/translations' => base_path('resources/lang/vendor/hello'),

            //asset
            // __DIR__.'/assets' => public_path('vendor/hello'),
        ]);

    }

    public function register()
    {

    }
}
