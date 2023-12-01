# SuiteCRM_Captcha
Captcha implementation for SuiteCRM based on securimage

SuiteCRM has a ReCaptcha implementation for the password reset mechanism.

This module verifies captchas agains the local captcha library securimage and also enforces a captcha check at login.

## Installing the module

 - Download the module from the repository
 - Download the Securimage library here: https://github.com/dapphp/securimage
 - Unpack the module
 - Descend into the directory/folder SuiteCRM_Captcha
 - Unpack the Securimage zip into the "include" directory/folder, you can omit the "audio" directory/folder
 - zip the contents in SuiteCRM_Captcha
 - Check that the resulting zip doesn't contain a parent directory SuiteCRM_Captcha: the file "manifest.php" should be in its root
 - go into SuiteCRM admin, Module Loader and upload the module
 
## Compatibility
The module has been tested on SuiteCRM version to 7.14.2
 
## Upgrade safety
The module is not upgrade safe as it needs to overwrite some core files. These are:

1. the following core files:
  - modules/Users/Authenticate.php
  - modules/Users/GeneratePassword.php
  - include/MVC/SugarApplication.php

2. the following generated css files:
  - themes/SuiteP/css/Dawn/style.css
  - themes/SuiteP/css/Day/style.css
  - themes/SuiteP/css/Night/style.css
  - themes/SuiteP/css/Dusk/style.css
  - themes/SuiteP/css/Noon/style.css
  
In case of upgrading
 - First uninstall the module
 - perform the upgrade
 - check the module compatibility by checking the contents of the files above. The module can be made compatible against newer versions by using the captcha.diff file in the module file except for the style.css files which are a result of sass compilation
 - After asserting its compatibility reinstall the captcha module
