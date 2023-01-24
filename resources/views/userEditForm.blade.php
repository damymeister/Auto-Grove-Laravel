<link href="/css/main.css" rel = "stylesheet">
@include('layouts.navbar')
<section class=" py-5 bg-light" >
        <div class="ramka">
        <form role="form" id="user-form" method="POST" action="{{ route('users.update', $user) }}"> {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}" id="roles_box">
                    <label><b><h4 class="fw-bolder">Edytuj Dane użytkownika</h4></b></label><br>
                    </br>
            <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Imię:  ')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email: ')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
         <!-- Role -->
        <div class="mt-4">
            <x-input-label for="role_id" :value="__('Edytuj rolę')" />
            <select name="role_id" class = "block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <option value="1"@if($user->role_id==1) selected @endif>Użytkownik</option>
                <option value="2"@if($user->role_id==2) selected @endif>Moderator</option>
            </select>
        </div>
            <div class="box-footer">
                </br>
                <button type="submit" class="btn btn-success">Zapisz</button>
            </div>
            </form>
        </div>
</section>
<div class="stopa">
@include('layouts.footer')  
</div>

