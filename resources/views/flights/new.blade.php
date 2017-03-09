@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div style="color:pink;background-color:dimgray" class="panel-heading">Clientes</div>

                <div class="panel-body">
                   <form action="/createflight" method="post" enctype="multipart/form-data">

                       <div class="form-group">
                           {{ Form::label('Name', 'Name') }}
                           {{ Form::text('name', null, ['class' => 'form-control']) }}
                       </div>
                       <div class="form-group">
                           {{ Form::label('description', 'description') }}
                           {{ Form::text('description', null, ['class' => 'form-control']) }}
                       </div>

                       <div class="form-group">
                           {{ Form::label('Continente', 'zone') }}
                           {{ Form::text('zone', null, ['class' => 'form-control']) }}

                       </div>

                       <div class="form-group">
                           {{ Form::label('Country', 'country') }}
                           {{ Form::text('country', null, ['class' => 'form-control']) }}

                       </div>
                       <div class="form-group">
                           {{ Form::label('price', 'price') }}
                           {{ Form::text('price', null, ['class' => 'form-control']) }}
                       </div>

                       <div class="form-group">
                           {{ Form::label('enddate', 'enddate') }}
                           {{ Form::date('enddate', null, ['class' => 'form-control']) }}
                       </div>
                       <div class="form-group">
                           {{ Form::label('picture', 'picture') }}
                           <input type="file" name="picture">
                       </div>
                       <div class="form-group">
                           {{ Form::label('Facebookshare', 'facebookshare') }}
                           {{ Form::text('facebookshare', null, ['class' => 'form-control']) }}
                       </div>

                       <div class="form-group">
                           <button type="submit" class="btn btn-info">Criar Cliente</button>
                       </div>

                   </form>


                </div>



</div>

            </div>
        </div>
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

