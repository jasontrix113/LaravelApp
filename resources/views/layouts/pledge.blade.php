@extends('layouts.app')

@section('content')
<body>
    <div class="main-content container">
        <div class="row pledge"> 
            <div class="pledge h1">
                <h1>Pledge</h1>
            </div>
        </div>
        <div class="create-btn" id="create-btn">
                        <a href="#"><button class="btn btn-default btn-block" data-toggle="modal" data-target="#interstitialModal" type="button">Create a Pledge</button> </a>
                    </div>
        <div class="row-content pledge-row">
            <div class="c-white">                  
                <div class="row c-white-content">
                    <div class="c-image-content">
                        <span><i class="fa fa-file fa-5x" style="color: rgba(42, 106, 141, 0.66);"></i></span>
                    </div>
                    <div class="c-text-content">
                        <h2> You don't have any pledge yet. </h2>
                        <br> <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 
                        <br>
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        <br>
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 
                        </p><br>
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
                                    <a tabindex="0" href="{{route('redemption')}}">
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
    <script src=" {{ asset('js/jquery.js') }}"></script>
</body>
@endsection