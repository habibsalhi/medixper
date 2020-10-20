<div>
    <div class="table-responsive">
        @include('livewire.trays.create')
        @include('livewire.trays.update')
        @if (session()->has('message'))
            <div class="alert alert-success" style="margin-top:40px;">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
            <tr class="bg-gray-100">
                <th scope="px-4 py-2 w-20">Logo</th>
                <th scope="px-4 py-2">Nom</th>
                <th scope="px-4 py-2">Email</th>
                <th scope="px-4 py-2">Téléphone</th>
                <th scope="px-4 py-2">Fax</th>
                <th scope="px-4 py-2">URL</th>
                <th scope="px-4 py-2">Action</th>
            </tr>
            </thead>
            <tbody>
            @if ($trayss)
                @foreach($trayss as $tray)
                    <tr>
                        <td class="border px-4 py-2">{{$tray->logo}}</td>
                        <td class="border px-4 py-2">{{$tray->name}}</td>
                        <td class="border px-4 py-2">{{$tray->email}}</td>
                        <td class="border px-4 py-2">{{$tray->phone}}</td>
                        <td class="border px-4 py-2">{{$tray->fax}}</td>
                        <td class="border px-4 py-2">{{$tray->url}}</td>
                        <td class="border px-4 py-2">
                            {{--<button wire:click="edit('{{ $agency->id }}')" class="btn btn-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button wire:click.prevent="delete('{{ $agency->id }}')" class="btn btn-danger hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>--}}

                            <button data-toggle="modal" data-target="#updateModal"
                                    wire:click="edit('{{ $tray->id }}')" class="btn btn-primary btn-sm">Edit
                            </button>
                            <button wire:click="delete('{{ $tray->id }}')" class="btn btn-danger btn-sm">Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>

    </div>
    <div class="mt-3 col-md-6 mx-auto">
        {{ $trayss->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
