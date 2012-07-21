<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Kotwig config array
 *
 * @package Kotwig module
 * @author  Ivan Sergeev <ivan.n.sergeev@gmail.com>
 */

return array(
    'cache'   => APPPATH . 'cache' . DIRECTORY_SEPARATOR . 'twig',
    'charset' => Kohana::$charset,
    'auto_reload' => TRUE,
	'template_ext' => 'html',
);
