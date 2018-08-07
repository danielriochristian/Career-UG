@extends('manager.manager')
@section('add_vacancy')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<h3 class="box-title">Tambah Vacancy</h3>
<form action="/addVacancy" method="post">
<div class="box box-warning">
    <div class="form-group">
      <label> Image </label> <br>
      <label> <b>*Hanya gambar yang dapat dimasukkan </b> </label> <br>
    	  <input type="file" accept="image/jpeg,image/tiff,image/x-png" id="logo" name="logo">
    </div>
		<div class="form-group">
              {{csrf_field()}}
			<label> Company Title</label>
			<input type="text" class="form-control" name="company_title" id="company_title" placeholder="Company Name">
		</div>
    <div class="form-group">
			<label> Job title</label>
			<input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title">
		</div>
    <div class="form-group">
      <label> Job Description </label>
			<textarea name="job_description" id="job_description"> </textarea>
		</div>
    <div class="form-group">
			<label> Company Overview</label>
			<input type="text" class="form-control" name="company_overview" id="company_overview" placeholder="Company Overview">
		</div>
    <div class="form-group">
      <label> Location </label>
      <input type="text" class="form-control" name="location" id="Location" placeholder="Location">
    </div>
    <div class="form-group">
      <label> Company Info </label>
      <input type="text" class="form-control" name="company_info" id="company_info" placeholder="Company Info">
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
