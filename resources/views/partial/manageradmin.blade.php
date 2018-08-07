@extends('manager.manager')
@section('manage_admin')

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> --}}

    <h3 class="box-title">List Of Admin</h3>
    <div class="table-responsive">
    <table class="table" id="table">
    <thead>
    <tr>
    <th>No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Roles</th>
    <th>Create At</th>

      </tr>
      {{ csrf_field() }}
      <?php  $no=1; ?>
      @foreach ($manage as $value)
      <tr class="manage{{$value->id}}">
      <td>{{ $no++ }}</td>
      <td>{{ $value->name }}</td>
      <td>{{ $value->email }}</td>
      <td>@if ($value->roles_id==1) Manager
          @elseif ($value->roles_id==2) Super Admin
          @else Belum Terdaftar
          @endif
      </td>
      <td>{{ $value->created_at }}</td>
      </tr>
      @endforeach
      </table>
      </div>

    </div>

        {{-- Modal Form Create Post --}}
    <div id="create" class="modal fade" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" role="form">
      <div class="form-group row add">
      <label class="control-label col-sm-2" for="name">Name</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Daniel Rio Christian" required>
      <p class="error text-center alert alert-danger hidden"></p>
      </div>
      </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">E-Mail</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="email" placeholder="webmaster@gmail.com" required>
      <p class="error text-center alert alert-danger hidden"></p>
      </div>
      </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password</label>
      <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Your Password Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
      </div>
      </div>
      <div class="form-group">
      {{--<label class="control-label col-sm-2" for="roles">Roles</label>
       <div class="col-sm-10">
          <input type="text" class="form-control" id="roles" name="roles" placeholder="Your Password Here" required>
        <select class="form-control" name="roles" id="roles" required>
          <option value="1">Manager</option>
          <option value="2">Super Admin</option>
        </select>
      <p class="error text-center alert alert-danger hidden"></p>
      </div>  --}}
      </div>


      </form>
      </div>
      <div class="modal-footer">
      <button class="btn btn-warning" type="submit" id="add">
      <span class="glyphicon glyphicon-plus"></span>Save
      </button>
      <button class="btn btn-warning" type="button" data-dismiss="modal">
      <span class="glyphicon glyphicon-remobe"></span>Close
      </button>
      </div>
      </div>
      </div>
    </div>
        {{-- Modal Form Show POST --}}
    <div id="show" class="modal fade" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label for="">ID  : </label>
      <b id="i"/>
      </div>
      <div class="form-group">
      <label for="">Name  : </label>
      <b id="nm"/>
      </div>
      <div class="form-group">
      <label for="">Email : </label>
      <b id="em"/>
      </div>
      <div class="form-group">
      <label for="">Roles :</label>
      <b id="rl"/>
      </div>
      </div>
      </div>
      </div>
    </div>

        {{-- Modal Form Edit and Delete Post --}}
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
      <label class="control-label col-sm-2"for="name">Name</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="n">
      </div>
      </div>

      <div class="form-group">
      <label class="control-label col-sm-2"for="email">Email</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="e"></textarea>
      </div>
      </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="roles">Roles</label>
      <div class="col-sm-10">
      <select class="form-control" name="roles" id="r">
        <option value="1">Manager</option>
        <option value="2">Super Admin</option>
      </select>
      </div>
      </div>

      <div class="form-group">
      <label class="control-label col-sm-2"for="password">Password</label>
      <div class="col-sm-10">
      <input type="password" class="form-control" id="ps"></textarea>
      </div>
      </div>
      </form>
      {{-- Form Delete Post --}}
      <div class="deleteContent">
      Are You sure want to delete <span class="title"></span>?
      <span class="hidden id"></span>
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
      </div>
      </div>
    </div>

</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    {{-- ajax Form Add Post--}}
      $(document).on('click','.create-modal', function() {
        $('#create').modal('show');
        $('.form-horizontal').show();
        $('.modal-title').text('Add Admin');
      });
      $("#add").click(function() {
        $.ajax({
          type: 'POST',
          url: 'addPost',
          data: {
            '_token': $('input[name=_token]').val(),
            'name': $('input[name=name]').val(),
            'email': $('input[name=email]').val(),
            'password': $('input[name=password]').val(),
            // 'roles': $('input[name=roles]').val()
          },
          success: function(data){
            if ((data.errors)) {
              $('.error').removeClass('hidden');
              $('.error').text(data.errors.name);
              $('.error').text(data.errors.email);
              $('.error').text(data.errors.password);
              // $('.error').text(data.errors.roles);
            } else {
              $('.error').remove();
              $('#table').append("<tr class='manage" + data.id + "'>"+
              "<td>" + data.id + "</td>"+
              "<td>" + data.name + "</td>"+
              "<td>" + data.email + "</td>"+
              "<td>" + data.roles_id + "</td>"+
              "<td>" + data.created_at + "</td>"+
              "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-name='" + data.name + "' data-email='" + data.email + "' data-roles_id='" + data.roles_id + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
              "</tr>");
            }
          },
        });
        $('#name').val('');
        $('#email').val('');
        $('#password').val('');
        $('#roles').val('');
      });

    // function Edit POST
    $(document).on('click', '.edit-modal', function() {
    $('#footer_action_button').text(" Update Post");
    $('#footer_action_button').addClass('glyphicon-check');
    $('#footer_action_button').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('edit');
    $('.modal-title').text('Post Edit');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    $('#fid').val($(this).data('id'));
    $('#n').val($(this).data('name'));
    $('#e').val($(this).data('email'));
    $('#r').val($(this).data('roles'));
    $('#ps').val($(this).data('password'));
    $('#myModal').modal('show');
    });
// nama field
    $('.modal-footer').on('click', '.edit', function() {
      $.ajax({
        type: 'POST',
        url: 'editPost',
        data: {
    '_token': $('input[name=_token]').val(),
    'id': $("#fid").val(),
    'name': $('#n').val(),
    'email': $('#e').val(),
    'roles_id': $('#r').val(),
    'password': $('#ps').val()
  },
    success: function(data) {
          $('.manage' + data.id).replaceWith(" "+
          "<tr class='manage" + data.id + "'>"+
          "<td>" + data.id + "</td>"+
          "<td>" + data.name + "</td>"+
          "<td>" + data.email + "</td>"+
          "<td>" + data.roles_id + "</td>"+
          "<td>" + data.created_at + "</td>"+
          "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-name='" + data.name + "' data-email='" + data.email + "' data-roles_id='" + data.roles_id + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='"  + data.id + "' data-name='" + data.name + "' data-email='" + data.email + "' data-roles_id='" + data.roles_id + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
          "</tr>");
        }
      });
    });


    // form Delete function
    $(document).on('click', '.delete-modal', function() {
    $('#footer_action_button').text(" Delete");
    $('#footer_action_button').removeClass('glyphicon-check');
    $('#footer_action_button').addClass('glyphicon-trash');
    $('.actionBtn').removeClass('btn-success');
    $('.actionBtn').addClass('btn-danger');
    $('.actionBtn').addClass('delete');
    $('.modal-title').text('Delete Post');
    $('.id').text($(this).data('id'));
    $('.deleteContent').show();
    $('.form-horizontal').hide();
    $('.name').html($(this).data('name'));
    $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.delete', function(){
      $.ajax({
        type: 'POST',
        url: 'deletePost',
        data: {
          '_token': $('input[name=_token]').val(),
          'id': $('.id').text()
        },
        success: function(data){
           $('.manage' + $('.id').text()).remove();
        }
      });
    });

      // Show function
      $(document).on('click', '.show-modal', function() {
      $('#show').modal('show');
      $('#i').text($(this).data('id'));
      $('#nm').text($(this).data('name'));
      $('#em').text($(this).data('email'));
      $('#rl').text($(this).data('roles'));
      $('.modal-title').text('Show Admin');
      });
    </script>
      </body>
    </html>


  </div>
</div>
@endsection
