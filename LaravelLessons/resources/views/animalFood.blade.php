@extends('navbar')

@section('Tittle', 'Food for animals ')

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
        .container { margin: 150px auto; }
    </style>
    <div class="container">
        <table id="testTable" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th data-type="text" data-field="text" >id</th>
                <th data-type="text" data-field="text" >Animal feed id</th>
                <th data-type="text" data-field="text" >animal</th>
                <th data-type="text" data-field="text" >Link</th>

            </tr>

            @foreach($animalFood as $Animals)
                <tr>
                    <th data-type="text" data-field="text" >
                        {{$Animals->id}}
                    </th>
                    <th data-type="text" data-field="text" >
                        {{$Animals->animal_feed_id}}
                    </th>
                    <th data-type="text" data-field="text" >
                        {{$Animals->animal_id}}
                    </th>
                    <th data-type="text" data-field="text" >
                        <a href="{{'/Animals'}} " > back</a>
                    </th>
                </tr>
            @endforeach
            </thead>
            <tbody></tbody>
        </table>
    </div>
@endsection
