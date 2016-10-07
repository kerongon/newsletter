@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $title or null }}</div>

                <div class="panel-body">
                    @if(session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form role="form" action="{{ route('newsletter.subscribe') }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('post') }}
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : null }}">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            <span class="help-block">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : null }}">
                            <label for="name" class="control-label">Email Address</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" class="form-control">
                            <span class="help-block">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Subscribe Now!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection