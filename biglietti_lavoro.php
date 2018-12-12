<?php
require_once __DIR__ .DIRECTORY_SEPARATOR."dbConnection.php"; //require_once=file importato una singola volta, nonostante richiami x file diversi, quel file viene importato un'unica volta - directory_separator mi separa le cartelle automaticamente in base all'os utilizzato - dir concatena le stringhe
use DB\DBAccess;

$dbAccess = new DBAccess();
$dbOpen = $dbAccess->openDBConnection();

if($dbOpne==true)
{
//interagisci db
$acquisto=$dbAccess->insertNewTicket(...);
	if($acquisto)
		//BIGLIETTI ACQUISTATI
	else
		//messaggio errore	
}
else
	//errore
	
public function contaBiglietti (){
$querySelect="SELECT SUM(NumeroBiglietti) AS TotaliBiglietti FROM biglietti $queryResult = mysqli_query($this->connection, $querySelect)";

if(mysqli_num_rows($queryResult)==0)
	return null;
else
	$totale=(mysqli_fetch_assoc($queryResult))["TotaliBiglietti"]; //costr array associativo, $quertResult[0] mi restituisce una riga solo

}
>
