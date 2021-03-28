@extends('layouts.helloapp')

@section('title','Person.index')

@section('menubar')
    @parent
    投稿ページ
@endsection

@section('content')

    @foreach ($users as $user)
        <div class="h5 mb-3">
            <h2 class="h5 mb-3">
                {{$user->name}}さんが書いた記事
            </h2>

            <ul class="list-group">
                @foreach ($user->posts as $post)
                    <li class="list-group-item">
                        <p>{{$post->title}}</p>
                        
                        <p class="small">{{$post->tag}}</p>
                    </li>
                @endforeach
            </ul>
        </div>

    @endforeach

    @foreach ($users as $user)
    <div class="h5 mb-3">
            <h2 class="h5 mb-3">
                {{$user->name}}さんが書いた本
            </h2>

            <ul class="list-group">
                @foreach ($user->books as $book)
                    <li class="list-group-item">
                        <p>{{$book->title}}</p>
                        
                        <p class="small">{{$book->price}}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach

@endsection
    
