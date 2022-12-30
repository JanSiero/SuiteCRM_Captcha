Captcha module

 - Installs a Captcha challenge on login and password reset
 - Uses the library securimage https://www.phpcaptcha.org/

 - overwrites the following core files:
	modules/Users/Authenticate.php
	modules/Users/GeneratePassword.php
	include/MVC/SugarApplication.php

 - overwrites the following theme files:
	themes/SuiteP/css/Dawn/style.css
	themes/SuiteP/css/Dusk/style.css
	themes/SuiteP/css/Day/style.css
	themes/SuiteP/css/Night/style.css
	themes/SuiteP/css/Noon/style.css

Compatible with SuiteCRM up to version 7.11.13 - please check the core files for changes - diff is packed in the module zip
