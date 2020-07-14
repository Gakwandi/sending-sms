@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="md-auto">
                        <form action="/send-sms" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="examplePhonenumber">Phone number</label>
                                <input type="text" class="form-control" id="examplePhonenumber" aria-describedby="phoneHelp" placeholder="Enter your phone number" name="phone_number">
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
