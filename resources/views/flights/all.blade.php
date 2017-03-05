@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Low Cost Travels
            </h1>
        </div>

        @foreach($flights as $flight)
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <a href="/flights/{{$flight->id}}"> <h4 style="display:inline"><i class="fa fa-fw fa-check"></i>{{$flight->name}}</h4><div style="float:right;color:green;"><h3 style="line-height:0px;margin-top:10px">{{$flight->price}}€</h3></div></a>
                </div>
                <div class="panel-body">
                    <a href="/flights/{{$flight->id}}"> <div style="text-align:center"><img src="{{ URL::to('/').'/'.$flight->picture }}" width="200px" height="200px"></div></a>
                     <div style="margin-top:20px;display:inline-block" align="right"> <a href="#" class="btn btn-default">Book Now</a></div>
                    <div style="margin-top:20px;display:inline;float:right" align="left"><h4>{{date('Y-m-d H:i',strtotime($flight->created_at))}}</h4></div>
                </div>
            </div>
        </div>
            @endforeach

    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->

    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Modern Business Features</h2>
        </div>
        <div class="col-md-6">
            <p>The Modern Business template by Start Bootstrap includes:</p>
            <ul>
                <li><strong>Bootstrap v3.3.7</strong>
                </li>
                <li>jQuery v1.11.1</li>
                <li>Font Awesome v4.2.0</li>
                <li>Working PHP contact form with validation</li>
                <li>Unstyled page elements for easy customization</li>
                <li>17 HTML pages</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="http://placehold.it/700x450" alt="">
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
            </div>
        </div>
    </div>

    <hr>


</div>



@endsection

