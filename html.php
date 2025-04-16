<?php

$imena= ["Toma","Petar","Vlada"];

?>

<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    // nije dobar nacin 
    foreach ($imena as $ime)
    {
        echo "<p> $ime <p>";
    }

    ?>

    <?php foreach ($imena as $ime)  {?>
    
         <p><?php echo $ime ?></p>
    <?php } ?>     
    
    <?php foreach ($imena  as $ime ): ?>
     <p> <?php echo $ime ?></p>
     
    <?php endforeach; ?>   

   
  
</body>
</html>
