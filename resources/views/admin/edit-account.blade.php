@extends('admin.layouts.admin')

@section('admin-content')
    <section>
        <h2>Edit Account</h2>
        <hr>
        <div>
            <form action="{{ route('user-profile-information.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group w-75">
                    <div class="row">
                        <div class="col-6">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                        </div>
                        <div class="col-6">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control mb-2" value="{{ $user->email }}">
                        </div>
                    </div>

                    @if ($errors->any())
                        <div>
                            @foreach ($errors->all() as $error)
                                <li class="text-danger d-flex justify-content-end">{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <div class="d-flex justify-content-between mt-2">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
