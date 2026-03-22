<?php  

    $header_path = __DIR__ . '/includes/header.php';
    if (file_exists($header_path)) { 
        include $header_path; 
    } else { 
        include 'header.php'; 
    }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Dermatologist in Chandigarh | Dermessence Skin & Hair Clinic</title>
    <meta name="description" content="Looking for the best dermatologist in Chandigarh? Dermessence offers ethical skin & hair care with clear diagnosis, follow-ups and realistic results.">
    <meta name="keywords" content="Best Dermatologist in Chandigarh, top dermatologist in Chandigarh, best skin doctor in Chandigarh, hair fall specialist in Chandigarh, acne scar treatment Chandigarh, dermatologist near me">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #f5f5f5;
            background: #0a0a0a;
            overflow-x: hidden;
        }
        .cnt123 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .main-content123 {
            min-height: 100vh;
        }
        .btn123 {
            display: inline-block;
            background: linear-gradient(45deg, #D4AF37, #E6C147);
            color: #000;
            padding: 0.8rem 1.8rem;
            text-decoration: none;
            font-weight: 600;
            border-radius: 25px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(212, 175, 55, 0.3);
            font-size: 0.95rem;
            margin: 0.3rem;
        }
        .btn123:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.5);
            color: #000;
        }
        .btn-big123 {
            font-size: 1.1rem;
            padding: 1.2rem 2.5rem;
        }
        /* Hero Section */
        .her123 {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 50%, #0a0a0a 100%);
            padding: 80px 0 60px;
            text-align: center;
        }
        .her123 h1 {
            font-size: 3.2rem;
            font-weight: 700;
            margin-bottom: 1.2rem;
            background: linear-gradient(45deg, #D4AF37, #FADFA8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 30px rgba(212, 175, 55, 0.5);
        }
        /* Section Styles */
        .ttl123 {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin: 4rem 0 3rem;
            background: linear-gradient(45deg, #D4AF37, #FADFA8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .box123 {
            background: rgba(26, 26, 26, 0.8);
            border: 1px solid rgba(212, 175, 55, 0.2);
            border-radius: 20px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
        }
        .box123:hover {
            border-color: #D4AF37;
            transform: translateY(-5px);
        }
        ul {
            list-style: none;
            padding-left: 0;
        }
        ul li {
            padding: 1rem 0;
            position: relative;
            padding-left: 2rem;
            border-bottom: 1px solid rgba(212, 175, 55, 0.1);
        }
        ul li::before {
            content: '✦';
            position: absolute;
            left: 0;
            color: #D4AF37;
            font-size: 1rem;
        }
        .grd123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }
        .crd123 {
            background: rgba(26, 26, 26, 0.7);
            padding: 2rem;
            border-radius: 15px;
            border: 1px solid rgba(212, 175, 55, 0.15);
            transition: all 0.3s ease;
        }
        .crd123:hover {
            transform: translateY(-8px);
            border-color: #D4AF37;
        }
        .crd123 h3 {
            color: #D4AF37;
            margin-bottom: 1rem;
            font-size: 1.4rem;
        }
        .doc123 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin: 3rem 0;
            align-items: center;
        }
        .img123 img {
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            border: 2px solid rgba(212, 175, 55, 0.3);
        }
        .stp123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin: 3rem 0;
        }
        .step123 {
            background: rgba(212, 175, 55, 0.08);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            border: 1px solid rgba(212, 175, 55, 0.2);
            transition: all 0.3s ease;
        }
        .step123:hover {
            transform: translateY(-5px);
            border-color: #D4AF37;
        }
        .num123 {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, #D4AF37, #E6C147);
            color: #000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin: 0 auto 1rem;
            font-size: 1.2rem;
        }
        .link-sec123 {
            text-align: center;
            margin: 3rem 0;
            padding: 2rem;
            background: rgba(212, 175, 55, 0.05);
            border-radius: 15px;
        }
        .faq123 {
            background: rgba(18, 18, 18, 0.9);
            margin-bottom: 1rem;
            border-radius: 10px;
            border-left: 4px solid #D4AF37;
            overflow: hidden;
        }
        .qst123 {
            padding: 1.5rem 2rem;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(212, 175, 55, 0.05);
        }
        .ans123 {
            padding: 0 2rem 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .ans123.active {
            max-height: 150px;
            padding: 1.5rem 2rem;
        }
        .cta-final123 {
            text-align: center;
            margin: 4rem 0;
            padding: 3rem;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(212, 175, 55, 0.05));
            border-radius: 20px;
            border: 1px solid rgba(212, 175, 55, 0.2);
        }
        @media (max-width: 768px) {
            .her123 h1 { font-size: 2.2rem; }
            .ttl123 { font-size: 1.8rem; }
            .doc123 { grid-template-columns: 1fr; }
            .grd123 { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <div class="main-content123">
        <!-- Hero Section -->
        <section class="her123">
            <div class="cnt123">
                <h1>Best Dermatologist in Chandigarh</h1>
                <p>Advanced Skin, Hair & Aesthetic Care at Dermessence Skin & Hair Clinic</p>
                <div style="margin-top: 2rem;">
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">👉 Explore Core Services</a>
                    <a href="tel:+919915930506" class="btn123 btn-big123"><i class="fas fa-phone"></i> Book Now</a>
                </div>
            </div>
        </section>

        <div class="cnt123">
            <!-- Intro -->
            <div class="box123">
                <p>Healthy, clear skin reflects overall health, confidence, and well-being. Searching for the <strong>best dermatologist in Chandigarh</strong>? Dermessence offers comprehensive solutions with medical expertise, advanced technology, and ethical practices for <a href="/acne-care-chandigarh/">acne & scar treatment</a>, pigmentation, and hair concerns.</p>
            </div>

            <!-- Why Dermessence -->
            <h2 class="ttl123">Why Dermessence = Best Dermatologist in Chandigarh</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-user-md"></i> Expert Specialists</h3>
                    <p>Qualified dermatologists with clinical precision and patient-centric care</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-microscope"></i> Advanced Technology</h3>
                    <p>Latest skin, hair, and laser treatments with evidence-based protocols</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-shield-alt"></i> Ethical Care</h3>
                    <p>Honest diagnosis, no unnecessary treatments, long-term results</p>
                </div>
            </div>

            <!-- Why Chandigarh -->
            <h2 class="ttl123">Why Choose Chandigarh Dermatologists</h2>
            <div class="box123">
                <ul>
                    <li><strong>Top dermatologist in Chandigarh</strong> - Skilled medical professionals</li>
                    <li>Advanced <a href="/dermatologist-chandigarh/">aesthetic treatments</a> & laser technology</li>
                    <li>High hygiene & patient safety standards</li>
                    <li>Personalized care for <a href="/acne-care-chandigarh/">acne scars</a> & skin concerns</li>
                    <li><a href="/hair-loss-doctor-chandigarh/">Hair fall specialist</a> expertise available</li>
                </ul>
            </div>

            <!-- Skin Concerns -->
            <h2 class="ttl123">Common Skin Concerns We Treat</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-allergies"></i> Skin Conditions</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Acne & recurring pimples</li>
                        <li><a href="/pimple-scar-removal-chandigarh/">Acne scars</a> & marks</li>
                        <li>Pigmentation & melasma</li>
                        <li><a href="/scar-removal-chandigarh/">Scar treatment</a></li>
                        <li>Eczema & psoriasis</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-hair"></i> Hair Problems</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li><a href="/hair-loss-doctor-chandigarh/">Excessive hair fall</a></li>
                        <li>Pattern baldness (men/women)</li>
                        <li>Dandruff & scalp issues</li>
                        <li><strong>Hair fall specialist in Chandigarh</strong></li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-magic"></i> Aesthetic Care</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li><a href="/skin-glow-care-chandigarh/">Skin glow treatments</a></li>
                        <li><a href="/open-pores-care-chandigarh/">Open pores</a> solutions</li>
                        <li>Anti-aging & rejuvenation</li>
                        <li>Fine lines & wrinkles</li>
                    </ul>
                </div>
            </div>

            <div class="link-sec123">
                <a href="/acne-care-chandigarh/" class="btn123">Acne Care</a>
                <a href="/pimple-scar-removal-chandigarh/" class="btn123">Scar Removal</a>
                <a href="/hair-loss-doctor-chandigarh/" class="btn123">Hair Loss</a>
                <a href="/skin-glow-care-chandigarh/" class="btn123">Skin Glow</a>
            </div>

            <!-- Doctor Section -->
            <h2 class="ttl123">Meet Dr. Sukhmani - Lead Dermatologist</h2>
            <div class="doc123">
                <div class="box123">
                    <h3 style="color: #D4AF37; margin-bottom: 1rem;">Best Skin Doctor in Chandigarh</h3>
                    <p>Dr. Sukhmani specializes in clinical & aesthetic dermatology with patient-first approach.</p>
                    <ul>
                        <li><strong>Clinical dermatology</strong> expertise</li>
                        <li><a href="/acne-care-chandigarh/">Acne & scar management</a></li>
                        <li><a href="/hair-loss-doctor-chandigarh/">PRP hair therapy</a></li>
                        <li>Laser skin rejuvenation</li>
                    </ul>
                </div>
                <div class="img123">
                    <img src="https://via.placeholder.com/400x500/1a1a1a/D4AF37?text=Dr.+Sukhmani" alt="Dr. Sukhmani">
                </div>
            </div>

            <!-- Visit Process -->
            <section style="background: #111111; padding: 80px 0; margin: 4rem 0;">
                <div class="cnt123">
                    <h2 class="ttl123">What Happens at Your Visit</h2>
                    <div class="stp123">
                        <div class="step123">
                            <div class="num123">1</div>
                            <h4 style="color: #f5f5f5;">Consultation</h4>
                            <p>Detailed discussion of concerns & history</p>
                        </div>
                        <div class="step123">
                            <div class="num123">2</div>
                            <h4 style="color: #f5f5f5;">Examination</h4>
                            <p>Skin/scalp analysis for diagnosis</p>
                        </div>
                        <div class="step123">
                            <div class="num123">3</div>
                            <h4 style="color: #f5f5f5;">Treatment Plan</h4>
                            <p>Customized options & expected results</p>
                        </div>
                        <div class="step123">
                            <div class="num123">4</div>
                            <h4 style="color: #f5f5f5;">Treatment</h4>
                            <p>Safe procedures in hygienic setup</p>
                        </div>
                        <div class="step123">
                            <div class="num123">5</div>
                            <h4 style="color: #f5f5f5;">Follow-up</h4>
                            <p>Skincare guidance & monitoring</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Grid -->
            <h2 class="ttl123">Complete Dermatology Services</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-notes-medical"></i>Clinical Dermatology</h3>
                    <p>Acne, eczema, psoriasis, infections treated medically</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-bandage"></i>Acne & Scars</h3>
                    <p><a href="/pimple-scar-removal-chandigarh/">Pimple scars</a>, peels, microneedling, lasers</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-palette"></i>Pigmentation</h3>
                    <p>Melasma, tanning, dark spots treatment</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-syringe"></i>Hair Loss</h3>
                    <p><a href="/hair-loss-doctor-chandigarh/">PRP therapy</a> & regrowth treatment</p>
                </div>
            </div>

            <!-- FAQ -->
            <h2 class="ttl123">Frequently Asked Questions</h2>
            <div class="box123">
                <div class="faq123">
                    <div class="qst123">
                        <span>Q1. Why Dermessence = <strong>best dermatologist in Chandigarh</strong>?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">
                        Experienced specialists, advanced treatments, ethical practices, <a href="/dermatologist-chandigarh/">personalized care</a>.
                    </div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q2. Safe for sensitive skin & <strong>dermatologist near me</strong>?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, customized treatments, medically approved, conveniently located.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q3. Medical + cosmetic dermatology?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Complete care: clinical skin, <a href="/hair-loss-doctor-chandigarh/">hair solutions</a>, aesthetic procedures.</div>
                </div>
            </div>

            <!-- Final CTA -->
            <div class="cta-final123">
                <h3 style="color: #D4AF37; margin-bottom: 1.5rem; font-size: 1.8rem;">
                    Book with <strong>Best Dermatologist in Chandigarh</strong>
                </h3>
                <div>
                    <a href="tel:+919915930506" class="btn123 btn-big123">
                        <i class="fas fa-phone"></i> +91-9915930506, 8847491254
                    </a>
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">All Services</a>
                </div>
                <p style="margin-top: 1.5rem; opacity: 0.8;">
                    Dermessence – Where Science Meets Skin Confidence<br>
                    <a href="https://thedermessence.com/" style="color: #D4AF37; font-weight: 500;">thedermessence.com</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // FAQ Toggle
        document.querySelectorAll('.qst123').forEach(q => {
            q.addEventListener('click', () => {
                const ans = q.nextElementSibling;
                const icon = q.querySelector('i');
                ans.classList.toggle('active');
                icon.style.transform = ans.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
            });
        });
    </script>

<?php 
    $footer_path = __DIR__ . '/includes/footer.php';
    if (file_exists($footer_path)) { 
        include $footer_path; 
    } else { 
        include 'footer.php'; 
    }
?>  
