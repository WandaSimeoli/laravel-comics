@extends('layout.main') 
@section('main-content')
    <h2>Homepage</h2>
   <div>
    @foreach ($comics as $comic)
    <ul>
        @foreach ($comic as $key => $value)
        <li> {{$key}}: {{ $value}} </li>
        @endforeach
    </ul>
      @endforeach
   </div>
@endsection

