<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center" width="50%" cellspacing="0">
        <tr align="center">
            <td>Nomor</td>
            <td>Nama Barang</td>
            <td>Merk</td>
            <td>Harga</td>
        </tr>
    @foreach($barang as $data)
    
        <tr>
            <td> {{ $data->id }}</td>
            <td>{{ $data->nama_barang }}</td>
            <td>{{ $data->merk }}</td>
            <td>{{ $data->harga }}</td>
        </tr>
    
    
    @endforeach
</table>
</body>
</html>