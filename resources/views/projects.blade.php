<table border='1'>
    <thead>
        <th>No.</th>
        <th>Project Name</th>
        <th>Budget (THB)</th>
        <th>Lab abbreviation</th>
    </thead>

    <tbody>
        @foreach($items as $res)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $res->project_name }}</td>
            <td>{{ $res->budget, 2 }}</td>
            <td>{{ $res->labs->abbreviation }}</td>
        </tr>
        @endforeach
    </tbody>

</table>
