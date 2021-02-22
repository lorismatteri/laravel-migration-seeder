@extends('layouts.app')

@section('content')
    
    <h1>Studenti</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Età</th>
                <th>Città</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->surname}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->city}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
@endsection