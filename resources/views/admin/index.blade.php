@extends('admin.layouts.admin')

@section('admin-content')
    <section>
        <h2>Upload PDF</h2>
        <hr><br>
        <div>
            <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group w-75">
                    <label for="name">File Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                    <label for="file">Select PDF</label>
                    <input type="file" name="file" class="form-control" id="file">
                    @if ($errors->any())
                        <div>
                            @foreach ($errors->all() as $error)
                                <li class="text-danger d-flex justify-content-end">{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <div class="d-flex justify-content-end mt-2">
                        {{-- <button type="button" class="btn btn-primary m-2 preview" onclick="preview(this)">Preview</button> --}}
                        <button type="submit" class="btn btn-primary m-2">Upload</button>
                    </div>
                </div>
            </form>
        </div>

        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle gs-0 gy-3">
                <!--begin::Table head-->
                <thead>
                    <tr>
                        <th class="p-1 w-50px"><b>File Name</b></th>
                        <th class="p-1 w-50px"><b>Preview</b></th>
                        <th class="p-1 w-50px"><b>Delete</b></th>
                    </tr>
                </thead>

                <!--begin::Table body-->
                <tbody>
                    @foreach ($files as $file)
                        <tr>
                            <td class="p-1 w-50px">
                                <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $file->name }}</a>
                            </td>
                            <td class="p-1 w-50px">
                                <button class="btn btn-sm btn-primary preview" id="{{ $file->name }}" onclick="preview(this)">Preview</button>
                            </td>
                            <td class="p-1 w-50px">
                                <form action="{{ route('del', $file->id) }}" method="POST">
                                    @csrf

                                    <button type="submit" class="btn btn-icon btn-light btn-sm me-3 remove-account">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </section>

    <script>
        function preview(e) {
            if (e.getAttribute('id') != null) {
                data = {
                    name: e.getAttribute('id'),
                };

                fetch("{{ route('preview') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': "{{ csrf_token() }}",
                    },
                    body: JSON.stringify(data),
                }).then(function(response) {
                    return response.json();
                }).then(function(result) {
                    window.open(`https://localhost/2375/public/find?search=${result.name}`, "_newtab");
                });
            } else {

            }
        }
    </script>
@endsection
