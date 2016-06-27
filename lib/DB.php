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

		$sqlstr = "	INSERT INTO `user` (`id`, `username`, `image`, `name`, `surname`, `email`, `password`, `access`, `description`) VALUES
(1, 'Admin', './public/img/upload/57712e5b7e010IMG_3058.jpg', 'Admin', 'Admin', 'admin@thisisme.com', 'admin', 1, '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>'),
(3, 'User', './public/img/upload/IMG_2946.jpg', 'User', 'User', 'user@thisisme.com', 'user', 2, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'),
(4, 'fabioardito', './public/img/upload/57712f3779d7dIMG_3001.jpg', 'Fabio', 'Ardito', 'fabio.ardito@me.com', 'fabio', 2, '<p>Hoi ich bin de Fabio!</p>'),
(5, 'devinmenzi', './public/img/upload/57712fdb7383aIMG_2909.jpg', 'Devin', 'Menzi', 'devin.menzi@me.com', 'devin', 2, '<p>Hoi ich bin de Devin!</p>'),
(6, 'janled', './public/img/upload/577130b0d294dIMG_2931.jpg', 'Jan', 'Ledergerber', 'jan.led@me.com', 'jan', 2, '<p>Hoi ich bin de Jan!</p>'),
(7, 'joelklingler', './public/img/upload/577131862ebb4IMG_3049.jpg', 'Joel', 'Klingler', 'joel.klingler@me.com', 'joel', 2, '');";
		$this->_con->query($sqlstr);

		$sqlstr = "	INSERT INTO `article` (`id`, `title`, `content`, `picture`, `dateCreated`, `userId`) VALUES
(NULL, 'Ich bin #fabioulous', '', './public/img/upload/57712f755116dIMG_2926.jpg', NULL, 4),
(NULL, 'Ich bin #devinitif', '<h3>Chasch echt n&ouml;d...?</h3>', './public/img/upload/5771305c67223IMG_2982.jpg', NULL, 5),
(NULL, 'Isch es ein Vogel.... Ische es ein A380... NEIN es isch en JIZZZZNNNNAAAAA', '', './public/img/upload/577131b2e6d35IMG_3083.jpg', NULL, 7),
(NULL, '#FLUGHAFELIFE', '', './public/img/upload/577131db52e72IMG_3156.jpg', NULL, 7),
(NULL, 'A320 is <3 A320 is Life', '', './public/img/upload/577131fdb5ab7IMG_3207.jpg', NULL, 7);";
		$this->_con->query($sqlstr);
	}
}
?>