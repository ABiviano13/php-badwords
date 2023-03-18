<?php

$paragrafo = $_GET['paragrafo'];
$censura = $_GET['censura'];

$paragrafo_censurato = str_replace($censura, "***", $paragrafo);

?>

<h1> 
    <?php echo $paragrafo ?>
</h1>

<h3>
    Paragrafo con la censura = <?php echo $paragrafo_censurato ?> 
</h3>
