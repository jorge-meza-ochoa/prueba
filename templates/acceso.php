<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo URL ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo URL ?>public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo URL ?>public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo URL ?>public/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo URL ?>public/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- Sweet Alert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">



 <!-- MD5 JS -->
  <script src="https://blueimp.github.io/JavaScript-MD5/js/md5.js"></script>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>CONTROL DE STOCK</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingrese sus Datos</p>

    <form id="login" autocomplete="off" >
      <div class="form-group has-feedback">
        <input type="text" id="user" name="user" class="form-control" placeholder="Usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
       <button class="btn btn-primary btn-block">Enviar</button>
      </div>
      
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo URL ?>public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo URL ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->

</body>
</html>
<script>
  $(document).on('submit','#login',function(e){
    user = $("#user").val();
    pass = $("#pass").val();

    if(user.length==''){
  swal({
    title : "Ingrese Usuario",
    text  :  "...",
    type  :  "warning",
    timer :3000,
    showConfirmButton : false
  });
    }else if(pass.length==''){
    swal({
    title : "Ingrese Contraseña",
    text  :  "...",
    type  :  "warning",
    timer :3000,
    showConfirmButton : false
  });
    }else{

 $.ajax({
  url : "source/login.php",
  type : "POST",
  data : {"user":user,"pass":pass},
  dataType : "JSON",
  beforeSend : function(){
    swal({
      title : "Cargando...",
      text  : "espere un momento, no cierre la ventana",
      imageUrl : "public/img/ajax-loader.gif",
      timer : 3000,
      showConfirmButton : false
    });
  },
  success : function(data){
    swal({
      title : data.title,
      text  : data.text,
      type  : data.type,
      timer : 3000,
      showConfirmButton : false
    });

if(data.type=='success'){
  
  setTimeout(function(){
  window.location.href='./';
  },3000);
}

  }
 });


    }



    e.preventDefault();
  });
</script>