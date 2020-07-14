@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Compose a message</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="md-auto">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{session('error')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form action="/send-sms" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFullnames">Full Names</label>
                                <input type="text" class="form-control" id="exampleFullnames" aria-describedby="fullnamesHelp" placeholder="Enter your full names" name="full_names">
                            </div>
                            <div class="form-group">
                                <label for="examplePhonenumber">Phone number</label>
                                <input type="text" class="form-control" id="examplePhonenumber" aria-describedby="phoneHelp" placeholder="Enter your phone number prefix country code e.g +2508877" name="phone_number">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlMessage">Message</label>
                                <textarea class="form-control" id="exampleFormControlMessage" rows="3" name="message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
