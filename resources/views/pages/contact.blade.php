@extends('master')

@section('view')
<div class="content"><H1>CONTACT PAGE</H1>Got a question? We'd love to hear you.Send us message and we'll respond as soon possible.</div>
<br></br>
<form action = "/contact/insert" method="post">
    <center>
        <table>
            <tr>
                {{ csrf_field() }}
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
                    E-Mail
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>


            <tr>
                <td>
                    Message
                </td>
                <td>
                    :
                </td>
                <td>
                    <textarea rows="6" cols="40" name="message">
                    </textarea>
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit">Send Message</button>
                </td>
            </tr>

        </table>
    </center>
</form>
@endsection
