<x-admin-layout>
    <style>
        .btn {
            text-align: center;
            text-transform: capitalize;
            --bg-opacity: 1;
            background-color: #b2f5ea;
            background-color: rgba(178, 245, 234, var(--bg-opacity));
            display: block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            border-radius: 0.25rem;
            --text-opacity: 1;
            color: #319795;
            color: rgba(49, 151, 149, var(--text-opacity));
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms
        }

        .btn:hover {
            --bg-opacity: 1;
            background-color: #81e6d9;
            background-color: rgba(129, 230, 217, var(--bg-opacity));
            --text-opacity: 1;
            color: #285e61;
            color: rgba(40, 94, 97, var(--text-opacity))
        }

        .btn-indigo {
            text-align: center;
            text-transform: capitalize;
            --bg-opacity: 1;
            background-color: #667eea;
            background-color: rgba(102, 126, 234, var(--bg-opacity));
            --text-opacity: 1;
            color: #ebf4ff;
            color: rgba(235, 244, 255, var(--text-opacity));
            display: block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            border-radius: 0.25rem;
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms
        }

        .btn-indigo:hover {
            --bg-opacity: 1;
            background-color: #5a67d8;
            background-color: rgba(90, 103, 216, var(--bg-opacity));
            --text-opacity: 1;
            color: #c3dafe;
            color: rgba(195, 218, 254, var(--text-opacity))
        }

        .btn-info {
            text-align: center;
            text-transform: capitalize;
            --bg-opacity: 1;
            background-color: #faf089;
            background-color: rgba(250, 240, 137, var(--bg-opacity));
            --text-opacity: 1;
            color: #d69e2e;
            color: rgba(214, 158, 46, var(--text-opacity));
            display: block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            border-radius: 0.25rem;
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms
        }

        .btn-info:hover {
            --bg-opacity: 1;
            background-color: #f6e05e;
            background-color: rgba(246, 224, 94, var(--bg-opacity));
            --text-opacity: 1;
            color: #d69e2e;
            color: rgba(214, 158, 46, var(--text-opacity))
        }

        .btn-danger {
            text-align: center;
            text-transform: capitalize;
            --bg-opacity: 1;
            background-color: #feb2b2;
            background-color: rgba(254, 178, 178, var(--bg-opacity));
            --text-opacity: 1;
            color: #e53e3e;
            color: rgba(229, 62, 62, var(--text-opacity));
            display: block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            border-radius: 0.25rem;
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms
        }

        .btn-danger:hover {
            --bg-opacity: 1;
            background-color: #fc8181;
            background-color: rgba(252, 129, 129, var(--bg-opacity));
            --text-opacity: 1;
            color: #e53e3e;
            color: rgba(229, 62, 62, var(--text-opacity))
        }

        .btn-gray {
            text-align: center;
            text-transform: capitalize;
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity));
            border-width: 1px;
            --border-opacity: 1;
            border-color: #e2e8f0;
            border-color: rgba(226, 232, 240, var(--border-opacity));
            display: block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            border-radius: 0.25rem;
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity));
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms
        }

        .btn-gray:hover {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity));
            --text-opacity: 1;
            color: #2d3748;
            color: rgba(45, 55, 72, var(--text-opacity));
            border-width: 1px;
            --border-opacity: 1;
            border-color: #e2e8f0;
            border-color: rgba(226, 232, 240, var(--border-opacity))
        }

        .btn-bs-dark {
            text-align: center;
            text-transform: capitalize;
            --bg-opacity: 1;
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--bg-opacity));
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity));
            display: block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            border-radius: 0.25rem;
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms
        }

        .btn-bs-dark:hover {
            opacity: 0.75
        }

        .btn-bs-primary {
            text-align: center;
            text-transform: capitalize;
            --bg-opacity: 1;
            background-color: #5a67d8;
            background-color: rgba(90, 103, 216, var(--bg-opacity));
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity));
            display: block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            border-radius: 0.25rem;
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms
        }

        .btn-bs-primary:hover {
            opacity: 0.75
        }

        .btn-bs-secondary {
            text-align: center;
            text-transform: capitalize;
            --bg-opacity: 1;
            background-color: #a0aec0;
            background-color: rgba(160, 174, 192, var(--bg-opacity));
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity));
            display: block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            border-radius: 0.25rem;
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms
        }

        .btn-bs-secondary:hover {
            opacity: 0.75
        }

        .btn-bs-success {
            text-align: center;
            text-transform: capitalize;
            --bg-opacity: 1;
            background-color: #48bb78;
            background-color: rgba(72, 187, 120, var(--bg-opacity));
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity));
            display: block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            border-radius: 0.25rem;
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms
        }

        .btn-bs-success:hover {
            opacity: 0.75
        }

        .btn-bs-danger {
            text-align: center;
            text-transform: capitalize;
            --bg-opacity: 1;
            background-color: #f56565;
            background-color: rgba(245, 101, 101, var(--bg-opacity));
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity));
            display: block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            border-radius: 0.25rem;
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms
        }

        .btn-bs-danger:hover {
            opacity: 0.75
        }

        .btn-bs-info {
            text-align: center;
            text-transform: capitalize;
            --bg-opacity: 1;
            background-color: #ecc94b;
            background-color: rgba(236, 201, 75, var(--bg-opacity));
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity));
            display: block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            border-radius: 0.25rem;
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms
        }

        .btn-bs-info:hover {
            opacity: 0.75
        }
    </style>
    <div class="flex justify-between items-center my-6">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Items on Shopping Cart
        </h2>
    </div>

    @if (session('success'))
        <div class="alert alert-success mt-5 flex justify-between">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert"
                onclick="this.parentElement.remove();">{{ 'x' }}</button>
        </div>
    @endif

    <form action="/admin/cart/filter" method="GET">
        <div class="flex justify-between items-center my-6">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Users
            </h2>
            <select id="user_id" name="user_id">
                <option value="">All Users</option>
                @foreach (\App\Models\User::all() as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-between items-center my-6">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Products
            </h2>
            <select id="product_id" name="product_id">
                <option value="">All Products</option>
                @foreach (\App\Models\Product::all() as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    <div class="w-full overflow-hidden rounded-lg shadow-xs my-6">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Product</th>
                        <th class="px-4 py-3">Quantity</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach ($carts as $cart)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                            alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{ $cart->user_id }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $cart->product_id }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $cart->quantity }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
