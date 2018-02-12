@extends('layouts.app')

@section('content')
<body>
    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
    <div class="container">
        <div class="row pledge"> 
            <div class="pledge h1">
                <h1>Pledge Transaction History</h1>
            </div>
        </div>
        <div class="create-btn" id="create-btn">
            <a href="#"><button class="btn btn-default btn-block" data-toggle="modal" data-target="#interstitialModal" type="button">Create</button> </a>
        </div>
        <div class="row-content pledge-row">
            <div class="c-white">                  
                <div class="row c-white-content">
                    <div class="c-text-content" style="margin-top: 0; padding-top: 0;" >
                        <div class="row table">
                            <div class="table-responsive">
                                <!-- <a class="navbar-right" href="{{ URL::to('pledgeform/xls') }}"><span> <i class="fa fa-download"></i></span> XLS </a>
                                <a class="navbar-right" href="{{ URL::to('pledgeform/xlsx') }}"><span> <i class="fa fa-download"></i></span> XLSX</a> -->
                                <table id="pledge_table" class="table table-stripped table-hover" cellspacing="0" width="100%" >
                                    <thead>
                                        <tr>
                                            <th>Transaction Number</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Contact Number</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align: left;">
                                        @foreach($pledge as $values)
                                        <tr>
                                            <td class="td-list">{{$values-> id}}</td>
                                            <td class="td-list">{{$values-> date}} </td>
                                            <td class="td-list">{{$values-> name}}</td>
                                            <td class="td-list">{{$values-> contactnum}}</td>
                                            <td><a href="{{ route('pledge_table')}}"><Button class="btn btn-default">View Details</Button></a></td>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>                                     
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="interstitialModal" role="dialog" aria-labelledby="interstitialLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <button style="margin: 20px;" type="button" class="close" data-dismiss="modal"><span aria-hidden="true" class="fa fa-times"></span><span class="sr-only text-muted">Close</span></button>  
                        </div>
                        <div class="row">
                            <div class="content h1">
                                <h1> What do you want to do?</h1>
                            </div>
                            <div class="modal-img">
                                <span class="fa fa-paper-plane-o fa-5x" style="color: #41b0d6;"></span>
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
                                    <a tabindex="0" href="{{ route('pledgeform') }}">
                                        <span class="fa fa-plus-circle fa-3x"></span>
                                        <div>Create a pledge</div>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a tabindex="0" href="">
                                        <span class="fa fa-upload fa-3x"></span>
                                        <div>Redeem an Article</div>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
</body>
<script src=" {{ asset('js/jquery.js') }}"></script>

@endsection