<div class="modal fade" id="permissionAdd" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Permision</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('permission.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Permission Name" />
                            <x-form.validation.error name="name" />

                        </div>

                        <div class="form-group">
                            <label for="guard" class="form-label">Guard</label>
                            <input type="text" class="form-control" name="guard_name" id="guard"
                                placeholder="Permission guard" />
                            <x-form.validation.error name="guard_name" />
                        </div>

                        <div class="from-group">
                            <label for="roles[]" class="form-label">Role Name</label>
                            <select class="form-control select2" id="roles[]" name="roles[]" multiple>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <x-form.validation.error name="roles" />
                        </div>

                        <div class="form-group mb-1">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="2"></textarea>
                            <x-form.validation.error name="description" />
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
