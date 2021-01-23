<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata</title>
</head>
<body>
  <h1>View untuk Biodata</h1>
  @if($namadosen)
    <h5>Assalamu'alaikum Wr Wb, selamat pagi Pak {{$namadosen}}</h5>
  @endif
  <p>Nama : {{$nama}}</p>
  <ul>
    @foreach($matkul as $m)
      <li>{{$m}}</li>
    @endforeach
  </ul>
</body>
</html>