<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-11 01:13:44 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/defaulttemplate.php [ 52 ]
2012-10-11 01:13:44 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/defaulttemplate.php [ 52 ]
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
2012-10-11 01:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-11 01:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-11 04:07:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/films.php [ 123 ]
2012-10-11 04:07:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/films.php [ 123 ]
--
#0 /var/www/anons4/application/classes/controller/films.php(123): Kohana_Core::error_handler()
#1 [internal function]: Controller_Films->action_show(Object(Controller_Films))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-11 04:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-11 04:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}