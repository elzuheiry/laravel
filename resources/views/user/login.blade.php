@extends('layouts.app')

@section('content')
<div class="login-form">
    <div class="form-container">
      <form action="{{ route("signIn") }}" method="post">
        @csrf

        <div class="form-row">
          <h2>Welcome back</h2>
        </div>

        <div class="form-row">

          <div class="error-message">
            @if (Session::has("errorMessage"))
            <p>{{ Session::get("errorMessage") }}</p>
            @endif
          </div>

          <div class="box-input">
            <label for=""><i class="fas fa-user"></i></label>
            <input
              type="text"
              placeholder="username"
              autocomplete="of"
              name="username"
              value="{{ old("username") }}"
            />
            <div class="error-messages">
              @error('username')
                <p>{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="box-input">
            <label for=""><i class="fas fa-key"></i></label>
            <input type="password" placeholder="Password" name="password" />
            <div class="error-messages">
              @error('password')
                <p>{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-row">
          <button type="submit" class="btn-form">log in</button>
        </div>
      </form>
    </div>

    <div class="form-cover">
      <div class="box-img">
        <img src="{{ asset("image/02.svg") }}" alt="Illustrations for login" />
      </div>
    </div>
  </div>
@endsection