@include('backoffice.includes.messages')
<form method="POST" action="post_add_user_prayer_house">
        {{ csrf_field() }}
       
        
       
        <div class="form-group">
            <label for="name">User:</label>
            <select name="user" id="user">
                <option value="">Select</option>
                @foreach ($user_list as $user)
                <option value="{{ $user->id }}">{{ $user->first_name.' '.$user->lasst_name }}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">House:</label>
            <select name="house" id="house">
                <option value="">Select</option>
                @foreach ($house_list as $house)
                <option value="{{ $house->id }}">{{ $house->name }}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">Status:</label>
            <input type="text" class="form-control" id="status" name="status" />
        </div>
       

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    
    </form>