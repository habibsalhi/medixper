<div style="float: right;margin-bottom: 10px;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            wire:click.prevent="create()">
        Ajouter
    </button>
</div>
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
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
                        <label for="exampleFormControlInput2">Logo</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Enter Logo"
                               wire:model="logo">
                        @error('logo') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput3" wire:model="email"
                               placeholder="Enter Email">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput4">Phone number</label>
                        <input type="text" class="form-control" id="exampleFormControlInput4" wire:model="phone"
                               placeholder="Enter Phone">
                        @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput5">Fax number</label>
                        <input type="text" class="form-control" id="exampleFormControlInput5" wire:model="fax"
                               placeholder="Enter Fax">
                        @error('fax') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput6">Address</label>
                        <input type="text" class="form-control" id="exampleFormControlInput6" wire:model="address"
                               placeholder="Enter Address">
                        @error('address') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput12">Site URL</label>
                        <input type="text" class="form-control" id="exampleFormControlInput12" wire:model="url"
                               placeholder="Enter Site Url">
                        @error('url') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput7">Facebook</label>
                        <input type="text" class="form-control" id="exampleFormControlInput7" wire:model="facebook"
                               placeholder="Enter link Facebook">
                        @error('facebook') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput8">Instagram</label>
                        <input type="text" class="form-control" id="exampleFormControlInput8" wire:model="instagram"
                               placeholder="Enter link Instagram">
                        @error('instagram') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput9">YouTube</label>
                        <input type="text" class="form-control" id="exampleFormControlInput9" wire:model="youtube"
                               placeholder="Enter link YouTube">
                        @error('youtube') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput10">Viber</label>
                        <input type="text" class="form-control" id="exampleFormControlInput10" wire:model="viber"
                               placeholder="Enter Viber number">
                        @error('viber') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput11">WhatsApp</label>
                        <input type="text" class="form-control" id="exampleFormControlInput11" wire:model="whatsapp"
                               placeholder="Enter WhatsApp number">
                        @error('whatsapp') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Fermer</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Ajouter un plateau
                </button>
            </div>
        </div>
    </div>
</div>
