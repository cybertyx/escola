<?php
$this->get('/adminEscola', 'admin\index\IndexController@index');

/**********  HOME   **********/
$this->get('/', 'site\HomeController@index')->name('home');

/**********  CONTATO   **********/
$this->get('/contato', 'site\ContatoController@index')->name('contato');

/**********  QUEM SOMOS   **********/
$this->get('/quemsomos', 'site\QuemSomosController@index')->name('quemsomos');


















Auth::routes();
