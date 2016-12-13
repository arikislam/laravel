@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Center Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/centerinfo/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="Eiin No" class="col-md-4 control-label">Eiin no</label>

                            <div class="col-md-6">
                                <input id="eiin_no" type="text" class="form-control" name="eiin_no" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inst_pass" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="inst_pass" type="password" class="form-control" name="inst_pass" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
