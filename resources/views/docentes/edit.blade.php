<x-app-layout>
    @section('title', 'Docentes')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Planta Docente
        </h2>
    </x-slot>

    <main class="py-12">
        <section class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <article class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('docentes.update', ['docente'=>$docente]) }}" method="POST"  >
                        @method('PUT')
                        @csrf
                        <div class="inline-flex w-full flex-col items-start gap-1.5 stroke-black transition-colors duration-300 ease-in-out focus-within:stroke-blue-700 max-w-sm">
                            <label class="font-medium transition-colors duration-300 ease-in-out peer-disabled:opacity-70 text-xs whitespace-nowrap text-black" for="textfield-1">Número de Identificación</label>
                            <div class="relative w-full">
                            <input name="dui_docente" value="{{$docente->dui_docente}}"
                                class="mb-0.5 w-full rounded-lg border border-slate-200 px-3 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400 disabled:placeholder-slate-400focus:border-blue-600 py-2"
                                placeholder="Ingrese el número de DUI" required>
                            </div>    
                            
                            <label class="font-medium transition-colors duration-300 ease-in-out peer-disabled:opacity-70 text-xs whitespace-nowrap text-black" for="textfield-1">Nombres</label>
                            <div class="relative w-full">
                            <input name="nombres_docente" value="{{$docente->nombres_docente}}"
                                class="mb-0.5 w-full rounded-lg border border-slate-200 px-3 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400 disabled:placeholder-slate-400focus:border-blue-600 py-2"
                                placeholder="Ingrese los nombres del docente" required>
                            </div>  

                            <label class="font-medium transition-colors duration-300 ease-in-out peer-disabled:opacity-70 text-xs whitespace-nowrap text-black" for="textfield-1">Apellidos</label>
                            <div class="relative w-full">
                            <input name="apellidos_docente" value="{{$docente->apellidos_docente}}"
                                class="mb-0.5 w-full rounded-lg border border-slate-200 px-3 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400 disabled:placeholder-slate-400focus:border-blue-600 py-2"
                                placeholder="Ingrese los apellidos del docente" required>
                            </div>  
                            
                        </div>
                        <div class="pt-1">
                            <button type="submit" class="group relative inline-flex h-[36px] items-center justify-center rounded-full bg-neutral-950 py-1 pl-4 pr-8 font-medium text-neutral-50">
                                <span class="z-10 pr-2">Guardar</span>
                                <div class="absolute right-1 inline-flex h-8 w-8 items-center justify-end rounded-full bg-neutral-700 transition-[width] group-hover:w-[calc(100%-8px)]">
                                    <div class="mr-2 flex items-center justify-center">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-neutral-50"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                            </button>
                        </div>     
                    </form>                 
                </div>
            </article>
        </section>
    </main>
</x-app-layout>