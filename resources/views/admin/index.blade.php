@extends('admin.layouts.admin')

@section('admin-content')
    <section>
        <h2>Upload PDF</h2>
        <hr><br>
        <div>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group w-75">
                    <label for="theme">Select PDF</label>
                    <input type="file" name="file" class="form-control" id="file">
                    @if ($errors->any())
                        <div>
                            @foreach ($errors->all() as $error)
                                <li class="text-danger d-flex justify-content-end">{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <div class="d-flex justify-content-end mt-2">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
