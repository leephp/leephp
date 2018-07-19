<?php
/**
 * 定义一些常量
 */
define('DS', DIRECTORY_SEPARATOR);
define('LEEPHP', realpath(__DIR__) . DS);
define('ROOT', realpath(LEEPHP . '..' . DS) . DS);
define('APPS', ROOT . 'apps' . DS);






var_dump(DS, LEEPHP, ROOT);