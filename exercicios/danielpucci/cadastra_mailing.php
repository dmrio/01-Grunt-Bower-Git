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
$mensagem_email.="E-mail: $email \n";
$mensagem_email.="Já é cliente: $cliente \n";

//contato@alliancetour.com.br

if (mail("contato@alliancetour.com.br", "Cadastro de Mailing // Alliance Tour", "$mensagem_email", "From: $email"))
{
    echo "ok";
}
else
{
    echo "no";
}


?>