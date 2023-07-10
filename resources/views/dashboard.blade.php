@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>   
    <script>
        const data = [
            { name: "Windows", y: 10, color: "rgb(1, 95, 139)" },
            { name: "MAC", y: 20, color: "rgb(0, 0, 0)" },
            { name: "Android", y: 15, color: "rgb(161, 209, 97)" },
            { name: "IOS", y: 25, color: "rgb(0, 0, 0)" },
            { name: "Linux", y: 22, color: "rgb(247, 183, 0)" }
        ];
        var canvas = new Chart(document.getElementById('traffic-by-devices'),{
            type: 'doughnut',
            data: {
                labels: data.map(row => row.name),
                datasets: [
                    {
                        label: 'Total Pengguna',
                        data: data.map(row => row.y),

                    }
                ]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position : "bottom",
                        title: "awdawd",
                        align: "start"
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                console.log(context.parsed)

                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed.y !== null) {
                                    label += context.parsed + " Pengguna";
                                }
                                return label;
                            }
                        }
                    }
                },
                responsive:true,
            }
        })
    </script>
@endpush
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:text-white">
            <div class="mb-5">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-5">
                    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-700 dark:border-gray-700">
                        <div class="flex items-center mb-5">
                            <span class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center "><i class="fa-brands fa-facebook-f text-white"></i></span>
                            <div class="ml-3">
                                <h5 class="font-bold text-lg">Adil Ivansyah L</h5>
                                <p class="text-xs">Facebook</p>
                            </div>
                        </div>
                        <div >
                            <h4 class="font-black text-3xl">100.6K</h4>
                            <div class="flex justify-between items-center">
                                <p class="text-xs">Followers</p>
                                <small class="text-xs"><i class="fa-solid fa-arrow-trend-down text-red-400 mx-1"></i> <span class="text-xs">5%</span> </small>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-700 dark:border-gray-700">
                        <div class="flex items-center mb-5">
                            <span class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center "><i class="fa-brands fa-twitter text-white"></i></span>
                            <div class="ml-3">
                                <h5 class="font-bold text-lg">@Adilonapsh</h5>
                                <p class="text-xs">Twitter</p>
                            </div>
                        </div>
                        <div >
                            <h4 class="font-black text-3xl">100.6K</h4>
                            <div class="flex justify-between items-center">
                                <p class="text-xs">Followers</p>
                                <small class="text-xs"><i class="fa-solid fa-arrow-trend-up text-green-400 mx-1"></i> <span class="text-xs">20%</span> </small>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-700 dark:border-gray-700">
                        <div class="flex items-center mb-5">
                            <span class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center "><i class="fa-brands fa-instagram text-white"></i></span>
                            <div class="ml-3">
                                <h5 class="font-bold text-lg">@Noreplyao</h5>
                                <p class="text-xs">Instagram</p>
                            </div>
                        </div>
                        <div >
                            <h4 class="font-black text-3xl">100.6K</h4>
                            <div class="flex justify-between items-center">
                                <p class="text-xs">Followers</p>
                                <small class="text-xs"><i class="fa-solid fa-arrow-trend-down text-red-400 mx-1"></i> <span class="text-xs">20%</span> </small>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-700 dark:border-gray-700">
                        <div class="flex items-center mb-5">
                            <span class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center "><i class="fa-brands fa-youtube text-white"></i></span>
                            <div class="ml-3">
                                <h5 class="font-bold text-lg">Adilonapsh</h5>
                                <p class="text-xs">Youtube</p>
                            </div>
                        </div>
                        <div >
                            <h4 class="font-black text-3xl">1M</h4>
                            <div class="flex justify-between items-center">
                                <p class="text-xs">Subscribers</p>
                                <small class="text-xs"><i class="fa-solid fa-arrow-trend-up text-green-400 mx-1"></i> <span class="text-xs">20%</span> </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-flow-row-dense lg:grid-cols-6 grid-cols-1">
                    <div class="col-span-4 p-5">
                        <div class="flex items-center justify-between">
                            <h4 class="text-2xl font-bold">Visitor stats</h4>
                            <div class="flex mb-4">
                                <div class="border-b border-gray-200 dark:border-gray-700 hidden lg:block">
                                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                        <li class="mr-2" role="presentation">
                                            <button class="inline-flex p-2 border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="profile-tab" data-tabs-target="#facebook" type="button" role="tab" aria-controls="facebook" aria-selected="false">
                                                <span class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300""><i class="fa-brands fa-facebook-f text-blue-500"></i></span>
                                                <span class="hidden lg:block">Facebook</span>
                                            </button>
                                        </li>
                                        <li class="mr-2" role="presentation">
                                            <button class="inline-flex p-2 border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="dashboard-tab" data-tabs-target="#twitter" type="button" role="tab" aria-controls="twitter" aria-selected="false">
                                                <span class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300""><i class="fa-brands fa-twitter text-blue-500"></i></span>
                                                <span class="hidden lg:block">Twitter</span>
                                            </button>
                                        </li>
                                        <li class="mr-2" role="presentation">
                                            <button class="inline-flex p-2 border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="settings-tab" data-tabs-target="#instagram" type="button" role="tab" aria-controls="instagram" aria-selected="false">
                                                <span class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300""><i class="fa-brands fa-instagram text-blue-500"></i></span>
                                                <span class="hidden lg:block">Instagram</span>
                                            </button>
                                        </li>
                                        <li role="presentation">
                                            <button class="inline-flex p-2 border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="contacts-tab" data-tabs-target="#youtube" type="button" role="tab" aria-controls="youtube" aria-selected="false">
                                                <span class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300""><i class="fa-brands fa-youtube text-blue-500"></i></span>
                                                <span class="hidden lg:block">Youtube</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>         
                            </div>
                        </div>
                        <div>
                            <div class=" my-4 border-b border-gray-200 dark:border-gray-700 block lg:hidden flex justify-center">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-flex p-2 border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="facebook-tab" data-tabs-target="#facebook" type="button" role="tab" aria-controls="facebook" aria-selected="false">
                                            <span class="w-5 h-5 mr-2 text-center text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300""><i class="fa-brands fa-facebook-f text-blue-500"></i></span>
                                        </button>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-flex p-2 border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="twitter-tab" data-tabs-target="#twitter" type="button" role="tab" aria-controls="twitter" aria-selected="false">
                                            <span class="w-5 h-5 mr-2 text-center text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300""><i class="fa-brands fa-twitter text-blue-500"></i></span>
                                        </button>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-flex p-2 border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="instagram-tab" data-tabs-target="#instagram" type="button" role="tab" aria-controls="instagram" aria-selected="false">
                                            <span class="w-5 h-5 mr-2 text-center text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300""><i class="fa-brands fa-instagram text-blue-500"></i></span>
                                        </button>
                                    </li>
                                    <li role="presentation">
                                        <button class="inline-flex p-2 border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="youtube-tab" data-tabs-target="#youtube" type="button" role="tab" aria-controls="youtube" aria-selected="false">
                                            <span class="w-5 h-5 mr-2 text-center text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300""><i class="fa-brands fa-youtube text-blue-500"></i></span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="myTabContent">
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 border dark:border-gray-600" id="facebook" role="tabpanel" aria-labelledby="profile-tab">
                                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Facebook tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 border dark:border-gray-600" id="twitter" role="tabpanel" aria-labelledby="dashboard-tab">
                                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Twitter tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 border dark:border-gray-600" id="instagram" role="tabpanel" aria-labelledby="settings-tab">
                                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Instagram tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 border dark:border-gray-600" id="youtube" role="tabpanel" aria-labelledby="contacts-tab">
                                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Youtube tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-span-2 p-5">
                        <div class="border dark:border-gray-600 rounded p-4">
                            <h4 class="text-2xl font-bold">Traffic by device</h4>
                            <div class="p-10">
                                <canvas id="traffic-by-devices"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
