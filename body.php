<?php
$page_title = "Body Skin Treatments in Chandigarh | Dermessence";
$page_description = "Expert body skin care treatments at Dermessence Chandigarh. Address pigmentation, hair removal, skin concerns and more by top dermatologists. Book now!";
$page_keywords = "body skin treatment chandigarh, body dermatology chandigarh, skin care body chandigarh, dermessence body treatments";
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
    <h2>Body</h2>
    <HR>    </HR>
    <p>They say, we were carved in the shape of Gods. Perhaps that is the reason we dream of having beautiful bodies like those of Greek Gods and Goddesses. But all of us have not been lucky enough to inherit the perfect bodies that we desire.


</p>
    <p>
     A gorgeous body is not just a product of photoshopped pictures. It is a work of art that can be easily attained following the correct science. Dr.Sukhmani Brar Jugpal Brar has worked wonders for many renowned celebrities to help them attain beautifully sculpted bodies and glistening skin.


 </p>
    <p>
Every skin treatment and procedure at her clinic is conducted under strict medical supervision using state of the art technology to achieve the best possible results.
 </p>
  
  </div>
  <div class="content-right">
    <img src="assets/Body.png" alt="Clinic Procedure">
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
<section class="body-concerns">
  <div class="body-overlay"></div>

  <div class="body-container">
    <h2>Concerns</h2>
    <span class="body-line"></span>

    <div class="body-boxes">
      
      <!-- Left Box -->
      <div class="body-box">
        <ul>
          <li>Skin</li>
          <li>Acne On Back</li>
          <li>Boils On The Butt</li>
          <li>Pigmentation</li>
          <li>Tan</li>
          <li>Excessively Dry Skin</li>
          <li>Keratosis Pilaris</li>
          <li>Skin Tag</li>
        </ul>
      </div>

      <!-- Right Box -->
      <div class="body-box">
        <ul>
      
        
          <li>Stretch Marks</li>
          <li>Excessive Hair</li>
         
          <li>Excessive Sweating</li>
        </ul>
      </div>

    </div>
  </div>
</section>
<style>
    .body-concerns {
  position: relative;
  padding: 90px 20px;
  background: url("assets/cosmetologist-cleaning-woman-forehead-with-ultrasonic-scrubber.jpg") center/cover no-repeat;
}

.body-overlay {
  position: absolute;
  inset: 0;
  background: rgba(255, 255, 255, 0.6);
}

.body-container {
  position: relative;
  max-width: 1200px;
  margin: auto;
  text-align: center;
  z-index: 2;
}

.body-container h2 {
  font-size: 38px;
  font-weight: 500;
  margin-bottom: 12px;
  color: #111;
}

.body-line {
  display: block;
  width: 320px;
  height: 2px;
  background: #111;
  margin: 0 auto 60px;
}

.body-boxes {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 50px;
}

.body-box {
  background: rgba(255, 255, 255, 0.75);
  border-radius: 16px;
  padding: 40px 45px;
  text-align: left;
  box-shadow: 0 15px 40px rgba(0,0,0,0.12);
}

.body-box ul {
  margin: 0;
  padding-left: 20px;
}

.body-box li {
  font-size: 18px;
  line-height: 1.8;
  margin-bottom: 10px;
  color: #000;
}

</style>
   
</body>
</html>
