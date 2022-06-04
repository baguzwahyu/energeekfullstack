<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
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
                        <a href="{{url('/')}}"><h6 class="text-red">Halaman Registration -> </h6></a>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-2"></div>
                        <div class="col-sm-8" style="margin-top: 50px;margin-bottom: 10px;">
                            <h1 class="m-0">Daftar Lamaran</h1>
                        </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="card">                        
                                <div class="card-body">
                                    <table id="list-application" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal Apply</th>
                                                <th>Email</th>
                                                <th>Jabatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
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
    <script>
        $(function () {
            // $("#example1").DataTable({
            //     "responsive": true, "lengthChange": true, "autoWidth": false,
            // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": true,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "responsive": true,
            // });

            dataTable = $('#list-application').DataTable({
                searching: true,
                stateSave: true,
                processing: true,
                serverSide: true,
                filter: false,
                info: false,
                lengthChange: true,
                responsive: true,
                order: [[4, "asc"]],
                ajax: {
                    url: "{{url('application/read')}}",
                    type: "GET",
                    data: function (data) {
                    }
                },
                columnDefs: [
                    { className: "text-center", targets: [0, 3,4] },
                    {
					render: function(data, type, row) {
						let dateObj = new Date(row.created_at);
						let day = String(dateObj.getDate()).padStart(2, '0');
						let month = String(parseInt(dateObj.getMonth()) + 1).padStart(2, '0');
						let year = dateObj.getFullYear();
                        const months = {
                            0: 'January',
                            1: 'February',
                            2: 'March',
                            3: 'April',
                            4: 'May',
                            5: 'June',
                            6: 'July',
                            7: 'August',
                            8: 'September',
                            9: 'October',
                            10: 'November',
                            11: 'December'
                        }
                        const monthIndex = dateObj.getMonth()
                        const monthName = months[monthIndex]
                        console.log(monthName)
						let output = day + ' ' + monthName  + ' ' + year;

						return output;
					},
					targets: [1]
				},
                    {
                        render: function (data, type, row) {
                            return `
                                <a class="" href="#"><i class="fas fa-search mr-2"></i></a>
                                <a class="" href="#"><i class="fa fa-trash mr-2"></i></a>
                            `
                        }, targets: [4]
                    }
                ],
                columns: [
                    { data: "no" },
                    { data: "created_at" },
                    { data: "email" },
                    { data: "title_name" },
                    { data: "id" },
                ]
            });
        });
    </script>
</body>

</html>