@extends('Home2')
@section ('cv_name')
<div class="container" style="margin-top:7%">
  <h4 class="title-hero" style="margin-top:1%">CV Online by Name</h4>
  <hr>
  <div class="container">
    <h6>Select Alphabate</h6>
      <div class="row">
        <div class="col">
          <select class="form-control" id="exampleFormControlSelect1" style="width:50%">
            <option>Alphabate</option>
            <option>A</option>
            <option>B</option>
              <option>C</option>
          </select>
        </div>
        <div class="col">
          <a class="btn btn-success" href="#" style="margin-left:-53%">Search</a>
        </div>
      </div>
    </div>
  <table class="table table-hover" style="margin-top:2%"><!--table-->
  <thead>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Age</th>
        <th>Graduate Year</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <td>Otto</td>
      <td>19</td>
      <td>2018</td>
      <td><a class="btn btn-success" href="/Cv" >View</a></td>
    </tr>
    <tr>
      <th>2</th>
      <td>Mark</td>
      <td>17</td>
      <td>2018</td>
      <td><button type="button" class="btn btn-success">View</button></td>
    </tr>
    <tr>
      <th>3</th>
      <td>Larry</td>
      <td>19</td>
      <td>2007</td>
      <td><button type="button" class="btn btn-success">View</button></td>
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
@endsection
<style media="screen">
.table td {
 text-align: center;
}
.table th {
 text-align: center;
}
</style>
