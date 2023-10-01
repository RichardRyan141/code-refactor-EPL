<div id="sideBar"
    class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


    <!-- sidebar content -->
    <div class="flex flex-col">

        <!-- sidebar toggle -->
        <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <!-- end sidebar toggle -->

        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">home</p>

        <!-- link -->
        <a href="{{ route('dashboard') }}"
            class="mb-3 capitalize font-medium text-md text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>
            dashboard
        </a>
        <!-- end link -->



        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Admin</p>

        <!-- link -->
        <a href="{{ route('categories.index') }}"
            class="mb-3 capitalize font-medium text-md text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list text-xs mr-2"></i>
            Categories
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="{{ route('products.index') }}"
            class="mb-3 capitalize font-medium text-md text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-box text-xs mr-2"></i>
            Products
        </a>
        <!-- end link -->


    </div>
    <!-- end sidebar content -->

</div>
