<?php
  include("template/header.php")
 ?>

<p>This is the index view</p>
<p>Bonjour <?php echo $user->getName(); ?></p>

<a href="presentation.php">découvrir notre entreprise</a>

 <?php
   include("template/footer.php")
  ?>
