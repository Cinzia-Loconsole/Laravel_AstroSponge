<x-layout>
    <header class="caracters">
    <div class="container">
        <div class="row justify-content-center">
                <h1 class="text-center  mt-3">{{$caracter['name']}}</h1> 
                <x-card
   
                :array="$caracter"

                />
            
               
            </div>
        </div>

    </header>

</x-layout>