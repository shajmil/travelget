<?php
session_start();
$username=$_SESSION['logged'];
?>

<?php
include 'connect.php';

$query="select * from packages ";
$res=mysqli_query($link,$query)

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Packages</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet" href = "font/fonts.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "css/pph.utility.css">
        <link rel = "stylesheet" href = "css/pph.style.css">
        <link rel = "stylesheet" href = "css/pph.responsive.css">
    </head>
    <body>

   

        <!-- header -->
        <header class = "flex">
            <div class = "container">
                <div class = "header-title">
                    <h1>Explore Unique Packages in Kerala</h1>
                    <p>If you love to learn about culture, heritage, and hundreds of years of history then, God’s Own Country has them all</p>
                </div>
               
            </div>
        </header>
        <!-- header -->
        
        

        <!-- featured section -->
        <section id = "featured" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about some places before your travel</span>
                    <h2 class = "lg-title">featured places</h2>
                </div>
                <?php
while($row=mysqli_fetch_assoc($res))
{
    $a=$row['pid'];
    $b=$row['pname'];
    $c=$row['pdes'];
    $d=$row['prate'];
    $e=$row['pseat'];
    $f=$row['image'];
    
    $path="uploads/".$f;

?>
                <div class = "featured-row">
                    <div class = "col-sm-6">
                        <a href='bookprocess.php?username=<?php echo $username;?>&&place=<?php echo $b;?>&&rate=<?php echo $d;?>'><img src='<?php echo $path;?>'></a>
                        <div class = "featured-item-content">
                        <a href='bookprocess.php?username=<?php echo $username;?>&&place=<?php echo $b;?>&&rate=<?php echo $d;?>'>Book</a>
                       
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                          <?php echo $b;?>
                            </span>
                            <div>
<?php echo $c ;?> 
                            </div>
                        </div>
                    </div>

                    <?php
}
?>

                   
                 

                 

                  
                </div>
            </div>
        </section>
        <!-- end of featured section -->

        <!-- services section -->
        <section id = "services" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about services that we offer</span>
                    <h2 class = "lg-title">Our services</h2>
                </div>

                <div class = "services-row">
                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-hotel"></i>
                        </span>
                        <h3>Luxurious Hotel</h3>
                        <p class = "text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quo, totam repellat velit, dignissimos sequi error a minima architecto fugit nisi dolorum repellendus?</p>
                        <a href = "#" class = "btn">Read more</a>
                    </div>

                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <h3>Trave Guide</h3>
                        <p class = "text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quo, totam repellat velit, dignissimos sequi error a minima architecto fugit nisi dolorum repellendus?</p>
                        <a href = "#" class = "btn">Read more</a>
                    </div>

                   
                </div>
            </div>
        </section>
        <!-- end of services section -->
        
       