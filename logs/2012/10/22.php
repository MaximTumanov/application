<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-22 01:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 01:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 01:10:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 01:10:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 01:13:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 01:13:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 01:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 01:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 01:19:16 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 01:19:16 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 01:19:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 01:19:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 01:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 01:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 01:41:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 01:41:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 01:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 01:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 02:34:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 02:34:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 02:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 02:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 02:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 02:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 02:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 02:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 02:51:33 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 02:51:33 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 03:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 03:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 03:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 03:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 03:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 03:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 03:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 03:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 04:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 04:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 05:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 05:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 05:30:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 05:30:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 06:00:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 06:00:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 06:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 06:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 06:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 06:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 06:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 06:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 06:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 06:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 07:47:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 2jmj7l5rSw0yVb-vlWAYkK-YBwk=ZXZlbnRz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-22 07:47:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 2jmj7l5rSw0yVb-vlWAYkK-YBwk=ZXZlbnRz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-22 07:47:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 07:47:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 07:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 07:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 08:12:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/www.dnu.dp.ua/view/zoomuseum ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 08:12:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/www.dnu.dp.ua/view/zoomuseum ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 08:12:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/www.dnu.dp.ua/view/zoomuseum ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 08:12:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/www.dnu.dp.ua/view/zoomuseum ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 08:12:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 08:12:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 08:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL places/view/zoomuseum was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-10-22 08:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL places/view/zoomuseum was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-22 08:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 08:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 08:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 08:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 08:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/www.dnu.dp.ua/show/zoomuseum ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 08:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/www.dnu.dp.ua/show/zoomuseum ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 08:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 08:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 08:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 08:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 08:42:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 08:42:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 09:03:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 09:03:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 09:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 09:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 09:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 09:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 11:31:12 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 11:31:12 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 11:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 11:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 11:57:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 11:57:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 12:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 12:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 12:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 12:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 12:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 12:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 12:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 12:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 12:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 12:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 13:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 13:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 13:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 13:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 13:49:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: use_vkontakte_comment ~ APPPATH/views/templates/default.php [ 29 ]
2012-10-22 13:49:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: use_vkontakte_comment ~ APPPATH/views/templates/default.php [ 29 ]
--
#0 /var/www/anons4/application/views/templates/default.php(29): Kohana_Core::error_handler('/var/www/anons4...', Array)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/anons4/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/anons4/application/classes/controller/defaulttemplate.php(156): Kohana_Controller_Template->after()
#5 /var/www/anons4/application/classes/controller/events.php(191): Controller_DefaultTemplate->after()
#6 [internal function]: Controller_Events->after(Object(Controller_Events))
#7 /var/www/anons4/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#8 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-22 13:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 13:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 13:50:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: use_vkontakte_comment ~ APPPATH/views/templates/default.php [ 29 ]
2012-10-22 13:50:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: use_vkontakte_comment ~ APPPATH/views/templates/default.php [ 29 ]
--
#0 /var/www/anons4/application/views/templates/default.php(29): Kohana_Core::error_handler('/var/www/anons4...', Array)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/anons4/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/anons4/application/classes/controller/defaulttemplate.php(156): Kohana_Controller_Template->after()
#5 /var/www/anons4/application/classes/controller/events.php(191): Controller_DefaultTemplate->after()
#6 [internal function]: Controller_Events->after(Object(Controller_Events))
#7 /var/www/anons4/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#8 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-22 13:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 13:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 13:50:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: use_vkontakte_comment ~ APPPATH/views/templates/default.php [ 29 ]
2012-10-22 13:50:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: use_vkontakte_comment ~ APPPATH/views/templates/default.php [ 29 ]
--
#0 /var/www/anons4/application/views/templates/default.php(29): Kohana_Core::error_handler('/var/www/anons4...', Array)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/anons4/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/anons4/application/classes/controller/defaulttemplate.php(156): Kohana_Controller_Template->after()
#5 /var/www/anons4/application/classes/controller/events.php(191): Controller_DefaultTemplate->after()
#6 [internal function]: Controller_Events->after(Object(Controller_Events))
#7 /var/www/anons4/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#8 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-22 13:50:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 13:50:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 13:53:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: use_vkontakte_comment ~ APPPATH/views/templates/default.php [ 29 ]
2012-10-22 13:53:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: use_vkontakte_comment ~ APPPATH/views/templates/default.php [ 29 ]
--
#0 /var/www/anons4/application/views/templates/default.php(29): Kohana_Core::error_handler('/var/www/anons4...', Array)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/anons4/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/anons4/application/classes/controller/defaulttemplate.php(156): Kohana_Controller_Template->after()
#5 /var/www/anons4/application/classes/controller/events.php(191): Controller_DefaultTemplate->after()
#6 [internal function]: Controller_Events->after(Object(Controller_Events))
#7 /var/www/anons4/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#8 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-22 13:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 13:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 13:56:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: use_vkontakte_comment ~ APPPATH/views/pages/event.php [ 113 ]
2012-10-22 13:56:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: use_vkontakte_comment ~ APPPATH/views/pages/event.php [ 113 ]
--
#0 /var/www/anons4/application/views/pages/event.php(113): Kohana_Core::error_handler('/var/www/anons4...', Array)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/anons4/application/classes/controller/events.php(149): Kohana_View->render()
#4 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#5 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-22 13:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 13:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 14:28:41 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 14:28:41 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 14:36:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 14:36:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 14:49:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: film ~ APPPATH/views/pages/film.php [ 49 ]
2012-10-22 14:49:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: film ~ APPPATH/views/pages/film.php [ 49 ]
--
#0 /var/www/anons4/application/views/pages/film.php(49): Kohana_Core::error_handler('/var/www/anons4...', Array)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/anons4/application/classes/controller/films.php(72): Kohana_View->render()
#4 [internal function]: Controller_Films->action_show(Object(Controller_Films))
#5 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-22 14:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 14:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:06:08 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/views/pages/cinema.php [ 51 ]
2012-10-22 15:06:08 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/views/pages/cinema.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/anons4...', Array)
#1 {main}
2012-10-22 15:06:09 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/views/pages/cinema.php [ 51 ]
2012-10-22 15:06:09 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/views/pages/cinema.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/anons4...', Array)
#1 {main}
2012-10-22 15:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:06:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:06:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:06:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:06:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:09:40 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:09:40 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:09:42 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:09:42 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:09:55 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:09:55 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:09:58 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:09:58 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:11:34 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:11:34 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:11:34 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:11:34 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:11:44 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:11:44 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:11:44 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:11:44 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:12:18 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:12:18 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:12:18 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:12:18 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:12:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:12:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:12:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:12:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:12:51 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:12:51 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:13:21 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:13:21 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:18:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:18:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:18:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:18:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:19:38 --- ERROR: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
2012-10-22 15:19:38 --- STRACE: ErrorException [ 8 ]: Undefined index:  item_alias ~ APPPATH/classes/controller/places.php [ 27 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:24:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/(056) 774-61-55, 097-63-64-718 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:24:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/(056) 774-61-55, 097-63-64-718 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/vkontakte.ru/id12874120 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/vkontakte.ru/id12874120 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:43:57 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 15:43:57 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:44:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 15:44:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:44:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 15:44:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:45:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 15:45:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:45:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 15:45:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:45:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 15:45:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 15:45:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 15:45:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 15:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 15:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 16:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 16:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 16:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 16:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 16:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 16:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 16:24:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/www.dnu.dp.ua/view/zoomuseum ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 16:24:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/www.dnu.dp.ua/view/zoomuseum ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 17:06:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 17:06:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 17:06:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 17:06:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 17:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 17:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 17:09:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 17:09:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 17:09:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 17:09:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 17:09:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 17:09:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 17:15:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-22 17:15:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-22 17:15:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 17:15:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 22:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 22:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 22:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 22:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-22 22:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-22 22:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}