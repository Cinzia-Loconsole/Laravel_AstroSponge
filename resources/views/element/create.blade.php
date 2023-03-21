<x-layout>

    
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
                <form class="p-5 shadow" method="POST" action="{{route('storeElement')}}">

                    @csrf

                    <div class="mb-3">

                        <div class="container-fluid d-flex justify-content-center">
                      <label for="exampleInputName" class="form-label">Name product:</label>
                        </div>
                      <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">

                        <div class="container-fluid d-flex justify-content-center">
                        <label for="exampleInputPrice" class="form-label">Price:</label>
                        </div>
                        <input name="price" type="text" class="form-control" id="exampleInputPrice" aria-describedby="priceHelp">
                    </div>
                    <div class="mb-3">

                        <div class="container-fluid d-flex justify-content-center">
                        <label for="exampleInputDescription" class="form-label">Description:</label>
                        </div>
                        <textarea name="description" class="form-control" id="exampleInputDescription" cols="30" rows="10"></textarea>
                    </div>

                    <div class="container-fluid d-flex justify-content-center">
                    <button type="submit" class="btn text-light bgBlueCus border-0">Insert the product</button>
                    </div>
                </form>




            {{-- </div>
        </div> --}}
    </div>

    </header>
</x-layout>