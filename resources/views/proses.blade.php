<!DOCTYPE html>
<html>
<head>
	<title>View Data</title>
</head>
<body>
  @if($dataForm[0])
    <p>Nama : {{$dataForm[0]}}</p>
    <p>Alamat : {{$dataForm[1]}}</p>
  @endif
  </ul>

</body>
</html>