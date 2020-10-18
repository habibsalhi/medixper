<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name"
                               wire:model="name">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput2" wire:model="email"
                               placeholder="Enter Email">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Code</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="code"
                               placeholder="Enter Code">
                        @error('code') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Phone number</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="phone"
                               placeholder="Enter Phone">
                        @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Fax number</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="fax"
                               placeholder="Enter Fax">
                        @error('fax') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Country</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="country"
                               placeholder="Enter Country">
                        @error('country') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Address</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="address"
                               placeholder="Enter Address">
                        @error('address') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save
                    changes
                </button>
            </div>
        </div>
    </div>
</div>
