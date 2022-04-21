@extends('layouts.app')

@section('title', make_title('Contacts'))

@section('header')
@section('header')
    @include('contacts.partials.header', [
        'title'  => 'Contacts',
    ])
@endsection

@section('content')
  
    @auth
        <div class="text-right mrg-bottom-15">
            @include('contacts.partials.create-button', [
                'show' => true,
            ])
        </div>
    @endauth
    @include('contacts.partials.card-list', compact('contacts'))

@endsection
