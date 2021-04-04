<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                VACUNACIÓN CONTRA COVID-19
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                PADRÓN DE ADULTO MAYORES DE LA REGION JUNIN
            </p>
        </div>
        <div class="border-t border-gray-200">
            <section class="bg-cover" style="background-image: url({{ asset('img/fondo_vacuna.png') }})">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-48">
                    <form class="pt-2 relative mx-auto text-gray-600" autocomplete="off">
                        <x-jet-input wire:model="search" class="w-80" type="number" maxlength="13" pattern="[0-9]{13}"
                            name="search" id="search" placeholder="Ingrese el numero de DNI" required />

                        <x-jet-danger-button wire:click="$set('open', true)">
                            Consultar
                        </x-jet-danger-button>

                        @if ($search)
                            @forelse($this->results as $result)
                                <x-jet-dialog-modal wire:model="open">
                                    <x-slot name="title">
                                       <p class="text-red-700">CONSULTA PUNTO DE VACUNACION</p>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-jet-label value="Numero de documento : {{ $result->NRO_DOCUMENTO }}" class="text-base" />
                                        <x-jet-label
                                            value="Nombre : {{ $result->NOMBRE }} {{ $result->APELLIDO_PATERNO }} {{ $result->APELLIDO_MATERNO }}" class="text-base"/>
                                        <x-jet-label value="Edad   : {{ $result->EDAD }}" class="text-base" />
                                        <x-jet-label value="Punto de vacunacion : {{ $result->PUNTO_VACUNACION }}" class="text-base text-blue-700" />
                                        <x-jet-label value="Fecha vacunacion : {{ $result->FECHA_VACUNACION }} " class="text-base  text-blue-700"/>
                                    </x-slot>


                                    <x-slot name="footer">
                                        <x-jet-secondary-button wire:click="$set('open', false)">
                                            Salir
                                        </x-jet-secondary-button>
                                    </x-slot>

                                </x-jet-dialog-modal>
                            @empty
                                <ul class="absolute left-0 w-full bg-white mt-1 rounded-lg overflow-hidden text-red-600 text-center">
                                    <p>IMPORTANTE: De no figurar en el padron, no se preocupe,</p>
                                    <p>será programado en la siguiente etapa.</p>
                                    <p>Todo adulto mayor será protegido</p>
                                </ul>
                        @endforelse
                        @endif
                    </form>
                </div>
            </section>
        </div>
        <div class="border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <p class="text-center text-blue-900 text-sm">Desarollado por: Oficina de Tecnologias
                    de la Informacion - Direccion Regional de Salud Junin - 2021</p>
            </div>
        </div>
    </div>





</div>
