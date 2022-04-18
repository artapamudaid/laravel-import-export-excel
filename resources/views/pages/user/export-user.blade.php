<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach($users as $user)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>