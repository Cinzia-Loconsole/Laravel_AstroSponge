<x-layout>


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <h1 class="text-center">Insert your shop</h1>
                </div>
            </div>
        </div>
    
        <div class="container cont-form">
            {{-- <div class="row justify-content-center">
                <div class="col-12 col-md-6"> --}}
                    <form class="p-5 shadow" method="POST" action="{{route('storeShop')}}"  enctype="multipart/form-data">
    
                        @csrf
    
                        <div class="mb-3">
    
                            <div class="container-fluid d-flex justify-content-center">
                          <label for="exampleInputName" class="form-label">Your shop name:*</label>
                            </div>
                          <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" aria-describedby="nameHelp" value="{{old('name')}}">
                          {{--  PER MANTENERE IL VALORE DEL CAMPO SE SCATTA ERRORE VALIDAZIONE --}}
                          @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
    
                        </div>
                        <div class="mb-3">
    
                            <div class="container-fluid d-flex justify-content-center">
                            <label for="exampleInputCity" class="form-label">City:*</label>
                            </div>
                            <input name="city" type="text" class="form-control @error('city') is-invalid @enderror" id="exampleInputCity" aria-describedby="cityHelp" value="{{old('city')}}">
                            {{--  PER MANTENERE IL VALORE DEL CAMPO SE SCATTA ERRORE VALIDAZIONE E PER FAR APPARIRE L'ERRORE SOTTO IL CAMPO CORRISPONDENTE--}}
                            @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
    
                        </div>
                        <div class="mb-3">
    
                            <div class="container-fluid d-flex justify-content-center">
                            <label for="exampleInputDescription" class="form-label">Description:*</label>
                            </div>
                            <textarea name="description" class="form-control @error('img') is-invalid @enderror" id="exampleInputDescription" cols="30" rows="10">{{old('description')}}
                                {{--  PER MANTENERE IL VALORE DEL CAMPO SE SCATTA ERRORE VALIDAZIONE E PER FAR APPARIRE L'ERRORE SOTTO IL CAMPO CORRISPONDENTE--}}</textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
    
                        <div class="container-fluid d-flex justify-content-center">
                            <label for="exampleInputImage" class="form-label">Imagine:</label>
                              </div>
                            <input name="image" type="file" class="form-control " id="exampleInputImage" aria-describedby="imageHelp" accept="image/jpg, image/webp, image/png">
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
                        <button type="submit" class="btn text-light bgBlueCus border-0">Insert the shop</button>
                        </div>
                          </div>
                    </form>
    
    
    
    
                {{-- </div>
            </div> --}}
        </div>
    

</x-layout>
