@extends('layouts.app')

@section('content')
<div class="create-offer">
    <div class="form-container">
      <form action="{{ route("updateOffer", $offer->id) }}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf

        <div class="form-row">
          <h2>{{ __("messages.editOffer") }}</h2>
        </div>

        <div class="form-row">
          <div class="error-message">
            @if (Session::has("success"))
              <p>{{ Session::get("success"); }}</p>
            @endif
          </div>

          <div class="box-input">
            <div class="boximg">
              <img src="{{ asset("image/offers/" . $offer->file) }}" alt="">
            </div>
            <div class="error-messages">
              @error('file')
                <p>{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="box-input">
            <textarea name="name" id="" cols="30" rows="10" placeholder="{{ __("messages.fullname") }}">{{ old('name', $offer["name"]) }}</textarea>
            <div class="error-messages">
              @error('name')
                <p>{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="box-input">
            <input type="text" placeholder="{{ __("messages.excerpt") }}" name="excerpt" value="{{ old('excerpt', $offer["excerpt"]) }}"/>
            <div class="error-messages">
              @error('excerpt')
                <p>{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="box-input">
            <textarea name="details" id="" cols="30" rows="10" placeholder="{{ __("messages.descripation") }}">{{ old('details', $offer["details"]) }}</textarea>
            <div class="error-messages">
              @error('details')
                <p>{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="box-input">
            <input
              type="text"
              placeholder="{{ __("messages.price") }}"
              name="price"
              value="{{ old('price', $offer["price"]) }}"
            />
            <div class="error-messages">
              @error('price')
                <p>{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="box-input">
            <select name="category_id" id="category_id">
              <option disabled selected>Select Category</option>
              @foreach (\App\Models\Category::all() as $category)
              <option value="{{ $category->id }}" {{ old("category_id", $offer['category_id']) == $category->id ? 'selected' : '' }}>
                {{ ucwords($category->name) }}
              </option>
              @endforeach
            </select>

            <div class="error-messages">
              @error('category_id')
                <p>{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-row">
          <button type="submit" class="btn-form">
            {{ __("messages.updateOffer") }}
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection