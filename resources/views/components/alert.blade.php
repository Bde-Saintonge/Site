@foreach ($elements as $element)
    @if (!is_null($element))
        @switch($element['type'])
            @case('error')
                <div class="flex w-full justify-center" onclick="remove(this)">
                    <div
                        class="w-max m-4 bg-red-200 border border-red-400 text-red-700 px-4 py-3 rounded flex text-center sm:text-left justify-center sm:space-between gap-4 flex-wrap sm:flex-nowrap">
                        <strong class="font-bold">Erreur !</strong>
                        <span class="">{{ $element['message'] }}</span>

                        <svg class="inline fill-current h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Fermer</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </div>
                </div>
            @break

            @case('success')
                <div class="flex w-full justify-center" onclick="remove(this)">
                    <div
                        class="w-max m-4 bg-green-200 border border-green-400 text-green-700 px-4 py-3 rounded flex text-center sm:text-left justify-center sm:space-between gap-4 flex-wrap sm:flex-nowrap">
                        <strong class="font-bold">Succès !</strong>
                        <span class="">{{ $element['message'] }}</span>

                        <svg class="inline fill-current h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Fermer</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </div>
                </div>
            @break
        @endswitch

        <script type="text/javascript">
            function remove(element) {
                element.remove()
            }
        </script>
    @endif
@endforeach
