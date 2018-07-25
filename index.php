<?php

if(isset($_SESSION['pseudo'])){ 
include('accueil.php'); 

}else { 

include('login.php'); 
 
 }
/*
  header('Location: /xgp');
  exit();
  */
 ?>
