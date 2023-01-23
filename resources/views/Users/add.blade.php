@include('layouts.header')
@include('layouts.menu')



@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Usuarios Altas</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Usuarios</h6>
            </div>
            <div class="card-body">
                
            <form action="{{ url('users') }}" enctype="multipart/form-data" method="post">
                {!! csrf_field() !!}
                @include('components.flash_alerts') 
                <label for=""> Nombre completo:</label>
                <input class="form-control" type="text" id="name" name="name" value="{{old('name')}}">
                @error('name')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <label for=""> Email:</label>
                <input class="form-control" type="email" id="email" name="email" value="{{old('email')}}">
                @error('email')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <label for=""> Password:</label>
                <input class="form-control" type="password" id="password" name="password" value="{{old('password')}}">
                @error('password')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <label for="formFile" class="form-label">Selecciona la imagen de tu firma</label>
                <input class="form-control" type="file" id="signature" name="signature" value="{{old('signature')}}">
                @error('signature')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <label for=""> Direccion:</label>
                <select class="form-control form-select" aria-label="Default select example" name="direction_id" >
                    <option value="">Elige la dirección</option>
                        @foreach($directions as $direction)   
                    <option value={{$direction->id}}>{{$direction->teaching}}--{{$direction->career}}</option>
                       @endforeach
                </select>
                @error('direction_id')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <!-- <input class="form-control" type="text" id="direction_id" name="direction_id"> -->
                <label for=""> Tipo de usuario:</label>
                <select class="form-control form-select" aria-label="Default select example" name="typeofuser_id" >
                    <option value="">Elige al tipo de usuario</option>
                        @foreach($typeofusers as $typeofuser)   
                    <option value={{$typeofuser->id}}>{{$typeofuser->name}}</option>
                       @endforeach
                </select>
                @error('typeofuser_id')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <!-- <input class="form-control" type="text" id="typeofuser_id" name="typeofuser_id"> -->
                    <a class="btn btn-danger m-3"  href="/users" >Cancelar</a>
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