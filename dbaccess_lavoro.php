<?php
namespace DB;

class DBAccess {
	
	const HOST_DB= 'tecweb1819.studenti.math.unipd.it'; //oppure local host
	const USERNAME='gcavedon';
	const PASSWORD='';
	const DATABASE_NAME='gcavedon';
	
	public $connection;
	
	public function openDBConnection() {
	
		$this->connection = mysqli_connect(static::HOST_DB, static::USERNAME, static::PASSWORD, static:DATABASE_NAME);
	} 

	if(!this->connection){
		return false;
	}
	else
		return true;
		
	public function insertNewTicket($nome, $cognome, $email, $dataNascita, $numeroBiglietti, $tipologia, $serviziAggiuntivi)
	{
		$queryInsert="INSERT INTO biglietti(nome, cognome, email, dataNascita, NumeroBiglietti, tipologia, serviziAggiuntivi) VALUES (\"$nome\", \"$cognome\", \"$email\" \"$dataNascita\", $numeroBiglietti, \"$tipologia\", \"$serviziAggiuntivi\")";
	
	$result=mysqli_query($this->connection, $queryInsert) /*or die()*/; //funzione presente in php che data una connessione ad un db, viene eseguita una data query sul db
		
	//in select, show, decribe or explain viene restituito qualcosa, se faccio insert o qualsiasi altra cosa, mi viene restituito un true/false 
	
	if(mysqli_affected_rows($this->connection)>0)
		return true;
	else
		return false; //qualcosa che non e' andato a buon fine nell'inserimento (o altri cmd) nel db	
	
	}

}





?>
