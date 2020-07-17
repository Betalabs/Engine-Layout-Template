<?php
/*
|--------------------------------------------------------------------------
| Custom routes for testing components
|--------------------------------------------------------------------------
|
| Here you may specify custom routes to access your template views mocking
| data providers instances in aliases.
|
*/
\Illuminate\Support\Facades\Route::get(
    '/mocks/my-custom-component',
    function () {
        return view('my-custom-component')
            ->with('logo_src', 'https://via.placeholder.com/1')
            ->with('blog_url', 'http://blog.betalabs.com.br/')
            ->with('categories', \EngineLayoutBase\App\Facades\DataProviders::categories());
    }
);