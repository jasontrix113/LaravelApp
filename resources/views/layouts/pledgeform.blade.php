@extends('layouts.app')

@section('content')
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>
  <script src="https://code.jquery.com/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
</head>
<body style="padding: 0; margin: 0">
   <div class="container-fluid">
        <div class="row">           
            <form method="post" action=" {{ route('pledge_table') }}">
                {{ csrf_field() }}
                <div class="panel panel-default col-sm-8 col-sm-offset-2" id="pledge-form">
                    <div class="col-sm-6">
                        <div class="panel-heading" style="padding: 10px 0; margin-top: 40px;">
                            <legend>Transaction Details</legend>
                        </div>
                        <div class="panel-body" style="padding: 0;"> 
                            <div class="form-group">
                                <label for="current_gr" class="control-label" id="label-pledge" autocomplete="off">Current Gold Rate*</label>
                                <input type="text" readonly="true" class="form-control" name="current_gr" value="2000">
                            </div>
                            <div class="form-group">
                                <label for="date" class="control-label" id="label-pledge">Date*</label>
                                <div class="input-group form-group" ng-class="{ 'has-error' : form.date.$invalid && !form.date.$pristine}">    
                                    <div class="input-append date">
                                        <input data-provide="datepicker"  class="form-control" name="date" data-date-format="yyyy-mm-dd" ng-model="ctl.item.dateto" placeholder="yyyy-mm-dd" autocomplete="off">
                                    </div>
                                        <span class="input-group-addon"  style="border-left:none;"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label for="amount" class="control-label" id="label-pledge">Amount*</label>
                                <input type="text" class="form-control"  name="amount" required autocomplete="off" placeholder="Php">
                            </div> 

                            <div class="form-group">
                                <label for="article" class="control-label" id="label-pledge">Article*</label>
                                <textarea type="textarea" class="form-control"  style="height: 80px;" name="article" autocomplete="off" placeholder="e.g wrist watch, ring, mobilephones, etc."></textarea> 
                            </div>
                        </div><!-- panel-body -->       
                    </div>

                    <div class="col-sm-6">
                        <div class="panel-heading" style="padding: 10px 0; margin-top: 40px;">
                            <legend>Personal Details</legend>
                        </div> 
                        <div class="panel-body" style="padding: 0;">
                            <div class="form-group">
                                <label for="name" class="control-label" id="label-pledge">Name*</label>
                                <input type="text"  class="form-control"  name="name" autocomplete="off" placeholder="lastname, firstname, middle initial "> 
                            </div>
                            <div class="form-group">
                                <label for="address" class="control-label" id="label-pledge">Address*</label>
                                <input type="text"  class="form-control"  name="address" autocomplete="off"> 
                            </div>
                            <div class="form-group">
                                <label for="contactnum" class="control-label" id="label-pledge">Contact Number*</label>
                                <input type="text"  class="form-control"  name="contactnum" autocomplete="off" placeholder="+63"> 
                            </div>
                            <div class="form-group">
                                <label for="birthdate" class="control-label" id="label-pledge">Birthdate*</label>
                                <div class="input-group form-group" ng-class="{ 'has-error' : form.date.$invalid && !form.date.$pristine }">
                                    <div class="input-append date">
                                        <input data-provide="datepicker" class="form-control"  name="birthdate" data-date-format="yyyy-mm-dd" ng-model="ctl.item.dateto" placeholder="yyyy-mm-dd" autocomplete="off">
                                    </div>
                                    <span class="input-group-addon"  style="border-left:none;"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="appraiser" class="control-label" id="label-pledge">Appraised by*</label>
                                <input type="text"  class="form-control" readonly="true"   name="appraiser" autocomplete="off" value="{{ Auth::user()->name }}"> 
                            </div> 
                            <div class="form-group" id="submit-btn" style="float: right;">
                                <input type="submit" class="btn btn-default btn-success" value="Submit">
                            </div>  
                        </div><!-- panel-body  -->    
                    </div>   
                </div><!--  panel-default --> 
            </form>     
        </div>
      </div>
   </div>
</body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function(){
            var date_input=$('input[name="date"]'); //our date input has the name "date"
            date_input.datepicker({
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>
@endsection