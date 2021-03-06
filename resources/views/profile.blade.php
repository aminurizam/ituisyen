@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    @foreach($profiles as $profile)

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nama</label>
                                    <p class="form-control" readonly>{{ $profile->name }}</p>
                                </div>

                                <div class="col-md-6">
                                    <label>Email</label>
                                    <p class="form-control" readonly>{{ $profile->email }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombor Telefon</label>
                                    <p class="form-control" readonly>{{ $profile->telefon }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="row">                            
                                <div class="col-md-6">
                                    <label for="faculty">Peringkat</label>
                                    <p class="form-control" readonly>{{ $profile->peringkat }}</p>
                                </div>


                                <div class="col-md-6">
                                    <label for="contact">Subjek</label>
                                    <p class="form-control" readonly>{{ $profile->subjek }}</p>
                                </div>
                            </div>

                        </div>
                        
                        @if($profile->kategori == 'pusatTuisyen')
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="address">Alamat</label>
                                        <p><textarea name="subjek" id="" cols="20" rows="5" class="form-control" readonly>{{ $profile->alamat }}</textarea></p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($profile->kategori == 'tutorPersendirian')
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="address">Lokasi</label>
                                        <p><textarea name="lokasi" id="" cols="20" rows="5" class="form-control" readonly>{{ $profile->lokasi }}</textarea></p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Gambar</label>
                                    @if($profile->gambar == null)
                                    <label for="gambar">Tiada gambar. Sila muat naik gambar</label>
                                    @else
                                    <img style="height: 300px; width: 350px" src="{{ $profile->gambar }}" alt="">
                                    @endif
                                    {{-- <p class="form-control" readonly>{{ $profile->gambar }}</p> --}}
                                    
                                </div>
                            </div>
                        </div>

                        <div class="pull-right">
                            <a href="{{ action('ProfileController@edit', $profile->id) }}">
                                <button type="submit" class="btn btn-primary">Edit<i class="icon-arrow-right14 position-right"></i></button>
                            </a>
                        </div>


                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
