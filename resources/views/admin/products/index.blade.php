<x-admin-layout>
    <div class="card w-full" style="padding-top: 10px;">

        <div class="card-body">
            <div class="flex flex-row justify-between items-center">
                <h1 class="font-extrabold text-lg">Products</h1>
                <a href="{{ route('admin.products.create') }}" class="btn-gray text-sm"
                style="background-color: #00FF00; color: #000000; padding: 10px; border: 1px solid #0000FF; border-radius: 5px;">
                Create a New Product</a>
            </div>

            @if (session('success'))
                <div class="alert alert-success mt-5 flex justify-between">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert"
                        onclick="this.parentElement.remove();">{{ 'x' }}</button>
                </div>
            @endif

            <table class="table-auto w-full mt-5 text-right">

                <thead>
                    <tr>
                        <td class="py-4 font-extrabold text-sm text-left">Name</td>
                        <td class="py-4 font-extrabold text-sm">Price</td>
                        <td class="py-4 font-extrabold text-sm">Quantity</td>
                        <td class="py-4 font-extrabold text-sm">Color</td>
                        <td class="py-4 font-extrabold text-sm">Action</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="py-4 text-sm text-gray-600 flex flex-row items-center text-left">
                                <div class="w-8 h-8 overflow-hidden mr-3">
                                    <img src="{{ asset('assets/img/sneakers.svg') }}" class="object-cover">
                                </div>
                                {{ $product->name }}
                            </td>
                            <td class="py-4 text-xs text-gray-600">
                                {{ 'Rp ' . number_format($product->price, 2, ',', '.') }}
                            </td>
                            <td class="py-4 text-xs text-gray-600">{{ $product->quantity }}</td>
                            <td class="py-4 text-xs text-gray-600">{{ $product->color }}</td>
                            <td class="py-4 text-xs text-gray-600">
                                <div class="flex flex-row justify-end">
                                    <a href="{{ route('admin.products.show', $product->slug) }}"
                                        class="btn-shadow text-xs mr-2" 
                                        style="background-color: #0000FF; color: #FFFFFF; padding: 10px; border: 1px solid #0000FF; border-radius: 5px;">
                                            View
                                    </a>
                                    <a href="{{ route('admin.products.edit', $product->slug) }}"
                                        class="btn-gray text-xs mr-2"
                                        style="background-color: #FFFF00; color: #000000; padding: 10px; border: 1px solid #FFFF00; border-radius: 5px;">
                                            Edit
                                    </a>
                                    <form action="/admin/products/{{ $product->slug }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-danger text-xs"
                                            onclick="return confirm('Are you sure?')" 
                                            style="background-color: #FF0000; color: #FFFFFF; padding: 10px; border: 1px solid #FF0000; border-radius: 5px;">
                                                Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>
</x-admin-layout>
