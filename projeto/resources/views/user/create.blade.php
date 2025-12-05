<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>cadastrar Usúario</h1>

    @if (session('success'))
        <p style="color: rgba(23, 0, 228, 1);">{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p style="color: #f00;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <label for="name">Nome</label>
        <input type="text" id="name" name="name" placeholder="Nome Completo">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Melhor Email">

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password">

        <button type="submit">Cadastrar</button>

    </form>
</body>
</html>