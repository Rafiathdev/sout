<?php
//session_start();
/**
 * THIS FILE HELP TO MANAGE THE LOGIC UNDER OUR DATABASE ACTIONS
 **/
class Model
{
	// Database object class

	private function conn()
	{
		// Create and return a database connection stream
		//require 'app/config.php';
		require '../../config.php';

		$data_base_connector = new PDO('mysql:host=' . $DB_HOST . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASS);
		return $data_base_connector;
	}

	public function add($table, $fields, $values, $data)
	{
		// create and save a database object
		$db = $this->conn();
		$create_request = $db->prepare('INSERT INTO ' . $table . '(' . $fields . ') VALUES(' . $values . ')');
		$create_request->execute($data);
	}

}
// author @ptahemdjehuty
