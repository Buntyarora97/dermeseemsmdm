<?php require_once __DIR__ . '/config.php'; ?>
<?php require_once "dermessence_optimizer.php"; ?>

<?php
// Default SEO values (agar page me define na ho)
$default_title = "Dermessence | Dermatologist in Chandigarh";
$default_description = "Dermessence is a trusted dermatology clinic in Chandigarh offering advanced skin, hair and laser treatments.";
$default_keywords = "dermatologist in chandigarh, skin specialist chandigarh, dermessence clinic, acne treatment chandigarh, hair treatment chandigarh";

// Define base URL
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];
$pathPrefix = '';
$rootUrl = $baseUrl . $pathPrefix;

$pageUrl = "https://thedermessence.com" . $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<base href="https://thedermessence.com/">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

<meta name="google-site-verification" content="adj6LTXnJBzT3ci5iPTRTc53MvuuHjKJgtyp4xcSKnQ" />
<meta name="google-site-verification" content="rSFOczIvBYOyBMVfx4V00YKjvuiDpH5oCKjzBfYKFOc" />

<title><?php echo isset($page_title) ? $page_title : $default_title; ?></title>

<meta name="description" content="<?php echo isset($page_description) ? $page_description : $default_description; ?>">

<meta name="keywords" content="<?php echo isset($page_keywords) ? $page_keywords : $default_keywords; ?>">

<meta property="og:title" content="<?php echo isset($page_title) ? $page_title : $default_title; ?>">

<meta property="og:description" content="<?php echo isset($page_description) ? $page_description : $default_description; ?>">

<meta property="og:type" content="website">

<meta property="og:url" content="<?php echo $pageUrl; ?>">

<link rel="canonical" href="<?php echo $pageUrl; ?>">

<link rel="canonical" href="<?php echo $pageUrl; ?>">
<link rel="icon" type="image/png" href="assets/dermessence-logo.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/dermessence-new.css">

<!-- Schema Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalClinic",
  "name": "Dermessence Clinic Chandigarh",
  "url": "https://thedermessence.com",
  "telephone": "+91-8847491254",
  "description": "Dermessence is a dermatology and aesthetic clinic in Chandigarh for acne marks, pimple scars, scar removal options, hair fall, hair PRP and hair GFC.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "SCO 81-82, 1st Floor, Udyan Path",
    "addressLocality": "Chandigarh",
    "postalCode": "160015",
    "addressCountry": "IN"
  },
  "medicalSpecialty": "Dermatology",
  "availableService": [
    "Dermatology consultation",
    "Acne & acne marks care",
    "Pimple scar removal options",
    "Scar reduction options",
    "Hair fall & hair loss consultation",
    "Hair PRP support",
    "Hair GFC support"
  ]
}
</script>
















<!-- Google Ads / Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17042085196"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'AW-17042085196');
</script>
</head>

<body>
    <div class="sticky-social-bar">
        <a href="<?php echo defined('FACEBOOK_URL') ? FACEBOOK_URL : 'https://www.facebook.com/profile.php?id=61577054230896'; ?>" target="_blank" class="social-icon facebook" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="<?php echo defined('INSTAGRAM_URL') ? INSTAGRAM_URL : 'https://www.instagram.com/the_dermessence/'; ?>" target="_blank" class="social-icon instagram" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="<?php echo defined('YOUTUBE_URL') ? YOUTUBE_URL : ''; ?>" target="_blank" class="social-icon youtube" aria-label="YouTube">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="https://wa.me/918847491254" target="_blank" class="social-icon whatsapp" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <nav class="navbar">
        <a href="index.php" class="logo">
            <img src="assets/dermessence-logo.png" alt="Dermessence Logo">
        </a>
        
        <div class="nav-items" id="navMenu">
            <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">HOME</a>
            
            <div class="dropdown">
                <a href="about.php" class="dropdown-toggle">ABOUT <i class="fas fa-chevron-down"></i></a>
                <div class="dropdown-menu">
                    <a href="trusted-dermatologist-in-chandigarh.php">About Us</a>
                    <a href="best-dermatology-clinic-chandigarh.php">Our Team</a>
                    <a href="gallery.php">Gallery</a>
                </div>
            </div>
            
         <div class="dropdown mega-dropdown">
    <a href="treatments.php" class="dropdown-toggle">TREATMENTS <i class="fas fa-chevron-down"></i></a>
    <div class="mega-menu">
        <div class="mega-menu-column">
            <?php 
            $count = 0;
            foreach($treatments as $treatment): 
                if($count < 10):
                    if($treatment['title'] == 'Morpheus8 Treatment'):
            ?>
                <a href="morpheus8-treatment-chandigarh.php">Morpheus8 Treatment</a>
            <?php elseif($treatment['title'] == 'HIFU Treatment'): ?>
                <a href="hifu-treatment-chandigarh.php">HIFU Treatment</a>
            <?php else: ?>
                <a href="treatment/<?php echo isset($treatment['custom_url']) ? $treatment['custom_url'] : $treatment['slug']; ?>">
                    <?php echo $treatment['title']; ?>
                </a>
            <?php 
                    endif;
                endif;
                $count++;
            endforeach; 
            ?>
        </div>

        <div class="mega-menu-column">
            <?php 
            $count = 0;
            foreach($treatments as $treatment): 
                if($count >= 10 && $count < 20):
                    if($treatment['title'] == 'Morpheus8 Treatment'):
            ?>
                <a href="morpheus8-treatment-chandigarh.php">Morpheus8 Treatment</a>
            <?php elseif($treatment['title'] == 'HIFU Treatment'): ?>
                <a href="hifu-treatment-chandigarh.php">HIFU Treatment</a>
            <?php else: ?>
                <a href="treatment/<?php echo isset($treatment['custom_url']) ? $treatment['custom_url'] : $treatment['slug']; ?>">
                    <?php echo $treatment['title']; ?>
                </a>
            <?php 
                    endif;
                endif;
                $count++;
            endforeach; 
            ?>
        </div>
        
        <div class="mega-menu-column">
            <?php 
            $count = 0;
            foreach($treatments as $treatment): 
                if($count >= 20 && $count < 30):
                    if($treatment['title'] == 'Morpheus8 Treatment'):
            ?>
                <a href="morpheus8-treatment-chandigarh.php">Morpheus8 Treatment</a>
            <?php elseif($treatment['title'] == 'HIFU Treatment'): ?>
                <a href="hifu-treatment-chandigarh.php">HIFU Treatment</a>
            <?php else: ?>
                <a href="treatment/<?php echo isset($treatment['custom_url']) ? $treatment['custom_url'] : $treatment['slug']; ?>">
                    <?php echo $treatment['title']; ?>
                </a>
            <?php 
                    endif;
                endif;
                $count++;
            endforeach; 
            ?>
        </div>

        <div class="mega-menu-column">
            <?php 
            $count = 0;
            foreach($treatments as $treatment): 
                if($count >= 30):
                    if($treatment['title'] == 'Morpheus8 Treatment'):
            ?>
                <a href="morpheus8-treatment-chandigarh.php">Morpheus8 Treatment</a>
            <?php elseif($treatment['title'] == 'HIFU Treatment'): ?>
                <a href="hifu-treatment-chandigarh.php">HIFU Treatment</a>
            <?php else: ?>
                <a href="treatment/<?php echo isset($treatment['custom_url']) ? $treatment['custom_url'] : $treatment['slug']; ?>">
                    <?php echo $treatment['title']; ?>
                </a>
            <?php 
                    endif;
                endif;
                $count++;
            endforeach; 
            ?>

            <!-- Static links -->
            <a href="Glow-Facial.php">Glow-Facial</a>
            <a href="Collagen-Facial.php">Collagen-Facial</a>
            <a href="360-Facial.php">360-Facial</a>
            <a href="Pink-Facial.php">Pink-Facial</a>
        </div>
    </div>
</div>

            
          <div class="dropdown mega-dropdown">
    <a href="#" class="dropdown-toggle">
        CONCERNS <i class="fas fa-chevron-down"></i>
    </a>

    <div class="mega-menu">
        <div class="mega-menu-column">
            <a href="skin-specialist-chandigarh.php">Skin</a>
            <a href="anti-aging-treatment-chandigarh.php">Anti Ageing</a>
            <a href="hair-fall-specialist-chandigarh.php">Hair</a>
            <a href="body.php">Body</a>
            <a href="men-skin-care-doctor-chandigarh.php">Men</a>
        </div>
    </div>
</div>

            
            <a href="chemical-peels.php">chemical peels</a>
            <a href="pre-bridal-skin-treatment-chandigarh.php">PRE BRIDAL</a>
            <a href="health-tips-blog-in-chandigarh.php">BLOG</a>
            
            <div class="dropdown">
                <a href="contact.php" class="dropdown-toggle">CONTACT <i class="fas fa-chevron-down"></i></a>
                <div class="dropdown-menu">
                    <a href="contact.php">Contact Us</a>
                    <a href="book-appointment.php">Book Appointment</a>
                </div>
            </div>
        </div>
        
        <div class="nav-right">
           <a href="tel:<?php echo PHONE; ?>" class="nav-phone">
    <i class="fas fa-phone"></i>
    <span><?php echo PHONE; ?></span><br>
    <span>+91-9915930506</span>
</a>

            <style>.nav-phone {
    display: block;
    text-align: center;
}
</style>
            <a href="book-appointment.php" class="nav-btn">Book Now</a>
        </div>
        
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    
    
    <script>
document.addEventListener("DOMContentLoaded", function(){

document.querySelectorAll("img").forEach(function(img){

let src = img.getAttribute("src");

if(src && (src.endsWith(".jpg") || src.endsWith(".jpeg") || src.endsWith(".png"))){

let webp = src.replace(/\.(jpg|jpeg|png)$/i,".webp");

let test = new Image();

test.onload=function(){
img.src = webp;
};

test.src = webp;

}

});

});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
  let images = document.querySelectorAll("img");

  images.forEach(function(img) {
    img.setAttribute("loading", "lazy");
    img.setAttribute("decoding", "async");
  });
});
</script>
