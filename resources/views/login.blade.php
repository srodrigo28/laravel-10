<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <style>
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <h1>Editei</h1>

            <form>
                <input id="nome" placeholder="seu nome">
                <input id="email" placeholder="seu email">
                <input id="senha" placeholder="seu senha">
                <button class="btn btn-primary">Entrar</button>
                <button class="btn btn-success">Cadastrar</button>
            </form>
        </div>
    </body>
</html>
