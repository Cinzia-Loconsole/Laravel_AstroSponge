<x-layout>

    <x-slot name="title">Signs</x-slot>
    
    <section class="container">
        <div class="row justify-content-center mt-4">
            @foreach($caracters as $caracter)

            <x-card
            
            :array="$caracter"
            />

            @endforeach

        </div>
    </section>
    
    
    
    
    </x-layout>