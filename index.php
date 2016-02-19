<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>rizqipermana</title>
    <!-- Bootstrap -->
    <script src="http://localhost/latihan/01.validasi/01.validasijquery/js/jquery-1.11.1.min.js"></script>
    <link href="http://localhost/latihan/01.validasi/01.validasijquery/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://localhost/latihan/01.validasi/01.validasijquery/js/bootstrap.min.js"></script>
     <script src="http://localhost/latihan/01.validasi/01.validasijquery/js/jquery.validate.min.js"></script>
  </head>
<body>
<div class="container-fluid">
 <div class="row">
  <div class="col-md-6 col-md-offset-3">
              <h1>Bootstrap Validasi</h1>
               <form method="post" action="#" id='form'>
               <div class="form-group has-feedback">
               <i class="glyphicon glyphicon-user form-control-feedback"></i>
               <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" class="form-control" >
               </div>
               <div class="form-group has-feedback">
               <input type="email" name="email" placeholder="Email" class="form-control">
               <i class="glyphicon glyphicon-envelope form-control-feedback"></i>

               </div>
               <div class="form-group has-feedback">
               <input type="password" name="password" id="password" placeholder="Password" class="form-control" vk_101e6="subscribed">
               <span class="glyphicon glyphicon-lock form-control-feedback"></span>
               </div>
               <div class="form-group has-feedback">
               <input type="password" name="repassword" id="repassword" placeholder="Retype password" class="form-control" vk_101e6="subscribed">
               <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
               </div>
               <div class="form-group has-feedback">               
               <div class="input-group">
               <label class="control-label">
               <input type  ="radio" name="kelamin" id="inlineRadio1" value="option1"/> Laki-laki
               </label>
               <label class="control-label">
               <input type  ="radio" name="kelamin" id="inlineRadio2" value="option2"/> Perempuan
               </label>
               </div>
               </div>
              
               <div class="row ">
               <div class="col-xs-8 col-xs-offset-0">
               <div class="checkbox_a icheck_a">
               <div class="form-group input-group">
               <label class="control-label">
               <input type="checkbox" name="agree"> I agree to the 
               </label>
               </div>
               </div>
               </div>
               
               <div class="col-xs-4">
               <button class="btn btn-primary btn-block btn-flat" type="submit">Register</button>
               </div>
               
               </div>
               </form>
  </div>
</div>
</div> 
</body>
</html>

<script type="text/javascript">  
  $('form').validate({
        rules: {

            nama:{
              minlength:3,
              required:true
            },
            kelamin:{
        
              required:true
            },
            email:{
              email:true,
              required:true
            },
            password: {
                minlength: 6,
                maxlength: 15,
                required: true
            },
            repassword: {
                minlength: 6,
                maxlength: 15,
                required: true,
                equalTo: "#password"
            },
            agree:{
                required:true
            },

        },
         messages: {
         password: {
         required: "Password tidak boleh kosong",
         maxlength: jQuery.validator.format("Karakter tidak boleh lebih {0} "),
         minlength: jQuery.validator.format("Karakter kurang dar {0}"),
         },
         repassword: {
          maxlength: jQuery.validator.format("Karakter tidak boleh lebih {0} "),
          minlength: jQuery.validator.format("Karakter kurang dar {0}"),
          equalTo: "Password tidak sama",

       }
         }
    });
</script>