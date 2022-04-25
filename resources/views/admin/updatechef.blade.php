<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include("admin.admincss")
    
  </head>
  <body>
    
  <div class="container-scroller">
   @include("admin.navbar")

       <form action="{{url('/updatefoodchef',$data->id)}}" method="Post" enctype="multipart/form-data">
       @csrf

           <div style="margin-bottom: 8px;">
               <label style="width: 10ch;">Chef Name</label>
               <input style="color:blue;" type="text" name="name" value="{{$data->name}}">
           </div>

           <div style="margin-bottom: 8px;">
               <label style="width: 10ch;">Speciality</label>
               <input style="color:blue;" type="text" name="speciality" value="{{$data->speciality}}">
           </div>

           <div style="margin-bottom: 8px;">
               <label style="width: 10ch;">Old Image</label>
               <img height="300" width="300" src="/chefimage/{{$data->image}}">
           </div>

           <div style="margin-bottom: 8px;">
               <label style="width: 10ch;">New image</label>
               <input type="file" name="image">
           </div>

           <div>
               
           <input style="color: white; background: red; border: none; padding: 5px; border-radius: 4px;" type="submit" value="Update Chef" required="">
           </div>




       </form>






</div>

   @include("admin.adminscript")
  
    
  </body>
</html>