<?php
class Model_User extends Model {

	var $tUser   = 'jos_user';
	var $tUserEv = 'jos_user_events';
	var $tUserPl = 'jos_user_places';
	var $tXref   = 'jos_events_xref';
	var $tEvents = 'jos_events';
	var $tCat    = 'jos_events_category';
	var $tPlace  = 'jos_places';
	var $tPlaceCat = 'jos_places_category';
	var $tDates  = 'jos_events_dates';
	var $id    = 'id';

	public function getUserInfo($id_user) {
		return DB::query(Database::SELECT, "SELECT * FROM `{$this->tUser}` WHERE `{$this->id}` = '{$id_user}'")->as_object()->execute()->current();
	}

	function getCategory() {
		$q = "SELECT `id_category`, `title` FROM `{$this->tCat}` WHERE published = '1' ORDER BY title";
		return DB::query(Database::SELECT, $q)->as_object()->execute();
	}

	public function getUserEvents($id_user) {
		$get_ids = "SELECT GROUP_CONCAT(distinct id_event) as `ids` FROM `{$this->tUserEv}` WHERE id_user = '{$id_user}' AND `date` >= DATE(NOW())";
		$ids = DB::query(Database::SELECT, $get_ids)->execute()->get('ids');

		if (!$ids) return null;

		$q = "SELECT
				event.title,
				event.alias,
				#GROUP_CONCAT(distinct cat.icon) as `icons`,
				GROUP_CONCAT(distinct cat.title) as `icons_title`,
				cat.alias as `catAlias`,
				place.google as `google`,
				place.address as `address`,
				place.dop_title as `place_title`,
				dates.date as `date`,
				uDate.date as `uDate`
			  FROM `{$this->tEvents}` as `event` 
				JOIN `{$this->tXref}` as `xref` ON xref.id_event = event.id_event
				JOIN `{$this->tCat}` as `cat` ON xref.id_category = cat.id_category
				JOIN `{$this->tPlace}` as `place` ON place.id_place = xref.id_place
				JOIN `{$this->tDates}` as `dates` ON dates.id_event = xref.id_event
				JOIN `{$this->tUserEv}` as `uDate` ON uDate.id_event = xref.id_event
			  WHERE event.id_event IN({$ids}) AND event.published = '1' AND dates.type = '3' 
			  	GROUP BY event.id_event ORDER BY `uDate`";

		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
	}

	public function getUserPlaces($id_user) {
		$get_ids = "SELECT GROUP_CONCAT(distinct id_place) as `ids` FROM `{$this->tUserPl}` WHERE id_user = '{$id_user}' ";
		$ids = DB::query(Database::SELECT, $get_ids)->execute()->get('ids');

		if (!$ids) return null;

		$q = "SELECT 
				place.*,
				#GROUP_CONCAT(distinct cat.icon) as `icons`,
				GROUP_CONCAT(distinct cat.title) as `icons_title` 
			  FROM `{$this->tPlace}` as `place`
			    JOIN `{$this->tPlaceCat}` as `plcat` ON plcat.id_place = place.id_place
 				JOIN `{$this->tCat}` as `cat` ON cat.id_category = plcat.id_category
			  WHERE place.id_place IN({$ids}) AND place.published = '1' GROUP BY place.id_place";
		
		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
	}

	function eventToList($id_event, $id_user, $date, $action) {
		if ($action == 'add') {
			return DB::query(Database::INSERT, "INSERT INTO `{$this->tUserEv}` VALUES('{$id_user}', '{$id_event}', '{$date}')")->execute();	
		} elseif ($action == 'remove') {
			return DB::query(Database::DELETE, "DELETE FROM `{$this->tUserEv}` WHERE `id_user` = '{$id_user}' AND `id_event` = '{$id_event}' AND `date` = '{$date}'")->execute();			
		}
	}

	public function placeToList($id_place, $id_user, $action) {
		if ($action == 'add') {
			return DB::query(Database::INSERT, "INSERT INTO `{$this->tUserPl}` VALUES('{$id_user}', '{$id_place}')")->execute();		
		} elseif ($action == 'remove') {
			return DB::query(Database::DELETE, "DELETE FROM `{$this->tUserPl}` WHERE `id_user` = '{$id_user}' AND `id_place` = '{$id_place}'")->execute();			
		}		
	}

	public function getMyPlacesIds($id_user) {
		return DB::query(Database::SELECT, "SELECT GROUP_CONCAT(distinct id_place) as `ids` FROM `jos_user_places` WHERE id_user = '{$id_user}'")->execute()->get('ids');
	}

	public function getMyEventsIds($id_user, $date) {
		return DB::query(Database::SELECT, "SELECT GROUP_CONCAT(distinct id_event) as `ids` FROM `jos_user_events` WHERE id_user = '{$id_user}' AND `date` = DATE('{$date}')")->execute()->get('ids');
	}
}
?>