<?php
require('Db.php');

class Words
{
    public function getWords()
    {
		$pdo = Db::getInstance();
		return $pdo->pdoFetchAll('SELECT * FROM word');
    }

    public function getWord($id)
    {
		$pdo = Db::getInstance();
		return $pdo->pdoFetchAll("SELECT * FROM word WHERE id = '" . $id . "'");
    }
}