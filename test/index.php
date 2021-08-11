<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.redemidiainterativa.com.br", "sender@redemidiainterativa.com.br", "teste@123", "tls", '587',
    "beiri@redemidiainterativa.com.br", "Equipe Midia Interativa");
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b>!</p>", "teste@teste.com.br", "Teste", "testeemail@teste.com.br", "TesteEmail");

var_dump($novoEmail);