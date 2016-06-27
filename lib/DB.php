<?php
	/*
		--- Base version ---
		Autor: Nermin Elkasovic
		
		--- Adjusted version ---
		Autor: Felix Saaro
		Changes: Adjust database structure and connection

	*/

class Database {
	public  $_con = null;
	public  $_results = null;

	public function __construct(){
		$this->dbConnect();
	}

	function __destruct(){
		$this->_con->close();
	}

	public function dbConnect(){
		@$this->_con = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PW, MYSQL_DB);
		if($this->_con->connect_errno){
			$this->dbInstall();
		}
	}

	function sqlExec($sqlstr)	{
		$this->_results = $this->_con->query($sqlstr);
	}

	private function dbInstall(){
		$this->_con = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PW);

		$sqlstr = "DROP DATABASE ". MYSQL_DB;
		$this->_con->query($sqlstr);

		$sqlstr = "CREATE DATABASE IF NOT EXISTS " . MYSQL_DB;
		$this->_con->query($sqlstr);
		$this->_con->select_db(MYSQL_DB);
		
		$sqlstr = "CREATE TABLE IF NOT EXISTS  User (
				id int NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (id),
				username VARCHAR(256),
				image VARCHAR(256),
				name VARCHAR(256),
				surname VARCHAR(256),
				email VARCHAR(256),
				password VARCHAR(256),
				access INT,
				description VARCHAR(1000)
				)";
		$this->_con->query($sqlstr);

		$sqlstr = "CREATE TABLE IF NOT EXISTS  Article (
				id int NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (id),
				title VARCHAR(256),
				content VARCHAR(10000),
				picture VARCHAR(256),
				dateCreated TIMESTAMP NOT NULL,
				userId int NOT NULL,
				CONSTRAINT fk_userId FOREIGN KEY (userId)
				REFERENCES User(id)
				ON DELETE CASCADE)";
		$this->_con->query($sqlstr);

		$sqlstr = "	INSERT INTO User (
						id, username,image, name, surname, email, password, access, description
					) VALUES (
						NULL, 'Admin', './public/img/upload/IMG_2946.jpg', 'Admin', 'Admin', 'admin@thisisme.com', 'admin', 1, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'
					),(
						NULL, 'felixsaaro', './public/img/upload/IMG_2946.jpg', 'Felix', 'Saaro', 'felix.saaro@me.com', 'felix', 1, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'
					),(
						NULL, 'User', './public/img/upload/IMG_2946.jpg', 'User', 'User', 'user@thisisme.com', 'user', 2, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'
					);";
		$this->_con->query($sqlstr);

		$sqlstr = "	INSERT INTO Article (
						id, title, content, picture, dateCreated, userId
					) VALUES (
						NULL, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br><br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', './public/img/1/IMG_3026.jpg', NULL, '1'
					)";
		$this->_con->query($sqlstr);
	}
}
?>