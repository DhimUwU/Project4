
      <!-- partial -->
<div class="main-panel">
    <div class="content-wrapper" style="background: #141D26; transform: translateX(24%);">

        <div class="row buf">
            <div class="col-md-6 stretch-card grid-margin rounded-0 shadow-md">
                <div class="card warna card-img-holder text-white" style=" background: linear-gradient(100deg,#ac1d9e9b,#bfc7bfb9); 
                box-shadow: 10px 10px 8px #747b828b; overflow: hidden;">
                    <div class="card-body">
                        <img src="<?php echo base_url() ?>assets/images/faces/bochi.jpg" class="card-img-absolute"
                            alt="circle-image" style="opacity: 0.500;"/>
                        <h4 class="font-weight-normal mb-3" style="z-index:200px;position: relative;">Pengeluaran minggu ini
                            <i class="mdi mdi-cash-multiple mdi-24px float-right"></i>
                        </h4>
                        <?php              
                 
               foreach($expense->result() as $row)  
                {  
           
                 ?>

                        <?php  if($row->E===NULL){ ?>
                        <h1 class="mb-5" style="z-index:200px;position: relative;">Tidak ada pengeluaran minggu ini!</h1>
                        <?php }    
                  else{ ?>
                        <h1 class="mb-5">Rp. <?php echo  number_format($row->E) ?></h1>
                        <?php }?>

                        <?php  
                 } 
                ?>
                        <!--                  <h6 class="card-text">Increased by 60%</h6>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card shadow rounded-2 " style="background: #141A31; border-radius: 20px; border: 2px solid white">
                    <div class="card-body">
                        <h4 class="card-title text-white">Kebutuhan pengeluaran baru-baru ini</h4>
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered " style="background: none;">
                                <thead>
                                    <tr class="text-white" style="background: linear-gradient(-100deg,#46aece,#142c43 110%);">
                                        <th class="p- text-center">
                                            #
                                        </th>
                                        <th class="p- text-center">
                                            Nama
                                        </th>
                                        <th class="p- text-center">
                                            Deskripsi
                                        </th>

                                        <th class="p- text-center">
                                            Jumlah
                                        </th>
                                        <th class="p- text-center">
                                            Status
                                        </th>
                                        <th class="p- text-center">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody style="background: none;">
                                    <?php              
                  if($fetch_debit->num_rows() > 0)  
         {  
                      $j=1;
              $i=1;
               foreach($fetch_debit->result() as $row)  
                {  
           ?>
                                    <tr class="text-white">
                                        <td class="px-3 py-2 align-middle text-center" style="background: none;"><?php echo $i++ ?></td>
                                        <td class="px-3 py-2 align-middle">
                                            <img src="<?php echo base_url() ?>assets/images/faces/bochi.jpg"
                                                class="mr-2" alt="image">
                                            <?php echo $row->name ?>
                                        </td>
                                        <td class="px-3 py-2 align-middle"> <?php echo $row->discription ?></td>

                                        <td class="px-3 py-2 align-middle text-right">
                                          Rp. <?php echo number_format($row->amount) ?>
                                        </td>
                                        <td class="px-3 py-2 align-middle text-center">

                                            <label class="badge badge-gradient-warning text-dark">Pengeluaran</label>
                                        </td>
                                        <td class="px-3 py-2 align-middle text-center">

                                            <a class="btn btn-info bg-gradient-info btn-xs rounded-0 p-2"
                                                onclick="document.getElementById('id06<?php echo $j; ?>').style.display='block'"
                                                aria-label="Skip to main navigation">
                                                <i class="fa fa-pencil-square-o fa-xs" style="color:white;"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn-danger bg-gradient-danger btn-xs rounded-0 p-2"
                                                href="<?php echo base_url() ?>/Home/add_debit?del=<?php echo $row->deb_id ?>"
                                                aria-label="Delete"
                                                onclick="return confirm('Yakin mau ngapus ini?');">
                                                <i class="fa fa-trash-o fa-xs" aria-hidden="true"></i>
                                            </a>


                                        </td>
                                    </tr>
                                    <div id="id06<?php echo $j; ?>" class="w3-modal">
                                        <div class="w3-modal-content">
                                            <header class="w3-container w3-sand">
                                                <span
                                                    onclick="document.getElementById('id06<?php echo $j; ?>').style.display='none'"
                                                    class="w3-button w3-display-topright">&times;</span>
                                                <br>
                                                <h4>Ubah pengeluaran</h4>
                                            </header>
                                            <div class="w3-container">
                                                <form class="forms-sample" method="post"
                                                    action="<?php echo base_url() ?>/Home/add_debit?id=<?php echo $row->deb_id ?>&del_id=<?php echo $row->id ?> ">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect3">Nama</label>
                                                        <input name="" readonly="" type="text"
                                                            class="form-control form-control-sm"
                                                            value="<?php echo $row->name  ?>" placeholder=""
                                                            aria-label="Name">
                                                        <input type="hidden" name="name"
                                                            value="<?php echo $row->cus_id ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal pembayaran</label>
                                                        <input name="date" type="date" required=""
                                                            class="form-control form-control-sm" placeholder="Username"
                                                            aria-label="Date">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Deskripsi</label>
                                                        <input name="discription"
                                                            value="<?php echo $row->discription ?>" type="text"
                                                            class="form-control form-control-sm"
                                                            id="exampleInputPassword1" placeholder="Description">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jumlah yang dibayar</label>
                                                        <input name="amount" onkeypress="return isNumber(event)"
                                                            value="<?php echo $row->amount ?>" type="text"
                                                            class="form-control form-control-sm"
                                                            placeholder="Debit Amount" aria-label="Debit Amount">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect3">Exp Category</label>
                                                        <select required="" name="item"
                                                            class="form-control form-control-sm"
                                                            id="exampleFormControlSelect3">
                                                            <option disabled selected>Pilih..</option>
                                                            <option value="Bencana">Bencana</option>
                                                            <option value="Sakit">Sakit</option>
                                                            <option value="Pembelian">Pembelian</option>
                                                            <option value="Perlengkapan">Perlengkapan</option>
                                                        
                                                
                                                            <option value="Lainnya">Lainnya</option>

                                                        </select>
                                                    </div>
                                                    <button type="submit" name="update_debit"
                                                        class="btn btn-gradient-primary mr-2 btn-sm ">Perbarui</button>
                                                    <button type="reset" class="btn btn-sm btn-light">Bersihkan</button>
                                                </form>
                                            </div>
                                            <footer class="w3-container w3-sand">
                                                <br>
                                            </footer>
                                        </div>
                                    </div>
                                    <?php 
                                  $j++;
                      }  
                    }
                    
                    else  
                    {  
                    ?>
                                    <tr>

                                        <td class="px-3 py-2 align-middle" colspan="12">
                                            <div class="alert alert-danger" role="alert">
                                                Yuhuuu Tidak ada pengeluaran sama sekali!!</div>
                                        </td>
                                    </tr>
                                    <?php  
                    }  
                    ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           

        
                
    </div>
</div>
      
            
            
  <script>
		$(function() {
			$("#example").simplePagination({
				previousButtonClass: "btu  rounded-2",
				nextButtonClass: "btu  rounded-2"
			});

		});
	</script>
	<script>
            $(document).ready(function() {
              $('#example').DataTable( {
                  columnDefs: [
                      {
                          targets: [ 0, 1, 2, 3, 4 ],
                          className: 'mdl-data-table__cell--non-numeric'
                      }
                  ]
              } );
          } );
            </script>
            
        <style>
          .btu{
                text-decoration: none;
                list-style: none;
                padding: 8px;
                background: none;
                border-radius: 10px;
                border: 2px solid #46aece;
                text-transform: uppercase;
                color:#46aece;
              }

              .btu:hover{
                color:white;
                text-decoration: none;
                background: #46aece;
                transition: ease-in-out all 0.50s;
              }
              .buf{
                justify-content: center;
                align-items: center;
              }
              
        </style>
        <!-- content-wrapper ends -->

        
      