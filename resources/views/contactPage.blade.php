<x-layout>

<div class="container">
    <div class="row justify-content-end mt-5">
        <div class="col-12 col-md-6 pt-3">

            <form method="POST" action="{{route('contactSubmit')}}">

            @csrf

                <div class="mb-3">
                  <label for="exampleInputName" class="form-label">Name</label>
                  <input type="name" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                </div>
        
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Email address</label>
                    <input type="email" name="email"  class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                  </div>
                  

                  <div class="mb-3">
                    <label for="" class="form-label">Email address</label>
                    <textarea type="text" name="text" class="form-control" id="exampleInputText" cols="5" rows="5"></textarea>
                  </div>
                  
        
        
        
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        

        </div>
    </div>
</div>

 




</x-layout>