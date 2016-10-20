<?php
$manifest = array(
		'acceptable_sugar_versions' => array (),
		'acceptable_sugar_flavors' => array(),

		'name' => 'Captcha',
		'description' => 'Installs Captcha on login screen',
		'author' => 'Siero CRM Consultancy',
		'published_date' => '2016-09-07',
		'version' => '1.00',
		'type' => 'module',
		'icon' => '',
		'is_uninstallable' => 'Yes',
		);

$installdefs = array(
		'id'=> 'siero_captcha',
		'copy' => array(
			array(
				'from'=> '<basepath>/themes/Suite7/login.tpl',
				'to'=> 'themes/Suite7/tpls/login.tpl'
			     ),
			array(
				'from'=> '<basepath>/themes/SuiteR/login.tpl',
				'to'=> 'themes/SuiteR/tpls/login.tpl'
			     ),
			array(
				'from'=> '<basepath>/themes/SuiteP/login.tpl',
				'to'=> 'themes/SuiteP/tpls/login.tpl'
			     ),
			array(
				'from'=> '<basepath>/themes/SuiteP/style.css',
				'to'=> 'themes/SuiteP/css/style.css'
			     ),
			array(
				'from'=> '<basepath>/SugarModules/Users/login.tpl',
				'to'=> 'modules/Users/login.tpl'
			     ),
			array(
				'from'=> '<basepath>/SugarModules/Users/Authenticate.php',
				'to'=> 'modules/Users/Authenticate.php'
			     ),
			array(
				'from'=> '<basepath>/SugarModules/Users/GeneratePassword.php',
				'to'=> 'modules/Users/GeneratePassword.php'
			     ),
			array(
				'from'=> '<basepath>/include/SugarApplication.php',
				'to'=> 'include/MVC/SugarApplication.php'
			     ),
			array(
				'from'=> '<basepath>/include/securimage',
				'to'=> 'custom/include/securimage'
			     ),
			),
		'language' => array (
			array (
				'from' => '<basepath>/Extension/Users/en_us.lang.php',
				'to_module' => 'Users',
				'language' => 'en_us',
			      ),
			array (
				'from' => '<basepath>/Extension/Users/de_de.lang.php',
				'to_module' => 'Users',
				'language' => 'de_de',
			      ),
			),
		'entrypoints' => array (
			array(
				'from' => '<basepath>/Extension/application/Entrypoint_Captcha.php'
			)
		),
	);
