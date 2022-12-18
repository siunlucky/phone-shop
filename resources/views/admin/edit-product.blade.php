@extends('layouts.main')
@section('pages')
<div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-[550px]">
        <form action="/admin/edit-product/update/{{ $item->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                    Product Name
                </label>
                <input type="text" name="name" id="name" placeholder="Product Name" value="{{ $item->name }}"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('name') border-red-500 @enderror" />

                @error('name')
                <div class="mt-2 text-white bg-red-500 alert">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="mb-5">
                <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                    Product Description
                </label>
                <textarea rows="4" name="description" id="description" placeholder="Product Description..."
                    class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('description') border-red-500 @enderror">{{ $item->description }}</textarea>

                @error('description')
                <div class="mt-2 text-white bg-red-500 alert">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="mb-5">
                <label for="price" class="mb-3 block text-base font-medium text-[#07074D]">
                    Price
                </label>
                <input type="number" name="price" id="price" placeholder="Price"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('price') border-red-500 @enderror"
                    value="{{ $item->price }}" />

                @error('price')
                <div class="mt-2 text-white bg-red-500 alert">
                    {{ $message }}
                </div>

                @enderror
            </div>
            <div class="mb-5">
                <label for="released" class="mb-3 block text-base font-medium text-[#07074D]">
                    Released Year
                </label>
                <input type="number" name="released" id="released" placeholder="Released Year"
                    value="{{ $item->released }}"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('released') border-red-500 @enderror" />
                @error('released')
                <div class="mt-2 text-white bg-red-500 alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="image" class="mb-3 block text-base font-medium text-[#07074D]">Last Image is {{
                    $item->image }}</label>
                <input type="file" value="{{ $item->image }}"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md @error('image') border-red-500 @enderror"
                    name="image">

                @error('image')
                <div class="mt-2 text-white bg-red-500 alert">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="mb-6">
                <button
                    class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection