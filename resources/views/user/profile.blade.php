@extends('layouts.app')

@section('content')
<section class="section about">
    <div class="about-container">
      <div class="about-details">
        <h2>Full Name : {{ auth()->user()->name }}</h2>
        <div class="about-paragraph">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
            ipsam quisquam animi sint in sequi harum sed, consequatur
            inventore mollitia esse. Similique adipisci quis saepe veniam nemo
            harum, dolore sequi. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Soluta ducimus molestias nulla, harum fugit,
            blanditiis quam velit ex beatae vitae commodi aperiam eum expedita
            atque laboriosam facilis itaque amet laudantium!
          </p>
        </div>

        <h2>UserName : {{ auth()->user()->username }}</h2>
        <div class="about-paragraph">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
            ipsam quisquam animi sint in sequi harum sed, consequatur
            inventore mollitia esse. Similique adipisci quis saepe veniam nemo
            harum, dolore sequi. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Soluta ducimus molestias nulla, harum fugit,
            blanditiis quam velit ex beatae vitae commodi aperiam eum expedita
            atque laboriosam facilis itaque amet laudantium!
          </p>
        </div>
      </div>

      <div class="about-cover">
        <div class="box-cover">
          <div class="box-img">
            <img src="{{ asset("image/") }}" alt="User" />
          </div>

          <div class="box-head">
            <h2>{{ auth()->user()->name }}</h2>
          </div>

          <div class="box-details">
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Numquam illum quibusdam rem sequi laboriosam aspernatur nisi
              odit voluptatibus
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection