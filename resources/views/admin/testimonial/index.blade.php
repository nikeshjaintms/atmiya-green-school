@extends('admin.layouts.app')
{{-- @if(Auth::guard('admin')->check()) --}}
@section('title','Admin Panel')

{{-- @endif --}}

@section('content-page')

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Testimonials</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.testimonial.index')}}">Testimonials</a>
                    </li>

                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                        {{-- @can('create-brand') --}}
                        <a href="{{ route('admin.testimonial.create') }}" class=" float-end btn btn-sm btn-rounded btn-primary"><i class="fas fa-plus"></i> Testimonials</a>
                        {{-- @endcan --}}
                        <h4 class="card-title">Testimonials</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>Sr No</th>
                              <th>Name</th>
                                <th>Role</th>
                                <th>Message</th>
                                <th>Status</th>
                            <th>Action</th>

                            </tr>
                          </thead>
                          <tbody>
                            @forelse($testimonials as $index => $item)
                            <tr>
                              <td>{{ $index + 1 }}</td>
                              <td>{{$item->name }}</td>
                                <td>{{$item->role }}</td>
                                <td>{{$item->message }}</td>
                                <td>
                                    @if($item->status == 'active')
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                              <td>

                                    {{-- @can('view-brand') --}}
                                    <a href="{{ route('admin.testimonial.show', $item->id) }}" class="btn btn-lg btn-link btn-info">
                                      <i class="fa fa-eye">
                                    </i></a>
                                    {{-- @endcan --}}
                                  {{-- @can('edit-brand') --}}
                                <a href="{{ route('admin.testimonial.edit', $item->id) }}" class="btn btn-lg btn-link btn-primary">
                                  <i class="fa fa-edit">
                                </i></a>
                                  {{-- @endcan --}}
                                      {{-- @can('delete-brand') --}}
                                <button  onclick="deletetestimonial_info({{ $item->id }})" class="btn btn-link btn-danger">
                                  <i class="fa fa-trash">
                                </i>
                                </button>
                                      {{-- @endcan --}}
                              </td>
                            </tr>
                            @empty
                            <tr>
                              <td colspan="6" class="text-center">No data available</td>
                            </tr>
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    function deletetestimonial_info(id) {
        var url = '{{ route("admin.testimonial.delete", "id") }}'.replace("id", id);

        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id: id
                    },
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            Swal.fire(
                                'Deleted!',
                                'Testimonial has been deleted.',
                                'success'
                            ).then(() => {
                                window.location.reload();
                            });
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Failed to delete Testimonial.',
                                'error'
                            );
                        }
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Error!',
                            'An error occurred: ' + xhr.responseText,
                            'error'
                        );
                    }
                });
            }
        });
    }
</script>

@endsection



