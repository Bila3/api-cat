<?php

namespace App\Http\Controllers;

use App\Models\DataKucing;
use Illuminate\Http\Request;

class GetIdController extends Controller
{
    public function showId(Request $request){
        $id = $request->id;
        return DataKucing::find($id);
    }
}
?>