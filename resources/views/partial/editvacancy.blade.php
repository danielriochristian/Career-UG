<!-- Falah 14 04 2018-->
{{-- calling admin \ admin.blade.php --}}
@extends('manager.manager')
@section('edit_vacancy')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<div class="box box-warning">
    <div class="box-header">

    <form class="" action="/updatevacancy/{id}" method="post">
      <div class="form-group">
    		<label> Logo </label> <br>
        <img src="{{$value->image}}" alt="" height="200px;"> <br>
        <input type="file" accept="image/jpeg,image/tiff,image/x-png" id="logo" name="logo">
    	</div>

      <div class="form-group">  {{csrf_field()}}
        <label> Company Title </label>
        <input type="text" class="form-control" name="company_title" placeholder="Company Title" id="company_title" value="{{ $value->company_title }}">
      </div>

      <div class="form-group">
        <label> Job Title </label>
        <input type="text" class="form-control" name="job_title" placeholder="Job Title" id="job_title" value="{{ $value->job_title }}">
      </div>

      <div class="form-group">
        <label> Job Description </label>
  			<textarea name="job_description" placeholder="Job Description" id="job_description" value="{{ $value->job_description }}"> </textarea>
  		</div>

      <div class="form-group">
        <label> Company review </label>
        <input type="text" class="form-control" name="company_overview" placeholder="Company Overview" id="company_overview" value="{{ $value->company_overview }}">
      </div>

      <div class="form-group">
        <label> Location </label>
        <input type="text" class="form-control" name="location" id="Location" placeholder="Location" value="{{ $value->location }}">
      </div>

      <div class="form-group">
        <label> Company Info </label>
        <input type="text" class="form-control" name="company_info" id="company_info" placeholder="Company Info" value="{{ value->company_info }}">
      </div>

      <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="status">
            <option value="1">Aktif</option>
            <option value="0">Tidak Aktif</option>
            </select>
      </div>


      	<div class="form-group">
      		<input type="hidden" name="_method" value="put">
      		<input type="hidden" name="_token" value="{{ csrf_token() }}">
      		<button class="btn btn-success" type="submit" id="new"> Edit </button>
      	</form>
      		<a href="/vacancy">
      		<button class="btn btn-danger" type="submit" id="new"> Cancel </button>
      		</a>
      	</div>


    </div>
</div>

@endsection
