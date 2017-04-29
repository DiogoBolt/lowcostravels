

@extends('layouts.app')


@section('content')
<!-- Page Content -->
<div class="container" style="margin-top:100px;">

    <table class="table table-bordered">
        <tr>
            <th>Email</th>
            <th>Mensagem</th>
        </tr>
        @foreach($contacts as $contact)
            <tr>
            @if($contact->read == 0)
            <td >{{$contact->email}}</td>
            <td style="color:red">{{$contact->message}}</td>
            @else
                <td >{{$contact->email}}</td>
                <td style="color:red">{{$contact->message}}</td>
            @endif
            </tr>
            @endforeach
    </table>

        </div>

<!-- /.container -->

<!-- jQuery -->

<script>

</script>


