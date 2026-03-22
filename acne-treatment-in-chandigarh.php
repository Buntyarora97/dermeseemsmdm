<?php
include 'dermessence_optimizer.php';
$title = "Best Acne & Pimple Scar Treatment in Chandigarh Dermessence";
$meta_description = "Searching for the best acne treatment in Chandigarh? Dr. Sukhmani Brar Jugpal at Dermatologist offers advanced pimple & scar removal. Book today!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="acne treatment in chandigarh, best acne doctor chandigarh, pimple treatment chandigarh, acne scar removal chandigarh, skin specialist for acne chandigarh">
    <link rel="canonical" href="https://thedermessence.com/acne-treatment-in-chandigarh" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
      :root {
    --primary: #b08d57;          /* Luxury Gold */
    --secondary: #1f2a36;        /* Deep Medical Blue */
    --accent: #f4efe8;           /* Soft Cream */
    --text: #3f3f3f;
    --white: #ffffff;
    --bg: #faf9f6;
    --shadow: 0 20px 45px rgba(0,0,0,0.08);
    --radius: 22px;
}

/* RESET */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.85;
    color: var(--text);
    background: linear-gradient(180deg, #ffffff 0%, var(--bg) 100%);
    overflow-x: hidden;
}

/* TYPOGRAPHY */
h1, h2, h3 {
    font-family: 'Playfair Display', serif;
    color: var(--secondary);
}

h1 {
    font-size: clamp(2.2rem, 4vw, 3.4rem);
    letter-spacing: 0.5px;
}

h2 {
    font-size: clamp(1.7rem, 3vw, 2.4rem);
    margin-bottom: 15px;
}

h3 {
    font-size: 1.25rem;
    margin-bottom: 10px;
}

p {
    font-size: 1.02rem;
    opacity: 0.95;
}

strong {
    color: var(--primary);
    font-weight: 600;
}

/* ANIMATION */
.reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.9s cubic-bezier(.22,.61,.36,1);
}
.reveal.active {
    opacity: 1;
    transform: translateY(0);
}

/* HERO */
.hero {
    height: 70vh;
    background:
        linear-gradient(120deg, rgba(0,0,0,0.6), rgba(0,0,0,0.3)),
        url('attached_assets/generated_images/dermatologist_consultation_in_chandigarh.png');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: var(--white);
    position: relative;
}

.hero::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    height: 120px;
    width: 100%;
    background: linear-gradient(to top, var(--bg), transparent);
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero-content p {
    font-size: 1.15rem;
    max-width: 700px;
    margin: 20px auto;
    opacity: 0.95;
}

/* BUTTON */
.btn {
    display: inline-block;
    background: linear-gradient(135deg, var(--primary), #d6b37a);
    color: var(--white);
    padding: 16px 40px;
    border-radius: 60px;
    font-weight: 600;
    letter-spacing: 0.4px;
    text-decoration: none;
    box-shadow: 0 15px 35px rgba(176,141,87,0.35);
    transition: all 0.35s ease;
}

.btn:hover {
    transform: translateY(-4px) scale(1.02);
    box-shadow: 0 20px 45px rgba(176,141,87,0.45);
}

/* LAYOUT */
.container {
    max-width: 1180px;
    margin: auto;
    padding: 0 22px;
}

section {
    padding: 70px 0;
}

/* FLEX SECTIONS */
.flex-row {
    display: flex;
    gap: 60px;
    align-items: center;
}

.flex-row.reverse {
    flex-direction: row-reverse;
}

.flex-text {
    flex: 1;
}

.flex-img {
    flex: 1;
}

.flex-img img {
    width: 100%;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    transition: transform 0.5s ease;
}

.flex-img img:hover {
    transform: scale(1.04);
}

/* SERVICES */
.services-grid {
    margin-top: 50px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 35px;
}

.service-card {
    background: var(--white);
    padding: 35px 30px;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
}

.service-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, transparent, rgba(176,141,87,0.08));
    opacity: 0;
    transition: opacity 0.4s ease;
}

.service-card:hover::before {
    opacity: 1;
}

.service-card:hover {
    transform: translateY(-10px);
}

/* FAQ */
.faq-section {
    background: linear-gradient(135deg, #ffffff, #f7f4ee);
    padding: 80px 40px;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
}

.faq-item {
    margin-top: 30px;
    padding-bottom: 25px;
    border-bottom: 1px solid #e8e3da;
}

.faq-item h3 {
    color: var(--secondary);
    font-size: 1.1rem;
}

.faq-item p {
    margin-top: 10px;
}

/* RESPONSIVE */
@media (max-width: 900px) {
    .hero {
        height: 65vh;
    }

    .flex-row,
    .flex-row.reverse {
        flex-direction: column;
    }

    section {
        padding: 55px 0;
    }
}

@media (max-width: 500px) {
    h1 {
        font-size: 2rem;
    }

    .btn {
        padding: 14px 32px;
        font-size: 0.95rem;
    }
}
  </style>
   <?php 
    $header_path = __DIR__ . '/includes/header.php';
    if (file_exists($header_path)) { include $header_path; } else { include 'header.php'; }
    ?>
</head>
<body>
   
    <div class="hero">
        <div class="hero-content container">
            <h1 class="reveal">Best Acne Treatment in Chandigarh</h1>
            <p class="reveal">Effective Pimple & Acne Scar Removal by Expert Dermatologists</p>
            <a href="#book" class="btn reveal">Book Acne Consultation</a>
        </div>
    </div>
    <div class="container">
        <!-- Section 1: Introduction -->
        <section class="flex-row reveal">
            <div class="flex-text">
                <h2>Best Acne Treatment in Chandigarh - Clear Skin Experts</h2>
                <p>Welcome to The Dermessence, your specialized center for the <strong>best acne treatment in Chandigarh</strong>. Acne is not just a skin condition; it's an emotional journey. Led by Dr. Sukhmani Brar Jugpal, our clinic offers medical-grade solutions for pimples and scars. As the <strong>top acne doctor in Chandigarh</strong>, we understand the complexities of adult and teenage acne. Our mission is to provide you with a scientific path to clear, radiant skin. If you're looking for an <strong>acne specialist in Chandigarh</strong>, you've found the region's most trusted dermatology clinic.</p>
                <p>Our approach as the <strong>best acne treatment center in Chandigarh</strong> is rooted in evidence-based medicine. We diagnose the root cause—be it hormonal, bacterial, or lifestyle-driven. This thoroughness is what makes us the <strong>best dermatologist in Chandigarh for acne</strong>. We believe that everyone deserves to feel confident in their skin, and our <strong>acne clinic in Chandigarh</strong> is dedicated to making that a reality for you.</p>
            </div>
            <div class="flex-img">
                <img src="attached_assets/generated_images/close-up_of_acne_treatment_being_performed.png" alt="Best Acne Treatment in Chandigarh - Clinical Peel Procedure">
            </div>
        </section>

        <!-- Section 2: Detailed Treatments -->
        <section class="reveal">
            <h2>Advanced Acne and Scar Removal in Chandigarh</h2>
            <p>Stop the cycle of breakouts. Our <strong>acne clinic in Chandigarh</strong> provides a comprehensive suite of treatments designed to heal active acne and prevent new ones. As the <strong>top acne doctor in Chandigarh</strong>, Dr. Sukhmani specializes in high-performance therapies that go beyond surface care. We are the preferred choice for <strong>acne scar removal in Chandigarh</strong>, using technology that restores your skin's natural texture. Trust the <strong>best skin specialist for acne in Chandigarh</strong> for visible and lasting results.</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <h3>Chemical Peels for Acne</h3>
                    <p>Revitalize your skin with the <strong>best chemical peels in Chandigarh</strong>. Our <strong>acne doctor in Chandigarh</strong> uses specialized formulations to unclog pores and reduce inflammation. These medical-grade peels are safer and more effective than salon treatments, solidifying our status as the <strong>top acne clinic in Chandigarh</strong>.</p>
                </div>
                <div class="service-card">
                    <h3>Laser Scar Revision</h3>
                    <p>Achieve smooth skin with <strong>laser acne scar removal in Chandigarh</strong>. We use US-FDA approved Fractional lasers to stimulate collagen and fill in deep scars. Our <strong>best dermatologist in Chandigarh for acne</strong> ensures precision and safety, making us the <strong>top acne treatment provider in Chandigarh</strong>.</p>
                </div>
                <div class="service-card">
                    <h3>Comedone Extraction & Cleanup</h3>
                    <p>For blackheads and whiteheads, our <strong>acne specialist in Chandigarh</strong> provides professional extractions in a sterile environment. This prevents infection and further scarring, which is why we are considered the <strong>best acne clinic in Chandigarh</strong> for deep pore cleansing.</p>
                </div>
            </div>
        </section>

        <!-- Section 3: Why Choose Us -->
        <section class="flex-row reverse reveal">
            <div class="flex-text">
                <h2>Why We Are the Top Acne Specialist in Chandigarh</h2>
                <p>Choosing The Dermessence means choosing expertise. As the <strong>best acne treatment doctor in Chandigarh</strong>, Dr. Sukhmani Brar Jugpal has a proven track record of managing resistant acne cases. Our <strong>acne clinic in Chandigarh</strong> is equipped with the latest diagnostic and therapeutic tools. We don't just treat the skin; we treat the person. This patient-first philosophy is why we are ranked as the <strong>top acne doctor in Chandigarh</strong> year after year.</p>
                <p>We provide customized home-care regimens that complement our clinical treatments. Our <strong>skin doctor for acne in Chandigarh</strong> monitors your progress closely, ensuring that your journey to clear skin is smooth and successful. If you are searching for the <strong>best acne treatment near me in Chandigarh</strong>, visit us in Sector 16 and see the difference professional care makes.</p>
            </div>
            <div class="flex-img">
                <img src="attached_assets/generated_images/dermatologist_consultation_in_chandigarh.png" alt="Expert Acne Consultation at The Dermessence Chandigarh">
            </div>
        </section>

        <!-- Section 4: Science & Education -->
        <section class="reveal">
            <h2>The Science Behind Acne Management in Chandigarh</h2>
            <p>Understanding acne is the first step to beating it. Our <strong>top acne doctor in Chandigarh</strong> explains how excessive sebum, clogged follicles, and P. acnes bacteria lead to breakouts. By addressing each of these factors, the <strong>best acne treatment in Chandigarh</strong> ensures that your results are sustainable. We also focus on the role of diet and stress, providing a holistic approach that sets us apart as the <strong>top acne clinic in Chandigarh</strong>.</p>
            <p>Whether it's hormonal acne in adults or teenage breakouts, our <strong>acne specialist in Chandigarh</strong> provides the right guidance and treatment. Don't let acne scars be a permanent reminder of your past skin issues. Let the <strong>best dermatologist in Chandigarh for acne</strong> restore your skin and your confidence today. Join the community of clear skin at the <strong>top acne center in Chandigarh</strong>.</p>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section reveal">
            <h2>Frequently Asked Questions - Acne Treatment in Chandigarh</h2>
            <div class="faq-item">
                <h3>1. How long does it take to see results from acne treatment?</h3>
                <p>Most patients at our <strong>acne clinic in Chandigarh</strong> see visible improvement within 4 to 8 weeks. However, complete clearance depends on the severity of the acne, as determined by the <strong>top acne doctor in Chandigarh</strong>.</p>
            </div>
            <div class="faq-item">
                <h3>2. Are acne scar treatments permanent?</h3>
                <p>Yes, treatments like laser resurfacing and microneedling provided by our <strong>best acne treatment specialist in Chandigarh</strong> yield permanent improvements in skin texture and scar depth.</p>
            </div>
            <div class="faq-item">
                <h3>3. Can diet affect my acne?</h3>
                <p>Absolutely. Our <strong>acne doctor in Chandigarh</strong> provides nutritional advice as part of the <strong>best acne treatment in Chandigarh</strong>, focusing on low-glycemic foods that help reduce breakouts. Trust the <strong>top acne clinic in Chandigarh</strong>.</p>
            </div>
        </section>
    </div>
    <?php 
    $footer_path = __DIR__ . '/includes/footer.php';
    if (file_exists($footer_path)) { include $footer_path; } else { include 'footer.php'; }
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
</body>
</html>
