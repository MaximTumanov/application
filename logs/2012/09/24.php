<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-24 02:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cinema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-24 02:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cinema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-24 02:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cinema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-24 02:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cinema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-24 02:51:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cinema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-24 02:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cinema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-24 02:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cinema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-24 02:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cinema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-24 02:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cinema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-24 03:01:52 --- ERROR: ErrorException [ 8 ]: Undefined index:  CINEMA_IMG_ALL ~ APPPATH/views/pages/cinema_all.php [ 62 ]
2012-09-24 03:01:52 --- STRACE: ErrorException [ 8 ]: Undefined index:  CINEMA_IMG_ALL ~ APPPATH/views/pages/cinema_all.php [ 62 ]
--
#0 /var/www/anons4/application/views/pages/cinema_all.php(62): Kohana_Core::error_handler('/var/www/anons4...', Array)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/anons4/application/classes/controller/cinema.php(14): Kohana_View->render()
#4 [internal function]: Controller_Cinema->action_index(Object(Controller_Cinema))
#5 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-24 03:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-24 03:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-24 03:03:40 --- ERROR: ErrorException [ 8 ]: Undefined index:  CINEMA_IMG_ALL ~ APPPATH/views/pages/cinema_all.php [ 62 ]
2012-09-24 03:03:40 --- STRACE: ErrorException [ 8 ]: Undefined index:  CINEMA_IMG_ALL ~ APPPATH/views/pages/cinema_all.php [ 62 ]
--
#0 /var/www/anons4/application/views/pages/cinema_all.php(62): Kohana_Core::error_handler('/var/www/anons4...', Array)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/anons4/application/classes/controller/cinema.php(14): Kohana_View->render()
#4 [internal function]: Controller_Cinema->action_index(Object(Controller_Cinema))
#5 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#9 {main}