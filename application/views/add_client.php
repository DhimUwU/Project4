
      <!-- partial -->
      <div class="main-panel bol">
        <div class="content-wrapper ji" style="background: #141D26; transform: translateX(24%); overflow: hidden; ">
            
            
           <div class="col-12 grid-margin stretch-card">
              <div class="card rounded-2" style="background: #141A31; border-radius: 20px; border: 2px solid white">
                <div class="card-header  text-white " style="background: black; border-radius: 20px;">
                  <h4 class="card-title mb-0 " style="color:  #45CFF1;">Pengisian Data</h4>
                </div>
                <div class="card-body">
                    <?php if($this->session->has_userdata('msg'))
        {?>
                    <script>
                        toast();
                        </script>
    <?php //echo $this->session->userdata('msg'); ?>
 <?php
  
        }
 $this->session->unset_userdata('msg');
?>   
                  <p class="card-description font-style-italic " style="color: #4bf145; font-weight: 600px;">
                    Silahkan diisi anggota kelas penyetor kas:)
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo base_url() ?>/Home/add_client">
                    <div class="form-group" >
                      <label for="exampleInputName1" style="color: #45CFF1;">Nama</label>
                      <input type="text" required="" style="color: white; background: none; width: 100%; padding:15px;border-radius: 10px; border: 1px solid gray;" class="formm" name="name" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" style="color: #45CFF1;">Nomor Kontak</label>
                      <input type="text" required="" maxlength="10"  onkeypress="return isNumber(event)" onchange="check_mobnumber()" name="mobile" style="color: white; background: none; width: 100%; padding:15px;border-radius: 10px; border: 1px solid gray;" id="exampleInputEmail3" placeholder="Mobile">
                    </div>
                    
                    <div class="form-group vb">
                      <label for="exampleSelectGender" style="color: #45CFF1;">Gender</label>
                      <select style="color: white; background: none; width: 100%; padding:15px;border-radius: 10px; border: 1px solid gray;" name="gender" id="exampleSelectGender">
                          <option value="Male">Laki-Laki</option>
                          <option value="Female">Perempuan</option>
                          
                        </select>
                      </div>
                    
                    <div class="form-group">
                      <label for="exampleInputCity1" style="color: #45CFF1;">Kota</label>
                      <input type="text" name="city"style="color: white; background: none; width: 100%; padding:15px;border-radius: 10px; border: 1px solid gray;" id="exampleInputCity1" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1" style="color: #45CFF1;">Alamat</label>
                      <textarea name="address" style="color: white; background: none; width: 100%; padding:15px;border-radius: 10px; border: 1px solid gray;" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <div class="form-group text-center">
                          <button type="submit" name="add" class="btu rounded-2 mr-2">Tambah anggota</button>
                          <a class="btu rounded-2"  href="<?= base_url('Home/view_client') ?> a">Batal</a>
                    </div>
                  </form>
                </div>
              </div>
            </div> 
            <style>
              .btu{
                text-decoration: none;
                list-style: none;
                padding: 12px;
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
                transition: ease-in all 0.50s;
              }
             
            </style>
            
            
        </div>
        <!-- content-wrapper ends -->
        <script>
      
       function check_mobnumber()
{
    a=document.getElementById("mobile").value;
    if(a.length<14)
    {
       document.getElementById("mobile").style.borderColor="red"; 
       number.focus();
       alert("must Have 10 numbers");
    }
    else
    {
        document.getElementById("mobile").style.borderColor="";
    }
    
}
</script>
<script>
    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
    </script>
    <style>
      .vb select{

        background: none;
      }
    </style>
   