@if($form == 'create')
<div class="form-group">
  {!! Form::label('id_number', 'ID Number: ', ['class' => 'control-label']) !!}
  {!! Form::text('id_number', null, ['class' => 'form-control']) !!}
</div>
@endif
@if(!$compact)
<div class="form-group">
    {!! Form::label('title', 'Title: ', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
@endif
<div class="form-group">
    {!! Form::label('first_name', 'First Name: ', ['class' => 'control-label']) !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('last_name', 'Last Name: ', ['class' => 'control-label']) !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email: ', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone_number', 'Phone Number: ', ['class' => 'control-label']) !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('address', 'Street Address: ', ['class' => 'control-label']) !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
@if(!$compact)
<div class="form-group">
    {!! Form::label('address_2', 'Street Address 2: ', ['class' => 'control-label']) !!}
    {!! Form::text('address_2', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('city', 'City: ', ['class' => 'control-label']) !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('province', 'Province: ', ['class' => 'control-label']) !!}
    {!! Form::text('province', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('country', 'Country: ', ['class' => 'control-label']) !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>
@endif
@if($form == 'create')
  {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
@elseif($form == 'update')
  {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
@endif
@include('errors.list')
