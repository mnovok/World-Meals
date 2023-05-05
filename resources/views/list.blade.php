<!doctype html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>World Meals</title>
</head>

<body>
    <div class="container my-5 py-5 px-5 mx-5">
    <form action="{{url('/search-record')}}" method="post">
        {{csrf_field()}}
        <input type="search" name="name" placeholder="Enter meal title" value="{{$name}}"/>
        <input type="submit" value="Search"/>
    </form>

        <h1 style="color: palevioletred;">List of Meals</h1><br>

        <table border="1">
    <thead>
      <tr>
        <th><strong>ID</strong></th>
        <th><strong>TITLE</strong></th>
        <th><strong>DESCRIPTION</strong></th>
        <th><strong>SLUG</strong></th>
        <th><strong>CATEGORY</strong></th>
      </tr>
      @foreach($meals as $meal)
      <tr>
        <td>{{$meal->id}}</td>
        <td>{{$meal->title}}</td>
        <td>{{$meal->description}}</td>
        <td>{{$meal->slug}}</td>
        <td>{{$meal->category_id}}</td>
      </tr>
      @endforeach 
    </thead>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>