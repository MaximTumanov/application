<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-26 02:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sunny/upload/IMG_02961.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 03:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 03:51:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 04:12:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 118 ]
2012-10-26 04:12:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 06:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sunny/upload/IMG_02961.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 07:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 08:33:17 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 118 ]
2012-10-26 08:33:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 118 ]
2012-10-26 08:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 08:34:14 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 118 ]
2012-10-26 08:41:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/films.php [ 50 ]
2012-10-26 09:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 09:50:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 118 ]
2012-10-26 09:52:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 118 ]
2012-10-26 10:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 11:41:38 --- ERROR: ErrorException [ 8 ]: Undefined index:  cat_alias ~ APPPATH/classes/controller/events.php [ 103 ]
2012-10-26 11:41:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  cat_alias ~ APPPATH/classes/controller/events.php [ 103 ]
2012-10-26 11:59:25 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$type ~ APPPATH/views/pages/events_search.php [ 41 ]
2012-10-26 11:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 13:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL events/getQuick was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-10-26 13:17:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: get_ids ~ APPPATH/classes/model/event.php [ 183 ]
2012-10-26 13:17:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: get_ids ~ APPPATH/classes/model/event.php [ 183 ]
2012-10-26 13:19:25 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY dates.date' at line 14 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY dates.date ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-26 13:24:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY dates.date' at line 14 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY dates.date ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-26 13:24:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY dates.date' at line 14 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY dates.date ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/anons4/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ??????ev...', false, Array)
#1 /var/www/anons4/application/classes/model/event.php(201): Kohana_Database_Query->execute()
#2 /var/www/anons4/application/classes/controller/events.php(76): Model_Event->getQuick('today')
#3 [internal function]: Controller_Events->action_getQuick()
#4 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Events))
#5 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-26 13:44:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: get_ids ~ APPPATH/classes/model/event.php [ 183 ]
2012-10-26 13:44:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: get_ids ~ APPPATH/classes/model/event.php [ 183 ]
--
#0 /var/www/anons4/application/classes/model/event.php(183): Kohana_Core::error_handler('cat-2')
#1 /var/www/anons4/application/classes/controller/events.php(76): Model_Event->getQuick()
#2 [internal function]: Controller_Events->action_getQuick(Object(Controller_Events))
#3 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-26 13:44:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: get_ids ~ APPPATH/classes/model/event.php [ 183 ]
2012-10-26 13:44:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: get_ids ~ APPPATH/classes/model/event.php [ 183 ]
--
#0 /var/www/anons4/application/classes/model/event.php(183): Kohana_Core::error_handler('cat-2')
#1 /var/www/anons4/application/classes/controller/events.php(76): Model_Event->getQuick()
#2 [internal function]: Controller_Events->action_getQuick(Object(Controller_Events))
#3 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-26 13:45:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: get_ids ~ APPPATH/classes/model/event.php [ 183 ]
2012-10-26 13:45:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: get_ids ~ APPPATH/classes/model/event.php [ 183 ]
--
#0 /var/www/anons4/application/classes/model/event.php(183): Kohana_Core::error_handler('2')
#1 /var/www/anons4/application/classes/controller/events.php(76): Model_Event->getQuick()
#2 [internal function]: Controller_Events->action_getQuick(Object(Controller_Events))
#3 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-26 14:00:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event' at line 15 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
        place.id_place as placeId,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event.id_event ORDER BY dates.date ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-26 14:00:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event' at line 15 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
        place.id_place as placeId,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event.id_event ORDER BY dates.date ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/anons4/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ??????ev...', false, Array)
#1 /var/www/anons4/application/classes/model/event.php(209): Kohana_Database_Query->execute()
#2 /var/www/anons4/application/classes/controller/events.php(76): Model_Event->getQuick(NULL)
#3 [internal function]: Controller_Events->action_getQuick()
#4 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Events))
#5 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-26 14:14:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event' at line 15 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
        place.id_place as placeId,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event.id_event ORDER BY dates.date ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-26 14:14:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event' at line 15 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
        place.id_place as placeId,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event.id_event ORDER BY dates.date ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/anons4/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ??????ev...', false, Array)
#1 /var/www/anons4/application/classes/model/event.php(223): Kohana_Database_Query->execute()
#2 /var/www/anons4/application/classes/controller/events.php(76): Model_Event->getQuick('22')
#3 [internal function]: Controller_Events->action_getQuick()
#4 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Events))
#5 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-26 14:14:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event' at line 15 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
        place.id_place as placeId,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event.id_event ORDER BY dates.date ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-26 14:14:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event' at line 15 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
        place.id_place as placeId,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event.id_event ORDER BY dates.date ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/anons4/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ??????ev...', false, Array)
#1 /var/www/anons4/application/classes/model/event.php(223): Kohana_Database_Query->execute()
#2 /var/www/anons4/application/classes/controller/events.php(76): Model_Event->getQuick('22')
#3 [internal function]: Controller_Events->action_getQuick()
#4 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Events))
#5 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-26 14:14:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event' at line 15 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
        place.id_place as placeId,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event.id_event ORDER BY dates.date ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-26 14:14:46 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event' at line 15 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
        place.id_place as placeId,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event.id_event ORDER BY dates.date ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/anons4/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ??????ev...', false, Array)
#1 /var/www/anons4/application/classes/model/event.php(223): Kohana_Database_Query->execute()
#2 /var/www/anons4/application/classes/controller/events.php(76): Model_Event->getQuick('22')
#3 [internal function]: Controller_Events->action_getQuick()
#4 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Events))
#5 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-26 14:14:50 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event' at line 15 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
        place.id_place as placeId,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event.id_event ORDER BY dates.date ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-26 14:14:50 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event' at line 15 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
        place.id_place as placeId,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event.id_event ORDER BY dates.date ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/anons4/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ??????ev...', false, Array)
#1 /var/www/anons4/application/classes/model/event.php(223): Kohana_Database_Query->execute()
#2 /var/www/anons4/application/classes/controller/events.php(76): Model_Event->getQuick('22')
#3 [internal function]: Controller_Events->action_getQuick()
#4 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Events))
#5 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-26 14:15:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event' at line 15 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
        place.id_place as placeId,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event.id_event ORDER BY dates.date ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-26 14:15:00 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event' at line 15 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
        place.alias as placeAlias,
        place.id_place as placeId,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE event.id_event IN() AND event.published = '1' AND  DATE(dates.date) >= DATE(NOW())  GROUP BY event.id_event ORDER BY dates.date ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/anons4/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ??????ev...', false, Array)
#1 /var/www/anons4/application/classes/model/event.php(223): Kohana_Database_Query->execute()
#2 /var/www/anons4/application/classes/controller/events.php(76): Model_Event->getQuick('22')
#3 [internal function]: Controller_Events->action_getQuick()
#4 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Events))
#5 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-26 14:15:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: get_ids ~ APPPATH/classes/model/event.php [ 178 ]
2012-10-26 14:15:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: get_ids ~ APPPATH/classes/model/event.php [ 178 ]
--
#0 /var/www/anons4/application/classes/model/event.php(178): Kohana_Core::error_handler()
#1 /var/www/anons4/application/classes/controller/index.php(18): Model_Event->getActiveCategory()
#2 [internal function]: Controller_Index->action_index(Object(Controller_Index))
#3 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-26 14:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 14:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 14:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 14:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 14:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sunny/upload/IMG_02961.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 14:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sunny/upload/IMG_02961.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 14:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sunny/upload/IMG_02961.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 14:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sunny/upload/IMG_02961.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 14:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/vecherinka/halloween-party/ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 14:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/vecherinka/halloween-party/ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 14:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/vecherinka/halloween-party/vk.com/js/api/openapi.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 14:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/show/vecherinka/halloween-party/vk.com/js/api/openapi.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 15:10:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
2012-10-26 15:10:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(157): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-26 15:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 15:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 15:37:13 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
2012-10-26 15:37:13 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(157): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-26 15:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 15:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 15:37:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
2012-10-26 15:37:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(157): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-26 15:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 15:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 15:59:06 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
2012-10-26 15:59:06 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(157): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-26 16:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vk.com/js/api/openapi.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 16:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vk.com/js/api/openapi.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 16:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 16:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 16:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 16:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 17:17:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 17:17:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 17:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 17:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui/images/ui-bg_glass_65_ffffff_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 18:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-26 18:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-26 23:32:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
2012-10-26 23:32:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/events.php [ 157 ]
--
#0 /var/www/anons4/application/classes/controller/events.php(157): Kohana_Core::error_handler()
#1 [internal function]: Controller_Events->action_show(Object(Controller_Events))
#2 /var/www/anons4/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/anons4/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/anons4/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/anons4/anons.dp.ua/index.php(109): Kohana_Request->execute()
#6 {main}