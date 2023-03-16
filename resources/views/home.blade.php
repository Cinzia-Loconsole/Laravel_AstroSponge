<x-layout>

<x-slot name="title">Home</x-slot>

@if(session('message'))

<div class ="alert text-center alert-warning">
    {{session('message')}}
</div>

@endif

</x-layout>