<!-- Modals add menu -->
<div id="modal-form-edit-route-{{ $route->id }}" class="modal fade" tabindex="-1"
    aria-labelledby="modal-form-edit-route-{{ $route->id }}-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('route.update', $route->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-edit-route-{{ $route->id }}-label">Edit Route
                        ({{ $route->route }})</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="route" class="form-label">Route Name</label>
                        <select class="form-control" id="route" name="route" data-choices data-choices-removeItem>
                            @foreach ($facadesRoutes as $facadesRoute)
                                @if (!blank($facadesRoute->getName()))
                                    <option @selected($route->permission_name == $facadesRoute->getName()) value="{{ $facadesRoute->getName() }}">
                                        {{ $facadesRoute->getName() }}</option>
                                @endif
                            @endforeach
                        </select>
                        <x-form.validation.error name="route" />
                    </div>

                    <div class="form-group">
                        <label for="permission_name" class="form-label">Permission Name</label>
                        <select class="form-control" id="permission_name" name="permission_name" data-choices
                            data-choices-removeItem>
                            @foreach ($permissions as $permission)
                                <option @selected($permission->name == $route->permission_name) value="{{ $permission->name }}">
                                    {{ $permission->name }}</option>
                            @endforeach
                        </select>
                        <x-form.validation.error name="permission_name" />
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="description" placeholder="Role description" name="description"></textarea>
                        <x-form.validation.error name="description" />
                    </div>

                    <div class="form-group">
                        <label class="checkbox">
                            <input type="checkbox" value="1" @checked($route->status) name="status" />
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
