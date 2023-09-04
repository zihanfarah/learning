@extends('layout.master')

@section('title', 'User')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Birth</th>
                                <th>Sex</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                     <td>{{ $user->id }}</td>
                                     <td>{{ $user->name }}</td>
                                     <td>{{ $user->profil->birth }}</td>
                                     <td>{{ $user->profil->sex }}</td>
                                     {{-- <td>{{ $user['id'] }}</td>
                                     <td>{{ $user['name'] }}</td>
                                     <td>{{ $user['birth'] }}</td>
                                     <td>{{ $user['sex'] }}</td> --}}
                                </tr>
                            @endforeach
                               
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Birth</th>
                                <th>Sex</th>
                            </tr>
                        </tfoot>
                            {{-- <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                            </tr> --}}
                        </tbody>
                    </table>
                    {{ $users->links() }} 
                </div>
            </div>
        </div>

    </div>
@endsection