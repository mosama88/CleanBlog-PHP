<?php



define("MAIN_PATH", dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
define("URL", "http://localhost:8080/CleanBlog/");



require_once MAIN_PATH . 'App/request.php';
require_once MAIN_PATH . 'App/response.php';
require_once MAIN_PATH . 'App/session.php';
require_once MAIN_PATH . 'App/db.php';
require_once MAIN_PATH . 'App/validation.php';
