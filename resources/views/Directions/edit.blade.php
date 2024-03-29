@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Direcciones Editar</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Direcciones</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('directions/' .$directions->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$directions->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Docencia:</label>
                <input class="form-control" type="text" id="teaching" name="teaching" value="{{$directions->teaching}}">
                @error('teaching')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <label for=""> Carrera:</label>
                <input class="form-control" type="text" id="career" name="career" value="{{$directions->career}}">
                @error('career')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <label for=""> Aula:</label>
                <select class="form-control form-select" aria-label="Default select example" name="classroom_id" >
                    <option value="{{ old('classroom_id') ? old('classroom_id') : $directions->classroom_id}}">{{$directions->classrooms->name}}</option>
                        @foreach($classrooms as $classroom)   
                    <option value={{$classroom->id}}>{{$classroom->name}}</option>
                       @endforeach
                </select>
                @error('classroom_id')
                  <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <div class="row">
                    <a class="btn btn-danger m-3"  href="/directions" >Cancelar</a>
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