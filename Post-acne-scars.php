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



<!-- Post Acne Scars Section -->
<section class="post-acne-section">
  <h1>POST ACNE SCARS</h1>
  <div class="divider"></div>
  <p class="subtitle">
    After a severe acne breakout, there can be two types of skin changes that occur, either a textural change, or a pigment change.
  </p>
  <div class="acne-info-grid">
    <div class="info-box">
      <h2>Textural change</h2>
      <ul>
        <li>Leads to what we call the post acne scars.</li>
        <li>It is caused by the inflammation during the skin’s healing process after a severe acne breakout.</li>
        <li>It is the direct result of deep trauma caused to the skin especially due to external habits like picking or bursting the pimple.</li>
        <li>The overproduction or underproduction of tissue as a response to the damage is what leaves behind these scars (which are seen as indentations or protrusions on the skin).</li>
      </ul>
    </div>
  </div>
</section>
<style>
    /* Post Acne Scars Section Styling (matches previous) */
.post-acne-section {
  max-width: 1100px;
  margin: 40px auto 0 auto;
  padding: 0 20px 40px 20px;
  font-family: 'Georgia', 'Times New Roman', Times, serif;
  text-align: center;
}

.post-acne-section h1 {
  font-size: 3rem;
  letter-spacing: 2px;
  font-weight: 500;
  margin-bottom: 10px;
}

.divider {
  width: 90px;
  height: 2px;
  background: #000;
  opacity: 0.7;
  margin: 0 auto 24px auto;
}

.post-acne-section .subtitle {
  font-size: 1.1rem;
  max-width: 900px;
  margin: 0 auto 50px auto;
  color: #222;
  font-family: inherit;
  font-weight: 400;
}

.acne-info-grid {
  display: flex;
  gap: 36px;
  justify-content: center;
  align-items: flex-start;
  margin-top: 30px;
  flex-wrap: wrap;
}

.info-box {
  background: #fff;
  border: 2px solid #c49a47;
  border-radius: 14px;
  padding: 32px 34px 26px 34px;
  flex: 1 1 350px;
  max-width: 1000px;
  min-width: 250px;
  text-align: left;
}

.info-box h2 {
  font-size: 1.7rem;
  font-weight: 400;
  margin-bottom: 18px;
  color: #1a1a1a;
  font-family: Georgia, 'Times New Roman', Times, serif;
}

.info-box ul {
  margin: 0;
  padding-left: 18px;
}

.info-box li {
  font-size: 1.12rem;
  color: #222;
  margin-bottom: 10px;
  font-family: inherit;
  line-height: 1.65;
}

@media (max-width: 900px) {
  .acne-info-grid {
    flex-direction: column;
    gap: 24px;
    align-items: stretch;
  }
  .info-box {
    max-width: 100%;
  }
}

</style>




</body>
</html>
