<?php

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('Sescolas'));
});



Breadcrumbs::for('escolas', function($trail, $escolas){
    $trail->parent('home');
    $trail->push($escolas->nome, route("SmuralE", ["eid" => "$escolas->id"]));
});



Breadcrumbs::for('turmas', function($trail, $turmas, $escolas){
    $trail->parent('escolas', $escolas);
    $trail->push($turmas->nome, route("visuturmas", ["eid" => "$escolas->id", "tid" => "$turmas->id"]));
});


Breadcrumbs::for('materias', function($trail, $materias, $turmas, $escolas){
    $trail->parent('turmas', $turmas, $escolas);
    $trail->push($materias->nome, route('showmaterias', ["mid" => $materias->id, "eid" => $escolas->id, "tid" => $turmas->id]));
});