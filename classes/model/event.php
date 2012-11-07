<?php
class Model_Event extends Model {

	var $tItem  = 'jos_events';
	var $tXref  = 'jos_events_xref';
	var $tDates = 'jos_events_dates';
	var $tCat   = 'jos_events_category';
	var $tPlace = 'jos_places';
	var $id     = 'id_event';

	var $tUser = '#__user';
	var $tUserEv = '#__user_events';
	var $tUserPl = '#__user_places';

	public function before() {
		DB::query(Database::SELECT, "SET SESSION group_concat_max_len = 16384");
		parent::before();
	}

	public function getLikeEvents($catIds, $eventId, $date = false){
		$q = "SELECT 
						distinct event.*,
						place.alias as `placeAlias`,
						cat.alias as catAlias,
						MIN(dates.date) as `date`,
						dates.time
					FROM `{$this->tItem}` as `event`
						JOIN `{$this->tXref}` as `xref` ON xref.id_event = event.id_event
						JOIN `{$this->tPlace}` as `place` ON xref.id_place = place.id_place
						JOIN `{$this->tDates}` as `dates` ON xref.id_event = dates.id_event
				    JOIN `{$this->tCat}` as `cat` ON xref.id_category = cat.id_category
				  WHERE cat.id_category IN({$catIds}) AND dates.type = '3' AND event.id_event != '{$eventId}'
		";

			if ($date) {
				$q .= " AND DATE(dates.date) = '{$date}' ";
			} else {
				$q .= " AND DATE(dates.date) >= DATE(NOW()) ";
			}

			$q .= " GROUP BY event.id_event ORDER BY dates.date ASC LIMIT 10 ";
			return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
	}

	public function getItem($id, $date = false) {
		$q = "SELECT 
						distinct event.*,
						place.alias as `placeAlias`,
						place.title as `placeTitle`,
						place.dop_title as `placeDopTitle`,
						place.id_place as `placeId`,
						place.address as `address_org`,
						place.tel,
						place.web,
						place.email,
						place.show_email,
						place.google,
						MIN(dates.date) as `date`,
						dates.time as `time`,
						GROUP_CONCAT(distinct cat.icon) as `icons`,
						GROUP_CONCAT(distinct cat.title) as `icons_title`,
						GROUP_CONCAT(distinct xref.id_category) as `categories` 
				  FROM `{$this->tItem}` as `event` 
				    JOIN `{$this->tXref}` as `xref` ON xref.id_event = event.id_event
				    JOIN `{$this->tPlace}` as `place` ON xref.id_place = place.id_place
				    JOIN `{$this->tDates}` as `dates` ON xref.id_event = dates.id_event
				    JOIN `{$this->tCat}` as `cat` ON xref.id_category = cat.id_category
			   	WHERE event.{$this->id} = '{$id}' AND dates.type = '3' ";
			if ($date) {
				$q .= " AND DATE(dates.date) = '{$date}' ";
			}
			
			$q .= " GROUP BY event.id_event ";

			return DB::query(Database::SELECT, $q)->as_object()->execute()->current();
	}

	function getTypeEvent($id_event, $type) {
		$q = "SELECT * FROM `jos_events_dates` WHERE `id_event` = '{$id_event}' AND `type` IN(1, 2)";
		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();		
	}

	function getIndexEvent() {
		$count = Kohana::$config->load('anons_config.items_on_front');
		$get_ids = "SELECT GROUP_CONCAT(distinct id_event) as `ids` FROM `jos_events_dates` WHERE type = '3' AND date >= DATE(NOW())";
		$ids = DB::query(Database::SELECT, $get_ids)->execute()->get('ids');

		$q = "SELECT 
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
			  WHERE event.vip = '1' 
			  	AND event.id_event IN({$ids}) 
			  	AND event.published = '1' 
			  	AND DATE(dates.date) >= DATE(NOW())
			    GROUP BY event.id_event 
			    ORDER BY MIN(dates.date) ASC";

		return DB::query(Database::SELECT, $q)->as_object()->execute();	
	}

	function getEventsForPlace($id_place) {
		$get_ids = "SELECT GROUP_CONCAT(distinct id_event) as `ids` FROM `jos_events_dates` WHERE type = '3' AND date >= DATE(NOW())";
		$ids = DB::query(Database::SELECT, $get_ids)->execute()->get('ids');

		$q = "SELECT
				event.title,
				event.alias,
				event.image,
				cat.id_category as catId,
				cat.alias as catAlias,
				MIN(dates.date) as `date`
			  FROM `jos_events` as `event`
				JOIN `jos_events_dates` as `dates` ON dates.id_event = event.id_event
			  	JOIN `jos_events_xref` as `xref` ON event.id_event = xref.id_event
			  	JOIN `jos_events_category` as `cat` ON xref.id_category = cat.id_category
			  WHERE xref.id_place = '{$id_place}' AND dates.type = '3' AND dates.date >= DATE(NOW())  AND event.published = '1' GROUP BY event.id_event";

		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
	}

	function getEventsDates($from, $to) {
		#$q = "SELECT GROUP_CONCAT(distinct UNIX_TIMESTAMP(DATE(dates.date))) as `dates` FROM `{$this->tDates}` as `dates`
      $q = "SELECT GROUP_CONCAT(distinct DATE(dates.date)) as `dates` FROM `{$this->tDates}` as `dates`
		    JOIN `{$this->tItem}` as `event` ON event.id_event = dates.id_event
		    JOIN `{$this->tXref}` as `xref` ON xref.id_event = event.id_event
		    JOIN `{$this->tPlace}` as `place` ON place.id_place = xref.id_place
		  WHERE DATE(dates.date) >= STR_TO_DATE(NOW(),'%Y-%m-%d') AND DATE(dates.date) >= '{$from}' 
		    AND DATE(dates.date) <= '{$to}' AND dates.type = '3' AND event.published = '1'";	
		
		return DB::query(Database::SELECT, $q)->execute()->get('dates');
	}

	function getCategory() {
		$q = "SELECT `id_category`, `title` FROM `{$this->tCat}` WHERE published = '1' ORDER BY title";
		return DB::query(Database::SELECT, $q)->as_object()->execute();
	}

	function getCatIdFromAlias($alias) {
		$q = "SELECT id_category FROM `{$this->tCat}` WHERE `alias` = '{$alias}'";
		return DB::query(Database::SELECT, $q)->execute()->get('id_category');
	}

	public function getItemIdFromAlias($alias) {
		$q = "SELECT id_event FROM `{$this->tItem}` WHERE `alias` = '{$alias}'";
		return DB::query(Database::SELECT, $q)->execute()->get('id_event');
	}

	function getAllRecomended($used_ids) {
		$get_ids = "SELECT GROUP_CONCAT(distinct id_event) as `ids` FROM `jos_events_dates` WHERE type = '3' AND date >= DATE(NOW())";
		$ids = DB::query(Database::SELECT, $get_ids)->execute()->get('ids');

		$q = "SELECT 
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
			  WHERE event.vip = '1' 
			  	AND event.id_event IN({$ids}) 
			  	AND event.published = '1' 
			  	AND DATE(dates.date) >= DATE(NOW())
			  	AND dates.type = '3'
			   	GROUP BY event.id_event";

		return DB::query(Database::SELECT, $q)->execute()->as_array();	
	}

	public function getActiveCategory(){
		$q = "SELECT GROUP_CONCAT(distinct id_event) as `ids` FROM `jos_events_dates` WHERE type = '3' AND DATE(date) >= DATE(NOW())";
		$ids = DB::query(Database::SELECT, $q)->execute()->get('ids');

		$q = "SELECT 
		    distinct
				cat.title as `title`,
				cat.id_category as `id_category` 
				FROM `jos_events_category` as `cat`
					JOIN `jos_events_xref` as `xref` ON cat.id_category = xref.id_category 
				WHERE xref.id_event IN({$ids}) AND cat.published = '1' ORDER BY cat.title";

		return DB::query(Database::SELECT, $q)->as_object()->execute();
	}

	public function getQuick($what_search){
		if ($what_search == 'today'){
			$get_ids = "SELECT GROUP_CONCAT(distinct id_event) as `ids` FROM `jos_events_dates` WHERE type = '3' AND DATE(date) = DATE(NOW())";
		} elseif ($what_search == 'tomorrow'){
			$get_ids = "SELECT GROUP_CONCAT(distinct id_event) as `ids` FROM `jos_events_dates` WHERE type = '3' AND DATE(date) = (CURDATE() + INTERVAL 1 DAY)";
		} else {
			$get_ids = "SELECT GROUP_CONCAT(distinct id_event) as `ids` FROM `jos_events_xref` WHERE id_category = '{$what_search}'";
		} 

		$ids = DB::query(Database::SELECT, $get_ids)->execute()->get('ids');

		$q = "SELECT 
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
			  WHERE event.id_event IN({$ids}) AND event.published = '1' AND ";
			if ($what_search == 'tomorrow'){
				$q .= " DATE(dates.date) >= (CURDATE() + INTERVAL 1 DAY) ";
			} else {
				$q .= " DATE(dates.date) >= DATE(NOW()) ";
			}
			  $q .= " GROUP BY event.id_event ORDER BY MIN(dates.date)";

		return DB::query(Database::SELECT, $q)->execute()->as_array();
	}

	public function eventToList($id_event, $id_user, $date, $action) {
		if ($action == 'add') {
			DB::query(Database::INSERT, "INSERT INTO `{$this->tUserEv}` VALUES('{$id_user}', '{$id_event}', '{$date}')")->execute();	
		} elseif ($action == 'remove') {
			DB::query(Database::DELETE, "DELETE FROM `{$this->tUserEv}` WHERE `id_user` = '{$id_user}' AND `id_event` = '{$id_event}' AND `date` = '{$date}'")->execute();			
		}
	}

	public function getEventList($page = 1, $date = false) {
		/*$item_per_page = Kohana::$config->load('anons_config.item_per_page');
		$limitStart = ($page - 1) * $item_per_page;
		$limit = $item_per_page * $page;*/

		$get_ids = "SELECT GROUP_CONCAT(distinct id_event) as `ids` FROM `jos_events_dates` WHERE type = '3' AND ";

		$get_ids .= ($date) ? " DATE(date) = '{$date}' " : " date >= DATE(NOW()) ";
		$ids = DB::query(Database::SELECT, $get_ids)->execute()->get('ids');

		$q = "SELECT 
					distinct
					event.alias,
					event.title,
					event.id_event as eventId,
					event.image,
					event.s_desc,
					event.wtf,
					event.type,
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
			  WHERE ";
		$q .= ($date) ? " DATE(dates.date) = '{$date}' " : " dates.date >= DATE(NOW()) ";	
		$q .= " AND event.id_event IN({$ids}) AND event.published  = '1' GROUP BY event.id_event ORDER BY MIN(dates.date) ";

		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
	}

	public function getEventsFromSearch($text, $id_category, $date_type = 0, $date_from, $date_to, $time_from, $time_to) {
		$q = "SELECT GROUP_CONCAT(distinct id_event) as `ids` FROM `jos_events_dates` as `dates` WHERE dates.type = '3' AND DATE(dates.date) >= DATE(NOW()) ";

		$time = ($time_from != '00' || $time_to != '24') 
			? "AND TIME(dates.date) BETWEEN '{$time_from}' AND '{$time_to}'" 
			: '';

		switch ($date_type) {
			case 0:
				$date = " AND DATE(dates.date) >= DATE(NOW()) ";
				break;
			case 1:
				$q .= " AND DATE(dates.date) = CURDATE() ";
				$date = " AND DATE(dates.date) = CURDATE() ";
				break;
			case 2:
				$q .= " AND DATE(dates.date) = (CURDATE() + INTERVAL 1 DAY) ";
				$date = " AND DATE(dates.date) = (CURDATE() + INTERVAL 1 DAY) ";
				break;
			case 3:
				$d = date('w', strtotime(date('d.m.y')));
				if ($d == 6) {
					$q .= " AND DATE(dates.date) BETWEEN CURDATE() AND (CURDATE() + INTERVAL 1 DAY) ";
					$date = " AND DATE(dates.date) BETWEEN CURDATE() AND (CURDATE() + INTERVAL 1 DAY) ";
				} elseif ($d != 6 && $d) {
					$saturday = 6 - $d;
					$sunday = $saturday + 1;
					$q .= " AND DATE(dates.date) BETWEEN (CURDATE() + INTERVAL {$saturday} DAY) AND (CURDATE() + INTERVAL {$sunday} DAY) ";
					$date = " AND DATE(dates.date) BETWEEN (CURDATE() + INTERVAL {$saturday} DAY) AND (CURDATE() + INTERVAL {$sunday} DAY) ";
				} elseif (!$d) {
					$q .= " AND DATE(dates.date) = CURDATE() ";
					$date = " AND DATE(dates.date) = CURDATE() ";
				} 
				break;
			case 4:
				$d = date('w', strtotime(date('d.m.y')));
				if ($d == 6) {
					$q .= " AND DATE(dates.date) BETWEEN (CURDATE() + INTERVAL 7 DAY) AND (CURDATE() + INTERVAL 8 DAY) ";
					$date = " AND DATE(dates.date) BETWEEN (CURDATE() + INTERVAL 7 DAY) AND (CURDATE() + INTERVAL 8 DAY) ";
				} elseif ($d != 6 && $d) {
					$saturday = 13 - $d;
					$sunday = $saturday + 1;
					$q .= " AND DATE(dates.date) BETWEEN (CURDATE() + INTERVAL {$saturday} DAY) AND (CURDATE() + INTERVAL {$sunday} DAY) ";
					$date = " AND DATE(dates.date) BETWEEN (CURDATE() + INTERVAL {$saturday} DAY) AND (CURDATE() + INTERVAL {$sunday} DAY) ";
				} elseif (!$d) {
					$q .= " AND DATE(dates.date) = (CURDATE() + INTERVAL 7 DAY) ";
					$date = " AND DATE(dates.date) = (CURDATE() + INTERVAL 7 DAY) ";
				} 
				break;
			case 5:
				if ($date_from && $date_to) {
					$q .= " AND DATE(dates.date) >= '{$date_from}' AND DATE(dates.date) <= '{$date_to}' ";
					$date = " AND DATE(dates.date) >= '{$date_from}' AND DATE(dates.date) <= '{$date_to}' ";
				}
				break;			
		}

		$ids = DB::query(Database::SELECT, $q)->execute()->get('ids');

		if (!$ids) return false;

		$q = "SELECT 
			    distinct 
			    event.id_event as `eventId`,
			    event.title,
			    event.alias,
			    event.image,
			    event.s_desc,
			    event.wtf,
			    MIN(dates.date) as `date`,
			    cat.id_category as catId,
			    cat.alias as `catAlias`,
				GROUP_CONCAT(distinct cat.icon) as `icons` ,
				GROUP_CONCAT(distinct cat.title) as `icons_title` 
			  FROM `{$this->tItem}` as `event`
			    JOIN `{$this->tXref}` as `xref` ON xref.id_event = event.id_event
			    JOIN `{$this->tDates}` as `dates` ON dates.id_event = event.id_event
			    JOIN `{$this->tCat}` as `cat` ON xref.id_category = cat.id_category
			    JOIN `{$this->tPlace}` as `place` ON place.id_place = xref.id_place
			  WHERE event.published = '1' AND event.id_event IN({$ids}) {$date} {$time} ";
			
	
		if ($id_category) {
			$q .= " AND cat.id_category IN({$id_category}) ";
		}
		
		if ($text && $text != 'Что ищем?') {
			$text = UTF8::strtolower($this->_good($text));
			$q .= " AND LOWER(event.title) LIKE '%". str_replace(" ", "%' OR LOWER(event.title) LIKE '%", $text). "%'";
		}
		
		$q .= " GROUP BY event.id_event ORDER BY dates.date ASC ";
		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
	}

	function _good($text) {
		$search = substr($text, 0, 64);
		$search = preg_replace("/[^\w\x7F-\xFF\s]/", " ", $search);
		$good = trim(preg_replace("/\s(\S{1,2})\s/", " ", ereg_replace(" +", "  "," $search ")));
		$good = ereg_replace(" +", " ", $good);
		return $good;
	}

	function getCountUsersGo($id_event, $date) {
		$q = "SELECT count(*) as `c` FROM `jos_user_events` WHERE id_event = '{$id_event}' AND `date` = DATE('{$date}')";
		return DB::query(Database::SELECT, $q)->execute()->get('c');
	}
}
?>