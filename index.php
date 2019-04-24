<?php 
require_once "function.php";

$resultat = getAllAnnonces();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.4.0.min.js"></script>
<script src="js/script.js"></script>
    <title>Document</title>
</head>
<body>
    <ul>
    <li><?php echo $resultat["annonce1"][0] ?></li>
    <li><?php echo $resultat["annonce1"][1] ?></li>
</ul>
<hr>
<ul>
    <li><?php echo $resultat["annonce2"][0] ?></li>
    <li><?php echo $resultat["annonce2"][1] ?></li>
</ul>
</body>
</html>

<script>
    $('ul').html("yoyoyo");
</script>

<?php 

$first = getFirstAnnonce();

print_r($first);

$newProduit = insertAnnonce("annonce3", array("fruit",2));
echo '<pre>';
print_r($newProduit);
?>