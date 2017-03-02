<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;
use App\Session;
use App\Round;
use App\Vote;
use App\SessionUser;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class PokerController extends Controller
{
    public function addSession(Request $request) {
        return view('poker.add');
    }

    public function createSession(Request $request)
    {
        $name = $request->input('name');
        $session = new Session();
        $session->type = 'POKER';
        $session->status = 'ACTIVE';
        $session->name = $name;
        $session->save();
        return view('poker.show', ['session' => $session]);
    }

    public function addStory($sessionId) {
        $session = Session::where('id', $sessionId)->first();
        return view('poker.story.add', ['session' => $session]);
    }

    public function createStory(Request $request)
    {
        $name = $request->input('name');
        $sessionId = $request->input('sessionId');

        $session = Session::where('id', $sessionId)->first();
        $story = new Story();
        $story->name = $name;
        $story->session_id = $sessionId;
        $story->status = 'ACTIVE';
        $story->save();

        $stories = Story::where('id', $sessionId)->get();

        return view('poker.show', ['session' => $session, 'stories' => $stories]);
    }

    public function listSession()
    {

        $sessions = Session::where('type', 'POKER')
               ->where('status', 'ACTIVE')
               ->orderBy('id', 'asc')
               ->get();
        // Log::info(''.$var_export($sessions, true));

        return view('poker.list', ['list' => $sessions]);
    }

    public function join($id)
    {
        $user = Auth::user();
        $session = Session::where('id', $id)->first();
        $sessionUser = SessionUser::updateOrCreate(['user_id' => $user->id, 'session_id' => $id]);
        $sessionUsers = SessionUser::with('user')->where('session_id', $id);

        return view('poker.show', ['user' => $user, 'session' => $session]);

    }

}
