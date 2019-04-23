<?php
require "function.php" ;

$resultat = getAnnonces();

?>

<ul>
    <li><?php echo $resultat["annonce1"][0] ?></li>
    <li><?php echo $resultat["annonce1"][1] ?></li>
</ul>
<ul>
    <li><?php echo $resultat["annonce2"][0] ?></li>
</ul>