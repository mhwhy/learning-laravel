@extends('layouts.main2',['title' => 'guru'])

@section('container2')

<div class="container">
    <h1 class="mt-5">DATA GURU RPL</h1>





    <div class="row g-4">
        @foreach ($guru as $s)
<div class="col-lg-4 col-md-6">
    <div class="card card-guru" style="width: 20rem; ">
        <img src="{{ asset('img/' . $s->Foto) }}" alt="gambar" class="card-image-top img-fluid " style="width: 80%; left:35px; position:relative">
        <div class="card-body text-center">
            <h6>{{ $s->Nama }}</h6>
            <p>{{ $s->Mapel }}</p>
            <p>{{ $s->Alamat }}</p>
            <p>

            </p>
        </div>
    </div>
</div>
  @endforeach
</div>




</div>
@endsection

