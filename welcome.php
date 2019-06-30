<?php include 'header.php' ?>
<section class="section-practice">
    <div class="container">
        <div class="content">

        <?php
            function filer_input($data){
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            $name = $email = $website = $comment = $gender="";
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $name = filer_input($_POST["name"]);
                $email = filer_input($_POST["email"]);
                $website = filer_input($_POST["website"]);
                $comment = filer_input($_POST["message"]);
                $gender = filer_input($_POST["gender"]);
            }
        ?>

        <h3>Welcome <strong><?php echo $name?></strong></h3>
        <h4>Your email is <em><?php echo $email?></em></h4>  
        <h4>Your gender is <em><?php echo $gender?></em></h4> 
        <h4>Your comment is <em><?php echo $comment?></em></h4>
        <h4>Your website is <em><a href="<?php echo $website?>"><?php echo $website?></a></em></h4>           


        </div>
    </div>
</section>
<?php include 'footer.php' ?>

    