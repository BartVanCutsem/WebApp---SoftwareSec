<?php

namespace App\Http\Livewire\Extra;

use Livewire\Component;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
class Usercsv extends Component
{
    public function render()
    {
        return view('livewire.extra.usercsv');
    }
    public function userCSV() { 
        $user = Auth::user(); 
        $user = $user->name. ".csv";
        // dump ($user);
        return Excel::download(new UsersExport, $user);
    }
}
