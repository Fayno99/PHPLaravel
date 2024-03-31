@extends('navbar')

@section('Tittle1', 'List of Foods ')

@section('content1')
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
