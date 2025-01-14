 @include('components.header')
 @include('components.layout')

 <!-- Page Title Section -->

 <!-- End Page Title Slider -->

 <!-- Blog Page Section -->


 <h1></h1>

 <section class="page-title-section">
     <div class="icon-layer-one" style="background-image:url({{ asset('assets/images/background/pattern-15.png') }}">
     </div>
     <div class="icon-layer-two" style="background-image:url({{ asset('assets/images/background/pattern-16.png') }}">
     </div>
     <div class="icon-layer-three" style="background-image:url({{ asset('assets/images/icons/icon-3.png') }}"></div>
     <div class="icon-layer-four" style="background-image:url({{ asset('assets/images/icons/icon-3.png') }}"></div>
     <div class="auto-container">
         <div class="row clearfix">

             <!-- Title Column -->
             <div class="title-column col-lg-6 cl-md-12 col-sm-12">
                 <div class="inner-column">
                     <ul class="page-breadcrumb">
                         <li><a href="index.html">Home</a></li>
                         <li>Blog</li>
                     </ul>
                     <h1>Blog<br> Page.</h1>
                 </div>
             </div>

             <!-- Image Column -->
             <div class="image-column col-lg-6 cl-md-12 col-sm-12">
                 <div class="inner-column">
                     <div class="color-layer"></div>
                     <div class="color-layer-two"></div>
                     <div class="color-layer-two"></div>
                     <div class="icon-layer-five"
                         style="background-image:url({{ asset('assets/images/icons/icon-12.png') }}"></div>
                     <div class="icon-layer-six"
                         style="background-image:url({{ asset('assets/images/icons/icon-22.png') }}"></div>
                     <div class="icon-layer-seven"
                         style="background-image:url({{ asset('assets/images/icons/pattern-10.png') }}"></div>
                     <div class="icon-layer-eight"
                         style="background-image:url({{ asset('assets/images/icons/pattern-19.png') }}"></div>
                     {{-- <div class="image">
                        <img src="images/resource/page-title-2.png" alt="" />
                    </div> --}}
                 </div>
             </div>

         </div>

     </div>
 </section>

 <div class="sidebar-page-container">
     <div class="auto-container">
         <div class="row clearfix">

             <!-- Sidebar Side -->


             <!-- Content Side -->
             <div class="content-side right-sidebar col-lg-12 col-md-12 col-sm-12">
                 <div class="blog-detail">
                     <div class="inner-box">
                         {{-- <div class="title">Business Motivation</div> --}}
                         <h2>TITLE: {{ $post->title }} </h2>
                         <div class="clearfix">
                             <div class="pull-left">
                                 <div class="author-info">
                                     <div class="author-image">
                                         <img src="images/resource/author-8.jpg" alt="" />
                                     </div>
                                     <strong>Post By: Adedamola Balami</strong>
                                     {{ date('jS M Y', strtotime($post->updated_at)) }}
                                 </div>
                             </div>
                             <div class="pull-right">
                                 <!-- Social Box -->
                                 <ul class="social-box">
                                     <li class="twitter"><a target="_blank" href="http://twitter.com/"
                                             class="fa fa-twitter"></a></li>
                                     <li class="pinterest"><a target="_blank" href="http://pinterest.com/"
                                             class="fa fa-pinterest-p"></a></li>
                                     <li class="facebook"><a target="_blank" href="http://facebook.com/"
                                             class="fa fa-facebook-f"></a></li>
                                     <li class="dribbble"><a target="_blank" href="http://dribbble.com/"
                                             class="fa fa-dribbble"></a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="blockquote-box">
                             <div class="row clearfix">
                                 <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                     <div class="inner-column">
                                         <div class="image">
                                             <img src="images/resource/news-22.jpg" alt="" />
                                         </div>
                                     </div>
                                 </div>
                                 <div class="blockquote-column col-lg-6 col-md-6 col-sm-12">
                                     <div class="inner-column">
                                         <span class="quote-icon"><img src="images/icons/quote-icon-1.png"
                                                 alt="" /></span>
                                         {{-- <p>Why is culture so important to a business? Here is a simple way to frame it. The stronger the culture, the less corporate process a company needs. When the culture is strong, you can trust everyone to do the right thing.”</p> --}}
                                         <p>Description: {{ $post->description }}</p>
                                         <span class="quote-icon-two"><img src="images/icons/quote-icon-2.png"
                                                 alt="" /></span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         {{-- <div class="bold-text">{{$post->description}}</div> --}}
                         <div class="bold-text">{{ $post->content }}</h4>
                             @livewire('blog.show')
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>
     <!-- End Blog Page Section -->

     <!-- Newsletter Section Two -->

     <!-- End Newsletter Section Two -->
     @include('components.footer')
