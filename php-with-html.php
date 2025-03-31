<?php
    echo "<h1 style='color:blue'> My name is Kapil </h1>";
    echo "<h1> testing </h1>";

?>

<?php

    $name = "Kapil Dev";
    echo "<h1 style='color: orange'>This is my name with middle name $name </h1>";

?>

<h1 style='color: green'>
    <?php
    echo "This is my complete real name $name";
    ?>
</h1>

<h2><?php echo "This is last paragraph"; ?> </h2>

<!-- another methods -->

<?php 
$h4_color= "blue";
$h3_color= "red";
?>

<h4 style='color: <?php echo $h4_color;?>' > <?php echo "This is testing heading for h4 with color variables"; ?> </h4>
<h4 style='color: <?php echo $h4_color;?>' > <?php echo "This is testing heading for h4 with color variables"; ?> </h4>
<h4 style='color: <?php echo $h4_color;?>' > <?php echo "This is testing heading for h4 with color variables"; ?> </h4>
<h4 style='color: <?php echo $h3_color;?>'> <?php echo "This is testing heading for h4 with color variables"; ?> </h4>


