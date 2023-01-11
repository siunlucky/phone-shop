@extends('layouts.main')

@section('pages')
<section class="relative h-screen pt-12 bg-blueGray-50">
    <div class="flex items-center">
        <div class="w-full px-4 ml-auto mr-auto md:w-4/12">
            <img alt="..." class="max-w-full rounded-lg shadow-lg"
                src="{{ Storage::url('public/assets/image/') . $item->image }}">
        </div>
        <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
            <div class="md:pr-12">

                <h3 class="mb-4 text-3xl font-bold text-black">{{ $item->name }}</h3>
                <span class="text-2xl font-semibold text-red-600">Rp. {{ number_format($item->price, 2, ',', '.')
                    }}</span>
                <p class="my-4 text-lg leading-relaxed text-black">
                    {{ $item->description }}
                </p>

                @if (Auth::check())
                @if (Auth()->user()->role == "admin")
                <a class="" href="/admin/edit-product/{{ $item->id }}">
                    <button class="relative w-48 h-12 overflow-hidden text-lg bg-white rounded-lg shadow group">
                        <div
                            class="absolute inset-0 w-3 bg-emerald-500 transition-all duration-[250ms] ease-out group-hover:w-full">
                        </div>
                        <span class="relative text-black group-hover:text-white">Edit Product &nbsp; 🡺</span>
                    </button>
                </a>
                @else
                <a class="" href="">
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <input type="hidden" value="{{ $item->name }}" name="name">
                        <input type="hidden" value="{{ $item->price }}" name="price">
                        <input type="hidden" value="{{ $item->image }}" name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="relative w-48 h-12 overflow-hidden text-lg bg-white rounded-lg shadow group">
                            <div
                                class="absolute inset-0 w-3 bg-emerald-500 transition-all duration-[250ms] ease-out group-hover:w-full">
                            </div>
                            <span class="relative text-black group-hover:text-white">Add to Cart &nbsp; 🡺</span>
                        </button>
                    </form>

                </a>
                @endif

                @else
                <a class="" href="/login">
                    <button class="relative w-48 h-12 overflow-hidden text-lg bg-green-400 rounded-lg shadow group">

                        <span class="relative text-white">Login to purchase</span>
                    </button>
                </a>






                @endif




            </div>
        </div>
    </div>
</section>
@endsection