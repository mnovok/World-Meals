@extends ('list')

@section ('content')

<div class= "row">
    <div class = "col-md-12">
        <br/>
        <h3 align = "center">Meals Data</h3>
        <br/>
        <table class = "table table-bordered">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
            </tr>
            @foreach($meals as $row)
            <tr>
                <td>{{$row['title']}}</td>
                <td>{{$row['description']}}</td>
                <td>{{$row['category']}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection