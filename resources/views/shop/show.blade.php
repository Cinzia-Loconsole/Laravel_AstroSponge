
<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <h1 class="text-center my-4">Detail of {{$shop->name}}</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-md-4 d-flex justify-content-center mt-5">
                <div class="card" style="width: 18rem;">
                    
                    <div class="card-body">
                        
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 d-flex justify-content-center mb-2">
                                    <h5 class="card-title">{{$shop->name}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 d-flex justify-content-center">
                                    <p>{{$shop->city}}</p>
                                </div>
                            </div>
                        </div>
                        
                @if($shop->image)
                    <img src="{{Storage::url($shop->image)}}" class="card-img-top" alt="{{$shop->name}}">
                @else
                    <img src="/img/default.jpg" class="card-img-top" alt="...">
                @endif
                        
                        <div class="container mt-3">
                            <div class="row justify-content-center">
                                <div class="col-12 d-flex justify-content-center">
                                    <p>{{$shop->description}}</p>
                                </div>
                            </div>
                        </div>

                
                        
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 d-flex justify-content-center">
                                    <p>Posted by {{$shop->user->name}}</p>
                                </div>
                            </div>
                        </div>

                    </div>

                        <div class="container-fluid d-flex justify-content-center mt-1">
                        <a href="{{route('indexShop', compact('shop'))}}" class="btn text-light bgBlueCus border-0">Back</a>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>

</x-layout>