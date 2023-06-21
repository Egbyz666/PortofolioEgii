@extends('template')
@section('konten')
@if (count($errors)>0)
    @foreach ($errors->all() as $error )
        {{ $error }}
    @endforeach
@endif
            <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class=" mb-3">
                  <input type="text" class="form-control" name="nama" value="{{ $profile -> nama }}" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" name="status" value="{{ $profile -> status }}"  placeholder="Status">
                  
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" name="jk" value="{{ $profile -> jenisKelamin }}"  placeholder="Jenis Kelamin">
                  
                </div>
                {{-- <select class="form-select mb-3" aria-label=".form-select-sm example">
                    <option selected=""> Jenis Kelamin</option>
                    <option value="1">Laki-Laki</option>
                    <option value="2">Perempuan</option>
                    <option value="3">Secret</option>
                  </select> --}}
                   
                 
                <div class=" mb-3">
                  <input type="text" class="form-control"  name="alamat" value="{{ $profile -> alamat }}" placeholder="Alamat">
                  
                </div>
                <div class=" mb-3">
                    <input type="text" class="form-control" name="tempatLahir" value="{{ $profile -> tempatLahir }}" placeholder="Tempat Lahir">
                    
                  </div>
                  <div class=" mb-3">
                    <input type="date" class="form-control"  name="tanggalLahir" value="{{ $profile -> tanggalLahir }}" placeholder="Tanggal Lahir">
                    
                  </div>
                  <div class=" mb-3">
                    <input type="text" class="form-control"  name="fb" value="{{ $profile -> fbAccount }}" placeholder="www.facebook.com/mrs.reiya">
                    
                  </div>
                  <div class=" mb-3">
                    <input type="text" class="form-control"  name="ig" value="{{ $profile -> igAccount }}" placeholder="www.instagram.com/mr.roll">
                    
                  </div>
                  <div class=" mb-3">
                    <textarea class="form-control-lg" rows="7"  name="about" value="" cols="113" type="text" placeholder="About">{{ $profile -> about }}</textarea>
                  </div>
                  <table>
                    <tr>
                        <td><input class="form-control-file" type="file" name="foto" id="foto"></td>
                    </tr>
                    <tr>
                      <td>@if (file_exists("storage/".$profile->foto))
                        <img src="/storage/{{ $profile->foto }}" width="90" height="70" alt="" class=" mt-3 rounded-circle"><br>
                        @endif</td>
                    </tr>
                  </table>
                  <div class="mt-3 d-flex justify-content-end mb-5">
                    
                    <input class="btn btn-primary d-flex justify-content-end" type="submit" value="{{ $tombol }}">
                  </div>
                  
              </form>
        </div>
</div>
 
@endsection