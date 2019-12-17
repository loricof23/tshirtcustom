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
                    Size
                </th>
                <th>
                    Sleeve
                </th>
                <th>
                    Neck
                </th>
                <th>
                    Colour
                </th>
                <th>
                    Image
                </th>
                <th>
                    Action
                </th>
            </tr>
            @foreach($baju as $key=> $b)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$b->size}}</td>
                <td>{{$b->sleeve}}</td>
                <td>{{$b->neck}}</td>
                <td>{{$b->colour}}</td>
                <td>
                    <!-- <img src="{{ asset('image/' . $b->image)}}" /> -->
                </td>
                <td>
                    <button><a href="/dashboard/products/update/{{$b->id}}">Ubah</a></button>
                    <button><a href="/dashboard/products/delete/{{$b->id}}" >Hapus</button>
                    </td>
                </tr>
                @endforeach

            </table>
        </center>
    </div>
    @endsection
