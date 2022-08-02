{{-- @include('profile.sidebar') --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{-- @include('profile.header') --}}

        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
             <div class="row">
                <div class="col-md-4">
               {{-- @include('profile.sidebar') --}}
                </div>
             </div>
            </div>

                <a class="btn btn-primary" href="{{url('/uploadpage')}}">Upload Video</a>

        </div>
    </div>
    @push('js')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  
@endpush
</x-app-layout>




