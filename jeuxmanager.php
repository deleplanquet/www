<?php
class JeuxManager
{
private $_db; // Instance de PDO.

public function __construct($db)
{
$this->setDb($db);
}
public function add(Jeux $jeux )
{

$q = $this->_db->prepare('INSERT INTO jeux SET titre =:titre, temps = :temps, difficulte = :difficulte, multi = :multi, fini = :fini');
$q->bindValue(':titre', $jeux->titre());
$q->bindValue(':temps', $jeux->temps(),PDO::PARAM_INT);
$q->bindValue(':difficulte', $jeux->difficulte(), PDO::PARAM_INT);
$q->bindValue(':multi', $jeux->multi());
$q->bindValue(':fini', $jeux->fini());
$q->execute();

}
public function delete(Jeux $perso)
{
// Ex�cute une requ�te de type DELETE.
}
public function get($login)
{

}
public function getList()
{
// Retourne la liste de tous les personnages.
//$jeux = array();
//$q = $this->_db->query('SELECT * FROM jeux WHERE fred="oui"');
//while ($donnes = $q->fetch())
//while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
//{
//$jeux = new Jeux();
//$jeux->hydrate($donnees);
//echo "<pre>";
//  print_r($donnees);
// print_r($jeux);
//echo "</pre>";
//echo '<tr><td><a href='.$jeux->liens().'>'.$jeux->titre().'</a></td><td>'.$jeux->temps().'</td><td>'.$jeux->difficulte().'</td><td>'.$jeux->multi().'</td><td>'.$jeux->fini().'</td><td>'.$jeux->ps4().'</td><td>'.$jeux->ps3().'</td><td>'.$jeux->psvita().'</td></tr>';
/}
//return $jeux;
}
public function update(Jeux $perso)
{
// Pr�pare une requ�te de type UPDATE.
// Assignation des valeurs � la requ�te.
// Ex�cution de la requ�te.
}
public function setDb(PDO $db)
{
$this->_db = $db;
}
}

?>

