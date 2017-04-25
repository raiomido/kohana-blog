<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-04-20 01:51:00 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\xampp\htdocs\blog\system\classes\Kohana\Cookie.php:67
2017-04-20 01:51:00 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XSRF-TOKEN', NULL)
#1 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('XSRF-TOKEN')
#2 C:\xampp\htdocs\blog\index.php(117): Kohana_Request::factory('/', Array, false)
#3 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\Cookie.php:67
2017-04-20 15:26:54 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:26:54 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:28:20 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:28:20 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:28:58 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:28:58 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:28:59 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:28:59 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:30:38 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:30:38 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:31:20 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:31:20 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:31:21 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:31:21 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:31:21 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:31:21 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:31:21 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:31:21 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:33:18 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:33:18 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:33:20 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:33:20 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:34:42 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:34:42 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:37:28 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:37:28 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:37:29 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:37:29 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:37:30 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:37:30 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 15:38:14 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_View::bind_global(), called in C:\xampp\htdocs\blog\application\classes\Controller\blog.php on line 22 and defined ~ SYSPATH\classes\Kohana\View.php [ 120 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:120
2017-04-20 15:38:14 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(120): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 120, Array)
#1 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(22): Kohana_View::bind_global('index')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:120
2017-04-20 16:41:45 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 692 ] in file:line
2017-04-20 16:41:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 16:41:54 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\config\database.php [ 1 ] in file:line
2017-04-20 16:41:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 16:42:05 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 692 ] in file:line
2017-04-20 16:42:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 16:43:03 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\config\database.php [ 1 ] in file:line
2017-04-20 16:43:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 16:44:32 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 692 ] in file:line
2017-04-20 16:44:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 16:55:51 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 692 ] in file:line
2017-04-20 16:55:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 16:59:02 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 16:59:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 16:59:03 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 16:59:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:15 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:16 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:17 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:17 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:18 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:38 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:40 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:50 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:51 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:51 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:53 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:53 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:53 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:54 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:54 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:55 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:55 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:00:55 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:00:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:01:19 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:01:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:01:21 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:01:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:01:47 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:01:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:02:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\classes\Controller\blog.php [ 19 ] in C:\xampp\htdocs\blog\application\classes\Controller\blog.php:19
2017-04-20 17:02:06 --- DEBUG: #0 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\blog\application\classes\Controller\blog.php:19
2017-04-20 17:02:15 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:02:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:02:28 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:02:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:02:42 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:02:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:03:20 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:03:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:03:40 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:03:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:03:41 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:03:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:03:51 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:03:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:04:40 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:04:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:04:56 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:04:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:04:57 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:04:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:04:57 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:04:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:04:57 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:04:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:04:58 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:04:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:04:58 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:04:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:05:25 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:05:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:05:26 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:05:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:10:02 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 17:10:02 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-20 17:11:30 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:11:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:11:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:11:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:12:08 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:12:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:12:09 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:12:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:12:24 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:12:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:13:00 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:13:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:22:12 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:22:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:23:32 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:27:43 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:27:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:27:44 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:27:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:27:45 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:27:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:27:55 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:27:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:27:57 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:27:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:27:59 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:27:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:31:07 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:31:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:31:23 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:31:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:31:39 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:31:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:31:40 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:31:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:31:40 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:31:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:31:41 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:31:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:31:41 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:31:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:31:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:31:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:34:49 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:34:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:35:05 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:35:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:35:20 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:35:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:35:35 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:35:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:36:03 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:36:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:40:00 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:40:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:40:01 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:40:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:40:02 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:40:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:40:02 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:40:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:40:02 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:40:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:40:03 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:40:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:40:03 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:40:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:40:30 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:40:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:41:29 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:41:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:48:08 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:48:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:49:33 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:49:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:49:34 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:49:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:49:35 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:49:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:49:35 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:49:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:49:36 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:49:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:49:36 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:49:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:50:19 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 17:50:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:54:06 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 17:54:06 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 17:54:25 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 17:54:25 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 17:54:27 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 17:54:27 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 17:54:28 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 17:54:28 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 17:58:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_Database_MySQL' not found ~ MODPATH\database\classes\Database\MySQL.php [ 3 ] in file:line
2017-04-20 17:58:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 17:59:20 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 17:59:20 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:00:03 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:00:03 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:08:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index.php [ 10 ] in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:08:12 --- DEBUG: #0 C:\xampp\htdocs\blog\application\views\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:08:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index.php [ 10 ] in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:08:15 --- DEBUG: #0 C:\xampp\htdocs\blog\application\views\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:09:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index.php [ 10 ] in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:09:32 --- DEBUG: #0 C:\xampp\htdocs\blog\application\views\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:10:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index.php [ 10 ] in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:10:04 --- DEBUG: #0 C:\xampp\htdocs\blog\application\views\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:11:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index.php [ 10 ] in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:11:27 --- DEBUG: #0 C:\xampp\htdocs\blog\application\views\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:11:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index.php [ 10 ] in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:11:28 --- DEBUG: #0 C:\xampp\htdocs\blog\application\views\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:11:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index.php [ 10 ] in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:11:29 --- DEBUG: #0 C:\xampp\htdocs\blog\application\views\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:11:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index.php [ 10 ] in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:11:49 --- DEBUG: #0 C:\xampp\htdocs\blog\application\views\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:11:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index.php [ 10 ] in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:11:54 --- DEBUG: #0 C:\xampp\htdocs\blog\application\views\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 18:13:03 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 18:13:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 18:13:11 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 18:13:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 18:14:09 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:14:09 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:16:10 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 241 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1668
2017-04-20 18:16:10 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('blogs')
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1668
2017-04-20 18:16:40 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 241 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1668
2017-04-20 18:16:40 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('blogs')
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1668
2017-04-20 18:17:31 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:17:31 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:18:12 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:18:12 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:18:25 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:18:25 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:18:27 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:18:27 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:18:41 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:18:41 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:18:42 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:18:42 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:11 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:11 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:15 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:15 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:16 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:16 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:17 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:17 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:17 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:17 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:40 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:40 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:41 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:41 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:41 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:41 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:42 --- CRITICAL: Error [ 0 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:42 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('`blogs`')
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2017-04-20 18:19:51 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 18:19:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 18:19:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 18:19:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 18:19:53 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 18:19:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 18:34:28 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:34:28 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:35:07 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:35:07 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:36:25 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:36:25 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:37:57 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:37:57 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:38:04 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:38:04 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:39:23 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:39:23 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:39:24 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:39:24 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:39:25 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:39:25 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:39:41 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:39:41 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:40:05 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:40:05 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:40:19 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:40:19 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:40:47 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:40:47 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:41:02 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:41:02 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:41:03 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:41:03 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:41:04 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:41:04 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:41:25 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:41:25 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:41:28 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:41:28 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:42:28 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:42:28 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:43:09 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:43:09 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:51:24 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:51:24 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:51:25 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:51:25 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:52:05 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:52:05 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:52:31 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:52:31 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(21): Kohana_ORM::factory('Model_Blog')
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:52:34 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:52:34 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(21): Kohana_ORM::factory('Model_Blog')
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:52:39 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:52:39 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:10 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:10 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:13 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:13 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:13 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:13 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:14 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:14 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:14 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:14 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:14 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:14 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:15 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:15 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:15 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:15 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:41 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:41 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:43 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:43 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:43 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:43 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:43 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:54:43 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:55:14 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:55:14 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:55:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:55:16 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:55:32 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:55:32 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:55:33 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:55:33 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:55:33 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:55:33 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:55:34 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:55:34 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:56:05 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:56:05 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:56:15 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:56:15 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(21): Kohana_ORM::factory('Model_Blog')
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:56:37 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:56:37 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:14 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:14 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:15 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:15 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:16 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:16 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:26 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:26 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:27 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:27 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:28 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:28 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:29 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.blogs' doesn't exist [ SHOW FULL COLUMNS FROM `blogs` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 18:57:29 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`blogs`')
#2 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(19): Kohana_ORM->__construct()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\MySQLi.php:337
2017-04-20 19:12:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index.php [ 10 ] in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 19:12:55 --- DEBUG: #0 C:\xampp\htdocs\blog\application\views\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 19:16:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index.php [ 10 ] in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 19:16:01 --- DEBUG: #0 C:\xampp\htdocs\blog\application\views\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\blog\application\views\index.php:10
2017-04-20 23:19:55 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 23:19:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 23:22:32 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 23:22:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 23:22:55 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 23:22:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 23:22:59 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\blog\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2017-04-20 23:22:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 23:25:00 --- CRITICAL: Error [ 0 ]: Class 'Model_Post' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in C:\xampp\htdocs\blog\application\classes\Controller\blog.php:21
2017-04-20 23:25:00 --- DEBUG: #0 C:\xampp\htdocs\blog\application\classes\Controller\blog.php(21): Kohana_Model::factory('Post')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\blog\application\classes\Controller\blog.php:21
2017-04-20 23:29:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'raiblog.posts' doesn't exist [ SELECT * FROM posts ORDER BY id DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\Query.php:251
2017-04-20 23:29:16 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM p...', false, Array)
#1 C:\xampp\htdocs\blog\application\classes\Model\post.php(43): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\blog\application\classes\Controller\post.php(22): Model_Post->request_posts()
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\modules\database\classes\Kohana\Database\Query.php:251
2017-04-20 23:30:38 --- CRITICAL: Error [ 0 ]: Call to undefined method Database_MySQLi_Result::execute() ~ APPPATH\classes\Model\post.php [ 45 ] in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:30:38 --- DEBUG: #0 C:\xampp\htdocs\blog\application\classes\Controller\post.php(22): Model_Post->request_posts()
#1 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:30:59 --- CRITICAL: Error [ 0 ]: Call to undefined method Database_MySQLi_Result::execute() ~ APPPATH\classes\Model\post.php [ 45 ] in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:30:59 --- DEBUG: #0 C:\xampp\htdocs\blog\application\classes\Controller\post.php(22): Model_Post->request_posts()
#1 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:33:23 --- CRITICAL: Error [ 0 ]: Call to undefined method Database_MySQLi_Result::execute() ~ APPPATH\classes\Model\post.php [ 44 ] in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:33:23 --- DEBUG: #0 C:\xampp\htdocs\blog\application\classes\Controller\post.php(22): Model_Post->request_posts()
#1 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:33:24 --- CRITICAL: Error [ 0 ]: Call to undefined method Database_MySQLi_Result::execute() ~ APPPATH\classes\Model\post.php [ 44 ] in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:33:24 --- DEBUG: #0 C:\xampp\htdocs\blog\application\classes\Controller\post.php(22): Model_Post->request_posts()
#1 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:36:17 --- CRITICAL: Error [ 0 ]: Call to undefined method Database_Result_Cached::execute() ~ APPPATH\classes\Model\post.php [ 43 ] in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:36:17 --- DEBUG: #0 C:\xampp\htdocs\blog\application\classes\Controller\post.php(22): Model_Post->request_posts()
#1 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:37:12 --- CRITICAL: Error [ 0 ]: Call to undefined method Database_Result_Cached::execute() ~ APPPATH\classes\Model\post.php [ 45 ] in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:37:12 --- DEBUG: #0 C:\xampp\htdocs\blog\application\classes\Controller\post.php(22): Model_Post->request_posts()
#1 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:39:17 --- CRITICAL: Error [ 0 ]: Call to undefined method Database_Result_Cached::execute() ~ APPPATH\classes\Model\post.php [ 45 ] in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:39:17 --- DEBUG: #0 C:\xampp\htdocs\blog\application\classes\Controller\post.php(22): Model_Post->request_posts()
#1 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:39:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\classes\Model\post.php [ 43 ] in C:\xampp\htdocs\blog\application\classes\Model\post.php:43
2017-04-20 23:39:48 --- DEBUG: #0 C:\xampp\htdocs\blog\application\classes\Model\post.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\blog\application\classes\Controller\post.php(22): Model_Post->request_posts()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\application\classes\Model\post.php:43
2017-04-20 23:41:40 --- CRITICAL: Error [ 0 ]: Call to undefined method Database_Result_Cached::execute() ~ APPPATH\classes\Model\post.php [ 46 ] in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22
2017-04-20 23:41:40 --- DEBUG: #0 C:\xampp\htdocs\blog\application\classes\Controller\post.php(22): Model_Post->request_posts()
#1 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\blog\application\classes\Controller\post.php:22