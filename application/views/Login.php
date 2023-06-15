<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>E-Kas</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/css.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="" />
</head>

<body>

  <div class="container-scroller ha">
    <div class="container-fluid page-body-wrapper full-page-wrapper b">
      <div class="content-wrapper d-flex align-items-center haji hj">
        <div class="row w-100 kiw" style=" transform: translateX(0%); ">
          <div class="col-lg-4 mx-auto o">
            <div class="kotak text-left p-5" >
              <div class="brand-logo">
                  <h3 class="text-center mb-1 jdl" style="color: #e9ecee;">Pendataan kas online</h3>
                  <div class="text-center"><small class="text-muted font-weight-bold">Silahkan masukkan akun mu</small></div>
              </div>
             
              
               <?php 
                                if(!empty($success_msg)){
                                    echo '<p class="statusMsg text-success" >'.$success_msg.'</p>';
                                }elseif(!empty($error_msg)){
                                    echo '<p class="statusMsg text-danger" >'.$error_msg.'</p>';
                                }
                            ?>
            
             <?php echo form_error('password','<span class="help-block text-warning" >','</span>'); ?>
             <?php echo form_error('email','<span class="help-block text-warning" >','</span>'); ?>
              <form class="pt-3" action="<?php echo base_url() ?>Users/login" method="post">
                <div class="form-group">
                    <input type="email" autocomplete="off" name="email" style="color: #45CFF1; background: none; width: 100%; padding:15px;border-radius: 10px; border: 1px solid gray;" id="exampleInputEmail1" placeholder="Email">
                </div>
                  <?php echo form_error('email','<span class="help-block">','</span>'); ?>
                <div class="form-group">
                    <input type="password" autocomplete="off" name="password" style="color: #45CFF1; background: none; width: 100%; padding:15px;border-radius: 10px; border: 1px solid gray;" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                    <button type="submit" name="loginSubmit" value="Login" class="glowing-btn  rounded-2"><span class="glowing-txt">Log <span class="faulty-letter"></span> in</span></button>
                </div>

<!--                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>-->
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
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
  width: 100%;
  position: relative;
  color: var(--glow-color);
  cursor: pointer;
  padding: 0.35em 1em;
  border: 0.15em solid var(--glow-color);
  border-radius: 0.45em;
  background: none;
  perspective: 2em;
  font-family: "Raleway", sans-serif;
  font-size: 2em;
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

.glowing-btn::before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0.7;
  filter: blur(1em);
  transform: translateY(120%) rotateX(95deg) scale(1, 0.35);
  background: var(--glow-color);
  pointer-events: none;
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
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url() ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url() ?>assets/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
