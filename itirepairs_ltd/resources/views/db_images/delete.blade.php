<!-- Delete-Modal -->
<div class="modal fade" id="deleteModal{{$image->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('image.delete', $image->id) }}" method="post" enctype="multpart/form-data">
                    @method('DELETE')
                    @csrf
                    <div class="mb-3">
                        <h5 style="color: #48b4e0 !important">You sure you want to delete this image?</h5>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-primary">delete</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">cancal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>