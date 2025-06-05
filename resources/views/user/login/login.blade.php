<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/__reset.css">
    <link rel="stylesheet" href="css/login/login.css">
</head>
<body>
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1>MAX<br><span>FOOD</span></h1>
        <img src="images/logo-mx.png" alt="">
        <form action="">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="Senha">
            <button type="submit">Entrar</button>
        </form>
        <a onclick="window.location.href='/cadastro'">nao possuo login</a>
    </div>
</body>
</html>