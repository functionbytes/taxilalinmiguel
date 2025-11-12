<header class="header-area header">
    <div class="header-top-two d-none d-md-block">
         <div class="container">
             <div class="second-header">
             <div class="row align-items-center">
                 <div class="col-lg-7 col-md-7 d-none d-lg-block ">
                      <div class="header-cta">
                         <ul>
                            <li>
                               <div class="call-box">
                                  <div class="icon">
                                     <i class="fa-regular fa-phone"></i>
                                  </div>
                                  <div class="text">
                                     <strong><a href="tel:+34{{ setting('page_cellphone') }}">+34{{ setting('page_cellphone') }}</a></strong>
                                  </div>
                               </div>
                            </li>
                            <li>
                               <div class="call-box">
                                  <div class="icon">
                                    <i class="fa-regular fa-envelope"></i>
                                  </div>
                                  <div class="text">
                                     <strong><a href="mailto:{{ setting('page_email') }}">{{ setting('page_email') }}  </a></strong>
                                  </div>
                               </div>
                            </li>
                         </ul>
                      </div>

                 </div>
                   <div class="col-lg-5 col-md-5 d-none d-lg-block text-right">
                      <div class="header-social">
                         <span>
                             @if (setting('social_media_facebook')!=null)
                                 <a href="{{ setting('social_media_facebook') }}"><i class="fab fa-facebook"></i></a>
                             @endif
                             @if (setting('social_media_instagram')!=null)
                                 <a href="{{ setting('social_media_instagram') }}"><i class="fab fa-instagram"></i></a>
                             @endif
                             @if (setting('social_media_twitter')!=null)
                                 <a href="{{ setting('social_media_twitter') }}"><i class="fab fa-twitter"></i></a>
                             @endif
                             @if (setting('social_media_linkedin')!=null)
                                 <a href="{{ setting('social_media_linkedin') }}"><i class="fab fa-linkedin"></i></a>
                             @endif
                             @if (setting('social_media_youtube')!=null)
                                 <a href="{{ setting('social_media_youtube') }}"><i class="fab fa-youtube"></i></a>
                             @endif
                            </span>
                     </div>
                 </div>

             </div>
             </div>
         </div>
     </div>
       <div id="header-sticky" class="menu-area">
         <div class="container">
             <div class="second-menu">
                 <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                         <div class="main-menu">
                             <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{ route('index') }}">Inicio</a></li>
                                        <li><a href="{{ route('about') }}">Sobre nosotros</a></li>
                                        <li><a href="{{ route('services') }}">Servicio de taxi</a></li>
                                        <li><a href="{{ route('faqs') }}">Preguntas frecuentes</a></li>
                                        <li><a href="{{ route('contact') }}">Contáctanos</a></li>
                                    </ul>
                             </nav>
                         </div>
                     </div>

                         <div class="col-12">
                             <div class="mobile-menu"></div>
                         </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
