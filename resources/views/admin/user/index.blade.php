@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-user mr-2"></i>
    {{ $title }}
    </h1>

    <div class="card">
        <div class="card-header d-flex flex-warp justify-content-center justify-content-xl-between">
            <div class="mb-1 mr-2">
                <a href="#" class="btn btn-sm btn-primary">
                <i class="fas fa-plus mr-2"></i>    
                Tambah Data
                </a>
            </div>
            <div>
                <a href="#" class="btn btn-sm btn-success">
                <i class="fas fa-file-excel mr-2"></i>    
                Excel
                </a>
                <a href="#" class="btn btn-sm btn-danger">
                <i class="fas fa-file-excel mr-2"></i>    
                PDF
                </a>
            </div>
        </div>
        <div class="card-body">
        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-primary">
                                        <tr class="text-center text-white">
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>
                                                <i class="fas fa-cog"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>System Architect</td>
                                            <td class="text-center">
                                                <span class="badge badge-dark badge-pill">
                                                    Admin
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-danger badge-pill">
                                                    Belum Ditugaskan
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <a herf="#" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a herf="#" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
        </div>
    </div>
@endsection