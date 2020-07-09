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
                        {{$studente->number}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <Strong>Nome: </Strong>
                        {{$studente->first_name}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <Strong>Cognome: </Strong>
                        {{$studente->last_name}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <Strong>Email: </Strong>
                        {{$studente->email}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
