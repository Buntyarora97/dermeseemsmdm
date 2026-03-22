<?php
$page_title = "Men's Skin Care Doctor in Chandigarh | Dermessence";
$page_description = "Expert men's skin care at Dermessence Chandigarh. Solutions for acne, hair loss, pigmentation & more by top dermatologist Dr. Sukhmani Brar Jugpal. Book now!";
$page_keywords = "men skin care chandigarh, men dermatologist chandigarh, men skin specialist chandigarh, male skin treatment chandigarh, men hair loss chandigarh";
?>
<?php
$header_path = __DIR__ . '/includes/header.php';
if (file_exists($header_path)) { include $header_path; } else { include 'includes/header.php'; }
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
    <h2>Men</h2>
    <HR>    </HR>
    <p>In today’s world, most men don’t go to beauty salons since they’re considered feminine territory. But that doesn’t mean men don’t need help with skincare. Being groomed and presentable isn’t a requirement just to attract the opposite sex but a necessity to maintain a competitive image in a competitive world. So goes the saying “be the best man you can be”. The world expects no less of you. Looking your best not only makes you feel more confident but also helps you create an impressive persona.



</p>
    <p>
     Acne, acne scars, pigmentation and oily skin are the most common problems for younger men whereas the older men suffer more from aging of the lower face, double chin and hair loss. Men don’t need a thousand beauty products or a hundred trips to a clinic or salon to look their best. A well planned skin care regime with some occasional enhancement is all that’s needed to maintain the desired image.


 </p>
    <p>
Dr. Sukhmani Jugpal Brar with more than 20 years of experience has been treating, enhancing and maintaining aesthetics of her male patients which also includes some of the biggest stars from the entertainment and corporate world. She’s an eminent lecturer on the subject of male aesthetics and part of special teaching faculties at congresses across the world.
 </p>
  
  </div>
  <div class="content-right">
    <img src="assets/imgi_1_Men.png" alt="Clinic Procedure">
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

<br><br> 
<section class="men-concerns">
  <div class="men-overlay"></div>

  <div class="men-container">
    <h2>Concerns</h2>
    <span class="men-line"></span>

    <div class="men-boxes">

      <!-- Left Box -->
      <div class="men-box">
        <ul>
          <li>Oily skin</li>
          <li>Acne</li>
          <li>Pigmentation</li>
          <li>Open pores</li>
         
          <li>Not a well defined bone structure</li>
        
        </ul>
      </div>

      <!-- Right Box -->
      <div class="men-box">
        <ul>
        
          <li>Not a very well defined jaw bone</li>
          <li>Excessive body hair</li>
          <li>Excessive sweating</li>
          <li>Hair loss / balding</li>
        </ul>
      </div>

    </div>
  </div>
</section>
<style>
    .men-concerns {
  position: relative;
  padding: 90px 20px;
  background: url("assets/2.jpg") center/cover no-repeat;
}

.men-overlay {
  position: absolute;
  inset: 0;
  background: rgba(255, 255, 255, 0.55);
}

.men-container {
  position: relative;
  max-width: 1200px;
  margin: auto;
  text-align: center;
  z-index: 2;
}

.men-container h2 {
  font-size: 38px;
  font-weight: 500;
  margin-bottom: 12px;
  color: #111;
}

.men-line {
  display: block;
  width: 320px;
  height: 2px;
  background: #111;
  margin: 0 auto 60px;
}

.men-boxes {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 50px;
}

.men-box {
  background: rgba(255, 255, 255, 0.75);
  border-radius: 16px;
  padding: 40px 45px;
  text-align: left;
  box-shadow: 0 15px 40px rgba(0,0,0,0.12);
}

.men-box ul {
  margin: 0;
  padding-left: 20px;
}

.men-box li {
  font-size: 18px;
  line-height: 1.8;
  margin-bottom: 10px;
  color: #000;
}

</style>
   
</body>
</html>
