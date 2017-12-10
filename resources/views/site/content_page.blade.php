<section>

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

                       {!!link_to(route('home'),'Back')!!}
                    </div>
                    <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s"> </figure>
                </div>
            </div>
        </div>
        <!--<div class="work_pic"><img src="img/dashboard_pic.png" alt=""></div>-->
    </div>


</section>