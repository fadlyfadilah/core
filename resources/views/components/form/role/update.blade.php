<!-- Modals add menu -->
<div id="modal-form-edit-role-{{ $role->id }}" class="modal fade" tabindex="-1"
    aria-labelledby="modal-form-edit-role-{{ $role->id }}-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('role.update', $role->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-edit-role-{{ $role->id }}-label">Edit role
                        ({{ $role->name }})</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="role Name" name="name"
                            value="{{ $role->name }}">
                            <x-form.validation.error name="name" />
                    </div>

                    <div class="form-group">
                        <label for="guard_name" class="form-label">Guard</label>
                        <input type="text" class="form-control" id="guard_name" placeholder="Guard Name"
                            name="guard_name" value="{{ $role->guard_name }}">
                            <x-form.validation.error name="guard_name" />
                    </div>

                    <div class="form-group">
                        <label for="permissions[]" class="form-label">Permission Name</label><br>
                        <select class="form-control" id="permissions[]" name="permissions[]" multiple>
                            @foreach ($permissions as $permission)
                            <option @selected($role->hasPermissionTo($permission->name)) value="{{ $permission->name }}">{{ $permission->name }}</option>
                            @endforeach
                        </select>
                        <x-form.validation.error name="permission" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
                    <button type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">Close</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
