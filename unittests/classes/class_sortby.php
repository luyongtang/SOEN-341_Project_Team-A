<?php
  /**
   * sort by
   */
	class SortBy
	{

		function __construct() 
		{
			
		}

		function sort($sortingRequirement)
		{

		   $serverName = 'localhost';
		   $userName = "root";
		   $dbName = 'soen341';
		   $passWord = '';

		   $db = new PDO("mysql:host=$serverName;port=3306;dbname=soen341;charset=utf8", "$userName", "$passWord", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

			 if($sortingRequirement == 'dateAsc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY timeStamp ASC ");
              }
              if($sortingRequirement == 'dateDesc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY timeStamp DESC ");
              }
              if($sortingRequirement == 'priceAsc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY Price ASC ");
              }
              if($sortingRequirement == 'priceDesc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY Price DESC ");
              }  
			return $resultArray;

		}

	}


 ?>