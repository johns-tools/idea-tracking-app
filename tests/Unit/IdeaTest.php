<?php

use App\Models\Idea;
use App\Models\User;

test('it belongs to a user', function () {

    $idea = Idea::factory()->create();

    expect($idea->user)->toBeInstanceOf(User::class);

});

test('it can have steps', function () {

    $idea = Idea::factory()->create();
    expect($idea->step)->toBeEmpty();

    $idea->step()->create([
        'description' => 'First step',
    ]);

    expect($idea->fresh()->step)->toHaveCount(1);
});
