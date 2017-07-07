@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
		
	<div class = "PageContainer">
         <div class="quick-press">
           <h3>Create Module</h3>
           <form action="" method="post">
			  ID Departement :<br><br>
             <input type="text" name="Short-Name" placeholder="Short-Name"/><br>
			  Departement Name :<br><br>
             <input type="text" name="Name" placeholder="Name"/><br>
			  Job Family :<br><br>
			  <select name="job_family">
                      <option value="">IT</option>
					  <option value="">IT</option>
                  </select><br>
			<button type="submit" class="submit" name="submit">Publish</button>
           </form>
         </div>
       </div>
  </div>
</div>
@endsection