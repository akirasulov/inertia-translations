<?php

use App\Lang\Lang;

it('can be an associated language label', function () {
    //enum EN label() English
    expect(Lang::from('en')->label())->toBe('English');
});
