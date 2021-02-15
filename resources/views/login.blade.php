@extends('master')

@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form>
                <div class="form-group">
                    <label for="inputEmail3">Email Address:</label>

                    <input type="email" class="form-control" id="inputEmail3">

                </div>
                <div class="form-group">
                    <label for="inputPassword3">Password :</label>

                    <input type="password" class="form-control" id="inputPassword3">

                </div>

                <button type="submit" class="btn btn-default">Login </button>
            </form>
        </div>
    </div>
</div>
@endsection