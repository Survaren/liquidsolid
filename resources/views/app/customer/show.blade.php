@extends('layout.default')

@section('main-content')
  <div class="page-bar">
    {!! Breadcrumbs::render('customers_show', $customer) !!}
    <div class="page-toolbar">
      <div class="btn-group pull-right">
        <a href="{{ route('app.customer.edit', $customer->id) }}" class="btn blue btn-sm btn-outline">Edit <i class="fa fa-pencil"></i></a>
        {!! Form::open(['method'=>'delete','action'=>['CustomerController@destroy',$customer->id], 'style' => 'display:inline; margin-left: 5px']) !!}<button type="submit" class="btn blue btn-sm btn-outline">Delete <i class="fa fa-trash"></i></button>{!! Form::close() !!}
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
              <span class="caption-subject font-blue-madison bold uppercase">{{ $customer->first_name }} {{ $customer->last_name }}</span>
            </div>
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#overview" data-toggle="tab">Overview</a>
              </li>
              <li>
                <a href="#account" data-toggle="tab">Account</a>
              </li>
            </ul>
          </div>
          <div class="portlet-body">
            <div class="tab-content">
              <div class="tab-pane active" id="overview">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil dolore nulla soluta aspernatur labore consectetur maiores reiciendis cupiditate, autem beatae harum cumque nesciunt eligendi alias iusto, deleniti necessitatibus ducimus inventore.</p>
              </div>
              <div class="tab-pane" id="account">
                {!! Form::model($customer, ['method' => '']) !!}
                <div class="form-group">
                  {!! Form::label('id_number', 'ID Number: ', ['class' => 'control-label']) !!}
                  {!! Form::text('id_number', null, ['class' => 'form-control', 'readonly']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('title', 'Title: ', ['class' => 'control-label']) !!}
                  {!! Form::text('title', null, ['class' => 'form-control', 'readonly']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('first_name', 'First Name: ', ['class' => 'control-label']) !!}
                  {!! Form::text('first_name', null, ['class' => 'form-control', 'readonly']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('last_name', 'Last Name: ', ['class' => 'control-label']) !!}
                  {!! Form::text('last_name', null, ['class' => 'form-control', 'readonly']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('email', 'Email: ', ['class' => 'control-label']) !!}
                  {!! Form::text('email', null, ['class' => 'form-control', 'readonly']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('phone_number', 'Phone Number: ', ['class' => 'control-label']) !!}
                  {!! Form::text('phone_number', null, ['class' => 'form-control', 'readonly']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('address', 'Street Address: ', ['class' => 'control-label']) !!}
                  {!! Form::text('address', null, ['class' => 'form-control', 'readonly']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('address_2', 'Street Address 2: ', ['class' => 'control-label']) !!}
                  {!! Form::text('address_2', null, ['class' => 'form-control', 'readonly']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('city', 'City: ', ['class' => 'control-label']) !!}
                  {!! Form::text('city', null, ['class' => 'form-control', 'readonly']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('province', 'Province: ', ['class' => 'control-label']) !!}
                  {!! Form::text('province', null, ['class' => 'form-control', 'readonly']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('country', 'Country: ', ['class' => 'control-label']) !!}
                  {!! Form::text('country', null, ['class' => 'form-control', 'readonly']) !!}
                </div>
                {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
