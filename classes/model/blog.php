<?php
class Model_Blog extends Model {

	var $tItem  = 'jos_blog';
	var $id     = 'id_blog';

	public function before() {
		DB::query(Database::SELECT, "SET SESSION group_concat_max_len = 16384");
		parent::before();
	}

	public function getBlogList() {
		$q = "SELECT * FROM `{$this->tItem}` WHERE `published` = '1' ORDER BY `id_blog` DESC";
		return DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
	}

	public function getItem($id) {
			$q = "SELECT * FROM `{$this->tItem}` WHERE `{$this->id}` = '{$id}'";
			return DB::query(Database::SELECT, $q)->as_object()->execute()->current();
	}

	public function getItemIdFromAlias($alias) {
		$q = "SELECT id_blog FROM `{$this->tItem}` WHERE `alias` = '{$alias}'";
		return DB::query(Database::SELECT, $q)->execute()->get('id_blog');
	}
}
?>