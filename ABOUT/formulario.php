<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $celular = htmlspecialchars($_POST["celular"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    $destinatario = "melloarthurd98@gmail.com";
    $assunto = "Novo contato do site";
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Celular: $celular\n";
    $corpo .= "Mensagem:\n$mensagem\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($destinatario, $assunto, $corpo, $headers)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Erro ao enviar mensagem. Tente novamente.'); window.location.href='index.html';</script>";
    }
} else {
    header("Location: index.html"); // Redireciona para a página inicial
    exit();
}
?>
