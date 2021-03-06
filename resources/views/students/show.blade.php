@extends('layouts.app')

@section('page-title', 'Dettaglio studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-5 mb-5">Dettaglio studente</h1>
                <div class="d-flex flex-column bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <Strong>Matricola numero: </Strong>
                        {{$student->number}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <Strong>Nome: </Strong>
                        {{$student->first_name}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <Strong>Cognome: </Strong>
                        {{$student->last_name}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <Strong>Email: </Strong>
                        {{$student->email}}
                    </div>
                </div>
                <form class="p-2 delete" action="{{ route('students.destroy', ['student' => $student->id]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-danger btn-sm" value="Elimina" href="">
                </form>
            </div>
        </div>
    </div>
@endsection
