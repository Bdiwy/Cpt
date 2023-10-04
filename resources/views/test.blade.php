  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
  </head>
  <body>

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
            <th scope="col"><a href="" type="button" class="btn btn-danger">DELETE-ALL</a></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $i)
            <tr>
            <th scope="row">{{$i->id}}</th>
            <td><img src="x" alt="not work"></td>
            <td>{{$i->name}}</td>
            <td>{{$i->email}}</td>
            <td>{{$i->password}}</td>
            <td><a href="/edit/{{$i->id}}" type="button" class="btn btn-success">UPDATE</a></td>
            <td><a href="/delete/{{$i->id}}" type="button" class="btn btn-danger">DELETE</a></td>
            <td><input type="checkbox" name="checkk"></td>
            
          </tr>
          @endforeach
        </tbody>
      </table>



  </body>
  </html>