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
$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dashboard'] = 'admin/admin';

//tickets routes
$route['tickets'] = 'admin/tickets';
$route['createtickets'] = 'admin/tickets/create';
$route['replytickets'] = 'admin/tickets/reply';
$route['changeticket/(:any)'] = 'admin/tickets/change/$1';
$route['viewticket/(:any)'] = 'admin/tickets/view/$1';

//status routes
$route['status'] = 'admin/status';
$route['adminstatus'] = 'admin/status/adminstatus';
$route['replystatus'] = 'admin/status/reply';
$route['statusreport'] = 'admin/status/statusreport';
$route['changestatus/(:any)'] = 'admin/status/change/$1';
$route['viewstatus/(:any)'] = 'admin/status/viewstatus/$1';

//department routes
$route['departments'] = 'admin/departments';
$route['createdepartment'] = 'admin/departments/create';
$route['editdepartment/(:any)'] = 'admin/departments/edit/$1';
$route['deletedepartment/(:any)'] = 'admin/departments/delete/$1';

//users routes
$route['users'] = 'admin/users';
$route['createuser'] = 'admin/users/create';
$route['edituser/(:any)'] = 'admin/users/edit/$1';
$route['deleteuser/(:any)'] = 'admin/users/delete/$1';

//user group routes
$route['usergroup'] = 'admin/usergroups';
$route['createusergroup'] = 'admin/usergroups/create';
$route['editusergroup/(:any)'] = 'admin/usergroups/edit/$1';
$route['deleteusergroup/(:any)'] = 'admin/usergroups/edit/$1';

//Categories routes
$route['categories'] = 'admin/categories';
$route['createcategory'] = 'admin/categories/create';
$route['editcategory/(:any)'] = 'admin/categories/edit/$1';
$route['deletecategory/(:any)'] = 'admin/categories/delete/$1';

//Trails routes
$route['ticktrails'] = 'admin/trails';
