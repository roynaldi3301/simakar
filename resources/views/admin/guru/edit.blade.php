@extends('layouts.admin.template')
@section('title', 'Edit Data Guru')
@section('cssbawah')
    {{-- ===========================>Custom CSS<============================= --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/jquery-minicolors/jquery.minicolors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/quill/dist/quill.snow.css') }}">
@endsection
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-dark">
                    <h4 class="card-title"><i class="fas fa-user-plus"></i> Form Edit Guru</h4>
                </div> <br>
                @if (count($errors) > 0)
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $ups)
                            <li>{{ $ups }}</li>
                        @endforeach
                    </ul>
                @endif
                <form action="{{ route('guru.update',$guru->id) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="input1" class="col-sm-3  control-label col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_lengkap" class="form-control" id="input1"
                                    value="{{ $guru->nama_lengkap }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3">Jenis Kelamin</label>
                            <div class="col-md-9">
                                <select name="jenis_kelamin" class=" form-control custom-select select2">
                                    <option id="jk">--Jenis Kelamin--</option>
                                    <option value="l">Laki Laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input3" class="col-sm-3  control-label col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="number" value="{{ $guru->nik }}" name="nik" class="form-control" id="input3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input4" class="col-sm-3  control-label col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $guru->tempat_lahir }}"
                                    name="tempat_lahir" id="input4">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="datepicker" class="col-sm-3  control-label col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" value="{{ $guru->tanggal_lahir }}" name="tanggal_lahir"
                                    class="form-control" id="datepicker">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3">Jabatan</label>
                            <div class="col-md-9">
                                <select name="id_gtk" class=" form-control custom-select select2">
                                    @foreach ($jenis as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($item->id == $guru->id_gtk)
                                                selected
                                                @endif
                                                >{{ $item->jenis_gtk }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input5" class="col-sm-3  control-label col-form-label">Alamat Lengkap</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="alamat" value="{{ $guru->alamat }}" id="input5" ></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lamakerja" class="col-sm-3  control-label col-form-label">Lama Bekerja</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $guru->lama_kerja }}" name="lama_kerja" class="form-control"
                                    id="lamakerja">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3  control-label col-form-label">SK Pengangkatan</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $guru->sk_pengangkatan }}" name="sk_pengangkatan"
                                    class="form-control" id="lname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="datepicker-autoclose" class="col-sm-3  control-label col-form-label">TMT</label>
                            <div class="col-sm-9">
                                <input type="date" value="{{ $guru->tmt_pengangkatan }}" name="tmt_pengangkatan"
                                    class="form-control" id="datepicker-autoclose">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cono4" class="col-sm-3  control-label col-form-label">Ijazah Terakhir</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $guru->ijazah_terakhir }}" name="ijazah_terakhir"
                                    class="form-control" id="cono4">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono2" class="col-sm-3  control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $guru->email }}" name="email" class="form-control" id="cono2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono3" class="col-sm-3  control-label col-form-label">Nomor Telepon/Whatsapp</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $guru->no_hp }}" name="no_hp" class="form-control" id="cono3">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body" style="float: right">
                            <button type="submit" class="btn btn-outline-primary btn-rounded">Kirim</button>
                            <a href="{{ route('guru.index') }}" class="btn btn-outline-secondary btn-rounded">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('jsbawah')

    <!-- This Page JS -->
    <script src="{{ asset('assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/mask/mask.init.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>
    <script src="{{ asset('assets/libs/toastr/build/toastr.min.js') }}"></script>
    <script>
        $(function() {
            // Success Type
            $('#ts-success').on('click', function() {
                toastr.success('Have fun storming the castle!', 'Miracle Max Says');
            });

            // Success Type
            $('#ts-info').on('click', function() {
                toastr.info('We do have the Kapua suite available.', 'Turtle Bay Resort');
            });

            // Success Type
            $('#ts-warning').on('click', function() {
                toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!');
            });

            // Success Type
            $('#ts-error').on('click', function() {
                toastr.error('I do not think that word means what you think it means.', 'Inconceivable!');
            });
        });

    </script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datepicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
        /*datepicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
@endsection
