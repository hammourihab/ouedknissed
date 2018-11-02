<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

/**
 * Loading DotEnv in a pre_system hook 
 */


$hook['pre_system'] = function () {
    $dotenv = new Dotenv\Dotenv(BASEPATH . '../');
    $dotenv->load();
};
