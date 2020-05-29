<label for="tag[]">Tags</label>
      <div class="row">
        @foreach ($tags as $item)

        <div class="form-check col-2">
          <input value="{{$item->id}}" name="tag[]" type="checkbox" class="form-check-input">
          <label class="form-check-label">{{$item->nom}}</label>
        </div>
        @endforeach
      </div>
      <div class="my-5" id="match">
        <div class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title mb-3 text-center"><i class="fas fa-heart text-danger fa-1x"></i> Vos matches</h4>
            <div class="row">
                @foreach ($offres as $offre)
                @foreach ($offre->matchs as $item)
                @if ($item->pivot->user_id == Auth::user()->id)
                @if ($item->pivot->offre_id == $offre->id)
                <div class="col-4 border border-secondary rounded p-3 m-3">
                    <div class='text-center'>
                        <form action="{{route('match.destroy',$item)}}" method="post">
                            @csrf
                            @method('DELETE')
                          <button class=' btn-white'><i class="fas fa-trash text-danger"></i></button>
                        </form>
                    </div>

                    <ul class="list cat-list">
                    <li> <p><b>Poste : </b>{{$offre->poste}}.</p></li>
                        <li><p><i class="fas fa-map-marker-alt"></i> <b>Lieu : </b>{{$offre->lieu}}.</p></li>
                        <li><p><b>Il faut être : </b>{{$offre->qualite}}.</p></li>
                        <li><p><b>Description de l'offre : </b>{{$offre->description}}</p></li>
                        <li><b>Entreprise : </b><p class='text-uppercase'>{{$offre->user->nom}}</p></li>
                    </ul>

                    {{-- button supprimer --}}
                
                </div>
                @else
                    
                @endif
                @else
                    
                @endif
										

                @endforeach	
                @endforeach
            </div>
        </div>
    </div>