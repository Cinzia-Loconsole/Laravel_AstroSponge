<x-layout>

    <div class="cointainer">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <h1 class="text-center">Sig in</h1>
            </div>
        </div>
    </div>

    <div class="cointainer">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">

                <form method="POST" action="{{route('register')}}">

                    @csrf
            
                    <div class="mb-3">
                      <label for="exampleInputName" class="form-label">Username:</label>
                        <input type="name" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                        <div id="nameHelp" class="form-text"></div>
                    </div>
            
                    <div class="mb-3">
                       <label for="exampleInputEmail" class="form-label">Email:</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text"></div> 
                      </div>
            
            
                    <div class="mb-3">
                      <label for="exampleInputPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword">We'll never share your email with anyone 
                    </div>
            
                    {{-- PASSWORD CONFIRMATION --}}
                    <div class="mb-3">
                        <label for="exampleInputPasswordConfimation" class="form-label">Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPasswordConfirmation">
                      </div>
            
                    <button type="submit" class="btn bgBlueCus text-light">Sig in</button>
                  </form>


            </div>
        </div>
    </div>

   


</x-layout>