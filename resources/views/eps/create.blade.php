<x-app-layout>
    <div class="container mx-auto py-5">
        <h1 class="mb-4 rounded-lg bg-secondary-100 px-6 py-5 text-base text-secondary-800">Создать новую образовательную программу</h1>
        <form action="{{route('eps.store')}}" method="post">
            @csrf
                <div class="relative mb-4">
                    <input
                        type="text"
                        class="peer block min-h-[auto] w-full rounded border-1"
                        id="exampleFormControlInput1"
                        name="title_kz"
                        placeholder="Наименование на казахском" />
                </div>

                <div class="relative mb-4">
                    <input
                        type="text"
                        class="peer block min-h-[auto] w-full rounded border-1"
                        id="exampleFormControlInput2"
                        name="title_ru"
                        placeholder="Наименование на русском" />
                </div>

                <div class="relative mb-4">
                    <input
                        type="text"
                        class="peer block min-h-[auto] w-full rounded border-1"
                        id="exampleFormControlInput3"
                        name="title_en"
                        placeholder="Наименование на английском" />
                </div>

            <button
                type="submit"
                class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                Сохранить
            </button>
            </form>

    </div>
</x-app-layout>
