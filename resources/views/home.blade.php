@extends('layouts.admin')
@section('title', 'FIT INDIA CYCLOTHON 20-21')
@section('content')
    <div>
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Total Registrations</h3>
                        <h1 class="card-text text-center">{{$total}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Cycles Needed</h3>
                        <h1 class="card-text text-center">{{$cycles}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Total Paid</h3>
                        <h1 class="card-text text-center">{{$paid}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Total Amount Collected</h3>
                        <h1 class="card-text text-center">{{$amount}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Small T-shirts</h3>
                        <h1 class="card-text text-center">{{$small}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Medium T-shirts</h3>
                        <h1 class="card-text text-center">{{$medium}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Large T-shirts</h3>
                        <h1 class="card-text text-center">{{$large}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">XL T-shirts</h3>
                        <h1 class="card-text text-center">{{$xl}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Total Unpaid</h3>
                        <h1 class="card-text text-center">{{$total - $paid}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection
