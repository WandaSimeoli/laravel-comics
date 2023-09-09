@extends('layout.main') 
@section('main-content')
<main class="bg-secondary">
  <h2 class="text-center p-3">Homepage</h2>
  <div class="container-sm">
    <div class="row align-items-strech">
    @foreach ($comics as $comic)
      <div class="col-3">
        <div class="card p-3 bg-black text-white border-white h-75">
          <h3> {{ $comic['title']}} </h3>
          <div class="card-body h-50">
            <img src="{{ $comic['thumb']}}" class="card-img-top" alt="">
            <h4> Price: {{$comic['price']}} </h4>
            <h5> Serie: {{$comic['series']}}</h5>
            <div>Year: {{$comic['sale_date']}}</div>
            <div>Typology: {{$comic['type']}}</div>
            <p class="lh-sm overflow-auto h-25">Description: {{$comic['description']}}</p>
          </div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</main>
@endsection

