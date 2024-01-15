<div class="modal fade" id="roleAdd" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('role.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Role Name" />
                            <x-form.validation.error name="name" />
                        </div>

                        <div class="form-group">
                            <label for="guard" class="form-label">Guard</label>
                            <input type="text" class="form-control" name="guard_name" id="guard"
                                placeholder="Role guard" />
                            <x-form.validation.error name="guard_name" />
                        </div>

                        <div class="form-group">
                            <label for="permissions[]" class="form-label">Permission Name</label><br>
                            <select class="select2" id="permissions[]" name="permissions[]" multiple>
                                @foreach ($permissions as $permission)
                                <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                            <x-form.validation.error name="permission" />
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal">Close</button>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
</div>
