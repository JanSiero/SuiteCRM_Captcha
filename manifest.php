<?php
$manifest = array(
		'acceptable_sugar_versions' => array (),
		'acceptable_sugar_flavors' => array(),

		'name' => 'Captcha',
		'description' => 'Installs Captcha on login screen',
		'author' => 'Siero CRM Consultancy',
		'published_date' => '2021-05-29',
		'version' => '1.12',
		'type' => 'module',
		'icon' => '',
		'is_uninstallable' => 'Yes',
		);

$installdefs = array(
		'id'=> 'siero_captcha',
		'copy' => array(
			array(
				'from'=> '<basepath>/themes/SuiteP/login.tpl',
				'to'=> 'custom/themes/SuiteP/tpls/login.tpl'
			     ),
			array(
				'from'=> '<basepath>/themes/SuiteP/login.scss',
				'to'=> 'custom/themes/SuiteP/css/suitep-base/login.scss'
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
			array(
				'from'=> '<basepath>/themes/SuiteP/Dawn/style.css',
				'to'=> 'themes/SuiteP/css/Dawn/style.css'
			     ),
			array(
				'from'=> '<basepath>/themes/SuiteP/Dusk/style.css',
				'to'=> 'themes/SuiteP/css/Dusk/style.css'
			     ),
			array(
				'from'=> '<basepath>/themes/SuiteP/Night/style.css',
				'to'=> 'themes/SuiteP/css/Night/style.css'
			     ),
			array(
				'from'=> '<basepath>/themes/SuiteP/Day/style.css',
				'to'=> 'themes/SuiteP/css/Day/style.css'
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
