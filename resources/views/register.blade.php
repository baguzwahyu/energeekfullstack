<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link href="{{asset('assets/css/fileinput.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme.min.css')}}" rel="stylesheet">
    <script
        nonce="e6c1a309-fe8e-440d-8396-baddc6d9fb5e">(function (w, d) { !function (a, e, t, r) { a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = { deferred: [] }, a.zaraz.q = [], a.zaraz._f = function (e) { return function () { var t = Array.prototype.slice.call(arguments); a.zaraz.q.push({ m: e, a: t }) } }; for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e); a.addEventListener("DOMContentLoaded", (() => { var t = e.getElementsByTagName(r)[0], z = e.createElement(r), n = e.getElementsByTagName("title")[0]; for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.x = Math.random(), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.zarazData.q = []; a.zaraz.q.length;) { const e = a.zaraz.q.shift(); a.zarazData.q.push(e) } z.defer = !0; for (const e of [localStorage, sessionStorage]) Object.keys(e).filter((a => a.startsWith("_zaraz_"))).forEach((t => { try { a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t)) } catch { a.zarazData["z_" + t.slice(7)] = e.getItem(t) } })); z.referrerPolicy = "origin", z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t) })) }(w, d, 0, "script"); })(window, document);</script>
</head>

<body class="hold-transition layout-top-nav text-sm">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
            <h1 class="text-red">Energeek</h1>
    
            <ul class="navbar-nav ml-auto">
    
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <a href="{{url('list')}}"><h6 class="text-red">Menuju List -> </h6></a>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row mb-5">
    
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="register-box">
                                <div class="card card-outline">
                                    <div class="card-body">
                                        <p class="login-box-msg">
                                            <b>Apply Lamaran</b>
                                        </p>
                                        <form action="{{url('application/store')}}" method="POST"  enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label>Jabatan</label>
                                                <select name="title_id" class="form-control select2bs4" style="width: 100%;" placeholder="Pilih Jabatan" require>
                                                    <option value=""></option>
                                                    <option value="1">Frontend Web Programmer</option>
                                                    <option value="2">Fullstack Web Programmer</option>
                                                    <option value="3">Quality Control</option>
                                                </select>
                                                @error('title_id')
                                                    <div class="text-red col-form-label">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="">Telepon</label>
                                                <div class="input-group">
                                                    <input name="telephone" class="form-control numberfield valid" placeholder="089234766643">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                                    </div>
                                                </div>
                                                @error('telephone')
                                                    <div class="text-red col-form-label">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <div class="input-group">
                                                    <input name="email" type="email" class="form-control" placeholder="Cth:energeekmail@gmail.com">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                                    </div>
                                                </div>
                                                @error('email')
                                                    <div class="text-red col-form-label">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tahun Lahir</label>
                                                <div class="input-group">
                                                    <input name="date_of_birth" type="text" class="form-control" placeholder="1998">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                                @error('date_of_birth')
                                                    <div class="text-red col-form-label">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                            <label >Berkas Lamaran</label>
                                            <div class="col-md-12">
                                                <input type="file" class="form-control" name="application_file" id="application_file"/>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-block btn-danger"> Apply </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
        </div>
    
    </div>
    <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
    
    <script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/select2/js/select2.full.min.js"></script>

    
    <script src="https://adminlte.io/themes/v3/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jszip/jszip.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    
    <script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="{{asset('assets/js/fileinput.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.min.js')}}"></script>
    <script type="text/javascript">
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });

            $("#application_file").fileinput({
                browseClass: "btn btn-danger",
                showRemove: false,
                showUpload: false,
                allowedFileExtensions: ["pdf"],
                dropZoneEnabled: false,
                initialPreview: '<img src="{{asset('assets/files/default.pdf')}}" class="kv-preview-data file-preview-image">',
                initialPreviewFileType: 'pdf',
                initialPreviewConfig: [
                {caption: "", downloadUrl: "{{asset('assets/files/default.pdf')}}", size:"{{ @File::size(public_path('files/default.pdf'))}}",url: false}
                ],
                theme: 'explorer-fas'
            });

        });
    </script>
</body>

</html>