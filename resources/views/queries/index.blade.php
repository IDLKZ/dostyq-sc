<x-app-layout>
    <div class="container mx-auto py-3">
{{--        <div class="flex justify-between">--}}
{{--            <h1>{{__('messages.ep')}}</h1>--}}
{{--            <a--}}
{{--                href="{{route('eps.create')}}"--}}
{{--                type="button"--}}
{{--                class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">--}}
{{--                Создать--}}
{{--            </a>--}}
{{--        </div>--}}
        <div class="py-3">
            <h1 class="underline decoration-4 text-lg">Фильтр</h1>
        </div>

        <form action="{{route('query-search')}}" method="post">
            @csrf
            <div class="grid grid-cols-4 gap-4">
                <div>
                    <label>Введите ИИН</label>
                    <input type="text" class="peer block min-h-[auto] w-full rounded border-1" placeholder="ИИН" name="iin">
                </div>
                <div>
                    <label>Введите фамилию</label>
                    <input type="text" class="peer block min-h-[auto] w-full rounded border-1" placeholder="фамилия" name="surname">
                </div>
                <div>
                    <label>Введите имя</label>
                    <input type="text" class="peer block min-h-[auto] w-full rounded border-1" placeholder="имя" name="name">
                </div>

                <div class="relative mb-4" data-te-input-wrapper-init>
                    <label>Выберите ОП</label>
                    <select name="eps_id" class="w-full" data-te-select-init>
                        <option value="0" selected>Все</option>
                        @foreach($eps as $ep)
                            <option value="{{$ep->id}}">{{$ep->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="relative mb-4" data-te-input-wrapper-init>
                    <label>Выберите регион</label>
                    <select name="region_id" class="w-full" data-te-select-init>
                        <option value="0" selected>Все</option>
                        @foreach($regions as $region)
                            <option value="{{$region->id}}">{{$region->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="relative mb-4" data-te-input-wrapper-init>
                    <label>Выберите гражданство</label>
                    <select name="country_id" class="w-full" data-te-select-init>
                        <option value="0" selected>Все</option>
                        @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="relative mb-4" data-te-input-wrapper-init>
                    <label>Выберите образования</label>
                    <select name="education_type_id" class="w-full" data-te-select-init>
                        <option value="0" selected>Все</option>
                        @foreach($education_types as $education_type)
                            <option value="{{$education_type->id}}">{{$education_type->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="relative mb-4" data-te-input-wrapper-init>
                    <label>Выберите форму обучения</label>
                    <select name="education_form_id" class="w-full" data-te-select-init>
                        <option value="0" selected>Все</option>
                        @foreach($education_forms as $education_form)
                            <option value="{{$education_form->id}}">{{$education_form->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="relative mb-4 flex items-end">
                    <button
                        type="submit"
                        class="inline-block rounded bg-primary px-6 py-3 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Найти
                    </button>
                </div>
            </div>
        </form>

        <div class="relative mb-4 flex items-end justify-end">
            <form action="{{route('export-query')}}" method="post">
                @csrf
                @if(count($forExp) > 0)
{{--                    {{dd($forExp)}}--}}
                    <input type="hidden" name="iin" value="{{isset($forExp['iin'])??null}}">
                    <input type="hidden" name="surname" value="{{isset($forExp['surname'])??null}}">
                    <input type="hidden" name="name" value="{{isset($forExp['name'])??null}}">
                    <input type="hidden" name="eps_id" value="{{$forExp['eps_id']}}">
                    <input type="hidden" name="country_id" value="{{$forExp['country_id']}}">
                    <input type="hidden" name="region_id" value="{{$forExp['region_id']}}">
                    <input type="hidden" name="education_type_id" value="{{$forExp['education_type_id']}}">
                    <input type="hidden" name="education_form_id" value="{{$forExp['education_form_id']}}">
                @endif

                <button
                    type="submit"
                    class="inline-block rounded bg-success px-6 py-3 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    Экспорт в Excel
                </button>
            </form>

        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">ФИО</th>
                                <th scope="col" class="px-6 py-4">ИИН</th>
                                <th scope="col" class="px-6 py-4">Телефон</th>
                                <th scope="col" class="px-6 py-4">Почта</th>
{{--                                <th scope="col" class="px-6 py-4">ОБРАЗОВАНИЕ</th>--}}
{{--                                <th scope="col" class="px-6 py-4">ФОРМА ОБУЧЕНИЯ</th>--}}
{{--                                <th scope="col" class="px-6 py-4">ОП</th>--}}
                                <th scope="col" class="px-6 py-4">Адрес</th>
                                <th scope="col" class="px-6 py-4 text-center">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($queries as $item)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{$queries->firstItem() + $loop->index}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$item->surname}} {{$item->name}} {{$item->middlename}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$item->iin}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$item->phone}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$item->email}}</td>
{{--                                    <td class="whitespace-nowrap px-6 py-4">{{$item->educationType->title_ru}}</td>--}}
{{--                                    <td class="whitespace-nowrap px-6 py-4">{{$item->educationForm->title_ru}}</td>--}}
{{--                                    <td class="whitespace-nowrap px-6 py-4">{{$item->eps->title_ru}}</td>--}}
                                    <td class="whitespace-nowrap px-6 py-4">{{$item->region->title_ru}}</td>
                                    <td class="flex justify-center py-4">
                                        <a href="{{route('queries.show', $item->id)}}" class="mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </a>
{{--                                        <a href="{{route('queries.edit', $item->id)}}" class="mr-3">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">--}}
{{--                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
                                        <form action="{{route('queries.destroy', $item->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Вы уверены ?')" class="btn btn-sm btn-danger mb-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="py-4">
                            {!! $queries->appends(request()->except('page'))->links() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
