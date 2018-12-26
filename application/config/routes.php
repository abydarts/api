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
$route['default_controller'] = 'auth/c_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/
$route['auth/OAuth/users/(:num)'] = 'auth/OAuth/users/user_id/$1'; // Example 3
$route['auth/OAuth/usersfb/(:any)'] = 'auth/OAuth/usersfb/oauth_uid/$1'; // Example 4
$route['book/Books/detailBook/(:any)/(:any)'] = 'book/Books/detailBook/book_id/$1/chapter/$2'; // Example 5
$route['book/Books/detailBook/(:any)'] = 'book/Bopooks/detailBook/book_id/$1'; // Example 5
$route['timeline/Home/index/(:any)'] = 'timeline/Home/index/count/$1'; // Example 6
$route['auth/OAuth/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'auth/OAuth/users/user_id/$1/format/$3$4';
$route['payment/Payment/BabooPay'] = 'payment/Midtrans_Payment/BabooPay_post';
$route['payment/Payment/TransPay'] = 'payment/Midtrans_Payment/MidPay';
$route['payment/Payment/UpdateTrans'] = 'payment/Midtrans_Payment/updateTrans';
$route['payment/Payment/pendingTrans'] = 'payment/Midtrans_Payment/pendingTrans';
$route['payment/Payment/reminderPay'] = 'payment/Midtrans_Payment/reminderPay';
