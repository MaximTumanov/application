<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-05 04:50:42 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `jos_events` VALUES('', 'вапвапвап', 'vapvapvap', '', '
вапвапва', '
вапвапва', '0', '1', '0', '0', '0') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-05 04:50:42 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `jos_events` VALUES('', 'вапвапвап', 'vapvapvap', '', '
вапвапва', '
вапвапва', '0', '1', '0', '0', '0') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\WebServers\home\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `jo...', false, Array)
#1 D:\WebServers\home\application\classes\controller\users.php(235): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Users->action_add()
#3 D:\WebServers\home\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#7 {main}
2012-11-05 04:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-05 04:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-11-05 04:55:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\users.php [ 234 ]
2012-11-05 04:55:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\users.php [ 234 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_user...')
#1 {main}
2012-11-05 04:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-05 04:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-11-05 04:57:40 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `jos_events` VALUES('', 'вапвапвап', 'vapvapvap', '', '
вапвапва', '
вапвапва', '0', '1', '0', '0', '0') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-05 04:57:40 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `jos_events` VALUES('', 'вапвапвап', 'vapvapvap', '', '
вапвапва', '
вапвапва', '0', '1', '0', '0', '0') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\WebServers\home\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `jo...', false, Array)
#1 D:\WebServers\home\application\classes\controller\users.php(236): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Users->action_add()
#3 D:\WebServers\home\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#7 {main}
2012-11-05 04:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-05 04:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-11-05 06:12:48 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `jos_events` VALUES('', 'sdfsdfsdfsd', 'sdfsdfsdfsd', '', '
sdfsd', '
sdfsd', '0', '1', '0', '0', '0') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-05 06:12:48 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `jos_events` VALUES('', 'sdfsdfsdfsd', 'sdfsdfsdfsd', '', '
sdfsd', '
sdfsd', '0', '1', '0', '0', '0') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\WebServers\home\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `jo...', false, Array)
#1 D:\WebServers\home\application\classes\controller\users.php(236): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Users->action_add()
#3 D:\WebServers\home\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#7 {main}
2012-11-05 06:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-05 06:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-11-05 06:21:23 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`production`.`jos_events_xref`, CONSTRAINT `xref_id_place` FOREIGN KEY (`id_place`) REFERENCES `jos_places` (`id_place`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `jos_events_xref` VALUES('334', '18', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-05 06:21:23 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`production`.`jos_events_xref`, CONSTRAINT `xref_id_place` FOREIGN KEY (`id_place`) REFERENCES `jos_places` (`id_place`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `jos_events_xref` VALUES('334', '18', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\WebServers\home\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `jo...', false, Array)
#1 D:\WebServers\home\application\classes\controller\users.php(238): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Users->action_add()
#3 D:\WebServers\home\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#7 {main}
2012-11-05 06:21:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-05 06:21:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-11-05 06:42:33 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`production`.`jos_events_xref`, CONSTRAINT `xref_id_category` FOREIGN KEY (`id_category`) REFERENCES `jos_events_category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `jos_events_xref` VALUES('335', '', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-05 06:42:33 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`production`.`jos_events_xref`, CONSTRAINT `xref_id_category` FOREIGN KEY (`id_category`) REFERENCES `jos_events_category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `jos_events_xref` VALUES('335', '', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\WebServers\home\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `jo...', false, Array)
#1 D:\WebServers\home\application\classes\controller\users.php(238): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Users->action_add()
#3 D:\WebServers\home\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#7 {main}
2012-11-05 06:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-05 06:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-11-05 06:43:04 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`production`.`jos_events_xref`, CONSTRAINT `xref_id_category` FOREIGN KEY (`id_category`) REFERENCES `jos_events_category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `jos_events_xref` VALUES('336', '', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-05 06:43:04 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`production`.`jos_events_xref`, CONSTRAINT `xref_id_category` FOREIGN KEY (`id_category`) REFERENCES `jos_events_category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `jos_events_xref` VALUES('336', '', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\WebServers\home\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `jo...', false, Array)
#1 D:\WebServers\home\application\classes\controller\users.php(238): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Users->action_add()
#3 D:\WebServers\home\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#7 {main}
2012-11-05 06:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-05 06:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-11-05 06:43:09 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`production`.`jos_events_xref`, CONSTRAINT `xref_id_category` FOREIGN KEY (`id_category`) REFERENCES `jos_events_category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `jos_events_xref` VALUES('337', '', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-05 06:43:09 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`production`.`jos_events_xref`, CONSTRAINT `xref_id_category` FOREIGN KEY (`id_category`) REFERENCES `jos_events_category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `jos_events_xref` VALUES('337', '', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\WebServers\home\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `jo...', false, Array)
#1 D:\WebServers\home\application\classes\controller\users.php(238): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Users->action_add()
#3 D:\WebServers\home\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#7 {main}
2012-11-05 06:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-05 06:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-11-05 06:43:23 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`production`.`jos_events_xref`, CONSTRAINT `xref_id_place` FOREIGN KEY (`id_place`) REFERENCES `jos_places` (`id_place`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `jos_events_xref` VALUES('338', '18', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-05 06:43:23 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`production`.`jos_events_xref`, CONSTRAINT `xref_id_place` FOREIGN KEY (`id_place`) REFERENCES `jos_places` (`id_place`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `jos_events_xref` VALUES('338', '18', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\WebServers\home\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `jo...', false, Array)
#1 D:\WebServers\home\application\classes\controller\users.php(238): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Users->action_add()
#3 D:\WebServers\home\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#7 {main}
2012-11-05 06:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-05 06:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#1 {main}
2012-11-05 06:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users/users/upload was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-11-05 06:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users/users/upload was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\WebServers\home\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\WebServers\home\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\WebServers\home\ANONS\index.php(129): Kohana_Request->execute()
#3 {main}