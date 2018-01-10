@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Profile info -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h3>Profile information</h3>
            </div>

            <div class="panel-body">
                @foreach($profiles as $profile)
                <form action="{{ action('ProfileController@update', $profile->id) }}" method="POST" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <tbody>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nama</label>
                                    <input type="text" name="name" value="{{ $profile->name }}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{ $profile->email }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombor Telefon</label>
                                    <input type="text" name="telefon" value="{{ $profile->telefon }}" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="row">                            
                                <div class="col-md-6">
                                    <label for="faculty">Peringkat</label>
                                    <input type="text" name="peringkat" value="{{ $profile->peringkat }}" class="form-control">
                                </div>


                                <div class="col-md-6">
                                    <label for="contact">Subjek</label>
                                    <input type="text" name="subjek" value="{{ $profile->subjek }}" class="form-control">
                                </div>
                            </div>

                        </div>
                        
                        @if($profile->kategori == 'pusatTuisyen')
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="address">Alamat</label>
                                        <p><textarea name="alamat" id="" cols="20" rows="5" class="form-control">{{ $profile->alamat }}</textarea></p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($profile->kategori == 'tutorPersendirian')
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="address">Lokasi</label>
                                        <p><textarea name="lokasi" id="" cols="20" rows="5" class="form-control">{{ $profile->lokasi }}</textarea></p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Gambar</label>
                                    {{-- <p class="form-control">{{ $profile->gambar }}</p> --}}
                                    <input type="file" name="gambar">
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Save<i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /profile info -->
    </div>
@endsection