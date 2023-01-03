<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['name'])
$email =addcslashes($_POST['email'])
$mensagem = addcslashes($_POST['mesage'])

$to = "guilhermesantospineda@gmail.com";
$subject = "Contato - Guilherme dos Santos";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$mensagem;
$header = "Fron:guilhermesantospineda@gmail.com"."\r\n".
            "Reaply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("email enviado com sucesso!");
}else{
    echo("Não deu certo");
}


}


?>