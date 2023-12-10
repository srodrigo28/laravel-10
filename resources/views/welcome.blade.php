<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body class="antialiased">
        <h1>Editei</h1>

        <form>
            <input id="nome" placeholder="seu nome">
            <input id="email" placeholder="seu email">
            <input id="senha" placeholder="seu senha">
            <button>Entrar</button>
            <button >Cadastrar</button>
        </form>
    </body>
</html>
