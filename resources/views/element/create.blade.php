<x-layout>


    {{-- THE @ERROR DIRECTIVE --}}
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500&display=swap" rel="stylesheet">


    <header class="bg-create">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <h1 class="text-center">Insert the product</h1>
            </div>
        </div>
    </div>

    <div class="container cont-form">
        {{-- <div class="row justify-content-center">
            <div class="col-12 col-md-6"> --}}
                <form class="p-5 shadow" method="POST" action="{{route('storeElement')}}"  enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">

                        <div class="container-fluid d-flex justify-content-center">
                      <label for="exampleInputName" class="form-label">Name product:*</label>
                        </div>
                      <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" aria-describedby="nameHelp" value="{{old('name')}}">
                      {{--  PER MANTENERE IL VALORE DEL CAMPO SE SCATTA ERRORE VALIDAZIONE --}}
                      @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                    </div>
                    <div class="mb-3">

                        <div class="container-fluid d-flex justify-content-center">
                        <label for="exampleInputPrice" class="form-label">Price:*</label>
                        </div>
                        <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="exampleInputPrice" aria-describedby="priceHelp" value="{{old('price')}}">
                        {{--  PER MANTENERE IL VALORE DEL CAMPO SE SCATTA ERRORE VALIDAZIONE E PER FAR APPARIRE L'ERRORE SOTTO IL CAMPO CORRISPONDENTE--}}
                        @error('price')
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
                        <input name="img" type="file" class="form-control " id="exampleInputImage" aria-describedby="imageHelp" accept="img/jpg, img/png, img/webp, img/png">
                        {{-- ESTENSIONI CONSENTITE NELLA RICERCA DA PARTE DELL'UTENTE E PER FAR APPARIRE L'ERRORE SOTTO IL CAMPO CORRISPONDENTE--}}
                        @error('img')
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

    </header>
</x-layout>