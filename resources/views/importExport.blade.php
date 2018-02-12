@extends('layouts.app')

@section('content')
<html lang="en">
    <head>
        <title>Import - Export Files</title>
    </head>
    <body>
        <div class="container">
            <a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
            <a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xls</button></a>
            <a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download CSV xls</button></a>
            <form style="border:1px solid black; margin-top: 15px; padding:10px;" action="{{ URL::to('importExcel') }}">
            <button class="btn btn-primary">Import Files</button>
            </form>
        </div>
    </body>
</html>
@endsection
