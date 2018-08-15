@extends('home2')
@section('graduate')
<div class="container" style="margin-top:7%">
  <h4 class="title-hero" style="margin-top:1%">Graduate List</h4>
  <hr>
  <div class="container">
    <h6>Select Major</h6>
    <div class="row">
      <div class="col">
        <select class="form-control" id="exampleFormControlSelect1" style="width:50%">
          <option>Select Major</option>
          <option>Teknik Informatika</option>
          <option>Sistem Informasi</option>
        </select>
      </div>
      <div class="col">
        <button type="button" class="btn btn-success" style="margin-left:-53%">Search</button>
      </div>
    </div>
  </div>
  <table class="table table-hover" style="margin-top:2%"><!--table-->
  <thead>
    <tr>
      <th scope="col">NPM</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Graduate Year</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>24 Years</td>
      <td>2017</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>26 Years</td>
      <td>2015</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>30 Years</td>
      <td>2014</td>
    </tr>
  </tbody>
</table><!--end table-->
<nav aria-label="Page navigation example"><!--pagination-->
  <ul class="pagination" style="margin-left:40%;">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav><!--end pagination-->
</div>
<style media="screen">
.table td {
 text-align: center;
}
.table th {
 text-align: center;
}
</style>
@endsection
