@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Usuarios Editar</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Usuarios</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('users/' .$users->id) }}" enctype="multipart/form-data" method="post">
                {!! csrf_field() !!}
                @include('components.flash_alerts') 
                @method("PATCH")
                <input class="form-control" type="text" value="{{$users->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Nombre:</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ old('name') ? old('name') : $users->name}}">
                @error('name')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror
                <label for=""> Email:</label>
                <input class="form-control" type="text" id="email" name="email" value="{{ old('email') ? old('email') : $users->email}}">
                @error('email')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <label for=""> Password:</label>
                <input class="form-control" type="password" id="password" name="password" value="{{ old('password') ? old('password') : $users->password}}">
                @error('password')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <label for="formFile" class="form-label">Selecciona la imagen de tu firma</label>
                <input class="form-control" type="file" id="signature" name="signature"value="{{old('signature') ? old('signature') : $users->signature}}">
                @error('signature')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <label for=""> Dirección:</label>
                <select class="form-control form-select" aria-label="Default select example" name="direction_id" value="{{$users->direction_id}}">
                <option value="{{ old('direction_id') ? old('direction_id') : $users->direction_id}}">{{$users->directions->teaching}}--{{$users->directions->career}}</option>
                        @foreach($directions as $direction)   
                    <option value={{$direction->id}}>{{$direction->teaching}}--{{$direction->career}}</option>
                       @endforeach
                </select>
                @error('direction_id')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <!-- <input class="form-control" type="text" id="direction_id" name="direction_id" value="{{$users->direction_id}}"> -->
                <label for=""> Tipo de usuario:</label>
                <select class="form-control form-select" aria-label="Default select example" name="typeofuser_id" value="{{$users->typeofuser_id}}">
                <option value="{{ old('typeofuser_id') ? old('typeofuser_id'): $users->typeofuser_id}}">{{$users->typeofusers->name}}</option>
                        @foreach($typeofusers as $typeofuser)   
                    <option value={{$typeofuser->id}}>{{$typeofuser->name}}</option>
                       @endforeach
                </select>
                @error('typeofuser_id')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <!-- <input class="form-control" type="text" id="typeofuser_id" name="typeofuser_id" value="{{$users->typeofuser_id}}"> -->
                <div class="col-auto">
                <a class="btn btn-danger m-3"  href="/users" >Cancelar</a>
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