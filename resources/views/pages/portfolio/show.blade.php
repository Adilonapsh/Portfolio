@push('styles')
    <link rel="stylesheet" href="{{ asset('css/frappe_gantt_chart.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/snapsvg.js') }}"></script>
    <script src="{{ asset('js/frappe_gantt_chart.js') }}"></script>
    <script>
        var tasks = [{
                id: 'Designing website',
                name: 'Designing website',
                start: '2020-9-28',
                end: '2020-10-10',
                progress: 100,
            },
            {
                id: 'Start coding',
                name: 'Start coding',
                start: '2020-10-12',
                end: '2021-1-2',
                progress: 100,
                dependencies: "Designing website"
            },
            {
                id: 'Gathering data',
                name: 'Gathering data',
                start: '2020-10-17',
                end: '2021-1-2',
                progress: 100,
            },
            {
                id: 'Review',
                name: 'Review',
                start: '2021-1-1',
                end: '2021-1-10',
                progress: 100,
                dependencies: 'Start coding'
            },
            {
                id: 'Task 4',
                name: 'Deploy',
                start: '2021-1-10',
                end: '2021-1-15',
                progress: 100,
                dependencies: "Review"
            },
        ];
        var gantt = new Gantt("#gantt", tasks, {
            view_mode: "Month"
        });

        function changeGanttViewMode(view) {
            gantt.change_view_mode(view);
            $(".t-view-mode").text(view);
            $(".gantt").height($(".gantt").attr("height") - 110)
        }

        $(".view-mode").click(function() {
            changeGanttViewMode($(this).text());
        });
    </script>
@endpush
<x-app-layout>
    <div class="p-0 lg:p-10 dark:text-white">
        <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
            <div>

            </div>
            {{-- PROJECT TIMELINE --}}
            <div>
                <div class="w-max">
                    <h5 class="text-2xl">{{ __('Project Timeline') }}</h5>
                    <hr class="border my-3">
                </div>
                <div class="flex justify-between">
                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                            <li class="mr-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg view-mode">Day</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg view-mode">Week</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg view-mode">Month</button>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p>Viewing in <span class="t-view-mode">Month</span></p>
                    </div>
                </div>
                <div class="h-full">
                    <svg id="gantt"></svg>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
