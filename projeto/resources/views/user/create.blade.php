<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Create</title>
</head>
<body>
    <div class="main-container">
        <header class="header">
            <div class="content-header">
                <h2 class="title-logo">
                    <a href="{{ route('dashboard') }}">VeredaTech</a>
                </h2>

                <ul class="list-nav-link">
                    <li><a class="nav-link" href="#">Usuários</a></li>
                    <li><a class="nav-link" href="{{ route('dashboard') }}">Sair</a></li>
                </ul>
            </div>
        </header>

        <h1>cadastrar Usuário</h1>

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
    </div>
</body>
</html>
