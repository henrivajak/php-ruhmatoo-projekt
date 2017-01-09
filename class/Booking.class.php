<?php 
class Booking {
	
	private $connection;
	
	function __construct($mysqli){
		
		$this->connection = $mysqli;
		
	}


	function save ($animal_id, $animal_return) {
		
		$stmt = $this->connection->prepare("INSERT INTO g_booking (animal_id, animal_return) VALUES (?, ?)");
	
		echo $this->connection->error;
		
		$stmt->bind_param("is", $animal_id, $animal_return);
		
		if($stmt->execute()) {
			echo "Salvestamine onnestus ";
		} else {
		 	echo "ERROR ".$stmt->error;
		}
		
		$stmt->close();
		
		
	}
	
	function book($id){

		$stmt = $this->connection->prepare("UPDATE g_animals SET booked=NOW() WHERE id=? AND deleted IS NULL AND booked IS NULL");
		$stmt->bind_param("i",$id);
		
		// kas õnnestus salvestada
		if($stmt->execute()){
			// õnnestus
			echo "Rentimine 6nnestus!";
			header("Location: animals.php");
		}
		
		$stmt->close();
		
		
	}
	function getBooked ($b, $sort, $order) {
		
$allowedSort = ["type", "name", "age", "shelter"];
		
		if(!in_array($sort, $allowedSort)){
			// ei ole lubatud tulp
			$sort = "id";
		}
		
		//kas github t88tab??
		
		$orderBy = "ASC";
		
		if ($order == "DESC") {
			$orderBy = "DESC";
		}
		//echo "Sorteerin: ".$sort." ".$orderBy." ";
		
		
		//kas otsib
		if ($b != "") {
			
			echo "Otsib: ".$b;
			
			$stmt = $this->connection->prepare("
				SELECT type, name, age, shelter
				FROM g_animals
				WHERE deleted IS NULL AND booked IS NOT NULL
				
			
				AND (type LIKE ? OR name LIKE ? OR age LIKE ? OR shelter LIKE ?)
				ORDER BY $sort $orderBy
			");
			$searchWord = "%".$b."%";
			$stmt->bind_param("ssss", $searchWord, $searchWord, $searchWord, $searchWord);
			
			
		} else {
			
			$stmt = $this->connection->prepare("
				SELECT type, name, age, shelter
				FROM g_animals
				WHERE deleted IS NULL AND booked IS NOT NULL
				
				ORDER BY $sort $orderBy
			");
			
		}
		
		echo $this->connection->error;
		
		$stmt->bind_result($type, $name, $age, $shelter);
		$stmt->execute();
		
		
		//tekitan massiivi
		$result = array();
		
		// tee seda seni, kuni on rida andmeid
		// mis vastab select lausele
		while ($stmt->fetch()) {
			
			//tekitan objekti
			$Animal = new StdClass();
			
			$Animal->type = $type;
			$Animal->name = $name;
			$Animal->age = $age;
			$Animal->shelter = $shelter;
			

			// iga kord massiivi lisan juurde nr märgi
			array_push($result, $Animal);
		}
		
		$stmt->close();
		
		
		return $result;
	}
}
?>