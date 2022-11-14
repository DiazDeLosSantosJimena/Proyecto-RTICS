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
                
            <form action="{{url('users/' .$users->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$users->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Nombre:</label>
                <input class="form-control" type="text" id="name" name="name" value="{{$users->name}}">
                <label for=""> Email:</label>
                <input class="form-control" type="text" id="teaching" name="teaching" value="{{$users->email}}">
                <label for=""> Password:</label>
                <input class="form-control" type="text" id="teaching" name="teaching" value="{{$users->password}}">
                <label for="formFile" class="form-label">Selecciona tu archivo de FIRMA</label>
                <input class="form-control" type="file" id="signature" name="signature"value="{{$users->signature}}">
                <label for=""> Dirección:</label>
                <select class="form-control form-select" aria-label="Default select example" name="direction_id" value="{{$users->direction_id}}">
                     <option selected>{{$users->directions->name}}</option>
                        @foreach($directions as $direction)   
                    <option value={{$direction->id}}>{{$direction->name}}</option>
                       @endforeach
                </select>
                <!-- <input class="form-control" type="text" id="direction_id" name="direction_id" value="{{$users->direction_id}}"> -->
                <label for=""> Tipo de usuario:</label>
                <select class="form-control form-select" aria-label="Default select example" name="user_id" value="{{$users->typeofuser_id}}">
                    <option selected>{{$users->typeofusers->name}}</option>
                        @foreach($typeofusers as $typeofuser)   
                    <option value={{$typeofuser->id}}>{{$typeofuser->name}}</option>
                       @endforeach
                </select>
                <!-- <input class="form-control" type="text" id="typeofuser_id" name="typeofuser_id" value="{{$users->typeofuser_id}}"> -->
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