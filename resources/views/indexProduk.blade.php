<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kategori">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/status">Status</a>
            </li>
          </ul>
        </div>
    </nav>
    <h2 class="m-2 text-center">Produk</h2>

    <div class="container" id="produk-list">
        <div class="row">
            <div class="w-100 d-flex justify-content-end">
                <button class="btn btn-primary btn-add" data-toggle="modal" data-target="#modalAdd">add</button>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga Produk</th>
                    <th scope="col">Kategori Produk</th>
                    <th scope="col">Status Produk</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <!-- modal delete -->
    <div class="modal fade" id="modalDel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <h6>Apakah anda ingin menghapus data ini?</h6>
                        <input type="hidden" id="data_id" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger btn-delete">Delete</button>
            </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- modal Add -->
    <div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Produk</label>
                        <input type="text" id="nama_produk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Harga Produk</label>
                        <input type="text" id="harga_produk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kategori Produk</label>
                        <select type="text" id="kategori_produk" class="form-control">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Status Produk</label>
                        <select type="text" id="status_produk" class="form-control">
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-simpan-add">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- modal edit -->
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Produk</label>
                        <input type="text" id="nama_produk" class="form-control">
                        <input type="hidden" id="data_id" class="form-control">
                    </div>
                </form>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Harga Produk</label>
                        <input type="text" id="harga_produk" class="form-control">
                    </div>
                </form>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kategori Produk</label>
                        <select type="text" id="kategori_produk" class="form-control">
                        </select>
                    </div>
                </form>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Status Produk</label>
                        <select type="text" id="status_produk" class="form-control">
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-simpan-edit">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    <!--  -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function getProduk() {
            $.ajax({
                url: '/api/produk',
                method: 'GET',
                success: function(response) {
                    $('tbody').html('');
                    $('#modalAdd #kategori_produk').empty();
                    $('#modalAdd #status_produk').empty();
                    $('#modalEdit #kategori_produk').empty();
                    $('#modalEdit #status_produk').empty();
                    let no=0;
                    $.each(response.produk,function(i,v){
                        console.log(no);
                        no++
                        $('tbody').append(' <tr>\
                            <th scope="row">'+no+'</th>\
                            <td>'+v.nama_produk+'</td>\
                            <td>'+v.harga+'</td>\
                            <td>'+v.kategories.nama_kategori+'</td>\
                            <td>'+v.statuses.nama_status+'</td>\
                            <td> <button class="btn btn-secondary btn-edit" data-nama="'+v.nama_produk+'" data-harga="'+v.harga+'" data-kategori="'+v.kategori_id+'" data-status="'+v.status_id+'" data-id="'+v.id_produk+'" data-toggle="modal" data-target="#modalEdit">Edit</button>  <button class="btn btn-danger btn-delete" data-id="'+v.id_produk+'" data-toggle="modal" data-target="#modalDel">delete</button> </td>\
                        </tr>');
                    })

                    let loop_kategori ='<option disabled selected>pilih kategori</option>';
                    $.each(response.kategori,function(i,v){
                        loop_kategori+='<option value="'+v.id_kategori+'">'+v.nama_kategori+'</option>';
                    })
                    $('#modalAdd #kategori_produk').html(loop_kategori);
                    $('#modalEdit #kategori_produk').html(loop_kategori);

                    let loop_status ='<option disabled selected>pilih status</option>';
                    $.each(response.status,function(i,v){
                        loop_status+='<option value="'+v.id_status+'">'+v.nama_status+'</option>';
                    })
                    $('#modalAdd #status_produk').html(loop_status);
                    $('#modalEdit #status_produk').html(loop_status);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }


        //edit
            $('tbody').on('click','.btn-edit',function(){
                let nama_produk=$(this).data('nama');
                let harga_produk=$(this).data('harga');
                let kategori_produk=$(this).data('kategori');
                let status_produk=$(this).data('status');
                let data_id=$(this).data('id');

                $('#modalEdit').find('#nama_produk').val(nama_produk);
                $('#modalEdit').find('#harga_produk').val(harga_produk);
                $('#modalEdit').find('#kategori_produk').val(kategori_produk);
                $('#modalEdit').find('#status_produk').val(status_produk);
                $('#modalEdit').find('#data_id').val(data_id);
            });

            $('.btn-simpan-edit').on('click', function () {
                let nama_produk = $('#modalEdit').find('#nama_produk').val();
                let harga_produk = $('#modalEdit').find('#harga_produk').val();
                let kategori = $('#modalEdit').find('#kategori_produk').val();
                let status = $('#modalEdit').find('#status_produk').val();
                let id = $('#modalEdit').find('#data_id').val();

                let data = {
                    nama_produk: nama_produk,
                    harga: harga_produk,
                    kategori_id: kategori,
                    status_id: status
                };

                $.ajax({
                    url: 'api/produk/' + id,
                    type: 'PATCH',
                    data: data,
                    success: function (response) {
                        console.log('Update berhasil:', response);
                        getProduk();
                        $('#modalEdit').modal('hide');
                    },
                    error: function (error) {
                        Swal.fire({
                            title: "Maaf",
                            customClass: { container: "swal-alert-error" },
                            allowOutsideClick: false,
                            html: "<div>Gagal melakukan update: " + error.responseJSON.message + "</div>"
                        });
                    }
                });
            });


            $('#modalEdit').on('hidden.bs.modal', function () {
                $('#modalEdit').find('#name').val('');
                $('#modalEdit').find('#harga_produk').val('');
                $('#modalEdit').find('#data_id').val('');
                getProduk();
            });
        //

        //delete
            $('tbody').on('click','.btn-delete',function(){
                let data_id=$(this).data('id');
                $('#modalDel').find('#data_id').val(data_id);
            });

            $('.btn-delete').on('click', function () {
                let nama=$('#modalDel').find('#name').val();
                let id=$('#modalDel').find('#data_id').val();

                $.ajax({
                url: 'api/produk/'+id,
                type: 'DELETE',
                success: function (response) {
                    console.log('Delete berhasil:', response);
                    getProduk();
                    $('#modalDel').modal('hide');
                },
                error: function (error) {
                    Swal.fire({
                    "title":"Maaf",
                    "customClass":{"container":"swal-alert-error"},
                    "allowOutsideClick":false,
                    "html":"<div>'Gagal melakukan Delete: "+error.responseJSON.message+"</div>"
                    });
                }
                });
            });

            $('#modalDel').on('hidden.bs.modal', function () {
                $('#modalDel').find('#data_id').val('');
                getProduk();
            });
        //

        //create
            $('.btn-simpan-add').on('click', function () {
                let nama_produk = $('#modalAdd').find('#nama_produk').val();
                let harga_produk = $('#modalAdd').find('#harga_produk').val();
                let kategori = $('#modalAdd').find('#kategori_produk').val();
                let status = $('#modalAdd').find('#status_produk').val();

                let data = {
                    nama_produk: nama_produk,
                    harga: harga_produk,
                    kategori_id: kategori,
                    status_id: status
                };

                $.ajax({
                    url: 'api/produk',
                    type: 'POST',
                    data: data,
                    success: function (response) {
                        console.log('Add berhasil:', response);
                        getProduk();
                        $('#modalAdd').modal('hide');
                    },
                    error: function (error) {
                        Swal.fire({
                            title: "Maaf",
                            customClass: { container: "swal-alert-error" },
                            allowOutsideClick: false,
                            html: "<div>Gagal melakukan Add: " + error.responseJSON.message + "</div>"
                        });
                    }
                });
            });

            $('#modalAdd').on('hidden.bs.modal', function () {
                $('#modalAdd').find('#nama_produk').val('');
                $('#modalAdd').find('#harga_produk').val('');
                getProduk();
            });
        //

        $(document).ready(function() {
            getProduk();

        });
    </script>
</body>
</html>
