<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-27 02:12:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-09-27 02:12:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-27 02:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-27 02:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-27 02:13:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-09-27 02:13:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-27 02:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-27 02:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-27 02:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-27 02:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-27 04:07:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/defaulttemplate.php [ 52 ]
2012-09-27 04:07:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/defaulttemplate.php [ 52 ]
--
#0 /var/www/anons4/application/classes/controller/defaulttemplate.php(52): Kohana_Core::error_handler()
#1 /var/www/anons4/application/classes/controller/defaulttemplate.php(28): Controller_DefaultTemplate->getUser()
#2 /var/www/anons4/application/classes/controller/users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 /var/www/anons4/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-27 04:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-27 04:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-27 06:30:39 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/defaulttemplate.php [ 52 ]
2012-09-27 06:30:39 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/defaulttemplate.php [ 52 ]
--
#0 /var/www/anons4/application/classes/controller/defaulttemplate.php(52): Kohana_Core::error_handler()
#1 /var/www/anons4/application/classes/controller/defaulttemplate.php(28): Controller_DefaultTemplate->getUser()
#2 /var/www/anons4/application/classes/controller/users.php(286): Controller_DefaultTemplate->before()
#3 [internal function]: Controller_Users->before(Object(Controller_Users))
#4 /var/www/anons4/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#5 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-27 06:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-27 06:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-27 06:40:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/places.php [ 44 ]
2012-09-27 06:40:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/places.php [ 44 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(44): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-27 06:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-27 06:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-27 06:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-27 06:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-27 06:41:16 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/places.php [ 44 ]
2012-09-27 06:41:16 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/places.php [ 44 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(44): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-27 07:33:54 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/places.php [ 44 ]
2012-09-27 07:33:54 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/places.php [ 44 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(44): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-27 12:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-27 12:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-27 12:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-27 12:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-27 13:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-27 13:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}