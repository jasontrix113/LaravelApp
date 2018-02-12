@extends('layouts.app')

@section('content')
<body>
    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
    <div class="main-content container">
        <div class="row pledge"> 
            <div class="pledge h1">
                <h1>Redemption</h1>
            </div>
        </div>
        <div class="create-btn" id="create-btn">
                        <a href="#"><button class="btn btn-default btn-block" data-toggle="modal" data-target="#interstitialModal" type="button">Redeem</button> </a>
                    </div>
        <div class="row-content pledge-row">
            <div class="c-white">                  
                <div class="row c-white-content">
                    <div class="c-image-content">
                        <img id="image" src="">
                        <span><i class="fa fa-file fa-5x" style="color: rgba(42, 106, 141, 0.66);"></i></span>
                    </div>
                    <div class="c-text-content">
                        <h2> You don't have any redemption yet. </h2>
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
    </div>
    </main>
</body>
@endsection