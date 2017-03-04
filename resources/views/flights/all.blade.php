@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div style="color:pink;background-color:dimgray" class="panel-heading">Clientes</div>

                <div class="panel-body">
                    <table class="table table-hover table-striped table-condensed table-bordered">
                        <tr>
                            <th>Nome</th>
                            <th>Descricao</th>
                            <th>Data Fim</th>
                            <th>Preço</th>
                            <th>Continente</th>

                        </tr>
                        @foreach($flights as $flight)
                            <tr>
                                <td><a href="/flights/{{$flight->id}}">{{$flight->name}}</a></td>
                                <td><a href="/flights/{{$flight->id}}">{{$flight->description}}</a></td>
                                <td><a href="/flights/{{$flight->id}}">{{$flight->enddate}}</a></td>
                                <td><a href="/flights/{{$flight->id}}">{{$flight->price}}€</a></td>
                                <td><a href="/flights/{{$flight->id}}">{{$flight->zone}}</a></td>
                            </tr>
                        @endforeach

                    </table>

                    <a href="/newflight">New Flight</a>
                </div>



</div>

            </div>
        </div>
    </div>



@endsection

