<table border='3'>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Abb</th>
        <th>Location</th>
    </thead>

    <tbody>
        @foreach($items as $res)
        <tr>
            <td>{{$res->id }}</td>
            <td>{{$res->lab_name}}</td>
            <td>{{$res->abbreviation}}</td>
            <td>{{$res->location}}</td>
        </tr>
        @endforeach
    </tbody>

</table>
