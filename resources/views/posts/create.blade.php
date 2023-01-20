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

    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <h1> Add New Post </h1>
                <div class="mb-3">
                  <label for="InputPost1" class="form-label">Post Caption</label>
                  <input type="text" class="form-control" id="InputPost1" name="caption">
                  @error('caption')
                    <p style="color:red;">{{$message}} </p>
                  @enderror

                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Post Image</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                    @error('image')
                    <p style="color:red;">{{$message}} </p>
                   @enderror
                </div>

                <button type="submit" class="btn btn-primary">Add New Post</button>
          </div>

        </div>
   </form>


</div>
</x-app-layout>
