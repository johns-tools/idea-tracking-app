<?php

it('attempting a login with a specific user', function ()
{

    visit('/login')
       ->fill('email', 'john@example.com')
       ->fill('password', 'password123')
       ->press('@login-button')
       ->assertPathIs('/');

    // $this->assertAuthenticated();

});
