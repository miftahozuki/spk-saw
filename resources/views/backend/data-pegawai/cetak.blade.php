<body>
    <h1>{{ $title }}</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p>
  
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach($pegawai as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->nama }}</td>
        </tr>
        @endforeach
    </table>
  
</body>