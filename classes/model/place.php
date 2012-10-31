<?php
class Model_Place extends Model {

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

	public function getItem($id_place) {
		$q = "SELECT
				place.*,
				GROUP_CONCAT(distinct cat.icon) as `icons`,
				GROUP_CONCAT(distinct cat.title) as `icons_title` 
			  FROM `{$this->tPlace}` as `place`
			  	LEFT JOIN `jos_places_category` as xref ON xref.id_place = place.id_place
			  	LEFT JOIN `{$this->tCat}` as `cat` ON cat.id_category = xref.id_category
			  WHERE place.id_place = '{$id_place}' GROUP BY place.id_place";
			  	  
		return DB::query(Database::SELECT, $q)->as_object()->execute()->current();
	}

	public function getItemIdFromAlias($alias) {
		$q = "SELECT id_place FROM `{$this->tPlace}` WHERE `alias` = '{$alias}'";
		return DB::query(Database::SELECT, $q)->execute()->get('id_place');
	}

	public function getPlacesList() {
		$q = "SELECT * FROM `{$this->tPlace}` as `place`
			  WHERE place.published = '1' ORDER BY place.title";
		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();		
	}

	public function getPlacesLetters() {
		$q = "SELECT GROUP_CONCAT(distinct UPPER(SUBSTR(title, 1, 1))) as `letters` FROM `{$this->tPlace}` WHERE published = '1' ORDER BY title";
		return DB::query(Database::SELECT, $q)->execute()->get('letters');
	}

	public function getPlacesFromSearch($text, $id_category) {
		if (isset($text) && $text != 'Что ищем?') {
			$text = UTF8::strtolower($this->_good($text));
			$q = "SELECT GROUP_CONCAT(distinct place.id_place) as `ids` FROM `jos_places` as `place` WHERE place.published = '1' ";
			$q .= " AND (LOWER(place.title) LIKE '%". str_replace(" ", "%' OR LOWER(place.title) LIKE '%", $text). "%'";
			$q .= " OR  LOWER(place.dop_title) LIKE '%". str_replace(" ", "%' OR LOWER(place.dop_title) LIKE '%", $text). "%')";
			$ids = DB::query(Database::SELECT, $q)->execute()->get('ids');

			if (!$ids) return false;
		}

		$q = "SELECT 
			    distinct 
			    place.id_place as `placeId`,
			    place.title,
			    place.alias,
			    place.dop_title,
			    place.image,
			    place.tel,
			    place.address,
			    place.web,
			    place.email,
			    place.show_email,
				GROUP_CONCAT(distinct cat.icon) as `icons` ,
				GROUP_CONCAT(distinct cat.title) as `icons_title`
			  FROM `{$this->tPlace}` as `place`
				JOIN `jos_places_category` as xref ON xref.id_place = place.id_place
				JOIN `{$this->tCat}` as `cat` ON xref.id_category = cat.id_category
			  WHERE place.published = '1' ";
		
		if (isset($ids)) {
			$q .= " AND place.id_place IN ({$ids}) ";
		}

		if ($id_category) {
			$q .= " AND xref.id_category = '{$id_category}' ";
		}
				
		$q .= " GROUP BY place.id_place ORDER BY place.title";
		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();		
	}

	function _good($text) {
		$search = substr($text, 0, 64);
		$search = preg_replace("/[^\w\x7F-\xFF\s]/", " ", $search);
		$good = trim(preg_replace("/\s(\S{1,2})\s/", " ", ereg_replace(" +", "  "," $search ")));
		$good = ereg_replace(" +", " ", $good);
		return $good;
	}

	function getCountUsersLike($id_place) {
		return DB::query(Database::SELECT, "SELECT count(*) as `c` FROM `jos_user_places` WHERE id_place = '{$id_place}'")->execute()->get('c');
	}

	public function getRelatedEvents($id_place) {
		$get_ids = "SELECT GROUP_CONCAT(distinct id_event) as `ids` FROM `jos_events_dates` WHERE type = '3' AND date >= DATE(NOW())";
		$ids = DB::query(Database::SELECT, $get_ids)->execute()->get('ids');

		if (!$ids) return false;

		$q = "SELECT 
				distinct 
				event.id_event,
				event.title,
				event.alias,
				event.image,
				MIN(dates.date) as `date`,
				dates.time,
				cat.id_category as `catId`,
				cat.alias as `catAlias`
			  FROM `{$this->tItem}` as `event`
			    JOIN `{$this->tXref}` as `xref` ON xref.id_event = event.id_event
			    JOIN `{$this->tDates}` as `dates` ON xref.id_event = dates.id_event
			    JOIN `{$this->tCat}` as `cat` ON cat.id_category = xref.id_category
			  WHERE xref.id_place = '{$id_place}' AND dates.type = '3' AND dates.date >= NOW() AND event.id_event IN({$ids}) AND event.published = '1' GROUP BY event.id_event ORDER BY dates.date";

		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
	}
}
?>