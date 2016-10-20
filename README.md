# SuiteCRM_Captcha
Captcha implementation for SuiteCRM based on securimage

SuiteCRM has a ReCaptcha implementation for the password reset mechanism.

This module verifies captchas agains the local captcha library securimage and also enforces a captcha check at login.

## Installing the module

 - Download the module from the repository
 - Download the Securimage library here (and consider a donation):
 https://www.phpcaptcha.org/download
 
 - Unpack the module
 - Descend into the directory/folder SuiteCRM_Captcha
 - Unpack the Securimage zip into the "include" directory/folder, you can omit the "audio" directory/folder
 - zip the contents in SuiteCRM_Captcha
 - Check that the resulting zip doesn't contain a parent directory SuiteCRM_Captcha: the file "manifest.php" should be in its root
 - go into SuiteCRM admin, Module Loader and upload the module
 
## Compatibility
The module has been tested on SuiteCRM version 7.7 onward
 
## Upgrade safety
The module is not upgrade safe as it needs to overwrite some core files. These are:

1. the following core files:
  - modules/Users/Authenticate.php
  - modules/Users/GeneratePassword.php
  - include/MVC/SugarApplication.php
  - modules/Users/login.tpl

2. the following theme files:
  - themes/Suite7/tpls/login.tpl
  - themes/SuiteR/tpls/login.tpl
  - themes/SuiteP/tpls/login.tpl
  - themes/SuiteP/css/style.css
  
In case of upgrading
 - First uninstall the module
 - perform the upgrade
 - check the module compatibility by checking the contents of the files above. The module can be made compatible against newer versions by using the captcha.diff file in the module file
 - After asserting its compatibility reinstall the captcha module
