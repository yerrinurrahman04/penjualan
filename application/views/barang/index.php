
<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('admin/barang')?>">Barang</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('admin/barang/add')?>"><i class="fas fa-plus"></i>Add New</a>
            </div>
            <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php endif;?>
            <div class="card-body">
                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="tabelkelas" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Barcode</th>
                        <th>Nama</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no =1;
                    foreach($barang as $barang){
                echo "<tr>
                        <td>$no</td>
                        <td>$barang->barcode</td>
                        <td>$barang->name</td>
                        <td>$barang->harga_jual</td>
                        <td>$barang->harga_beli</td>
                        <td>$barang->stok</td>
                        <td>
                        <div>
                        <a href=".base_url('admin/barang/getedit/' . $barang->id)." class='btn btn-sm btn-info'><i class='fa fa-edit'></i> Edit</a>
                        <a href=".base_url('admin/barang/delete/'. $barang->id)." class='btn btn-sm btn-danger'
                        onclick='return confirm(\"Ingin menghapus data barang ini?\");'><i class='fas fa-trash'></i> Hapus</a>
                        </div>
                        </td>
                    </tr>";
                    $no++;
                    } ?>

                </tbody>
            </table>
        </div>

            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>