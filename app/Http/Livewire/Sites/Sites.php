<?php

namespace App\Http\Livewire\Sites;

use App\Models\Site as site;
use Livewire\Component;
use Livewire\WithPagination;

class Sites extends Component
{
    use WithPagination;
    public $sites, $site_id, $tray_id, $agency_id, $state_id, $name, $logo, $email, $phone, $fax, $address, $facebook, $instagram, $youtube, $viber, $whatsapp, $url;
    public $isOpen = 0;
    public $updateMode = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        return view('livewire.sites.sites', [
            'sitess' => site::latest()->paginate(10),
        ]);
    }
}
