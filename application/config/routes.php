<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'init';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* =======authentication=========*/
$route['auth'] = 'auth/index';
//$route['register'] = 'authentication/registration';
//$route['new_student'] = 'authentication/new_student_registration';
//$route['student'] = 'authentication/student_login_process';
//$route['home'] = 'authentication/home';
//$route['admin'] = 'authentication/admin';
//$route['homepage'] = 'authentication/homepage';
//$route['init']='authentication/init';

/*===============INIT================*/

$route['olevel']='init/olevel_page';
$route['alevel']='init/alevel_page';
$route['olevel_topics']='init/olevel_topics';
$route['alevel_topics']='init/alevel_topics';
$route['start-topic']='init/start_topic';
$route['olevel_pp']='init/olevel_pp';
$route['alevel_pp']='init/alevel_pp';
$route['login']='init/login';
$route['register']='init/register';

/*===========dashboard for students=========*/

$route['student_o_level_topics'] = 'dashboard/o_level_topics';
$route['student_a_level_topics'] = 'dashboard/a_level_topics';
$route['student_dashboard'] = 'dashboard/dashboard_loader';
$route['student_tips'] = 'dashboard/educational_tips';
$route['student_chat'] = 'dashboard/chat';
$route['student_my_topics'] = 'dashboard/my_topics';
$route['student_a_level_past_papers'] = 'dashboard/a_level_past_papers';
$route['student_o_level_past_papers'] = 'dashboard/o_level_past_papers';
$route['student_o_level_questions'] = 'dashboard/o_level_questions';
$route['student_a_level_questions'] = 'dashboard/o_level_questions';
$route['student_pages/(:any)'] = 'dashboard/load_pages/$1';
$route['start_btn'] = 'dashboard/topic_content';

/*================admin========================*/

$route['o_level_topics'] = 'admin/o_level_topics';
$route['a_level_topics'] = 'admin/a_level_topics';
$route['tips'] = 'admin/educational_tips';
$route['o_level_past_papers'] = 'admin/o_level_past_papers';
$route['a_level_past_papers'] = 'admin/a_level_past_papers';
$route['a_level_questions'] = 'admin/a_level_questions';
$route['o_level_questions'] = 'admin/o_level_questions';
$route['delete_topic/(:any)'] = 'topics/delete_topic/$1';
$route['level/(:any)'] = 'topics/add_topic_form/$1';
$route['pp_level/(:any)'] = 'past_papers/add_pp_form/$1';
$route['qn_level/(:any)'] = 'questions/add_qn_form/$1';
$route['edu_tips/(:any)'] = 'education_tips/add_tips/$1';

/*=======================================================*/



