@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Kata Laluan</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Sahkan Kata Laluan</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Lokasi</label>

                            <div class="col-md-6">
                                <input id="lokasi" type="text" class="form-control" name="lokasi" value="{{ old('lokasi') }}" required>

                                @if ($errors->has('lokasi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lokasi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('peringkat') ? ' has-error' : '' }}">
                            <label for="peringkat" class="col-md-4 control-label">Peringkat</label>

                            <div class="col-md-6">
                                <input id="peringkat" type="text" class="form-control" name="peringkat" value="{{ old('peringkat') }}">

                                @if ($errors->has('peringkat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('peringkat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('subjek') ? ' has-error' : '' }}">
                            <label for="subjek" class="col-md-4 control-label">Subjek</label>

                            <div class="col-md-6">
                                <input id="subjek" type="text" class="form-control" name="subjek" value="{{ old('subjek') }}">

                                @if ($errors->has('subjek'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subjek') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telefon') ? ' has-error' : '' }}">
                            <label for="telefon" class="col-md-4 control-label">Telefon</label>

                            <div class="col-md-6">
                                <input id="telefon" type="text" class="form-control" name="telefon" value="{{ old('telefon') }}">

                                @if ($errors->has('telefon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gambar" class="col-md-4 control-label">Gambar</label>
                            {{-- <input type="file" name="image" /> --}}
                            <div class="col-md-6">
                                <input id="gambar" type="file"  name="gambar" value="{{ old('gambar') }}" style="padding-top: 7px">

                                @if ($errors->has('gambar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gambar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type="hidden" value="tutorPersendirian" name="kategori">

                        <input type="hidden" value="" name="alamat">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
