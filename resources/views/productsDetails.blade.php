<x-layout>

    <div class="container">
        <div class="row justify-content-center">
                <h1 class="text-center">{{$sign['name']}}</h1> 
                <x-card
   
                :array="$sign"

            />
            
               
            </div>
        </div>

   

</x-layout>
    