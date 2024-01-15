<form action="{{ route('menu.destroy', $menuGroup->id) }}" method="post" id="modal-form-delete-menuGroup-{{ $menuGroup->id }}">
    @csrf
    @method('DELETE')
</form>