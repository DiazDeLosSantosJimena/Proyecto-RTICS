@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tipo de Usuario Altas</h1>
        </div>

        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Alta Tipo de Usuario</h6>
                    </div>
                    <div class="card-body">
                        
                    <form action="{{ url('typeofusers') }}" method="post">
                        {!! csrf_field() !!}
                        <label for=""> Nombre:</label>
                        <select class="form-control form-select" aria-label="Default select example" name="name">
                            <option selected>Selecciona el tipo de usuario</option>
                            <option value="Director">Director</option>
                            <option value="Profesor de tiempo completo">Profesor de tiempo completo</option>
                            <option value="Mantenimiento Empleado">Mantenimiento Empleado</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                        <!-- <input class="form-control" type="text" id="name" name="name"> -->
                        <a class="btn btn-danger m-3"  href="/typeofusers" >Cancelar</a>
                            <button type="submit" class="btn btn-primary m-3" value="save">Guadar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')