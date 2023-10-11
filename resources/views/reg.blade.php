<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>

</head>




<body>
  
  <div class="container" style="width: 60rem;">
    <b>
      <p class="h1 text-center ">Reg-Form</p>
    </b>
    <div class="card text-center">
      <div class="card-body">
        <form method="POST" action="/save" enctype="multipart/form-data" id="form" class="needs-validation">
          <div class="form-group">
            @csrf
            
        @if(session()->has('message'))
        <div  style="color:teal" >
          <b>
              {{session('message')}}
          </b>
        </div>
        @endif
            <div class="form-group">
              <label for="Name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="name">
              @error('name')
              <p class="alert alert-danger">{{$message}}</p>
              @enderror
            </div>
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
              placeholder="Enter email">
              @error('email')
              <p class="alert alert-danger">{{$message}}</p>
              @enderror
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="password">
            @error('password')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control" name="photo" placeholder="photo">
          </div> 
          <button type="submit" class="btn btn-primary">ADD</button>
          {{-- <th scope="col"><a href="" type="button" class="btn btn-danger  ">DEL-ALL</a></th> --}}

        </form>
      </div>
    </div>
  </div>

</body>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
</script>


<script>
  $(document).on('click','#save_offer',function(e){
    e.preventDefault();
    // var formdata = new FormData ($('#form')['0']);
    $.ajax({
    type: 'POST',
    url: '{{Route("createdata")}}',
    data: {
      '_token' :'{{csrf_token()}}',
      'name' :$("input[name='name']").val(),
      'email' :$("input[name='email']").val(),
      'password' :$("input[name='password']").val(),
    },
    success: function(data) {},
    success: function(reject) {}
  });
  });</script>
</html>