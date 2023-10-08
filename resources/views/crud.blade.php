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
      <p class="h1 text-center ">CRUD-FORM</p>
    </b>
    <div class="card text-center">
      <div class="card-body">
        <form method="POST" action="" enctype="multipart/form-data" id="form">
          <div class="form-group">
            @csrf
            <div class="form-group">
              <label for="Name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="name">
            </div>
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
              placeholder="Enter email">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="password">
          </div>
          <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control" name="photo" placeholder="photo">
          </div> 
          <button id="save_offer" class="btn btn-primary">ADD</button>
          {{-- <th scope="col"><a href="" type="button" class="btn btn-danger  ">DEL-ALL</a></th> --}}

        </form>
        <table class="table table-sm table-dark">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">PHOTO</th>
              <th scope="col">NAME</th>
              <th scope="col">EMAIL</th>
              <th scope="col">PASSWORD</th>
              <th scope="col">UPDATE</th>
              <th scope="col">DELETE</th>
            </tr>
          </thead>
          <tbody>
            {{-- @foreach ($data as $i) --}}
            <tr>
              <th scope="row">axa</th>
              <td><img src="x" alt="not work"></td>
              <td>xx</td>
              <td>cxc</td>
              <td>scs</td>
              <td><a href="#" type="button" class="btn btn-success">UPDATE</a></td>
              <td><a href="#" type="button" class="btn btn-danger">DELETE</a></td>
            </tr>
            {{-- @endforeach --}}
          </tbody>
        </table>
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
      'photo' :$("input[name='photo']").val(),
    },
    success: function(data) {},
    success: function(reject) {}
  });
  });</script>
</html>