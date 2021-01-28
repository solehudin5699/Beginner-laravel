<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>
</head>
<body>
  <h1>Data Pegawai</h1>
  <h3>www.malasngoding.com</h3>
  <ul>
    @foreach($pegawainew as $p)
    <li>{{ "Nama : ". $p->nama . ' | Alamat : ' . $p->alamat }}</li>
    @endforeach
  </ul>
</body>
</html>
