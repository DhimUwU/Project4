
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper" style="background: #141D26; transform: translateX(24%); overflow: hidden;">
            
            
            
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
        <!-- content-wrapper ends -->
  <style>
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
