<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ddd</title>
  <!-- plugins:css -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.material.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/css/vendor.bundle.base.css">
<!------bootstrap3:--->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!-- endinject -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/css.css">
  <style>
    .naga{
      background:red;
    }
  </style>
  <!-- endinject -->
  <link rel="shortcut icon" href="" />
        <!---Pagination-->
<?php date_default_timezone_set('Asia/Manila'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.material.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

//Toast

<link rel="stylesheet" href="<?php echo base_url() ?>toast/dist/css/iziToast.css">
<script src="<?php echo base_url() ?>toast/dist/js/iziToast.min.js" type="text/javascript"></script>

</head>
<body  style="background: #141D26;">
    

    
  <div class="container-scroller ba">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row mo" style="background: #141A31; border-bottom: 2px solid #45CFF1; box-shadow: 0px 2px 10px #45CFF1;" >
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center " style="background: none;">
          <a class="navbar-brand brand-logo text-white font-bold" href="<?php echo base_url() ?>"><b>APLIKASI</b> 19.3A.25</a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/images/logo-mini.svg" alt="logo"/></a>
      </div>
<!--        <button type="button" onclick="toast()">Click</button>-->
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        
          
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="<?php echo base_url() ?>assets/images/faces/bochi.jpg" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
             <?php  $data = array();
                if ($this->session->userdata('isUserLoggedIn')) {
                    $data['user'] = $this->user->getRows(array('id' => $this->session->userdata('userId')));
                $user=$data['user'];}
            ?>
                <p class="mb-1 text-white"><?php echo $user['name']; ?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
<!--
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-cached mr-2 text-success"></i>
                Activity Log
              </a>
-->
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" onclick="return logout()">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Keluar
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
              
        
        
        <!-------------------------------------Area for Modals------------------------------------>
        <div class="w3-container">
<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom" style=" background: linear-gradient(-100deg,#3d8fa82c,#bcc0c22c);backdrop-filter: blur(20px); border-radius: 20px; border: 2px solid white ">
  <header class="w3-container position-relative"> 
   <a href="javascript:void(0)"onclick="document.getElementById('id01').style.display='none'" 
   class="text-muted close btn-close position-absolute top-2" style="right:.5em; top:.5em">&times;</a>
   <h2></h2>
  </header>

  <div class="w3-bar w3-border-bottom">
   <button class="tablink  bty" onclick="openCity(event, 'London')"><b>Manajemen pengeluaran</b></button>
   <button class="tablink  bty" onclick="openCity(event, 'Paris')"><b>Manajemen Pemasukan</b></button>
<!--   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Tokyo')">QuicK Report</button>-->
  </div>

  <div id="London" class="w3-container city">
<br>
   
            <div class="col-md-12 grid-margin">
              
                <form class="forms-sample" method="post" action="<?php echo base_url() ?>/Home/add_debit">
                    <div class="form-group">
                    <label for="exampleFormControlSelect3 " class="text-white">Nama</label>
                    <select required="" class=" yui" style="color: #45CFF1; background: none; width: 100%; padding:15px;border-radius: 10px; border-bottom: 1px solid gray;" name="name" id="exampleFormControlSelect3">
                        <option  readonly  value="">Select...</option>
                       <?php              
                  if($fetch_cus->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_cus->result() as $row)  
                {  
           ?> 
                      <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                     
                       <?php       
             }  
          }  
          else  
           {  
           ?>  
               
                      <option disabled="">No Recipient Found</option> 
              
           <?php  
          }  
           ?> 
                    </select>
                  </div>
                  <div class="form-group text-white">
                    <label>Tanggal pembayaran</label>
                    <input required="" name="date" id="theDate" type="date" class=" yui"style="color: #45CFF1; background: none; width: 100%; padding:15px;border-radius: 10px; border-bottom: 1px solid gray;" placeholder="Username" aria-label="Date">
                  </div>
                    <div class="form-group text-white">
                      <label for="exampleInputPassword1">Deskripsi</label>
                      <input name="discription" autocomplete="off" type="text" class="yui " style="color: #45CFF1; background: none; width: 100%; padding:15px;border-radius: 10px; border-bottom: 1px solid gray;" id="exampleInputPassword1" placeholder="Description">
                    </div>
                    <div class="form-group text-white">
                    <label>Jumlah yang disetor</label>
                    <input required="" autocomplete="off" name="amount" onkeypress="return isNumber(event)" type="text" style="color: #45CFF1; background: none; width: 100%; padding:15px; border-radius: 10px; border-bottom: 1px solid gray;  outline: none;" class=" yui " placeholder="Debit Amount" aria-label="Debit Amount">
                  </div>
                    
                      <button type="submit" name="debit" class="btu rounded-2 mr-2 btn-sm ">Add</button>
                    <button type="reset" class=" hui rounded-2 btn-sm">Clear</button>
                  </form>
               
            </div>
              
            
  </div>

  <div id="Paris" class="w3-container city">
  <br>
      <div class="col-md-12 grid-margin">
   <form class="forms-sample" method="post" action="<?php echo base_url() ?>/Home/add_credit">
                    <div class="form-group">
                    <label for="exampleFormControlSelect3">Name</label>
                    <select required="" name="name" class="yui"  style="color: #45CFF1; background: none; width: 100%; padding:15px;border-radius: 10px; border-bottom: 1px solid gray;" id="exampleFormControlSelect3">
                          <option  readonly  value="">Select...</option>
                      <?php              
                  if($fetch_cus->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_cus->result() as $row)  
                {  
           ?> 
                      <option value="<?php echo $row->id?>"><?php echo $row->name ?></option>
                     
                       <?php       
             }  
          }  
          else  
           {  
           ?>  
                      <option disabled="">No Recipient Found</option> 
              
           <?php  
          }  
           ?> 
                    
                    </select>
                  </div>
                    <div class="form-group">
                    <label>Date</label>
                    <input required="" name="date" id="theDate2" type="date" class="yui form-control-sm"  style="color: #45CFF1; background: none; width: 100%; padding:15px;border-radius: 10px; border-bottom: 1px solid gray;" placeholder="Date" aria-label="Date">
                  </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <input name="discription" type="text" class="yui form-control-sm"  style="color: #45CFF1; background: none; width: 100%; padding:15px;border-radius: 10px; border-bottom: 1px solid gray;" id="exampleInputPassword1" placeholder="Description">
                    </div>
                    <div class="form-group">
                    <label>Amount</label>
                    <input required="" onkeypress="return isNumber(event)" name="amount" type="text" class="yui form-control-sm"  style="color: #45CFF1; background: none; width: 100%; padding:15px;border-radius: 10px; border-bottom: 1px solid gray;" placeholder="Amount" aria-label="Amount">
                  </div>
                    
       <button type="submit" name="credit" class="btu rounded-2  btn-sm">Add</button>
                     <button type="reset" class="hui rounded-2 btn-sm">Clear</button>
                  </form>
  </div>
     </div>

<!--
  <div id="Tokyo" class="w3-container city">
   <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Tickets</h4>
                  <div class="table-responsive">
                    <table id="example" class="table">
                      <thead>
                        <tr>
                          <th>
                            Assignee
                          </th>
                          <th>
                            Subject
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Last Update
                          </th>
                          <th>
                            Tracking ID
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img src="images/faces/male_avatar.png" class="mr-2" alt="image">
                            David Grey
                          </td>
                          <td>
                            Fund is not recieved
                          </td>
                          <td>
                            <label class="badge badge-gradient-success">DONE</label>
                          </td>
                          <td>
                            Dec 5, 2017
                          </td>
                          <td>
                            WD-12345
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="images/faces/face2.jpg" class="mr-2" alt="image">
                            Stella Johnson
                          </td>
                          <td>
                            High loading time
                          </td>
                          <td>
                            <label class="badge badge-gradient-warning">PROGRESS</label>
                          </td>
                          <td>
                            Dec 12, 2017
                          </td>
                          <td>
                            WD-12346
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="images/faces/face3.jpg" class="mr-2" alt="image">
                            Marina Michel
                          </td>
                          <td>
                            Website down for one week
                          </td>
                          <td>
                            <label class="badge badge-gradient-info">ON HOLD</label>
                          </td>
                          <td>
                            Dec 16, 2017
                          </td>
                          <td>
                            WD-12347
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="images/faces/face4.jpg" class="mr-2" alt="image">
                            John Doe
                          </td>
                          <td>
                            Loosing control on server
                          </td>
                          <td>
                            <label class="badge badge-gradient-danger">REJECTED</label>
                          </td>
                          <td>
                            Dec 3, 2017
                          </td>
                          <td>
                            WD-12348
                          </td>
                        </tr>
                      </tbody>
                    </table>
                      
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
              </div>
            </div>
          </div>
  </div>
-->

  
 </div>
</div>

</div>
        <!-------------------------------Modal Closing-----------------Navidgation Closing--------------------------------------->
        
    </nav>
       <!-- partial -->
    <div class="container-fluid page-body-wrapper ">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas " id="sidebar" style=" border-right: 2px solid #45CFF1; position: fixed; background: #141A31;  box-shadow: 2px 2px 10px #45CFF1;">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="<?php echo base_url() ?>" class="nav-link">
              <div class="nav-profile-image">
                <img src="<?php echo base_url() ?>assets/images/faces/bochi.jpg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?php echo $user['name']; ?></span>
                <span class="text-secondary text-small"><?php echo $user['account_status']; ?></span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>Home">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-view-dashboard menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Lebih banyak:)</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi mdi-view-grid menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>Home/add_client">Tambah pemberi kas</a></li>
                       <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>Home/view_clients">Manajemen pemberi kas</a></li>
                  
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>Home/galeri">Pengeluaran</a></li>
             
              </ul>
            </div>
          </li>
            



          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
              <span class="menu-title">Icons</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-title">Forms</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-title">Charts</span>
              <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <span class="menu-title">Tables</span>
              <i class="mdi mdi-table-large menu-icon"></i>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <span class="menu-title">Sample Pages</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
              </div>
          </li> -->
          <li class="nav-item sidebar-actions">
            <span class="nav-link">
              <div class="border-bottom">
                <div class="font-weight-bold mb-0 text-muted mx-2">Akses cepat</div>
              </div>
              <div class="py-2 px-5 text-center">
                <button onclick="document.getElementById('id01').style.display='block'" class="glow-btn  rounded-2 h3"><span class="glow-txt">Data<span class="faulty-letter"></span> baru <i class="far fa fa-plus"></i></span></button>
              </div>
            </span>
          </li>
        </ul>
      </nav>
      <script>
          var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;


document.getElementById('theDate').value = today;
document.getElementById('theDate2').value = today;
          </script>
          <style>
            .bo{
              outline: none;
              border-bottom: 1px solid gray;
            }
            .yui{
              border-top: none;
              border-right: none;
              border-left: none;
            }
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
              
              .hui{
                text-decoration: none;
                list-style: none;
                padding: 8px;
                background: none;
                border-radius: 10px;
                border: 2px solid #f14545;
                text-transform: uppercase;
                color:#f14545;
              }
              .hui:hover{
                color:white;
                text-decoration: none;
                background: #f14545;
                transition: ease-in-out all 0.50s;
              }
              .bty{
                outline: none;
                border: none;
                background: none;
                padding: 5px;
                margin-left: 10px;
                text-transform: uppercase;
                color:#4bf145;
              }
              :root {
  --glow-color:#45CFF1;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

.glow-btn {
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
  top: 10px;
  left: -14px;

  -webkit-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  -moz-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  animation: border-flicker 2s linear infinite;
}

.glow-txt {
  
  
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



.glow-btn::after {
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

.glow-btn:hover {
  color: #bcbfbc;
  text-shadow: none;
  animation: none;
}

.glow-btn:hover .glowing-txt {
  animation: none;
}

.glow-btn:hover .faulty-letter {
  animation: none;
  text-shadow: none;
  opacity: 1;
}

.glow-btn:hover:before {
  filter: blur(1.5em);
  opacity: 1;
}

.glow-btn:hover:after {
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
          
          
     
 
