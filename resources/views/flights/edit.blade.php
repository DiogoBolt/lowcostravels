@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div style="color:pink;background-color:dimgray" class="panel-heading">Clientes</div>

                <div class="panel-body">
                   <form action="/editflight" method="post" enctype="multipart/form-data">

                       <div class="form-group">
                           {{ Form::label('name', 'Name') }}
                        <input name="name" class="form-control" type="text" value="{{$flight->name}}">
                       </div>
                       <div class="form-group">
                           {{ Form::label('description', 'Description') }}
                           <input name="description" class="form-control" type="text" value="{{$flight->description}}">
                       </div>

                       <div class="form-group">
                           {{ Form::label('price', 'Price') }}
                           <input name="price" class="form-control" type="text" value="{{$flight->price}}">

                       </div>
                       <div class="form-group">
                           {{ Form::label('enddate', 'End Date') }}
                           <input name="enddate" class="form-control" type="date" value="{{$flight->enddate}}">
                       </div>

                       <div class="form-group">
                           {{ Form::label('zone', 'Zone') }}
                           <input name="zone" class="form-control" type="text" value="{{$flight->zone}}">
                       </div>

                       <div class="form-group">
                           {{ Form::label('country', 'Country') }}
                           <input name="country" class="form-control" type="text" value="{{$flight->country}}">
                       </div>
                       <div class="form-group">
                           {{ Form::label('picture', 'picture') }}
                           <input type="file" name="picture">
                       </div>
                       <div class="form-group">
                           {{ Form::label('url', 'url') }}
                           <input name="url" class="form-control" type="text" value="{{$flight->url}}">
                       </div>
                       <div class="form-group">
                           {{ Form::label('Facebookshare', 'facebookshare') }}
                           <input name="facebookshare" class="form-control" type="text" value="{{$flight->facebookshare}}">
                       </div>
                       <input type="hidden" name="flightid" value="{{$flight->id}}">

                       <div class="form-group">
                           <button type="submit" class="btn btn-info">Editar Voo</button>
                       </div>

                   </form>


                </div>



</div>

            </div>
        </div>
    </div>
</div>

    <script>



    </script>
@endsection

