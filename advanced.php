<?php include 'header.php' ?>
<section class="section-practice">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php 
                
                    // $myFile = fopen("readfile.txt", "r") or die("Unable to open File!");
                    
                    //     while(!feof($myFile)){
                    //         echo "<em>". fgets($myFile). "</em><br>";
                    //     }

                    // fclose($myFile);

                    $newFile = fopen("newFile.txt","w") or die("Unable to open file");
                    $txt = "Hello,\n";
                    fwrite($newFile, $txt);
                    $txt = "Kazi Sahabuddin\n";
                    fwrite($newFile, $txt);
                    echo fread($newFile, filesize("newFile.txt"));
                    fclose($newFile);

                    
                    //$ne = fopen("newFile.txt","r") or die("Unable to open file");
                    

                
                ?>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>

    