<x-app-layout>

    <h1>{{$post->name}}</h1>

    <h3>{{$post->extract}}</h3>

    <img src="{{Storage::url($post->image->url)}}">

    <p>{{$post->body}}</p>

</x-app-layout>