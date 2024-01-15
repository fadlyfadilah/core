<div class="modal fade" id="userAdd" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Management</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Name" />
                            <x-form.validation.error name="name" />
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="guard"
                                placeholder="Email" />
                            <x-form.validation.error name="name" />
                        </div>

                        <div class="form-group">
                            <label for="role" class="form-label">Role Name</label><br>
                            <select class="form-control" id="role" name="role">
                                <option hidden selected>Please Select!</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <x-form.validation.error name="role" />
                        </div>

                        {{-- <div class="form-group">
                            <label class="checkbox">
                                <input type="checkbox" value="1" checked="checked" name="verified"/>
                                <span></span>
                                Verified
                            </label>
                            <x-form.validation.error name="verified" />
                        </div> --}}

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
