
<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <h1 class="text-center my-4">All your Krusty-Krab shops</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            @foreach ($shops as $shop)
            <div class="col-12 col-md-4  mt-5">
                <div class="card" style="width: 18rem;">
                    
                    <div class="card-body">

                        <h5 class="card-title text-center">{{$shop->name}}</h5>
                        <div class="d-flex justify-content-between">
                            <a href="{{route('showShop', compact('shop'))}}" class="btn text-light bgBlueCus border-0">Detail</a>
                            @auth
                        
                            @if($shop->user)
                                @if(Auth::user()->id == $shop->user->id)

                                    <a href="{{route('editShop', compact('shop'))}}" class="btn bgYellowCus">Edit</a>
                                    
                                    <a href="" onclick="event.preventDefault(); document.querySelector('#form-delete').submit();" class="btn btn-danger">Delete</a>
                                    <form id="form-delete" method="POST" action="{{route('deleteShop', compact('shop'))}}" class="d-none">
                                        @method('delete')
                               @csrf
                            </form>
                              
                                @endif
                            @endif
                        @endauth 
                        </div> 
                         
                    </div>
                </div>
            </div>
            @endforeach
        </div>
           
    </div>

</x-layout>