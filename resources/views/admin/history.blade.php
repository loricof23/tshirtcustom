@extends('masteradmin')

@section ('admin')
<div class="content">
    <h1>VIEW PAGE</h1>
    <center>
    <table border="1">

        <tr>
            <th>
                Number
            </th>
            <th>
                Name
            </th>
        </tr>
        @foreach($baju as $key=> $b)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$b->name}}</td>
        </tr>
        @endforeach

    </table>
    </center>
</div>
@endsection
