@extends('admin/dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>
          <div class="card-tools">
            <a href="{{'/newuser'}}">+ Buat baru </a>
          </div>
          
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 20%">
                          Username
                      </th>
                      <th style="width: 30%">
                          Nama
                      </th>
                      <th>
                          Email
                      </th>
                      <th style="width: 8%" class="text-center">
                          Password
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($User as $users)
                  <tr>
                      <td>
                          {{$users['id']}}
                      </td>
                      <td>
                          <a>
                          {{$users['username']}}
                          </a>
                      </td>
                      <td>
                          <a>{{$users['name']}}</a>
                      </td>
                      <td>
                          <a>{{$users['email']}}</a>
                      </td>
                      <td>
                          <a>{{$users['password'] }}</a>
                      </td>
                      
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{route('users.edit',$users->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>

                         

                          <a class="btn btn-danger btn-sm" type="submit" href="{{route('users.destroy',$users->id)}}" onclick="event.preventDefault();
                                                     document.getElementById('delete').submit();">
                              <i class="fas fa-trash">
                                {!! method_field('delete') . csrf_field()!!}
                              </i>
                              Delete
                              <form id="delete" action="{{route('users.destroy',$users->id)}}" method="post">  {!! method_field('delete') . csrf_field()!!}
                              </form>
                          </a>
                      </td>
                  </tr>
                
                @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
            @endsection


  