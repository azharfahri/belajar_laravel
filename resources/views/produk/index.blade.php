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
                            <h1 class="page-header">Produk</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Produk
                                    
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        @if (session('success'))
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <a href="#" class="alert-link">{{ session('success') }}</a>.
                                        </div>
                                        
                                        @endif
                                        <a href="{{ route('produk.create') }}" type="button" class="btn btn-primary">Add</a>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama produk</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Stok</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ($produk as $data)
                                                <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $data->nama_produk }}</td>
                                                <td>Rp.{{ $data->harga }}</td>
                                                <td>{{ $data->stok }}</td>
                                                <td>{{ $data->kategori->nama_kategori }}</td>
                                                <td>
                                                    <img src="{{ asset('/images/produk/' . $data->cover) }}" width="100">
                                                </td>
                                                <td>
                                                    <form action="{{ route('produk.destroy',$data->id) }}" method="POST">
                                                    <a href="{{ route('produk.edit',$data->id) }}" type="button" class="btn btn-success">Edit</a>
                                                    <a href="{{ route('produk.show',$data->id) }}" type="button" class="btn btn-warning">Show</a>
                                                    
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
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