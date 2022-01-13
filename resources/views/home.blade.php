<x-layout>
    <x-slot name='title'>Home</x-slot>
    <x-slot name='content'>
        <div class="mt-5">
            <div class="text-center">
                <img src="{{asset('images/photo.jpg')}}" alt=""
                class="img-thumbnail" width="250px" height="150px">
            </div>
            <div class="mt-5 text-white mx-5 text-justify">
                <h1 class="fw-bold st-font">Hello,</h1>
                <div class="px-4" style="line-height: 2rem;">
                <p style="text-indent:100px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi, consequuntur? Ipsum libero at nesciunt nulla delectus quaerat, officiis eveniet porro laborum rem autem laboriosam hic dolorum nihil nostrum eos quis.</p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route('contact')}}" 
                class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
                <a href="{{route('contact')}}" 
                class="btn btn-outline-info mx-5 my-3">Contact</a>
            </div>
        </div>
    </x-slot>
</x-layout>