<?php
class Model_Cinema extends Model {

	var $tItem  = 'jos_films';
	var $tXref  = 'jos_films_xref';
	var $tTime = 'jos_films_time';
	var $tCinema = 'jos_cinema';
	var $id     = 'id_films';

	var $tUser = '#__user';
	var $tUserEv = '#__user_events';
	var $tUserPl = '#__user_places';
    var $tUserCi = '#__user_cinema';

	public function before() {
		DB::query(Database::SELECT, "SET SESSION group_concat_max_len = 16384");
		parent::before();
	}

	public function getItem($id_cinema) {
		$q = "SELECT *  FROM `{$this->tCinema}` as `cinema` WHERE cinema.id_cinema = '{$id_cinema}'";

		return DB::query(Database::SELECT, $q)->as_object()->execute()->current();
	}

	public function getItemIdFromAlias($alias) {

		$q = "SELECT id_cinema FROM `{$this->tCinema}` WHERE `alias` = '{$alias}'";
		return DB::query(Database::SELECT, $q)->execute()->get('id_cinema');
	}

	public function getCinemaList() {
		$q = "SELECT * FROM `{$this->tCinema}` as `cinema`
			  WHERE cinema.published = '1' ORDER BY cinema.title";
		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
	}

	public function getCinemaLetters() {
		$q = "SELECT GROUP_CONCAT(distinct UPPER(SUBSTR(title, 1, 1))) as `letters` FROM `{$this->tCinema}` WHERE published = '1' ORDER BY title";
		return DB::query(Database::SELECT, $q)->execute()->get('letters');
	}

	public function getCinemaFromSearch($text, $id_category) {
		if (isset($text) && $text != 'Что ищем?') {
			$text = UTF8::strtolower($this->_good($text));
			$q = "SELECT GROUP_CONCAT(distinct cinema.id_cinema) as `ids` FROM `jos_cinema` as `cinema` WHERE cinema.published = '1' ";
			$q .= " AND (LOWER(cinema.title) LIKE '%". str_recinema(" ", "%' OR LOWER(cinema.title) LIKE '%", $text). "%'";
			$q .= " OR  LOWER(cinema.dop_title) LIKE '%". str_recinema(" ", "%' OR LOWER(cinema.dop_title) LIKE '%", $text). "%')";
			$ids = DB::query(Database::SELECT, $q)->execute()->get('ids');

			if (!$ids) return false;
		}

		$q = "SELECT
			    distinct
			    cinema.id_cinema as `cinemaId`,
			    cinema.title,
			    cinema.alias,
			    cinema.dop_title,
			    cinema.image,
			    cinema.tel,
			    cinema.address,
			    cinema.web,
			    cinema.email,
			    cinema.show_email,
				GROUP_CONCAT(distinct cat.icon) as `icons` ,
				GROUP_CONCAT(distinct cat.title) as `icons_title`
			  FROM `{$this->tCinema}` as `cinema`
				JOIN `jos_cinema_category` as xref ON xref.id_cinema = cinema.id_cinema
				JOIN `{$this->tCat}` as `cat` ON xref.id_category = cat.id_category
			  WHERE cinema.published = '1' ";

		if (isset($ids)) {
			$q .= " AND cinema.id_cinema IN ({$ids}) ";
		}

		if ($id_category) {
			$q .= " AND xref.id_category = '{$id_category}' ";
		}

		$q .= " GROUP BY cinema.id_cinema ORDER BY cinema.title";
		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
	}

	function _good($text) {
		$search = substr($text, 0, 64);
		$search = preg_replace("/[^\w\x7F-\xFF\s]/", " ", $search);
		$good = trim(preg_replace("/\s(\S{1,2})\s/", " ", ereg_replace(" +", "  "," $search ")));
		$good = ereg_replace(" +", " ", $good);
		return $good;
	}

	function getCountUsersLike($id_cinema) {
		return DB::query(Database::SELECT, "SELECT count(*) as `c` FROM `jos_user_cinema` WHERE id_cinema = '{$id_cinema}'")->execute()->get('c');
	}

	public function getRelatedFilms($id_cinema) {
		$get_ids = "SELECT GROUP_CONCAT(distinct id_event) as `ids` FROM `jos_films_time` WHERE type = '3' AND date >= DATE(NOW())";
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
			  WHERE xref.id_cinema = '{$id_cinema}' AND dates.type = '3' AND dates.date >= NOW() AND event.id_event IN({$ids}) AND event.published = '1' GROUP BY event.id_event ORDER BY dates.date";

		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
	}

    public function getFilmsCinema($id_cinema) {

        $q = "SELECT
				distinct *
			  FROM `{$this->tItem}` as `films`
			    JOIN `{$this->tXref}` as `xref` ON xref.id_films = films.id_films
			    JOIN `{$this->tTime}` as `times` ON xref.id_films = times.id_films
			  WHERE films.date_last >= DATE(NOW()) AND xref.id_cinema = '{$id_cinema}'  AND films.published = '1' GROUP BY films.id_films";
			  //$q .= "films.date_last >= DATE(NOW())";
        return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
    }

    public function getAllTime() {

        $q = "SELECT
				distinct *
			  FROM `{$this->tTime}` as `times` ORDER BY times.time;";
        return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
    }
}
?>