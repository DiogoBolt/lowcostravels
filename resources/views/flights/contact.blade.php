@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        </div>
    </div>


    <script>


        $( "#servico" ).change(function() {
            id = $( "#servico" ).val()
            $.get( "/getpreco/"+id, function( data ) {
                $( "#valor" ).html(data+'€');

            });
        });
    </script>
@endsection

