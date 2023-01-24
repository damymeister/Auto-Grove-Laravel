<link href="/css/main.css" rel = "stylesheet">
@include('layouts.navbar')
<section class=" py-5 bg-light" >
        <div class="ramka">
            <form role="form" id="comment-form" method="post" action="{{ route('update', $comment) }}"> {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}" id="roles_box">
                    <label><b><h4 class="fw-bolder">Edytuj Post na blogu</h4></b></label><br>
                    </br>
                    <textarea name="message" id="message" cols="30" rows="10" required>{{$comment->message}}
                    </textarea>
            </div>
            <div class="box-footer">
                </br>
                <button type="submit" class="btn btn-success">Zapisz</button>
            </div>
            </form>
        </div>
</section>
@include('layouts.footer')  
