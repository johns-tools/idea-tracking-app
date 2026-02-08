<?php

it('registers a user', function () {
    visit('/register')
       ->fill('name', 'John Robo')
       ->fill('email', 'john@example.com')
       ->fill('password', 'password123')
       ->fill('password_confirmation', 'password123')
       ->press('Create Account')
       ->assertPathIs('/');
});
