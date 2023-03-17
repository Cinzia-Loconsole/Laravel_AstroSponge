<div class="col-12 col-md-3 m-3">
    <div class="card" style="width: 18rem;">
    <img src="{{$array['img']}}" class="card-img-top p-2" alt="{{$array['name']}}">
    <div class="card-body d-flex flex-column align-items-center justify-content-center">
      <h5 class="card-title text-center textNettuno">{{$array['name']}}</h5>
      <p class="card-text text-center">{{$array['description']}}</p>
     
  
  
        @if(Route::currentRouteName()=='products') 
            <a href="{{route('productDetails' , ['id'=>$array['id']])}}" class="btn text-light bgBlueCus border-0">Detail</a>

            @elseif(Route::currentRouteName()=='productDetails')
            <a href="{{route('products')}}" class="btn text-light bgBlueCus border-0">Back</a>


            @elseif(Route::currentRouteName()=='about')
            <h6 class="card-text text-center">{{$array['sign']}}</h6>
            <a href="{{route('aboutDetails' , ['id'=>$array['id']])}}" class="btn text-light bgBlueCus border-0">Detail</a>

            @elseif(Route::currentRouteName()=='aboutDetails')
            <h6 class="card-text text-center">{{$array['sign']}}</h6>
            <a href="{{route('about')}}" class="btn text-light bgBlueCus border-0">Back</a>
        @endif

    </div>
  </div>
</div>

