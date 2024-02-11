@extends('admin.main')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<div class="p-5">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Order No</th>
                <th>Customer Name</th>
                <th>Food Category </th>
                <th>Food Item</th>
                <th>Price</th>
                <th>Order Status</th>
            </tr>
        </thead>
        <tbody>
        

        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script> new DataTable('#example'); </script>

@endsection