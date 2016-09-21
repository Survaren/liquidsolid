@extends('layout.default')

@section('main-content')
  <div class="page-bar">
    {!! Breadcrumbs::render('customers_edit', $customer) !!}
    <div class="page-toolbar">
      <div class="btn-group pull-right">
        {!! Form::open(['method' => 'delete', 'action' => ['CustomerController@destroy', $customer->id]]) !!}
        <button type="submit" class="btn blue btn-sm btn-outline">Delete <i class="fa fa-trash"></i></button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 margin-top-20">
      <div class="profile-content">
        <div class="portlet light">
          <div class="portlet-title tabbable-line">
            <div class="caption caption-md">
              <i class="icon-globe theme-font hide"></i>
              <span class="caption-subject font-blue-madison bold uppercase">Edit {{ $customer->first_name }} {{ $customer->last_name }}</span>
            </div>
          </div>
          <div class="portlet-body">
            {!! Form::model($customer, ['method' => 'PATCH', 'action' => ['CustomerController@update', $customer->id]]) !!}
            @include('app.customer._form', ['form' => 'update', 'compact' => false])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
