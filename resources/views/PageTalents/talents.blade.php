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
        <div class="row justify-content-center">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    @foreach ($talents as $talent)
  
                    <article class="blog_item">
                        <div class="blog_details shadow">
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
            <div class="col-lg-4" id='bg-talent'>
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget bg-transparent">
                        <form action="{{route('searchDomaine')}}">
                            <div class="form-group">
                              
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Quel domaine recherchez-vous ?'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Search Keyword'" name='search'>
                                    <div class="input-group-append">
                                        <button class="btns" type="submit"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 w-100 btn_1 boxed-btn"
                                type="submit">Search</button>
                        </form>
                    </aside>

                   
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->