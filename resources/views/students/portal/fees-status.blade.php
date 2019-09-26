@extends('layouts.student.master')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-paypal"></i> Fees status</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="{{ url('home') }}">Home</a></li>
			<li><i class="fa fa-paypal"></i> Fees status</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2><i class="fa fa-paypal"></i><strong>Fees status</strong></h2>
				<div class="panel-actions">
					<a href="#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
					<a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
				</div>
			</div>

			<div class="panel-body " style="height:220px; padding: 0px;">
				<div class="col-md-12">
					Fees status not found currently
				</div>
			</div>


		</div>
	</div>
</div>
@endsection