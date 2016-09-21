@if($form == 'create')
  <div class="form-group">
    {!! Form::label('sku', 'SKU: ', ['class' => 'control-label']) !!}
    {!! Form::text('sku', null, ['class' => 'form-control']) !!}
  </div>
@endif
<div class="form-group">
  {!! Form::label('description', 'Description: ', ['class' => 'control-label']) !!}
  {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('deposit', 'Deposit: ', ['class' => 'control-label']) !!}
  <div class="input-group">
    <span class="input-group-addon">R</span>
    {!! Form::text('deposit', null, ['class' => 'form-control']) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('price', 'Price: ', ['class' => 'control-label']) !!}
  <div class="input-group">
    <span class="input-group-addon">R</span>
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('rentable', 'Rent / Sell: ', ['class' => 'control-label']) !!}
  {!! Form::select('rentable', [true => 'Rent', false => 'Sell'], null, ['class' => 'form-control']) !!}
</div>
@if($form == 'create')
  {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
@elseif($form == 'update')
  {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
@endif
@include('errors.list')
