<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Boas-vindas</title>
</head>
<body>
    <h1>Bem-vindo!</h1>
    <form action="index.php?controller=WelcomeController&action=submitName" method="POST">
        <label for="name">Digite seu nome:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Enviar</button>
    </form>

    <?php if (isset($welcomeMessage)) : ?>
        <p><?php echo $welcomeMessage; ?></p>
    <?php endif; ?>
</body>
</html>