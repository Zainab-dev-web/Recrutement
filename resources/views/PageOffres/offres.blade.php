<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Offres</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

 <!--================Blog Area =================-->
 <section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                 @foreach ($offres as $offre)
                 @if ($offre->user->role_id == 5)
                     <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.png" alt="">
                        </div>

                        <div class="blog_details shadow">
                            <a class="d-inline-block" href="{{route('offres.show', $offre->id)}}">
                            <h2>{{$offre->poste}} chez {{$offre->user->nom}}</h2>
                            </a>
                        <p><i class="fas fa-map-marker-alt"></i> {{$offre->lieu}}</p>
                        <p>{{\Illuminate\Support\Str::limit($offre->description, 200, $end=' ...')}} <br><a href="{{route('offres.show', $offre->id)}}"><u>Read more</u></a></p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i>{{$offre->user->domaine}}</a></li>
                                <li><a href="#"><i class="fas fa-phone"></i>{{$offre->user->numero}}</a></li>
                            </ul>
                        </div>
                    </article>
                 @else
                     
                 @endif              
                    @endforeach
  
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            {{$offres->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btns" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 w-100 btn_1 boxed-btn"
                                type="submit">Search</button>
                        </form>
                    </aside>

                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Les entreprises</h4>
                        <ul class="list cat-list">
                            @foreach ($entreprises as $entreprise)
                            <li>
                            <a href="{{route('entreprises.show', $entreprise->id)}}" class="d-flex">
                                    <p>{{$entreprise->nom}}</p>
                                </a>
                            </li>
                            @endforeach
                         
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->