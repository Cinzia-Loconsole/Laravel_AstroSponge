<x-layout>

    <div class="cointainer">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <h1 class="text-center">Log in</h1>
            </div>
        </div>
    </div>

    <div class="cointainer">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 ">

                <form method="POST" action="{{route('login')}}">

                     @csrf

                    <div class="my-3">
                      <label for="exampleInputEmail" class="form-label">Email:</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword" class="form-label">Password:</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword">
                    </div>
                

                    <button type="submit" class="btn bgBlueCus text-light">Log in</button>
                  </form>

            </div>
        </div>
    </div>


</x-layout>