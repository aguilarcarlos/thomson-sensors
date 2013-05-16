<?php
	/* *********************************
	* Class for work with strings
	* Developed by Carlos Aguilar
	* Email: carlosaguilarnet@gmail.com
	* **********************************/

	class StringsChars{
		private $frase;
		private $cadena;
		private $length;
		private $delimiter;
		private $start;

		//Set the string to work
		//Example to get: setStrings(string);
		public function setStrings($cadena){
			$this->cadena = $cadena;
		}

		//Method to get number of chars in string
		//Example to use: getNumberChars();
		public function getNumberChars(){
			return strlen($this->cadena);
		}

		//Method to get char by char start & measure.
		//Example to use:  getCharsByNumber(start(number),measure(number));
		public function getCharsByNumber($start = null, $length = null){
			$this->length = $length;
			$this->start = $start;
			if($this->length == null && $this->start == null){
				//Default
				return substr(strip_tags($this->cadena), 0, 4);
			}else{
				return substr(strip_tags($this->cadena), $this->start, $this->length);
			}
		}

		//Metho to split strings
		//Example to use: setStringToSplit(delimiter(char),string(string));
		public function setStringToSplit($delimiter = null, $frase = null){
			$this->frase = $frase;
			$this->delimiter = $delimiter;
			if(($this->frase == null) || ($this->delimiter == null)){
				//Default
				return "¡Falta un argumento en el Método setStringToSplit()!";
			}else{
				return explode($this->delimiter, $this->frase);
			}
		}

		public function deleteSpacing(){
			return 0;
		}

	}
?>