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


   <div style="position:relative; top: 60px; right: -150px">

   <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">

         @csrf   
    
         <div style="margin-bottom: 8px;">
             <label style="width: 11ch;">Title</label>
             <input style="color:blue; height: 32px; width: 400px;" type="text" name="title" value="{{$data->title}}" required>
        </div>

        <div style="margin-bottom: 8px;">
             <label style="width: 11ch;">Price</label>
             <input style="color:blue; height: 32px; width: 400px;" type="num" name="price" value="{{$data->price}}" required>
        </div>

       

        <div style="margin-bottom: 8px;">
             <label style="width: 11ch;">Description</label>
             <input style="color:blue; height: 32px; width: 400px;" type="text" name="description" value="{{$data->description}}"required>
        </div>

        <div style="margin-bottom: 8px;">
             <label>old Image</label>
             <img height="200" width="200" src="/foodimage/{{$data->image}}">
        </div>

        <div style="margin-bottom: 8px;">
             <label>New Image</label>
             <input type="file" name="image" required>
        </div>

        <div>
             
        <input style="color: white; background: red; border: none; padding: 5px; border-radius: 4px;" type="submit" value="Save">
        </div>

</form>
        <div>
   
</div>

   @include("admin.adminscript")
  
    
  </body>
</html>