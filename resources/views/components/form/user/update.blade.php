<!-- Modals add menu -->
<div id="modal-form-edit-user-{{ $user->id }}" class="modal fade" tabindex="-1"
    aria-labelledby="modal-form-edit-user-{{ $user->id }}-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-edit-user-{{ $user->id }}-label">Edit User
                        ({{ $user->name }})</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                            value="{{ $user->name }}">
                        <x-form.validation.error name="name" />
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                            value="{{ $user->email }}">
                        <x-form.validation.error name="email" />

                    </div>

                    <div class="form-group">
                        <label for="role" class="form-label">Role Name</label>
                        <select class="form-control" id="role" name="role">
                            @foreach ($roles as $role)
                                <option @selected($user->hasRole($role->name)) value="{{ $role->name }}">{{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                        <x-form.validation.error name="role" />

                    </div>

                    {{-- <div class="form-group">
                        <label class="checkbox">
                            <input type="checkbox" value="1" @checked($user->verified) name="verified" />
                            <span></span>
                            Verified
                        </label>
                        <x-form.validation.error name="verified" />
                    </div> --}}

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="password"
                            name="password" value="">
                        <x-form.validation.error name="password" />
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
                    <button type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">Close</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
