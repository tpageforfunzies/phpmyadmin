<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */

/**
 * Handles server variables page.
 *
 * @package PhpMyAdmin
 */

namespace PMA;

use PhpMyAdmin\Controllers\Server\ServerVariablesController;
use PhpMyAdmin\Response;

require_once 'libraries/common.inc.php';

$container = libraries\di\Container::getDefaultContainer();
$container->factory(
    'PhpMyAdmin\Controllers\Server\ServerVariablesController'
);
$container->alias(
    'ServerVariablesController',
    'PhpMyAdmin\Controllers\Server\ServerVariablesController'
);
$container->set('PhpMyAdmin\Response', Response::getInstance());
$container->alias('response', 'PhpMyAdmin\Response');

/** @var ServerVariablesController $controller */
$controller = $container->get(
    'ServerVariablesController', array()
);
$controller->indexAction();
