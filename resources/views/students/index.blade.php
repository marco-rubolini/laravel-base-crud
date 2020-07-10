@extends('layouts.app')

@section('page-title', 'Lista Studenti')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mt-5 mb-5">Lista studenti</h1>
                    <a class="btn btn-primary"href="{{ route('students.create')}}">Nuovo studente</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th>Matricola</th>
                            <th class="text-right">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studenti as $studente)
                            <tr>
                                <td>{{ $studente->first_name }}</td>
                                <td>{{ $studente->last_name }}</td>
                                <td>{{ $studente->number }}</td>
                                <td class="text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('students.show', ['student' => $studente->id]) }}">Dettagli</a>
                                    <a class="btn btn-warning btn-sm" href="#">Modifica</a>
                                    <a class="btn btn-danger btn-sm" href="#">Elimina</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
