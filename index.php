<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet"  href="estilos/style.css">

<?php
include_once("topo.php");
include_once("menu.php");

if(empty($_SERVER["QUERY_STRING"])){
        $var = "principal.php";
        include_once("$var");
	}else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
}

include_once("rodape.php");

?>