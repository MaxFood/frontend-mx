<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('cadastroloja.salvar') }}" method="POST">
        <h1>Cadastro da Loja</h1>
        @csrf

        
        <div>
            <input type="text" name="nome" placeholder="Nome da loja" required>
        </div>

        <div>
            <input type="email" name="email" placeholder="E-mail" required>
        </div>

        <div>
            <input type="password" name="senha" placeholder="Senha" required>
        </div>

        <div>
            <input type="text" name="cnpj" placeholder="CNPJ" required>
        </div>

        <div>
            <input type="text" name="telefone" placeholder="Telefone" required>
        </div>




        
        <div>
            <input type="text" name="endereco" placeholder="Endereço" required>
        </div>

        <div>
            <input type="text" name="numero" placeholder="Número" required>
        </div>

        <div>
            <input type="text" name="complemento" placeholder="Complemento (opcional)">
        </div>

        <div>
            <input type="text" name="cep" placeholder="CEP" required>
        </div>

        <div>
            <input type="text" name="cidade" placeholder="Cidade" required>
        </div>

        <div>
            <input type="text" name="estado" placeholder="Estado" required>
        </div>

        <button type="submit">Cadastrar</button>
    </form>
        <a onclick="window.location.href='/login'">ja possuo login</a>
</body>
</html>