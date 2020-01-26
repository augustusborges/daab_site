<?php
# Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
#require 'PHPMailerAutoload.php';
require_once("phpmailer.php");
require_once("smtp.php");
require_once("OAuth.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


# Inicia a classe PHPMailer
$mail = new PHPMailer();

# Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.hostinger.com.br"; # Endereço do servidor SMTP
$mail->Port = 587; // Porta TCP para a conexão
$mail->SMTPAutoTLS = false; // Utiliza TLS Automaticamente se disponível
$mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
$mail->Username = 'faleconosco@daab.com.br'; # Usuário de e-mail
$mail->Password = 'Carol0608'; // # Senha do usuário de e-mail

# Define o remetente (você)
$mail->From = 'faleconosco@daab.com.br'; # Seu e-mail
$mail->FromName = $nome; // Seu nome

# Define os destinatário(s)
$mail->AddAddress('augustusborges@gmail.com', $nome); # Os campos podem ser substituidos por variáveis
#$mail->AddAddress('webmaster@nomedoseudominio.com'); # Caso queira receber uma copia
#$mail->AddCC('ciclano@site.net', 'Ciclano'); # Copia
#$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); # Cópia Oculta

# Define os dados técnicos da Mensagem
$mail->IsHTML(true); # Define que o e-mail será enviado como HTML
#$mail->CharSet = 'iso-8859-1'; # Charset da mensagem (opcional)

# Define a mensagem (Texto e Assunto)
$mail->Subject = $assunto; # Assunto da mensagem
$mail->Body = $nome."<br/>".$email."<br/>".$mensagem;
$mail->AltBody = "Este é o corpo da mensagem de teste, somente Texto! \r\n :)";

# Define os anexos (opcional)
#$mail->AddAttachment("c:/temp/documento.pdf", "documento.pdf"); # Insere um anexo

# Envia o e-mail
$enviado = $mail->Send();

# Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

# Exibe uma mensagem de resultado (opcional)
if ($enviado) {
 echo "E-mail enviado com sucesso!";
} else {
 echo "Não foi possível enviar o e-mail.";
 echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}
?>