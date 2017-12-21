@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{-- <table class="table table-bordered">
                        <tr>
                            <th>Senarai</th>
                            <th>Tuisyen</th>
                        </tr>
                    </table> --}}

                    Senarai Tuisyen
                </div>
                
                <div class="panel-body">
                    

                      <h2>Senarai Tuisyen</h2>         

                      <table class="table">
                        <thead>
                          <tr>

                            <th>Nama</th>
                            <th>Email</th>
                            <th>Peringkat</th>
                            <th>Kategori</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>


                            @foreach($data as $datum)
                            
                            {{-- <form action="{{ action('DumpController@tuisyenDetail', $datum->id) }}" method="POST"> --}}
                            
                        <tr>
                            

                            
                            <td>{{ $datum->name }}</td>
                          
                            <td>{{ $datum->email }}</td>
                          
                            <td>{{ $datum->peringkat }}</td>
                            @if($datum->kategori == 'tutorPersendirian')
                                <td>Tutor Persendirian</td>
                            @else
                                <td>Pusat Tuisyen</td>
                            @endif
                            
                            <td>
                                {{-- <button type="submit" class="btn btn-info">
                                    Details
                                </button> --}}

                                <a href="{{url('/home', $datum->id)}}" class="btn btn-info">Detail</a>
                            </td>
                          </tr>
                          
                          {{-- </form> --}}
                          
                          @endforeach
                        </tbody>
                      </table>



                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
