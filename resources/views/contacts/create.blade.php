@extends('layouts.app')

@section('title', make_title('Novo contato'))

@section('header')

@endsection


@section('content')
    <div class="tab-content">
        <div class="tab-pane active" id="info">
            <form action="{{ route('contacts.store') }}" method="POST" accept-charset="UTF-8">
                {{ form_fields( 'POST' ) }}

                @include('contacts.partials.form', compact('contact'))

                <hr>
                <p class="text-right">
                    <a href="{{ route('home')  }}" tabindex="-1"
                       class="btn btn-link">cancelar</a>

                    <button class="btn btn-success"><i class="fa fa-fw fa-plus"></i> criar</button>
                </p>
            </form>
        </div>
    </div>
@endsection