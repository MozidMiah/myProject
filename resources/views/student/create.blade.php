{{-- @extends('admin.master')

@section('body') --}}
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Category</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
                {{-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
                        class="fa fa-plus-circle"></i> Create New</button> --}}
            </div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Category Form</h4>
                    <hr />
                    <h4 class="text-center text-success">{{ session('message') }}</h4>
                    <form class="form-horizontal p-t-20" action="{{ route('student.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label"> Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="exampleInputuname3"
                                    placeholder="student Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">student_id <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="student_id" id="exampleInputEmail3" placeholder="student_id"></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">cgpa<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="cgpa" id="exampleInputEmail3" placeholder="cgpa"></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">age<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="age" id="exampleInputEmail3" placeholder="age"></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">email<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="email" id="exampleInputEmail3" placeholder="email"></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">phone<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="phone" id="exampleInputEmail3" placeholder="phone"></input>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="me-3"><input type="radio" name="status" value="1" checked>
                                    Published</label>
                                <label><input type="radio" name="status" value="2"> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create
                                    New Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}
