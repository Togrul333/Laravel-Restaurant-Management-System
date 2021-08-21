<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.admincss')

</head>
<body>

<div class="container-scroller">
    @include('admin.navbar')
    <div style="position: relative;top: 70px;right: -150px;">
        <table bgcolor="gray" border="1px">
            <tr>
                <th style="padding: 30px;">Name</th>
                <th style="padding: 30px;">email</th>
                <th style="padding: 30px;">phone</th>
                <th style="padding: 30px;">data</th>
                <th style="padding: 30px;">time</th>
                <th style="padding: 30px;">Message</th>
            </tr>
            @foreach($data as $date)
                <tr align="center">
                    <td>{{$date->name}}</td>
                    <td>{{$date->email}}</td>
                    <td>{{$date->phone}}</td>
                    <td>{{$date->date}}</td>
                    <td>{{$date->time}}</td>
                    <td>{{$date->message}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@include('admin.adminscript')

</body>
</html>
