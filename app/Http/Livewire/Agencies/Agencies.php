<?php

namespace App\Http\Livewire\Agencies;

use App\Models\Agency as agenc;
use Livewire\Component;
use Livewire\WithPagination;

class Agencies extends Component
{
    use WithPagination;

    public $agencies, $name, $code, $agency_id, $phone, $fax, $email, $address, $country, $status;
    public $isOpen = 0;
    public $updateMode = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {

        return view('livewire.agencies.agencies', [
            'agenciess' => agenc::latest()->paginate(10),
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
        $this->name = '';
        $this->code = '';
        $this->agency_id = '';

        $this->phone = '';
        $this->fax = '';

        $this->email = '';
        $this->address = '';
        $this->country = '';
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
        agenc::updateOrCreate([
            'name' => $this->name,
            'code' => $this->code,
            'phone' => $this->phone,
            'fax' => $this->fax,
            'email' => $this->email,
            'address' => $this->address,
            'country' => $this->country,
            'status' => 1,
        ]);

        session()->flash('message',
            $this->agency_id ? 'Post Updated Successfully.' : 'Post Created Successfully.');

        $this->resetInputFields();

        $this->emit('userStore');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $this->updateMode = true;
        $agencies = agenc::findOrFail($id);
        $this->agency_id = $id;

        $this->name = $agencies->name;
        $this->code = $agencies->code;
        $this->phone = $agencies->phone;
        $this->fax = $agencies->fax;
        $this->email = $agencies->email;
        $this->address = $agencies->address;
        $this->country = $agencies->country;
        $this->status = 1;

        //$this->openModal();
    }

    public function update()
    {


        if ($this->agency_id) {
            $agency = agenc::find($this->agency_id);
            $agency->update([
                'name' => $this->name,
                'code' => $this->code,
                'phone' => $this->phone,
                'fax' => $this->fax,
                'email' => $this->email,
                'address' => $this->address,
                'country' => $this->country,
                'status' => 1,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
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
        agenc::find($id)->delete();
        session()->flash('message', 'Agency Deleted Successfully.');
    }
}
