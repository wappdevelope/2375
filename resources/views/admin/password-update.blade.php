@extends('admin.layouts.admin')

@section('admin-content')
    <section>
        <h2>Update Password</h2>
        <hr>
        <div>
            <form action="{{ route('user-password.update') }}" method="POST">
                @csrf
                @method('PUT')

                <input type="hidden" name="email" value="{{ Auth::user()->email }}">

                <div class="form-group w-75">
                    <div class="row">
                        <div class="col-6">
                            <label for="CurrentPassword">Current Password</label>
                            <input type="password" name="current_password" class="form-control">
                            <label for="newPassword">New Password</label>
                            <input type="password" name="password" class="form-control mb-2">
                            <label for="ConfirmNewPassword">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control mb-2">
                        </div>
                    </div>

                    @if ($errors->any())
                        <div>
                            @foreach ($errors->all() as $error)
                                <li class="text-danger d-flex">{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif

                    <div class="d-flex justify-content-between mt-2">
                        <button type="submit" class="btn btn-primary">Change</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
