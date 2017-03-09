<?php
$db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db_name = "vdljap0ozlv19mcw";
$db_user = "skcjf9suu6pnya1m";
$db_password = "y2t9y01b51v2970w";
$connection = mysqli_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysqli_error());
mysqli_select_db($connection,$db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
@mysqli_query("SET NAMES 'utf8'");

if(isset($_POST["id_producto"])){

$id_producto = $_POST["id_producto"];
$sql_query = "SELECT * FROM productos WHERE id_producto=$id_producto;";
$result = mysqli_query($connection,$sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
$rows[] = $r;
}
print json_encode($rows);
}else
echo "No existe el producto";
mysqli_close($connection);
?>