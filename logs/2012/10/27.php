<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-27 03:03:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
2012-10-27 03:03:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(157): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-27 07:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-27 07:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-27 08:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/show/cloudatlas.warnerbros.com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-27 08:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/show/cloudatlas.warnerbros.com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-27 08:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-27 08:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-27 08:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-27 08:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-27 12:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-27 12:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-27 12:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-27 12:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}