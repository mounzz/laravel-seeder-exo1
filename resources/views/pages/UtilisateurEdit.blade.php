@extends('layout.layout')

@section('content')
            <form action="/UtilisateurEdit/{{$id_show->id}}/update" method="POST">
                @csrf
                @method('PUT')
                <input type="text" value={{$id_show -> nom}} name="nom">
                <input type="number" value={{$id_show -> age}} name="age">
                <input type="email" value={{$id_show -> email}} name="email">
                <input type="number" value={{$id_show -> tel}} name="tel">
                <button type="submit">edit</button>
            </form>
@endsection
