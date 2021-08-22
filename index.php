<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <!--Bootstarp CDN-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <!--owl Carousel CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
    integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--font awesome cdn-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--Custom CSS file-->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!--start #header-->
  <header id="header">
    <div class="strip d-flex justify-content-between px-4 py-i bg-light">
      <p class="font-rale font-size-12 text-black-50 m-0">
        po-2280, Rayerbazar, Atharbari, Mymensingh, Dhaka
      </p>
      <div class="font-rale font-size-14">
        <a href="./signup.html" class="px-3 border-right text-dark">Sign-Up</a>
        <a href="#" class="px-3 border-right border-left text-dark">Login</a>
        <a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>
      </div>
    </div>

    <!--Primary Navigation-->

    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Gadget Grabber</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav m-auto font-rubik">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">On Sale</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Catagory</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Catagory <i class="fas fa-chevron-down"></i></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Comming Soon</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form action="#" class="font-size-14 font-rale">
            <a href="#" class="py-2 rounded-pill color-primary-bg">
              <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
              <span class="px-3 py-2 rounded-pill text-dark bg-light">
                0
              </span>
            </a>
          </form>
        </div>
      </div>
    </nav>

    <!--!Primary Navigation-->
  </header>

  <!--!start #header-->

  <!--start #main-site-->

  <main id="main-site">
    <!--Owl-carousel-->
    <section id="banner-area">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="./assets/banner-2.jpg" alt="Banner1" />
        </div>
        <div class="item">
          <img src="./assets/msi-banner-home-1200x500.png" alt="Banner2" />
        </div>
        <div class="item">
          <img src="./assets/Banner1.png" alt="Banner3" />
        </div>
      </div>
    </section>

    <!--!owl carousel-->

    <!--Top Sale-->
    <section id="top-sale">
      <div class="container py-5">
        <h4 class="font-rubik font-size-14">Top Sale</h4>
        <hr />
        <!---Owl Carousel-->
        <div class="owl-carousel owl-theme">
          <div class="item py-2">
            <div class="product font-rale">
              <a href="#"><img src="./assets/products/1.png" alt="product" class="img-fluid" /></a>
              <div class="text-center">
                <h6>Samsung Galaxy 10</h6>
                <div class="rating text-warning font-size-12">
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="far fa-star"></i> </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-rale">
              <a href="#"><img src="./assets/products/asus-x515ma-4-1000x1000.jpg" alt="product"
                  class="img-fluid" /></a>
              <div class="text-center">
                <h6>ASUS VIVOBOOK 15</h6>
                <div class="rating text-warning font-size-12">
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="far fa-star"></i> </span>
                </div>
                <div class="price py-2">
                  <span>$400</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-rale">
              <a href="#"><img src="./assets/products/apple-magic-keyboard-number-pad-1000x1000.jpg" alt="product"
                  class="img-fluid" /></a>
              <div class="text-center">
                <h6>APPLE MAGIC KEYBOARD</h6>
                <div class="rating text-warning font-size-12">
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="far fa-star"></i> </span>
                </div>
                <div class="price py-2">
                  <span>$400</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-rale">
              <a href="#"><img src="./assets/products/tp-link-archer-c5-v4--1000x1000.jpg" alt="product"
                  class="img-fluid" /></a>
              <div class="text-center">
                <h6>TP-LINK ARCHER C5</h6>
                <div class="rating text-warning font-size-12">
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="far fa-star"></i> </span>
                </div>
                <div class="price py-2">
                  <span>$400</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-rale">
              <a href="#"><img src="./assets/products/tp-link-archer-c5-v4--1000x1000.jpg" alt="product"
                  class="img-fluid" /></a>
              <div class="text-center">
                <h6>TP-LINK ARCHER C5</h6>
                <div class="rating text-warning font-size-12">
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="far fa-star"></i> </span>
                </div>
                <div class="price py-2">
                  <span>$400</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-rale">
              <a href="#"><img src="./assets/products/hp-15s-du1086tu-laptop-1000x1000.jpg" alt="product"
                  class="img-fluid" /></a>
              <div class="text-center">
                <h6>HP Laptop</h6>
                <div class="rating text-warning font-size-12">
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="fas fa-star"></i> </span>
                  <span> <i class="far fa-star"></i> </span>
                </div>
                <div class="price py-2">
                  <span>$400</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--!Top Sale-->

    <!--Special Price-->
    <section id="special-price">
      <div class="container">
        <h4 class="font-rubik font-size-20">Special Prices</h4>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
          <button class="btn is-checked" data-filter="*">All Brands</button>
          <button class="btn" data-filter=".Mobile">Mobile</button>
          <button class="btn" data-filter=".Laptop">Laptop</button>
          <button class="btn" data-filter=".Accessories">Accessories</button>
        </div>

        <div class="grid">
          <div class="grid-item Mobile border">
            <div class="item py-2" style="width: 200px">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/1.png" alt="product" class="img-fluid" /></a>
                <div class="text-center">
                  <h6>Samsung Galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="far fa-star"></i> </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Laptop border">
            <div class="item py-2" style="width: 200px">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/asus-x515ma-4-1000x1000.jpg" alt="product"
                    class="img-fluid" /></a>
                <div class="text-center">
                  <h6>Asus Laptop</h6>
                  <div class="rating text-warning font-size-12">
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="far fa-star"></i> </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Accessories border">
            <div class="item py-2" style="width: 200px">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/tp-link-archer-c5-v4--1000x1000.jpg" alt="product"
                    class="img-fluid" /></a>
                <div class="text-center">
                  <h6>TP-LINK ARCHER C5</h6>
                  <div class="rating text-warning font-size-12">
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="far fa-star"></i> </span>
                  </div>
                  <div class="price py-2">
                    <span>$400</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Laptop border">
            <div class="item py-2" style="width: 200px">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/hp-15s-du1086tu-laptop-1000x1000.jpg" alt="product"
                    class="img-fluid" /></a>
                <div class="text-center">
                  <h6>HP Laptop</h6>
                  <div class="rating text-warning font-size-12">
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="far fa-star"></i> </span>
                  </div>
                  <div class="price py-2">
                    <span>$400</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Mobile border">
            <div class="item py-2" style="width: 200px">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/2.png" alt="product" class="img-fluid" /></a>
                <div class="text-center">
                  <h6>Redmi Mobile</h6>
                  <div class="rating text-warning font-size-12">
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="far fa-star"></i> </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Mobile border">
            <div class="item py-2" style="width: 200px">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/3.png" alt="product" class="img-fluid" /></a>
                <div class="text-center">
                  <h6>Mi Mobile</h6>
                  <div class="rating text-warning font-size-12">
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="far fa-star"></i> </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Mobile border">
            <div class="item py-2" style="width: 200px">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/4.png" alt="product" class="img-fluid" /></a>
                <div class="text-center">
                  <h6>Mi Mobile</h6>
                  <div class="rating text-warning font-size-12">
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="far fa-star"></i> </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Mobile border">
            <div class="item py-2" style="width: 200px">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/4.png" alt="product" class="img-fluid" /></a>
                <div class="text-center">
                  <h6>Mi Mobile</h6>
                  <div class="rating text-warning font-size-12">
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="far fa-star"></i> </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Mobile border">
            <div class="item py-2" style="width: 200px">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/6.png" alt="product" class="img-fluid" /></a>
                <div class="text-center">
                  <h6>Mi Mobile</h6>
                  <div class="rating text-warning font-size-12">
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="far fa-star"></i> </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Mobile border">
            <div class="item py-2" style="width: 200px">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/5.png" alt="product" class="img-fluid" /></a>
                <div class="text-center">
                  <h6>Mi Mobile</h6>
                  <div class="rating text-warning font-size-12">
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="fas fa-star"></i> </span>
                    <span> <i class="far fa-star"></i> </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Banner Ads-->
    <section id="banner_adds"></section>
    <div class="container py-5 text-center">
      <img src="./assets/banner1-cr-500x150.jpg" alt="banner" class="img-fluid" />
      <img src="./assets/banner2-cr-500x150.jpg" alt="banner" class="img-fluid" />
    </div>

    <!--New Gadget-->
    <section id="new-phones">
      <div class="container">
        <h4 class="font-rubik font-size-20">New Phones</h4>
        <hr>

        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
          <div class="item py-2 bg-light">
            <div class="product font-rale">
              <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy 10</h6>
                <div class="rating text-warning font-size-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-rale">
              <a href="#"><img src="./assets/products/2.png" alt="product1" class="img-fluid"></a>
              <div class="text-center">
                <h6>Readme Note 7</h6>
                <div class="rating text-warning font-size-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-rale">
              <a href="#"><img src="./assets/products/3.png" alt="product1" class="img-fluid"></a>
              <div class="text-center">
                <h6>Readme Note 7</h6>
                <div class="rating text-warning font-size-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-rale">
              <a href="#"><img src="./assets/products/6.png" alt="product1" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy 10</h6>
                <div class="rating text-warning font-size-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-rale">
              <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
              <div class="text-center">
                <h6>Readme Note 7</h6>
                <div class="rating text-warning font-size-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-rale">
              <div class="d-flex flex-column">
                <a href="#"><img src="./assets/products/1.png" class="img-fluid" alt="pro1"></a>
                <div class="text-center">
                  <h6>Readme Note 7</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$122</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-rale">
              <div class="d-flex flex-column">
                <a href="#"><img src="./assets/products/2.png" class="img-fluid" alt="pro1"></a>
                <div class="text-center">
                  <h6>Readme Note 7</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$122</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- !owl carousel -->


      </div>
    </section>

    <!--!New Gadget-->


    <!-- Blogs -->
    <section id="blogs">
      <div class="container py-4">
        <h4 class="font-rubik font-size-20">Latest Blogs</h4>
        <hr>

        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="card border-0 font-rale mr-5" style="width: 18rem;">
              <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
              <img src="./assets/blog/blog1.jpg" alt="cart image" class="card-img-top">
              <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
              <a href="#" class="color-second text-left">Go somewhere</a>
            </div>
          </div>
          <div class="item">
            <div class="card border-0 font-rale mr-5" style="width: 18rem;">
              <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
              <img src="./assets/blog/blog2.jpg" alt="cart image" class="card-img-top">
              <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
              <a href="#" class="color-second text-left">Go somewhere</a>
            </div>
          </div>
          <div class="item">
            <div class="card border-0 font-rale mr-5" style="width: 18rem;">
              <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
              <img src="./assets/blog/blog3.jpg" alt="cart image" class="card-img-top">
              <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
              <a href="#" class="color-second text-left">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- !Blogs -->
  </main>

  <!--!start #main-->
  <!--start #footer-->
  <!--start #footer-->


  <footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-12">
          <h4 class="font-rubik font-size-20">Gadget Grabber</h4>
          <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Repellendus, deserunt.</p>
        </div>
        <div class="col-lg-4 col-12">
          <h4 class="font-rubik font-size-20">Newslatter</h4>
          <form class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Email *">
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
            </div>
          </form>
        </div>
        <div class="col-lg-2 col-12">
          <h4 class="font-rubik font-size-20">Information</h4>
          <div class="d-flex flex-column flex-wrap">
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
          </div>
        </div>
        <div class="col-lg-2 col-12">
          <h4 class="font-rubik font-size-20">Account</h4>
          <div class="d-flex flex-column flex-wrap">
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyright text-center bg-dark text-white py-2">
    <!-- <p class="font-rale font-size-14">&copy; Copyrights 2020. Desing By <a href="#" class="color-second">Daily Tuition</a></p> -->
  </div>

  </footer>

  <!--!start #footer-->

  <!--!start #footer-->

  <!------------------------>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>

  <!---------------------->

  <!--owl carosel js file-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!--isotop plugin cdn-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
    integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!--Custom Javascript-->
  <script src="./index.js"></script>
</body>

</html>
