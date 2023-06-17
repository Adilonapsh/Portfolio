@push('styles')
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />
@endpush
@push('scripts')
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <script src="{{ asset('/js/table.js') }}"></script>
    <script>
        ""
        getbasicdynamictable("/getportfoliotable", "portfolio")
    </script>
@endpush
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Portfolio') }}
        </h2>
    </x-slot>
    <div class="lg:p-10 dark:text-white transition-all">
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h1 class="font-bold text-2xl mb-5">Index Portfolio</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table id="portfolio" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3" width="1%">No.</th>
                            <th scope="col" class="px-6 py-3">App Name</th>
                            <th scope="col" class="px-6 py-3">App URL</th>
                            <th scope="col" class="px-6 py-3 w-72" width="5%">App Description</th>
                            <th scope="col" class="px-6 py-3" width="1%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolios as $key => $portfolio)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white bg-gray-50 dark:bg-gray-800">
                                    {{ $key + 1 }}.</td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $portfolio->app_name }}</td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white bg-gray-50 dark:bg-gray-800">
                                    {{ $portfolio->app_url }}</td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    <div class="whitespace-nowrap truncate hover:text-elipsis w-96">
                                        {{ $portfolio->desc }}
                                    </div>
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white bg-gray-50 dark:bg-gray-800">
                                    <button
                                        class="px-3 py-2 bg-yellow-300 text-sm rounded-md hover:bg-yellow-400 hover:text-white duration-200">Edit</button>
                                    <button
                                        class="px-3 py-2 bg-red-500 text-sm rounded-md hover:bg-red-600 hover:text-white duration-200">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
