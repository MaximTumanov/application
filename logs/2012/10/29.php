<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-29 02:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 02:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 02:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 02:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 02:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 2jmj7l5rSw0yVb-vlWAYkK-YBwk=ZXZlbnRzL3Nob3cvdmVjaGVyaW5rYS9oZWxsb3dlZW4tdi1kdXJkb21lLzIwMTItMTEtMDI was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-29 02:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 2jmj7l5rSw0yVb-vlWAYkK-YBwk=ZXZlbnRzL3Nob3cvdmVjaGVyaW5rYS9oZWxsb3dlZW4tdi1kdXJkb21lLzIwMTItMTEtMDI was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-29 02:51:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 02:51:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 03:15:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/places.php [ 44 ]
2012-10-29 03:15:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/places.php [ 44 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(44): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-29 03:15:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 03:15:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 03:15:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
2012-10-29 03:15:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-29 04:56:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
2012-10-29 04:56:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-29 05:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 05:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 05:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 05:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 08:10:27 --- ERROR: ErrorException [ 8 ]: Use of undefined constant needle - assumed 'needle' ~ APPPATH/views/pages/event.php [ 74 ]
2012-10-29 08:10:27 --- STRACE: ErrorException [ 8 ]: Use of undefined constant needle - assumed 'needle' ~ APPPATH/views/pages/event.php [ 74 ]
--
#0 /var/www/anons4/application/views/pages/event.php(74): Kohana_Core::error_handler('/var/www/anons4...', Array)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/anons4/application/classes/controller/events.php(195): Kohana_View->render()
#4 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#5 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-29 08:10:30 --- ERROR: ErrorException [ 8 ]: Use of undefined constant needle - assumed 'needle' ~ APPPATH/views/pages/event.php [ 74 ]
2012-10-29 08:10:30 --- STRACE: ErrorException [ 8 ]: Use of undefined constant needle - assumed 'needle' ~ APPPATH/views/pages/event.php [ 74 ]
--
#0 /var/www/anons4/application/views/pages/event.php(74): Kohana_Core::error_handler('/var/www/anons4...', Array)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/anons4/application/classes/controller/events.php(195): Kohana_View->render()
#4 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#5 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-29 08:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 08:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 08:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 08:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 09:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 09:37:04 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
2012-10-29 09:37:04 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-29 09:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 09:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 09:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 09:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 09:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 09:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 10:02:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 10:02:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 10:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 10:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 11:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 11:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 11:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 11:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 11:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 11:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 12:21:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
2012-10-29 12:21:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-29 13:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 13:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:44:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/defaulttemplate.php [ 153 ]
2012-10-29 14:44:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/defaulttemplate.php [ 153 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Defa...')
#1 {main}
2012-10-29 14:44:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/defaulttemplate.php [ 153 ]
2012-10-29 14:44:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/defaulttemplate.php [ 153 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Defa...')
#1 {main}
2012-10-29 14:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:44:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/defaulttemplate.php [ 153 ]
2012-10-29 14:44:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/defaulttemplate.php [ 153 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Defa...')
#1 {main}
2012-10-29 14:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:44:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/defaulttemplate.php [ 153 ]
2012-10-29 14:44:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/controller/defaulttemplate.php [ 153 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Defa...')
#1 {main}
2012-10-29 14:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1351345532 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-29 14:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1351345532 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-29 14:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1338814161 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-29 14:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1338814161 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-29 14:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1338814161 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-29 14:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1338814161 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-29 14:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 14:47:56 --- ERROR: ErrorException [ 2 ]: filemtime() [function.filemtime]: stat failed for css/ui/slider.css ~ APPPATH/classes/controller/defaulttemplate.php [ 137 ]
2012-10-29 14:47:56 --- STRACE: ErrorException [ 2 ]: filemtime() [function.filemtime]: stat failed for css/ui/slider.css ~ APPPATH/classes/controller/defaulttemplate.php [ 137 ]
--
#0 /var/www/anons4/application/classes/controller/defaulttemplate.php(137): Kohana_Core::error_handler('css/ui/slider.c...')
#1 [internal function]: Controller_DefaultTemplate->after()
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-29 14:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 14:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-29 17:07:44 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
2012-10-29 17:07:44 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-29 22:41:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
2012-10-29 22:41:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-29 23:11:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
2012-10-29 23:11:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}