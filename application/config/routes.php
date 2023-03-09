<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['posts/create'] = 'posts/create';
// $route['(posts/:any)'] = 'posts/view/$slug';
$route['posts/:any'] = 'posts/index';
// $route['(:any)'] = 'pages/view';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

?>