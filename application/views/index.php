
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper" style="background: #141D26; transform: translateX(24%);">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
        <div class="page-header">
            <h3 class="page-title text-primary">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span>
                <span class="mnu" style="color: #45CFF1;">Menu utama</span>
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">

                </ul>
            </nav>
        </div>
        <div class="row buf">
            <!--<div class="col-md-6 stretch-card grid-margin rounded-0 shadow-md">
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
                                          <h6 class="card-text">Increased by 60%</h6
                    </div>
                </div>
            </div>-->
            <div class="col-md-6 stretch-card grid-margin rounded-2 shadow-md" style=" width: 400px;">
                <div class="card warna card-img-holder text-white" style=" box-shadow: 10px 10px 8px  #747b828b; overflow: hidden; background: linear-gradient(100deg,#24ba389b,#bfc7bfb9);">
                    <div class="card-body">
                    <img src="<?php echo base_url() ?>assets/images/faces/nijika.jpg" class="card-img-absolute"
                            alt="circle-image" style="opacity: 0.500; width: 200px; height: auto;"/>
                        <h4 class="font-weight-normal mb-3" style="z-index:200px;position: relative;"> Jumlah pendapatan minggu ini
                            <i class="mdi mdi-keyboard-return mdi-24px float-right"></i>
                        </h4>
                        <?php              
                 
               foreach($income->result() as $row)  
                {  
           
                 ?>

                        <?php  if($row->I===NULL){ ?>
                        <h1 class="mb-5">Tidak ada pendapatan minggu ini!</h1>
                        <?php }    
                  else{ ?>
                        <h1 class="mb-5">Rp. <?php echo  number_format($row->I) ?></h1>
                        <?php }?>

                        <?php  
                 } 
           ?>
                        <!--                  <h6 class="card-text">Decreased by 10%</h6>-->
                    </div>
                </div>
            </div>

        </div>
        <!--
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                    <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                  </div>
                  <canvas id="visit-sale-chart" class="mt-4"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Income Sources</h4>
                  <canvas id="traffic-chart"></canvas>
                  <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                </div>
              </div>
            </div>
          </div>
-->

        <!--<div class="row">
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
                                            Katagori
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
                                        <td class="px-3 py-2 align-middle"> <?php echo $row->category_id ?></td>

                                        <td class="px-3 py-2 align-middle text-right">
                                          Rp. <?php echo number_format($row->amount, 2) ?>
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
                                                        <label>Date Of Payment</label>
                                                        <input name="date" type="date" required=""
                                                            class="form-control form-control-sm" placeholder="Username"
                                                            aria-label="Date">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Description</label>
                                                        <input name="discription"
                                                            value="<?php echo $row->discription ?>" type="text"
                                                            class="form-control form-control-sm"
                                                            id="exampleInputPassword1" placeholder="Description">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Amount Debited</label>
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
        </div> -->

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card rounded-2" style="background: #141A31; border-radius: 20px; border: 2px solid white">
                    <div class="card-body">
                        <h4 class="card-title text-white">Jumlah pemasukan yang diterima </h4>
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered">
                                <thead>
                                    <tr class=" text-white" style="background: linear-gradient(-100deg,#46aece,#142c43 110%);">
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
                                <tbody>


                                    <?php    
                              $i=1;
                              $j=1;
                          if($fetch_credit->num_rows() > 0)  
                {  
                    
                      foreach($fetch_credit->result() as $row)  
                        {  
                  ?>
                                    <tr class="text-white">
                                        <td class="px-3 py-2 align-middle text-center"><?php echo $i++ ?></td>
                                        <td class="px-3 py-2 align-middle">
                                            <img src="<?php echo base_url() ?>assets/images/faces/avatar.jpg"
                                                class="mr-2" alt="image">
                                            <?php echo $row->name ?>
                                        </td>
                                        <td class="px-3 py-2 align-middle"><?php echo $row->discription ?></td>

                                        <td class="px-3 py-2 align-middle text-right">
                                          Rp. <?php echo number_format($row->amount ) ?>
                                        </td>
                                        <td class="px-3 py-2 align-middle text-center">
                                            <label class="badge badge-gradient-primary">Pendapatan</label>
                                        </td>
                                        <td class="px-3 py-2 align-middle text-center">

                                            <a class="btn btn-info bg-gradient-info btn-xs p-2 rounded-0"
                                                onclick="document.getElementById('id07<?php echo $j; ?>').style.display='block'"
                                                aria-label="Skip to main navigation">
                                                <i class="fa fa-pencil-square-o fa-xs" style="color:white;"
                                                    aria-hidden="true"></i>
                                            </a>

                                            <a class="btn btn-danger bg-gradient-danger btn-xs p-2 rounded-0"
                                                href="<?php echo base_url() ?>Home/add_credit?del=<?php echo $row->cre_id ?>"
                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                aria-label="Delete">
                                                <i class="fa fa-trash-o fa-xs" aria-hidden="true"></i>
                                            </a>


                                        </td>
                                        <div id="id07<?php echo $j; ?>" class="w3-modal">
                                            <div class="w3-modal-content">
                                                <header class="w3-container w3-sand">
                                                    <span
                                                        onclick="document.getElementById('id07<?php echo $j; ?>').style.display='none'"
                                                        class="w3-button w3-display-topright">&times;</span>
                                                    <br>
                                                    <h4>Edit Pemasukan</h4>
                                                </header>
                                                <div class="w3-container">
                                                    <form class="forms-sample" method="post"
                                                        action="<?php echo base_url() ?>/Home/add_credit?id=<?php echo $row->cre_id ?>&del_id=<?php echo $row->id ?> ">
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
                                                            <input name="date" readonly="" type="text"
                                                                value="<?php echo $row->date ?>" required=""
                                                                class="form-control form-control-sm"
                                                                placeholder="Username" aria-label="Date">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Deskripsi</label>
                                                            <input name="discription"
                                                                value="<?php echo $row->discription ?>" type="text"
                                                                class="form-control form-control-sm"
                                                                id="exampleInputPassword1" placeholder="Description">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jumlah kas yang disetor</label>
                                                            <input name="amount" onkeypress="return isNumber(event)"
                                                                value="<?php echo $row->amount ?>" type="text"
                                                                class="form-control form-control-sm"
                                                                placeholder="Debit Amount" aria-label="Debit Amount">
                                                        </div>

                                                        <button type="submit" name="update_credit"
                                                            class="btn btn-gradient-primary mr-2 btn-sm ">Perbarui</button>
                                                        <button type="reset" class="btn btn-sm btn-light">Bersihkan</button>
                                                    </form>
                                                </div>
                                                <footer class="w3-container w3-sand">
                                                    <br>
                                                </footer>
                                            </div>
                                        </div>
                                    </tr>
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
                                                No Amounts Yet!</div>
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
        <div class="row">
            <div class="col-12 grid-margin">
              <div class="card rounded-2" style="background: #141A31; border-radius: 20px; border: 2px solid white">
                <div class="card-header  rounded-2" style="background: black; border-radius: 20px;">
                  <h4 class="card-title mb-0" style="color:  #45CFF1;">Laporan Pengeluaran</h4>
                </div>
                <div class="card-body">
                    <form class="form-inline" method="post" action="<?php echo base_url() ?>Home/report">
                    <div class="input-group mb-2 mr-sm-2" style="background:none;">
                      <div class="input-group-prepend" style="background:none;">
                    <div class="input-group-text" style="color:  #45CFF1; background:none;  border:2px solid #45CFF1; border-radius: 5px;">From</div>
                      </div>
                        <input type="date" class="form-control rounded-2" style="color:  #45CFF1; background:none; border:2px solid #45CFF1;  border-radius: 5px;" name="from"id="inlineFormInputGroupUsername2" placeholder="Username">
                    </div>
                  
                    <label class="sr-only" for="inlineFormInputGroupUsername2" style="background:none;">To</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                    <div class="input-group-text" style="background:none; color:  #45CFF1; border:2px solid #45CFF1;  border-radius: 5px;">To</div>
                      </div>
                        <input type="date" name="to" class="form-control text-white" style="background:none;  border:2px solid #45CFF1;  border-radius: 5px; color:  #45CFF1;" id="inlineFormInputGroupUsername2" placeholder="Username">
                    </div>
                    
                  
                    <button type="submit" name="view" class="glowing-btn mb-2  rounded-2"><span class="glowing-txt">Lihat detail<span class="faulty-letter"></span> laporan kas</span></button>
                  </form>
                    <br>
                  <h5 class="text-secondary">Todays Report</h5>
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered" >
                      <thead>
                        <tr class=" text-white" style="background: linear-gradient(-100deg,#46aece,#142c43 110%);">
<!--                            <th>
                            #
                          </th>-->
                          <th class="py-2 text-center ">
                            Nama
                          </th>
                          <th class="py-2 text-center ">
                            Deskripsi
                          </th>
                          <th class="py-2 text-center ">
                            Status
                          </th>
                          <th class="py-2 text-center ">
                            Jumlah
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                          <?php              
                  if($fetch_debit->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_debit->result() as $row)  
                {  
           ?> 
                        <tr>
                          <td class="px-3 py-2 align-middle text-white">
                            <img src="<?php echo base_url() ?>assets/images/faces/806962_user_512x512.png" class="mr-2" alt="image">
                           <?php echo $row->name ?>
                          </td>
                          <td class="px-3 py-2 align-middle text-white"> <?php echo $row->discription ?></td>
                          <td class="px-3 py-2 align-middle text-center text-white">
                        
                              <label class="badge badge-gradient-danger ">Pengeluaran</label>
                          </td>
                          <td class="px-3 py-2 align-middle text-right text-white">
                          Rp. <?php echo number_format($row->amount) ?>
                          </td>
                        </tr>
                        <?php       
             }  
          }  
          else  
           {  
           ?>  
               
                      <td>No Expenses Found</td> 
              
           <?php  
          }  
           ?> 
                      
                      <?php              
                  if($fetch_credit->num_rows() > 0)  
         {  
             
               foreach($fetch_credit->result() as $row)  
                {  
           ?> 
                        <tr>
                          <td  class="px-3 py-2 align-middle text-white">
                            <img src="<?php echo base_url() ?>assets/images/faces/806962_user_512x512.png" class="mr-2" alt="image">
                            <?php echo $row->name ?>
                          </td>
                          <td  class="px-3 py-2 align-middle text-white"><span class="text-muted">N/A</span></td>
                          <td  class="px-3 py-2 align-middle text-center text-white">
                            <label class="badge badge-success">diterima</label>
                          </td>
                          <td  class="px-3 py-2 align-middle text-right text-white">
                          Rp. <?php echo number_format($row->amount) ?>
                          </td>
                        </tr>
                         <?php       
             }  
          }  
          else  
           {  
           ?>  
               
                      <td>Tidak ada jumlah kas</td> 
              
           <?php  
          }  
           ?> 
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        <!--        <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Todays Expense</h4>
                  <div class="table-responsive">
                    <table id="example2" class="table">
                      <thead>
                        <tr>
                          <th>
                            Name
                          </th>
                          <th>
                            Item
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Amount
                          </th>
                          <th>
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php              
                  if($fetch_credit->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_credit->result() as $row)  
                {  
           ?> 
                        <tr>
                          <td>
                            <img src="<?php echo base_url() ?>assets/images/faces/806962_user_512x512.png" class="mr-2" alt="image">
                            <?php echo $row->cus_id ?>
                          </td>
                          <td>
                            <?php echo $row->category_id ?>
                          </td>
                          <td>
                            <label class="badge badge-gradient-success">DONE</label>
                          </td>
                          <td>
                          <?php echo $row->amount ?>
                          </td>
                          <td>
                             
                          </td>
                        </tr
                         <?php       
                        }  
                      }  
                      else  
                      {  
                      ?>  
                          
                                  <td>No data Found</td> 
                          
                      <?php  
                      }  
                      ?> 
                
                        
                        
                        
                                </tbody>
                              </table>
                              
                            </div>
                          </div>
                          <script>
              $(function() {
                $("#example").simplePagination({
                  previousButtonClass: "btn btn-gradient-primary btn-sm",
                  nextButtonClass: "btn btn-gradient-primary btn-sm"
                });


              });
            </script>
                        </div>
                      </div>
                    </div>-->
    <script>
		$(function() {
			$("#example").simplePagination({
				previousButtonClass: "btn btn-gradient-primary btn-sm",
				nextButtonClass: "btn btn-gradient-primary btn-sm"
			});


		});
	</script>

        <style>
        .w3-modal {
            z-index: 1101;
        }
        .buf{
                
                justify-content: center;
                align-items: center;
              }
        :root {
  --glow-color:#45CFF1;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

.glowing-btn {
  padding: 0.875rem 2.5rem;
  position: relative;
  color: var(--glow-color);
  cursor: pointer;
  border: 0.15em solid var(--glow-color);
  border-radius: 0.45em;
  background: none;
  perspective: 2em;
  font-family: "Raleway", sans-serif;
  font-size: 1rem;
  text-align: center;
  font-weight: 900;
  letter-spacing: 2px;

  -webkit-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  -moz-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  animation: border-flicker 2s linear infinite;
}

.glowing-txt {
  
  
  -webkit-text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3),
    0 0 0.45em var(--glow-color);
  -moz-text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3),
    0 0 0.45em var(--glow-color);
  text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em var(--glow-color);
  animation: text-flicker 3s linear infinite;
}

.faulty-letter {
  opacity: 0.5;
  animation: faulty-flicker 2s linear infinite;
}



.glowing-btn::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  z-index: -1;
  
  box-shadow: 0 0 2em 0.2em var(--glow-color);
  transition: opacity 100ms linear;
}

.glowing-btn:hover {
  color: #bcbfbc;
  text-shadow: none;
  animation: none;
}

.glowing-btn:hover .glowing-txt {
  animation: none;
}

.glowing-btn:hover .faulty-letter {
  animation: none;
  text-shadow: none;
  opacity: 1;
}

.glowing-btn:hover:before {
  filter: blur(1.5em);
  opacity: 1;
}

.glowing-btn:hover:after {
  opacity: 1;
}

@keyframes faulty-flicker {
  0% {
    opacity: 0.1;
  }
  2% {
    opacity: 0.1;
  }
  4% {
    opacity: 0.5;
  }
  19% {
    opacity: 0.5;
  }
  21% {
    opacity: 0.1;
  }
  23% {
    opacity: 1;
  }
  80% {
    opacity: 0.5;
  }
  83% {
    opacity: 0.4;
  }

  87% {
    opacity: 1;
  }
}

@keyframes text-flicker {
  0% {
    opacity: 0.1;
  }

  2% {
    opacity: 1;
  }

  8% {
    opacity: 0.1;
  }

  9% {
    opacity: 1;
  }

  12% {
    opacity: 0.1;
  }
  20% {
    opacity: 1;
  }
  25% {
    opacity: 0.3;
  }
  30% {
    opacity: 1;
  }

  70% {
    opacity: 0.7;
  }
  72% {
    opacity: 0.2;
  }

  77% {
    opacity: 0.9;
  }
  100% {
    opacity: 0.9;
  }
}

@keyframes border-flicker {
  0% {
    opacity: 0.1;
  }
  2% {
    opacity: 1;
  }
  4% {
    opacity: 0.1;
  }

  8% {
    opacity: 1;
  }
  70% {
    opacity: 0.7;
  }
  100% {
    opacity: 1;
  }
}

@media only screen and (max-width: 600px) {
  .glowing-btn{
    font-size: 1em;
  }
}
        
        </style>




        <!-- content-wrapper ends -->


        <!--          
          <div id="id07" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-purple"> 
        <span onclick="document.getElementById('id07').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Modal Header</h2>
      </header>
      <div class="w3-container">
        <p>Some text..</p>
        <p>Some text..</p>
      </div>
      <footer class="w3-container w3-purple">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>-->