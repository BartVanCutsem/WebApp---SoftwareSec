<?php
namespace App\Exports;

use App\Exports;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromArray;
use Illuminate\Support\Facades\DB;

class UsersExport implements FromArray
{
    public function array() : array
    {
        $user = Auth::user();
        $sessions = DB::table('sessions')->where("user_id", $user->id )->get();
        $aSessions = []; 
        foreach ($sessions as $session) { 
            array_push($aSessions, [   
                $session->user_id,
                $session->ip_address ,
                $session->user_agent ,
                date('Y/m/d H:i:s', $session->last_activity) ,
                ]
            )  ; } 
   
        return [
            ["User Data"], 
            ["id"     , "name"     , "email"     , "email_verified_at"     , "created_at", "updated_at"], 
            [$user->id, $user->name, $user->email, $user->email_verified_at, $user->created_at, $user->updated_at],

            ["sessions"],
            ["User ID", "Ip Address", "user_agent", "Last Seen"],
            $aSessions,          
        ];
    }
}

?>