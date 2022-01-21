<!-- Edit-Modal -->
<div class="modal fade" id="editModal{{$image->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #48b4e0 !important">Update Image Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('image.update', $image->id) }}" method="post" enctype="multpart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="d-none">
                        <input type="text" name="id" id="id" value="{{$image->id}}">
                    </div>
                    <div class="mb-3">
                        <label for="service_id" class="form-label">Service Name</label>
                        <select class="form-control form-select" id="service_id" name="service_id"
                            aria-label="Default select example">
                            <option disabled selected>Open this select service</option>
                            @foreach($services as $service)
                            <option value="{{ $service->id }}" {{ $image->service_id == $service->id ? 'selected' : '' }} >
                            {{ $service->service_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" id="is_main" name="is_main" value="1" {{ $image->is_main == 1 ? 'checked' : ''}} >
                        <label for="is_main"> have you set this image for main image?</label>
                    </div>
                    <button type="update" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>