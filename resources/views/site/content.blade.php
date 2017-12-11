
@if(isset($pages) && is_object($pages))

    @foreach($pages as $k=>$page)

        @if($k%2 == 0)
            <section id="{{$page->alias}}" class="top_cont_outer">
                <div class="top_cont_inner">
                    <div class="container">
                        <div class="top_content">
                            <div class="row">
                                <div class="col-lg-5 col-sm-7">
                                    <div class="top_left_cont flipInY wow animated">
                                        {!! $page->text !!}
                                        <a href="{{route('page',array('alias'=>$page->alias))}}" class="learn_more2">Learn more</a> </div>
                                </div>
                                <div class="col-lg-7 col-sm-5"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section id="{{$page->alias}}"><!--main-section-start-->
                <div class="top_cont_latest">
                    <div class="container">
                        <h2>{{$page->name}}</h2>
                        <div class="work_section">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
                                    <div class="service-list">
                                        <div class="service-list-col1"> <i class="icon-doc"></i> </div>
                                        <div class="service-list-col2">
                                            {!! $page->text !!}
                                        </div>
                                    </div>

                                    <div class="work_bottom"> <span>Want to know more..</span> <a href="{{route('page',array('alias'=>$page->alias))}}" class="contact_btn">Contact Us</a> </div>
                                </div>
                                <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s"> </figure>
                            </div>
                        </div>
                    </div>
                    <!--<div class="work_pic"><img src="img/dashboard_pic.png" alt=""></div>-->
                </div>
            </section>
            @endif
@endforeach

<!--AboutUs-->

<!--Top_content-->


<!--main-section-end-->
        @endif
<!--new_portfolio-->

<!--Service-->
        @if(isset($services) && is_object($services))

    <section  id="service">
        <div class="container">
            <h2>Services</h2>
            <div class="service_area">

                @foreach( $services as $k=>$service)

                    @if($k== 0 || $k%3 == 0)
                        <div class="row">
                 @endif
                            <div class="col-lg-4">
                                <div class="service_block">
                                    <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="{{ $service->icon }}"></i></span> </div>
                                    <h3 class="animated fadeInUp wow">{{$service->name}}</h3>
                                    <p class="animated fadeInDown wow">{{$service->text}}.</p>
                                </div>
                            </div>

                            @if(($k+1)%3 == 0)
                        </div>
                                @endif

                @endforeach
            </div>
        </div>
    </section>

            @endif

<!--Service-->
<!-- Portfolio -->

@if(isset($portfolios) && is_object($portfolios))

    <section id="Portfolio" class="content">

        <!-- Container -->
        <div class="container portfolio-title">

            <!-- Section Title -->
            <div class="section-title">
                <h2>Portfolio</h2>
            </div>
            <!--/Section Title -->

        </div>
        <!-- Container -->

        <div class="portfolio-top"></div>

        <!-- Portfolio Plus Filters -->
        <div class="portfolio">
        @if(isset($tags) && is_object($tags))
            <!-- Portfolio Filters -->
                <div id="filters" class="sixteen columns">
                    <ul class="clearfix">
                        <li><a id="all" href="#" data-filter="*" class="active">
                                <h5>All</h5>
                            </a></li>
                                @foreach( $tags as $tag)
                            <li><a class="" href="#" data-filter=".{{$tag}}">
                                    <h5>{{$tag}}</h5>
                                </a></li>
                                    @endforeach

                    </ul>
                </div>

            @endif

            <!--/Portfolio Filters -->

            <!-- Portfolio Wrap -->
            <div class="isotope" style="position: relative; overflow: hidden; height: 480px;" id="portfolio-wrap">

                @foreach($portfolios as $item)
                    <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   {{$item->filter}} isotope-item">
                    <div class="portfolio-image"> {{Html::image('assets/img/'.$item->images,$item->name)}} </div>
                    <a title="Starbucks Coffee" rel="prettyPhoto[galname]" href="http://clapat.ro/themes/newave/images/portfolio/portfolio2.jpg">
                        <div class="project-overlay">
                            <div class="project-info">
                                <div class="zoom-icon"></div>
                                <h4 class="project-name">{{$item->name}}</h4>
                                <p class="project-categories">{{$item->filter}}</p>
                            </div>
                        </div>
                    </a> </div>
                    @endforeach


            </div>
        <!--/Portfolio Plus Filters -->

        <div class="portfolio-bottom"></div>

        <!-- Project Page Holder-->
        <div id="project-page-holder">
            <div class="clear"></div>
            <div id="project-page-data"></div>
        </div>
        <!--/Project Page Holder-->
        </div>
    </section>


@endif



<!--/Portfolio -->

<!--new_portfolio-->

<!--
<section class="main-section paddind" id="Portfolio">
	<div class="container">
    	<h2>Portfolio</h2>
    	<h6>Fresh portfolio of designs that will keep you wanting more.</h6>
	</div>


</section>

-->


<!--main-section client-part-end-->

{{--<div class="c-logo-part"><!--c-logo-part-start-->--}}
    {{--<div class="container">--}}
        {{--<ul class="delay-06s animated  bounce wow">--}}
            {{--<li><a href="javascript:void(0)"><img src="{{ asset('assets/img/c-liogo1.png') }}" alt=""></a></li>--}}
            {{--<li><a href="javascript:void(0)"><img src="{{ asset('assets/img/c-liogo2.png') }}" alt=""></a></li>--}}
            {{--<li><a href="javascript:void(0)"><img src="{{ asset('assets/img/c-liogo3.png') }}" alt=""></a></li>--}}
            {{--<li><a href="javascript:void(0)"><img src="{{ asset('assets/img/c-liogo5.png') }}" alt=""></a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}
<!--c-logo-part-end-->
@if(isset($peoples) && is_object($peoples))
    <section class="main-section team" id="team"><!--main-section team-start-->
        <div class="container">
            <h2>Amazing Team</h2>
            <h6>Take a closer look into our amazing team. We won’t bite.</h6>
            <div class="team-leader-block clearfix">

                @foreach($peoples as $k=> $people)
                    <div class="team-leader-box">
                        <div class="team-leader wow fadeInDown delay-0{{($k*3+3)}}s">
                            <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
                            {{Html::image('assets/img/'.$people->images, $people->name)}}
                            <ul>
                                <li><a href="javascript:void(0)" class="fa-twitter"></a></li>
                                <li><a href="javascript:void(0)" class="fa-facebook"></a></li>
                                <li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
                                <li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <h3 class="wow fadeInDown delay-{{($k*3+3)}}s">{{$people->name}}</h3>
                        <span class="wow fadeInDown delay-{{($k*3+3)}}s">{{$people->position}}</span>
                        <p class="wow fadeInDown delay-{{($k*3+3)}}s">{{$people->text}}</p>
                    </div>
                @endforeach
    @endif

        </div>
    </div>
</section>
<!--main-section team-end-->

<section class="twitter-feed"><!--twitter-feed-->
    <div class="container  animated fadeInDown delay-07s wow">
        <div class="twitter_bird"><span><i class="fa-twitter"></i></span></div>
        <p> When you're the underdog, your only option is to make #waves if you want to succeed. How much <br>
            and how often should you be drinking coffee?</p>
        <span>About 28 mins ago</span> </div>
</section>
<!--twitter-feed-end-->
<footer class="footer_section" id="contact">
    <div class="container">
        <section class="main-section contact" id="contact">
            <div class="contact_section">
                <h2>Contact Us</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact_block">
                            <div class="contact_block_icon rollIn animated wow"><span><i class="fa-home"></i></span></div>
                            <span> 308 Negra Arroyo Lane, <br>
              Albuquerque, NM, 87104 </span> </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact_block">
                            <div class="contact_block_icon icon2 rollIn animated wow"><span><i class="fa-phone"></i></span></div>
                            <span> 1-800-BOO-YAHH </span> </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact_block">
                            <div class="contact_block_icon icon3 rollIn animated wow"><span><i class="fa-pencil"></i></span></div>
                            <span> <a href="mailto:hello@butterfly.com"> hello@butterfly.com</a> </span> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="contact-info-box address clearfix">
                        <h3>Don’t be shy. Say hello!</h3>
                        <p>Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper. Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper.</p>
                        <p>Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquampor id.</p>
                    </div>
                    <ul class="social-link">
                        <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa-twitter"></i></a></li>
                        <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa-facebook"></i></a></li>
                        <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa-pinterest"></i></a></li>
                        <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa-google-plus"></i></a></li>
                        <li class="dribbble animated bounceIn wow delay-06s"><a href="javascript:void(0)"><i class="fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 wow fadeInUp delay-06s">
                    <div class="form">
                        <form action="{{route('home')}}" method="post">
                        <input class="input-text animated wow flipInY delay-02s" type="text" name="name" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">

                        <input class="input-text animated wow flipInY delay-04s" type="text" name="email" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">

                        <textarea class="input-text text-area animated wow flipInY delay-06s" name="text" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                        <input class="input-btn animated wow flipInY delay-08s" type="submit" value="send message">
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="footer_bottom"> <span>Copyright © 2014 Butterfly Theme By <a href="http://w3goods.com">W3Goods</a>. </span> </div>
    </div>
</footer>