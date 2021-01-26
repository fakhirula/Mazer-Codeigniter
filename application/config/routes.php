<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/Dashboard/index';
$route['admin/application_chat'] = 'admin/Dashboard/application_chat';
$route['admin/application_checkout'] = 'admin/Dashboard/application_checkout';
$route['admin/application_email'] = 'admin/Dashboard/email';
$route['admin/application_gallery'] = 'admin/Dashboard/gallery';

$route['admin/auth_forgot_password'] = 'admin/Dashboard/auth_forgot_password';
$route['admin/auth_login'] = 'admin/Dashboard/auth_login';
$route['admin/auth_register'] = 'admin/Dashboard/auth_register';

$route['admin/component_alert'] = 'admin/Dashboard/component_alert';
$route['admin/component_badge'] = 'admin/Dashboard/component_badge';
$route['admin/component_breadcrumb'] = 'admin/Dashboard/component_breadcrumb';
$route['admin/component_button'] = 'admin/Dashboard/component_button';
$route['admin/component_card'] = 'admin/Dashboard/component_card';
$route['admin/component_carousel'] = 'admin/Dashboard/component_carousel';
$route['admin/component_dropdown'] = 'admin/Dashboard/component_dropdown';
$route['admin/component_list_group'] = 'admin/Dashboard/component_list_group';
$route['admin/component_modal'] = 'admin/Dashboard/component_modal';
$route['admin/component_navs'] = 'admin/Dashboard/component_navs';
$route['admin/component_pagination'] = 'admin/Dashboard/component_pagination';
$route['admin/component_progress'] = 'admin/Dashboard/component_progress';
$route['admin/component_spinner'] = 'admin/Dashboard/component_spinner';
$route['admin/component_tooltip'] = 'admin/Dashboard/component_tooltip';


