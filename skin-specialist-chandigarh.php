<?php
include 'dermessence_optimizer.php';

$title = "Skin Specialist in Chandigarh | Acne, Pigmentation & Skin Care | Dermessence";
$meta_description = "Tried products, facials or procedures—but still confused?...";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="skin specialist in Chandigarh,skin doctor in Chandigarh,dermatologist in Chandigarh,best skin specialist Chandigarhacne treatment Chandigarh,acne scars treatment Chandigarh,pigmentation treatment Chandigarh,open pores treatment Chandigarh,skin texture improvement Chandigarh,facial structure enhancement Chandigarh,dark circles treatment Chandigarh,rosacea treatment Chandigarh,sensitive skin clinic Chandigarh,advanced skin care clinic Chandigarh">
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

<!-- Concerns Banner Section -->
<section class="concerns-banner">
  <div class="concerns-bg"></div>
  <div class="concerns-inner">
    <hr class="line">
    <h1>CONCERNS</h1>
    <hr class="line">
  </div>
</section>
<style>
    .concerns-banner {
  position: relative;
  width: 100%;
  height: 370px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  background: #e9e2db; /* fallback shade */
}
.concerns-bg {
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  background: url('/assets/concern/q1.png') center center/cover no-repeat;
  opacity: 0.29;
  z-index: 1;
}
.concerns-inner {
  position: relative;
  z-index: 2;
  width: 96%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.concerns-inner h1 {
  font-family: 'Georgia', serif;
  font-size: 2.6rem;
  color: #181819;
  font-weight: 600;
  margin: 0 35px;
  letter-spacing: 2px;
  text-align: center;
  white-space: nowrap;
}
.concerns-inner .line {
  flex: 1 1 0%;
  border: none;
  border-top: 1.1px solid #e0dcd6;
  height: 0;
  margin: 0 5px;
}
@media (max-width:600px) {
  .concerns-banner { height: 90px; }
  .concerns-inner h1 { font-size: 1.3rem; margin: 0 10px;}
}

</style>

<!-- Content Section -->
<section class="content-section">
  <div class="content-left">
    <h2> SKIN CONCERNS</h2>
    <HR>    </HR>
    <p>Your face is what makes you, you.</p>
    <p>
      Treating the face is an art and science. Smooth, soft and glowing skin is a result of <strong>Beautiful Texture, Proper Hydration & Luminosity</strong>. The skin on your face is fragile, more sensitive and needs extra attention. Most people believe that skin care predominantly involves treating the surface of the skin, and “the glow” comes from just the skin but in reality, it involves much more!
    </p>
    <p>
      Good skin care involves going below the surface to understand the <strong>Root Cause</strong> of the problem. Hence it’s incredibly important to choose the right dermatologist. <strong>Dr. Sukhmani Brar Jugpal</strong> has more than 10 years of experience in beautifying faces of various ethnicities and she personally consults, analyses and treats each of her clients to bring out their natural best.
    </p>
   <p class="interline-text"> 
  At <strong>Dr. Sukhmani Brar Jugpal</strong>, you will be given the best professional clinical treatments using the most advanced technologies like 
  <a href="anti-aging-treatment-chandigarh.php" style="color: #c4a45a; text-decoration: underline;">Anti-Ageing Treatments</a>, 
  <a href="hifu-treatment-chandigarh.php" style="color: #c4a45a; text-decoration: underline;">HIFU</a>, and 
  <a href="morpheus8-treatment-chandigarh.php" style="color: #c4a45a; text-decoration: underline;">Morpheus8</a>.
</p>

  </div>
  <div class="content-right">
    <img src="assets/concern/q002.png" alt="Clinic Procedure">
  </div>
</section>

<style>
     .content-section {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  padding: 50px 5% 0 5%;
  background: #fff;
  max-width: 1400px;
  margin: 0 auto;
  border-bottom: 2px solid #e5e5e5;
  box-sizing: border-box;

}

.content-left {
  flex: 2.2;
  padding-right: 36px;
}

.content-left h2 {
  font-size: 38px;
  margin-bottom: 22px;
  font-family: 'Georgia', serif;
  font-weight: 600;
  letter-spacing: 2px;
  color: #151313;
}

.content-left p {
  font-size: 18px;
  line-height: 1.7;
  margin-bottom: 19px;
  color: #232323;
  font-family: 'Georgia', serif;
}

.content-right {
  flex: 1.2;
  display: flex;
  align-items: flex-start;
  justify-content: flex-end;
}

.content-right img {
  width: 410px;
  height: 420px;
  object-fit: cover;
  border-radius: 7px;
  box-shadow: 0 0 14px #ececec;
  background: #f8f8f8;
  border: 1px solid #ededed;
}

/* Responsive */
@media (max-width: 900px) {
  .content-section {
    flex-direction: column;
    padding: 36px 4% 0 4%;
  }
  .content-left {
    padding-right: 0;
    margin-bottom: 24px;
  }
  .content-right {
    justify-content: center;
  }
  .content-right img {
    width: 90vw;
    max-width: 320px;
    height: 160px;
  }
}

</style>


<section class="ds234-skin-truth-section">
  <div class="ds234-container">
    
    <h2 class="ds234-title">
      The Truth Most People Miss About <span>Skin Care</span>
    </h2>

    <div class="ds234-content">
      <p>Most people believe skin care is about the surface.</p>
      <p class="ds234-highlight">A cream. A facial. A glow that fades after a few days.</p>

      <p>
        But healthy skin does not begin on the surface. 
        <strong>It begins below it.</strong>
      </p>

      <p>
        Your skin reflects hydration, texture, oil balance, inflammation, hormonal influence, 
        sun exposure, stress, lifestyle, and how it has been treated over time.
      </p>

      <p>
        This is why two people visiting a skin specialist in Chandigarh for the same concern 
        often need completely different care plans.
      </p>

      <p class="ds234-brand">
        At Dermessence, skin care is not about covering problems.
      </p>

      <p class="ds234-final">
        It’s about understanding skin behaviour.
      </p>
    </div>

  </div>
</section>
<style>
    /* ===========================
   Dermessence Skin Truth 234
   =========================== */

.ds234-skin-truth-section {
  background: #ffffff;
  padding: 100px 20px;
  position: relative;
}

.ds234-container {
  max-width: 100%;
  margin: auto;
  text-align: center;
}

.ds234-title {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 40px;
  color: #b8923c; /* luxury gold */
  letter-spacing: 1px;
}

.ds234-title span {
  color: #1a1a1a;
  position: relative;
}

.ds234-title span::after {
  content: "";
  width: 80px;
  height: 3px;
  background: linear-gradient(90deg, #d4af37, #b8923c);
  display: block;
  margin: 10px auto 0;
  border-radius: 10px;
}

.ds234-content p {
  font-size: 1.15rem;
  line-height: 1.9;
  color: #333;
  margin-bottom: 18px;
}

.ds234-highlight {
  font-size: 1.3rem;
  font-weight: 600;
  color: #b8923c;
  letter-spacing: 0.5px;
}

.ds234-content strong {
  color: #b8923c;
  font-weight: 700;
}

.ds234-brand {
  margin-top: 30px;
  font-size: 1.25rem;
  font-weight: 600;
  color: #1a1a1a;
}

.ds234-final {
  font-size: 1.6rem;
  font-weight: 700;
  color: #b8923c;
  margin-top: 10px;
  letter-spacing: 1px;
}

/* Subtle luxury glow */
.ds234-skin-truth-section::before {
  content: "";
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 400px;
  height: 400px;
  background: radial-gradient(circle, rgba(212,175,55,0.12), transparent 70%);
  filter: blur(40px);
  z-index: 0;
}

/* Mobile Responsive */
@media (max-width: 768px) {
  .ds234-title {
    font-size: 2.2rem;
  }

  .ds234-content p {
    font-size: 1rem;
  }

  .ds234-final {
    font-size: 1.3rem;
  }
}

</style>


<section class="ds235-problem-section">
  <div class="ds235-container ds235-grid">

    <!-- Left Content -->
    <div class="ds235-left">
      <h2 class="ds235-title">
        Why Skin Problems <span>Keep Coming Back</span>
      </h2>

      <div class="ds235-intro">
        <p>Many skin concerns don’t persist because they are difficult.</p>
        <p class="ds235-gold">They persist because they are misunderstood.</p>
      </div>

      <div class="ds235-points">
        <p>Acne that keeps recurring.</p>
        <p>Pigmentation that doesn’t fade.</p>
        <p>Open pores that never improve.</p>
        <p>Texture that stays uneven despite treatments.</p>
      </div>

      <div class="ds235-reason">
        <p>This usually happens when skin care begins without evaluating:</p>
        <ul>
          <li>Skin type and sensitivity</li>
          <li>Root cause of the concern</li>
          <li>Triggers such as PCOD, stress, or sun exposure</li>
          <li>Past products or procedures</li>
          <li>The skin’s natural healing response</li>
        </ul>
      </div>

      <div class="ds235-conclusion">
        <p>When treatment is guessed, results feel random.</p>
        <p class="ds235-final">
          When treatment is guided by a skin specialist, results become structured.
        </p>
      </div>
    </div>

    <!-- Right Image -->
    <div class="ds235-right">
      <img src="assets/images1.jpg" alt="Dermessence Skin Analysis">
    </div>

  </div>
</section>


<style>
    /* ===========================
   Dermessence Problem 235
   Split Layout
   =========================== */

.ds235-problem-section {
  background: #ffffff;
  padding: 100px 20px;
  position: relative;
}

.ds235-container {
  max-width:100%;
  margin: auto;
}

.ds235-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: 60px;
  align-items: center;
}

/* Left */
.ds235-left {
  text-align: left;
}

.ds235-title {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 25px;
  color: #1a1a1a;
}

.ds235-title span {
  color: #b8923c;
}

.ds235-intro p {
  font-size: 1.2rem;
  color: #333;
}

.ds235-gold {
  font-size: 1.4rem;
  font-weight: 600;
  color: #b8923c;
  margin-top: 5px;
}

.ds235-points {
  margin: 30px 0;
}

.ds235-points p {
  font-size: 1.1rem;
  margin: 8px 0;
  color: #444;
}

.ds235-reason p {
  font-size: 1.1rem;
  margin-bottom: 10px;
}

.ds235-reason ul {
  list-style: none;
  padding: 0;
}

.ds235-reason ul li {
  padding: 6px 0;
  font-size: 1.05rem;
  color: #555;
}

.ds235-reason ul li::before {
  content: "✦";
  color: #b8923c;
  margin-right: 8px;
}

.ds235-final {
  font-size: 1.4rem;
  font-weight: 700;
  color: #b8923c;
  margin-top: 10px;
}

/* Right Image */
.ds235-right {
  position: relative;
}

.ds235-right img {
  width: 100%;
  border-radius: 22px;
  box-shadow: 0 30px 80px rgba(0,0,0,0.12);
}

/* Gold glow behind image */
.ds235-right::after {
  content: "";
  position: absolute;
  inset: -20px;
  background: radial-gradient(circle, rgba(212,175,55,0.18), transparent 70%);
  filter: blur(40px);
  z-index: -1;
}

/* Mobile */
@media (max-width: 900px) {
  .ds235-grid {
    grid-template-columns: 1fr;
  }

  .ds235-right {
    margin-top: 40px;
  }

  .ds235-title {
    font-size: 2.2rem;
  }
}

</style>


<section class="ds236-artscience-section">
  <div class="ds236-container ds236-grid">

    <!-- Left Content -->
    <div class="ds236-left">
      <h2 class="ds236-title">
        Skin Care Is Both <span>Art and Science</span>
      </h2>

      <p class="ds236-intro">
        Treating the face requires more than medical knowledge.  
        It requires aesthetic judgement.
      </p>

      <div class="ds236-points">
        <p>Smooth, glowing skin is a balance of:</p>
        <ul>
          <li>Even texture</li>
          <li>Proper hydration</li>
          <li>Calm skin barrier</li>
          <li>Balanced tone</li>
          <li>Natural facial harmony</li>
        </ul>
      </div>

      <p class="ds236-desc">
        Facial skin is thinner, more sensitive, and constantly exposed to environmental stress. 
        It needs thoughtful care — not generic solutions.
      </p>

      <p class="ds236-final">
        This is why choosing the right skin specialist in Chandigarh 
        makes all the difference.
      </p>
    </div>

    <!-- Right Image -->
    <div class="ds236-right">
      <img src="assets/images3.jpg" alt="Dermessence Facial Consultation">
    </div>

  </div>
</section>


<style>
    /* ===========================
   Dermessence Art & Science 236
   =========================== */

.ds236-artscience-section {
  background: #ffffff;
  padding: 100px 20px;
  position: relative;
}

.ds236-container {
  max-width: 100%;
  margin: auto;
}

.ds236-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: 70px;
  align-items: center;
}

/* Left */
.ds236-left {
  text-align: left;
}

.ds236-title {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 25px;
  color: #1a1a1a;
}

.ds236-title span {
  color: #b8923c;
}

.ds236-intro {
  font-size: 1.25rem;
  color: #333;
  margin-bottom: 25px;
}

.ds236-points p {
  font-size: 1.15rem;
  margin-bottom: 10px;
  color: #333;
}

.ds236-points ul {
  list-style: none;
  padding: 0;
}

.ds236-points ul li {
  font-size: 1.05rem;
  padding: 6px 0;
  color: #555;
  position: relative;
}

.ds236-points ul li::before {
  content: "✦";
  color: #b8923c;
  margin-right: 10px;
}

.ds236-desc {
  margin-top: 25px;
  font-size: 1.1rem;
  line-height: 1.8;
  color: #444;
}

.ds236-final {
  margin-top: 20px;
  font-size: 1.4rem;
  font-weight: 700;
  color: #b8923c;
}

/* Right Image */
.ds236-right {
  position: relative;
}

.ds236-right img {
  width: 100%;
  border-radius: 24px;
  box-shadow: 0 30px 90px rgba(0,0,0,0.12);
}

/* Soft golden halo */
.ds236-right::after {
  content: "";
  position: absolute;
  inset: -30px;
  background: radial-gradient(circle, rgba(212,175,55,0.18), transparent 70%);
  filter: blur(50px);
  z-index: -1;
}

/* Mobile */
@media (max-width: 900px) {
  .ds236-grid {
    grid-template-columns: 1fr;
  }

  .ds236-right {
    margin-top: 40px;
  }

  .ds236-title {
    font-size: 2.2rem;
  }

  .ds236-final {
    font-size: 1.25rem;
  }
}

</style>



<section class="ds237-consult-section">
  <div class="ds237-container ds237-grid">

    <!-- Left Content -->
    <div class="ds237-left">
      <h2 class="ds237-title">
        A Consultation-Led <span>Skin Specialist Approach</span>
      </h2>

      <p class="ds237-intro">
        At Dermessence, every skin journey begins with a detailed consultation.
      </p>

      <p class="ds237-sub">
        A skin specialist evaluates:
      </p>

      <div class="ds237-list">
        <div>Texture, tone, and oil balance</div>
        <div>Pigmentation depth</div>
        <div>Acne activity and scarring</div>
        <div>Sensitivity and redness</div>
        <div>Facial structure and proportions</div>
        <div>Lifestyle and medical background</div>
      </div>

      <p class="ds237-desc">
        Only after this understanding is built does planning begin.
      </p>

      <p class="ds237-final">
        <strong>Dr. Sukhmani Brar Jugpal</strong>, with over 10 years of experience as a dermatologist 
        and skin specialist, personally consults, analyses, and guides patients toward 
        skin care plans that support long-term health — not temporary fixes.
      </p>
    </div>

    <!-- Right Image -->
    <div class="ds237-right">
      <img src="assets/images1.jpg" alt="Dermessence Doctor Consultation">
    </div>

  </div>
</section>
<style>
    /* ===========================
   Dermessence Consultation 237
   =========================== */

.ds237-consult-section {
  background: #ffffff;
  padding: 110px 20px;
  position: relative;
}

.ds237-container {
  max-width: 100%;
  margin: auto;
}

.ds237-grid {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  gap: 80px;
  align-items: center;
}

/* Left */
.ds237-left {
  background: #fafafa;
  padding: 60px;
  border-radius: 28px;
  box-shadow: 0 20px 60px rgba(0,0,0,0.06);
}

.ds237-title {
  font-size: 2.8rem;
  font-weight: 700;
  margin-bottom: 20px;
  color: #1a1a1a;
}

.ds237-title span {
  color: #b8923c;
}

.ds237-intro {
  font-size: 1.2rem;
  color: #333;
  margin-bottom: 20px;
}

.ds237-sub {
  font-size: 1.15rem;
  font-weight: 600;
  color: #b8923c;
  margin-bottom: 15px;
}

/* Custom vertical checklist */
.ds237-list {
  display: grid;
  grid-template-columns: 1fr;
  gap: 10px;
  margin-bottom: 25px;
}

.ds237-list div {
  font-size: 1.05rem;
  color: #444;
  padding-left: 22px;
  position: relative;
}

.ds237-list div::before {
  content: "✓";
  position: absolute;
  left: 0;
  color: #b8923c;
  font-weight: 700;
}

.ds237-desc {
  font-size: 1.1rem;
  color: #333;
  margin-bottom: 15px;
}

.ds237-final {
  font-size: 1.25rem;
  font-weight: 600;
  color: #b8923c;
  line-height: 1.7;
}

/* Right Image */
.ds237-right {
  position: relative;
}

.ds237-right img {
  width: 100%;
  border-radius: 26px;
  box-shadow: 0 30px 90px rgba(0,0,0,0.14);
}

/* Stronger golden aura (authority glow) */
.ds237-right::after {
  content: "";
  position: absolute;
  inset: -35px;
  background: radial-gradient(circle, rgba(212,175,55,0.22), transparent 70%);
  filter: blur(55px);
  z-index: -1;
}

/* Mobile */
@media (max-width: 900px) {
  .ds237-grid {
    grid-template-columns: 1fr;
  }

  .ds237-left {
    padding: 40px;
  }

  .ds237-right {
    margin-top: 40px;
  }

  .ds237-title {
    font-size: 2.1rem;
  }
}

</style>
<section class="ds238-services-section">
 <section style="padding:80px 20px; background:#0f0f0f;">
  <div style="max-width:100%; margin:auto; color:#fff; font-family:'Inter', sans-serif;">

    <h2 style="font-size:2.4rem; color:#d4af37; margin-bottom:25px;">
      Common Skin Concerns Treated by Our Skin Specialist
    </h2>

    <h3 style="font-size:1.6rem; color:#fff; margin-bottom:10px;">Acne & Breakouts</h3>

    <p style="font-size:1.1rem; line-height:1.9; color:#ddd;">
      Acne affects more than just teenagers. We commonly see:
    </p>

    <ul style="list-style:none; padding-left:0; line-height:2; color:#ccc;">
      <li>• Teenage acne</li>
      <li>• Adult acne</li>
      <li>• Hormonal acne</li>
      <li>• Acne associated with PCOD</li>
    </ul>

    <p style="font-size:1.1rem; line-height:1.9; color:#ccc; margin-top:10px;">
      Acne care is planned only after understanding oil production, inflammation, 
      and internal triggers.
    </p>

  </div>
</section>


<section style="padding:80px 20px; background:#151515;">
  <div style="max-width:100%; margin:auto; color:#fff; font-family:'Inter', sans-serif;">

    <h3 style="font-size:1.8rem; color:#d4af37; margin-bottom:15px;">
      Acne Scars & Post-Acne Pigmentation
    </h3>

    <p style="font-size:1.1rem; line-height:1.9; color:#ddd;">
      When acne settles, marks and scars often remain. These include:
    </p>

    <ul style="list-style:none; padding-left:0; line-height:2; color:#ccc;">
      <li>• Acne scars</li>
      <li>• Post-acne pigmentation</li>
      <li>• Uneven texture after acne</li>
    </ul>

    <p style="font-size:1.1rem; line-height:1.9; color:#ccc;">
      Scar management depends on scar depth, skin type, and healing capacity — 
      making professional evaluation essential.
    </p>

  </div>
</section>


<section style="padding:80px 20px; background:#0f0f0f;">
  <div style="max-width:100%; margin:auto; color:#fff; font-family:'Inter', sans-serif;">

    <h3 style="font-size:1.8rem; color:#d4af37; margin-bottom:15px;">
      Skin Texture & Open Pores
    </h3>

    <p style="font-size:1.1rem; line-height:1.9; color:#ddd;">
      Texture issues often make skin appear dull or tired. These may include:
    </p>

    <ul style="list-style:none; padding-left:0; line-height:2; color:#ccc;">
      <li>• Open pores</li>
      <li>• Rough or flakey skin</li>
      <li>• Small bumps on the forehead</li>
      <li>• Uneven skin surface</li>
    </ul>

    <p style="font-size:1.1rem; line-height:1.9; color:#ccc;">
      Improving texture requires strengthening the skin barrier, 
      not aggressive over-treatment.
    </p>

  </div>
</section>


<section style="padding:80px 20px; background:#151515;">
  <div style="max-width:100%; margin:auto; color:#fff; font-family:'Inter', sans-serif;">

    <h3 style="font-size:1.8rem; color:#d4af37; margin-bottom:15px;">
      Facial Structure & Balance
    </h3>

    <p style="font-size:1.1rem; line-height:1.9; color:#ddd;">
      Skin health is also influenced by facial structure. Concerns may include:
    </p>

    <ul style="list-style:none; padding-left:0; line-height:2; color:#ccc;">
      <li>• Loss of cheek definition</li>
      <li>• Jawline and chin balance</li>
      <li>• Facial angles and proportions</li>
    </ul>

    <p style="font-size:1.1rem; line-height:1.9; color:#ccc;">
      A skin specialist focuses on subtle balance while maintaining 
      natural appearance.
    </p>

  </div>
</section>


<section style="padding:80px 20px; background:#0f0f0f;">
  <div style="max-width:100%; margin:auto; color:#fff; font-family:'Inter', sans-serif;">

    <h3 style="font-size:1.8rem; color:#d4af37; margin-bottom:15px;">
      Skin Colour & Tone Concerns
    </h3>

    <p style="font-size:1.1rem; line-height:1.9; color:#ddd;">
      Uneven tone is one of the most common reasons people search for a skin doctor. 
      This includes:
    </p>

    <ul style="list-style:none; padding-left:0; line-height:2; color:#ccc;">
      <li>• Pigmentation</li>
      <li>• Patchy skin tone</li>
      <li>• Sun tan</li>
      <li>• Dark spots</li>
      <li>• Freckles</li>
      <li>• Red or sensitive skin</li>
      <li>• Rosacea-prone skin</li>
    </ul>

    <p style="font-size:1.1rem; line-height:1.9; color:#ccc;">
      Each concern has a different cause — and therefore a different approach.
    </p>

  </div>
</section>


<section style="padding:80px 20px; background:#151515;">
  <div style="max-width:100%; margin:auto; color:#fff; font-family:'Inter', sans-serif;">

    <h3 style="font-size:1.8rem; color:#d4af37; margin-bottom:15px;">
      Other Skin-Related Concerns
    </h3>

    <p style="font-size:1.1rem; line-height:1.9; color:#ddd;">
      Some concerns may not seem major but still affect confidence, such as:
    </p>

    <ul style="list-style:none; padding-left:0; line-height:2; color:#ccc;">
      <li>• Facial hair</li>
      <li>• Excessive sweating</li>
      <li>• Persistent redness or sensitivity</li>
    </ul>

    <p style="font-size:1.1rem; line-height:1.9; color:#ccc;">
      These require both medical understanding and aesthetic sensitivity.
    </p>

  </div>
</section>


   <section style="padding:80px 20px; background:#0f0f0f;">
  <div style="max-width:100%; margin:auto; color:#fff; font-family:'Inter', sans-serif;">
    
    <h2 style="font-size:2.4rem; color:#d4af37; margin-bottom:25px;">
      Advanced Skin Care With Responsible Use of Technology
    </h2>

    <p style="font-size:1.1rem; line-height:1.9; color:#ddd;">
      At Dermessence, technology supports care — it does not replace understanding.
    </p>

    <p style="font-size:1.1rem; line-height:1.9; color:#ccc; margin-top:15px;">
      Advanced dermatology tools are used only when suitable, after proper evaluation 
      by a skin specialist. The focus is always on safety, balance, and long-term skin health.
    </p>

    <p style="font-size:1.15rem; line-height:1.9; margin-top:20px; color:#d4af37; font-weight:600;">
      Technology is a tool. Clinical judgement is the foundation.
    </p>

  </div>
</section>



<section style="padding:80px 20px; background:#151515;">
  <div style="max-width:100%; margin:auto; color:#fff; font-family:'Inter', sans-serif;">
    
    <h2 style="font-size:2.4rem; color:#d4af37; margin-bottom:25px;">
      What Makes Dermessence a Trusted Skin Specialist Clinic
    </h2>

    <p style="font-size:1.1rem; line-height:1.9; color:#ddd;">
      Dermessence is not built on trends or quick fixes.  
      It is built on:
    </p>

    <div style="margin-top:25px; padding:25px; border:1px solid rgba(212,175,55,0.3); border-radius:12px;">
      <ul style="margin:0; padding-left:0; list-style:none; line-height:2; color:#ccc;">
        <li>• Consultation before treatment</li>
        <li>• Clear explanations</li>
        <li>• Realistic expectations</li>
        <li>• Ethical skin care practices</li>
        <li>• Respect for individual skin differences</li>
      </ul>
    </div>

    <p style="font-size:1.15rem; line-height:1.9; margin-top:25px; color:#d4af37; font-weight:600;">
      Patients often say they finally understand why their skin behaves the way it does.
    </p>

  </div>
</section>

<section style="padding:80px 20px; background:#0f0f0f;">
  <div style="max-width:100%; margin:auto; color:#fff; font-family:'Inter', sans-serif;">
    
    <h2 style="font-size:2.4rem; color:#d4af37; margin-bottom:25px;">
      Who This Skin Specialist Approach Is Right For
    </h2>

    <p style="font-size:1.1rem; line-height:1.9; color:#ddd;">
      This approach is ideal if:
    </p>

    <div style="margin-top:25px; padding:25px; border:1px solid rgba(212,175,55,0.3); border-radius:12px;">
      <ul style="margin:0; padding-left:0; list-style:none; line-height:2; color:#ccc;">
        <li>• You’ve tried products or facials without lasting results</li>
        <li>• You want clarity before procedures</li>
        <li>• You prefer personalised skin care</li>
        <li>• You value explanation over exaggeration</li>
        <li>• You are looking for a skin specialist in Chandigarh you can trust</li>
      </ul>
    </div>

    <p style="font-size:1.15rem; line-height:1.9; margin-top:25px; color:#d4af37; font-weight:600;">
      Skin care should feel informed — not confusing.
    </p>

  </div>
</section>


<section style="padding:80px 20px; background:#151515;">
  <div style="max-width:100%; margin:auto; color:#fff; font-family:'Inter', sans-serif;">
    
    <h2 style="font-size:2.4rem; color:#d4af37; margin-bottom:25px;">
      An Invitation to Understand Your Skin Better
    </h2>

    <p style="font-size:1.1rem; line-height:1.9; color:#ddd;">
      Healthy skin is not about perfection.  
      It’s about balance, comfort, and confidence.
    </p>

    <p style="font-size:1.1rem; line-height:1.9; color:#ccc; margin-top:15px;">
      If you are dealing with acne, pigmentation, scars, texture issues, or other skin concerns, 
      Dermessence offers a skin specialist–led approach focused on understanding first — 
      and caring thoughtfully.
    </p>

    <p style="font-size:1.15rem; line-height:1.9; margin-top:20px; color:#d4af37; font-weight:600;">
      Because real skin care starts with clarity, not pressure.
    </p>

  </div>
</section>


<br><br> 
<!-- Concerns Grid Section -->
<section class="concerns-section">
  <div class="concerns-bg"></div>

  <div class="concerns-container">
    <h2 class="concerns-title">Concerns</h2>

    <div class="concerns-grid">

      <!-- Box 1 -->
      <div class="concern-box">
        <h3>Acne</h3>
        <ul>
          <li><a href="Teenage-Acne.php">Teenage Acne</a></li>
          <li><a href="Adult-Acne.php">Adult Acne</a></li>
          <li><a href="Post-acne-scars.php">Post Acne scars</a></li>
          <li><a href="Post-Acne-pigmentation.php">Post Acne pigmentation</a></li>
          <li><a href="#">PCOD</a></li>
        </ul>
      </div>

      <!-- Box 2 -->
      <div class="concern-box">
        <h3>Texture</h3>
        <ul>
          <li><a href="#">Open Pores</a></li>
          <li><a href="#">Scars</a></li>
          <li><a href="#">Bumps On Forehead</a></li>
          <li><a href="#">Flakey / Rough Skin</a></li>
        </ul>
      </div>

      <!-- Box 3 -->
      <div class="concern-box">
        <h3>Structure</h3>
        <ul>
          <li><a href="#">Ideal Facial Structure</a></li>
          <li><a href="#">Cheekbones</a></li>
          <li><a href="#">Angle Of Jaw</a></li>
          <li><a href="#">Jawline</a></li>
          <li><a href="#">Chin Enhancement</a></li>
        </ul>
      </div>

      <!-- Box 4 -->
      <div class="concern-box">
        <h3>Features</h3>
        <ul>
          <li><a href="#">Eyes</a></li>
          <li><a href="#">Nose</a></li>
          <li><a href="#">Lips</a></li>
        </ul>
      </div>

      <!-- Box 5 -->
      <div class="concern-box">
        <h3>Colour &amp; Tone</h3>
        <ul>
          <li><a href="#">Pigmentation and Patchy Skin Tone</a></li>
          <li><a href="#">Tan</a></li>
          <li><a href="#">Black Spots</a></li>
          <li><a href="#">Under-Eye Dark Circles</a></li>
          <li><a href="#">Red and Sensitive Skin</a></li>
          <li><a href="#">Freckles</a></li>
          <li><a href="#">Rosacea</a></li>
        </ul>
      </div>

      <!-- Box 6 -->
      <div class="concern-box">
        <h3>Other Concerns</h3>
        <ul>
          <li><a href="#">Facial Hair</a></li>
          <li><a href="#">Excessive Sweating – Remedies &amp; Prevention</a></li>
        </ul>
      </div>

    </div>
  </div>
</section>

 

<style>
    .concerns-section {
  position: relative;
  width: 100%;
  min-height: 100vh;
  padding: 0;
  overflow: hidden;
}
.concerns-bg {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: url('/assets/concern/q003.png') center center/cover no-repeat;
  z-index: 1;
  opacity: 0.67; /* overlay shown in your design */
  filter: blur(0px);
}
.concerns-container {
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 1400px;
  margin: 0 auto;
  padding: 40px 2% 60px 2%;
  box-sizing: border-box;
}
.concerns-title {
  text-align: center;
  font-family: 'Georgia', serif;
  font-size: 2.7rem;
  font-weight: 500;
  color: #232222;
  margin-top: 20px;
  margin-bottom: 14px;
  letter-spacing: 1px;
  border-bottom: 2px solid #473f3b2a;
  padding-bottom: 8px;
  max-width: 450px;
  margin-left: auto;
  margin-right: auto;
}
.concerns-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(2, 1fr);
  gap: 34px 34px;
  width: 100%;
  margin-top: 34px;
  justify-items: center;
}
.concern-box {
  background: rgba(255,255,255,0.73);
  box-shadow: 0 6px 40px #d0d2c955;
  border-radius: 16px;
  padding: 30px 35px 20px 35px;
  min-width: 310px;
  max-width: 390px;
  width: 100%;
  text-align: left;
  backdrop-filter: blur(1.3px);
  border: 1.3px solid #edeae6;
  transition: box-shadow 0.2s;
}
.concern-box h3 {
  font-size: 2rem;
  color: #222220;
  font-family: 'Georgia', serif;
  font-weight: 500;
  margin-bottom: 10px;
  letter-spacing: 1px;
  text-align: center;
}
.concern-box ul {
  padding-left: 0;
  margin: 0;
  list-style-type: none;
}
.concern-box li {
  margin-bottom: 9px;
  font-size: 1.09rem;
  color: #242424;
  display: flex;
  align-items: flex-start;
}
.concern-box li:before {
  content: "●";
  font-size: 1.2rem;
  color: #0b0100;
  margin-right: 11px;
  line-height: 1.3;
  position: relative;
  top: 1.5px;
}
.concern-box a {
  color: #15151c;
  text-decoration: underline;
  transition: color 0.18s;
  font-family: inherit;
}
.concern-box a:hover {
  color: #b49249;
  text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 1200px) {
  .concerns-grid { grid-template-columns: 1fr 1fr; grid-template-rows: auto; }
}
@media (max-width: 800px) {
  .concerns-grid { grid-template-columns: 1fr; gap: 22px; }
  .concern-box { max-width: 98vw; min-width: 0; padding: 24px 10vw; }
  .concerns-title { font-size: 2rem; }
}
@media (max-width: 480px) {
  .concerns-title { font-size: 1.2rem; }
  .concern-box { padding: 12px 2vw; }
}

</style>
<div class="ds238-cta">
  <h3>Book Your Skin Specialist Consultation in Chandigarh</h3>
  <p>Take the first step toward confident, informed skin care.</p>
  <div class="cta-btns">
    <a href="tel:8847491254" class="cta-call">Call Now</a>
    <a href="book-appointment.php" class="cta-book">Book Appointment</a>
  </div>
</div>
<style>
    .ds238-cta {
  max-width: 100%;
  margin: 80px auto;
  padding: 60px 40px;
  background: linear-gradient(135deg, #0f0f0f, #1c1c1c);
  border-radius: 20px;
  text-align: center;
  color: #fff;
  box-shadow: 0 25px 60px rgba(0,0,0,0.4);
  position: relative;
  overflow: hidden;
}

.ds238-cta::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(212,175,55,0.15) 0%, transparent 60%);
  animation: glow 8s linear infinite;
}

@keyframes glow {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}

.ds238-cta h3 {
  font-size: 2.2rem;
  margin-bottom: 15px;
  font-weight: 600;
  color: #d4af37;
  position: relative;
  z-index: 1;
}

.ds238-cta p {
  font-size: 1.1rem;
  margin-bottom: 35px;
  color: #ddd;
  position: relative;
  z-index: 1;
}

.cta-btns {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
  position: relative;
  z-index: 1;
}

.cta-btns a {
  padding: 14px 32px;
  border-radius: 50px;
  font-size: 1rem;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
  letter-spacing: 0.5px;
}

/* Call button */
.cta-call {
  background: linear-gradient(135deg, #d4af37, #f5d76e);
  color: #000;
  box-shadow: 0 10px 25px rgba(212,175,55,0.4);
}

.cta-call:hover {
  transform: translateY(-3px) scale(1.05);
  box-shadow: 0 15px 40px rgba(212,175,55,0.6);
}

/* Book button */
.cta-book {
  border: 2px solid #d4af37;
  color: #d4af37;
  background: transparent;
}

.cta-book:hover {
  background: #d4af37;
  color: #000;
  transform: translateY(-3px) scale(1.05);
}

/* Mobile responsive */
@media (max-width: 768px) {
  .ds238-cta {
    padding: 40px 20px;
  }

  .ds238-cta h3 {
    font-size: 1.6rem;
  }

  .cta-btns {
    flex-direction: column;
  }

  .cta-btns a {
    width: 100%;
  }
}

</style>
<?php $footer_path = __DIR__ . '/includes/footer.php'; if (file_exists($footer_path)) { include $footer_path; } ?>

</body>
</html>
