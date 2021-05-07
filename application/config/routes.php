<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route["insertuser"]='users/insertUser';
$route["updateuser"]='users/updateUser';
$route["deleteuser"]='users/deleteUser';


$route['default_controller'] = 'users';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
