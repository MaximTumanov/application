<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-06 09:26:41 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
2012-10-06 09:26:41 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 116 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/design.anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}