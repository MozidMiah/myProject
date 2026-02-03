{{-- @extends('admin.master')

@section('body') --}}
@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Dashboard</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row ">
                    <div class="col-md-5 align-self-center">
                        <h4 class="card-title">Data Table</h4>
                        <h6 class="card-subtitle">Data table example</h6>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('student.create') }}" type="button"
                                class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
                                    class="fa fa-plus-circle"></i> Create New</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-striped border">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Student ID</th>
                                <th>CGPA</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->name }}</td> {{-- Fixed: $students->name to $student->name --}}
                                    <td>{{ $student->student_id }}</td> {{-- Fixed: $students->student_id to $student->student_id --}}
                                    <td>{{ $student->cgpa }}</td> {{-- Added CGPA column --}}
                                    <td>{{ $student->age }}</td> {{-- Added Age column --}}
                                    <td>{{ $student->email }}</td> {{-- Added Email column --}}
                                    <td>{{ $student->phone ?? 'N/A' }}</td> {{-- Added Phone column --}}
                                    <td>{{ $student->status == 1 ? 'Active' : 'Inactive' }}</td> {{-- Fixed the ternary operator --}}
                                    <td>
                                        @if ($student->status == 1)
                                            <a href="{{ route('student.status', $student->id) }}"
                                                class="btn btn-success btn-sm" title="Deactivate">
                                                <i class="ti-arrow-up"></i>
                                            </a>
                                        @else
                                            <a href="{{ route('student.status', $student->id) }}"
                                                class="btn btn-warning btn-sm" title="Activate">
                                                <i class="ti-arrow-down"></i>
                                            </a>
                                        @endif

                                        <a href="{{ route('student.edit', $student->id) }}" class="btn btn-info btn-sm"
                                            title="Edit">
                                            <i class="ti-pencil"></i>
                                        </a>

                                        <a href="{{ route('student.delete', $student->id) }}"
                                            class="btn btn-danger btn-sm" title="Delete"
                                            onclick="return confirm('Are You Sure?');">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
