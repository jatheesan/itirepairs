@extends('layouts.admin')
@section('pagetitle','Services')
@section('content')
<section class="section" style="margin-bottom: 50px;">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="row mt-3">
                  <div class="col-6">
                      <h3 class="">Services</h3>
                  </div>
                  <div class="col-6 d-flex flex-row-reverse">
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                      <i class="bi bi-plus"></i>
                    </button>
                    <!-- Create Modal -->
                    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create New Service</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="{{ route('service.store') }}" method="post" enctype="multpart/form-data">
                            @csrf
                              <div class="mb-3">
                                <label for="service_name" class="form-label">Service Name</label>
                                <input type="text" class="form-control" id="service_name" name="service_name" required autofocus>
                              </div>
                              <button type="submit" class="btn btn-ad">Submit</button>
                            </form>
                          </div>
                          <div class="modal-footer">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                  </div>
              </div>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @php $i = 0 @endphp
                    @foreach($services as $service)
                    <tr>
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{ $service->service_name }}</td>
                        <td>
                          <div class="btn-group">
                            <span title='disable for edit'>
                              <a href="#" class="btn btn-ad" data-bs-toggle="modal" data-bs-target="#editModal{{$service->id}}"  style="pointer-events: none"><i class="bi bi-pencil-fill"></i></a>
                            </span>
                            @include('db_services.edit')
                            <span title='disable for delete'>
                              <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$service->id}}"  style="pointer-events: none"><i class="bi bi-trash"></i></a>
                            </span>
                            @include('db_services.delete')
                          </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
{{ $services->links() }}
@endsection

@section('scripts')
@parent

@if(session()->get('edit'))
    <script>
        $(function() {
            $('#exampleModal').modal({
                show: true
            });
        });
    </script>
@endif

@endsection