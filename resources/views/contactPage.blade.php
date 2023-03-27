<x-layout>

<div class="container bg-biki">
    <div class="row justify-content-end mt-5 ">
        <div class="col-12 col-md-6 pt-3 pl-2 bg-light">

            <form method="POST" action="{{route('contactSubmit')}}">

            @csrf

                <div class="mb-3 ">

                  <div class="container-fluid d-flex justify-content-center">
                  <label for="exampleInputName" class="form-label">Name:</label>
                  </div>
                  <input type="name" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                </div>
        
                <div class="mb-3">

                  <div class="container-fluid d-flex justify-content-center">
                    <label for="exampleInputEmail" class="form-label">Email address:</label>
                  </div>

                    <input type="email" name="email"  class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">

                    <div class="container-fluid d-flex justify-content-center">
                    <label for="" class="form-label">Your message:</label>
                    </div>

                    <textarea type="text" name="text" class="form-control" id="exampleInputText" cols="5" rows="5"></textarea>
                  </div>
                  
        
        
                <div class="container-fluid d-flex justify-content-center">
                  <button type="submit" class="btn bgBlueCus text-lights">Submit</button>
                </div>
                
              </form>
        

        </div>
    </div>
</div>

 




</x-layout>