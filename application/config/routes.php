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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'HomeController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['tat-ca-san-pham']['GET']='HomeController/allProduct';
$route['sanpham/(:any)']['GET']='HomeController/detailProd/$1';
$route['san-pham-the-loai/(:any)']['GET']='HomeController/ProductByCategory/$1';
// Cart
$route['cart']['GET']='CartController/index';
$route['add_to_cart']['POST']='CartController/addCart';
$route['del_all_cart']['GET']='CartController/delete_all_cart';
$route['del-item/(:any)']['GET']='CartController/delete_item/$1';
$route['update-Cart']['POST']='CartController/update_cart';

// Checkout
$route['order']['GET']='CheckoutController/order';
$route['checkout']['GET']='CheckoutController/checkout';
$route['checkout_payment']['POST']='CheckoutController/payment';
// Dang ky
$route['dangky']['GET']='loginController/dangky';
$route['register_user']['POST']='loginController/register';
//login
$route['login']['GET']='loginController/index';
$route['login_user']['POST']='loginController/login';
$route['logout']['GET']='loginController/logout';
// Admin
$route['Admin']['GET']='AdminController/dashboard';
// Admin Thể loại
$route['Admin/category']['GET']='CategoryController/list';
$route['Admin/category/create']['GET']='CategoryController/create';
$route['Admin/category/insert']['POST']='CategoryController/insert';
$route['Admin/category/delete/(:any)']['GET']='CategoryController/delete/$1';
$route['Admin/category/edit/(:any)']['GET']='CategoryController/edit/$1';
$route['Admin/category/update/(:any)']['POST']='CategoryController/update/$1';
// Admin SAN PHAM
$route['Admin/product']['GET']='ProductController/list';
$route['Admin/product/create']['GET']='ProductController/create';
$route['Admin/product/insert']['POST']='ProductController/insert';
$route['Admin/product/edit/(:any)']['GET']='ProductController/edit/$1';
$route['Admin/product/update/(:any)']['POST']='ProductController/update/$1';
$route['Admin/product/delete/(:any)']['GET']='ProductController/delete/$1';
// Order
$route['Admin/order']['GET']='OrderController/list';
$route['Admin/order/detail/(:any)']['GET']='OrderController/detail/$1';

// Mail
$route['test_mail']='MailController/send_mail';
