<?php

require_once("PHPMailer.php");
require_once("SMTP.php");
//#########################################
// Recebe as informações do formulário
//#########################################

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

//#########################################
// Dados da conta de e-mail que fará o envio
//#########################################

//$smtp = new Smtp("smtp.hostinger.com.br"); //Endereço do SMTP, geralmente localhost.
//$smtp->user = "alexandre@daab.com.br"; //Conta de email
//$smtp->pass = "Carol0608"; //Senha da Conta de e-mail.
//$smtp->debug = false; //Somente para usuários avançados que desejam o log do envio para testes.
$mail = new PHPMailer();

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.hostinger.com.br"; # Endereço do servidor SMTP
$mail->Port = 587; // Porta TCP para a conexão
$mail->SMTPAutoTLS = false; // Utiliza TLS Automaticamente se disponível
$mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
$mail->Username = 'alexandre@daab.com.br'; # Usuário de e-mail
$mail->Password = 'Carol0608'; // # Senha do usuário de e-mail

//#########################################
// Envio do formulário
//#########################################

$to = "augustusborges@gmail.com"; //Informe aqui o e-mail que deve receber a mensagem do formulário.
$from = $email;
$subject = "Contato – " . $assunto;
$msg = $mensagem;


//if (isset($_POST['submit'])) {

  

    if($nome && $email && $assunto && $mensagem) {



        if($smtp->Send($to, $from, $subject, $msg)){
            echo "<script>alert(‘Contato enviado!’);</script>";
            echo "<script>window.location = ‘index.php’;</script>"; //Altere aqui para o endereço de sua página.
            exit;
        }
    }else {
        echo "<script>alert(‘Preencha todos os campos!’);</script>";
        echo "<script>window.location = ‘faleconosco.php’;</script>"; //Altere aqui para o endereço de seu formulário
        echo("2");
        exit;
    }
//}

?>