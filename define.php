<?php

//duong dan den thu muc chua ung dung
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));

//define application enviroment
defined('APPLICATION_EVN')
    || define('APPLICATION_EVN', (getenv('APPLICATION_EVN') ? getenv('APPLICATION_EVN') : 'developer'));

//nap duong dan den thu vien
set_include_path(implode(PATH_SEPARATOR, array(
    dirname(__FILE__).'/library',
    get_include_path(),
)));

//duong dan den thu muc public
define('PUBLIC_PATH', realpath(dirname(__FILE__) . '/public'));

//duong dan den thu muc template
define('TEMPLATE_PATH', PUBLIC_PATH . '/templates/default');
