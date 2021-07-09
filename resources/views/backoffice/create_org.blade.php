@include('backoffice.includes.messages')
<form method="POST" action="post_org">
        {{ csrf_field() }}
       
        <div class="form-group">
            <label for="name">Org Name:</label>
            <input type="text" class="form-control" id="org" name="org_name" >
        </div>
        <div class="form-group">
            <label for="name">Description:</label>
            <input type="text" class="form-control" id="desc" name="description" >
        </div>
        
       

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    
    </form>