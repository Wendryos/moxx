@extends('app')
@section('title', 'Dashboard')

@section('page')
     <div class="container">
     
        Nome:   {{ Auth::user()->name     }}
        <hr><br>
        Senha:  {{ Auth::user()->password }}
        <hr><br>
        E-mail: {{ Auth::user()->email    }}

        <form action="{{ route('logout') }}" method="POST" onsubmit="e.preventDefault();"> 
            @csrf
            <button type="submit"> {{ __('Logout') }}  </button>
        </form>
    </div>


@endsection