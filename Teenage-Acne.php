<?php
$title = "Best & Trusted Dermatologist in Chandigarh | Dermessence";
$meta_description = "Looking for the best dermatologist in Chandigarh? Dermessence offers expert skin, hair & laser treatments by top doctors. Book your consultation today. Now!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="dermatologist in chandigarh, best dermatologist in chandigarh, skin specialist in chandigarh, top dermatologist in chandigarh, dermatology clinic in chandigarh, skin doctor in chandigarh, Dr. Sukhmani Brar Jugpal, laser treatment chandigarh, acne treatment chandigarh, hair specialist chandigarh, chemical peels chandigarh, botox chandigarh, fillers chandigarh">
    <link rel="canonical" href="https://thedermessence.com/dermatologist-in-chandigarh" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
 
</head>
<body>

    <?php 
    $header_path = __DIR__ . '/includes/header.php';
    if (file_exists($header_path)) {
        include $header_path;
    } else {
        // More robust path detection for shared hosting environments
        $script_dir = dirname($_SERVER['SCRIPT_FILENAME']);
        $alt_header = $script_dir . '/includes/header.php';
        if (file_exists($alt_header)) {
            include $alt_header;
        } else {
            include 'header.php';
        }
    }
    ?>

<br>
<br>
<br>






<!-- Teenage Acne Section -->
<section class="teenage-acne-section">
  <h1>TEENAGE ACNE</h1>
  <div class="acne-underline"></div>
  <p class="acne-subtitle">
    Usually begins at around the onset of your menstrual cycle.
  </p>
  <div class="acne-content">
    <div class="acne-box">
      <h2>Common areas</h2>
      <ul>
        <li>Central area of the cheeks and the forehead</li>
        <li>T zone (i.e. forehead, nose and chin areas)</li>
        <li>Hair line</li>
      </ul>
    </div>
    <div class="acne-box">
      <h2>Can present itself at various stages as</h2>
      <ul>
        <li>Whiteheads</li>
        <li>Blackheads</li>
        <li>Pus filled pimples</li>
      </ul>
    </div>
    <div class="acne-box">
      <h2>Could be caused by</h2>
      <ul>
        <li>Hormonal imbalance</li>
        <li>Dirty scalp or dirty skin</li>
        <li>Excessive oil production during that age<br>(due to the hormonal fluctuation)</li>
        <li>Familial (which can occur in spite of the hormones being in place)</li>
      </ul>
    </div>
  </div>
</section>

<style>
    .teenage-acne-section {
  text-align: center;
  padding: 60px 2vw 30px 2vw;
  font-family: 'Georgia', serif;
  background: #fff;
}

.teenage-acne-section h1 {
  font-size: 3.2rem;
  font-weight: 600;
  letter-spacing: 3px;
  color: #111;
  margin-bottom: 10px;
}

.acne-underline {
  margin: 0 auto 18px auto;
  border-bottom: 2px solid #111;
  width: 110px;
}

.acne-subtitle {
  color: #333;
  font-size: 1.2rem;
  margin-bottom: 36px;
  font-family: 'Georgia', serif;
}

.acne-content {
  display: flex;
  align-items: stretch;
  justify-content: center;
  gap: 32px;
  margin-top: 18px;
  flex-wrap: wrap;
}

.acne-box {
  background: #fff;
  border: 2px solid #f3e1ad;
  border-radius: 16px;
  padding: 34px 30px 28px 30px;
  min-width: 320px;
  max-width: 410px;
  flex: 1 1 320px;
  box-sizing: border-box;
  text-align: left;
  margin-bottom: 16px;
}

.acne-box h2 {
  font-size: 2rem;
  font-weight: 400;
  color: #161615;
  margin-bottom: 18px;
  font-family: 'Georgia', serif;
}

.acne-box ul {
  padding-left: 18px;
  color: #1d1d1b;
  font-size: 1.13rem;
}

.acne-box li {
  margin-bottom: 10px;
  line-height: 1.55;
}

/* Responsive */
@media (max-width: 1080px) {
  .acne-content {
    flex-direction: column;
    align-items: center;
    gap: 18px;
  }
  .acne-box {
    width: 90vw;
    max-width: 540px;
  }
  .teenage-acne-section h1 {
    font-size: 2.1rem;
  }
}

</style>


</body>
</html>
