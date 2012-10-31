<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-14 06:48:06 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$icons ~ APPPATH/views/pages/user_places.php [ 26 ]
2012-10-14 06:48:06 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$icons ~ APPPATH/views/pages/user_places.php [ 26 ]
--
#0 /var/www/anons4/application/views/pages/user_places.php(26): Kohana_Core::error_handler('/var/www/anons4...', Array)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/anons4/application/classes/controller/users.php(53): Kohana_View->render()
#4 [internal function]: Controller_Users->action_places(Object(Controller_Users))
#5 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-14 06:53:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-14 06:53:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-14 06:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-14 06:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-14 11:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-14 11:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-14 13:12:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-14 13:12:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}