@extends('layout.default')

@section('main-content')
  <div class="page-bar">
    {!! Breadcrumbs::render('customers') !!}
    <div class="page-toolbar">
      <div class="btn-group pull-right">
        <a href="{{ route('app.customer.create') }}" class="btn blue btn-sm btn-outline">Create <i class="fa fa-plus"></i></a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 margin-top-20">
      <div class="profile-content">
        <div class="portlet light">
          <div class="portlet-title tabbable-line">
            <div class="caption caption-md">
              <span class="caption-subject font-blue-madison bold uppercase">Customers</span>
            </div>
            <div class="col-md-3 pull-right">
              {!! Form::open(['method' => 'get', 'action' => 'CustomerController@index']) !!}
              <div class="input-group">
                <input id="searchCustomer" class="form-control" type="text" name="customer_search" placeholder="search for customers..."
                @if(isset($search_term))
                  value="{{ $search_term }}"
                @endif
                />
                <span class="input-group-btn">
                  <button id="searchCustomer" class="btn btn-info" type="submit">Search <i class="fa fa-search"></i></button>
                </span>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
          <div class="portlet-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>ID Number</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($customers as $item)
                    <tr>
                      <td>{{ $item->id_number }}</td>
                      <td>{{ $item->last_name }}</td>
                      <td>{{ $item->first_name }}</td>
                      <td>{{ $item->email }}</td>
                      <td><a href="{{ route('app.customer.show', $item->id) }}"><button type="submit" class="btn btn-success btn-xs">View</button></a><a href="{{ route('app.customer.edit', $item->id) }}"><button type="submit" class="btn btn-primary btn-xs">Edit</button></a>{!! Form::open(['method'=>'delete','action'=>['CustomerController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            {!! $customers->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
