@extends('layouts.app')

@section('page-title', 'Inserimento nuovo studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-5 mb-5">Inserimento nuovo studente</h1>
                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="matricola">Numero Matricola</label>
                        <input type="number" name="number" class="form-control" id="matricola" placeholder="Inserisci il numero di matricola dello studente">
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="first_name" class="form-control" id="nome" placeholder="Inserisci il nome dello studente">
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" name="last_name" class="form-control" id="cognome" placeholder="Inserisci il cognome dello studente">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Inserisci email dello studente">
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
