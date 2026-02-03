<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Student Form</h4>
                <hr />
                <h4 class="text-center text-success">{{ session('message') }}</h4>
                <form class="form-horizontal p-t-20" action="{{ route('student.update') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $student->id }}" />
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Name <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="{{ $student->name }}"
                                id="exampleInputuname3" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">student_id <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="{{ $student->student_id }}"
                                id="exampleInputuname3" placeholder="student_id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">cgpa<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="cgpa" value="{{ $student->cgpa }}"
                                id="exampleInputuname3" placeholder="cgpa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">age<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="age" value="{{ $student->age }}"
                                id="exampleInputuname3" placeholder="age">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">email<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" value="{{ $student->email }}"
                                id="exampleInputuname3" placeholder="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">phone<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone" value="{{ $student->phone }}"
                                id="exampleInputuname3" placeholder="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword4" class="col-sm-3 control-label">Publication Status</label>
                        <div class="col-sm-9">
                            <label>
                                <input type="radio" name="status" value="1"
                                    {{ $student->status == 0 ? 'checked' : '' }}> Published
                            </label>

                            <label>
                                <input type="radio" name="status" value="2"
                                    {{ $student->status == 2 ? 'checked' : '' }}> Unpublished
                            </label>
                        </div>
                    </div>
                    <div class="form-group row m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
