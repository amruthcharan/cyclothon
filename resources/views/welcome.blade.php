@extends('layouts.new')
@section('title', 'FIT INDIA CYCLOTHON 20-21')
@section('content')
    <div class="contact-form">
        <div class="contact-image">
            <img src="{{ asset('images/logo.jpg') }}" />
            <img class="float-right" src="{{ asset('images/fit.webp') }}" />
        </div>
        @if($success)
            <form>
                <div class="row">
                    <div class="offset-md-2 offset-sm-0 col-md-8 col-sm-12">
                        <h3>
                            Your registration is successful!
                            <br>
                            and your registered ID is <span class="text-danger">{{$id}}</span>
                        </h3>
                        <h6 class="mt-5 text-center">
                            Please pay Rs.{{$amount}}/- on PhonePe or GooglePay for below details:
                        </h6>
                        <div class="ml-5 mb-2">
                            Phone Number:  +919963887998 <br>
                            Name : Sudhakar
                        </div>
                        <h6 class="text-center text-danger">Please add your registration number ({{$id}}) as comment while paying.</h6>
                    </div>
                </div>
            </form>
        @else
            @include('partials.show-form')
        @endif

    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('input[name="cycle_type"]').change(function (v) {
                if (v.target.value == "own cycle") {
                    $('input[name="price"]').val(200);
                    $('#price').text(200);
                } else {
                    $('input[name="price"]').val(450);
                    $('#price').text(450);
                }
            })
        });
    </script>
@endsection
