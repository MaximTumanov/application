<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-01 01:22:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 01:22:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 01:22:48 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 01:22:50 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 01:22:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 01:22:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 01:24:29 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 01:24:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 01:24:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 01:24:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 01:24:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published  = '1' GROUP BY event.id_event ORDER BY MIN(dates.date)' at line 19 [ SELECT 
					distinct
					event.alias,
					event.title,
					event.id_event as eventId,
					event.image,
					event.s_desc,
					event.wtf,
					MIN(dates.date) as `date`,
					cat.id_category as catId,
					cat.alias as catAlias,
					GROUP_CONCAT(distinct cat.icon) as `icons`,
					GROUP_CONCAT(distinct cat.title) as `icons_title`
			  FROM `jos_events` as event
			  	JOIN `jos_events_dates` as `dates` ON event.id_event = dates.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON place.id_place = xref.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND dates.date >= DATE(NOW())  AND event.id_event IN() AND event.published  = '1' GROUP BY event.id_event ORDER BY MIN(dates.date)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 01:24:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published  = '1' GROUP BY event.id_event ORDER BY MIN(dates.date)' at line 19 [ SELECT 
					distinct
					event.alias,
					event.title,
					event.id_event as eventId,
					event.image,
					event.s_desc,
					event.wtf,
					MIN(dates.date) as `date`,
					cat.id_category as catId,
					cat.alias as catAlias,
					GROUP_CONCAT(distinct cat.icon) as `icons`,
					GROUP_CONCAT(distinct cat.title) as `icons_title`
			  FROM `jos_events` as event
			  	JOIN `jos_events_dates` as `dates` ON event.id_event = dates.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON place.id_place = xref.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND dates.date >= DATE(NOW())  AND event.id_event IN() AND event.published  = '1' GROUP BY event.id_event ORDER BY MIN(dates.date)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 01:24:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 03:21:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 03:21:36 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 03:21:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published  = '1' GROUP BY event.id_event ORDER BY MIN(dates.date)' at line 19 [ SELECT 
					distinct
					event.alias,
					event.title,
					event.id_event as eventId,
					event.image,
					event.s_desc,
					event.wtf,
					MIN(dates.date) as `date`,
					cat.id_category as catId,
					cat.alias as catAlias,
					GROUP_CONCAT(distinct cat.icon) as `icons`,
					GROUP_CONCAT(distinct cat.title) as `icons_title`
			  FROM `jos_events` as event
			  	JOIN `jos_events_dates` as `dates` ON event.id_event = dates.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON place.id_place = xref.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND dates.date >= DATE(NOW())  AND event.id_event IN() AND event.published  = '1' GROUP BY event.id_event ORDER BY MIN(dates.date)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 03:21:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 03:21:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 03:21:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 03:21:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 03:21:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 03:22:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 03:23:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 03:23:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 03:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-01 03:49:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 04:06:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:07:25 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:07:26 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:07:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:07:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:07:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:07:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:07:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:09 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published  = '1' GROUP BY event.id_event ORDER BY MIN(dates.date)' at line 19 [ SELECT 
					distinct
					event.alias,
					event.title,
					event.id_event as eventId,
					event.image,
					event.s_desc,
					event.wtf,
					MIN(dates.date) as `date`,
					cat.id_category as catId,
					cat.alias as catAlias,
					GROUP_CONCAT(distinct cat.icon) as `icons`,
					GROUP_CONCAT(distinct cat.title) as `icons_title`
			  FROM `jos_events` as event
			  	JOIN `jos_events_dates` as `dates` ON event.id_event = dates.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON place.id_place = xref.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND dates.date >= DATE(NOW())  AND event.id_event IN() AND event.published  = '1' GROUP BY event.id_event ORDER BY MIN(dates.date)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published  = '1' GROUP BY event.id_event ORDER BY MIN(dates.date)' at line 19 [ SELECT 
					distinct
					event.alias,
					event.title,
					event.id_event as eventId,
					event.image,
					event.s_desc,
					event.wtf,
					MIN(dates.date) as `date`,
					cat.id_category as catId,
					cat.alias as catAlias,
					GROUP_CONCAT(distinct cat.icon) as `icons`,
					GROUP_CONCAT(distinct cat.title) as `icons_title`
			  FROM `jos_events` as event
			  	JOIN `jos_events_dates` as `dates` ON event.id_event = dates.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON place.id_place = xref.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND dates.date >= DATE(NOW())  AND event.id_event IN() AND event.published  = '1' GROUP BY event.id_event ORDER BY MIN(dates.date)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:22 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 06:08:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIM' at line 13 [ SELECT 
				event.*, 
				place.title as place_title,
				place.dop_title as place_dop_title,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event` 
			  	JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_places` as `place` ON xref.id_place = place.id_place
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' AND event.vip = '1' AND event.id_event IN() AND event.published = '1' 
			    GROUP BY event.id_event ORDER BY RAND() LIMIT 0, 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-01 14:09:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-01 14:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]