<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }} desde livewire
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="flex">
                            <input 
                            wire:model="search"
                            type="text" 
                            class="w-full p-2 border rounded-md">
                            <select wire:model="perPage" name="" id="" class=" p-2 border rounded-md">>
                                <option value="1">1 por pagina</option>
                                <option value="3">3 por pagina</option>
                                <option value="5">5 por pagina</option>
                            </select>
                            @if($search !== '')
                            <button wire:click="clear" class=" p-2 border rounded-md">xx</button>
                            @endif
                        </div>                        
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nombre
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Equipos
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- Aquí podrías usar un loop para mostrar los usuarios -->
                                    @foreach($users as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{ Storage::url($user->profile_photo_path) }}" alt="{{ $user->name }}">
                                        </div>
                                            <div class="flex items-center">
                                            {{  $user->name  }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                            {{  $user->email  }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="text-sm text-gray-900">
                                             {{  $user->allTeams()->pluck('name')->join(', ')  }}
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <!-- Fin del loop -->
                                </tbody>
                            </table>
                            @if($users->count())
                            {{  $users->Links()  }}
                            @else 
                            <small>No hay resultados para la busqueda {{  $search  }} en la pagina {{  $page  }} al mostar {{  $perPage  }} por pagina</small>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>    
</div>
