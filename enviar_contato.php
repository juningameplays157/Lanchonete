<?php
// Configurações de e-mail
$para = "contato@bigbiteburgers.com.br"; // Substitua pelo seu e-mail
$assunto = "Novo contato do site - " . $_POST['assunto'];

// Dados do formulário
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$assunto_email = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

// Monta o corpo do e-mail
$corpo = "<h2>Novo contato do site Big Bite Burguers</h2>";
$corpo .= "<p><strong>Nome:</strong> {$nome}</p>";
$corpo .= "<p><strong>E-mail:</strong> {$email}</p>";
$corpo .= "<p><strong>Telefone:</strong> " . ($telefone ?: 'Não informado') . "</p>";
$corpo .= "<p><strong>Assunto:</strong> {$assunto_email}</p>";
$corpo .= "<h3>Mensagem:</h3>";
$corpo .= "<p>" . nl2br($mensagem) . "</p>";

// Cabeçalhos do e-mail
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: {$email}\r\n";
$headers .= "Return-Path: {$para}\r\n";

// Envia o e-mail
$envio = mail($para, $assunto, $corpo, $headers);

// Verifica se o e-mail foi enviado
if($envio) {
    // Redireciona de volta para a página de contato com mensagem de sucesso
    header("Location: contato.php?status=success");
} else {
    // Redireciona de volta para a página de contato com mensagem de erro
    header("Location: contato.php?status=error");
}

// Encerra o script
exit;
?>
