<?php
$title = "Expert Hair Specialist in Chandigarh | Hair Fall Treatment";
$meta_description = "Looking for the best hair specialist in Chandigarh? Dr. Sukhmani Brar Jugpal at Dermessence provides advanced PRP & hair fall treatments. Book now!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="hair specialist in chandigarh, best hair specialist in chandigarh, hair fall treatment chandigarh, prp therapy chandigarh, hair doctor chandigarh">
    <link rel="canonical" href="https://thedermessence.com/hair-specialist-in-chandigarh" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
      :root {
    --primary: #b08d57;        /* Luxury Gold */
    --secondary: #1d2936;      /* Deep Medical Blue */
    --accent: #f4efe7;         /* Soft Cream */
    --text: #3c3c3c;
    --white: #ffffff;
    --bg: #fbfaf6;
    --shadow: 0 22px 48px rgba(0,0,0,0.08);
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
    opacity: 0.96;
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
        url('attached_assets/generated_images/dermatologist_examining_patient\'s_hair_and_scalp.png');
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
            <h1 class="reveal">Best Hair Specialist in Chandigarh</h1>
            <p class="reveal">Advanced Hair Fall & Scalp Treatments by Dr. Sukhmani Brar Jugpal</p>
            <a href="#book" class="btn reveal">Book Hair Consultation</a>
        </div>
    </div>
    <div class="container">
        <!-- Section 1: Introduction -->
        <section class="flex-row reveal">
            <div class="flex-text">
                <h2>Expert Hair Specialist in Chandigarh - Dr. Sukhmani Brar Jugpal</h2>
                <p>Welcome to The Dermessence, where we provide the <strong>best hair specialist in Chandigarh</strong> services. Hair loss and scalp issues can be deeply personal and affecting. Dr. Sukhmani Brar Jugpal, our renowned <strong>hair doctor in Chandigarh</strong>, offers a medical-first approach to trichology. We understand that healthy hair starts from within, which is why our <strong>hair clinic in Chandigarh</strong> focuses on a holistic diagnosis. Whether you're dealing with sudden thinning or chronic alopecia, the <strong>top hair specialist in Chandigarh</strong> is dedicated to restoring your hair's natural vitality.</p>
                <p>Our philosophy as the <strong>best hair specialist in Chandigarh</strong> is rooted in scientific excellence. We don't just offer temporary fixes; we provide sustainable solutions. By analyzing hormonal profiles, nutritional deficiencies, and lifestyle factors, our <strong>hair doctor in Chandigarh</strong> creates a roadmap for your hair recovery. Thousands of patients trust us as the <strong>top hair clinic in Chandigarh</strong> because of our transparent and effective treatment protocols.</p>
            </div>
            <div class="flex-img">
                <img src="attached_assets/generated_images/dermatologist_examining_patient's_hair_and_scalp.png" alt="Best Hair Specialist in Chandigarh - Trichoscopy Examination">
            </div>
        </section>

        <!-- Section 2: Detailed Treatments -->
        <section class="reveal">
            <h2>Comprehensive Hair Fall Treatment in Chandigarh</h2>
            <p>Struggling with excessive shedding? Our <strong>hair clinic in Chandigarh</strong> specializes in advanced <strong>hair fall treatment in Chandigarh</strong>. We utilize US-FDA approved medical therapies and procedures to arrest hair loss and stimulate new growth. As the <strong>best hair specialist in Chandigarh</strong>, Dr. Sukhmani provides specialized care for conditions like telogen effluvium, androgenetic alopecia, and alopecia areata. Our <strong>hair doctor in Chandigarh</strong> ensures that every session is tailored to your unique hair cycle.</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <h3>PRP Therapy (Platelet-Rich Plasma)</h3>
                    <p>Experience the <strong>best PRP therapy in Chandigarh</strong>. This biological treatment uses your own growth factors to rejuvenate dormant hair follicles. Our <strong>hair specialist in Chandigarh</strong> uses high-concentration PRP kits for maximum efficacy. It's a natural way to achieve thicker hair without surgery, making us the <strong>top hair clinic in Chandigarh</strong> for non-invasive restoration.</p>
                </div>
                <div class="service-card">
                    <h3>Scalp Micro-Pigmentation & Mesotherapy</h3>
                    <p>For those looking for immediate visual density, we offer advanced mesotherapy. Our <strong>hair doctor in Chandigarh</strong> delivers potent nutrients directly to the hair roots. As the <strong>best hair specialist in Chandigarh</strong>, we ensure that these micro-injections are painless and highly effective for thinning areas. Visit the <strong>top hair clinic in Chandigarh</strong> for a consultation.</p>
                </div>
                <div class="service-card">
                    <h3>Dandruff & Scalp Disorders</h3>
                    <p>Persistent itchiness or flaking? Our <strong>hair specialist in Chandigarh</strong> provides medical-grade treatments for seborrheic dermatitis and scalp psoriasis. A healthy environment is crucial for growth, and our <strong>hair doctor in Chandigarh</strong> uses antifungal and anti-inflammatory therapies to restore scalp health. Trust the <strong>best hair clinic in Chandigarh</strong>.</p>
                </div>
            </div>
        </section>

        <!-- Section 3: The Science of Growth -->
        <section class="flex-row reverse reveal">
            <div class="flex-text">
                <h2>Why Choose the Top Hair Clinic in Chandigarh?</h2>
                <p>The Dermessence is not just a clinic; it is a center of excellence. As the <strong>best hair specialist in Chandigarh</strong>, Dr. Sukhmani Brar Jugpal stays at the cutting edge of trichological research. We believe in evidence-based medicine. When you choose our <strong>hair clinic in Chandigarh</strong>, you are choosing a facility that prioritizes long-term follicular health over quick aesthetic fixes. This is why we are widely regarded as the <strong>top hair doctor in Chandigarh</strong>.</p>
                <p>We provide detailed guidance on post-treatment care, including the right hair care products and nutritional supplements. Our <strong>hair specialist in Chandigarh</strong> monitors your progress through sequential photography and trichoscopy, ensuring that you see the results you were promised. Join the thousands who have found their confidence again with the <strong>best hair doctor in Chandigarh</strong>.</p>
            </div>
            <div class="flex-img">
                <img src="attached_assets/generated_images/healthy_glowing_skin_portrait_chandigarh.png" alt="Successful Hair Treatment Results at The Dermessence Chandigarh">
            </div>
        </section>

        <!-- Section 4: Educational Content -->
        <section class="reveal">
            <h2>Understanding the Causes of Hair Loss in Chandigarh</h2>
            <p>Chandigarh's unique environment, with its extreme seasonal changes and hard water, can take a toll on your hair. As the <strong>best hair specialist in Chandigarh</strong>, we educate our patients on how to protect their hair from these local factors. Our <strong>hair doctor in Chandigarh</strong> explains the impact of pollution and stress on the hair cycle. By choosing the <strong>top hair clinic in Chandigarh</strong>, you gain insights that help you maintain your results for a lifetime.</p>
            <p>From hormonal shifts during pregnancy to stress-related shedding, our <strong>hair specialist in Chandigarh</strong> covers all aspects of female and male hair loss. We provide a safe space to discuss your concerns and find a path forward. Don't let hair loss define you; let the <strong>best hair doctor in Chandigarh</strong> help you take control.</p>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section reveal">
            <h2>Frequently Asked Questions - Hair Specialist in Chandigarh</h2>
            <div class="faq-item">
                <h3>1. How many sessions of PRP are needed for hair growth?</h3>
                <p>Typically, our <strong>hair specialist in Chandigarh</strong> recommends 4 to 6 sessions spaced a month apart for optimal results. However, the exact number depends on your degree of thinning, as determined by the <strong>top hair doctor in Chandigarh</strong>.</p>
            </div>
            <div class="faq-item">
                <h3>2. Can hair fall be completely stopped?</h3>
                <p>Yes, with early intervention from the <strong>best hair doctor in Chandigarh</strong>, most types of hair fall can be controlled. Our <strong>hair clinic in Chandigarh</strong> focuses on stabilizing the hair cycle first before stimulating new growth.</p>
            </div>
            <div class="faq-item">
                <h3>3. Is there a permanent cure for dandruff?</h3>
                <p>While dandruff can be recurrent, our <strong>hair specialist in Chandigarh</strong> provides long-term management strategies that keep your scalp clear and healthy. Consult the <strong>top hair clinic in Chandigarh</strong> for a permanent solution plan.</p>
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
