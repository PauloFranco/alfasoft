@extends('layouts.app')

@section('title', make_title('Editar contato'))

@section('header')
  
@endsection

@section('content')
    <form action="{{route('contacts.update', compact('contact'))}}" method="POST" accept-charset="UTF-8">
        {{ form_fields('PUT') }}

        @include('contacts.partials.form', compact('contact'))

        
        <div class="form-group text-right">
            <a href="{{ route('home')  }}" tabindex="-1"
               class="btn btn-link">cancelar</a>

            <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check"></i> salvar</button>
        </div>
    </form>
@endsection
