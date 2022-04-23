@extends('layouts.admin')
@section('pagetitle','images')
@section('content')
  <section class="section">
      <div class="row">
          <div class="col-lg-12">

              <div class="card">
                  <div class="card-body">
                      <div class="row mt-3">
                          <div class="col-12 text-center">
                              <h3 class="text-uppercase">Add Images</h3>
                          </div>
                          {{--<div class="col-6 d-flex flex-row-reverse">
                              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#createModal">
                                  <i class="bi bi-plus"></i>
                              </button>
                              <!-- Create Modal -->
                              <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                  aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Add New Images</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                  aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                              <form action="{{ route('image.store') }}" method="post"
                                                  enctype="multpart/form-data">
                                                  @csrf
                                                  <div class="mb-3">
                                                      <label for="service_id" class="form-label">Service Name</label>
                                                      <select class="form-control form-select" id="service_id"
                                                          name="service_id" aria-label="Default select example">
                                                          <option selected>Open this select service</option>
                                                          @foreach($services as $service)
                                                          <option value="{{ $service->id }}">
                                                              {{ $service->service_name }}</option>
                                                          @endforeach
                                                      </select>
                                                      <label for="image">Service Image</label>
                                                      <input type="file" name="image" class="form-control" multiple=""
                                                          id="image">
                                                      @error('image')
                                                      <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                  </div>
                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                              </form>
                                          </div>
                                          <div class="modal-footer">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>--}}
                          <div class="col-12">
                              @if(session()->get('success'))
                              <div class="alert alert-success">
                                  {{ session()->get('success') }}
                              </div>
                              @endif

                              @if(session()->get('error'))
                              <div class="alert alert-danger">
                                  {{ session()->get('error') }}
                              </div>
                              @endif
                          </div>
                          <div class="col-md-6 offset-md-3">
                            <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="service_id" class="form-label">Service Name</label>
                                    <select class="form-control form-select" id="service_id" name="service_id"
                                        aria-label="Default select example">
                                        <option selected>Open this select service</option>
                                        @if(isset($service_id))
                                            @foreach($services as $service)
                                            <option value="{{ $service->id }}" {{($service->id == $service_id)? 'selected':''}} >{{ $service->service_name }}</option>
                                            @endforeach
                                        @else
                                            @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <label for="image">Service Image</label>
                                    <input type="file" name="image[]" class="form-control" multiple>
                                    @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-ad">Submit</button>
                            </form>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </section>
  <section class="section mb-5">
      <div class="row">
          <div class="col-lg-12">

              <div class="card">
                  <div class="card-body">
                      <div class="row mt-3">
                          <div class="col-12 text-center">
                              <h3 class="text-uppercase">Images</h3>
                          </div>
                          <div class="col-12">
                              <div class="row">
                                    @foreach($images as $image)
                                    <div class="col-md-3 col-sm-6 pt-1 ps-1">
                                        @if($image -> is_main == 1)
                                        <div class="card" style="background-color: #5968f3 !important; border:5px solid #5968f3; border-bottom: 0px;">
                                        @else
                                        <div class="card" style="background-color: #8994f7 !important; border:5px solid #8994f7; border-bottom: 0px;">
                                        @endif
                                            <img src="{{asset($image->image)}}" alt="itirepaire" height="250px">
                                            <div class="row my-1 me-2 justify-content-end">
                                                <div class="col-5 text-end">
                                                  <div class="btn-group">
                                                    <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{$image->id}}"><i class="bi bi-pencil-fill"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$image->id}}" ><i class="bi bi-trash"></i></a>
                                                  </div>
                                                </div>
                                            </div>
                                            @include('db_images.edit')
                                            @include('db_images.delete')
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </section>
{{-- $images->links() --}}
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