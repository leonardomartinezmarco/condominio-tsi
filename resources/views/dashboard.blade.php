<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Condomínio TSI: Notícias e Regras</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl p-8">
                <ul>
                    @forelse ($mural as $noticia)
                    <li>
                        <h1>
                            <b>{{$noticia->nome}}</b>
                        </h1>
                        <h2> {{$noticia->descricao}}</h2>
                    </li>
                    @empty
                        <h1>Não tem notícias ou regras</h1>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>

<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet"> 