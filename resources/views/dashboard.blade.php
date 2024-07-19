<x-app-layout>
    @section('title', 'Inicio')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col p-6 text-gray-900 dark:text-gray-100">                   
                    <form action="{{route('dashboard.store')}}" method="POST">
                        @csrf
                        <div class="grid gap-6 mb-1 md:grid-cols-2">
                            <div>
                                <label for="aula_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Aula</label>
                                <select name="aula_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach($aulas as $aula)                                        
                                    <option value="{{$aula->id}}">{{$aula->grado->nombre_grado}}</option>                                       
                                    @endforeach                                  
                                </select>
                            </div>
                            <div>
                                <label for="docente_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Docente</label>
                                <select name="docente_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach($docentes as $docente)                                        
                                    <option value="{{$docente->id}}">{{$docente->nombres_docente}} | {{$docente->apellidos_docente}}</option>                                       
                                    @endforeach 
                                </select>                            
                            </div>                   
                        </div>                                                       
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
                    </form>

                    <section>
                        <h2 class="font-semibold">Asignación anual</h2>
                        @foreach ($programaAnuals as $programaAnual)
                        <article class="flex flex-row justify-between">
                            <p>{{$programaAnual->aula->grado->nombre_grado}} | {{$programaAnual->docente->nombres_docente}} {{$programaAnual->docente->apellidos_docente}}</p>
                            <aside class="flex">
                                <a class="pr-1 text-blue-500" href="">Editar</a>
                                <form action="{{route('dashboard.destroy',['dashboard'=>$programaAnual])}}" method="POST">
                                    @csrf
                                    @method('DELETE')          
                                    <button class="text-red-500" type="submit">Eliminar</button>
                                </form>
                            </aside>
                        </article>
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
