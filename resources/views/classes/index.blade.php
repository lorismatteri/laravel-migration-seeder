@extends('layouts.app')

@section('content')
    
    <h1>Classi</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Numero</th>
                <th>Numero degli Studenti</th>
                <th>Corso</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($classes as $class)
                <tr>
                    <td>{{$class->number}}</td>
                    <td>{{$class->students_number}}</td>
                    <td>{{$class->course}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
@endsection