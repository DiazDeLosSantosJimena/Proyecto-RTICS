@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tipos de Usuario Editar</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Editar Tipo de usuario</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('typeofusers/' .$typeofusers->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$typeofusers->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Nombre:</label>
                <select class="form-control form-select" aria-label="Default select example" name="name" value="{{$typeofusers->name}}">
                            <option selected>{{$typeofusers->name}}</option>
                            <option value="Director">Director</option>
                            <option value="Profesor de tiempo completo">Profesor de tiempo completo</option>
                            <option value="Mantenimiento Empleado">Mantenimiento Empleado</option>
                            <option value="Administrador">Administrador</option>
                </select>
                <!-- <input class="form-control" type="text" id="name" name="name" value="{{$typeofusers->name}}"> -->
                <div class="row">
                    <button type="submit" class="btn btn-primary m-3" value="update">Guadar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')