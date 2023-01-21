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
        <div class="col col-12 col-md-3  p-5">
            <img src="{{asset('images/'.$user->profile->image)}}" class="rounded-circle"  alt="">
        </div>
        <div class="col col-12 col-md-9   pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
           <h1>{{$user->username}}</h1>
           @can('update',$user->profile)
          <button class="btn btn-primary"><a href="{{route('post.create')}}" style="color:white; text-decoration:none;">Add New Post</a></button>
          @endcan
            </div>
            @can('update',$user->profile)
            <a href="{{route('profile.edit',$user->id)}}" style=" text-decoration:none;">Edit Profile</a>
            @endcan
          <div class="d-flex">
                <div class="p-3"><strong>{{$user->posts->count()}}</strong>posts</div>
                <div class="p-3"><strong>234</strong>followers</div>
                <div class="p-3"><strong>234</strong>following</div>
           </div>
                <div class="pt-4 fw-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div> <a href="#" class="profileUrl">{{$user->profile->url}} </a></div>
        </div>
    </div>
    <div class="row pt-4">
         @foreach ($user->posts as $post)


        <div class="col-4 pb-4">
            <!-- users posts is coming from user post relationship -->
          <a href="{{route('post.show',$post->id)}}">
            <img src="{{asset('images/'.$post->image)}}"   alt="">
          </a>
        </div>
        @endforeach
            </div>
</div>
</x-app-layout>
