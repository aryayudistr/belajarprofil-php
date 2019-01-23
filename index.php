<!DOCTYPE html>
<?php
    include "show-data.php";
    include "update-data.php";
?>
<html>
     <head>
         <title>Profile</title>
         <meta name="viewport" content="width-device-width, initial-scale=1.0">
         <link rel="stylesheet" href="assets/css/style.css">
         
     </head>
     <body>
      <nav>
             <div class="menu-mobile">
                 <a href="#" onclick="showMenu()">Menu</a>
                 
             </div>    
             <ul id="menu">
                 <li><a href="assets/img/foto.jpeg">ARYA YUDISTIRA</a></li>
                 <li><a href="file:///E:/Sekolah/Produktif%20RPL/HTML/Table%20Biodata/tabelbiodata.html">MY PROFILE</a></li>
                 <li><a href="assets/img/_DSC0490a.jpg">GALLERY</a></li> 
                 <li><a href="https://www.instagram.com/aryayudistr/?hl=id">SOCIAL MEDIA</a></li>
                 
             </ul>
         </nav>
         <section id="box-profile">
             <div class="img-profile">
                <div class="photo" style="background-image:
                url(assets/img/_DSC0490a.jpg);"></div>
             </div>    
             <div class="description">
                 <h1 id="pName"> <?php echo $nama; ?></h1>
                 <p id="pRole"><?php echo $role; ?></p>
                 <a href="#input-form" class="button bg-gray" onclick="editForm()">Edit</a>
                 <a href="#" class="button bg-green">Resume</a>
             </div>
             <div class="information">
                 <div class="data">
                     <p class="field">Availability</p>
                     <p  id="pAvailability" class="text-gray"><?php echo $availability; ?></p>
                 </div>
                 <div class="data">
                     <p class="field">Age</p>
                     <p id="pAge"class="text-gray"><?php echo $age; ?></p>
                 </div>
                 <div class="data">
                    <p class="field">Location</p>
                    <p id="pLocation" class="text-gray"><?php echo $location;?></p>
                 </div>
                 <div class="data">
                     <p class="field">Years Experience</p>
                     <p id="pExperience"class="text-gray"><?php echo $experience; ?></p>
                 </div>
                 <div class="data">
                    <p class="field">Email</p>
                    <p id="pEmail"class="text-gray"><?php echo $email; ?></p>
                 </div>
             </div>
         </section>

         <section id="input-form">
             <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
             <div class="form">
                    <label>Id User </label>
                    <input id="inpIdUser" type="text" name="id_user" value="<?php echo $id; ?>">
                 </div>
                 <div class="form">
                    <label>Nama</label>
                    <input id="inpName" type="text" name="name">
                 </div>
                 <div class="form">
                        <label>Role</label>
                        <input id="inpRole" type="text" name="role">
                 </div>
                 <div class="form">
                        <label>Availability</label>
                        <input id="inpAvailability" type="text"name="availability">
                 </div >
                 <div class="form">
                        <label>Age</label>
                        <input id="inpAge" type="number"name="age">
                 </div>
                 <div class="form">
                        <label>Location</label>
                        <input id="inpLocation" type="text" name="location">
                 </div>
                 <div class="form">
                        <label>Years Experience </label>
                        <input id="inpYears"type="number" name="years">
                 </div>
                 <div class="form">
                        <label>Email</label>
                        <input id="inpEmail"type="text" name="email">
                 </div>
                 <div class="form">
                        <input onclick="" type="submit"name="submit" value="SUBMIT"
                        value="SUBMIT" class="bg-gray">
                     </div>
            </form>
         </section>
         <script>
         
         var formMenu = document.getElementById("input-form");
         formMenu.style.display = "none";

         function editForm(){
             if(formMenu.style.display === "none"){
                 formMenu.style.display = "block";
            }else{
                 formMenu.style.display = "none";
            }    

             var name = document.getElementById("pName").innerHTML;
             var role = document.getElementById("pRole").innerHTML;
             var availability = document.getElementById("pAvailability").innerHTML;
             var age = document.getElementById("pAge").innerHTML;
             var locations = document.getElementById("pLocation").innerHTML;
             var experience = document.getElementById("pExperience").innerHTML;
             var email = document.getElementById("pEmail").innerHTML;

             document.getElementById("inpName").value = name;
             document.getElementById("inpRole").value = role;
             document.getElementById("inpAvailability").value = availability;
             document.getElementById("inpAge").value = age;
             document.getElementById("inpLocation").value = locations;
             document.getElementById("inpYears").value = experience;
             document.getElementById("inpEmail").value = email;
            }

        
        function showMenu(){
            var menu = document.getElementById("menu");
            var box = document.getElementById("box-profile");
            
            if(menu.style.display === "block"){
                menu.style.display = "none";
                box.style.paddingTop = "0px";}
            else{
                menu.style.display = "block";
                box.style.paddingTop = "120px";
            }
            }
        
         </script>
     </body>
 </html>