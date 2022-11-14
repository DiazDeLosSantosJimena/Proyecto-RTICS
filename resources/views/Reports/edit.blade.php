@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Reportes Editar</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Editar Reportes</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('reports/' .$reports->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$reports->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Descripción:</label>
                <input class="form-control" type="text" id="description" name="description" value="{{$reports->description}}">
                <label for=""> Status:</label>
                <select class="form-control form-select" aria-label="Default select example" name="status" value="{{$reports->status}}">
                     <option selected >{{$reports->status}}</option> 
                    <option value="Activo" >Activo</option>
                    <option value="Completo">Completo</option>
                </select>
                <!-- <input class="form-control" type="text" id="status" name="status" value="{{$reports->status}}"> -->
                <label for=""> Dirección:</label>
                <select class="form-control form-select" aria-label="Default select example" name="direction_id" value="{{$reports->directions->name}}">
                     <option selected>{{$reports->directions->name}}</option>
                        @foreach($directions as $direction)   
                    <option value={{$direction->id}}>{{$direction->teaching}}</option>
                       @endforeach
                    </select>
                <!-- <input class="form-control" type="text" id="direction_id" name="direction_id" value="{{$reports->directions->name}}"> -->
                <label for=""> Usuario:</label>
                <select class="form-control form-select" aria-label="Default select example" name="user_id" value="{{$reports->users->name}}">
                    <option selected>{{$reports->users->name}}</option>
                        @foreach($users as $user)   
                    <option value={{$user->id}}>{{$user->name}}</option>
                       @endforeach
                </select>
                <!-- <input class="form-control" type="text" id="user_id" name="user_id" value="{{$reports->users->name}}"> -->
                <div class="row">
                   <a class="btn btn-danger m-3"  href="/reports" >Cancelar</a>
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