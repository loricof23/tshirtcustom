@extends('masteradmin')

@section('admin')
<h1>UPDATE PAGE</h1>
<form action="/dashboard/products/update/{{$product->id}}/process" method="post">
    @csrf
    <table>
        <tr>
            <td>
                Name
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" name="name" value="{{$product->name}}">
            </td>
        </tr>
        <tr>
            <td>
                T-Shirt Size
            </td>
            <td>
                :
            </td>
            <td>
                @if($product->size == 'S')
                    <input type="radio" name="size" checked value="S"> S
                @else
                    <input type="radio" name="size" value="S"> S
                @endif

                @if($product->size == 'M')
                    <input type="radio" name="size" checked value="M"> M
                @else
                    <input type="radio" name="size" value="M"> M
                @endif

                @if($product->size == 'L')
                    <input type="radio" name="size" checked value="L"> L
                @else
                    <input type="radio" name="size" value="L"> L
                @endif

                @if($product->size == 'XL')
                    <input type="radio" name="size" checked value="XL"> XL
                @else
                    <input type="radio" name="size" value="XL"> XL
                @endif
            </td>
        </tr>
        <tr>
            <td>
                Neck Type
            </td>
            <td>
                :
            </td>
            <td>
                @if($product->neck == 'Crew')
                <input type="radio" name="neck" checked value="Crew"> Crew Neck
                @else
                <input type="radio" name="neck" value="Crew"> Crew Neck
                @endif

                @if($product->neck == 'V')
                <input type="radio" name="neck" checked value="V"> V-Neck
                @else
                <input type="radio" name="neck" value="V"> V-Neck
                @endif
            </td>
        </tr>
        <tr>
            <td>
                Sleeve Type
            </td>
            <td>
                :
            </td>
            <td>
                @if($product->sleeve == 'short')
                <input type="radio" name="sleeve" checked value="short"> Short Sleeve
                @else
                <input type="radio" name="sleeve" value="short"> Short Sleeve
                @endif

                @if($product->sleeve == 'long')
                <input type="radio" name="sleeve" checked value="long"> Long Sleeve
                @else
                <input type="radio" name="sleeve" value="long"> Long Sleeve
                @endif
            </td>
        </tr>
        <tr>
            <td>
                Shirt Colour
            </td>
            <td>
                :
            </td>
            <td>
                <select name="colour">
                    @if($product->colour == 'black')
                    <option selected value="black">Black</option>
                    @else
                    <option value="black">Black</option>
                    @endif

                    @if($product->colour == 'white')
                    <option selected value="white">White</option>
                    @else
                    <option value="white">White</option>
                    @endif

                    @if($product->colour == 'red')
                    <option selected value="red">Red</option>
                    @else
                    <option value="red">Red</option>
                    @endif

                    @if($product->colour == 'blue')
                    <option selected value="blue">Blue</option>
                    @else
                    <option value="blue">Blue</option>
                    @endif

                    @if($product->colour == 'green')
                    <option selected value="green">Green</option>
                    @else
                    <option value="green">Green</option>
                    @endif

                    @if($product->colour == "pink")
                    <option selected value="pink">Pink</option>
                    @else
                    <option value="pink">Pink</option>
                    @endif
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Upload Image
            </td>
            <td>
                :
            </td>
            <td>
                <input type="file" name="file_upload">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Submit</button>
            </td>
        </tr>
    </table>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</form>
@endsection
