          
      @foreach ($post as $item)
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="storage/{{$item->image}}" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">{{$item->title}}</a></h2>
              <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> {{$item->created_at}}<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p> {{$item->meta_description}}</p>
            </div> 
          </div> 
      @endforeach