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

<div style="position: relative; top: 60px;right: -150px">
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
        @csrf
         <div>
             <label for="">Title</label>
             <input style="color: blue" type="text" name="title" placeholder="Write a title" required>
         </div>
        <div>
            <label for="">Price</label>
            <input style="color: blue"  type="number" name="Price" placeholder="Price" required>
        </div>
        <div>
            <label for="">Image</label>
            <input  type="file" name="image" required>
        </div>
        <div>
            <label for="">Description</label>
            <input style="color: blue"  type="text" name="description" placeholder="Description" required>
        </div>

        <div>
            <input style="color: #0d0d0d " type="submit" value="Save">
        </div>

    </form>

    <div>
        <table bgcolor="black">
            <tr>
                <th style="padding: 30px">Food name</th>
                <th style="padding: 30px">Price</th>
                <th style="padding: 30px">Description</th>
                <th style="padding: 30px">Image</th>
                <th style="padding: 30px">Action</th>
                <th style="padding: 30px">Action2</th>


            </tr>
            @foreach($data as $date)
            <tr align="center">
                <td>{{$date->title}}</td>
                <td>{{$date->price}}</td>
                <td>{{$date->description}}</td>
                <td><img height="200" width="200" src="/foodimage/{{$date->image}}"></td>
                <td><a href="{{url('/deletemenu',$date->id)}}">Delete</a></td>
                <td><a href="{{url('/updateview',$date->id)}}">Update</a></td>
            </tr>
            @endforeach


        </table>
    </div>
</div>
</div>
@include('admin.adminscript')

</body>
</html>
