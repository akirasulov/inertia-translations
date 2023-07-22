<?php

use App\Http\Middleware\SetLanguage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Tests\TestCase;

uses(TestCase::class);

it('sets the chosen locale', function () {

    session()->put('language', 'tj');

    (new SetLanguage())->handle(new Request(), function ($request) {

        expect(app()->getLocale())->toBe('tj');

        return new Response();

    });
});
