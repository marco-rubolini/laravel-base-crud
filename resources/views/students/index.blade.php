@extends('layouts.app')

@section('page-title', 'Lista Studenti')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-5 mb-5">Lista studenti</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th>Matricola</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studenti as $studente)
                            <tr>
                                <td>{{ $studente->first_name }}</td>
                                <td>{{ $studente->last_name }}</td>
                                <td>{{ $studente->number }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
