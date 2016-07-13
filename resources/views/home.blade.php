@extends('layouts.app')

@section('content')

<style type="text/css">
    .besar{
        text-align: center;
        font-size: 40px;
    }  

    .gambar {
    width: 900px;
    height: 450px;
    align-content: center;
   
}  
</style>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                <div  class="besar">Coming <strong>Soon!</strong></div>
                </div>

                <div class="panel-body">
                <!-- <div class="gambar"> -->
                <img class="gambar" src="{{ asset("img/nobeltechlogo2.png") }}"/>
                <!-- </div> -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
