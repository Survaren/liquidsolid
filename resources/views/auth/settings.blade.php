@extends('layout.default')

@section('main-content')
<div class="page-bar">
  {!! Breadcrumbs::render('user_settings') !!}
</div>

<div class="row">
  <div class="col-md-12 margin-top-20">
    <div class="profile-content">
      <div class="portlet light">
        <div class="portlet-title tabbable-line">
          <div class="caption caption-md">
            <i class="icon-globe theme-font hide"></i>
            <span class="caption-subject font-blue-madison bold uppercase">Account Settings</span>
          </div>
          <ul class="nav nav-tabs" role="tablist" id="settings-tab">
            <li role="presentation" class="active">
              <a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">Personal Info</a>
            </li>
            <li role="presentation">
              <a href="#password" aria-controls="password" role="tab" data-toggle="tab">Change Password</a>
            </li>
          </ul>
        </div>
        <div class="portlet-body">
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="personal">
              {!! Form::open(['route' => 'settings']) !!}
                <div class="form-group">
                  {!! Form::label('first_name', 'First Name', ['class' => 'control-label']) !!}
                  <input class="form-control" type="text" name="first_name" value="{{ Input::old('first_name') ? Input::old('first_name') : Sentinel::getUser()->first_name }}">
                </div>
                <div class="form-group">
                  {!! Form::label('last_name', 'Last Name', ['class' => 'control-label']) !!}
                  <input class="form-control" type="text" name="last_name" value="{{ Input::old('last_name') ? Input::old('last_name') : Sentinel::getUser()->last_name }}">
                </div>
                <div class="form-group">
                  {!! Form::label('email', 'Email Address', ['class' => 'control-label']) !!}
                  <input class="form-control" type="email" name="email" value="{{ Input::old('email') ? Input::old('email') : Sentinel::getUser()->email }}">
                </div>
                <div>
                  <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Save Changes</button>
                  @include('errors.list')
                </div>
              {!! Form::close() !!}
            </div>
            <div role="tabpanel" class="tab-pane" id="password">
              {!! Form::open(['route' => 'settings']) !!}
                <div class="form-group">
                  {!! Form::label('current_password', 'Current Password', ['class' => 'control-label']) !!}
                  <input class="form-control" type="password" name="current_password">
                </div>
                <div class="form-group">
                  {!! Form::label('new_password', 'New Password', ['class' => 'control-label']) !!}
                  <input class="form-control" type="password" name="new_password">
                </div>
                <div class="form-group">
                  {!! Form::label('confirm_password', 'Confirm Password', ['class' => 'control-label']) !!}
                  <input class="form-control" type="password" name="confirm_password">
                </div>
                <div>
                  <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Save Changes</button>
                  @include('errors.list')
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
