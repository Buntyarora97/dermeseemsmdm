<?php
$title = "Best Anti-Aging & Fillers Treatment in Chandigarh";
$meta_description = "Looking for the best anti aging treatment in Chandigarh? Dr. Sukhmani Brar Jugpal at Dermessence offers advanced fillers & skin rejuvenation. Book now";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="anti aging treatment in chandigarh, best anti aging doctor chandigarh, dermal fillers chandigarh, skin rejuvenation chandigarh">
    <link rel="canonical" href="https://thedermessence.com/anti-aging-treatment-in-chandigarh" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
       :root {
    --primary: #b08d57;        /* Luxury Gold */
    --secondary: #1e2935;      /* Deep Blue-Black */
    --accent: #f5efe6;         /* Soft Cream */
    --text: #3d3d3d;
    --white: #ffffff;
    --bg: #fbfaf7;
    --shadow: 0 22px 50px rgba(0,0,0,0.08);
    --radius: 24px;
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
    font-size: clamp(2.3rem, 4vw, 3.6rem);
    letter-spacing: 0.6px;
}

h2 {
    font-size: clamp(1.8rem, 3vw, 2.5rem);
    margin-bottom: 18px;
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

/* SCROLL REVEAL */
.reveal {
    opacity: 0;
    transform: translateY(45px);
    transition: all 0.9s cubic-bezier(.22,.61,.36,1);
}
.reveal.active {
    opacity: 1;
    transform: translateY(0);
}

/* HERO */
.hero {
    height: 72vh;
    background:
        linear-gradient(120deg, rgba(0,0,0,0.6), rgba(0,0,0,0.35)),
        url('attached_assets/generated_images/healthy_glowing_skin_portrait_chandigarh.png');
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
    height: 130px;
    width: 100%;
    background: linear-gradient(to top, var(--bg), transparent);
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero-content p {
    font-size: 1.18rem;
    max-width: 760px;
    margin: 22px auto;
}

/* BUTTON */
.btn {
    display: inline-block;
    background: linear-gradient(135deg, var(--primary), #d9b77e);
    color: var(--white);
    padding: 17px 44px;
    border-radius: 60px;
    font-weight: 600;
    letter-spacing: 0.4px;
    text-decoration: none;
    box-shadow: 0 18px 40px rgba(176,141,87,0.4);
    transition: all 0.35s ease;
}

.btn:hover {
    transform: translateY(-5px) scale(1.03);
    box-shadow: 0 26px 55px rgba(176,141,87,0.55);
}

/* LAYOUT */
.container {
    max-width: 1200px;
    margin: auto;
    padding: 0 24px;
}

section {
    padding: 75px 0;
}

/* FLEX SECTIONS */
.flex-row {
    display: flex;
    gap: 65px;
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
    transition: transform 0.6s ease;
}

.flex-img img:hover {
    transform: scale(1.05);
}

/* SERVICES */
.services-grid {
    margin-top: 55px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 38px;
}

.service-card {
    background: var(--white);
    padding: 38px 32px;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
    transition: all 0.45s ease;
}

.service-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, transparent, rgba(176,141,87,0.1));
    opacity: 0;
    transition: opacity 0.4s ease;
}

.service-card:hover::before {
    opacity: 1;
}

.service-card:hover {
    transform: translateY(-12px);
}

/* FAQ */
.faq-section {
    background: linear-gradient(135deg, #ffffff, #f6f2ea);
    padding: 85px 45px;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
}

.faq-item {
    margin-top: 32px;
    padding-bottom: 26px;
    border-bottom: 1px solid #e7e1d6;
}

.faq-item h3 {
    color: var(--secondary);
    font-size: 1.12rem;
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
        padding: 60px 0;
    }
}

@media (max-width: 500px) {
    h1 {
        font-size: 2rem;
    }

    .btn {
        padding: 15px 34px;
        font-size: 0.95rem;
    }
}

    </style>
</head>
<body>
    <?php 
    $header_path = __DIR__ . '/includes/header.php';
    if (file_exists($header_path)) { include $header_path; } else { include 'header.php'; }
    ?>
    <div class="hero">
        <div class="hero-content container">
            <h1 class="reveal">Best Anti Aging Treatment in Chandigarh</h1>
            <p class="reveal">Advanced Fillers & Rejuvenation by Dr. Sukhmani Brar Jugpal</p>
            <a href="#book" class="btn reveal">Book Anti-Aging Consultation</a>
        </div>
    </div>
    <div class="container">
        <!-- Section 1: Introduction -->
        <section class="flex-row reveal">
            <div class="flex-text">
                <h2>Best Anti Aging Treatment in Chandigarh - Ageless Beauty</h2>
                <p>Welcome to The Dermessence, where we offer the <strong>best anti aging treatment in Chandigarh</strong>. Aging is a natural process, but with the expertise of Dr. Sukhmani Brar Jugpal, you can maintain a youthful and refreshed appearance for years. As the <strong>top anti aging doctor in Chandigarh</strong>, she combines medical science with an artistic eye to deliver subtle, natural-looking results. Whether you're looking or advanced <strong>dermal fillers in Chandigarh</strong>, our clinic is the region's premier destination for aesthetic excellence.</p>
                <p>Our philosophy as the <strong>best anti aging clinic in Chandigarh</strong> is to enhance your natural features, not change them. We utilize US-FDA approved products and the latest non-surgical techniques to address sagging skin, wrinkles, and loss of facial volume. This precision is what makes us the <strong>top anti aging specialist in Chandigarh</strong>. We believe that confidence comes from feeling your best, and our <strong>anti aging center in Chandigarh</strong> is here to support your journey to ageless beauty.</p>
            </div>
            <div class="flex-img">
                <img src="attached_assets/generated_images/anti-aging_botox_or_filler_procedure_closeup.png" alt="Best Anti Aging Treatment in Chandigarh - Precision Injection Procedure">
            </div>
        </section>

        <!-- Section 2: Detailed Treatments -->
        <section class="reveal">
            <h2>Comprehensive Anti Aging Solutions in Chandigarh</h2>
            <p>Restore your youthful glow with our specialized services. Our <strong>anti aging clinic in Chandigarh</strong> provides a wide array of non-invasive procedures tailored to your skin's needs. As the <strong>top anti aging doctor in Chandigarh</strong>, Dr. Sukhmani offers expertise in liquid face lifts and skin tightening therapies. We are the trusted choice for <strong>skin rejuvenation in Chandigarh</strong>, providing treatments that deliver immediate and sustainable results. Experience the <strong>best anti aging care in Chandigarh</strong> at The Dermessence.</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <h3> Wrinkle Relaxers</h3>
                    <p>Smooth out fine lines and crow's feet. Our <strong>anti aging specialist in Chandigarh</strong> uses precise techniques to relax facial muscles while maintaining natural expression. It's the most effective way to achieve a youthful look, making us the <strong>top anti aging center in Chandigarh</strong>.</p>
                </div>
                <div class="service-card">
                    <h3>Dermal Fillers & Volumizers</h3>
                    <p>Restore lost facial volume and enhance your features with <strong>dermal fillers in Chandigarh</strong>. Whether it's cheek augmentation or lip enhancement, our <strong>top anti aging doctor in Chandigarh</strong> uses premium fillers for beautiful, long-lasting results. Trust the <strong>best anti aging clinic in Chandigarh</strong>.</p>
                </div>
                <div class="service-card">
                    <h3>HIFU & Skin Tightening</h3>
                    <p>Lift and firm sagging skin with advanced <strong>HIFU treatment in Chandigarh</strong>. This non-surgical ultrasound therapy stimulates collagen production deep within the skin. As the <strong>best anti aging specialist in Chandigarh</strong>, we provide effective tightening for the face and neck. Visit the <strong>top anti aging clinic in Chandigarh</strong>.</p>
                </div>
            </div>
        </section>

        <!-- Section 3: Why Choose Us -->
        <section class="flex-row reverse reveal">
            <div class="flex-text">
                <h2>Why We Are the Top Anti Aging Specialist in Chandigarh</h2>
                <p>Choosing the right <strong>anti aging doctor in Chandigarh</strong> is crucial for safety and aesthetic harmony. At The Dermessence, we prioritize a "Less is More" approach. Dr. Sukhmani Brar Jugpal is widely recognized as the <strong>best anti aging specialist in Chandigarh</strong> due to her meticulous attention to detail and patient-first philosophy. Our <strong>anti aging clinic in Chandigarh</strong> offers a sterile, luxury environment where your comfort is our priority.</p>
                <p>We provide personalized maintenance plans to ensure your results last. Our <strong>top anti aging doctor in Chandigarh</strong> stays updated with global trends, bringing world-class rejuvenation to your doorstep. If you are searching for the <strong>best anti aging treatment near me in Chandigarh</strong>, look no further than The Dermessence in Sector 16. Join our satisfied patients and rediscover your youthful self at the <strong>top anti aging center in Chandigarh</strong>.</p>
            </div>
            <div class="flex-img">
                <img src="attached_assets/generated_images/healthy_glowing_skin_portrait_chandigarh.png" alt="Successful Anti Aging Results at The Dermessence Chandigarh">
            </div>
        </section>

        <!-- Section 4: Educational Content -->
        <section class="reveal">
            <h2>The Science of Youthful Skin in Chandigarh</h2>
            <p>As we age, our skin loses collagen and elastin, leading to wrinkles and sagging. Our <strong>top anti aging specialist in Chandigarh</strong> explains how environmental factors like UV exposure in the Tri-city area can accelerate this process. By choosing the <strong>best anti aging treatment in Chandigarh</strong>, you are investing in therapies that stimulate your skin's natural repair mechanisms. Our <strong>anti aging clinic in Chandigarh</strong> focuses on both clinical procedures and medical-grade skincare to protect your investment.</p>
            <p>From preventive to comprehensive rejuvenation for mature skin, our <strong>anti aging specialist in Chandigarh</strong> provides the right solutions for every age group. Don't let time dictate how you look. Let the <strong>best anti aging doctor in Chandigarh</strong> help you look as young as you feel. Schedule your consultation at the <strong>top anti aging clinic in Chandigarh</strong> today.</p>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section reveal">
            <h2>Frequently Asked Questions - Anti Aging in Chandigarh</h2>
            <div class="faq-item">
                <h3>1. At what age should I start anti aging treatments?</h3>
                <p>Many patients at our <strong>anti aging clinic in Chandigarh</strong> start preventive treatments in their late 20s or early 30s. However, the best time is whenever you start noticing fine lines, as determined by the <strong>top anti aging doctor in Chandigarh</strong>.</p>
            </div>
            <div class="faq-item">
                <h3>2. Are the results of dermal fillers immediate?</h3>
                <p>Yes, you can see instant results with <strong>dermal fillers in Chandigarh</strong>. However, final settling takes about 2 weeks, ensuring a natural look from the <strong>best anti aging specialist in Chandigarh</strong>.</p>
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
