@extends('layouts.app')

@section('content')
  <section class="section search">
    <div class="search-container">
      <div class="box-search">
        <form action="" method="get">
          <input
            type="text"
            placeholder="{{ __("messages.search") }}"
            name="search"
          />
          <button type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>
  </section>

  <section class="section home">
    <div class="home-container">
      <div class="owl-carousel owl-theme home-content">
        <div class="item">
          <div class="item-container">
            <div class="box-img">
              <img src="{{ asset("image/home/001.jpg") }}" alt="" />
            </div>

            <div class="item-details">
              <h1>Lorem ipsum dolor</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Labore nulla quisquam modi nemo obcaecati in.
              </p>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="item-container">
            <div class="box-img">
              <img src="{{ asset("image/home/002.jpg") }}" alt="" />
            </div>

            <div class="item-details">
              <h1>Labore nulla quisquam</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Labore nulla quisquam modi nemo obcaecati in.
              </p>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="item-container">
            <div class="box-img">
              <img src="{{ asset("image/home/003.jpg") }}" alt="" />
            </div>

            <div class="item-details">
              <h1>quisquam modi nemo</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Labore nulla quisquam modi nemo obcaecati in.
              </p>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="item-container">
            <div class="box-img">
              <img src="{{ asset("image/home/004.jpg") }}" alt="" />
            </div>

            <div class="item-details">
              <h1>adipisicing elit.</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Labore nulla quisquam modi nemo obcaecati in.
              </p>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="item-container">
            <div class="box-img">
              <img src="{{ asset("image/home/005.jpg") }}" alt="" />
            </div>

            <div class="item-details">
              <h1>amet consectetur</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Labore nulla quisquam modi nemo obcaecati in.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section work">
    <div class="work-container">
      <div class="work-data">
        <div class="work-head">
          <h2>Lorem ipsum dolor sit amet</h2>
        </div>
        <div class="work-paragraph">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel
            incidunt dolorem dolor quia minus magnam numquam voluptas
            inventore tenetur nobis! Officia, perferendis. Temporibus aut et
            inventore itaque fugiat accusamus vero?
          </p>
        </div>
      </div>

      <div class="owl-carousel owl-theme work-slider">
        <div class="item">
          <div class="box-img">
            <img src="{{ asset("image/home/001.jpg") }}" alt="" />
          </div>
          <div class="box-data">
            <h2>Lorem ipsum dolor</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel
              incidunt dolorem dolor quia minus magnam numquam
            </p>
          </div>
        </div>

        <div class="item">
          <div class="box-img">
            <img src="{{ asset("image/home/002.jpg") }}" alt="" />
          </div>
          <div class="box-data">
            <h2>Lorem ipsum dolor</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel
              incidunt dolorem dolor quia minus magnam numquam
            </p>
          </div>
        </div>

        <div class="item">
          <div class="box-img">
            <img src="{{ asset("image/home/003.jpg") }}" alt="" />
          </div>
          <div class="box-data">
            <h2>Lorem ipsum dolor</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel
              incidunt dolorem dolor quia minus magnam numquam
            </p>
          </div>
        </div>

        <div class="item">
          <div class="box-img">
            <img src="{{ asset("image/home/004.jpg") }}" alt="" />
          </div>
          <div class="box-data">
            <h2>Lorem ipsum dolor</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel
              incidunt dolorem dolor quia minus magnam numquam
            </p>
          </div>
        </div>

        <div class="item">
          <div class="box-img">
            <img src="{{ asset("image/home/005.jpg") }}" alt="" />
          </div>
          <div class="box-data">
            <h2>Lorem ipsum dolor</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel
              incidunt dolorem dolor quia minus magnam numquam
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section products">
    <div class="products-header">
      <h2>{{ __("messages.our") }}</h2>
      <h2>{{ __("messages.products") }}</h2>
    </div>

    <div class="products-container">
      <div class="products-row">
        <div class="box-img">
          <div class="img">
            <img src="{{ asset("image/home/001.jpg") }}" alt="" />
          </div>
        </div>

        <div class="data-num flex-right">
          <span>01</span>
        </div>

        <div class="products-data">
          <div class="products-paragraph">
            <h3>Lorem ipsum dolor sit.</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In
              dolorum magni asperiores blanditiis similique cupiditate
              voluptatibus ab?
            </p>
          </div>
        </div>
      </div>
      <div class="products-row">
        <div class="products-data">
          <div class="products-paragraph">
            <h3>Lorem ipsum dolor sit.</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In
              dolorum magni asperiores blanditiis similique cupiditate
              voluptatibus ab?
            </p>
          </div>
        </div>

        <div class="data-num">
          <span>02</span>
        </div>

        <div class="box-img">
          <div class="img">
            <img src="{{ asset("image/home/002.jpg") }}" alt="" />
          </div>
        </div>
      </div>

      <div class="products-row">
        <div class="box-img">
          <div class="img">
            <img src="{{ asset("image/home/003.jpg") }}" alt="" />
          </div>
        </div>

        <div class="data-num flex-right">
          <span>03</span>
        </div>

        <div class="products-data">
          <div class="products-paragraph">
            <h3>Lorem ipsum dolor sit.</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In
              dolorum magni asperiores blanditiis similique cupiditate
              voluptatibus ab?
            </p>
          </div>
        </div>
      </div>

      <div class="products-row">
        <div class="products-data">
          <div class="products-paragraph">
            <h3>Lorem ipsum dolor sit.</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In
              dolorum magni asperiores blanditiis similique cupiditate
              voluptatibus ab?
            </p>
          </div>
        </div>

        <div class="data-num">
          <span>04</span>
        </div>

        <div class="box-img">
          <div class="img">
            <img src="{{ asset("image/home/004.jpg") }}" alt="" />
          </div>
        </div>
      </div>

      <div class="products-row">
        <div class="box-img">
          <div class="img">
            <img src="{{ asset("image/home/005.jpg") }}" alt="" />
          </div>
        </div>

        <div class="data-num flex-right">
          <span>05</span>
        </div>

        <div class="products-data">
          <div class="products-paragraph">
            <h3>Lorem ipsum dolor sit.</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In
              dolorum magni asperiores blanditiis similique cupiditate
              voluptatibus ab?
            </p>
          </div>
        </div>
      </div>

      <div class="products-row">
        <div class="products-data">
          <div class="products-paragraph">
            <h3>Lorem ipsum dolor sit.</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In
              dolorum magni asperiores blanditiis similique cupiditate
              voluptatibus ab?
            </p>
          </div>
        </div>

        <div class="data-num">
          <span>06</span>
        </div>

        <div class="box-img">
          <div class="img">
            <img src="{{ asset("image/home/001.jpg") }}" alt="" />
          </div>
        </div>
      </div>

      <div class="products-row">
        <div class="box-img">
          <div class="img">
            <img src="{{ asset("image/home/002.jpg") }}" alt="" />
          </div>
        </div>

        <div class="data-num flex-right">
          <span>07</span>
        </div>

        <div class="products-data">
          <div class="products-paragraph">
            <h3>Lorem ipsum dolor sit.</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In
              dolorum magni asperiores blanditiis similique cupiditate
              voluptatibus ab?
            </p>
          </div>
        </div>
      </div>

      <div class="products-row">
        <div class="products-data">
          <div class="products-paragraph">
            <h3>Lorem ipsum dolor sit.</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In
              dolorum magni asperiores blanditiis similique cupiditate
              voluptatibus ab?
            </p>
          </div>
        </div>

        <div class="data-num">
          <span>08</span>
        </div>

        <div class="box-img">
          <div class="img">
            <img src="{{ asset("image/home/003.jpg") }}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>    
@endsection
