@extends('navbar')

@section('Tittle', 'Supervisors ')

@section('content')
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/materia/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/oliverEditTable.js"></script>
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
                    <th data-type="text" data-field="text" >supervisor id</th>
                    <th data-type="text" data-field="text" >animal id</th>
                    <th data-type="text" data-field="text" >Link</th>
                </tr>
                @foreach($supervisorList as $supervisor)
                    <tr>
                        <th data-type="text" data-field="text" >
                            {{$supervisor->id}}
                        </th>
                        <th data-type="text" data-field="text" >
                            {{$supervisor->employee_id}}
                        </th>
                        <th data-type="text" data-field="text" >
                            {{$supervisor->animals_id}}
                        </th>
                        <th data-type="text" data-field="text" >
                            <a href="{{'/Animals'}} " > back</a>
                        </th>
                    </tr>
                @endforeach
                </thead>

            </table>
        </div>
    @endsection




