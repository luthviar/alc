@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script type="text/javascript" language="javascript" >
            $(document).ready(function() {
                var dataTable = $('#detailTable').DataTable( {
                    "processing": true,
                    "bServerSide": true,
                    "ajax":{
                        url :"/get-slider-ajax", // json datasource
                        type: "post",  // method  , by default get
                         beforeSend: function (xhr) {
                                var token = $('meta[name="csrf_token"]').attr('content');

                                if (token) {
                                      return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                                }
                            },
                        success: function($data){
                          console.log($data)
                        },
                        columns: [
                          {"data" : "one" },
                          {"data" : "two" },
                          {"data" : "three" },
                          {"data" : "four" }
                        ]
                        
                    }
                } );
            } );
        </script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<div class="col-md-12 ">
  <div class="panel panel-success">
      <div class="panel-heading"> 
        <h4>News List</h4>
      </div>
      <div class="panel-body">
        <span class="pull-right" style="color: green;">
          <a href="/berita/create"><i class="glyphicon glyphicon-plus">New_News</i>
           </a>
        </span><br><br>
      
       <div class = "main-table">
        <table id= "detailTable" class="table table-striped">
        <thead>
        <tr>
          <th>News Title</th>
          <th>Can Reply</th>
          <th>Replies Count</th>
          <th>Created At</th> 
        </tr>
        </thead>
        
      </table>
      </div>
    </div>
  </div>
</div>
    


@endsection
