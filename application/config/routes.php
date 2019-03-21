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
 //$route['admin/specialposts/create'] = 'specialpostcontroller/create';
 //pages routes
 $route['default_controller'] = 'pagescontroller/view';
  // biz pati special route
  $route['bizpatispecial'] = 'pagescontroller/view/bizpatispecial';
  $route['(:num)'] = 'specialpostscontroller/viewall/$i';
  $route[] = 'specialpostscontroller/viewall/$i';
  // $route['bizpatispecial/(:num)'] = 'pagescontroller/viewall/$i';
$route['admin'] = 'adminpages/pages';
//Post Routes
$route['admin/specialposts/search'] = 'specialpostscontroller/ajax_search';
$route['admin/specialposts/create'] = 'specialpostscontroller/create';
$route['admin/specialposts/view'] = 'specialpostscontroller/view';
$route['admin/specialposts/delete/(:num)'] = 'specialpostscontroller/delete/$i';
$route['admin/specialposts/edit/(:num)'] = 'specialpostscontroller/edit/$i';
$route['admin/specialposts/update'] = 'specialpostscontroller/update';
//User Routes
$route['admin/users/create'] = 'userscontroller/create'; 
$route['admin/users/view'] = 'userscontroller/view'; 
$route['admin/users/delete/(:num)'] = 'userscontroller/delete/$i'; 
$route['admin/users/edit/(:num)'] = 'userscontroller/edit/$i'; 
$route['admin/users/update'] = 'userscontroller/update'; 
 $route['(:any)'] = 'pagescontroller/view/$1';
 $route['news/create'] = 'newscontroller/create';

// $route['pages'] = ''
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
