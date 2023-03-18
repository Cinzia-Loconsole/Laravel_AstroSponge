<x-layout>
<header class="caracters">
    <x-slot name="title">Signs</x-slot>
    
    <section class="container">
        <div class="row justify-content-center">
            @foreach($caracters as $caracter)

            <x-card
            
            :array="$caracter"
            />

            @endforeach

        </div> 
    </section>
    
    
    
</header>   
    </x-layout>