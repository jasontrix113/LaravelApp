@extends('layouts.app')

@section('content')
<body>
    <div class="main-content container">
        <div class="row pledge"> 
            <div class="pledge h1">
                <h1>Pledge Reports</h1>
            </div>
        </div>
        <div class="row-content pledge-row">
            <div class="c-white">                  
                <div class="row c-white-content">
                    <div class="c-image-content">
                        <span><i class="fa fa-file fa-5x" style="color: rgba(42, 106, 141, 0.66);"></i></span>
                    </div>
                    <div class="c-text-content">
                        <h2> You don't have any pledge reports yet. </h2>
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
        <!-- <div class="row pledge"> 
            <div class="pledge h1">
                <h1>Redemption Reports</h1>
            </div>
        </div>
        <div class="row-content pledge-row">
            <div class="c-white">                  
                <div class="row c-white-content">
                    <div class="c-image-content">
                        <span><i class="fa fa-file fa-5x" style="color: rgba(42, 106, 141, 0.66);"></i></span>
                    </div>
                    <div class="c-text-content">
                        <h2> You don't have any redemption reports yet. </h2>
                        <br> <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 
                        <br>
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        <br>
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 
                        </p><br>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <script src=" {{ asset('js/jquery.js') }}"></script>
</body>
@endsection