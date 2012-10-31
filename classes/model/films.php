<?php
class Model_Films extends Model {

	var $tItem  = 'jos_films';
	var $tXref  = 'jos_films_xref';
	var $tDates = 'jos_films_time';
	var $tCinema = 'jos_cinema';
	var $id     = 'id_films';

	var $tUser = '#__user';
	var $tUserEv = '#__user_events';
	var $tUserPl = '#__user_places';

	public function before() {
		DB::query(Database::SELECT, "SET SESSION group_concat_max_len = 16384");
		parent::before();
	}

	public function getItem($id) {

		$q = "SELECT 
						distinct films.*,
						cinema.alias as `cinemaAlias`,
						cinema.title as `cinemaTitle`,
						cinema.id_cinema as `cinemaId`
				  FROM `{$this->tItem}` as `films`
				    JOIN `{$this->tXref}` as `xref` ON xref.id_films = films.id_films
				    JOIN `{$this->tCinema}` as `cinema` ON xref.id_cinema = cinema.id_cinema
				    JOIN `{$this->tDates}` as `dates` ON xref.id_films = dates.id_films
			   	WHERE films.{$this->id} = '{$id}' ";

			
			$q .= " GROUP BY films.id_films ";

			return DB::query(Database::SELECT, $q)->as_object()->execute()->current();
	}

	

	public function getItemIdFromAlias($alias) {
		$q = "SELECT id_films FROM `{$this->tItem}` WHERE `original_name` = '{$alias}'";
		return DB::query(Database::SELECT, $q)->execute()->get('id_films');
	}

    public function getTimeAll() {
        $q = "SELECT * FROM `{$this->tDates}`";
        return DB::query(Database::SELECT, $q)->execute()->as_array();
    }



	

	public function getFilmList($page = 1, $date = false) {
		
		$q = "SELECT
					distinct
					film.*
			  FROM `{$this->tItem}` as `film`
			  	JOIN `jos_films_time` as `times` ON film.id_films = times.id_films
			  	JOIN `jos_films_xref` as `xref` ON film.id_films = xref.id_films
			  	JOIN `jos_cinema` as `cinema` ON cinema.id_cinema = xref.id_cinema

			  WHERE cinema.published = '1' AND ";

		$q .= "film.date_last >= DATE(NOW()) AND ";
		$q .= "film.published  = '1'  GROUP BY film.original_name ORDER BY film.date_first";



		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
	}
    public function getCinemaFilm($origin) {

        $qq = "SELECT
					distinct
					cinema.*,
					film.date_first,
					film.date_last,
					film.id_films
			  FROM `{$this->tItem}` as `film`
			  	JOIN `jos_films_time` as `times` ON film.id_films = times.id_films
			  	JOIN `jos_films_xref` as `xref` ON film.id_films = xref.id_films
			  	JOIN `jos_cinema` as `cinema` ON cinema.id_cinema = xref.id_cinema

			  WHERE film.original_name = '{$origin}' AND cinema.published = '1' AND film.published  = '1' AND film.date_last >= DATE(NOW())";




		return DB::query(Database::SELECT, $qq)->as_object()->execute()->as_array();
	}
    public function getCinemaAll() {

        $qq = "SELECT
					distinct
					cinema.*,
					xref.*,
					film.original_name
			  FROM `jos_cinema` as `cinema`
			  	JOIN `jos_films_xref` as `xref` ON cinema.id_cinema = xref.id_cinema
			  	JOIN `{$this->tItem}` as `film` ON film.id_films = xref.id_films
               WHERE film.date_last >= DATE(NOW()) AND cinema.published = '1'";




        return DB::query(Database::SELECT, $qq)->as_object()->execute()->as_array();
    }



	function _good($text) {
		$search = substr($text, 0, 64);
		$search = preg_replace("/[^\w\x7F-\xFF\s]/", " ", $search);
		$good = trim(preg_replace("/\s(\S{1,2})\s/", " ", ereg_replace(" +", "  "," $search ")));
		$good = ereg_replace(" +", " ", $good);
		return $good;
	}


}
?>