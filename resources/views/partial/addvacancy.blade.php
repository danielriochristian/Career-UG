@extends('manager.manager')
@section('add_vacancy')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<h3 class="box-title">Tambah Vacancy</h3>
<form action="/addVacancy" method="post">
<div class="box box-warning"> {{csrf_field()}}
    <div class="form-group">
      <label> Logo </label> <br>
      <label> <b>*Hanya gambar yang dapat dimasukkan </b> </label> <br>
    	  <input type="file" accept="image/jpeg,image/tiff,image/x-png" id="logo" name="logo">
    </div>
		<div class="form-group">
			<label> Nama Perusahaan </label>
			<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Perusahaan">
		</div>
    <div class="form-group">
			<label> Info </label>
			<textarea name="info" id="info"> </textarea>
		</div>
    <div class="form-group">
      <label> Dekripsi </label>
			<textarea name="desk" id="desk"> </textarea>
		</div>
    <div class="form-group">
      <label> Persyaratan </label>
			<textarea name="persyaratan" id="persyaratan"> </textarea>
		</div>
    <div class="form-group">
			<label> Alamat </label>
			<textarea name="alamat" id="alamat"> </textarea>
		</div>
    <div class="form-group">
      <label> Kategori </label>
      <textarea name="kategori" id="kategori"> </textarea>
    </div>
    <div class="form-group">
      <label> Provinsi </label>
      <input type="text" class="form-control" name="prov" id="prov" placeholder="Provinsi">
    </div>
		<!-- <div class="form-group">
			<label>Status</label>
      <select class="form-control" name="status">
          <option value="1">Aktif</option>
          <option value="0">Tidak Aktif</option>
          </select>
		</div> -->
		<div class="form-group">
			<button class="btn btn-primary" type="submit" id=""> Save Post </button>
			<button class="btn btn-danger" type="submit" id=""> Cancel </button>
		</div>


	</div>
@endsection
