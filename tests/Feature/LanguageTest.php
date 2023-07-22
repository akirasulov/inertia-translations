<?php

it('sets language correctly', function () {

    $response = $this->post('/language', [
        'language' => $language = 'en',
    ]);

    $response
        ->assertSessionHas('language', $language)
        ->assertStatus(302);
});

it('sets the default language if the chosen language is invalid', function () {

    $response = $this->post('/language', [
        'language' => 'uz',
    ]);

    $response
        ->assertSessionHas('language', config('app.locale'))
        ->assertStatus(302);
});
