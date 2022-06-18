@extends('layouts.adminapp')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid px-0 py-4">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">SELAMAT DATANG ADMIN !</h1>
  <h3>Aplikasi Puskesmas | Nambo Health Public Center</h3>
  <br>
  <div class="row">
  <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              DATA KADER PUSKESMAS</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $membercount }} </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-users fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              DATA GIZI BALITA</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $balitacount }} </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-baby-carriage fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              DATA IBU HAMIL</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $bumilcount }} </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-female fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- /.container-fluid -->
@endsection
