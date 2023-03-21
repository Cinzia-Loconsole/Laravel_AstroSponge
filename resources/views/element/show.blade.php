<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <h1 class="text-center my-4">Detail of {{$element->name}}</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/450/250?random={{$element->id}}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <div class="container-fluid d-flex justify-content-center my-3">
                        <h5 class="card-title">{{$element->name}}</h5>
                        </div>

                        <div class="container-fluid d-flex justify-content-center">
                        <p>{{$element->price}}</p>
                        </div>

                        <div class="container-fluid d-flex justify-content-center">
                        <p>{{$element->description}}</p>
                        </div>

                        <div class="container-fluid d-flex justify-content-center mt-3">
                        <a href="{{route('indexElement')}}" class="btn text-light bgBlueCus border-0">Back</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>