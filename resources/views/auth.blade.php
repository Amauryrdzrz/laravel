<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Authenticar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <x-input-label for="code" :value="Autenticate" />
                    <x-text-input id="code" class="block mt-1 w-full" type="" name="code" required autofocus/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>