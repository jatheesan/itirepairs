<!-- Delete-Modal -->
<div class="modal fade" id="deleteModal{{$service->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Service Id No - {{ $service->id }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('service.delete', $service->id) }}" method="post" enctype="multpart/form-data">
                    @method('DELETE')
                    @csrf
                    <div class="mb-3">
                        <h5>You sure you want to delete this service?</h5>
                    </div>
                    <div class="m-3">
                        <button type="submit" class="btn btn-outline-success">delete</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">cancal</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>