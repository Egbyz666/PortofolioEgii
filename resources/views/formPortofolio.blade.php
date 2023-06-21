@extends('template')
@section('konten')
<div class="container" style="margin-top: 8%">
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="namaPortofolio" id="floatingInput" placeholder="Judul Portofolio" value="{{ $portofolio -> namaPortofolio }}">
          <label for="">Judul Portofolio</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="kategori" id="floatingInput" placeholder="Kategori" value="{{ $portofolio -> kategori }}">
          <label for="">Kategori</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control-lg " rows="6" id="floatingInput" name="Deskripsi" cols="113" type="text" placeholder="Deskripsi">{{ $portofolio->Deskripsi }}</textarea>
          </div>
          <table>
            <tr>
                <td>@if (file_exists("storage/".$portofolio->foto))
                    <img src="/storage/{{ $portofolio->foto }}" width="90" height="70" alt="" class=" mt-3 rounded-circle"><br>
                    @endif
                    <input class="form-control-file" type="file" name="foto" id="foto">
                </td>
            </tr>
          </table>
            
        <div class="mt-3 d-flex justify-content-end mb-5">
            <input class="btn btn-primary d-flex justify-content-end me-3" type="submit" value="{{ $tombol }}">
          </div>
          
      </form>
      
</div>
</div>
</div>  
@endsection