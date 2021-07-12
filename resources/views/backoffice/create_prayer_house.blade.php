@include('backoffice.includes.messages')
<form method="POST" action="post_payer_house">
        {{ csrf_field() }}
       
        <div class="form-group">
            <label for="name"> Name:</label>
            <input type="text" class="form-control" id="name" name="name" >
        </div>
        <div class="form-group">
            <label for="name">Description:</label>
            <input type="text" class="form-control" id="desc" name="description" >
        </div>
        <div class="form-group">
            <label for="name">Organization:</label>
            <select name="org" id="org">
                <option value="">Select</option>
                @foreach ($org_list as $org)
                <option value="{{ $org->id }}">{{ $org->name }}</option> 
                @endforeach
            </select>
        </div>
       

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    
    </form>