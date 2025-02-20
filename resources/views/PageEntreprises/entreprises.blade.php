<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Entreprises</h2>
                    
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
                    @foreach ($entreprises as $entreprise)

                    <article class="blog_item">
                        <div class="blog_details shadow">
                            <div class="row">
                            <div class="blog_item_img col-2">
                            <img class="card-img w-75" src="{{asset('storage/' . $entreprise->photo)}}" alt="">
                        </div>
                            <a class="d-inline-block col-6" href="{{route('entreprises.show', $entreprise->id)}}">
                                <h2>{{$entreprise->nom}}</h2>
                                <p>Domaine {{$entreprise->domaine}}</p>
                            </a>
                        </div>
                            <ul class="blog-info-link">
                                <li><a href="#"></a>{{$entreprise->email}}</li>
                                <li><a href="#"><i class="fas fa-phone"></i>{{$entreprise->numero}}</a></li>
                            </ul>
                        </div>
                    </article>
                    @endforeach
                  
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            {{$entreprises->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4" id='bg-entreprise'>
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget bg-transparent">
                        <form action="{{route('searchEntreprise')}}">
                            
                            <div class="form-group ">
                                
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Quel domaine recherchez-vous ?'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Quel domaine recherchez-vous ?'" name='search'>
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