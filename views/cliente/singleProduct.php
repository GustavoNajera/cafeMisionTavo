<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <?php include_once 'views/general/head.php' ?>
    <title>SINGLE PRODUCT</title>
    
    <body>       
        <div class="page">
          <main id="perspective" class="page-content">
            <div class="content-wrapper">
              <div class="page-header page-header-perspective">
                <div class="page-header-left"><a href="./" class="brand"><img src="public/images/logo-white-185x41.png" alt="" width="185" height="41"/></a></div>
                <div class="page-header-right">
                  <div class="booking-control"><a href="./shop" class="btn btn-xs btn-circle btn-primary">BUY NOW</a></div>
                  <div id="perspective-open-menu" data-custom-toggle=".perspective-menu-toggle" data-custom-toggle-hide-on-blur="true"><span class="perspective-menu-text">Menu</span>
                    <button class="perspective-menu-toggle"><span></span></button>
                  </div>
                </div>
              </div>
              <div id="wrapper">
                <section class="section-xl bg-periglacial-blue">
                  <div class="shell"><a href="./" class="link link-primary link-return">Back</a>
                    <article class="product-single">
                      <div class="product-single-left">
                        <div class="slick-carousel-product">
                          <!-- Slick Carousel-->
                          <div data-arrows="false" data-dots="false" data-loop="true" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel" class="slick-slider carousel-parent">
                            <div class="item"><img src="public/images/product-single-1-170x280.png" alt="" width="170" height="280"/>
                            </div>
                            <div class="item"><img src="public/images/product-single-2-170x280.png" alt="" width="170" height="280"/>
                            </div>
                            <div class="item"><img src="public/images/product-single-3-170x280.png" alt="" width="170" height="280"/>
                            </div>
                            <div class="item"><img src="public/images/product-single-4-170x280.png" alt="" width="170" height="280"/>
                            </div>
                          </div>
                          <div id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="true" data-items="3" data-xs-items="4" data-sm-items="3" data-md-items="4" data-lg-items="4" data-slide-to-scroll="1" class="slick-slider carousel-child">
                            <div class="item"><img src="public/images/product-single-1-170x280.png" alt="" width="170" height="280"/>
                            </div>
                            <div class="item"><img src="public/images/product-single-2-170x280.png" alt="" width="170" height="280"/>
                            </div>
                            <div class="item"><img src="public/images/product-single-3-170x280.png" alt="" width="170" height="280"/>
                            </div>
                            <div class="item"><img src="public/images/product-single-4-170x280.png" alt="" width="170" height="280"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-single-body">
                        <?php if($filtrado != ""){ ?>
                            <p class="product-single-title"><?= $filtrado ?></p>
                        <?php } ?>
                        <div class="product-single-price-wrap">
                          <p class="price">$34.99</p><small>(In Stock)</small>
                        </div>
                        <div class="product-single-text">
                          <p>The world's finest espresso coffee offers you a full selection for every method of preparation. So whether you're in the mood for regular or decaffeinated espresso, cappuccino, latte or brewed coffee, all you have to do is reach for a can of Illy. One cup and you'll understand why Illy is the #1 choice of 4-star chefs.</p>
                        </div><a href="cart.html" class="btn-shop btn-shop-sm"><span class="btn-shop-icon fa fa-shopping-cart"></span><span class="btn-shop-text">ADD TO CART</span></a>
                      </div>
                    </article>
                  </div>
                </section>

                <section class="section-xl bg-periglacial-blue text-center">
                  <div class="shell">
                    <div class="range range-sm-center range-75">
                      <div class="cell-xs-12">
                        <h2>Reviews</h2>
                        <div class="unit unit-spacimg-md unit-xs-horizontal unit-align-center unit-middle">
                          <div class="unit-left text-sm-right">
                            <ul class="list-rating">
                              <li class="icon icon-xxs icon-primary fa fa-star"></li>
                              <li class="icon icon-xxs icon-primary fa fa-star"></li>
                              <li class="icon icon-xxs icon-primary fa fa-star"></li>
                              <li class="icon icon-xxs icon-primary fa fa-star"></li>
                              <li class="icon icon-xxs icon-primary fa fa-star"></li>
                            </ul>
                            <p class="small">4.66 average from 169 reviews</p>
                          </div>
                          <div class="unit-body"><a href="#" class="btn btn-xs btn-circle btn-primary">Write a review</a></div>
                        </div>
                      </div>
                      <div class="cell-lg-10">
                        <blockquote class="quote-review">
                          <div class="quote-review-left">
                            <div class="quote-review-avatar"><img src="public/images/testimonials-3-100x100.jpg" alt="" width="100" height="100" class="quote-review-image"/>
                            </div>
                          </div>
                          <div class="quote-review-body">
                            <div class="quote-review-header">
                              <p class="quote-review-title">Best Coffee in the World!</p>
                              <ul class="quote-review-rating">
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                              </ul>
                            </div>
                            <div class="quote-review-meta"><span>By</span><span class="quote-review-user">James Whitmore</span><span>on</span>
                              <time datetime="2016-06-08">June 8, 2016</time>
                            </div>
                            <p class="quote-review-text">
                              <q>I use illy in both drip and espresso machines. Their darker roasts are wonderful, not bitter, and form a nice crema when used in our espresso machines.I recommend drinking illy any time of the day. Do not feel pressured to buy whole beans and grind them every day.</q>
                            </p>
                          </div>
                        </blockquote>
                        <blockquote class="quote-review">
                          <div class="quote-review-left">
                            <div class="quote-review-avatar"><span class="quote-review-letter">P</span>
                            </div>
                          </div>
                          <div class="quote-review-body">
                            <div class="quote-review-header">
                              <p class="quote-review-title">Quite a Good Product</p>
                              <ul class="quote-review-rating">
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                              </ul>
                            </div>
                            <div class="quote-review-meta"><span>By</span><span class="quote-review-user">Patrick Tyler</span><span>on</span>
                              <time datetime="2016-03-21">May 21, 2016</time>
                            </div>
                            <p class="quote-review-text">
                              <q>This is my favorite brand of coffee. It's just right, not too strong and no burnt taste. Starbucks was good 10+ years ago, but now I only go if I'm desperate for caffeine. Illy is perfect, esp. their medium roast, fine grind. I think Illy is an example of how coffee should be made.</q>
                            </p>
                          </div>
                        </blockquote>
                        <blockquote class="quote-review">
                          <div class="quote-review-left">
                            <div class="quote-review-avatar"><span class="quote-review-letter">M</span>
                            </div>
                          </div>
                          <div class="quote-review-body">
                            <div class="quote-review-header">
                              <p class="quote-review-title">Definitely a Good Choice</p>
                              <ul class="quote-review-rating">
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                                <li class="icon icon-xs icon-primary fa fa-star"></li>
                              </ul>
                            </div>
                            <div class="quote-review-meta"><span>By</span><span class="quote-review-user">Mark Holt</span><span>on</span>
                              <time datetime="2016-04-15">April 15, 2016</time>
                            </div>
                            <p class="quote-review-text">
                              <q>This fine ground coffee is what European coffee is supposed to taste like, not that burnt stuff you pay good money for from those Seattle coffee companies. This is the perfect coffee for French Presses or from a good drip coffee maker. It is not strong coffee even though it is a dark roast.</q>
                            </p>
                          </div>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </section>

                <section class="section-xl bg-periglacial-blue text-center">
                  <div class="shell">
                    <div class="range range-sm-center range-50">
                      <div class="cell-xs-12">
                        <h2>Similar products</h2>
                      </div>
                      <div class="cell-xs-12">
                        <div class="range range-30">
                          <div class="cell-sm-6 cell-md-4 height-fill">
                            <article class="product"><a href="single-product.html" class="product-image"><img src="public/images/product-1-80x193.png" alt="" width="80" height="193"/></a>
                              <p class="product-title"><a href="single-product.html">Teeccino Herbal Coffee</a></p>
                              <p class="product-price">$32.99
                              </p><a href="cart.html" class="btn-shop"><span class="btn-shop-icon fa fa-shopping-cart"></span><span class="btn-shop-text">ADD TO CART</span></a>
                            </article>
                          </div>
                          <div class="cell-sm-6 cell-md-4 height-fill">
                            <article class="product"><a href="single-product.html" class="product-image"><img src="public/images/product-2-120x174.png" alt="" width="120" height="174"/></a>
                              <p class="product-title"><a href="single-product.html">Don Francisco Hawaiian Hazelnut</a></p>
                              <p class="product-price">$31.99
                              </p><a href="cart.html" class="btn-shop"><span class="btn-shop-icon fa fa-shopping-cart"></span><span class="btn-shop-text">ADD TO CART</span></a>
                            </article>
                          </div>
                          <div class="cell-sm-6 cell-md-4 height-fill">
                            <article class="product"><a href="single-product.html" class="product-image"><img src="public/images/product-3-199x155.png" alt="" width="199" height="155"/></a>
                              <p class="product-title"><a href="single-product.html">Five Star Coffee</a></p>
                              <p class="product-price">$44.99
                              </p><a href="cart.html" class="btn-shop"><span class="btn-shop-icon fa fa-shopping-cart"></span><span class="btn-shop-text">ADD TO CART</span></a>
                            </article>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

                <footer class="page-footer page-footer-default">
                  <div class="shell">
                    <div class="range range-xs-center">
                      <div class="cell-lg-10"><a href="index.html" class="brand"><img src="public/images/logo-white-185x41.png" alt="" width="185" height="41"/></a>
                        <div class="text-highlighted-wrap">
                          <p class="text-highlighted">Coffee Shop is a cosy place where friends meet to share coffee, cakes and light meals. At night, it is transformed into a vibey eatery.</p>
                        </div>
                        <ul class="footer-navigation footer-navigation-horizontal">
                          <li><a href="index.html">Home</a></li>
                          <li><a href="about.html">About</a></li>
                          <li><a href="services.html">Services</a></li>
                          <li><a href="blog.html">Blog</a></li>
                          <li><a href="shop.html">Shop</a></li>
                          <li><a href="contacts-1.html">Contacts</a></li>
                        </ul>
                        <div class="divider divider-small divider-light block-centered"></div>
                        <ul class="inline-list inline-list-md">
                          <li><a href="#" class="icon icon-xs link-gray-light fa-facebook"></a></li>
                          <li><a href="#" class="icon icon-xs link-gray-light fa-twitter"></a></li>
                          <li><a href="#" class="icon icon-xs link-gray-light fa-youtube"></a></li>
                          <li><a href="#" class="icon icon-xs link-gray-light fa-linkedin"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </footer>
              </div>
              <div id="perspective-content-overlay"></div>
            </div>
            <!-- RD Navbar-->
            <?php include 'views/general/rightMenu.php' ?>
          </main>
        </div>
        <div id="form-output-global" class="snackbars"></div>
        <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
          <div class="pswp__bg"></div>
          <div class="pswp__scroll-wrap">
            <div class="pswp__container">
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
              <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                <button title="Share" class="pswp__button pswp__button--share"></button>
                <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                <div class="pswp__preloader">
                  <div class="pswp__preloader__icn">
                    <div class="pswp__preloader__cut">
                      <div class="pswp__preloader__donut"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
              </div>
              <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
              <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
              <div class="pswp__caption">
                <div class="pswp__caption__cent"></div>
              </div>
            </div>
          </div>
        </div>
        <?php include_once 'views/general/footerAndScript.php';?>
    </body>
</html>