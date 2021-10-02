<?php


use Illuminate\Support\Facades\Route;


//Dobavi
Route::get('/akademske-godine', 'AkademskaGodinaController@akademskeGodine');


//Dodaj
Route::get('/dodaj-godinu/{oznaka}/{prva_god}/{druga_god}','AkademskaGodinaController@dodajAkademskuGodinu');

//Izbrisi
Route::get('/izbrisi-godinu/{god_1}/{god_2}', 'AkademskaGodinaController@izbrisiGodinu');
