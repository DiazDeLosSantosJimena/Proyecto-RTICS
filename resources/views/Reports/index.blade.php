@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Reportes</h1>

</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <!--   <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista De  Carreras</h6>
            </div> -->
             <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el reporte</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Informacion del reporte</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/reports">Continuar</a>
                </div>
            </div>
        </div>
    </div>
        <div class="card-body">
            @include('components.flash_alerts') 
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">Lista De Reportes</h3>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="reports/create"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Clave</th>
                                            <th>Descripción</th>
                                            <th>Status</th>
                                            <th>Dirección</th>
                                            <th>Usuario</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Clave</th>
                                            <th>Descripción</th>
                                            <th>Status</th>
                                            <th>Dirección</th>
                                            <th>Usuario</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($reports as $report)
                                        <tr>
                                            <td>{{$report->id}}</td>
                                            <td>{{$report->description}}</td>
                                            <td>{{$report->status}}</td>
                                            <td>{{$report->directions->teaching}}-{{$report->directions->classrooms->name}}</td>
                                            <td>{{$report->users->name}}--{{$report->users->typeofusers->name}}</td>
                                            <td>    
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                        <a class="btn btn-success m-3" href="reports/{{$report->id}}" ><i class="fa-regular fa-eye"></i></a>
                                                        <a class="btn btn-warning m-3" href="reports/{{$report->id}}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <form action="reports/{{$report->id}}" method="POST">
                                                        {!! csrf_field() !!}
                                                        @method("delete")
                                                            
                                                        
                                                        <button class="btn btn-danger m-3" type="submit"><i class="fa-solid fa-trash"></i></button>
                                                        </form>
                                                        <!-- <a class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a> -->
                                            </div>            
                                            </td>
                                        </tr>
                                        @endforeach  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
          
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')
