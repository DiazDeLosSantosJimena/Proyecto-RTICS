@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Aulas Editar</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Editar Aulas</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('classrooms/' .$classrooms->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$classrooms->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Nombre:</label>
                <input class="form-control" type="text" id="name" name="name" value="{{$classrooms->name}}">
                <label for=""> Docencia:</label>
                <select class="form-control form-select" aria-label="Default select example" name="direction_id" value="{{$classrooms->direction_id}}">
                     <option selected>{{$classrooms->directions->name}}</option>
                        @foreach($directions as $direction)   
                    <option value={{$direction->id}}>{{$direction->name}}</option>
                       @endforeach
                </select>
                <!-- <input class="form-control" type="text" id="direction_id" name="direction_id" value="{{$classrooms->direction_id}}"> -->
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