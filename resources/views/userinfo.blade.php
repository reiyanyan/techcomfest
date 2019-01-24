@extends('layouts.app')

@section('title') User Info | DriverSchool @endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
          <a href="/user" class="btn btn-outline-dark" style="margin-bottom:20px;">Beranda</a>
            <div class="card">
                <div class="card-header">
                  <a class="btn btn-outline-danger" href="#" role="button">Block</a>
                </div>
                <div class="card-body">

                  {!! Form::open(['url' => '/user/update', 'method' => 'POST', 'files' => true]) !!}
                  {{ Form::token() }}
                    <input type="hidden" name="id" value="{{ $User->id }}">
                    <center>
                        <img class="img-thumbnail" src="/img/user/{{ $User->avatar }}" alt="">
                    </center>
                    <br>
                    <div class="form-group">
                      <input name="avatar" type="file" class="form-control-file" accept="image/*">
                    </div>
                    <div class="form-group">
                      <label>Nama</label>
                      <input name="name" type="text" class="form-control" value="{{ $User->name }}">
                    </div>
                    <div class="form-group">
                      <label>E-mail</label>
                      <input name="email" type="email" class="form-control" value="{{ $User->email }}">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input name="alamat" type="text" class="form-control" value="{{ $User->address }}">
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input name="phone" type="number" class="form-control" value="{{ $User->phone }}">
                    </div>
                    <div class="text-center">
                      <a class="btn btn-danger" href="/user" style="margin-top:20px;">Batal</a>
                      <button class="btn btn-success" type="submit" name="submit" style="margin-top:20px;">Simpan</button>
                    </div>
                  {!! Form::close() !!}
             </div>
         </div>
     </div>
 </div>
@endsection
