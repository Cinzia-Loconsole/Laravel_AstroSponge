<x-layout>
    <header class="sign">
    <div class="container">
        <div class="row justify-content-center ">
                <h1 class="text-center mt-3">{{$sign['name']}}</h1> 
                <x-card
   
                :array="$sign"

            />
            
               
            </div>
        </div>

    </header>

</x-layout>
    