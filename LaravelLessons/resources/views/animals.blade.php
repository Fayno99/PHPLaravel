@extends('navbar')

@section('Tittle', 'List of animals ')

@section('content')
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/materia/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/oliverEditTable.js"></script>
    <script src="js/jquery.ss.menu.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.ss.menu.js"></script>
    <style>
        body { background-color: #fdfdfd; }
        .container { margin: 10px auto; }
    </style>
<div class="container">
    <table id="testTable" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th data-type="text" data-field="text" >id</th>
            <th data-type="text" data-field="text" >Name</th>
            <th data-type="text" data-field="text" >Creaded At</th>
            <th data-type="text" data-field="text" >Link</th>

        </tr>

@foreach($animalList as $Animals)
        <tr>
            <th data-type="text" data-field="text" >
                {{$Animals->id}}
            </th>
            <th data-type="text" data-field="text" >
                {{$Animals->name}}
            </th>
            <th data-type="text" data-field="text" >
                {{$Animals->created_at}}
            </th>
            <th data-type="text" data-field="text" >
               <a href="{{route ('animal.dataFood', ['animal'=>$Animals])}} " > food </a>
            </th>
        </tr>
@endforeach
        </thead>

    </table>
</div>
@endsection



@section('Tittle2', 'List of Foods ')


@section('content2')
    <div class="container">
        <table id="testTable" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th data-type="text" data-field="text" >id</th>
                <th data-type="text" data-field="text" >Food</th>
                <th data-type="text" data-field="text" >Created at</th>
            </tr>
            @foreach($foodList as $food)
                <tr>
                    <th data-type="text" data-field="text" >
                        {{$food->id}}
                    </th>
                    <th data-type="text" data-field="text" >
                        {{$food->animal_feed}}
                    </th>
                    <th data-type="text" data-field="text" >
                        {{$food->created_at}}
                    </th>

                </tr>
            @endforeach
            </thead>

        </table>
    </div>
@endsection


@section('Tittle3', 'List of Employers ')


@section('content3')
    <div class="container">
        <table id="testTable" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th data-type="text" data-field="text" >id</th>
                <th data-type="text" data-field="text" >Name</th>
                <th data-type="text" data-field="text" >Created at</th>
                <th data-type="text" data-field="text" >Link</th>

            </tr>

            @foreach($employerList as $employer)
                <tr>
                    <th data-type="text" data-field="text" >
                        {{$employer->id}}
                    </th>
                    <th data-type="text" data-field="text" >
                        {{$employer->name}}
                    </th>
                    <th data-type="text" data-field="text" >
                        {{$employer->created_at}}
                    </th>
                    <th data-type="text" data-field="text" >
                        <a href="{{route ('employee.dataEmployee', ['employee'=>$employer])}} " > Animals </a>
                    </th>
                </tr>
            @endforeach
            </thead>

        </table>
    </div>
@endsection
