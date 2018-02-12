@extends('layouts.app')

@section('content')
<header>
        <link rel="stylesheet" href=" {{ asset('css/app.css')}}">
        <link rel="stylesheet" href=" {{ asset('css/MyCss.css')}}">
    </header>
<body>
    
        <nav>
        </nav>
        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <h1>Dashboard</h1>

          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <div class="text-muted">Something else</div>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </section>

          <h2>Summary Reports</h2>
          <div class="table-responsive">
            <table id="pledge_table" class="table table-stripped table-hover" cellspacing="0" width="100%" >
                <thead>
                    <tr>
                        <th>Current Gold Rate</th>
                        <th>P.T. No.</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Article</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Birthdate</th>
                        <th>Appraiser</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pledge as $values)
                    <tr>
                       <td class="col-sm-2">{{$values-> current_gr}} </td>
                       <td class="col-sm-1">{{$values-> id}}</td>
                       <td class="col-sm-1">{{$values-> date}}</td>
                       <td class="col-sm-1">{{$values-> amount}}</td>
                       <td class="col-sm-1">{{$values-> article}}</td>
                       <td class="col-sm-1">{{$values-> name}}</td>
                       <td class="col-sm-1">{{$values-> address}} </td>
                       <td class="col-sm-2">{{$values-> contactnum}}</td>
                       <td class="col-sm-1">{{$values-> birthdate}}</td>
                       <td class="col-sm-1">{{$values-> appraiser}}</td>
                    </tr>
                    @endforeach	
                </tbody>
            </table>
          </div>
        </main>
    
    
    <!--<div class="container" class="content">
        <div class="row">
             <div class="col-md-12 col-md-offset-10" id="create-btn2" style="padding-bottom: 0;">
                <a href="{{ route('pledgeform')}}"><button class="shortcut-button btn btn-primary btn-default" name="shortcut-button">Create a Pledge</button></a>
            </div> 
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome to your Dashboard <strong>{{ Auth::user()->name }}!</strong> </div>
                       <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-danger">
                                    {{ session('status') }}
                                </div>
                            @endif
                            You are logged in
                        </div>
                    </div>
                </div>
            </div>
    </div>
        </div>-->
    
</body>
@endsection