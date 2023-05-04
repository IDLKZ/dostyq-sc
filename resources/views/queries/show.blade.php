<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Профиль') }}
                </h2>

                <a
                    href="{{route('queries.index')}}"
                    type="button"
                    class="inline-block rounded bg-warning px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    Назад
                </a>
            </div>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="flex p-4">
                        <div
                            class="w-full flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 md:flex-row">
                            <img
                                class="h-96 w-full rounded-t-lg object-cover md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                src="{{$query->getFile('photo_url')}}"
                                alt="" />
                            <div class="flex flex-col justify-start p-6">
                                <h5
                                    class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
                                    {{$query->surname}} {{$query->name}} {{$query->middlename}}
                                </h5>
                                <p class="text-base text-neutral-600 dark:text-neutral-200">
                                    <b>ИИН:</b> {{$query->iin}}
                                </p>
                                <p class="text-base text-neutral-600 dark:text-neutral-200">
                                    <b>Телефон:</b> {{$query->phone}}
                                </p>
                                <p class="text-base text-neutral-600 dark:text-neutral-200">
                                    <b>Почта:</b> {{$query->email}}
                                </p>
                                <p class="text-base text-neutral-600 dark:text-neutral-200">
                                    <b>Гражданство:</b> {{$query->country->title_ru}}
                                </p>
                                <p class="text-base text-neutral-600 dark:text-neutral-200">
                                    <b>Адрес проживания:</b> {{$query->region->title_ru}} ({{$query->address}})
                                </p>
                                <p class="text-base text-neutral-600 dark:text-neutral-200">
                                    <b>ОП (специальность):</b> {{$query->eps->title_ru}}
                                </p>
                                <p class="text-base text-neutral-600 dark:text-neutral-200">
                                    <b>Образование:</b> {{$query->educationType->title_ru}}
                                </p>
                                <p class="text-base text-neutral-600 dark:text-neutral-200">
                                    <b>Форма обучения:</b> {{$query->educationForm->title_ru}}
                                </p>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="gap-8 columns-3">
                    <div
                        class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <h5
                            class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Удостоверение личности
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            <iframe src="{{asset($query->getFile('photo_card_url'))}}" class="w-full" height="300px"></iframe>
                        </p>
                        <a
                            href="{{asset($query->getFile('photo_card_url'))}}"
                            download
                            type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init
                            data-te-ripple-color="light">
                            Скачать
                        </a>
                    </div>
                    <div
                        class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <h5
                            class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Документ об образовании (аттестат/диплом)
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            <iframe src="{{asset($query->getFile('photo_diploma_url'))}}" class="w-full" height="300px"></iframe>
                        </p>
                        <a
                            type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init
                            href="{{asset($query->getFile('photo_diploma_url'))}}"
                            download
                            data-te-ripple-color="light">
                            Скачать
                        </a>
                    </div>
                    <div
                        class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <h5
                            class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Справка формы № 075
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            <iframe src="{{asset($query->getFile('reference_075_url'))}}" class="w-full" height="300px"></iframe>
                        </p>
                        <a
                            href="{{asset($query->getFile('reference_075_url'))}}"
                            download
                            type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init
                            data-te-ripple-color="light">
                            Скачать
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

