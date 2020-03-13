<!DOCTYPE html>
<html>
<head>
    <title>HAHAHAHAHAHAHAHAHHAH</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    
<div class="container">
    <h1>HAHAHAHAHAHA</h1>
    <a class="btn btn-success" href="javascript:void(0)" id="createNewProduct">+ Tambah Data Baru</a>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>STO</th>
                <th>Merk</th>
                <th>Type</th>
                <th>Hostname</th>
                <th>IP OAM</th>
                <th>Metro</th>
                <th>Metro Port 1</th>
                <th>Metro Port 2</th>
                <th>VLAN Inet</th>
                <th>Alamat</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="productForm" name="productForm" class="form-horizontal">
                   <input type="hidden" name="product_id" id="product_id">

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">STO</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="sto" name="sto" placeholder="Massukan STO" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Merk</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukkan Merk" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Type</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="type" name="type" placeholder="Masukkan Tipe" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Hostname</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="hostname" name="hostname" placeholder="Masukkan Hostname" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">IP OAM</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="ip_oam" name="ip_oam" placeholder="Masukkan Tipe" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Metro</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="metro" name="metro" placeholder="Masukkan Tipe" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Metro Port 1</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="metro_port_1" name="metro_port_1" placeholder="Masukkan Tipe" value="" maxlength="50" required="">
                        </div>
                    </div>
      
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Metro Port 2</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="metro_port_2" name="metro_port_2" placeholder="Masukkan Tipe" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">VLAN Inet</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="vlan_inet" name="vlan_inet" placeholder="Masukkan Tipe" value="" maxlength="50" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Tipe" value="" maxlength="50" required="">
                        </div>
                    </div>
      
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
</body>
    
<script type="text/javascript">
  $(function () {
     
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('ajaxproducts.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'sto', name: 'sto'},
            {data: 'merk', name: 'merk'},
            {data: 'type', name: 'type'},
            {data: 'hostname', name: 'hostname'},
            {data: 'ip_oam', name: 'ip_oam'},
            {data: 'metro', name: 'metro'},
            {data: 'metro_port_1', name: 'metro_port_1'},
            {data: 'metro_port_2', name: 'metro_port_2'},
            {data: 'vlan_inet', name: 'vlan_inet'},
            {data: 'alamat', name: 'alamat'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
     
    $('#createNewProduct').click(function () {
        $('#saveBtn').val("create-product");
        $('#product_id').val('');
        $('#productForm').trigger("reset");
        $('#modelHeading').html("Create New Product");
        $('#ajaxModel').modal('show');
    });
    
    $('body').on('click', '.editProduct', function () {
      var product_id = $(this).data('id');
      $.get("{{ route('ajaxproducts.index') }}" +'/' + product_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Product");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#product_id').val(data.id);
          $('#sto').val(data.sto);
          $('#merk').val(data.merk);
          $('#type').val(data.type);
          $('#hostname').val(data.hostname);
          $('#ip_oam').val(data.ip_oam);
          $('#metro').val(data.metro);
          $('#metro_port_1').val(data.metro_port_1);
          $('#metro_port_2').val(data.metro_port_2);
          $('#vlan_inet').val(data.vlan_inet);
          $('#alamat').val(data.alamat);
      })
   });
    
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
    
        $.ajax({
          data: $('#productForm').serialize(),
          url: "{{ route('ajaxproducts.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#productForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    
    $('body').on('click', '.deleteProduct', function () {
     
        var product_id = $(this).data("id");
        confirm("Are You sure want to delete !");
      
        $.ajax({
            type: "DELETE",
            url: "{{ route('ajaxproducts.store') }}"+'/'+product_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
     
  });
</script>
</html>