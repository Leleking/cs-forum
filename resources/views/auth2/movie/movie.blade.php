@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Movie Ticket</th>
                <th>DateTime</th>
                <th>Price</th>
                <th>Seats Left</th>
                
                
                
                
              </tr>
            </thead>
            <tbody>
                @foreach($booked as $Booked)
              <tr>
               
                <?php
                $user = App\User::find($Booked->user_id); 
                $ticket = App\ticket::find($Booked->ticket_id);
                $movie = App\movie::find($ticket->movie_id);
               ?>
            <td class="cart_product_img d-flex align-items-center" id="ticket">
            <a href="#"><img width="100px" height="100px" src="/img/{{$movie->image}}" alt="Product"></a>
                <h6></h6>
            </td>
                <td>{{Carbon::parse($Booked->created_at)->format('l jS \of F Y h:i A') }}</td>
                <td>{{$ticket->price}}</td>
                <td>{{$Booked->qty}}</td>
                <td>{{$Booked->total}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td style="max-width:100px">{{$Booked->token}}</td>
              </tr>
              @endforeach



            </tbody>
          </table>
                </div>
            </div>
        </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


</div><!-- /#right-panel -->
<script src="/assets/js/lib/data-table/datatables.min.js"></script>
<script src="/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="/assets/js/lib/data-table/jszip.min.js"></script>
<script src="/assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="/assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="/assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="/assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="/assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="/assets/js/lib/data-table/datatables-init.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();
    } );
</script>

@endsection

