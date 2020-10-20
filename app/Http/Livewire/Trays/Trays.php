<?php

namespace App\Http\Livewire\Trays;

use App\Models\Tray as tray;
use Livewire\Component;
use Livewire\WithPagination;

class Trays extends Component
{
    use WithPagination;
    public $trays, $tray_id, $agency_id, $state_id, $name, $logo, $email, $phone, $fax, $address, $facebook, $instagram, $youtube, $viber, $whatsapp, $url;
    public $isOpen = 0;
    public $updateMode = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        return view('livewire.trays.trays', [
            'trayss' => tray::latest()->paginate(10),
        ]);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->agency_id = '';
        $this->state_id = '';
        $this->name = '';
        $this->logo = '';
        $this->email = '';
        $this->phone = '';
        $this->fax = '';
        $this->address = '';
        $this->facebook = '';
        $this->instagram = '';
        $this->youtube = '';
        $this->viber = '';
        $this->whatsapp = '';
        $this->url = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        /*$this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);*/
        tray::updateOrCreate([
//            'agency_id' => $this->agency_id,
//            'state_id' => $this->state_id,
            'name' => $this->name,
            'logo' => $this->logo,
            'email' => $this->email,
            'phone' => $this->phone,
            'fax' => $this->fax,
            'address' => $this->address,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'youtube' => $this->youtube,
            'viber' => $this->viber,
            'whatsapp' => $this->whatsapp,
            'url' => $this->url,
        ]);
        $this->exampleModal = false;
        session()->flash('message',
            $this->tray_id ? 'Tray Updated Successfully.' : 'Tray Created Successfully.');

        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $this->updateMode = true;
        $trays = tray::findOrFail($id);
        $this->tray_id = $id;

        $this->name = $trays->name;
        $this->logo = $trays->logo;
        $this->email = $trays->email;
        $this->phone = $trays->phone;
        $this->fax = $trays->fax;
        $this->address = $trays->address;
        $this->facebook = $trays->facebook;
        $this->instagram = $trays->instagram;
        $this->youtube = $trays->youtube;
        $this->viber = $trays->viber;
        $this->whatsapp = $trays->whatsapp;
        $this->url = $trays->url;
        //$this->openModal();
    }

    public function update()
    {


        if ($this->tray_id) {
            $trays = tray::find($this->tray_id);
            $trays->update([
                'name' => $this->name,
                'logo' => $this->logo,
                'email' => $this->email,
                'phone' => $this->phone,
                'fax' => $this->fax,
                'address' => $this->address,
                'facebook' => $this->facebook,
                'instagram' => $this->instagram,
                'youtube' => $this->youtube,
                'viber' => $this->viber,
                'whatsapp' => $this->whatsapp,
                'url' => $this->url,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Tray Updated Successfully.');
            $this->resetInputFields();

        }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        tray::find($id)->delete();
        session()->flash('message', 'Tray Deleted Successfully.');
    }
}
