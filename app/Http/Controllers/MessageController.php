<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;

class MessageController extends Controller
{

    /**
     *  Index Function show list of the messages
     */
    public function index()
    {
        $messages = Message::with('user')->get();
        return view('messages.show', compact('messages'));
    }

    public function totalMessageByUser()
    {
        $userMessages = Message::withCount(['user'])->get();
        return view('messages.total_by_user', compact('userMessages'));
    }

    public function show()
    {
        $messages = Message::with('user')->get();
        return view('messages.index', compact('messages'));
    }

    public function userWithMaxMessages()
    {
        $userData = User::withCount('messages')->orderBy('id', 'desc')->first();
        dd($userData);
        return view('messages.user_with_max', compact(userData));
    }

    public function destroy(Message $message, $id)
    {
        $message = Message::findorFail($id);
        $message->delete();
        return redirect()->back()->with("200", "Message Deleted");
    }

    public function averageMessageLength()
    {
        $averageLength = Message::selectRaw('AVG(LENGTH(content)) as average_length')->first()->average_length;
        dd($averageLength);
        return view('messages.average_length', compact('averageLength'));
    }

    public function store(Request $request)
    {
        $message = auth()->user()->messages()->create([
            'content' => request->content
        ]);

        broadcast(new MessageSent($message))->toOthers();

        return response()->json($message);
    }

    public function sendMessage(Request $request)
    {
        try{
            $message = auth()->user()->messages()->create([
                'content' => $request->message,
                'user_id' => auth()->user()->id
            ]);

            broadcast(new MessageSent($request->message, auth()->user()->id))->toOthers();
            // event(new MessageSent());
            return response()->json(['success' =>  true, 'msg' => "Notification added"]);
        }catch (\Exception $e)
        {
            return response()->json(['success' =>  false, 'msg' => $e->getMessage()]);
        }
    }
}
