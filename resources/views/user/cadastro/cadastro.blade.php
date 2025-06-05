<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/__reset.css">
    <link rel="stylesheet" href="css/cadastro/cadastro.css">
</head>
<body>
    <div class="container">
        <img src="images/logo-mx.png" alt="">
        

        <form action="{{ route('cadastro.salvar') }}" method="POST">
            <h1>Registro</h1>
            @csrf

            <div class="div">
                <input type="text" name="nome" placeholder="nome" required>
                <input type="text" name="sobrenome" placeholder="sobrenome" required>
            </div>

            <div>
                <input type="email" name="email" placeholder="email" required>
            </div>

            <div>
                <input type="password" name="senha" placeholder="senha" required>
                @error('senha')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="password" name="senha_confirmada" placeholder="confirmar senha" required>
            </div>

            <div>
                <input type="text" name="cpf" placeholder="CPF" required>
            </div>

            <div>
                <input type="tel" name="telefone" placeholder="telefone" required>
                <input type="date" name="data_nascimento" required>
            </div>


            <button type="submit">Cadastrar</button>
        </form>

        <a onclick="window.location.href='/login'">ja possuo login</a>
    </div>
</body>
</html>