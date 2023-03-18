<?php

$paragrafo = $_GET['paragrafo'];
$censura = $_GET['censura'];

$paragrafo_censurato = str_replace($censura, "***", $paragrafo);

echo strlen($paragrafo)
?>

<h1> 
    <?php echo $paragrafo ?>
</h1>

<h3>
    Paragrafo con la censura = <?php echo $paragrafo_censurato ?> 
</h3>

<?php

echo strlen($paragrafo_censurato)

?>


