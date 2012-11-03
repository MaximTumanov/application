<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-31 02:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-31 02:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-31 08:16:34 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'u_producti3'@'127.0.0.1' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-31 08:16:34 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'u_producti3'@'127.0.0.1' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\WebServers\home\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\WebServers\home\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', true, Array)
#2 D:\WebServers\home\application\classes\controller\defaulttemplate.php(71): Kohana_Database_Query->execute()
#3 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#4 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#5 [internal function]: Controller_Users->before()
#6 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Users))
#7 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#10 {main}
2012-10-31 08:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 08:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 08:16:51 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'u_producti3'@'127.0.0.1' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-31 08:16:51 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'u_producti3'@'127.0.0.1' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\WebServers\home\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\WebServers\home\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', true, Array)
#2 D:\WebServers\home\application\classes\controller\defaulttemplate.php(71): Kohana_Database_Query->execute()
#3 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#4 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#5 [internal function]: Controller_Users->before()
#6 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Users))
#7 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#10 {main}
2012-10-31 08:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 08:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 08:17:08 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'u_producti3'@'127.0.0.1' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-31 08:17:08 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'u_producti3'@'127.0.0.1' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\WebServers\home\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\WebServers\home\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id` FRO...', false, Array)
#2 D:\WebServers\home\application\classes\controller\defaulttemplate.php(113): Kohana_Database_Query->execute()
#3 D:\WebServers\home\application\classes\controller\defaulttemplate.php(87): Controller_DefaultTemplate->validEmail('maxim.tymanov@y...')
#4 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#5 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#6 [internal function]: Controller_Users->before()
#7 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Users))
#8 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#11 {main}
2012-10-31 08:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 08:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 08:47:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\defaulttemplate.php [ 52 ]
2012-10-31 08:47:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\defaulttemplate.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Defa...')
#1 {main}
2012-10-31 08:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 08:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 08:57:28 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
2012-10-31 08:57:28 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
--
#0 D:\WebServers\home\application\classes\controller\defaulttemplate.php(56): Kohana_Core::error_handler()
#1 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#2 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#8 {main}
2012-10-31 08:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 08:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 08:58:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
2012-10-31 08:58:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
--
#0 D:\WebServers\home\application\classes\controller\defaulttemplate.php(56): Kohana_Core::error_handler()
#1 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#2 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#8 {main}
2012-10-31 08:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 08:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 08:59:31 --- ERROR: ErrorException [ 8 ]: Undefined index:  uid ~ APPPATH\classes\controller\defaulttemplate.php [ 53 ]
2012-10-31 08:59:31 --- STRACE: ErrorException [ 8 ]: Undefined index:  uid ~ APPPATH\classes\controller\defaulttemplate.php [ 53 ]
--
#0 D:\WebServers\home\application\classes\controller\defaulttemplate.php(53): Kohana_Core::error_handler()
#1 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#2 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#8 {main}
2012-10-31 08:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 08:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 08:59:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 60 ]
2012-10-31 08:59:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 60 ]
--
#0 D:\WebServers\home\application\classes\controller\defaulttemplate.php(60): Kohana_Core::error_handler()
#1 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#2 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#8 {main}
2012-10-31 08:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 08:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 09:00:42 --- ERROR: ErrorException [ 8 ]: Undefined index:  uid ~ APPPATH\classes\controller\defaulttemplate.php [ 53 ]
2012-10-31 09:00:42 --- STRACE: ErrorException [ 8 ]: Undefined index:  uid ~ APPPATH\classes\controller\defaulttemplate.php [ 53 ]
--
#0 D:\WebServers\home\application\classes\controller\defaulttemplate.php(53): Kohana_Core::error_handler()
#1 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#2 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#8 {main}
2012-10-31 09:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 09:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 09:00:52 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
2012-10-31 09:00:52 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-31 09:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 09:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 09:02:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
2012-10-31 09:02:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
--
#0 D:\WebServers\home\application\classes\controller\defaulttemplate.php(56): Kohana_Core::error_handler()
#1 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#2 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#8 {main}
2012-10-31 09:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 09:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 09:04:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 60 ]
2012-10-31 09:04:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 60 ]
--
#0 D:\WebServers\home\application\classes\controller\defaulttemplate.php(60): Kohana_Core::error_handler()
#1 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#2 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#8 {main}
2012-10-31 09:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 09:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 09:04:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
2012-10-31 09:04:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
--
#0 D:\WebServers\home\application\classes\controller\defaulttemplate.php(56): Kohana_Core::error_handler()
#1 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#2 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#8 {main}
2012-10-31 09:04:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 09:04:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 09:07:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
2012-10-31 09:07:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
--
#0 D:\WebServers\home\application\classes\controller\defaulttemplate.php(56): Kohana_Core::error_handler()
#1 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#2 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#8 {main}
2012-10-31 09:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 09:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 09:12:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
2012-10-31 09:12:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
--
#0 D:\WebServers\home\application\classes\controller\defaulttemplate.php(56): Kohana_Core::error_handler()
#1 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#2 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#8 {main}
2012-10-31 09:12:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 09:12:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 09:13:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
2012-10-31 09:13:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
--
#0 D:\WebServers\home\application\classes\controller\defaulttemplate.php(56): Kohana_Core::error_handler()
#1 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#2 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#8 {main}
2012-10-31 09:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 09:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 09:14:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
2012-10-31 09:14:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 56 ]
--
#0 D:\WebServers\home\application\classes\controller\defaulttemplate.php(56): Kohana_Core::error_handler()
#1 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#2 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#8 {main}
2012-10-31 09:14:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 09:14:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-10-31 09:16:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 60 ]
2012-10-31 09:16:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 60 ]
--
#0 D:\WebServers\home\application\classes\controller\defaulttemplate.php(60): Kohana_Core::error_handler()
#1 D:\WebServers\home\application\classes\controller\defaulttemplate.php(32): Controller_DefaultTemplate->getUser()
#2 D:\WebServers\home\application\classes\controller\users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#8 {main}
2012-10-31 09:16:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-31 09:16:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}