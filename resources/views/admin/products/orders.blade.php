<!-- Stored in resources/views/child.blade.php -->

@extends('admin.layouts.admin')

@section('title', 'orders')


@section('content')
<style>
  /* body {
  padding: 1em 3em;
}

.dataTables_filter {
  float:right;
  margin-bottom: 1em;
  
  &:after {
    clear:both;
  }
}


.dt-buttons a:hover .glyphicon {
  visibility: visible;
} */

.dt-buttons{
  text-align: right;
    margin: 10px 10px 0 0;
}   
.buttons-excel{
  background: #FFF !important;
  color:green;
  border: 1px solid green;
  padding:5px;
   border-radius: 5px;
}
[type=search] {
    outline-offset: 0px;
    -webkit-appearance: none;
    border-color: #0080005c;
}

div.dataTables_filter > label > input {
  font-family: Arial, sans-serif;
  font-size: .6em;
border-radius: 5px;
padding:8px 30px;
    
}
  </style>
 <div class="row">
 <div class="col">


    
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Orders</h3>
                    <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    {{-- <a href="/myadmin/Products/create" class="btn btn-success">New </a> --}}
                     <div class="input-group-append">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="">

              @if (session('success'))

              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                {{ session('success') }}
              </div>
          
              @endif

              
           
              <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                <thead>
                  <tr role="row">
                    <th  style="width: 77px;">ID</th>
                    <th  style="width: 100px;">Product Name</th>
                    <th  style="width: 100px;">User Name</th>
                    <th  style="width: 77px;">Order Date</th>
                      <th  style="width: 77px;">City</th>
                    <th  style="width: 44px;">Phone</th>
                    <th  style="width: 77px;">Quantity</th>
                      <th  style="width: 77px;">status</th>
                        <th  style="width: 173px;">Notes</th>
                      <th  style="width: 77px;">Seller Man</th>
                     <th tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 77px;">Edit</th>
                       <th tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 77px;">Delete</th>
      
                  </tr>
                </thead>
              
                <tbody>

                      @foreach ($rows as $item)
                        <tr>
                        <td>  {{$item->id }} </td>
                        <td>  {{$item->product_name }} </td>
                        <td>  {{$item->user_name }} </td>
                       
                        <td>{{date("Y-m-d", strtotime($item->created_at))}}</td>
                       
                        <!--<td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->updated_at)->format('d:m:Y')}}</td>-->
                          <td>  {{$item->city->title_en ?? '' }} </td>
                        <td>  {{$item->phone }} </td>
                        <td>  {{$item->qty }} </td>
                         <td>  {{$item->status->title_en ?? '' }} </td>
                          <td>  {{$item->notes }} </td>
                          <td>  {{$item->seller_name }} </td>
  <td>  <a href="{{ route('editOrder',$item->id) }}" >edit</a></td>
      <td>
           <form action="{{ route('deleteOrder', $item->id) }}" method="POST" onsubmit="return confirmDelete();">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
      </td>                  
                      </tr>                       
                      @endforeach
                </tbody>
              </table>


            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>


 </div>
 
 </div>
   



@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   <!-- Datatable JS -->
   <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script>
  $(function () {
  $('#example').dataTable({
    paging: false,
     ordering: false,
    fixedHeader: {
      header: true
    },
		dom: 'Bfrtip',
		buttons: [
      {
        extend: 'excel',
        text: 'Export Excel <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>',
        exportOptions: {
    columns: ':not(:last-child)',
  }
      },
   
		],
    
  });
});
    function confirmDelete() {
        return confirm('Are you sure you want to delete this order?');
    }

  </script>
@endsection