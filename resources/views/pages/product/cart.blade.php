@extends('layouts.main')

@section('styles')
<style>
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .custom-number-input input:focus {
        outline: none !important;
    }

    .custom-number-input button:focus {
        outline: none !important;
    }
</style>
@endsection


@section('pages')
<main class="my-8">
    <div class="container px-6 mx-auto">
        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                @if ($message = Session::get('success'))
                <div class="p-4 mb-3 bg-green-400 rounded">
                    <p class="text-green-800">{{ $message }}</p>
                </div>
                @endif
                <h3 class="text-3xl text-bold">Cart List</h3>
                <div class="flex-1">
                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                        <thead>
                            <tr class="h-12 uppercase">
                                <th class="text-center">Image</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Remove </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                            <tr>
                                <td class="flex justify-center">
                                    <a href="#">
                                        <img src="{{ Storage::url('public/assets/image/') . $item->attributes->image }}"
                                            class="w-20 rounded" alt="Thumbnail">
                                    </a>
                                </td>
                                <td class="justify-center text-center">
                                    <a href="#">
                                        {{ $item->name }}
                                    </a>
                                </td>
                                <td class="flex justify-center">
                                    <div class="h-10 w-28">
                                        <div class="relative flex flex-row w-full h-8">

                                            <form class="flex h-10" action="{{ route('cart.update') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id }} ">
                                                <div class="w-32 h-10 custom-number-input">
                                                    <div
                                                        class="relative flex flex-row w-full h-10 bg-transparent rounded-lg">
                                                        <button data-action="decrement"
                                                            class="w-20 h-full text-gray-600 bg-gray-300 rounded-l outline-none cursor-pointer hover:text-gray-700 hover:bg-gray-400">
                                                            <span class="m-auto text-2xl font-thin">−</span>
                                                        </button>
                                                        <input type="number"
                                                            class="flex items-center w-full font-semibold text-center text-gray-700 bg-gray-300 outline-none focus:outline-none text-md hover:text-black focus:text-black md:text-basecursor-default"
                                                            name="quantity" value="{{ $item->quantity }}" />
                                                        <button data-action="increment"
                                                            class="w-20 h-full text-gray-600 bg-gray-300 rounded-r cursor-pointer hover:text-gray-700 hover:bg-gray-400">
                                                            <span class="m-auto text-2xl font-thin">+</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="text-sm font-medium lg:text-base">
                                        Rp. {{ number_format($item->price, 0, ',', '.')}}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="px-4 py-2 text-white bg-red-600">x</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="my-5">
                        Total: Rp. {{ number_format(Cart::getTotal(), 0, ',', '.')}}
                    </div>
                    <div>
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 bg-red-300">Remove All Cart</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script>
    function decrement(e) {
  const btn = e.target.parentNode.parentElement.querySelector(
    'button[data-action="decrement"]'
  );
  const target = btn.nextElementSibling;
  let value = Number(target.value);
  value--;
  target.value = value;
}

function increment(e) {
  const btn = e.target.parentNode.parentElement.querySelector(
    'button[data-action="decrement"]'
  );
  const target = btn.nextElementSibling;
  let value = Number(target.value);
  value++;
  target.value = value;
}

const decrementButtons = document.querySelectorAll(
  `button[data-action="decrement"]`
);

const incrementButtons = document.querySelectorAll(
  `button[data-action="increment"]`
);

decrementButtons.forEach(btn => {
  btn.addEventListener("click", decrement);
});

incrementButtons.forEach(btn => {
  btn.addEventListener("click", increment);
});
</script>
@endsection