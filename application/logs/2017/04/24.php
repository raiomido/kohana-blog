<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-04-24 13:24:48 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-24 13:24:48 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-24 14:49:51 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-24 14:49:51 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-24 17:32:57 --- CRITICAL: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Post class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:603
2017-04-24 17:32:57 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('find_all')
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(82): Kohana_ORM->__get('find_all')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:603
2017-04-24 17:40:33 --- CRITICAL: Database_Exception [ 42000 ]: errors ~ APPPATH\classes\Model\post.php [ 55 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:40:33 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1421): Model_Post->update(NULL)
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(87): Kohana_ORM->save()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:41:24 --- CRITICAL: Database_Exception [ 42000 ]: errors ~ APPPATH\classes\Model\post.php [ 55 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:41:24 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1421): Model_Post->update(NULL)
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(86): Kohana_ORM->save()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:42:32 --- CRITICAL: Database_Exception [ 42000 ]: errors ~ APPPATH\classes\Model\post.php [ 55 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:42:32 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1421): Model_Post->update(NULL)
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(86): Kohana_ORM->save()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:43:14 --- CRITICAL: Kohana_Exception [ 0 ]: The as property does not exist in the Model_Post class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:603
2017-04-24 17:43:14 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('as')
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(80): Kohana_ORM->__get('as')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:603
2017-04-24 17:43:30 --- CRITICAL: Kohana_Exception [ 0 ]: The as property does not exist in the Model_Post class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:603
2017-04-24 17:43:30 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('as')
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(80): Kohana_ORM->__get('as')
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:603
2017-04-24 17:43:49 --- CRITICAL: Database_Exception [ 42000 ]: errors ~ APPPATH\classes\Model\post.php [ 55 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:43:49 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1421): Model_Post->update(NULL)
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(86): Kohana_ORM->save()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:44:07 --- CRITICAL: Database_Exception [ 42000 ]: errors ~ APPPATH\classes\Model\post.php [ 55 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:44:07 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1421): Model_Post->update(NULL)
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(86): Kohana_ORM->save()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:45:21 --- CRITICAL: Database_Exception [ 42000 ]: errors ~ APPPATH\classes\Model\post.php [ 55 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:45:21 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1421): Model_Post->update(NULL)
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(85): Kohana_ORM->save()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:45:54 --- CRITICAL: Database_Exception [ 42000 ]: errors ~ APPPATH\classes\Model\post.php [ 55 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:45:54 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1421): Model_Post->update(NULL)
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(86): Kohana_ORM->save()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:46:06 --- CRITICAL: Database_Exception [ 42000 ]: errors ~ APPPATH\classes\Model\post.php [ 55 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:46:06 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1421): Model_Post->update(NULL)
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(86): Kohana_ORM->save()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:51:58 --- CRITICAL: Database_Exception [ 42000 ]: errors ~ APPPATH\classes\Model\post.php [ 55 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:51:58 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1421): Model_Post->update(NULL)
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(86): Kohana_ORM->save()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:59:35 --- CRITICAL: Database_Exception [ 42000 ]: errors ~ APPPATH\classes\Model\post.php [ 55 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 17:59:35 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1421): Model_Post->update(NULL)
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(86): Kohana_ORM->save()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 18:01:10 --- CRITICAL: Database_Exception [ 42000 ]: errors ~ APPPATH\classes\Model\post.php [ 55 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 18:01:10 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1421): Model_Post->update(NULL)
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(87): Kohana_ORM->save()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 18:02:33 --- CRITICAL: Database_Exception [ 42000 ]: errors ~ APPPATH\classes\Model\post.php [ 55 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 18:02:33 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1421): Model_Post->update(NULL)
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(87): Kohana_ORM->save()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 18:03:50 --- CRITICAL: Database_Exception [ 42000 ]: errors ~ APPPATH\classes\Model\post.php [ 55 ] in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 18:03:50 --- DEBUG: #0 C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php(1421): Model_Post->update(NULL)
#1 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(86): Kohana_ORM->save()
#2 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#5 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\blog\modules\orm\classes\Kohana\ORM.php:1421
2017-04-24 18:23:57 --- CRITICAL: View_Exception [ 0 ]: The requested view message could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145
2017-04-24 18:23:57 --- DEBUG: #0 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(145): Kohana_View->set_filename('message')
#1 C:\xampp\htdocs\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('message', NULL)
#2 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(116): Kohana_View::factory('message')
#3 C:\xampp\htdocs\blog\application\classes\Controller\Post.php(94): Controller_Post->render_error('Failed to valid...')
#4 C:\xampp\htdocs\blog\system\classes\Kohana\Controller.php(84): Controller_Post->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#7 C:\xampp\htdocs\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\blog\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog\index.php(119): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\blog\system\classes\Kohana\View.php:145