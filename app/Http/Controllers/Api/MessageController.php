<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(StoreMessageRequest $request){
        $data = $request->validated();

        $newMessage = Message::create($data);
        //RITORNA UN JSON CON X COSE
        $newMessage = Message::with('chef')->find($newMessage->id);
        return response()->json(
            [
                "success" => true,
                "results" => $newMessage
            ]);
    }
}
