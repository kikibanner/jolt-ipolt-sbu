@extends('layouts.master')

@section('css')

@endsection


@section('content')
<div class="card">
    <div class="card-header card-header-icon" data-background-color="purple">
        <i class="material-icons">blur_linear</i>
    </div>
    <div style="overflow-x: auto;" class="px-3 py-3">
        <div class="card-content">
            <h4 class="card-title">Daftar IP OLT</h4>
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
                            <th width="280px">Action</th>
                        </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
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
    
@endsection
