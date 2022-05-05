@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            {{-- begin first name --}}
                            <div class="row mb-3">
                                <label for="fname"
                                    class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                                <div class="col-md-6">
                                    <input id="fname" type="text" class="form-control" name="fname"
                                        value="{{ old('fname') }}" autocomplete="fname" autofocus>
                                </div>
                            </div>
                            {{-- end first name --}}
                            {{-- begin last name --}}
                            <div class="row mb-3">
                                <label for="lname"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="lname" type="text" class="form-control" name="lname"
                                        value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                                </div>
                            </div>
                            {{-- end last name --}}
                            {{-- begin Email --}}
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- end Email --}}
                            {{-- begin address --}}
                            <div class="row mb-3">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address"
                                        value="{{ old('address') }}" required autocomplete="address" autofocus>
                                </div>
                            </div>
                            {{-- end address --}}
                            {{-- begin phone --}}
                            <div class="row mb-3">
                                <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('phone') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="number" class="form-control" name="phone"
                                        value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                </div>
                            </div>
                            {{-- end phone --}}
                            {{-- begin password --}}
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- end password --}}
                            {{-- begin Cpassword --}}
                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            {{-- end Cpassword --}}
                            {{-- begin btn --}}
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            {{-- end btn --}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
