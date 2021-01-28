<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href='/css/app.css' rel="stylesheet" type="text/css"/>
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
</head>
<body>
<div class="container">
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<h5 class="text-center" >Cari Pegawai :</h5>
	<form class="form-inline" action="/pegawai/cari" method="GET">
	<input type="text" name="cari" placeholder="Cari pegawai..." value="{{old('cari')}}" />
	<input type="submit" value="CARI" />
	</form>
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	<br/>
	<br/>

	<table border="1">
		<tr>
      <th>No</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $index => $p)
		<tr>
      <td>{{ $firstRowOnThisPage = $pegawai->currentPage() * $pegawai->perPage() - $pegawai->perPage()+1+ $index }} </td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	<br/>
	Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>


{{ $pegawai->links() }}
	<!-- {{ $pegawai->lastPage() }} -->

</div>
</body>
</html>