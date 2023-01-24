<link href="/css/main.css" rel = "stylesheet">
@include('layouts.navbar')
<section class=" py-5 bg-light" >
        <div class="ramka">
        <form role="form"  action="{{ route('store') }}" id="comment-form" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}" id="roles_box">
                    <label><b><h4 class="fw-bolder">Dodaj wpis na Auto-Grove</h4></b></label><br>
                    </br>
                    <textarea name="message" id="message" cols="30" rows="15" required>
                    {{$comment->message}}
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


