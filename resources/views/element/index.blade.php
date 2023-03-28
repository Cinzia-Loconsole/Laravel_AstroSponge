
<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <h1 class="text-center my-4">All your products</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            @foreach ($elements as $element)
            <div class="col-12 col-md-4 d-flex justify-content-center mt-5">
                <div class="card" style="width: 18rem;">
                    {{-- <img src="https://picsum.photos/450/250?random={{$element->id}}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">

                        <div class="container-fluid d-flex justify-content-center">
                        <h5 class="card-title">{{$element->name}}</h5>
                        </div>

                        <div class="container-fluid d-flex justify-content-center mt-3">
                        <a href="{{route('showElement', compact('element'))}}" class="btn text-light bgBlueCus border-0">Detail</a>

                        @auth
                            @if($element->user)
                                @if(Auth::user()->id == $element->user->id || Auth::user()->id == 1)

                                    <a href="{{route('editElement', compact('element'))}}" class="btn bgYellowCus">Edit</a>
                                    <a href="" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$element->id}}').submit();" class="btn btn-danger">Delete</a>
                                    <form id="form-delete-{{$element->id}}" method="POST" action="{{route('deleteElement', compact('element'))}}">
                                        @method('delete')
                                        @csrf
                                    </form>

                                 @endif


                        @elseif(Auth::user()->id == 1)

                            <a href="{{route('editElement', compact('element'))}}" class="btn btn-warning">Edit</a>
                            <a href="" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$element->id}}').submit();" class="btn btn-danger">Delete</a>
                            <form id="form-delete-{{$element->id}}" method="POST" action="{{route('deleteElement', compact('element'))}}">
                                @method('delete')
                                @csrf
                            </form>

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