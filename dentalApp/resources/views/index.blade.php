@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col">

    </div>
    <div class="col">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://dentalclinicpalamos.cat/wp-content/uploads/2014/11/protector-deportivo.jpg" class="d-block w-20" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.cuidadodentalpersonalizado.com/wp-content/uploads/2015/08/Protector-Bucal-a-Medida1.jpg" class="d-block w-20" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://webdental.cl/odontologia/wp-content/uploads/2016/03/protectores-bucales-nacimiento-2.png" class="d-block w-20" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

</div>
@endsection








