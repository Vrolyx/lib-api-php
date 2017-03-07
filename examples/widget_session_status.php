<?php
/**
 * Retrieve the status of a widget for a session token which is read from the console
 *
 * This file is part of the Twizo php api
 *
 * (c) Twizo <info@twizo.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * File that was distributed with this source code.
 */
require_once(dirname(__FILE__) . '/util/Bootstrap.php');

use Twizo\Examples\Util\EntityFormatter;

$twizo = Twizo\Api\Twizo::getInstance(SECRET, API_HOST);
$widget = $twizo->getWidgetSession(readline('Session token: '), readline('Number: '));

EntityFormatter::dumpEntity($widget);
