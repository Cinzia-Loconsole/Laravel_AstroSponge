<x-layout>
<header class="caracters2">
    <x-slot name="title">Signs</x-slot>
 
    <section class="container">
        <div class="row justify-content-center">
             @foreach($signs as $sign)

            <x-card
            
            :array="$sign"
            />

            @endforeach

        </div>
    </section>
    
    
</header>    
    
    </x-layout>
