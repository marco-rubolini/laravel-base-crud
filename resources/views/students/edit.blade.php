@extends('layouts.app')

@section('page-title', 'Inserimento nuovo studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-5 mb-5">Inserimento nuovo studente</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('students.update', ['student' => $student->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="matricola">Numero Matricola</label>
                        <input type="number" name="number" class="form-control" id="matricola" placeholder="Inserisci il numero di matricola dello studente" value="{{ old('number', $student->number) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="first_name" class="form-control" id="nome" placeholder="Inserisci il nome dello studente" value="{{ old('first_name', $student->first_name) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" name="last_name" class="form-control" id="cognome" placeholder="Inserisci il cognome dello studente" value="{{ old('last_name', $student->last_name) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Inserisci email dello studente" value="{{ old('email', $student->email) }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
