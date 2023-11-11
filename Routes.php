<?php 

require '.\vendor\autoload.php';

use Wagner\Pi\Presentation\Router;
use Wagner\Pi\Application\Controller\HomeController;
use Wagner\Pi\Application\Controller\Note\NoteController;
use Wagner\Pi\Application\Controller\Sobre\SobreController;

Router::get('/', [HomeController::class, 'index']);
Router::get('/sobre', [SobreController::class, 'index']);

Router::post('/note/save' , [NoteController::class , 'store']);