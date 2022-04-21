@extends('layouts.app')

@section('title', make_title(['Contato', $contact->name]))

@section('header')
    
@endsection

@section('content')
    <h2>Dados pessoais</h2>
    <p>Nome: {{ $contact->name }}</p>
    <p>Email: {{ $contact->email }}</p>
    <p>Contato: {{ $contact->contact }}</p>


@endsection
