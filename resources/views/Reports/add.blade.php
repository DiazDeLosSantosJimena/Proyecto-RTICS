@include('layouts.header')
@include('layouts.menu')



@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Reportes Altas</h1>

</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Reportes</h6>
            </div>
            <div class="card-body">
                
            <form action="{{ url('reports') }}" method="post">
                {!! csrf_field() !!}
                @include('components.flash_alerts') 
                <label for=""> Descripcion:</label>
                <input class="form-control" type="text" id="description" name="description" value="{{old('description')}}">
                @error('description')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 

                <label for=""> Status:</label>
                <!-- <input class="form-control" type="text" value="Activo" id="status" name="status" aria-label="Disabled input example" disabled> -->
                <select class="form-control form-select" aria-label="Default select example" name="status">
                <option value="">Elige una opcion</option>
                <option value="Activo" >Activo</option>
                <option value="Completo">Completo</option>
                </select>
                @error('status')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <!-- <input class="form-control" type="text" id="status" name="status"> -->

                <label for=""> Direccion:</label>
                <select class="form-control form-select" aria-label="Default select example" name="direction_id">
                    <option value="">Elige la dirección</option>
                        @foreach($directions as $direction)   
                    <option value={{$direction->id}}>{{$direction->teaching}}--{{$direction->classrooms->name}}</option>
                       @endforeach
                    </select>
                @error('direction_id')
                  <small class="form-text text-danger">{{$message}}</small>
                  @enderror 
                <!-- <input class="form-control" type="text" id="direction_id" name="direction_id"> -->
                <label for=""> Usuario:</label>
                <select class="form-control form-select" aria-label="Default select example" name="user_id">
                    <option value="">Elige al usuario</option>
                        @foreach($users as $user)   
                    <option value={{$user->id}}>{{$user->name}}--{{$user->typeofusers->name}}</option>
                       @endforeach
                </select>
                <!-- <input class="form-control" type="text" id="user_id" name="user_id"> -->
                @error('user_id')
                  <small class="form-text text-danger">{{$message}}</small>
                  @enderror 
                     
                <a class="btn btn-danger m-3"  href="/reports" >Cancelar</a>
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