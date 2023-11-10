<x-app-layout>
  <header class="bg-rose-100 grid h-screen place-items-center pt-12 px-1.5">
    <div class="pb-16 px-1 py-7">
      <div class="bg-white border-2 border-red-500 max-w-md md:max-w-screen-xl mx-auto overflow-hidden py-5 rounded-xl">
        <p class="font-extrabold md:pb-10 md:px-10 md:text-5xl mt-4 pb-5 px-2 text-4xl text-black text-center">
          Dispositivos Ativos
        </p>
        <div class="md:px-8 px-2">
          <hr class="border-1 border-red-500">
        </div>

        <div class="max-h-96 overflow-y-auto">
          @if(!empty($devices[0]))
          @foreach ($devices as $device)
          <div class="grid grid-cols-1">
            <div class="md:flex">
              <div class="align-center text-center">
                <div class="px-6">
                  <div class="md:px-20">
                    <p class="font-medium md:pr-72 md:text-3xl md:text-left mt-3 pb-6 pt-2 text-2xl text-black text-center">
                      <strong>Código do Dispositivo: </strong>{{ $device->id }}  
                    </p>
                    <p class="font-medium md:pr-72 md:text-3xl md:text-left mt-3 pb-6 pt-2 text-2xl text-black text-center">
                      <strong>Vítima Portadora: </strong>{{ $device->victim->name . ' ' . $device->victim->lastname }}  
                    </p>
                    <p class="font-medium md:pr-72 md:text-3xl md:text-left mt-3 pb-6 text-2xl text-black text-center">
                      <strong>Atualizado pela última vez: </strong>@if($device->updated_at !== null){{ $device->updated_at->format('d/m/Y \à\s h:m') }} @else Sem atualizações @endif  
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="md:px-8 px-2">
            <hr class="border-1 border-red-500">
          </div>
          @endforeach
        </div>
          @else
            <div class="px-8 text-center">
              <p class="px-4 py-2 text-red-500 md:text-2xl text-2xl">Não há nenhum dispositivo ativo neste momento.</p>
              <hr class="border-1 border-red-500">
            </div>
          @endif
      </div>
    </div>
  </header>
</x-app-layout>