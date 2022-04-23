@props(['posts'])

<table class="table-auto">
    <x-table.head>
        <x-table.data type="head">Title</x-table.data>
        <x-table.data type="head">Status</x-table.data>
        <x-table.data type="head">Created at</x-table.data>
    </x-table.head>

    <x-table.body>

        @foreach ($posts as $post)
            <tr>
                <x-table.data>{{ $post->title }}</x-table.data>

                <x-table.data>
                    <span class="text-white p-1 rounded"
                        style="background-color: {{ $post->status->color() }};">
                        {{ $post->status->name }}
                    </span>
                </x-table.data>

                <x-table.data>{{ $post->created_at->diffForHumans() }}</x-table.data>
            </tr>
        @endforeach

    </x-table.body>
</table>
