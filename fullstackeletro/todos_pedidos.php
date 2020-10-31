<?php

$conn = mysqli_connect("localhost", "root", "", "fstackeletro");

// if (!$conn)
// die ("Falha na conexão com o BD " . mysqli_connect_errno());
// else
// echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";

$sel = "select * from pedido";
$res = mysqli_query($conn, $sel);

while($row = mysqli_fetch_assoc($res))
{
      printf("<b>%s</b>, %s, %s, %s, %s, %s, %s, %s, %s", $row["id_cli"], $row["nome_cli"], $row["end_cli"], $row["tel_cli"],
      $row["id_produto"], $row["nome_prod"], $row["val_unit"], $row["quantidade"], 
      $row["val_total"]);
echo "<hr>";
};

?>