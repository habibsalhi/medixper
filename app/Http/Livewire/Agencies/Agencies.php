<?php

namespace App\Http\Livewire\Agencies;

use App\Models\Agency;
use Livewire\Component;

class Agencies extends Component
{
    public $agencies, $name, $code, $agency_id, $manager_id, $phone, $fax, $email, $address, $status, $state_id;
    public $updateMode = false;

    public function render()
    {
        $this->agencies = Agency::all();
        return view('livewire.agencies.agencies');
    }

    public function store()
    {
        /*$validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);*/

        Agency::create(['id' => $this->agency_id], [
            'name' => $this->name,
            'code' => $this->code,
            'phone' => $this->phone,
            'fax' => $this->fax,
            'email' => $this->email,
            'address' => $this->address,
            'status' => 1,
        ]);

        session()->flash('message', 'Agency Created Successfully.');

        $this->resetInputFields();

        $this->emit('userStore'); // Close model to using to jquery

    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->code = '';
        $this->agency_id = '';

        $this->phone = '';
        $this->fax = '';

        $this->email = '';
        $this->address = '';

        $this->status = '';
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = Agency::where('id', $id)->first();
        $this->agency_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($this->agency_id) {
            $user = Agency::find($this->agency_id);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if ($id) {
            Agency::where('id', $id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }
}
