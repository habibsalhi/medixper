<div>
    <div class="table-responsive">
        @include('livewire.agencies.create')
        @include('livewire.agencies.update')
        @if (session()->has('message'))
            <div class="alert alert-success" style="margin-top:30px;">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
            <tr class="bg-gray-100">
                <th scope="px-4 py-2">Pays</th>
                <th scope="px-4 py-2">Nom</th>
                <th scope="px-4 py-2">Code</th>
                <th scope="px-4 py-2">Email</th>
                <th scope="px-4 py-2">Téléphone</th>
                <th scope="px-4 py-2">Statut</th>
                <th scope="px-4 py-2">Action</th>
            </tr>
            </thead>
            <tbody>
            @if ($agenciess)
                @foreach($agenciess as $agency)
                    <tr>
                        <td class="border px-4 py-2">{{$agency->country}}</td>
                        <td class="border px-4 py-2">{{$agency->name}}</td>
                        <td class="border px-4 py-2">{{$agency->code}}</td>
                        <td class="border px-4 py-2">{{$agency->email}}</td>
                        <td class="border px-4 py-2">{{$agency->phone}}</td>
                        <td class="border px-4 py-2">{{$agency->status}}</td>
                        <td class="border px-4 py-2">
                            {{--<button wire:click="edit('{{ $agency->id }}')" class="btn btn-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button wire:click.prevent="delete('{{ $agency->id }}')" class="btn btn-danger hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>--}}

                            <button data-toggle="modal" data-target="#updateModal"
                                    wire:click="edit('{{ $agency->id }}')" class="btn btn-primary btn-sm">Edit
                            </button>
                            <button wire:click="delete('{{ $agency->id }}')" class="btn btn-danger btn-sm">Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>

    </div>
    <div class="mt-3 col-md-6 mx-auto">
        {{ $agenciess->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

