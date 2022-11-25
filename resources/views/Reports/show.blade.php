@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Reporte Información</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Reportes</h6>
            </div>
            <div class="card-body">
             <h5 class="card-title"> Descripción: {{ $reports->description}}</h5>
             <h5 class="card-title"> Status: {{ $reports->status }}</h5>
             <h5 class="card-title"> Dirección: {{$reports->directions->teaching}}-{{$reports->directions->classrooms->name}}</h5>
             <h5 class="card-title"> Usuario: {{ $reports->users->name }}</h5>
             <a class="btn btn-outline-success" m-3" href="/reports" ><i class="fa-solid fa-arrow-left"></i></a>
            </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')