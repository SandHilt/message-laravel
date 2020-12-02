<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <section class="messages">
            <ul>
            @foreach ($posts as $post)
                <li>
                    <p>{{ $post->message }}</p>
                </li>
            @endforeach
            </ul>
            <form class="sender" action="POST">
                <label for="message">Message:</label>
                <input placeholder="Digite seu texto aqui" type="text" name="message" id="message" maxLength="10">
                <button type="submit">Enviar</button>
            </form>
        </section>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
