@extends('layouts.app')

@section('content')
<html>
	<head>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('css/MyCss.css') }}">
	</head>
	<body>
        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
		<div class="container-fluid" style="padding: 15px;">
			<div class="row table">
				<div class="table-responsive col-sm-12" >
					<h2>Pledge Report</h2>
					<!-- <a class="navbar-right" href="{{ URL::to('pledgeform/xls') }}"><span> <i class="fa fa-download"></i></span> XLS </a>
		            <a class="navbar-right" href="{{ URL::to('pledgeform/xlsx') }}"><span> <i class="fa fa-download"></i></span> XLSX</a> -->
		            
		            <a class="navbar-right" style="margin-right: 15px;" href="{{ URL::to('pledgeform/csv') }}"><span> <i class="fa fa-download"></i></span> Export as CSV</a>

					<table id="pledge_table" class="table table-stripped table-hover" cellspacing="0" width="100%" >
						<thead>
							<tr>
								<th>Current Gold Rate</th>
								<th>P.T. Number</th>
								<th>Date</th>
								<th>Amount</th>
								<th>Article</th>
								<th>Name</th>
								<th>Address</th>
								<th>Contact Number</th>
								<th>Birthdate</th>
								<th>Appraiser</th>
								<th>Action</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($pledge as $values)
							<tr>
                               <td class="col-sm-1">{{$values-> current_gr}} </td>
                               <td class="col-sm-1">{{$values-> id}}</td>
                               <td class="col-sm-1">{{$values-> date}}</td>
                               <td class="col-sm-1">{{$values-> amount}}</td>
                               <td class="col-sm-1">{{$values-> article}}</td>
                               <td class="col-sm-1">{{$values-> name}}</td>
                               <td class="col-sm-1">{{$values-> address}} </td>
                               <td class="col-sm-1">{{$values-> contactnum}}</td>
                               <td class="col-sm-1">{{$values-> birthdate}}</td>
                               <td class="col-sm-1">{{$values-> appraiser}}</td>
                               <td class="col-sm-1">
                               <form action="pledge-edit-form" method="post" name="{{$values-> id}}">
                               		<input type="hidden" name="cgr" value="{{$values-> current_gr}}">
                               		<input type="hidden" name="ptn" value="{{$values-> id}}">
                               		<input type="hidden" name="date" value="{{$values-> date}}">
                               		<input type="hidden" name="amt" value="{{$values-> amount}}">
                               		<input type="hidden" name="art" value="{{$values-> article}}">
                               		<input type="hidden" name="nme" value="{{$values-> name}}">
                               		<input type="hidden" name="add" value="{{$values-> address}}">
                               		<input type="hidden" name="ctn" value="{{$values-> contactnum}}">
                               		<input type="hidden" name="btd" value="{{$values-> birthdate}}">
                               		<input type="hidden" name="apr" value="{{$values-> appraiser}}">
                            		<a href="{{ URL::to('pledge-edit-form') }}"><button type="submit" class="btn btn-success">Edit</button></a>
                               </form>
                           	   </td>
                           	   <td class="col-sm-1">
                               	<a><button class="btn btn-danger" data-toggle="modal" data-target="#interstitialModal" type="button">Delete</button></a>
                               	<form method="post" action="{{ route('pledge_table') }}" name="{{ $values-> id}}">
                               	<div class="modal fade" id="interstitialModal" role="dialog" aria-labelledby="interstitialLabel" aria-hidden="true">
						            <div class="modal-dialog">
						                <div class="modal-content">
						                    <div class="modal-body">
							                    <div class="row">
						                            <div class="content h1">
						                                <h1> Are you sure you want to delete?</h1>
						                            </div>
						                            <div class="modal-content-text" style="max-width: 600px;">
						                                <p>
						                                 Records contains information necessary to carry out 
						                                    <br> the operations of an organization. </p>
						                                <br>
						                            </div> 
						                        </div>
						                        <div class="row">
						                            <div class="row modal-footer">
						                                <div class="col-sm-6">
						                                    <a href=""><button type="submit" class="btn btn-danger"> Confirm Deletion</button></a>
						                                </div>
						                                <div class="col-sm-6">
						                                    <a href=""><button class="btn btn-default" data-dismiss="modal">Cancel</button></a>
						                                </div> 
						                            </div>
						                        </div>
						                    </div>
						                </div>
						            </div>
								</div>
								</form>
                               </td>
							</tr>
							@endforeach	
						</tbody>
					</table>
				</div>
			</div>	
		</div>
        </main>
	</body>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#pledge_table').dataTable();
		} );
	</script>
</html>

@endsection
