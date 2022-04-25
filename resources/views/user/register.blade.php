@extends('layouts.app')

@section('content')
<div class="registration-form">
    <div class="form-container">
      <form action="{{ route("store") }}" method="post">
        @csrf

        <div class="form-row">
          <h2>join us</h2>
        </div>

        <div class="form-row">

          <div class="error-message">
            @if (session() -> has("user"))
              <p>{{ Session::get("success"); }}</p>
            @endif
          </div>

          <div class="box-input">
            <label for=""><i class="fas fa-user"></i></label>
            <input
              type="text"
              placeholder="fullname"
              autocomplete="of"
              name="name"
              value="{{ old('name') }}"
            />
            <div class="error-messages">
              @error('name')
                <p>{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="box-input">
            <label for=""><i class="fas fa-key"></i></label>
            <input type="text" placeholder="username" name="username" value="{{ old('username') }}" />
            <div class="error-messages">
              @error('username')
                <p>{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="box-input">
            <label for=""><i class="fas fa-key"></i></label>
            <input
              type="password"
              placeholder="password"
              name="password"
            />
            <div class="error-messages">
              @error('password')
                <p>{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-row">
          <button type="submit" class="btn-form">
            registration
          </button>
        </div>
      </form>
    </div>

    <div class="form-cover">
      <div class="box-img">
        <img src="{{ asset("image/03.svg") }}" alt="Illustrations for login" />
      </div>
    </div>
  </div>
@endsection