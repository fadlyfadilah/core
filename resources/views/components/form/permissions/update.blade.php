<!-- Modals add menu -->
<div id="modal-form-edit-permission-{{ $permission->id }}" class="modal fade" tabindex="-1"
    aria-labelledby="modal-form-edit-permission-{{ $permission->id }}-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('permission.update', $permission->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-edit-permission-{{ $permission->id }}-label">Edit Permission
                        ({{ $permission->name }})</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Permission Name"
                            name="name" value="{{ $permission->name }}">
                    </div>

                    <div class="form-group">
                        <label for="guard_name" class="form-label">Guard</label>
                        <input type="text" class="form-control" id="guard_name" placeholder="Guard Name"
                            name="guard_name" value="{{ $permission->guard_name }}">
                    </div>

                    <div class="form-group">
                        <label for="roles[]" class="form-label">Role Name</label>
                        <select class="form-control" id="roles[]" name="roles[]" multiple>
                            @foreach ($roles as $role)
                                <option @selected($permission->hasRole($role->name)) value="{{ $role->name }}">{{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="description" placeholder="Permission description" name="description">{{ $permission->description }}</textarea>
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