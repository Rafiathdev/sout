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
		require 'app/config.php';

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
	public function update_decision($decision, $target){
		$db = $this->conn();
		$create_request = $db->prepare("UPDATE candidature  SET decision = ? WHERE  id = ? ");
		$create_request->execute(array($decision, $target));
		
	}

	public function addEntretien($date_entretien, $heure, $id_offre, $id_candidat)
	{
		// create and save a database object
		$db = $this->conn();
		$create_request = $db->prepare('INSERT INTO entretien(date_entretien,heure,id_offre,id_candidat) values(?,?,?,?)');
		$create_request->execute($date_entretien, $heure, $id_offre, $id_candidat);
	}

	public function read($table, $field)
	{
		// get and return a database object
		$db = $this->conn();
		$read_request = $db->query('SELECT ' . $field . ' FROM ' . $table . '');
		return $read_request;
	}

public function read_filter_once($table, $field, $sfield, $value)
	{
		// get and return a database object
		$db = $this->conn();
		$read_request = $db->prepare('SELECT ' . $field . ' FROM ' . $table . ' WHERE ' . $sfield . '=?');
		$read_request->execute($value);
		return $read_request;
	}

	public function read_filter_or($table, $field, $sfield1, $sfield2, $values)
	{
		// get and return a database object
		$db = $this->conn();
		$read_request = $db->prepare('SELECT ' . $field . ' FROM ' . $table . ' WHERE ' . $sfield1 . '=? OR ' . $sfield2 . '=?');
		$read_request->execute($values);
		return $read_request;
	}

	public function read_filter_and($table, $fields, $field1, $field2, $field3 = '', $values)
	{

		if ($field3 != '') {
			// get and return a database object
			$db = $this->conn();
			$read_request = $db->prepare('SELECT ' . $fields . ' FROM ' . $table . ' WHERE ' . $field1 . '=? AND ' . $field2 . '=? AND ' . $field3 . '=?');
			$read_request->execute($values);
			return $read_request;
		} else {

			// get and return a database object
			$db = $this->conn();
			$read_request = $db->prepare('SELECT ' . $fields . ' FROM ' . $table . ' WHERE ' . $field1 . '=? AND ' . $field2 . '=?');
			$read_request->execute($values);
			return $read_request;
		}
	}
	public function get_last_row($table, $sfield){
		$db = $this->conn();
		$read_request = $db->query('SELECT * FROM '. $table .' WHERE '.$sfield.'=(SELECT max('.$sfield.') FROM '.$table.')');
		return $read_request;
	}
	public function delete($table, $field1, $field2 = '', $values)
	{
		$db = $this->conn();

		if ($field2 != '') {


			$query = $db->prepare('DELETE FROM ' . $table . ' WHERE ' . $field1 . '=? AND ' . $field2 . '=?');

			$query->execute($values);
		} else {
			
			$query = $db->prepare('DELETE FROM ' . $table . ' WHERE ' . $field1 . '=?');

			$query->execute($values);
		}
	}


	public function read_join($id)
	{
		// get and return a database object
		$db = $this->conn();
		$read_request = $db->prepare('SELECT * FROM user s, offre o, employeur e WHERE s.id = e.user_id AND s.id = o.author AND o.id = ? ');
		$read_request->execute(array($id));
		return $read_request;
	}

	public function get_candidat($id)
	{
		// get and return a database object
		$db = $this->conn();
		$read_request = $db->prepare('SELECT nom_c, prenom_c, email, telephone, qualification, photo, candidat.id FROM candidat, user WHERE candidat.user_id = user.id AND candidat.user_id = ?');
		$read_request->execute(array($id));
		return $read_request;
	}


	public function update($date_exp, $act_principal, $des, $comp, $id)
	{
		// get and return a database object
		$db = $this->conn();
		$read_request = $db->prepare("UPDATE offre  SET date_exp = ?, act_principal = ?,  description = ?, comp_req = ?  WHERE  id = ? ");
		$read_request->execute(array($date_exp, $act_principal, $des, $comp, $id));
		return $read_request;
	}

	public function read_joind()
	{
		// a reecrire
		// get and return a database object
		$db = $this->conn();
		$read_request = $db->query('SELECT o.id, e.photo, o.titre, o.annee_exp, e.nom_e, o.type, o.adresse, o.date_exp FROM  offre o, employeur e WHERE o.author = e.user_id');
		//$read_request->execute(array());
		return $read_request;
	}

	public function candidature_non_traited()
	{
		$db = $this->conn();
		$read_request = $db->query('SELECT o.id as ido, p.id as id_cand, c.id as idc, c.pdf_cv, c.nom_c, c.prenom_c, c.adresse, c.pdf_cv, o.titre, p.date_cand, p.lettre_motiv,  p.decision, o.author FROM candidat c, offre o, candidature p WHERE c.id=p.id_candidat AND o.id = p.id_offre AND p.decision=0 AND author = '.$_SESSION["user_info"]["id"].'');
		$data = $read_request->fetchAll();
		return $data;
	}

	public function candidature_refu()
	{
		$db = $this->conn();
		$read_request = $db->query('SELECT o.id as ido, p.id as id_cand, c.id as idc, c.pdf_cv, c.nom_c, c.prenom_c, c.adresse, c.pdf_cv, o.titre, p.date_cand, p.lettre_motiv,  p.decision, o.author FROM candidat c, offre o, candidature p WHERE c.id=p.id_candidat AND o.id = p.id_offre AND p.decision=2 AND author = '.$_SESSION["user_info"]["id"].'');
		$data = $read_request->fetchAll();
		
		return $data;
	}


	public function candidature_accep()
	{
		$db = $this->conn();
		$read_request = $db->query('SELECT o.id as ido, p.id as id_cand, c.id as idc, c.pdf_cv, c.nom_c, c.prenom_c, c.adresse, c.pdf_cv, o.titre, p.date_cand, p.lettre_motiv,  p.decision, o.author FROM candidat c, offre o, candidature p WHERE c.id=p.id_candidat AND o.id = p.id_offre AND p.decision=1 AND author = '.$_SESSION["user_info"]["id"].'');
		$data = $read_request->fetchAll();
		return $data;
	}


	public function read_cand()
	{
		// get and return a database object
		$db = $this->conn();
		$read_request = $db->query('SELECT o.id, o.titre,  e.nom_e,  o.adresse, p.date_cand FROM  offre o, employeur e, candidature p  WHERE o.id = p.id_offre AND e.user_id =o.author and p.id_candidat='.$_SESSION['id_cand']);
		//$read_request->execute(array());
		return $read_request;
	}



	public function demande()
	{
		// get and return a database object
		$db = $this->conn();
		$read_request = $db->query('SELECT c.nom_c,c.prenom_c,c.niveau,c.qualification,u.email,u.telephone, o.id, o.titre,  e.nom_e,  o.adresse, p.date_cand FROM  offre o, employeur e, candidature p,candidat c,user u  WHERE o.id = p.id_offre AND e.user_id =o.author and p.id_candidat=c.id and u.id=c.user_id');
		//$read_request->execute(array());
		return $read_request;
	}


	

}
// author @kemi
