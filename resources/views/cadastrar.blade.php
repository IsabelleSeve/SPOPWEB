<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="/cadastrar" method="post">
                        @csrf <!-- token que garante segurança contra invasão do forms -->
                        <!-- Nome -->
                         <div class="mt-4">
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" class="block mt-1 w-full"
                                        type="text"
                                        name="nome"
                                        :value="old('nome')"
                                        required autofocus autocomplete="linha" />
                            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                        </div>
                        <!-- Data de Descoberta -->
                         <div class="mt-4">
                            <x-input-label for="data_descoberta" :value="__('Data da Descoberta')" />
                            <x-text-input id="data_descoberta" class="block mt-1 w-full"
                                        type="date"
                                        name="data_descoberta"
                                        :value="old('data_descoberta')" />
                            <x-input-error :messages="$errors->get('data_descoberta')" class="mt-2" />
                        </div>
                        <!-- Comestível -->
                        <div class="mt-4">
                            <x-input-label for="comestivel" :value="__('Comestível')" />
                            <input id="comestivelTrue" type="radio" name="comestivel" value="1" {{ old('comestivel') == '1' ? 'checked' : '' }}/> Sim
                            <input id="comestivelFalse" type="radio" name="comestivel" value="0" {{ old('comestivel') == '0' ? 'checked' : '' }}/> Nao  
                            <x-input-error :messages="$errors->get('comestivel')" class="mt-2" />
                        </div>
                        <!-- Altura Média CM -->
                        <div class="mt-4">
                            <x-input-label for="altura_media" :value="__('Altura média (cm)')" />
                            <x-text-input id="altura_media" class="block mt-1 w-full"
                                        type="number"
                                        step="0.01"
                                        name="altura_media"
                                        :value="old('altura_media')"
                                        required />
                            <x-input-error :messages="$errors->get('altura_media')" class="mt-2" />
                        </div>
                        <!-- Quantidade de Pétalas -->
                         <div class="mt-4">
                            <x-input-label for="quantidade_petalas" :value="__('Quantidade de Pétalas')" />
                            <x-text-input id="quantidade_petalas" class="block mt-1 w-full"
                                        type="number"
                                        name="quantidade_petalas"
                                        :value="old('quantidade_petalas')"
                                        required />
                            <x-input-error :messages="$errors->get('quantidade_petalas')" class="mt-2" />
                        </div>
                        <!-- Cor Princial -->
                        <div class="mt-4">
                            <x-input-label for="cor_principal" :value="__('Cor Principal')" />
                            <x-text-input id="cor_principal" class="block mt-1 w-full"
                                        type="text"
                                        name="cor_principal"
                                        :value="old('cor_principal')"
                                        required autofocus autocomplete="linha" />
                            <x-input-error :messages="$errors->get('cor_principal')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">           
                            <x-primary-button type="submit" class="ms-4">
                                {{ __("Parabéns aventureiro! Cadastre aqui as novas espécies de Flores que descobriu durante suas expedições.") }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
