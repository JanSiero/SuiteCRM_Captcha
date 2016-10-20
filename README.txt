Captcha module

 - Installs a Captcha challenge on login and password reset
 - Uses the library securimage https://www.phpcaptcha.org/

 - overwrites the following core files:
	modules/Users/Authenticate.php
	modules/Users/GeneratePassword.php
	include/MVC/SugarApplication.php
	modules/Users/login.tpl

 - overwrites the following theme files:
	themes/Suite7/tpls/login.tpl
	themes/SuiteR/tpls/login.tpl
	themes/SuiteP/tpls/login.tpl
	themes/SuiteP/css/style.css

Compatible with SuiteCRM up to version 7.7.1 - please check the core files for changes - diff is packed in the module zip
