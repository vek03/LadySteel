<section class="space-y-6">

    <div class="flex justify-end cursor-pointer " x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-client-deletion')">
        <p class="invisible sm:visible ">Inativar&nbsp;&nbsp;</p>
        <img src="{{ asset('img/icons/crossed.png') }}" class="w-8">
    </div>

    <x-modal name="confirm-client-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('supervisor.atendente-disable', $attendant->id) }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg text-left font-medium text-gray-900">
                {{ __('Você tem certeza de que deseja inativar este atendente?') }}
            </h2>

            <br>

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