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

    <form action="{{url('uploadchef')}}" method="Post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Name</label>
            <input style="color: blue;" type="text" name="name" required placeholder="enter name">
        </div>
        <div>
            <label for="">Speciality</label>
            <input style="color: blue;" type="text" name="speciality" required placeholder="enter speciality">
        </div>
        <div>
            <input  type="file" name="image" required placeholder="enter speciality">
        </div>
        <div>
            <input style="color: blue;" type="submit" value="Save">
        </div>
    </form>
    <table bgcolor="black">
        <tr>
            <th style="padding: 30px;">Chef name</th>
            <th style="padding: 30px;">Speciality</th>
            <th style="padding: 30px;">Image</th>
            <th style="padding: 30px;">Action</th>
            <th style="padding: 30px;">Action2</th>

        </tr>
        @foreach($data as $date)
        <tr align="center">
            <td>{{$date->name}}</td>
            <td>{{$date->speciality}}</td>
            <td><img height="100" width="100" src="/chefimage/{{$date->image}}" alt=""></td>
            <td><a href="{{url('/updatechef',$date->id)}}">Update</a></td>
            <td><a href="{{url('/deletechef',$date->id)}}">Delete</a></td>

        </tr>
        @endforeach
    </table>
</div>
@include('admin.adminscript')

</body>
</html>
