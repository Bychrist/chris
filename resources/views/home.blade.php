@extends('layouts.master')

@section('content')

<!-- Number Counter -->
<section class="counter-bg" style="">
    <div class="sectionP40 blue-bg gradient50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12" style="height:50px;">
                      
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container" style="margin-top:200px;margin-bottom:200px;  ">
    <div class="row justify-content-center">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
