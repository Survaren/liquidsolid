@extends('layout.default')

@section('main-content')
  <div class="page-bar">
    {!! Breadcrumbs::render('products_show', $product) !!}
    <div class="page-toolbar">
      <div class="btn-group pull-right">
        <a href="{{ route('app.product.edit', $product->sku) }}" class="btn blue btn-sm btn-outline">Edit <i class="fa fa-pencil"></i></a>
        {!! Form::open(['method'=>'delete','action'=>['ProductController@destroy',$product->sku], 'style' => 'display:inline; margin-left: 5px']) !!}<button type="submit" class="btn blue btn-sm btn-outline">Delete <i class="fa fa-trash"></i></button>{!! Form::close() !!}
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
              <span class="caption-subject font-blue-madison bold uppercase">{{ $product->sku }}</span>
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
                {!! Form::model($product, ['method' => '']) !!}
                <div class="form-group">
                  {!! Form::label('sku', 'SKU: ', ['class' => 'control-label']) !!}
                  {!! Form::text('sku', null, ['class' => 'form-control', 'readonly']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('description', 'Description: ', ['class' => 'control-label']) !!}
                  {!! Form::text('description', null, ['class' => 'form-control', 'readonly']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('deposit', 'Deposit: ', ['class' => 'control-label']) !!}
                  <div class="input-group">
                    <span class="input-group-addon">R</span>
                    {!! Form::text('deposit', null, ['class' => 'form-control', 'readonly']) !!}
                  </div>
                </div>
                <div class="form-group">
                  {!! Form::label('price', 'Price: ', ['class' => 'control-label']) !!}
                  <div class="input-group">
                    <span class="input-group-addon">R</span>
                    {!! Form::text('price', null, ['class' => 'form-control', 'readonly']) !!}
                  </div>
                </div>
                <div class="form-group">
                  {!! Form::label('rentable', 'Rent / Sell: ', ['class' => 'control-label']) !!}
                  {!! Form::select('rentable', [true => 'Rent', false => 'Sell'], null, ['class' => 'form-control', 'disabled']) !!}
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
