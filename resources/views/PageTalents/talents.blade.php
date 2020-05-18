<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Talents</h2>
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

                    @foreach ($talents as $talent)
  
                    <article class="blog_item">
                        <div class="blog_details">
                            <div class="row">
                            <div class="blog_item_img col-2">
                            <img class="card-img rounded-0 w-75" src="{{asset('storage/' . $talent->photo)}}" alt="">
                        </div>
                            <a class="d-inline-block col-6" href="{{route('talents.show', $talent->id)}}">
                                <h2>{{$talent->nom}} {{$talent->prénom}}</h2>
                                <p>{{$talent->statut->statut}} dans le domaine {{$talent->domaine}}</p>
                            </a>
                        </div>
                            <ul class="blog-info-link">
                                <li><a href="#">Disponible à partir du </a>{{$talent->dispo}}</li>
                                <li><a href="#"><i class="fas fa-phone"></i>{{$talent->numero}}</a></li>
                            </ul>
                        </div>
                    </article>
                    @endforeach

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            {{$talents->links()}}
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
                                    <input type="text" class="form-control" placeholder='Search Entreprise'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Search Entreprise'">
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
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Web Development</p>
                                    <br>
                                    <p> (37)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Graphic Design</p>
                                    <p> (10)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>IA Technology</p>
                                    <p> (03)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Technical Reseau</p>
                                    <p> (11)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>App Development</p>
                                    <p> (21)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Game Development</p>
                                    <p> (09)</p>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->