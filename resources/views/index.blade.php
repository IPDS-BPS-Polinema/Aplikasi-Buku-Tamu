<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{url('/frontend/css/formTamuStyle/style.css')}}" />
  <script src="{{url('/frontend/css/formTamuStyle/script.js')}}" defer></script>
  <title>Form Buku Tamu</title>
</head>

<body>

  <h1 class="text-center">Form Buku Tamu</h1>
  <h2 class="text-center">BPS - Kota Malang</h2>

  <!-- Progress bar -->
  <div class="progressbar">
    <div class="progress" id="progress"></div>
    <div class="progress-step progress-step-active text-center" data-title="Informasi Pribadi"></div>
    <div class="progress-step" data-title="Riwayat"></div>
    <div class="progress-step" data-title="Pelayanan"></div>
    <div class="progress-step" data-title="Tujuan"></div>
  </div>

  <!-- Steps 1-->
  <div class="form-step form-step-active">
    <form action="{{route('formTamu.store')}}" method="POST" class="form">
      @csrf
      <div class="input-group">
        <label for="nohp">No HP</label>
        <input type="text" name="nohp" id="nohp" placeholder="Silahkan isi no hp anda" />
      </div>
      <div class="input-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" placeholder="Silahkan isi nama anda" />
      </div>
      <div class="form-group mb-3">
        <label class="jeniskelamin" for="jeniskelamin">Jenis Kelamin</label>
        <select class="custom-select my-1 mr-sm-2" name="jeniskelamin" id="inlineFormCustomSelectPref">
          <option selected="true" disabled="disabled">Pilih Jenis Kelamin</option>
          <option value="lakilaki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Silahkan isi email anda" />
      </div>
      <div class="input-group">
        <label for="usia">Usia</label>
        <input type="text" name="usia" id="usia" placeholder="Silahkan isi usia anda (contoh: 27)" />
      </div>
      <div class="">
        <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
      </div>
  </div>


  <!-- Steps 2-->
  <div class="form-step">
    <div class="input-group">
      <label for="instansi">Nama Instansi</label>
      <input type="text" name="instansi" id="instansi" />
    </div>
    <div class="input-group">
      <label for="nipnim">NIP/NIM</label>
      <input type="text" name="nipnim" id="nipnim" />
    </div>
    <div class="form-group mb-3">
      <label class="label" for="pekerjaan">Pekerjaan</label>
      <select class="custom-select my-1 mr-sm-2" name="pekerjaan" id="inlineFormCustomSelectPref">
        <option selected="true" disabled="disabled">Pilih Pekerjaan</option>
        @foreach ($pekerjaan as $p)
        <option value="{{ $p->id }}">{{$p->jenis_pekerjaan}}</option>
        @endforeach
      </select>
    </div><br><br>
    <div class="form-group mb-3">
      <label class="label" for="pendidikan">Pendidikan</label>
      <select class="custom-select my-1 mr-sm-2" name="pendidikan" id="inlineFormCustomSelectPref">
        <option selected="true" disabled="disabled">Pilih Jenis Pendidikan</option>
        @foreach ($pendidikan as $p)
        <option value="{{ $p->id }}">{{$p->jenis_pendidikan}}</option>
        @endforeach
      </select>
    </div><br><br>
    <div class="btns-group">
      <a href="#" class="btn btn-prev">Previous</a>
      <a href="#" class="btn btn-next">Next</a>
    </div>
  </div>


  <!-- Steps 3-->
  <div class="form-step">
    <div class="input-group">
      <div class="form-group mb-3">
        <label class="label" for="media">Media Pelayanan</label>
        <select class="custom-select my-1 mr-sm-2" name="media" id="inlineFormCustomSelectPref">
          <option selected="true" disabled="disabled">Pilih Media Pelayanan</option>
          @foreach ($media as $p)
          <option value="{{ $p->id }}">{{$p->jenis_mediaPelayanan}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="input-group">
      <label for="lang">Kebutuhan Data</label>
      <select name="kebutuhan" id="lang">
        <optgroup label="Sosial dan Kependudukan">
          @foreach ($kebutuhan1 as $p)
          <option value="{{ $p->id }}">{{$p->jenis_sosialkependudukan}}</option>
          @endforeach
        </optgroup>
        <optgroup label="Ekonomi dan Perdagangan">
          @foreach ($kebutuhan2 as $q)
          <option value="{{ $q->id }}">{{$q->jenis_ekonomiperdagangan}}</option>
          @endforeach
        </optgroup>
        <optgroup label="Pertanian dan Pertambangan">
          @foreach ($kebutuhan3 as $r)
          <option value="{{ $r->id }}">{{$r->jenis_pertanianpertambangan}}</option>
          @endforeach
        </optgroup>
      </select>
    </div>
    <div class="input-group">
      <div class="form-group mb-3">
        <label class="label" for="jenis">Jenis Pelayanan</label>
        <select class="custom-select my-1 mr-sm-2" name="jenispelayanan" id="inlineFormCustomSelectPref">
          <option selected="true" disabled="disabled">Pilih Jenis Pelayanan</option>
          @foreach ($jenis as $j)
          <option value="{{ $j->id }}">{{$j->jenis_layanan}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="btns-group">
      <a href="#" class="btn btn-prev">Previous</a>
      <a href="#" class="btn btn-next">Next</a>
    </div>
  </div>


  <!-- Steps 4-->
  <div class="form-step">
    <div class="input-group">
      <label for="tujuan">Tujuan</label>
      <input type="text" name="tujuan" id="tujuan" placeholder="Silahkan isi tujuan anda" />
    </div>
    <div class="input-group">
      <label for="data">Data</label>
      <input type="text" name="data" id="data" placeholder="Silahkan isi data spesifik yang anda perlukan" />
    </div>
    <div class="btns-group">
      <a href="#" class="btn btn-prev">Previous</a>
      <input type="submit" value="Submit" class="btn" />
    </div>
    </form>
  </div>

</body>

</html>