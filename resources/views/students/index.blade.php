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
                        @forelse ($studenti as $student)
                            <tr>
                                <td>{{ $student->first_name }}</td>
                                <td>{{ $student->last_name }}</td>
                                <td>{{ $student->number }}</td>
                                <td class="text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('students.show', ['student' => $student->id]) }}">Dettagli</a>
                                    <a class="btn btn-warning btn-sm" href="{{ route('students.edit', ['student' => $student->id]) }}">Modifica</a>
                                    <form class="delete" action="{{ route('students.destroy', ['student' => $student->id]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" class="btn btn-danger btn-sm" value="Elimina" href="">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr colspan='3'>
                                <td>Non è presente nessuno studente</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
