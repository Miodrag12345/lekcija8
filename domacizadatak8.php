<?php

$meni =[
    "Glavna" => "index.php",
    "O nama" => "about.us",
    "Kontakt" => "contact.php"
];

?>



<!DOCTYPE html>
<html lang="en">
<head><title>Navigacija </title></head>
<body>
<nav >

<?php foreach($meni as $naziv=> $link): ?>
<li><a href ="<?= $link ?>"><?=$naziv ?></a></li>
<?php endforeach; ?>

</nav>





</body> 
</html>