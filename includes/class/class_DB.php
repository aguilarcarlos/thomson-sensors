<?php
	class classDB{
		private $host;
		private $pass;
		private $user;
		private $nameDB;
		private $code;
		private $table;
		public static $conection;
		public static $database;

		public function setDatos($host,$user,$pass,$nameDB){
			$this->host = $host;
			$this->user = $user;
			$this->pass = $pass;
			$this->nameDB = $nameDB;
			print_r("Se recibieron correctamente los datos <br />");
		}
		public function getConnect(){
			self::$conection 	= mysql_connect($this->host,$this->user,$this->pass) or die(mysql_error());
			self::$database 	= mysql_select_db($this->nameDB,self::$conection) or die(mysql_error());
			print_r("Se ha conectado correctamente a " . $this->nameDB . "<br />");
		}
		public function close_DB(){
			mysql_close($conection);
			print_r("Se cerró la base de datos " . $this->nameDB);
		}
		public function setTemperature($table,$code){
			$this->table = $table;
			$this->code = $code;
		}

		public function getTemperature(){
			$result = mysql_query("SELECT * FROM " . $this->table . " WHERE COD_MUN=" . $this->code . "ORDER BY DNI_MED DESC LIMIT 1", self::$conection);
			$row = mysqli_fetch_array($result);		
			return "hello" . $row['TEMP_MED'];
		}
	}
?>