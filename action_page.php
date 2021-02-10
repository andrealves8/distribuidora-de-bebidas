<?php include_once"config.php";?>
<html>
<body>
<?php 
$id = $_POST["id"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
			
$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
mysqli_select_db($conn,'$dbname');
$sql = "INSERT INTO contatos (id, nome, telefone, email) VALUES ('$id','$nome','$telefone','$email')";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('Dados salvos com sucesso!'); window.location = 'contatos.php';</script>";

}else{
 echo "Falha ao salvar!: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>