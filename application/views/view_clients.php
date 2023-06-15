
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper" style="background: #141D26; transform: translateX(24%); overflow: hidden;">
            
        <div class="row">
            <div class="col-12 grid-margin">
              <div class="card rounded-2" style="background: #141A31; border-radius: 20px; border: 2px solid white">
                <div class="card-header rounded-2" style="background: black; border-radius: 20px;">
                  <h2 class="card-title  mb-0" style="color:  #45CFF1;">Manajemen anggota</h2>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example"  class="table table-bordered border-striped mb-4">
                      <thead class=" text-white" style="background: linear-gradient(-100deg,#46aece,#142c43 110%);">
                        <tr>
                          <th class="p-2 text-center">#</th>
                          <th class="p-2 text-center">Nama</th>
                          <th class="p-2 text-center">No HP</th>
                          <th class="p-2 text-center">Gender</th>
                          <th class="p-2 text-center">Alamat</th>
                          <th class="p-2 text-center">Tindakan</th>
                        </tr>
                    </thead>
 
        
 
        <tbody>
               <?php              
                  if($fetch_cus->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_cus->result() as $row)  
                {  
           ?> 
            <tr>
                <td class="px-3 py-2 align-middle text-center text-white"><?php echo $i++ ?></td>
                <td class="px-3 py-2 align-middle text-white">
                  <img src="<?php echo base_url() ?>assets/images/faces/806962_user_512x512.png" class="mr-2" alt="image">
                  <?php echo $row->name ?>
                </td>
                <td class="px-3 py-2 align-middle text-white">
                <?php echo $row->mobile ?>
                </td>
                <td class="px-3 py-2 align-middle text-center">
                  <label class="badge badge-gradient-success"> <?php echo $row->gender ?></label>
                </td>
                
                <td class="px-3 py-2 align-middle text-white">
                <?php echo $row->address ?>
                </td>
                
                <td class="px-3 py-2 align-middle text-center">
                
                    <a class="btn btn-gradient-info rounded-0 btn-sm" href="<?php echo  base_url() ?>Home/debit_credit_p?id=<?php echo $row->id ?>" aria-label="Skip to main navigation">
                      <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-gradient-danger rounded-0 btn-sm" href="<?php echo  base_url() ?>Home/view_clients?del=<?php echo $row->id ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus anggota ini?');" aria-label="Delete">
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>


                </td>
                
              </tr>
                         <?php       
             }  
          }  
          else  
           {  
           ?>  
               
                   <tr><td>Tidak ada penyetor kas</td></tr> 
              
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
            
        </div>
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
        </style>
        <!-- content-wrapper ends -->
      