@extends('layout.default')

@section('main-content')
  <div class="page-bar">
    {!! Breadcrumbs::render('products') !!}
    <div class="page-toolbar">
      <div class="btn-group pull-right">
        <a href="{{ route('app.product.create') }}" class="btn blue btn-sm btn-outline">Create <i class="fa fa-plus"></i></a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 margin-top-20">
      <div class="profile-content">
        <div class="portlet light">
          <div class="portlet-title tabbable-line">
            <div class="caption caption-md">
              <span class="caption-subject font-blue-madison bold uppercase">Products</span>
            </div>
            <div class="col-md-3 pull-right">
              {!! Form::open(['method' => 'get', 'action' => 'ProductController@index']) !!}
              <div class="input-group">
                <input sku="searchProduct" class="form-control" type="text" name="product_search" placeholder="search for products..."
                @if(isset($search_term))
                  value="{{ $search_term }}"
                @endif
                />
                <span class="input-group-btn">
                  <button sku="searchProduct" class="btn btn-info" type="submit">Search <i class="fa fa-search"></i></button>
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
                    <th>SKU</th>
                    <th>Description</th>
                    <th style="text-align: right">Deposit</th>
                    <th style="text-align: right">Price</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $item)
                    <tr>
                      <td>{{ $item->sku }}</td>
                      <td>{{ $item->description }}</td>
                      <td style="text-align: right">R {{ number_format($item->deposit, 2) }}</td>
                      <td style="text-align: right">R {{ number_format($item->price, 2) }}</td>
                      <td><a href="{{ route('app.product.show', $item->sku) }}"><button type="submit" class="btn btn-success btn-xs">View</button></a><a href="{{ route('app.product.edit', $item->sku) }}"><button type="submit" class="btn btn-primary btn-xs">Edit</button></a>{!! Form::open(['method'=>'delete','action'=>['ProductController@destroy',$item->sku], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            {!! $products->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
