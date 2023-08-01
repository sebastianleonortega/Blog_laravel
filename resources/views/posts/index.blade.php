<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="nb-4">
                        @forelse ($posts as $post)
                            <tr class="border-b border-gray-200 text-sm">
                                <td class="px-6 py-4">{{ $post->title }}</td>
                                <td class="px-6 py-4">
                                    <a href="" class="text-indigo-600" >Editar</a>
                                </td>
                                <td class="px-6 py-4" id="">Eliminar</td>
                            </tr>
                        @empty
                            <tr class="border-b border-gray-200 text-sm">
                                Upps! no hay ninguna publicacion disponible
                            </tr>
                        @endforelse

                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
