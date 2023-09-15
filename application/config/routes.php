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

$route['default_controller'] = "home/index";
$route['404_override'] = 'error_404';
$route['translate_uri_dashes'] = FALSE;


/*********** USER DEFINED ROUTES *******************/

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";
$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['deleteUser'] = "user/deleteUser";

$route['cms_listing'] = 'cms/cms_listing';
$route['cms_listing/(:num)'] = 'cms/cms_listing/$1';
$route['addcms'] = 'cms/addcms';
$route['addcmsConfig'] = 'cms/addcmsConfig';
$route['editcms'] = 'cms/editcms';
$route['editcms/(:num)'] = 'cms/editcms/$1';
$route['editcmsConfig'] = 'cms/editcmsConfig';
$route['deletecms/(:num)'] = 'cms/deletecms/$1';

$route['banner_listing'] = 'banner/banner_listing';
$route['banner_listing/(:num)'] = 'banner/banner_listing/$1';
$route['addbanner'] = 'banner/addbanner';
$route['addbannerConfig'] = 'banner/addbannerConfig';
$route['editbanner'] = 'banner/editbanner';
$route['editbanner/(:num)'] = 'banner/editbanner/$1';
$route['editbannerConfig'] = 'banner/editbannerConfig';
$route['deletebanner/(:num)'] = 'banner/deletebanner/$1';

$route['contact/(:num)'] = "user/contact/$1";
$route['editContactConfig'] = "user/editContactConfig";



$route['profile'] = "user/profile";
$route['profile/(:any)'] = "user/profile/$1";
$route['profileUpdate'] = "user/profileUpdate";
$route['profileUpdate/(:any)'] = "user/profileUpdate/$1";


// $route['service_listing'] = 'service/service_listing';



// ******** Front Section ******** //
$route['home'] = "home/index";
