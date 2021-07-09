
    @include('includes.messages')
    <h2>Register</h2>
    <form method="POST" action="doregister">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" id="fname" name="first_name">
        </div>
        <div class="form-group">
            <label for="name">Last Name:</label>
            <input type="text" class="form-control" id="lname" name="last_name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="email">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="email">Timezone:</label>
            <select name="timezone" id="timezone">
            <option value="">Select</option>
            <option value="1">US time zone</option>
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

    <h2>Register</h2>
    <form method="POST" action="dologin">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
 
 
