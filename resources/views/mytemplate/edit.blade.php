<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <h4 >{{ $Title }} | Laravel Crud</h4>
    @if(Session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
      @endif  

    @if(Session::get('failed'))
    <div class="alert alert-success">
        {{ Session::get('failed') }}
    </div>
        
        
        @endif
    <form method="post" action="{{ route('store') }}" class="border border-dark p-2 m-2 bg-warning">  
        @csrf     
               <div class="form-group">      
                   <label for="first_name" class="fs-4"> Name:</label><br/><br/>  
                   <input type="text" class="form-control" name="name" value="{{ old('name') }}"/><br/><br/>  
                   <span class="text-danger fs-4">@error('name'){{ $message }} @enderror</span>
               </div>  
     <div class="form-group">      
     <label for="first_name" class="fs-4">Address:</label><br/><br/>  
                   <input type="text" class="form-control" name="address" value="{{ old('address') }}"/><br/><br/>  
                   <span class="text-danger fs-4">@error('address'){{ $message }} @enderror</span>

               </div>  
     <div class="form-group">      
                   <label for="gender" class="fs-4">Mobile_num:</label><br/><br/>  
                   <input type="text" class="form-control" name="mobile_num" value="{{ old('mobile_num') }}"/><br/><br/>
                   <span class="text-danger fs-4">@error('mobile_num'){{ $message }} @enderror</span>

               </div>  
               <button href="#" type="submit" class="btn-btn fs-5 " >Submit</button>  
               {{-- <button href="#" type="submit" class="btn-btn fs-5" >update</button>   --}}
     </form>
     
</body>
</html>