<?php

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('Sescolas'));
});



Breadcrumbs::for('escolas', function($trail, $escolas){
    $trail->parent('home');
    $trail->push($escolas->nome, route("SmuralE", ["eid" => "$escolas->id"]));
});