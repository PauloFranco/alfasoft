@extends('layouts.app')

@section('title', make_title(['Contato', $contact->name]))

@section('header')
    
@endsection

@section('content')

<div>
       
    <h2>Dados pessoais</h2>
    <p>Nome: {{ $contact->name }}</p>
    <p>Email: {{ $contact->email }}</p>
    <p>Contato: {{ $contact->contact }}</p>

    <div class="row float-right">
        @include('contacts.partials.action-buttons', [
            'user'    => $contact,
            'showLabel' => true,
            'except'    => [ 'view' ],
        ])
    </div>

    <div>
    </br>
    </br>
    </br>
        <p class="float-right">
        <a href="{{ route('home')  }}" tabindex="-1"
           class="btn btn-link">voltar</a>

    </p></div>
    
    
</div>

@endsection
