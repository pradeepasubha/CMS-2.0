<html>
<head>

<title>Well Come to Online page</title>

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">



</head>

<body>


<div class="col-lg-5 col-lg-offset-2">

<h1>Well Come To UOC Canteen<br>Online Page:</h1>

    
    <?php if (isset($_SESSION['success'])){ ?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
    <?php    
    } ?>
    <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
    <form action="" method="POST">
    <div class="form-group">
        <label for="username" >Name:</label>
        <input class="form-control" name="username" id="username" type="text" >
    </div>

    <div class="form-group">
        <label for="address" >Address:</label>
        <input class="form-control" name="address" id="address" type="text" >
    </div>

    <div class="form-group">
        <label for="order" >Your Order:</label>
        <input class="form-control" name="order" id="order" type="text" >
    </div>
    
     <div class="form-group">
        <label for="email" >email:</label>
        <input class="form-control" name="email" id="email" type="text"/>
    </div>
    
    <!-- <div class="form-group">
        <label for="password" >Password:</label>
        <input class="form-control" name="password" id="password" type="password"/>
    </div>
    
     <div class="form-group">
        <label for="password" >Comfirm Password:</label>
        <input class="form-control" name="password" id="password" type="password"/>
    </div>-->
    
     <div class="form-group">
        <label for="gender" >Gender:</label>
        <select class="form-contact" id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
             <option value="other">Other</option>
        
        </select>
    </div>
    
     <div class="form-group">
        <label for="phone" >Phone:</label>
        <input class="form-control" name="phone" id="phone" type="text"/>
    </div>
    
    <div>
        <button class="btn btn-primary" name="register">Register</button>
    </div>
    
    </form>

</div>



</body>




<script src="<?php echo base_url(); ?>assests/js/bootstrap.min.js"></script>
</html>