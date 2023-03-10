
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.header')
  <title>Data</title>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pegawai</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
       <div class="card card-primary card-outline">
              <div class="card-header">
                <div class="card-tools">
                  <a href="{{route('createPegawai')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></i></a>
                </div>
              </div>
              <div class="card-body">
                <table class = "table table-bordered">
                  <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($dataPegawai as $item)
                  <tr>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->umur}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->no_telp}}</td>
                    <td>
                      <a href="{{url('editPegawai', $item->id)}}"><i class="fas fa-edit" style="margin-right: 10px"></i></a> <a href="{{url('deletePegawai', $item->id)}}"><i class="fas fa-trash-alt delete" style="color:red" onclick="return confirm('Apakah Yakin Ingin Menghapus Data?')"></i></a>
                    </td>
                  </tr>    
                  @endforeach
                  
                </table>
              </div>
              <div class="card-footer">
                {{$dataPegawai->links()}}
              </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('Template.script')
@include('sweetalert::alert')

</body>
</html>
