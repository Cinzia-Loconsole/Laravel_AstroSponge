<x-layout>

    <x-slot name="title">Signs</x-slot>
    
    <section class="container">
        <div class="row justify-content-center mt-4">
            @foreach($signs as $sign)

            <x-card
            
            :array="$sign"
            />

            @endforeach

        </div>
    </section>
    
    
    
    
    </x-layout>