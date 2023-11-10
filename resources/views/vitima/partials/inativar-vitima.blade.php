<section class="space-y-6">

    <div class="flex items-end justify-end cursor-pointer" x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-client-deletion')">
        <p class="max-[640px]:invisible hover:text-red-600">Inativar&nbsp;&nbsp;</p>
        <img src="{{ asset('img/icons/crossed.png') }}" class="w-8 hover:w-9">
    </div>

    <x-modal name="confirm-client-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('vitima.disable') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg text-left font-medium text-gray-900">
                {{ __('Deseja realmente inativar sua conta?') }}
            </h2>

            </br>

            <h3 class="text-lg text-left font-medium text-gray-900">
                {{ __('Digite sua senha para prosseguir:') }}
            </h3>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Senha') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Senha') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Inativar') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>