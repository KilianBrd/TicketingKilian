<?php

// Renvoie la liste de tous les billets, triés par identifiant décroissant
function getTickets() {
  $bdd=getBdd();
  $tickets = $bdd->query('select * from T_TICKET LEFT JOIN T_ETAT ON T_TICKET.TIC_ID = T_ETAT.id order by TIC_ID desc');
  return $tickets;
}

function getBdd() {
  $bdd = new PDO('mysql:host=localhost;dbname=ticketing;charset=utf8', 'administrateur', 'simone', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}
?>