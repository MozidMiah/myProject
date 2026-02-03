<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Student Form</h4>
                <hr />
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                <form class="form-horizontal p-t-20" action="{{ route('student.update', $student->id) }}"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 control-label">Name <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name', $student->name) }}" id="name"
                                placeholder="Name">
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="student_id" class="col-sm-3 control-label">Student ID <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('student_id') is-invalid @enderror"
                                name="student_id" value="{{ old('student_id', $student->student_id) }}" id="student_id"
                                placeholder="Student ID">
                            @error('student_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cgpa" class="col-sm-3 control-label">CGPA<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="number" step="0.01" min="0" max="4"
                                class="form-control @error('cgpa') is-invalid @enderror" name="cgpa"
                                value="{{ old('cgpa', $student->cgpa) }}" id="cgpa" placeholder="CGPA">
                            @error('cgpa')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="age" class="col-sm-3 control-label">Age<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control @error('age') is-invalid @enderror" name="age"
                                value="{{ old('age', $student->age) }}" id="age" placeholder="Age">
                            @error('age')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 control-label">Email<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email', $student->email) }}" id="email"
                                placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone', $student->phone) }}" id="phone"
                                placeholder="Phone">
                            @error('phone')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status_active"
                                    value="1" {{ old('status', $student->status) == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="status_active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status_inactive"
                                    value="0" {{ old('status', $student->status) == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="status_inactive">Inactive</label>
                            </div>
                            @error('status')
                                <span class="text-danger d-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                Update Student
                            </button>
                            <a href="{{ route('student.index') }}"
                                class="btn btn-secondary waves-effect waves-light text-white">
                                Back to List
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
