<?php

	class TravelPhoto 
	{
		private $date;
		private $fileName;
		private $description;
		private $title;
		private $latitude;
		private $longitude;
		private $id;
		private static $photoID=0;
				
		function __construct($fileName, $title, $description, $latitude, $longitude)	 
		{	
			$this->fileName = $fileName; 
			$this->title = $title;
			$this->description = $description; 
			$this->latitude = $latitude; 
			$this->longitude = $longitude;
			$this->photoID = $photoID++;	  
		}

		function ___toString(){
			return "<img src='"+$this->$fileName+"' alt='"+$this->title+"' title='"+$this->$title+"'></img>";
		}	   
	}
?>