<?php

/*
$conn=mysqli_connect("localhost","root","","librari_online");
if(!$conn)
	die("connection error");
else{
	$sql = "CREATE TABLE Lib_Autor(ID_Autor int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Emri varchar(15) NOT NULL,
  Mbiemri varchar(15) NOT NULL)";
		if(!mysqli_query($conn,$sql))
			echo "Gabim nuk u krijua tabela".mysqli_error($conn);
		else
			echo "tabla u krijua";
}*/


/*
$conn=mysqli_connect("localhost","root","","librari_online");
if(!$conn)
	die ("Connection error");
else{
	$sql="INSERT INTO Lib_Autor(ID_Autor,Emri,Mbiemri) VALUES(1, 'Jason', 'Gilmore'),
(2, 'David', 'Sklar'),
(3, 'Luke', 'Welling'),
(4, 'Laura', 'Thomson'),
(5, 'Steve', 'Krug'),
(6, 'Ben', 'Forta'),
(8, 'Jakob', 'Nielsen'),
(9, 'Hoa', 'Loranger'),
(11, 'Alan', 'Beaulieu'),
(12, 'Jesse', 'Liberty'),
(13, 'Dan', 'Hurwitz'),
(14, 'Michele E.', 'Davis'),
(15, 'John A.', 'Phillips'),
(16, 'Jeffrey', 'Friedl'),
(17, 'Michael J.', 'Hernandez'),
(18, 'John L.', 'Viescas'),
(22, 'Stephan', 'Walther'),
(23, 'Andrew', 'Watt'),
(25, 'Kevin', 'Tatroe'),
(26, 'Rasmus', 'Lerdorf'),
(27, 'Peter', 'MacIntyre'),
(29, 'Matthew', 'MacDonald'),
(30, 'Julian', 'Templeman'),
(32, 'Hugh E.', 'Williams'),
(33, 'David', 'Lane'),
(34, 'Robin', 'Nixon'),
(35, 'Ethan', 'Brown')";
	if(!mysqli_query($conn,$sql))
		echo "gabim nuk u shtua rekordi" .mysqli_error($conn);
	else
		echo " U krijua rekord i ri";
}
*/

/*
$conn=mysqli_connect("localhost","root","","FilmatPreferuar");
if(!$conn)
	die("Connection error");
else{
	$sql="CREATE TABLE Lib_Aut_Klas(Seria varchar(15) NOT NULL, 
  ID_Autor int(11) NOT NULL, 
  PRIMARY KEY (Seria,ID_Autor)
 ";
	if(!mysqli_query($conn,$sql))
		echo "Gabim nuk u kriju tabela" .mysqli_error($conn);
	else
		echo "U krijua tabla";
}*/


/*
$conn=mysqli_connect("localhost","root","","FilmatPreferuar");
if(!$conn)
	die("connection error");
else{
	$sql="INSERT INTO aktoret(Emri,Mbiemri) VALUES('Brad','Pitt'),('Eduart','Norton'),('Henry','Cavill'),('Anya','Chalotra')";
	if(!mysqli_query($conn,$sql))
		echo"Gabim nuk u shtuan aktoret" .mysqli_error($conn);
	else
		echo " u krijuan rekorde te reja";
}
*/

/*
$conn=mysqli_connect("localhost","root","","FilmatPreferuar");
if(!$conn)
	die("connection error");
else{
	$sql = "CREATE TABLE aktfilm(ID VARCHAR(15) NOT NULL,
		IDakt INT(10) NOT NULL,
		PRIMARY KEY(ID, IDakt),
		FOREIGN KEY (ID) REFERENCES filmat(id),
		FOREIGN KEY (IDakt) REFERENCES aktoret(IDakt))";

		if(!mysqli_query($conn,$sql))
			echo "Gabim nuk u krijua tabela".mysqli_error($conn);
		else
			echo "tabla u krijua";
	}

*/
?>




