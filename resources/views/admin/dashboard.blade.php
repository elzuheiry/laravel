@extends('layouts.app')

@section('content')
  <section class="section Offers">
    <div class="container">
      <div class="offer-header">
        <div class="offer-head">
          <h2>{{ __("messages.allOffers") }}</h2>
        </div>
        <div class="error-message">
          @if (Session::has("success"))
          <p>{{ Session::get("success") }}</p>
          @endif
        </div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NUMBER</th>
            <th scope="col">{{ __("messages.fullname") }}</th>
            <th scope="col">{{ __("messages.excerpt") }}</th>
            <th scope="col">{{ __("messages.price") }}</th>
            <th scope="col">{{ __("messages.descripation") }}</th>
            <th scope="col">{{ __("messages.picture") }}</th>
            <th scope="col">Onther Details</th>
          </tr>
        </thead>
        <tbody>
        @foreach (\App\Models\Offer::all() as $offer)
          <tr>
            <th scope="row">{{ $offer["id"] }}</th>
            <td>{{ $offer["name"] }}</td>
            <td>{{ $offer["excerpt"] }}</td>
            <td>{{ $offer["price"] }}</td>
            <td>{{ $offer["details"] }}</td>
            <td><img src="{{ asset("image/offers/" . $offer["file"]) }}" alt=""></td>
            <td> 
              <a href="{{ route("edit", $offer["id"]) }}" target="_blank" class="button">{{ __("messages.editOffer") }}</a>
              <a href="{{ route("delete", $offer["id"]) }}" class="btnDele">{{ __("messages.deleteOffer") }}</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </section>
@endsection