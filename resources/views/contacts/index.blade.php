@extends('layouts.app')

@section('title', make_title('Contacts'))

@section('header')

@endsection

@section('content')
  
    <div class="text-right mrg-bottom-15">
        @include('contacts.partials.create-button', [
            'show' => true,
        ])
    </div>

    @include('contacts.partials.card-list', compact('contacts'))

@endsection
