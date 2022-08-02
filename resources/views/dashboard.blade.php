{{-- @include('profile.sidebar') --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{-- @include('profile.header') --}}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            
                <a class="btn btn-primary" href="{{url('/uploadpage')}}">Upload Video</a>
           
        </div>
    </div>
</x-app-layout>




