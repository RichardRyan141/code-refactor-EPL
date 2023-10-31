<x-admin-layout>
    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <h1 class="h5">alerts</h1>
        @foreach($alerts as $alert)
            <p> {{ $alert->alert_entry }}</p>
            <hr></hr>
        @endforeach
    </div>
    <!-- end content -->
</x-admin-layout>
