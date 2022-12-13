@extends('layouts.main')
@section('pages')
<div class="w-full px-4 pb-6 bg-white rounded-md">
    <div class="flex justify-between w-full pt-6 ">
        <p class="ml-3 text-3xl font-semibold text-black">Product Table</p>
        <a href="/admin/form-product"
            class="px-4 py-2 font-semibold text-green-500 transition duration-200 ease-in transform bg-transparent border border-green-500 rounded hover:bg-green-500 hover:text-white hover:border-transparent hover:-translate-y-1 active:translate-y-0">
            Add Product
        </a>


    </div>
    <div class="flex justify-end w-full px-2 mt-5">
        <div class="relative inline-block w-full sm:w-64 ">
            <input type="" name=""
                class="block w-full px-4 py-1 pl-8 text-sm leading-snug text-gray-600 bg-gray-100 border border-gray-300 rounded-lg appearance-none"
                placeholder="Search" />

            <div class="absolute inset-y-0 left-0 flex items-center px-2 pl-3 text-gray-300 pointer-events-none">

                <svg class="w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999">
                    <path
                        d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z" />
                </svg>
            </div>
        </div>
    </div>
    <div class="mt-6 overflow-x-auto">
        <table class="w-full border-collapse table-auto">
            <thead>
                <tr class="text-sm font-medium text-left text-gray-700 rounded-lg" style="font-size: 0.9674rem">
                    <th class="px-4 py-2" style="background-color:#f8f8f8">No</th>
                    <th class="px-4 py-2 w-60" style="background-color:#f8f8f8">Product Image</th>
                    <th class="px-4 py-2 w-60" style="background-color:#f8f8f8">Product Name</th>
                    <th class="px-4 py-2" style="background-color:#f8f8f8">Product Description</th>
                    <th class="px-4 py-2 w-44" style="background-color:#f8f8f8">Product Price</th>
                    <th class="px-4 py-2" style="background-color:#f8f8f8">Action</th>
                </tr>
            </thead>
            <tbody class="text-sm font-normal text-gray-700">
                @foreach ($items as $index => $item)
                <tr class="py-10 border-b border-gray-200 hover:bg-gray-100">
                    <td class="px-4 py-4">{{ $index + 1 }}</td>
                    <td class="px-4 py-4">{{ $item->image }}</td>
                    <td class="px-4 py-4">{{ $item->name }}</td>
                    <td class="px-4 py-4">{{ $item->description }}</td>
                    <td class="px-4 py-4">Rp. {{ number_format($item->price, 0, ',', '.')}}</td>
                    <td class="px-4 py-4">
                        <div class="flex justify-center item-center">
                            <a href="#" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                            <a class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                            <a href="/admin/destroy/{{ $item->id }}"
                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div id="pagination" class="flex items-center justify-center w-full pt-4 border-t border-gray-100">

        <svg class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.4">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M9 12C9 12.2652 9.10536 12.5196 9.29289 12.7071L13.2929 16.7072C13.6834 17.0977 14.3166 17.0977 14.7071 16.7072C15.0977 16.3167 15.0977 15.6835 14.7071 15.293L11.4142 12L14.7071 8.70712C15.0977 8.31659 15.0977 7.68343 14.7071 7.29289C14.3166 6.90237 13.6834 6.90237 13.2929 7.29289L9.29289 11.2929C9.10536 11.4804 9 11.7348 9 12Z"
                    fill="#2C2C2C" />
            </g>
        </svg>

        <p class="mx-2 text-sm leading-relaxed text-blue-600 cursor-pointer hover:text-blue-600">1</p>
        <p class="mx-2 text-sm leading-relaxed cursor-pointer hover:text-blue-600">2</p>
        <p class="mx-2 text-sm leading-relaxed cursor-pointer hover:text-blue-600"> 3 </p>
        <p class="mx-2 text-sm leading-relaxed cursor-pointer hover:text-blue-600"> 4 </p>
        <svg class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M15 12C15 11.7348 14.8946 11.4804 14.7071 11.2929L10.7071 7.2929C10.3166 6.9024 9.6834 6.9024 9.2929 7.2929C8.9024 7.6834 8.9024 8.3166 9.2929 8.7071L12.5858 12L9.2929 15.2929C8.9024 15.6834 8.9024 16.3166 9.2929 16.7071C9.6834 17.0976 10.3166 17.0976 10.7071 16.7071L14.7071 12.7071C14.8946 12.5196 15 12.2652 15 12Z"
                fill="#18A0FB" />
        </svg>

    </div>
</div>

@endsection