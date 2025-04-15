<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ asset('admin/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{ asset('admin/css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('admin/css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset('admin/css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- navbar -->
                @include('layouts.part.navbar')
                <!-- /navbar -->

                <!-- /.navbar-top-links -->
            </nav>
            <!-- /sidebar -->
            @include('layouts.part.sidebar')
            <!-- /sidebar -->

            <div id="page-wrapper">
                <!-- /content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Siswa</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tambah Data Siswa
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                            <form role="form" action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label>NIS</label>
                                                    <input type="number" placeholder="Masukan NIS" name="nis" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Nama</label>
                                                    <input type="text" placeholder="Masukan Nama" name="nama" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Jenis Kelamin</label><br>
                                                    <input type="radio" class="form-check-input" name="jeniskelamin" value="Laki - laki" > Laki-laki
                                                    <input type="radio" class="form-check-input" name="jeniskelamin" value="Perempuan" > Perempuan 
                                                </div>
                                                <div class="form-group">
                                                        <label class="form-label">Kelas</label>
                                                        <select class="form-control" name="kelas" >
                                                            <option value="">Pilih Kelas</option>
                                                            <option value="XI RPL 1">XI RPL 1</option>
                                                            <option value="XI RPL 2">XI RPL 2</option>
                                                            <option value="XI RPL 3">XI RPL 3</option>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                        <label class="form-label">Image</label>
                                                        <input type="file" name="cover" class="form-control" >
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <!-- /.row -->
                </div>
                <!-- /content -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('admin/js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('admin/js/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('admin/js/raphael.min.js')}}"></script>
        <script src="{{ asset('admin/js/morris.min.js')}}"></script>
        <script src="{{ asset('admin/js/morris-data.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('admin/js/startmin.js')}}"></script>

    </body>

</html>