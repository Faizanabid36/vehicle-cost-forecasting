<!DOCTYPE HTML>


<html>
  <head>
    <title>Vehicle and Cost Forecast System</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  </head>
  <body class="is-preload">

    <!-- Header -->
      <header id="header">
        <a class="logo" href="{{ route('home') }}">English Biscuits Manufacturer</a>
        <a class="logo" href="/manager">Manager</a>
      </header>

    <!-- Banner -->
      <section id="banner">
        <div class="inner">
          <h1>English Biscuits Manufacturers</h1>
          <p>Systemize your Vehicle and Cost Forecast System</p>
        </div>
        <video autoplay loop muted playsinline src="images/banner.mp4"></video>
      </section>

    <!-- Highlights -->
      <section class="wrapper">
        <div class="inner">
          <header class="special">
            <h2>Never Compromise on Quality</h2>
            <h3 class="text-white">The biscuit industry leader of the country, EBM is a household name across Pakistan.</h3>
          </header>
          <div class="">
            <div class="d-flex justify-content-center" style="margin-left: 75px">
              <div class="row col-md-12" >
                  <section>
                    <div>
                      <header >
                        <a style="margin:0px 0px 7.5px 40px" href="/factories" class="fas fa-industry fa-3x"></a>
                        <h3 class="text-white">Factories</h3>
                      </header>
                    </div>
                  </section >
                  <section>
                    <div>
                      <header>
                        <a style="margin:0px 0px 7.5px 60px" href="/warehouses" class="fas fa-warehouse fa-3x"></a>
                        <h3 class="text-white">Warehouses</h3>
                      </header>
                    </div>
                  </section >
                  <section>
                      <div>
                        <header>
                          <a style="margin:0px 0px 7.5px 30px" href="/vehicles" class="fas fa-truck fa-3x"></a>
                          <h3 class="text-white">Vehicles</h3>
                        </header>
                      </div>
                  </section>
                  <section>
                      <div>
                        <header>
                          <a style="margin:0px 0px 7.5px 40px" href="/production" class="fas fa-cart-plus fa-3x"></a>
                          <h3 class="text-white">Production</h3>
                        </header>
                      </div>
                  </section>
                  <section>
                      <div>
                        <header>
                          <a style="margin:0px 0px 7.5px 30px" href="/dispatch" class="fas fa-truck-loading fa-3x"></a>
                          <h3 class="text-white">Dispatch</h3>
                        </header>
                      </div>
                  </section>
                  <section>
                    <div>
                      <header>
                        <a style="margin:0px 0px 7.5px 35px" href="/products" class="fab fa-product-hunt fa-3x"></a>
                        <h3 class="text-white">Products</h3>
                      </header>
                    </div>
                  </section>
                  {{-- <section style="margin:30px 100px">
                      <a href="/factory_warehouse/create" style="margin:0px 0px 10px 225px" class="button wide text-white">Create A New Forecast</a>
                  </section> --}}
              </div>
            </div>
            <hr style="color: white; background-color: white">
            <div style="width: 70%;margin-left: 30px">
                <section style="margin-left:50px;" class="pull-left">
                     <h2 class="text-white"> Production this Month: {{ $data[0] }}
                     <h2 class="text-white"> Production in EBM: {{ $data[1] }}
                     <h2 class="text-white"> Production in CFL: {{ $data[2] }}
                </section>
                <section style="margin-left: 0px" class="">
                     <h2 class="text-white"> Production Stock {{ $data[4][0]->total_qty+$data[5][0]->total_qty }}
                     <h2 class="text-white"> Stock EBM: {{ $data[4][0]->total_qty }}
                     <h2 class="text-white"> Stock CFL: {{ $data[5][0]->total_qty }}
                </section>

                <section style="position: absolute;top:332px;left:850px" class="pull-right">
                     <h2 class="text-white"> Dispatched: {{ $data[3] }}
                     <h2 class="text-white"> From EBM: {{ $data[6]}}
                     <h2 class="text-white"> From CFL: {{ $data[7]}}
                </section>
            </div>
             
            <hr style="color: white; background-color: white">
            </div>
        </div>
      </section>

    <!-- CTA -->
      <section id="cta" class="wrapper">
        <div class="inner">
          <h2>Overview</h2>
          <p>EBM has embraced its ‘Never Compromise on Quality’ philosophy. It is the very reason which has led to Peek Freans Sooper becoming Pakistan’s No. 1 biscuit, as per Nielsen ranking. While EBM’s mission is to provide wholesome, hygienic food-between-meals across Pakistan and beyond, it is dedicated to do so in a manner which ensures the welfare and growth of society at large (people), the preservation of the environment (planet) and the pursuit of profitability in an ethical manner (profit): the triple-bottom-line approach which is achieved by a business growth model based on 3 Ps- People, Planet, Profit.</p>
        </div>
      </section>

    <!-- Testimonials -->
      <section class="wrapper">
        <div class="inner">
          <header class="special">
            <h2>About Us</h2>
            <p>English Biscuit Manufacturers (Private) Limited was established as a joint venture company in 1965 with the name of Peek Freans Pakistan Limited. In 1966, the UK sponsor company was renamed Associated Biscuits International Limited (ABIL), while the venture was renamed English Biscuit Manufacturers (Private) Limited (EBM), which stands to date.</p>
          </header>
        </div>
      </section>

    <!-- Footer -->
      <footer id="footer">
        <div class="inner">
          <div class="copyright">
            Copyright &copy 2019 English Biscuit Manufacturers (Private) Limited
          </div>
        </div>
      </footer>

    <!-- Scripts -->
      <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/js/browser.min.js') }}"></script>
      <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
      <script src="{{ asset('assets/js/util.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
      <script src="https://kit.fontawesome.com/c865066360.js"></script>

  </body>
</html>