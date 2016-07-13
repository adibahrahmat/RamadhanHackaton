@extends('layouts.app')

@section('content')

<style type="text/css">
    .tulisan{
        text-align: center;
        font-size: 40px:;
    }

    .depan{
         width: 500px;
         height: 250px;
        align-content: center;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">SELAMAT HARI RAYA
                </div>

                <div class="panel-body">
                    <p><center>
                        <strong><h1>Salam Lebaran</h1></strong>
                        <br>
                        <br>
                        <div class="tulisan">
                         Terakhir...<br>
                         menjadi dua rasa nubari,<br>
                         yang meraikan berpasangan,<br>
                         antara kegembiraan dan kesedihan,<br>
                         keduanya menjadi kesatuan rencah rasa berpasangan bersama.
                        <br>
                        <br>
                        Kullu 'am wa antum bil khair
                        <strong>Eid Mubarak 2016</strong>
                        <br>
                        <br>
                        <br>
                        <!-- <img class="depan" src="{{ asset("nobeltechlogo2.png") }}"/> -->
                        </div>
                        </center></div>



                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
