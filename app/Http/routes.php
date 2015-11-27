<?php

Route::resource('cliente',        'ClienteController',        ['except' => ['create', 'edit']]);
Route::resource('funcionario',    'FuncionarioController',    ['except' => ['create', 'edit']]);
Route::resource('transportadora', 'TransportadoraController', ['except' => ['create', 'edit']]);
