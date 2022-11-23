<?php

namespace Tests\Feature;

use function Pest\Laravel\delete;
use function Pest\Laravel\get;
use function Pest\Laravel\put;

it('testanto rota de listagem', function() {
    get('/api/address')->assertStatus(200);
 
});

// it('testanto rota de criação', function() {
//     get('/api/address')->assertStatus(200);
 
// });

it('testanto rota de update', function() {
    put('/api/address/3')->assertStatus(200);
 
});

it('testanto rota de delete', function() {
    delete('/api/address/3')->assertStatus(200);
 
});
