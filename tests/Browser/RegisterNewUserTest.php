<?php

it('Registers a user', function () {
    visit('/register')
       ->type('name', 'John Robo')
       ->type('email', 'john@example.com')
       ->type('password', 'password123')
       ->type('password_confirmation', 'password123')
       ->press('Create Account')
       ->assertPathIs('/');
});
