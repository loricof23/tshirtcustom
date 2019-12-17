@extends('master')

@section('view')
<h1>CREATE PAGE</h1>
<form action="/create/insert" method="post">
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
                <input type="text" name="name">
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
                <input type="radio" name="size" value="S"> S
                <input type="radio" name="size" value="M"> M
                <input type="radio" name="size" value="L"> L
                <input type="radio" name="size" value="XL"> XL
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
                <input type="radio" name="neck" value="Crew"> Crew Neck
                <input type="radio" name="neck" value="V"> V-Neck
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
                <input type="radio" name="sleeve" value="short"> Short Sleeve
                <input type="radio" name="sleeve" value="long"> Long Sleeve
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
                    <option selected value="black">Black</option>
                    <option value="white">White</option>
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                    <option value="pink">Pink</option>
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
