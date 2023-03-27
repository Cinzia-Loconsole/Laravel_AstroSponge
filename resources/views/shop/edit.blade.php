<x-layout>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <h1 class="text-center">Edit the shop {{$shop->name}}</h1>
            </div>
        </div>
    </div>

    <div class="container cont-form">
        {{-- <div class="row justify-content-center">
            <div class="col-12 col-md-6"> --}}
                <form class="p-5 shadow" method="POST" action="{{route('updateShop', compact('shop'))}}"  enctype="multipart/form-data">

                    @method('put')

                    @csrf

                    <div class="mb-3">

                        <div class="container-fluid d-flex justify-content-center">
                      <label for="exampleInputName" class="form-label">Your shop name:*</label>
                        </div>
                      <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" aria-describedby="nameHelp" value="{{$shop->name}}">
                      {{--  PER MANTENERE IL VALORE DEL CAMPO SE SCATTA ERRORE VALIDAZIONE --}}
                      @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                    </div>
                    <div class="mb-3">

                        <div class="container-fluid d-flex justify-content-center">
                        <label for="exampleInputCity" class="form-label">City:*</label>
                        </div>
                        <input name="city" type="text" class="form-control @error('city') is-invalid @enderror" id="exampleInputCity" aria-describedby="cityHelp" value="{{$shop->city}}">
                        {{--  PER MANTENERE IL VALORE DEL CAMPO SE SCATTA ERRORE VALIDAZIONE E PER FAR APPARIRE L'ERRORE SOTTO IL CAMPO CORRISPONDENTE--}}
                        @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="mb-3">

                        <div class="container-fluid d-flex justify-content-center">
                        <label for="exampleInputDescription" class="form-label">Description:*</label>
                        </div>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="exampleInputDescription" cols="30" rows="10"> {{$shop->description}}{{--  PER MANTENERE IL VALORE DEL CAMPO SE SCATTA ERRORE VALIDAZIONE E PER FAR APPARIRE L'ERRORE SOTTO IL CAMPO CORRISPONDENTE--}}</textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-3">

                    @if($shop->image)
                        <div class="d-flex justify-content-center">
                        <img style="width: 200px; height:auto;" src="{{Storage::url($shop->image)}}" alt="">
                        </div>  
                    @else
                        <p>Non ci sono immagini per questo negozio!</p>
                    @endif

                    </div>


                    <div class="container-fluid d-flex justify-content-center">
                        <label for="exampleInputImage" class="form-label">Imagine:</label>
                          </div>
                        <input name="image" type="file" class="form-control " id="exampleInputImage" aria-describedby="imageHelp" accept="image/jpg, image/png, image/webp, image/png">
                        {{-- ESTENSIONI CONSENTITE NELLA RICERCA DA PARTE DELL'UTENTE E PER FAR APPARIRE L'ERRORE SOTTO IL CAMPO CORRISPONDENTE--}}
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    
                    {{-- lEGENDA CAMPO OBBLIGATORIO --}}
                    <div class="container-fluid d-flex justify-content-center mt-3">
                      <p>* = Campo Obbligatorio</p>
                      </div>
                      </div>

                      

                      <div class="mb-3">

                    <div class="container-fluid d-flex justify-content-center">
                    <button type="submit" class="btn text-light bgBlueCus border-0">Insert the product</button>
                    </div>
                      </div>
                </form>




            {{-- </div>
        </div> --}}
    </div>


</x-layout>
