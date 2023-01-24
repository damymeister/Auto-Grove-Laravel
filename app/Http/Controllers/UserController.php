<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()->role_id == 3)
        {
        $users = User::orderBy('created_at', 'asc') -> get();
        return view('users', ['users'=>$users]);
        }
        else
        {
            return view('/onas');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Sprawdzenie czy użytkownik jest autorem komentarza
        $user = User::find($id);
        if(\Auth::user()->role_id == 3 && $user->id != \Auth::user()->id )
        {
            return view('userEditForm', ['user'=>$user]);
        }
        else {
        return back()->with(['success' => false, 'message_type' => 'danger',
        'message' => 'Nie posiadasz uprawnień do przeprowadzenia tej operacji.']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        if(\Auth::user()->role_id == 3 && $user->id != \Auth::user()->id )
        {
            if($user->save())
            {
            return redirect()->route('users');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //Znajdź komentarz o danych id:
         $user = User::find($id);
         //Sprawdz czy użytkownik jest autorem komentarza:
         if(\Auth::user()->role_id == 3 && $user->id != \Auth::user()->id )
         {
            if($user->delete())
            {
             return redirect()->route('users');
            }
         }
         else
         {
             return back();
         }
    }
}
