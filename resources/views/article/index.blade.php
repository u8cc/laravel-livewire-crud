<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            livewire のCRUDサンプル
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-5">
                    <h1 class="text-3xl mb-4">
                        livewire のCRUDサンプル
                    </h1>
                    <div class="grid grid-cols-2 gap-7">
                        <div>
                            <livewire:article-list />
                        </div>
                        <div>
                            <button type="button" class="bg-gray-300 text-gray-700 rounded p-2 mb-5"
                                onClick="Livewire.emitTo('article-input', 'create')">+ 追加する</button>
                            <livewire:article-input />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
