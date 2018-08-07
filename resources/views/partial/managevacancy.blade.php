@extends('manager.manager')
@section('manage_vacancy')

      <h3 class="box-title">Manage Vacancy</h3>
        <div class="table-responsive">
          <table class="table" id="table">
      <thead>
      <tr>
      <th>No</th>
      <th>Logo</th>
      <th>Company title</th>
      <th>Job title</th>
      <th>Job description</th>
      <th>Company Overview</th>
      <th>Location</th>
      <th>Company info</th>
      <th>created_at</th>
      <th>updated_at</th>
      <th>Status</th>
      <th class="text-center" width="150px">
      <a href="/create" class="create-modal btn btn-success btn-sm">
      <i class="glyphicon glyphicon-plus"></i>
      </a>
      </th>
      </tr>
      </thead>
      {{ csrf_field() }}
      <?php  $no=1; ?>
      @foreach ($manages as $value)
      <tr class="manage{{$value->id}}">
      <td>{{ $no++ }}</td>
      <td>{{ $value->logo }}</td>
      <td>{{ $value->company_title }}</td>
      <td>{{ $value->job_title }}</td>
      <td>{!!$value->job_description!!}</td>
      <td>{{ $value->company_overview }}</td>
      <td>{{ $value->location }}</td>
      <td>{{ $value->company_info }}</td>
      <td>{{ $value->created_at }}</td>
      <td>{{ $value->updated_at }}</td>
      <td> @if ($value->status==1) Aktif
                 @else tidak aktif
                 @endif
      </td>
      <td>
      <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-name="{{$value->name}}" data-email="{{$value->email}}" data-roles="{{$value->roles_id}}">
      <i class="fa fa-eye"></i>
      </a>
      <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-name="{{$value->name}}" data-email="{{$value->email}}" data-roles="{{$value->roles_id}}">
      <i class="glyphicon glyphicon-pencil"></i>
      </a>
      <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-name="{{$value->name}}" data-email="{{$value->email}}" data-roles="{{$value->roles_id}}">
      <i class="glyphicon glyphicon-trash"></i>
      </a>
      </td>
      </tr>
      @endforeach
      </table>
      </div>
      @endsection
