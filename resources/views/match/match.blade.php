<label for="tag[]">Tags</label>
      <div class="row">
        @foreach ($tags as $item)

        <div class="form-check col-2">
          <input value="{{$item->id}}" name="tag[]" type="checkbox" class="form-check-input">
          <label class="form-check-label">{{$item->nom}}</label>
        </div>
        @endforeach
      </div>