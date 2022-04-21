@extends('layouts.app')

@section('title', make_title('Login'))

@section('header')
   
@endsection

@section('content')
  
<div class="tab-content">
    <div class="tab-pane active" id="info">
        <form action="{{ route('login') }}" method="POST" accept-charset="UTF-8">
            {{ form_fields( 'POST' ) }}

            @include('users.partials.form')

            <hr>
            <p class="text-right">
                <a href="{{ route('home')  }}" tabindex="-1"
                   class="btn btn-link">cancelar</a>

                <button class="btn btn-primary"> Log in</button>
            </p>
        </form>
    </div>
</div>

@endsection
