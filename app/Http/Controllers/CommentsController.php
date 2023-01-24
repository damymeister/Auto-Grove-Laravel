<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Models\Comment;
class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'asc') -> get();
        return view('comments', ['comments'=>$comments]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comment = new Comment;
        return view('commentsForm', ['comment' => $comment]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        { // Podstawowa walidacja formularza:
            $this->validate($request, 
            [
            'message' => 'required|min:10|max:700',
            ]);
            if(\Auth::user()==null)
            {
                return view('home'); //jesli uzytkownik nie jest zalogowany
            }
            $comment = new Comment();
            $comment->user_id = \Auth::user()->id; //Id aktualnie zalogowanego usera
            $comment->message = $request ->message;
            if ($comment ->save())
            {
                return redirect('comments');
            }
            return view('comments');
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
        $comment = Comment::find($id);
        //Sprawdzenie czy użytkownik jest autorem komentarza
        if($comment->user_id == \Auth::user()->id || \Auth::user()->role_id == 2 || \Auth::user()->role_id == 3)
        {
            return view('commentsEditForm', ['comment'=>$comment]);
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
        $comment = Comment::find($id);
        //Sprawdzenie czy użytkownik jest autorem komentarza
        $comment->message = $request->message;
        if($comment->save() && ($comment->user_id == \Auth::user()->id || \Auth::user()->role_id == 2 || \Auth::user()->role_id == 3))
        {
            return redirect()->route('comments');
        }
        else
         {
            return back()->with(['success' => false, 'message_type' => 'danger',
            'message' => 'Nie posiadasz uprawnień do przeprowadzenia tej operacji.']);
        }
 return "Wystąpił błąd.";
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
        $comment = Comment::find($id);
        //Sprawdz czy użytkownik jest autorem komentarza:
        if($comment->delete() && ($comment->user_id == \Auth::user()->id || \Auth::user()->role_id == 2 || \Auth::user()->role_id == 3))
        {
            return redirect()->route('comments');
        }
        else
        {
            return back();
        }
    }
}