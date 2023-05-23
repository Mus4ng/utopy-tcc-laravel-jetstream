<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 p-10 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-header">
                    <h1 class="font-heading text-white text-xl uppercase mb-10">Jogos</h1>
                    <x-button class="w-auto mb-10 align-center"><a href="{{ route('game.create') }}"
                            class="">Adicionar</a>
                    </x-button>
                </div>

                @if (session()->has('success'))
                    <div class="text-sm text-white mb-2">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if (isset($errors) && count($errors) > 0)
                    <div class="text-sm text-main-500 mb-2">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @csrf
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-main-500">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Imagem
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Título
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Gênero
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Desenvolvedor
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Descrição
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Preço
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Data de Lançamento
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Classificação Indicativa
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-slate-900">
                            @foreach ($game as $games)
                                <tr>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        <img src="{{ asset("storage/img/games_img/$games->image") }}" alt=""
                                            width=150>
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->title }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->genreGame->name }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->developer->firstname }} {{ $games->developer->lastname }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->description }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        R$ {{ $games->price }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->release_date }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->age_rating }}
                                    </th>
                                    <td class="px-6 py-4 gap-10">
                                        <a href="{{ route('game.edit', $games->id) }}"
                                            class="font-medium text-white hover:underline">
                                            Editar
                                        </a>
                                        <form action="" method="POST" class="delete inline-block ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-main-500 hover:underline">
                                                Excluir
                                            </button>
                                        </form>
                                        <button id='btnRm' data-game='{{ $games->id }}'
                                            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Abrir
                                            Popup</button>

                                        <div id="popup"
                                            class="game{{ $games->id }} fixed inset-0 flex items-center justify-center z-10 hidden">
                                            <!-- Overlay -->
                                            <div class="fixed inset-0 bg-gray-900 opacity-75"></div>

                                            <!-- Conteúdo do Popup -->
                                            <div class="relative bg-white rounded-lg p-8">
                                                <h2 class="text-2xl font-bold mb-4">Título do Popup</h2>
                                                <p>Conteúdo do Popup vai aqui...</p>
                                                <div class="mt-6 flex justify-end">
                                                    <button onclick="closePopup()"
                                                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Fechar</button>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="my-4">
                        {{ $game->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

</x-admin-layout>

<script>
    $(document).on('submit', '.delete', function() {
        return confirm('Deseja realmente excluir esse jogo?');
    });

    $('#btnRm').click(function(e) {
        var gameClass = e.currentTarget.dataset.game;
        $(`.game${gameClass}`).removeClass('hidden');
    });

    /*function openPopup() {
        var popup = document.getElementById("popup");
        popup.classList.remove("hidden");
    }*/

    function closePopup() {
        var popup = document.getElementById("popup");
        popup.classList.add("hidden");
    };
</script>
