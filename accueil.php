<?php
include('includes/config.php'); 

if(isset($_SESSION['pseudo'])){ 
include('menu.php'); 
?>
<p> Bienvenue <?php echo $_SESSION['pseudo']; ?></p>

</body>
</html>
<?php
}else { 
include('menupasco.php'); 

 } ?>

