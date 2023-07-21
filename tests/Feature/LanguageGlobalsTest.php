<?php

use Inertia\Testing\AssertableInertia;

it('containt the current selected language', function () {
    app()->setLocale('ru');
    $this->get('/')
        ->assertInertia(function (AssertableInertia $page) {
            $page->where('language', 'ru');
        });
});

it('contains a list of availiable languages', function () {
    $this->get('/')
        ->assertInertia(function (AssertableInertia $page) {
            $page->where('languages.0.value', 'en')
                ->where('languages.0.label', 'English');
        });
});
