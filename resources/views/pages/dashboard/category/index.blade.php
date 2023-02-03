<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>
            var dataTable = $('#crudTable').DataTable({
                ajax : {
                    url : "{!! url()->current() !!}",
                },
                columns : [
                    { data: 'id', name: 'id', width : '5%' },
                    { data: 'name', name: 'name'},
                    { 
                        data: 'action', 
                        name: 'action'
                        orderable: 'false'
                        searchable: 'false'
                        width: '25%'
                    }
                ],
            });
        </script>
    </x-slot>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.13.6/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="container">
        <div class="card w-60 bg-base-100 shadow-xl">
            todo
        </div>

    </div>
</x-app-layout>
