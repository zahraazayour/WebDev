<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("location:index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="GalleryStyle.css" />
  
</head>

<div class="navbar">
        <a class="navbar-logo" href="#">Your Pages</a>
        <ul>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="cv.php">CV</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="ContactInfo.php">Contact-Information</a></li>
        </ul>
    </div>
    <div class="header">
            <div class="welcome-msg">
            <p>Welcome  <?php echo $_SESSION["email"]; ?></p>
            </div>
            
        
    </div>
    <div class="gallery">
        <?php
            $jsonContent = file_get_contents('gallery.json');
            $imageUrls = json_decode($jsonContent);

            if ($imageUrls !== null) {
                foreach ($imageUrls as $imageUrl) {
                    echo '<div class="picture">';
                    echo "<img src=\"$imageUrl\">";
                    echo '</div>';
                }
            } else {
                echo 'Error decoding JSON file.';
            }
        ?>
    </div>
    <script>
    function openImage(imageUrl) {
    console.log('Opening image:', imageUrl);

    var modal = document.createElement('div');
    modal.className = 'lightbox';

    var img = document.createElement('img');
    img.src = imageUrl;

    var closeBtn = document.createElement('span');
    closeBtn.className = 'close-btn';
    closeBtn.innerHTML = '&times;';
    closeBtn.onclick = function () {
        document.body.removeChild(modal);
    };

    modal.appendChild(img);
    modal.appendChild(closeBtn);

    document.body.appendChild(modal);
}


    // Assuming that imageUrls is an array of image URLs from your JSON file
    var imageUrls = [
        "https://i0.wp.com/thetechhacker.com/wp-content/uploads/2018/04/Best-Websites-to-Learn-C-Plus-Plus.jpg?fit=1000%2C640&ssl=1",
        "https://digital-history-berlin.github.io/Python-fuer-Historiker-innen/_images/python-logo.png",
        "https://cdn.vox-cdn.com/thumbor/ada2gg-FudvYRX-s_WuP8QXXjRg=/0x33:640x393/1600x900/cdn.vox-cdn.com/assets/1087137/java_logo_640.jpg"
    ];

    // Use imageUrls to create image elements
    imageUrls.forEach(function (url) {
        var picture = document.createElement('div');
        picture.className = 'picture';
        picture.onclick = function () {
            openImage(url);
        };

        var image = document.createElement('img');
        image.src = url;

        picture.appendChild(image);
        document.getElementById('yourGalleryContainer').appendChild(picture);
    });
</script>


        
   
</body>

</html>
