<!DOCTYPE html>
<html>
    <head>
        <title>Form {{ $title }} Booking</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="{{ asset('assets/jquery.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </head>
    <body style="width:95%">
    <div class="row justify-content-center" style="margin-top:13%">
        <div class="col-3">
            <h4>Form {{ $title }} Booking</h4>
            <form class="border" style="padding:20px" method="POST" action="/{{ $action }}">
                @csrf
                <input type="hidden" name="_method" value="{{ $method }}" />
                <div class="form-group">
                    <label>ID Mobil</label>
                    <input type="text" name="id_mobil" class="form-control" value="{{ isset($data)?$data->id_mobil:'' }}" />
                </div>
                <div class="form-group">
                    <label>Nama Mobil</label>
                    <input type="text" name="nama_mobil" class="form-control" value="{{ isset($data)?$data->nama_mobil:'' }}" />
                </div>
                <div class="form-group">
                    <label>Jenis Mobil</label>
                    <input type="text" name="jenis_mobil" class="form-control" value="{{ isset($data)?$data->jenis_mobil:'' }}" />
                </div>
                <div class="form-group">
                    <label>Wisata</label>
                    <input type="text" name="wisata" class="form-control" value="{{ isset($data)?$data->wisata:'' }}" />
                </div>
                <div class="form-group">
                    <label>ID Member</label>
                    <input type="text" name="id_member" class="form-control" value="{{ isset($data)?$data->id_member:'' }}" />
                </div>
                <div class="form-group">
                    <label>Nama Member</label>
                    <input type="text" name="nama_member" class="form-control" value="{{ isset($data)?$data->nama_member:'' }}" />
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="Menunggu Persetujuan">Menunggu Persetujuan</option>
                        <option value="Diterima">Diterima</option>
                        <option value="Diolak">Ditolak</option>
                    </select>
                </div>
                <div style="text-align:center">
                    <button class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    </body>
</html>