<div class="modal fade" id="menuItemAdd" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Menu Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('menu.item.store', $menu->id) }}" method="post">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Menu Name"
                                name="name">
                            <x-form.validation.error name="name" />

                        </div>

                        <div class="form-group">
                            <label for="icon" class="form-label">Icon</label>
                            <input type="text" class="form-control" id="icon"
                                placeholder="Remix Icon (eg: flaticon2-gear)" name="icon">
                            <x-form.validation.error name="icon" />
                        </div>

                        <div class="form-group">
                            <label for="route" class="form-label">Route</label>
                            <select class="form-control" id="route" name="route" data-choices
                                data-choices-removeItem>
                                @foreach ($routes as $route)
                                    @if (!blank($route->getName()))
                                        <option value="{{ $route->getName() }}">{{ $route->getName() }}</option>
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
                                    <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                            <x-form.validation.error name="permission_name" />
                        </div>

                        <div class="form-group">
                            <label class="checkbox">
                                <input type="checkbox" value="1" checked="checked" name="status" />
                                <span></span>
                                Status
                            </label>
                            <x-form.validation.error name="status" />
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
