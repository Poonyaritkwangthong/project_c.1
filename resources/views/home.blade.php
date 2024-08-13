@extends('layouts.app')

@section('content')
<div>
    <div class="w-full h-full mx-auto">
    @foreach ( $cars as $item )
    <img src="{{ $item->c_img }}" alt="">
    </div>

    <div class="mt-[3rem] text-center text-3xl text-blue-500">
        <h1>Car is beautifull</h1>
    </div>
    <div>
        <div class="flex justify-center mt-[3rem]">
            <i><button class="w-[14] h-[7] border-2 border-black bg-slate-400 text-white text-2xl p-2"><a href="">Europe car</a></button></i>
            <i><button class="w-[14] h-[7] border-2 border-black bg-slate-400 text-white text-2xl p-2"><a href="">USA car</a></button></i>
            <i><button class="w-[14] h-[7] border-2 border-black bg-slate-400 text-white text-2xl p-2"><a href="">Japan car</a></button></i>
        </div>
        <div>
            <div class="w-[100rem] h-[40rem] border-2 border-black mx-auto">
                    <div class="w-[20rem] h-[30rem] mt-[5rem] bg-slate-400 mx-auto">
                        <div>
                            <img src="{{ $item->c_img }}" alt="">
                            <h1>{{ $item->c_name }}</h1>
                            <p>{{ $item->c_detail }}</p>
                            @endforeach
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
