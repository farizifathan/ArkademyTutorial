<!DOCTYPE html>
<?php
    include "show-data.php";
    include "update-data.php";

?>
<html lang="en">
    <title>Profil Page</title>
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> 
    <link rel="stylesheet" href="assets/css/style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <nav>
         <div class="menu-mobile">
            <a href="#" onclick="showMenu()">Menu</a>
         </div>
         <ul id="menu">
            <li><a href="#">HOME</a></li>
            <li><a href="#">PRODUK</a></li>
            <li><a href="#">GALERY</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#">MY INVENTORY</a></li>
             
         </ul>
     </nav>
    

     <section id="box-profile">
         <div class="img-profile">
             <div class="photo" style="background-image: url(assets/image/img.jpg);"></div>
         </div>

         <div class="description">
             <h1 id="pName"><?php echo $nama; ?></h1>
             <p id="pRole"><?php echo $role; ?></p>
             <a href="#input-form" class="button bg-green" onclick="editForm()"> Edit</a>
            <a href="#" class="button border-blue"> Resume</a>
         </div>
         <div class="information">
             <div class="data">
                 <p class="field">Availability:</p>
                 <p id="pAvailable" class="text-gray"><?php echo $available; ?></p>
             </div>
             <div class="data">
                 <p class="field">Age:</p>
                 <p id="pAge" class="text-gray"><?php echo $age ?></p>
             </div> 
            <div class="data">
                <p class="field">Location:</p>
                <p id="pLocation" class="text-gray"><?php echo $lokasi ?></p>
            </div>
            <div class="data">
                <p class="field">Years Experience:</p>
                <p id="pYe" class="text-gray"><?php echo $ye ?></p>
            </div>
            <div class="data"> 
                <p class="field">Email:</p>
                <p id="pEmail" class="text-gray"><?php echo $email ?></p>
            </div>
         </div>
         
     </section>

     <section id="input-form">
         <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

         <div class="form">
                 <label>Id User</label>
                <input id="inpIdUser" type="text" name="id_user" value="<?php echo $id; ?>">
            </div>

            <div class="form">
                 <label>Nama</label>
                <input id="inpName" type="text" name="nama">
            </div>
            <div class="form">
                <label>Role</label>
                <input id="inpRole" type="text" name="role">
            </div>
            <div class="form">
                <label>Availability</label>
                <input id="inpAvailable" type="text" name="available">
            </div>

            <div class="form">
                <label>Age</label>
                <input id="inpAge" type="number" name="age">
            </div>

            <div class="form">
                <label>Location</label>
                <input id="inpLocation" type="text" name="lokasi">
            </div>
            <div class="form">
                <label>Years Experiences</label>
                <input id="inpYe" type="text" name="ye">
            </div>
            <div class="form">
                <label>E-mail</label>
                <input id="inpEmail" type="email" name="email">
            </div>

            <div class="form">
                <input onclick="" type="submit" name="submit" 
                value="SUBMIT" class="bg-blue">
            </div>

            

         </form>
     </section>

     <script>
         var formMenu = document.getElementById("input-form");
         formMenu.style.display = "none";
         
         function editForm(){
            if(formMenu.style.display ==="none"){
                formMenu.style.display = "block";
            }else{
                formMenu.style.display = "none";
            }
         }
         var name = document.getElementById("pName").innerHTML;
         var role = document.getElementById("pRole").innerHTML;
         var availability = document.getElementById("pAvailable").innerHTML;
         var age = document.getElementById("pAge").innerHTML;
         var lokasi = document.getElementById("pLocation").innerHTML;
         var ye = document.getElementById("pYe").innerHTML;
         var email = document.getElementById("pEmail").innerHTML;
         
         
         document.getElementById("inpName").value = name;
         document.getElementById("inpRole").value = role;
         document.getElementById("inpAvailable").value = availability;
         document.getElementById("inpAge").value = age;
        document.getElementById("inpLocation").value = lokasi;
         document.getElementById("inpYe").value = ye;
         document.getElementById("inpEmail").value = email;
         


        
         function showMenu(){
             var menu = document.getElementById('menu');
                var box = document.getElementById('box-profile');

                if(menu.style.display === "block"){
                    menu.style.display = "none";
                    box.style.paddingTop = "0px";
                }else{
                    menu.style.display = "block";
                    box.style.paddingTop = "125px";

                    
                }

         }
     </script>
</body>
</html>