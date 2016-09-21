@extends('layout.default')

@section('main-content')
<div class="page-bar">
	{!! Breadcrumbs::render('customers_create') !!}
</div>

<div class="row">
	<div class="col-md-12 margin-top-20">
		<div class="profile-content">
			<div class="portlet light">
				<div class="portlet-title tabbable-line">
					<div class="caption caption-md">
						<i class="icon-globe theme-font hide"></i>
						<span class="caption-subject font-blue-madison bold uppercase">Create New Customer</span>
					</div>
				</div>
				<div class="portlet-body">
					{!! Form::open(['route' => 'app.customer.store']) !!}
						@include('app.customer._form', ['submitButton' => 'Create', 'compact' => false])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection