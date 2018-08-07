@extends('admin.admin')
@section('roles')

  <h3 class="box-title">Manage Roles</h3>
  <div class="table-responsive">
  <table class="table" id="table">
  <thead>
  <tr>
  <th>Id</th>
  <th>Roles</th>
  <th>Action </th>
  </tr>
  </thead>
  {{ csrf_field() }}
  @foreach ($manage as $value)
  <tr class="manage{{$value->id}}">
  <td>{{ $value->id }}</td>
  <td>{{ $value->namaRule }}</td>
  <td>
    <button class="edit-modal btn btn-primary btn-md" data-id="{{$value->id}}" data-roles="{{$value->namaRule}}">
  Edit </button>
  </td>
  @endforeach
  </table>
  </div>
  {{$manage->links()}}


  <div id="myModal"class="modal fade" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"></h4>
    </div>
    <div class="modal-body">
    <form class="form-horizontal" role="modal">

    <div class="form-group">
    <label class="control-label col-sm-2"for="id">ID</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="fid" disabled>
    </div>
    </div>

    <div class="form-group">
    <label class="control-label col-sm-2"for="roles">Roles</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="r">
    </div>
    </div>
  </div>
  <div class="modal-footer">

  <button type="button" class="btn actionBtn" data-dismiss="modal">
  <span id="footer_action_button" class="glyphicon"></span>
  </button>

  <button type="button" class="btn btn-warning" data-dismiss="modal">
  <span class="glyphicon glyphicon"></span>close
  </button>

  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script type="text/javascript">

      $(document).on('click', '.edit-modal', function() {
      $('#footer_action_button').text(" Update Roles");
      $('#footer_action_button').addClass('glyphicon-check');
      $('#footer_action_button').removeClass('glyphicon-trash');
      $('.actionBtn').addClass('btn-success');
      $('.actionBtn').removeClass('btn-danger');
      $('.actionBtn').addClass('edit');
      $('.modal-title').text('Edit Roles');
      $('.deleteContent').hide();
      $('.form-horizontal').show();
      $('#fid').val($(this).data('id'));
      $('#r').val($(this).data('roles'));
      $('#myModal').modal('show');
      });
      // nama field
          $('.modal-footer').on('click', '.edit', function() {
            $.ajax({
              type: 'POST',
              url: 'editPostRoles',
              data: {
          '_token': $('input[name=_token]').val(),
          'id': $("#fid").val(),
          'namaRule': $('#r').val()
        },
          success: function(data) {
                $('.manage' + data.id).replaceWith(" "+
                "<tr class='manage" + data.id + "'>"+
                "<td>" + data.id + "</td>"+
                "<td>" + data.namaRule + "</td>"+
                "<td> <button class='edit-modal btn btn-primary btn-md' data-id='" +data.id+ "' data-roles='" +data.roles+"'> Edit </button>  </td>"+
                "</tr>");
              }
            });
          });
</script>
</div>
@endsection
