<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-28 10:51:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
2012-10-28 10:51:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(157): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-28 11:21:42 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: No ending delimiter '$' found ~ APPPATH/views/pages/blog_all.php [ 14 ]
2012-10-28 11:21:42 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: No ending delimiter '$' found ~ APPPATH/views/pages/blog_all.php [ 14 ]
--
#0 /var/www/anons4/application/views/pages/blog_all.php(14): Kohana_Core::error_handler('$(.*?)show_more', '<p>????????????...', NULL)
#1 /var/www/anons4/system/classes/kohana/view.php(61): include('/var/www/anons4...')
#2 /var/www/anons4/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/anons4...', Array)
#3 /var/www/anons4/application/classes/controller/blog.php(11): Kohana_View->render()
#4 [internal function]: Controller_Blog->action_index()
#5 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#6 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-28 11:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 11:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 11:33:42 --- ERROR: ErrorException [ 1 ]: Call to undefined function  tidy_setopt() ~ APPPATH/views/pages/blog_all.php [ 12 ]
2012-10-28 11:33:42 --- STRACE: ErrorException [ 1 ]: Call to undefined function  tidy_setopt() ~ APPPATH/views/pages/blog_all.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/anons4...', Array)
#1 {main}
2012-10-28 11:33:42 --- ERROR: ErrorException [ 1 ]: Call to undefined function  tidy_setopt() ~ APPPATH/views/pages/blog_all.php [ 12 ]
2012-10-28 11:33:42 --- STRACE: ErrorException [ 1 ]: Call to undefined function  tidy_setopt() ~ APPPATH/views/pages/blog_all.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/anons4...', Array)
#1 {main}
2012-10-28 11:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 11:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 11:34:20 --- ERROR: ErrorException [ 1 ]: Call to undefined function  tidy_setopt() ~ APPPATH/views/pages/blog_all.php [ 12 ]
2012-10-28 11:34:20 --- STRACE: ErrorException [ 1 ]: Call to undefined function  tidy_setopt() ~ APPPATH/views/pages/blog_all.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/anons4...', Array)
#1 {main}
2012-10-28 11:34:20 --- ERROR: ErrorException [ 1 ]: Call to undefined function  tidy_setopt() ~ APPPATH/views/pages/blog_all.php [ 12 ]
2012-10-28 11:34:20 --- STRACE: ErrorException [ 1 ]: Call to undefined function  tidy_setopt() ~ APPPATH/views/pages/blog_all.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/anons4...', Array)
#1 {main}
2012-10-28 11:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 11:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 13:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 13:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_cd0a0a_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_cd0a0a_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_454545_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_454545_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_222222_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_222222_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/balloons.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/balloons.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_55_fbf9ee_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_55_fbf9ee_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:20:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:20:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:20:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/balloons.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:20:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/balloons.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:20:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/no_search.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:20:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/no_search.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:20:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_888888_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:20:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_888888_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:20:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:20:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:21:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_2e83ff_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:21:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_2e83ff_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_454545_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_454545_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/no_search.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/no_search.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_cd0a0a_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_cd0a0a_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:21:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
2012-10-28 14:21:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(157): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-28 14:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_888888_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_888888_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_95_fef1ec_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_95_fef1ec_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_95_fef1ec_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_95_fef1ec_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_2e83ff_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_2e83ff_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:22:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
2012-10-28 14:22:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(157): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-28 14:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_55_fbf9ee_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_55_fbf9ee_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/show/cloudatlas.warnerbros.com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/show/cloudatlas.warnerbros.com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:22:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/vecherinka/halloween/vkontakte.ru/id12874120 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:22:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/vecherinka/halloween/vkontakte.ru/id12874120 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:22:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/show/cloudatlas.warnerbros.com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:22:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/show/cloudatlas.warnerbros.com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:22:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
2012-10-28 14:22:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(157): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-28 14:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/vecherinka/halloween/vkontakte.ru/id12874120 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/vecherinka/halloween/vkontakte.ru/id12874120 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_222222_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-icons_222222_256x240.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/vecherinka/halloween1/creme.com.ua ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/vecherinka/halloween1/creme.com.ua ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 14:23:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
2012-10-28 14:23:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(157): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-28 14:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/vecherinka/halloween1/creme.com.ua ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 14:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/vecherinka/halloween1/creme.com.ua ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 16:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/show/ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 16:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/show/ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 16:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/show/vk.com/js/api/openapi.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 16:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: places/show/vk.com/js/api/openapi.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 16:55:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
2012-10-28 16:55:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-28 22:30:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
2012-10-28 22:30:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-28 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 22:30:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
2012-10-28 22:30:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-28 22:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-28 22:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-28 22:31:13 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/places.php [ 44 ]
2012-10-28 22:31:13 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/places.php [ 44 ]
--
#0 /var/www/anons4/application/classes/controller/places.php(44): Kohana_Core::error_handler()
#1 [internal function]: Controller_Places->action_show(Object(Controller_Places))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-28 22:56:28 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
2012-10-28 22:56:28 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 159 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}