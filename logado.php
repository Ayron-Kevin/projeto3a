<?php
include('conexao.php');
$login= isset($_POST['login'])? $_POST['login']:'';
$senha= isset($_POST['senha'])? $_POST['senha']:'';
$select= "select nome,login,senha from login
where login= '$login' and senha='$senha'";
$execute= mysqli_query($conexao,$select);
$dados= mysqli_fetch_row($execute);

if($login== $dados[1] && $senha== $dados[2]){
    echo "logado";
}else{
    echo "dados errados";
}



?>