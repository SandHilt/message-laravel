@extends('layouts.app')
@section('content')
<section class="messages">
    <header>
        <h1 class="title">Messages</h1>
    </header>

    <ul class="messages-list">
    @foreach ($posts as $post)
        <li>
            <p><strong>{{ $post->user->name }} say:</strong> {{ $post->message }}</p>
            <time>{{$post->updated_at->diffForHumans()}}</time>
        </li>
    @endforeach
    </ul>
    @auth
    <form class="sender" method="POST" action="{{ route('post.store') }}">
        @csrf
        <label for="message">Message:</label>
        <input placeholder="Digite seu texto aqui" type="text" name="message" id="message" maxLength="10">
        <button class="btn" type="submit">Enviar</button>
    </form>
    @endauth
    @guest
    <form class="login" action="{{ route('logme') }}" method="POST">
        @csrf
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email">
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password">
        <button class="btn" type="submit">Logar</button>
    </form>
    @endguest
</section>
@endsection