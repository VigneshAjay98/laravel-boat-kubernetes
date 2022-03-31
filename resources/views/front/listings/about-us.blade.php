@extends('layouts.front-layout')

@section('content')
      <!-- Page content-->
      <!-- Breadcrumb-->
      <div class="container mt-5 pt-5">
        <!-- Breadcrumb-->
        <nav class="mb-3 pt-md-4" aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
      </div>
      <!-- Page header-->
      <section class="container mb-5 pb-lg-5">
        <div class="row align-items-center justify-content-lg-start justify-content-center flex-lg-nowrap gy-4">
          <div class="col-lg-9"><img class="rounded-3" src="{{ asset('front/img/car-finder/about/hero-img.jpg') }}" alt="Hero image"></div>
          <div class="col-lg-4 ms-lg-n5 col-sm-9 text-lg-start text-center">
            <div class="ms-lg-n5 pe-xl-5">
              <h1 class="mb-lg-4 text-dark">About us</h1>
              <p class="mb-4 pb-lg-3 fs-lg text-dark opacity-70">We believe that car buying and selling should be straight-forward and enjoyable, not time-consuming, complicated or stressful.</p><a class="btn btn-lg btn-primary w-sm-auto w-100" href="car-finder-catalog-list.html"><i class="fi-search me-2"></i>Search car</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Features-->
      <section class="container mb-5 pb-lg-5">
        <h2 class="mb-4 pb-2 text-dark text-center">We are new and growing fast</h2>
        <!-- Features carousel-->
        <div class="tns-carousel-wrapper tns-nav-outside tns-carousel-dark">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 3, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16, &quot;controls&quot;: false},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;900&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;gutter&quot;: 24}}}">
            <!-- Feature item-->
            <div>
              <div class="card card-dark card-hover h-100">
                <div class="card-body icon-box text-center">
                  <div class="icon-box-media bg-dark text-dark mx-auto mb-3 d-inline-flex align-items-center justify-content-center" style="width: 4.5rem; height: 4.5rem;"><img src="{{ asset('front/img/car-finder/icons/car.svg') }}" alt="Car icon"></div>
                  <h4 class="card-title">~ 1 mln cars</h4>
                  <p class="card-text fs-sm opacity-70">Fringilla vivamus arcu faucibus malesuada. Dui aenean suspendisse a aliquet id gravida ut. Lorem lacinia sed mauris erat at nisl.</p>
                </div>
              </div>
            </div>
            <!-- Feature item-->
            <div>
              <div class="card card-dark card-hover h-100">
                <div class="card-body icon-box text-center">
                  <div class="icon-box-media bg-dark text-dark mx-auto mb-3 d-inline-flex align-items-center justify-content-center" style="width: 4.5rem; height: 4.5rem;"><img src="{{ asset('front/img/car-finder/icons/building.svg') }}" alt="Building icon"></div>
                  <h4 class="card-title">5 subsidiaries</h4>
                  <p class="card-text fs-sm opacity-70">Porttitor bibendum pharetra volutpat est. Vitae tortor magna gravida non lacus. Arcu auctor malesuada dui congue.</p>
                </div>
              </div>
            </div>
            <!-- Feature item-->
            <div>
              <div class="card card-dark card-hover h-100">
                <div class="card-body icon-box text-center">
                  <div class="icon-box-media bg-dark text-dark mx-auto mb-3 d-inline-flex align-items-center justify-content-center" style="width: 4.5rem; height: 4.5rem;"><img src="{{ asset('front/img/car-finder/icons/flag.svg') }}" alt="Flag icon"></div>
                  <h4 class="card-title">8 countries</h4>
                  <p class="card-text fs-sm opacity-70">Duis tortor, vel nisi, leo vulputate sed quis. Ultrices arcu, amet aliquam id massa egestas ut. Dui, sed risus cursus magna dolor.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Story steps-->
      <section class="container mb-5 pb-lg-5 pb-3 pb-sm-4">
        <h2 class="mb-4 pb-2 text-dark text-center">Our story</h2>
        <div class="mx-auto" style="max-width: 864px;">
          <div class="steps steps-dark steps-vertical">
            <div class="step">
              <div class="step-progress"><span class="step-progress-end"></span><span class="step-number bg-primary shadow-hover">1</span></div>
              <div class="step-label">
                <h3 class="h5 mb-2 pb-1 text-dark">2017</h3>
                <p class="mb-0">Odio velit, massa augue etiam in parturient volutpat orci. Pulvinar amet, at est ac curabitur mauris, semper cursus metus. Imperdiet sed massa amet at turpis. Dis risus, donec in ac ultricies tempor eu, amet.</p>
              </div>
            </div>
            <div class="step">
              <div class="step-progress"><span class="step-progress-end"></span><span class="step-number bg-primary shadow-hover">2</span></div>
              <div class="step-label">
                <h3 class="h5 mb-2 pb-1 text-dark">2018</h3>
                <p class="mb-0">Vitae erat ornare facilisi id sollicitudin turpis tempus, semper. Velit integer et volutpat, a. Massa ut amet amet, vitae nunc nulla sed.</p>
              </div>
            </div>
            <div class="step">
              <div class="step-progress"><span class="step-progress-end"></span><span class="step-number bg-primary shadow-hover">3</span></div>
              <div class="step-label">
                <h3 class="h5 mb-2 pb-1 text-dark">2020</h3>
                <p class="mb-0">Ut mattis nascetur aliquam neque velit nunc sed. Morbi congue mauris amet ultrices molestie tellus proin odio diam. Feugiat elit, habitasse egestas egestas id nec potenti. Donec convallis donec tristique mattis et viverra.</p>
              </div>
            </div>
            <div class="step">
              <div class="step-progress"><span class="step-progress-end"></span><span class="step-number bg-primary shadow-hover">4</span></div>
              <div class="step-label">
                <h3 class="h5 mb-2 pb-1 text-dark">2021</h3>
                <p class="mb-0">Tempor nullam pellentesque suspendisse nec. Arcu sagittis sed ut diam in ultrices. Leo lacinia feugiat interdum pellentesque nulla vitae duis.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Personalized search-->
      <section class="container mb-5 pb-lg-5 pb-2 pb-sm-3">
        <div class="row gy-4 align-items-lg-center">
          <div class="col-md-6"><img class="rounded-3" src="{{ asset('front/img/car-finder/about/01.jpg') }}" alt="Personalized search"></div>
          <div class="col-lg-5 offset-lg-1 col-md-6 text-md-start text-center">
            <h2 class="mb-md-4 text-dark">Personalized search</h2>
            <p class="mb-4 pb-md-3 text-dark opacity-70">Ante senectus sed at lacus. Sed pellentesque dapibus nunc, cursus hendrerit at faucibus ornare lectus. Sed vitae congue mauris consectetur. Cursus tristique et porta eget sapien vivamus turpis. Ultrices vitae eget mattis varius ipsum adipiscing id. Neque, sagittis cursus aliquam volutpat tristique viverra amet amet.</p><a class="btn btn-primary w-sm-auto w-100" href="car-finder-catalog-grid.html"><i class="fi-search me-2"></i>Search car</a>
          </div>
        </div>
      </section>
      <!-- Attractive selling conditions-->
      <section class="container mb-5 pb-lg-5 pb-2 pb-sm-3">
        <div class="row gy-4 align-items-lg-center">
          <div class="col-lg-5 col-md-6 order-md-1 order-2 text-md-start text-center">
            <h2 class="mb-md-4 text-dark">Attractive selling conditions</h2>
            <p class="mb-4 pb-md-3 text-dark opacity-70">In risus quam diam urna, pretium at. Platea nulla malesuada elit, enim lacus quam. Rhoncus, tincidunt mauris quis fames in. A egestas sem quisque urna et imperdiet. Blandit dolor diam urna amet semper elementum ipsum et. Nulla mi ipsum quis et id tempor amet.</p><a class="btn btn-primary w-sm-auto w-100" href="car-finder-sell-car.html"><i class="fi-plus me-2"></i>Sell car</a>
          </div>
          <div class="col-md-6 offset-lg-1 order-md-2 order-1"><img class="rounded-3" src="{{ asset('front/img/car-finder/about/02.jpg') }}" alt="Attractive selling conditions"></div>
        </div>
      </section>
      <!-- Our partners (carousel)-->
      <section class="container mb-5 pb-lg-5 pb-2 pb-sm-3">
        <h2 class="mb-4 pb-2 text-center text-dark">Our partners</h2>
        <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 6, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;500&quot;:{&quot;items&quot;:4}, &quot;992&quot;:{&quot;items&quot;:5, &quot;gutter&quot;: 16}, &quot;1200&quot;:{&quot;items&quot;:6, &quot;gutter&quot;: 24}}}">
            <div><a class="opacity-40 opacity-transition" href="#"><img class="swap-to" src="{{ asset('front/img/car-finder/brands/provert.svg') }}" alt="Logo" width="196"></a></div>
            <div><a class="opacity-40 opacity-transition" href="#"><img class="swap-to" src="{{ asset('front/img/car-finder/brands/pentel.svg') }}" alt="Logo" width="196"></a></div>
            <div><a class="opacity-40 opacity-transition" href="#"><img class="swap-to" src="{{ asset('front/img/car-finder/brands/chase.svg') }}" alt="Logo" width="196"></a></div>
            <div><a class="opacity-40 opacity-transition" href="#"><img class="swap-to" src="{{ asset('front/img/car-finder/brands/real-seguros.svg') }}" alt="Logo" width="196"></a></div>
            <div><a class="opacity-40 opacity-transition" href="#"><img class="swap-to" src="{{ asset('front/img/car-finder/brands/build.svg') }}" alt="Logo" width="196"></a></div>
            <div><a class="opacity-40 opacity-transition" href="#"><img class="swap-to" src="{{ asset('front/img/car-finder/brands/cargil.svg') }}" alt="Logo" width="196"></a></div>
          </div>
        </div>
      </section>
      <!-- FAQ-->
      <section class="container mb-5 pb-2 pb-lg-5">
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <div class="d-flex flex-column text-md-start text-center">
              <div class="order-md-1 order-2 mx-md-0 mx-auto mb-md-5 mb-4" style="max-width: 416px;">
                <h2 class="mb-md-3 mb-2 text-dark">FAQs</h2>
                <p class="mb-4 pb-md-2 text-dark opacity-70">Have you any questions about an buying or selling car? Check out Help Center for all the details.</p><a class="btn btn-primary w-sm-auto w-100" href="car-finder-help-center.html">Help center<i class="fi-chevron-right ms-2"></i></a>
              </div>
              <div class="order-md-2 order-1"><img src="{{ asset('front/img/car-finder/about/03.png') }}" alt="FAQs"></div>
            </div>
          </div>
          <!-- Accordion-->
          <div class="col-md-6 offset-lg-1">
            <div class="accordion accordion-dark" id="accordionFAQ">
              <!-- Acordion item-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">How much does it cost to sell a car on Finder?</button>
                </h2>
                <div class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFAQ" id="collapse-1">
                  <div class="accordion-body text-dark opacity-70">Eum, quaerat. Corporis pariatur cum dolorem ullam at nulla ex doloribus, ratione quos repellendus aliquid aspernatur obcaecati adipisci maxime id, sed cupiditate.</div>
                </div>
              </div>
              <!-- Accordion item-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">How do I take the best pictures of my car?</button>
                </h2>
                <div class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFAQ" id="collapse-2">
                  <div class="accordion-body text-dark opacity-70">Eros aliquam egestas eu sit faucibus facilisi urna, senectus id. Morbi pellentesque at molestie et. Et molestie nunc massa, donec eget viverra. Sodales nisl vitae gravida pretium enim cursus pharetra massa nisl. Auctor porta dolor nulla elementum malesuada ut etiam neque, enim.</div>
                </div>
              </div>
              <!-- Accordion item-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Can I sell a vehicle if I live outside of the United States?</button>
                </h2>
                <div class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFAQ" id="collapse-3">
                  <div class="accordion-body text-dark opacity-70">Libero ut accusantium ea a ipsa, aliquam nemo aperiam porro deserunt aspernatur sequi amet voluptatibus, fugiat nobis. Atque voluptatibus quibusdam placeat voluptas.</div>
                </div>
              </div>
              <!-- Accordion item-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">How does the buyer get in contact with me and make payment?</button>
                </h2>
                <div class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFAQ" id="collapse-4">
                  <div class="accordion-body text-dark opacity-70">Numquam eaque rerum repellat nisi? Sint, dolorum consequuntur! Provident, voluptate maiores dolorum similique ipsam asperiores quos assumenda hic ad omnis cumque nesciunt.</div>
                </div>
              </div>
              <!-- Accordion item-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">Who writes the listing description for my car?</button>
                </h2>
                <div class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFAQ" id="collapse-5">
                  <div class="accordion-body text-dark opacity-70">Harum temporibus perferendis quam quae, delectus, nulla maiores reiciendis, suscipit obcaecati iure odit illo ea vero. Eveniet minima inventore ratione et voluptatum. Sunt non quod culpa perferendis animi rerum dolorum, perspiciatis aliquam?</div>
                </div>
              </div>
              <!-- Accordion item-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-6">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">Are there rules to follow in the comments?</button>
                </h2>
                <div class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionFAQ" id="collapse-6">
                  <div class="accordion-body text-dark opacity-70">Fugit facilis tempore consequatur molestiae sapiente. Sit veritatis itaque temporibus illo nisi, in soluta corporis commodi nobis reiciendis laudantium hic facere nostrum provident voluptas perspiciatis, debitis ipsa accusamus aliquid quam iure tempore magni, ratione dignissimos. Minima, a.</div>
                </div>
              </div>
              <!-- Accordion item-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-7">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">What currency does Finder use?</button>
                </h2>
                <div class="accordion-collapse collapse" aria-labelledby="heading-7" data-bs-parent="#accordionFAQ" id="collapse-7">
                  <div class="accordion-body text-dark opacity-70">Soluta ea deleniti eaque iusto officiis, at a molestiae ipsum qui pariatur quam, eum consectetur quaerat. Tempora et aut dolorum. Mollitia natus neque veniam consectetur magni asperiores?</div>
                </div>
              </div>
              <!-- Accordion item-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-8">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">How do I contact a seller privately?</button>
                </h2>
                <div class="accordion-collapse collapse" aria-labelledby="heading-8" data-bs-parent="#accordionFAQ" id="collapse-8">
                  <div class="accordion-body text-dark opacity-70">Sint labore eaque ad, nostrum quod omnis natus? Consectetur beatae ratione, voluptatem atque iste, fuga ullam nisi soluta dolorem assumenda excepturi! Repellendus, similique atque ratione accusantium fugiat quidem eum quia quam, nulla eaque necessitatibus vitae. Doloremque recusandae aperiam dicta odio modi in fuga iure, itaque quos excepturi.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest news (Blog)-->
      <section class="container pb-4 pb-sm-5 mb-2 mb-md-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-sm-2">
          <h2 class="h3 text-dark mb-2 mb-sm-0">Latest news</h2><a class="btn btn-link btn-dark fw-normal px-0" href="car-finder-blog.html">Go to blog<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></a>
        </div>
        <div class="tns-carousel-wrapper tns-nav-outside tns-carousel-dark">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 3, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;900&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;gutter&quot;: 24}}}">
            <div>
              <article><a class="d-block rounded-3 overflow-hidden" href="car-finder-blog-single.html"><img class="d-block" src="{{ asset('front/img/car-finder/blog/04.jpg') }}" alt="Image"></a>
                <div class="py-3"><a class="fs-xs text-uppercase text-decoration-none" href="#">Events</a>
                  <h3 class="text-dark fs-base pt-1"><a class="nav-link" href="car-finder-blog-single.html">Top 10 Classic Car Events</a></h3><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="{{ asset('front/img/avatars/08.jpg') }}" width="44" alt="Avatar">
                    <div class="ps-2">
                      <h6 class="fs-sm text-dark lh-base mb-1">Jacob Jones</h6>
                      <div class="d-flex fs-xs text-dark opacity-60"><span class="me-2 pe-1"><i class="fi-calendar-alt me-1"></i>May 8</span><span><i class="fi-chat-circle me-1"></i>No comments</span></div>
                    </div></a>
                </div>
              </article>
            </div>
            <div>
              <article><a class="d-block rounded-3 overflow-hidden" href="car-finder-blog-single.html"><img class="d-block" src="{{ asset('front/img/car-finder/blog/05.jpg') }}" alt="Image"></a>
                <div class="py-3"><a class="fs-xs text-uppercase text-decoration-none" href="#">Inspiration</a>
                  <h3 class="text-dark fs-base pt-1"><a class="nav-link" href="car-finder-blog-single.html">5 Predictions From the Past About the Future</a></h3><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="{{ asset('front/img/avatars/09.jpg') }}" width="44" alt="Avatar">
                    <div class="ps-2">
                      <h6 class="fs-sm text-dark lh-base mb-1">Guy Hawkins</h6>
                      <div class="d-flex fs-xs text-dark opacity-60"><span class="me-2 pe-1"><i class="fi-calendar-alt me-1"></i>Apr 25</span><span><i class="fi-chat-circle me-1"></i>6 comments</span></div>
                    </div></a>
                </div>
              </article>
            </div>
            <div>
              <article><a class="d-block rounded-3 overflow-hidden" href="car-finder-blog-single.html"><img class="d-block" src="{{ asset('front/img/car-finder/blog/06.jpg') }}" alt="Image"></a>
                <div class="py-3"><a class="fs-xs text-uppercase text-decoration-none" href="#">Test Drives</a>
                  <h3 class="text-dark fs-base pt-1"><a class="nav-link" href="car-finder-blog-single.html">This Year is All About New Harley Davidson</a></h3><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="{{ asset('front/img/avatars/12.jpg') }}" width="44" alt="Avatar">
                    <div class="ps-2">
                      <h6 class="fs-sm text-dark lh-base mb-1">Ralph Edwards</h6>
                      <div class="d-flex fs-xs text-dark opacity-60"><span class="me-2 pe-1"><i class="fi-calendar-alt me-1"></i>Mar 12</span><span><i class="fi-chat-circle me-1"></i>2 comments</span></div>
                    </div></a>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
@endsection
