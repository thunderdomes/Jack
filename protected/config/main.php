<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				array('comment/list', 'pattern'=>'comment', 'verb'=>'GET'),
				array('comment/view', 'pattern'=>'comment/<id:\d+>', 'verb'=>'GET'),
				array('comment/update', 'pattern'=>'comment/<id:\d+>', 'verb'=>'PUT'),
				array('comment/delete', 'pattern'=>'comment/<id:\d+>', 'verb'=>'DELETE'),
				array('comment/create', 'pattern'=>'comment', 'verb'=>'POST'),
				 
				 array('sortComment/list', 'pattern'=>'sortComment', 'verb'=>'GET'),
				array('sortComment/view', 'pattern'=>'sortComment/<id:\d+>', 'verb'=>'GET'),
				array('sortComment/update', 'pattern'=>'sortComment/<id:\d+>', 'verb'=>'PUT'),
				array('sortComment/delete', 'pattern'=>'sortComment/<id:\d+>', 'verb'=>'DELETE'),
				array('sortComment/create', 'pattern'=>'sortComment', 'verb'=>'POST'),
			),
		),
		
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=kia',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);