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
                <h1>Edit Profile</h1>
                <div class="mb-3">
                  <label for="Inputtitle1" class="form-label">Title</label>
                  <input type="text" class="form-control" id="Inputtitle1" name="title" value="{{ old('title') ??  $user->profile->title}}">
                  @error('title')
                    <p style="color:red;">{{$message}} </p>
                  @enderror

                </div>

                <div class="mb-3">
                    <label for="Inputdes1" class="form-label">Description</label>
                    <input type="text" class="form-control" id="Inputdesc1" name="description" value="{{ old('title') ??  $user->profile->description}}">
                    @error('description')
                      <p style="color:red;">{{$message}} </p>
                    @enderror

                  </div>

                  <div class="mb-3">
                    <label for="Inputurl1" class="form-label">Url</label>
                    <input type="text" class="form-control" id="Inputurl1" name="url" value="{{ old('title') ??  $user->profile->url}}">
                    @error('url')
                      <p style="color:red;">{{$message}} </p>
                    @enderror

                  </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Profile Image</label>
                    <input class="form-control" type="file" id="formFile" name="image" value="{{ old('title') ??  $user->profile->image}}">
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
