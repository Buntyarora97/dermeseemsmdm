<?php
$page_title = "Collagen Facial Treatment in Chandigarh | Dermessence";
$page_description = "Boost your skin's collagen with our expert Collagen Facial at Dermessence Chandigarh – RF therapy, LED light, exfoliation for firmer, youthful skin. Book now!";
$page_keywords = "collagen facial chandigarh, collagen facial treatment, anti-aging facial chandigarh, collagen boost facial, skin firming facial chandigarh";
?>
<?php
$header_path = __DIR__ . '/includes/header.php';
if (file_exists($header_path)) { include $header_path; } else { include 'includes/header.php'; }
?>

<br><br><br><br><br>

<style>
    body { background-color: #000; color: #d4af37; font-family: 'Playfair Display', serif; margin: 0; padding: 0; }
    .container { max-width: 100%; margin: 0 auto; padding: 50px 20px; line-height: 1.6; }
    .hero-img { width: 100%; height: 400px; object-fit: cover; border: 1px solid #d4af37; border-radius: 15px; margin-bottom: 30px; }
    h1 { color: #d4af37; border-bottom: 1px solid #d4af37; padding-bottom: 10px; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 2px; }
    h2 { color: #fff; margin-top: 40px; border-left: 4px solid #d4af37; padding-left: 15px; }
    p { color: #ccc; margin-bottom: 20px; }
    .step-box { background: #111; border: 1px solid #333; padding: 20px; margin-bottom: 20px; border-radius: 10px; }
    .step-title { color: #d4af37; font-weight: bold; font-size: 1.2rem; margin-bottom: 10px; display: block; }
    ul { list-style-type: none; padding: 0; }
    li { margin-bottom: 12px; color: #ccc; padding-left: 25px; position: relative; }
    li::before { content: "✦"; color: #d4af37; position: absolute; left: 0; }
    .back-link { display: inline-block; margin-top: 40px; color: #d4af37; text-decoration: none; border: 1px solid #d4af37; padding: 12px 30px; border-radius: 5px; transition: all 0.3s; }
    .back-link:hover { background: #d4af37; color: #000; }
    .highlight { color: #d4af37; font-weight: bold; }
    .section-split { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-top: 40px; }
    @media (max-width: 768px) { .section-split { grid-template-columns: 1fr; } }
</style>

<div class="container">
    <img src="attached_assets/generated_images/luxury_facial_treatment_process.png" alt="Collagen Facial" class="hero-img">
    <h1>Collagen Facial</h1>
    <p>In the quest for youthful, radiant skin, a <span class="highlight">Collagen Facial</span> is a game-changer. Designed to enhance your skin's elasticity, reduce fine lines, and improve overall texture, this treatment nourishes your skin deeply while stimulating collagen production.</p>
    
    <h2>What Is a Collagen Facial?</h2>
    <p>A collagen facial is a non-invasive treatment designed to rejuvenate your skin by boosting its natural collagen production. Collagen is a vital protein responsible for maintaining skin firmness, elasticity, and hydration. However, as we age, collagen levels naturally decline, leading to wrinkles, sagging, and dullness. This facial helps combat those effects, leaving your skin plump, hydrated, and glowing.</p>

    <h2>What steps are involved?</h2>
    <div class="step-box">
        <span class="step-title">1. Cleansing</span>
        <p>A gentle yet effective cleanser removes dirt, makeup, and impurities, preparing your skin to absorb active ingredients.</p>
    </div>
    <div class="step-box">
        <span class="step-title">2. Radio Frequency (RF) Therapy</span>
        <p>Innovative heat technology stimulates collagen production in deeper layers, tightening skin and smoothing fine lines.</p>
    </div>
    <div class="step-box">
        <span class="step-title">3. Exfoliation with a Special Probe</span>
        <p>Advanced probe gently buffs away dull skin, enhancing texture and allowing better penetration of boosters.</p>
    </div>
    <div class="step-box">
        <span class="step-title">4. LED Light Therapy</span>
        <p>Specific wavelengths stimulate collagen, reduce inflammation, and brighten your complexion for a radiant glow.</p>
    </div>

    <div class="section-split">
        <div>
            <h2>Benefits</h2>
            <ul>
                <li>Firms and Lifts the Skin</li>
                <li>Improves Texture</li>
                <li>Hydrates and Nourishes</li>
                <li>Reduces Fine Lines and Wrinkles</li>
                <li>Brightens the Complexion</li>
            </ul>
        </div>
        <div>
            <h2>Who Is It For?</h2>
            <p>Ideal for anyone experiencing early signs of aging, dryness, or dullness. Especially effective for enhancing natural glow without invasive procedures.</p>
        </div>
    </div>

    <h2>Pre-Procedure Instructions</h2>
    <ul>
        <li>Limit sun exposure for 1-2 weeks. Use SPF 30+.</li>
        <li>Stop retinoids/exfoliants 3-5 days before.</li>
        <li>Avoid smoking/alcohol 48 hours before.</li>
    </ul>

    <h2>Post-Procedure Care</h2>
    <ul>
        <li>Apply SPF 50+ and avoid direct sun.</li>
        <li>Skip makeup and actives for 24-72 hours.</li>
        <li>Avoid sweating/showering for 8 hours.</li>
    </ul>

    <a href="index.php" class="back-link">Return to Home</a>
</div>

<section style="background:linear-gradient(180deg,#f7f7f7,#ffffff);padding:80px 20px;font-family:'Poppins',sans-serif;">
    <div style="max-width:1100px;margin:auto;text-align:center;margin-bottom:50px;">
        <h2 style="font-size:34px;font-weight:700;color:#111;margin-bottom:12px;letter-spacing:.5px;">
            Book Appointment with Skin & Hair Specialist in Chandigarh
        </h2>
        <p style="color:#666;font-size:16px;max-width:720px;margin:auto;line-height:1.8;">
            Experience advanced dermatology, laser, and aesthetic treatments at Dermessence Clinic. 
            Connect with our experts for personalized consultation and appointment booking.
        </p>
    </div>
    <div style="display:flex;gap:30px;flex-wrap:wrap;justify-content:center;max-width:1100px;margin:auto;">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/contact_section/contact-form.php'; ?>
    </div>
</section>

<?php
$footer_path = __DIR__ . '/includes/footer.php';
if (file_exists($footer_path)) { include $footer_path; } else { include 'includes/footer.php'; }
?>
<script>
    function reveal() {
        var reveals = document.querySelectorAll(".reveal");
        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            if (elementTop < windowHeight - 150) { reveals[i].classList.add("active"); }
        }
    }
    window.addEventListener("scroll", reveal);
    reveal();
</script>
