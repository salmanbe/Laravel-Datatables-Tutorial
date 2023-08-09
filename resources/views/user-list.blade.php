@extends('layout')

@section('content')

<br /><br />

<table id="table" class="table table-striped">
    <thead>
        <tr>                                                    
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
        </tr>
    </thead>              
</table>
      
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>

$(document).ready(function () {

$('#table').DataTable({
    stateSave: false,
    processing: true,
    serverSide: true,
    iDisplayLength: 10,
    aaSorting: [],
    ajax: '/',
    dataType: 'json',
    columns: [
        {data: 'name', name: 'name'},            
        {data: 'email', name: 'email'},            
        {data: 'role', name: 'role'},            
        {data: 'active', name: 'active'}
    ]
});
});

</script>

@stop