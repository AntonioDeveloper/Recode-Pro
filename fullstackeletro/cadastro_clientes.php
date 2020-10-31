<?php

$conn = mysqli_connect("localhost", "root", "", "fstackeletro");

if (!$conn)
die ("Falha na conexão com o BD " . mysqli_connect_errno());
else
echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";


$nome_cli = $_POST['name'];
$end = $_POST['end'];
$tel = $_POST['phone'];
#email = $_POST['email'];
$id_prod = $_POST['id_prod'];
$nome_prod = $_POST['nome_prod'];
$val_unit = $_POST['val_unit'];
$qtde = $_POST['quantidade'];


$sql = "INSERT INTO pedido (nome_cli, end_cli, tel_cli, id_produto, nome_prod,
val_unit, quantidade, val_total)
values('$nome_cli', '$end', '$tel', $id_prod, '$nome_prod',
$val_unit, $qtde, ($val_unit * $qtde))";

echo "$sql";

$conn->query($sql);

echo "<script>
alert('Cadastro efetuado com sucesso!')
</script>";

/*
INSERT INTO pedido (nome_cli, end_cli, tel_cli, email, id_produto, nome_prod,
val_unit, quantidade, val_total)
VALUES('Roberta Vasconcelos Ferreira', 'Rua das Mangas, 112', '1198744556', 'juniorgabrielsantana@hotmail.com', 3, 'Lavadora de Roupas LG 12 Litros',
      1300.00, 4, (quantidade * val_unit)); */