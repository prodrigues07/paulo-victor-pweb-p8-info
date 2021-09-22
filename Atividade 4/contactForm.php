<!DOCTYPE HTML>  
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>  

<?PHP

$fnome = $_GET['fname'];
$fmail = $_GET['fmail'];
$fcountry = $_GET['fcountry'];
$fsubject = $_GET['fsubject'];

echo "Parâmetros da Requisição:" . "<br> <br>";
echo "Nome Completo: " . $fnome . "<br>"; 
echo "Email: " . $fmail . "<br>";
echo "País: " . $fcountry . "<br>";
echo "Mensagem: " . $fsubject . "<br> <br>";
    
echo "<a href=\"javascript:history.go(-1)\">Retornar</a>";
?>

