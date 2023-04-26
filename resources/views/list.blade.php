<head>
    <title>World Meals</title>
</head>

<body>
    <div>
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
        <th>{{$meal['id']}}</th>
        <th>{{$meal['title']}}</th>
        <th>{{$meal['description']}}</th>
        <th>{{$meal['slug']}}</th>
        <th>{{$meal['category_id']}}</th>
      </tr>
      @endforeach 
    </thead>
    <tbody>
    </tbody>
        </table>
    </div>
</body>