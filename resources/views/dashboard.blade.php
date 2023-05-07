<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-3">
                <div class="grid gap-2 grid-cols-2">
                    <div class="p-6 text-gray-900">
                        <canvas id="eType" height="100px"></canvas>
                    </div>
                    <div class="p-6 text-gray-900">
                        <canvas id="eForm" height="100px"></canvas>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <canvas id="myChart" height="100px"></canvas>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{asset('js/chart-utils.js')}}"></script>
        <script type="text/javascript">
            const Utils = ChartUtils.init();
            var regionLabels =  {{ Js::from($regionLabel) }};
            var regionData =  {{ Js::from($regionData) }};
            var eTypeLabel = {{Js::from($etypeLabel)}};
            var eTypeData = {{Js::from($etypeData)}};
            var eFormLabel = {{Js::from($eFormLabel)}};
            var eFormData = {{Js::from($eFormData)}};
            const dataForType = {
                labels: eTypeLabel,
                datasets: [{
                    label: 'Абитуриентов',
                    backgroundColor: Object.values(Utils.CHART_COLORS),
                    data: eTypeData,
                }]
            };
            const dataForForm = {
                labels: eFormLabel,
                datasets: [{
                    label: 'Абитуриентов',
                    backgroundColor: Object.values(Utils.CHART_COLORS),
                    data: eFormData,
                }]
            };
            const dataForRegion = {
                labels: regionLabels,
                datasets: [{
                    label: 'Абитуриентов',
                    // backgroundColor: Object.values(Utils.CHART_COLORS),
                    backgroundColor: Utils.CHART_COLORS.red,
                    data: regionData,
                }]
            };
            const configForEType = {
                type: 'pie',
                data: dataForType
            };


            const eType = new Chart(
                document.getElementById('eType'),
                configForEType
            );

            const configForEForm = {
                type: 'pie',
                data: dataForForm
            };
            const eForm = new Chart(
                document.getElementById('eForm'),
                configForEForm
            );

            const configForRegion = {
                type: 'bar',
                data: dataForRegion,
                options: {
                    indexAxis: 'x',
                    elements: {
                        bar: {
                            borderWidth: 2,
                        }
                    },
                    responsive: true,
                    plugins: {
                        legend: false,
                        title: {
                            display: true,
                            text: 'Абитуриенты по регионам'
                        }
                    }
                }
            };
            const myChart = new Chart(
                document.getElementById('myChart'),
                configForRegion
            );
        </script>
    @endpush
</x-app-layout>


