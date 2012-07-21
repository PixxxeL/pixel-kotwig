<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Include Twig Autoloader
 *
 * @package Kotwig module
 * @author  Ivan Sergeev <ivan.n.sergeev@gmail.com>
 */

require_once Kohana::find_file('vendor', 'lib/Twig/Autoloader');
Twig_Autoloader::register();
