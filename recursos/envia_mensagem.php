<?php

    if ($_GET)
    {
        extract($_GET);
    }

    if ($_POST)
    {
        extract($_POST);
    }

$mensagem_email="";

$mensagem_email="Nome: $nome \n";
$mensagem_email.="Telefone: $tel \n";
$mensagem_email.="E-mail: $email \n";
$mensagem_email.="Assunto: $assunto \n";
$mensagem_email.="E-mail: $email \n\n $mensagem";


if (mail("contato@alliancetour.com.br", "Contato através do site Alliance Tour", "$mensagem_email", "From: $email"))
{
    echo "ok";
}
else
{
    echo "no";
}


?>