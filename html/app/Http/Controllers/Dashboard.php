<?php

namespace App\Http\Controllers;

use App\Models\LinkList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class Dashboard extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function postLink(Request $request)
    {
        $selectedLink = LinkList::where('r_link',$request->link)->first();

        if($selectedLink)
        {
            return $selectedLink->p_link;
        }else{
            $newPrettyLink = Str::random(10);
            $data = [
                "r_link" => $request->link,
                "p_link" => $newPrettyLink,
            ];
            LinkList::insert($data);
            return $newPrettyLink;
        }


        
    }

    public function getLink()
    {
        return "berhasil";
    }

    public function linked($prettyLink)
    {
        $checkExist = LinkList::where('p_link',$prettyLink)->first();
        
        if($checkExist != null)
        {
              return redirect()->away("http://". $checkExist->r_link);
            
        }
    }
}
