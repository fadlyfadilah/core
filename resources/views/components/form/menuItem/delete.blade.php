<form action="{{ route('menu.item.destroy', [$menu->id, $menuItem->id]) }}" method="post" id="modal-form-delete-menuItem-{{ $menuItem->id }}">
    @csrf
    @method('DELETE')
</form>