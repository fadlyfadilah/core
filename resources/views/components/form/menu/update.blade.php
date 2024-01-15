<!-- Modals add menu -->
<div id="modal-form-edit-menuGroup-{{ $menuGroup->id }}" class="modal fade" tabindex="-1"
    aria-labelledby="modal-form-edit-menuGroup-{{ $menuGroup->id }}-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('menu.update', $menuGroup->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-edit-menuGroup-{{ $menuGroup->id }}-label">Edit Menu
                        ({{ $menuGroup->name }})</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Menu Name" name="name"
                            value="{{ $menuGroup->name }}">
                            <x-form.validation.error name="name" />
                    </div>

                    <div class="mb-3">
                        <label for="permission_name" class="form-label">Permission Name</label>
                        <select class="form-control" id="permission_name" name="permission_name" data-choices
                            data-choices-removeItem>
                            @foreach ($permissions as $permission)
                                <option @selected($menuGroup->permission_name == $permission->name) value="{{ $permission->name }}">
                                    {{ $permission->name }}</option>
                            @endforeach
                        </select>
                        <x-form.validation.error name="permission_name" />
                    </div>

                    <div class="form-group">
                        <label class="checkbox">
                            <input type="checkbox" value="1" @checked($menuGroup->status) name="status" />
                            <span></span>
                            Status
                        </label>
                        <x-form.validation.error name="status" />
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
