@include('backoffice.includes.messages')
<form method="POST" action="post_user_profile">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$user_info->id}}">
        <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" id="fname" name="first_name" value="{{$user_info->first_name}}">
        </div>
        <div class="form-group">
            <label for="name">Last Name:</label>
            <input type="text" class="form-control" id="lname" name="last_name" value="{{$user_info->last_name}}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$user_info->email}}">
        </div>
        <div class="form-group">
            <label for="email">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{$user_info->phone_number}}">
        </div>
        <div class="form-group">
            <label for="email">Timezone:</label>
            <select name="timezone" id="timezone">
            <option value="">Select</option>
            <option value="1" >US time zone</option>
            @foreach ($timezones as $timezone)
                <option value="{{ $timezone->id }}" {{ ( $timezone->id == $user_info->timezone_id) ? 'selected' : '' }}> {{ $timezone->name }} </option>
            @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password Confirmation:</label>
            <input type="password" class="form-control" id="password_confirmation"
                   name="password_confirmation">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    
    </form>