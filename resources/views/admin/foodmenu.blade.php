<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
    
  </head>
  <body>
    
  <div class="container-scroller">
   @include("admin.navbar")
   <div style="position:relative; top: 60px; right: -150px">

   <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

         @csrf   
    
         <div style="margin-bottom: 8px;">
             <label style="width: 11ch;">Title</label>
             <input style="color:blue; height: 32px; width: 400px;" type="text" name="title" placeholder="Write a title" required>
        </div>

        <div style="margin-bottom: 8px;">
             <label style="width: 11ch;">Price</label>
             <input style="color:blue; height: 32px; width: 400px;" type="num" name="price" placeholder="price" required>
        </div>

        <div style="margin-bottom: 8px;">
             <label style="width: 11ch;">Image</label>
             <input type="file" name="image" required>
        </div>

        <div style="margin-bottom: 8px;">
             <label style="width: 11ch;">Description</label>
             <input style="color:blue; height: 32px; width: 400px;" type="text" name="description" placeholder="Description" required>
        </div>

        <div>
             
             <input style="color: white; background: red; border: none; padding: 5px; border-radius: 4px;" type="submit" value="Save">
        </div>
        <br>

</form>
        <div>
             <table bgcolor="black" style="border-spacing: 30px; border-radius: 4px;">
                  <tr>
                       <th style="padding: 30px">Food Name</th>
                       <th style="padding: 30px">Price</th>
                       <th style="padding: 30px">Description</th>
                       <th style="padding: 30px">Image</th>
                       <th style="padding: 30px">Action</th>
                       <th style="padding: 30px">Action2</th>
                       
                  </tr>
               
                    @foreach($data as $data)

                  <tr align="center">
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                        <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                        <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
                 </tr>
                  
                  @endforeach

             </table>
        </div>







   </div>


</div>

   @include("admin.adminscript")

    
  </body>
</html>