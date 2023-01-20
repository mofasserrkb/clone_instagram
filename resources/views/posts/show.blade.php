<x-app-layout>
    <!-- <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
         <a  href="#" >
            <div>
                <img src=""  width="100px" alt="">
            </div>

         </a>
      </h2>


    </x-slot> -->

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
<div class="container">

    <div class="row">
        <div class="col-8">
            <img src="{{asset('images/'.$post->image)}}" alt="" style="width: 100%;" >
        </div>
        <div class="col-4">
            <div>
                <h3>{{$post->user->username}} </h3>
               <p> <strong>{{$post->caption}}      </strong> </p>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
