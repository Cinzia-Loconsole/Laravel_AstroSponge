<x-layout>

    <div class="container">
        <div class="row justify-content-center">
                <h1 class="text-center">{{$caracter['name']}}</h1> 
                <x-card
   
                :array="$caracter"

                />
            
               
            </div>
        </div>

   

</x-layout>