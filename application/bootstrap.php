<?
// cfg
require_once 'config.php';

// подключаем файлы ядра
require_once 'core/database.php';
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';

require_once 'core/route.php';
Route::start(); // запускаем маршрутизатор