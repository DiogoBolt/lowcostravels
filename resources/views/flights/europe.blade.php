

@extends('layouts.app')


@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header-->
    <header class="jumbotron hero-spacer">
        <h1>TravelCheap</h1>
        <p><a class="btn btn-primary btn-large">Call to action!</a>
        </p>
    </header>
    <div class="col-md-9",style="float:left;">


        <div class="row">

            <div class="col-md-3">
                <table>

                    @for($i=0;$i<$flights->count();$i++)
                        @if($i%4==0)
                            <tr>
                        @endif

                        <td>
                            <h3 style="color:lightslategrey"><center>{{$flights[$i]->name}}</center></h3>
                            <p><a href="/flights/{{$flights[$i]->id}}"> <img src="{{ URL::to('/').'/'.$flights[$i]->picture }}" width="250px" height="250px"hspace="10">         </a></p>
                            <h3 style="color: orange"><center>{{$flights[$i]->price}}€</center></h3>
                        </td>

                    @endfor


                    <!--
                    @foreach($flights as $flight)
                        <div class="col-sm-3">


                            <h3><center>{{$flight->name}}</center></h3>
                            <p><a href="/flights/{{$flight->id}}"> <img src="{{ URL::to('/').'/'.$flight->picture }}" width="250px" height="250px"hspace="10">         </a></p>
                            <h3><center</h3>
                    @endforeach
                    -->
                </table>
            </div>

        </div>
    </div>
        <!-- Title -->
</div>

<!-- /.container -->

<!-- jQuery -->

<script>

</script>


