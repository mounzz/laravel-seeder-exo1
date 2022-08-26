@extends('layout.layout')


@section('content')
<div style="display:grid; grid-template-columns: repeat(6, 1fr);">
@foreach ($utilisateurs as $user )
    <div>{{$user -> nom}}</div>
    <div>{{$user -> age}}</div>
    <div>{{$user -> email}}</div>
    <div> {{$user -> tel}}</div>
    <div>
        <a href="/UtilisateurEdit/{{$user->id}}">
        <button type="submit">show</button>
        </a>
    </div>
    <div>
        <form action="/{{$user->id}}/delete" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </div>


@endforeach
<form action="/deleteAll" method="POST">
    @csrf
<button type="submit" value="submit">delete all</button>
</form>
</div>
@endsection
