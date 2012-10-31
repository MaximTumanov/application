<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-25 09:31:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-09-25 09:31:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-25 09:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 09:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 09:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 09:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 09:31:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::getMyCinemasIds() ~ APPPATH/classes/controller/cinema.php [ 57 ]
2012-09-25 09:31:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::getMyCinemasIds() ~ APPPATH/classes/controller/cinema.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 09:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 09:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 09:32:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::getMyCinemasIds() ~ APPPATH/classes/controller/cinema.php [ 57 ]
2012-09-25 09:32:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::getMyCinemasIds() ~ APPPATH/classes/controller/cinema.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 12:59:51 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$icons ~ APPPATH/views/pages/user_events.php [ 32 ]
2012-09-25 12:59:51 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$icons ~ APPPATH/views/pages/user_events.php [ 32 ]
--
#0 /var/www/anons4/application/views/pages/user_events.php(32): Kohana_Core::error_handler('/var/www/anons4...', Array)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/anons4/application/classes/controller/users.php(35): Kohana_View->render()
#4 [internal function]: Controller_Users->action_events(Object(Controller_Users))
#5 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-25 12:59:52 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$icons ~ APPPATH/views/pages/user_events.php [ 32 ]
2012-09-25 12:59:52 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$icons ~ APPPATH/views/pages/user_events.php [ 32 ]
--
#0 /var/www/anons4/application/views/pages/user_events.php(32): Kohana_Core::error_handler('/var/www/anons4...', Array)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/anons4/application/classes/controller/users.php(35): Kohana_View->render()
#4 [internal function]: Controller_Users->action_events(Object(Controller_Users))
#5 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-25 12:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 12:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 13:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 13:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 13:18:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-09-25 13:18:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-25 13:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 13:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 13:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/concert/www.meteor.dp.ua ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 13:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/concert/www.meteor.dp.ua ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 13:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 13:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 13:23:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/', expecting ')' ~ APPPATH/views/pages/event.php [ 55 ]
2012-09-25 13:23:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/', expecting ')' ~ APPPATH/views/pages/event.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/anons4...', Array)
#1 {main}
2012-09-25 13:23:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/', expecting ')' ~ APPPATH/views/pages/event.php [ 55 ]
2012-09-25 13:23:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/', expecting ')' ~ APPPATH/views/pages/event.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/anons4...', Array)
#1 {main}
2012-09-25 13:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 13:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 13:24:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-09-25 13:24:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-25 13:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 13:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 13:25:57 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-09-25 13:25:57 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-25 13:26:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-09-25 13:26:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-25 13:55:24 --- ERROR: ErrorException [ 8 ]: Undefined index:  cat_alias ~ APPPATH/classes/controller/events.php [ 101 ]
2012-09-25 13:55:24 --- STRACE: ErrorException [ 8 ]: Undefined index:  cat_alias ~ APPPATH/classes/controller/events.php [ 101 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(101): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-25 13:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 13:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 13:55:25 --- ERROR: ErrorException [ 8 ]: Undefined index:  cat_alias ~ APPPATH/classes/controller/events.php [ 101 ]
2012-09-25 13:55:25 --- STRACE: ErrorException [ 8 ]: Undefined index:  cat_alias ~ APPPATH/classes/controller/events.php [ 101 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(101): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-25 13:58:16 --- ERROR: ErrorException [ 8 ]: Undefined index:  cat_alias ~ APPPATH/classes/controller/events.php [ 101 ]
2012-09-25 13:58:16 --- STRACE: ErrorException [ 8 ]: Undefined index:  cat_alias ~ APPPATH/classes/controller/events.php [ 101 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(101): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-25 13:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 13:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}