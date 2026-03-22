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
    <title>Advanced Scar Removal in Chandigarh | Dermessence</title>
    <meta name="description" content="Looking for scar removal in Chandigarh? Dermessence offers advanced dermatology-led scar treatments for acne, injury & surgical scars.">
    <meta name="keywords" content="Scar Removal Chandigarh, scar treatment clinic in Chandigarh, dermatology scar removal Chandigarh, laser scar reduction Chandigarh, surgical scar treatment Chandigarh">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #f5f5f5;
            background: #0a0a0a;
            overflow-x: hidden;
        }
        .cnt123 { max-width: 100%; margin: 0 auto; padding: 0 20px; }
        .main-content123 { min-height: 100vh; }
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
        .btn123:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(212, 175, 55, 0.5); }
        .btn-big123 { font-size: 1.1rem; padding: 1.2rem 2.5rem; }
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
        .her123 p { font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9; max-width: 800px; margin-left: auto; margin-right: auto; }
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
        .box123:hover { border-color: #D4AF37; transform: translateY(-5px); }
        ul { list-style: none; padding-left: 0; }
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
        ul li:last-child { border-bottom: none; }
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
        .crd123:hover { transform: translateY(-8px); border-color: #D4AF37; }
        .crd123 h3 { 
            color: #D4AF37; 
            margin-bottom: 1rem; 
            font-size: 1.4rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .doc123 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin: 3rem 0;
            align-items: center;
        }
        .img123 { text-align: center; }
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
        .step123:hover { transform: translateY(-5px); border-color: #D4AF37; }
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
            transition: all 0.3s ease;
        }
        .qst123:hover { background: rgba(212, 175, 55, 0.1); }
        .ans123 {
            padding: 0 2rem 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .ans123.active { max-height: 200px; padding: 1.5rem 2rem; }
        .cta-final123 {
            text-align: center;
            margin: 4rem 0;
            padding: 3rem;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(212, 175, 55, 0.05));
            border-radius: 20px;
            border: 1px solid rgba(212, 175, 55, 0.2);
        }
        .sec123 { background: #111111; padding: 80px 0; margin: 4rem 0; }
        @media (max-width: 768px) {
            .her123 h1 { font-size: 2.2rem; }
            .ttl123 { font-size: 1.8rem; }
            .doc123 { grid-template-columns: 1fr; }
            .grd123 { grid-template-columns: 1fr; }
            .btn123 { display: block; width: 100%; max-width: 300px; margin: 0.5rem auto; text-align: center; }
        }
    </style>
</head>
<body>

    <div class="main-content123">
        <!-- Hero Section -->
        <section class="her123">
            <div class="cnt123">
                <h1>Scar Removal in Chandigarh</h1>
                <p>Advanced Dermatology-Led Scar Treatment at Dermessence. Acne, injury & surgical scars.</p>
                <div style="margin-top: 2rem;">
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">👉 Complete Dermatology Services</a>
                    <a href="/pimple-scar-removal-chandigarh/" class="btn123 btn-big123">Pimple Scar Care</a>
                    <a href="tel:+919915930506" class="btn123 btn-big123"><i class="fas fa-phone"></i> Call Now</a>
                </div>
            </div>
        </section>

        <div class="cnt123">
            <!-- Complete Introduction -->
            <div class="box123">
                <p>Searching for <strong>scar removal in Chandigarh</strong>? Dermessence offers advanced, medically guided solutions for acne, injury, surgical, and burn scars.</p>
                <p>Every scar requires personalised dermatological treatment. Our <strong>scar treatment clinic in Chandigarh</strong> focuses on accurate assessment, customised planning, and gradual skin regeneration.</p>
                <p>Recognised as a trusted <strong>dermatology scar removal Chandigarh</strong> specialist using modern technologies for safe, natural results.</p>
                <a href="/dermatologist-chandigarh/" class="btn123" style="margin-top: 1rem; display: inline-block;">👉 Explore our complete dermatology services</a>
            </div>

            <!-- Why Professional Scar Removal -->
            <h2 class="ttl123">Why Professional Scar Removal</h2>
            <div class="box123">
                <p>Professional <strong>scar removal Chandigarh</strong> ensures safe, effective results:</p>
                <ul>
                    <li>Accurate identification of scar type</li>
                    <li>Correct treatment method selection</li>
                    <li>Safe improvement of skin texture</li>
                    <li>Prevention of scar worsening</li>
                    <li>Long-term skin regeneration</li>
                </ul>
                <p>Every treatment begins with detailed dermatological evaluation.</p>
            </div>

            <!-- Why Chandigarh -->
            <h2 class="ttl123">Why Chandigarh Dermatologists</h2>
            <div class="box123">
                <p>Chandigarh offers advanced scar treatments. People prefer our specialists because:</p>
                <ul>
                    <li>Experienced <strong>laser scar reduction Chandigarh</strong> experts</li>
                    <li>Advanced scar and laser treatments</li>
                    <li>High hygiene and patient safety</li>
                    <li>Evidence-based diagnosis and procedures</li>
                    <li>Transparent consultation and follow-up</li>
                </ul>
            </div>

            <!-- Scar Specific Concerns -->
            <h2 class="ttl123">All Scar Types We Treat</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-allergies"></i> Scar Conditions</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Acne scars and pimple marks</li>
                        <li>Surgical scars</li>
                        <li>Injury and trauma scars</li>
                        <li>Post-burn scars</li>
                        <li>Stretch marks</li>
                        <li>Pigmented and uneven scars</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-hair"></i> Related Concerns</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Pigmentation and uneven tone</li>
                        <li>Sensitive skin barrier damage</li>
                        <li>Hormonal hair fall</li>
                    </ul>
                    <a href="/hair-loss-doctor-chandigarh/" class="btn123" style="margin-top: 1rem;">Hair Care</a>
                </div>
            </div>
            <div style="text-align: center; margin: 2rem 0;">
                <a href="/pimple-scar-removal-chandigarh/" class="btn123">Pimple Scars</a>
                <a href="/acne-care-chandigarh/" class="btn123">Active Acne</a>
            </div>

            <!-- Doctor Section -->
            <h2 class="ttl123">Dr. Sukhmani – Scar Specialist</h2>
            <div class="doc123">
                <div class="box123">
                    <h3 style="color: #D4AF37; margin-bottom: 1rem;"><strong>Surgical Scar Treatment Chandigarh</strong></h3>
                    <p>Dr. Sukhmani specializes in scar management with clinical expertise and patient-centric care.</p>
                    <p>Areas of expertise:</p>
                    <ul>
                        <li>Acne and pimple scars</li>
                        <li>Surgical and injury scars</li>
                        <li>Pigmented and textural scars</li>
                        <li>Sensitive skin scar management</li>
                    </ul>
                </div>
                <div class="img123">
                    <img src="https://via.placeholder.com/400x500/1a1a1a/D4AF37?text=Dr.+Sukhmani" alt="Dr. Sukhmani - Scar Specialist Chandigarh">
                </div>
            </div>

            <!-- 5-Step Scar Process -->
            <section class="sec123">
                <div class="cnt123">
                    <h2 class="ttl123">Your Scar Treatment Journey</h2>
                    <div class="stp123">
                        <div class="step123">
                            <div class="num123">1</div>
                            <h4 style="color;gold;">Scar Consultation</h4>
                            <p>Scar history, cause, previous treatments discussion.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">2</div>
                            <h4 style="color;gold;">Clinical Examination</h4>
                            <p>Scar type, depth, texture, skin sensitivity assessment.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">3</div>
                            <h4 style="color;gold;">Personalised Plan</h4>
                            <p>Treatment options, timeline, sessions, post-care explained.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">4</div>
                            <h4 style="color;gold;">Safe Treatment</h4>
                            <p>Clinically approved procedures in medical environment.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">5</div>
                            <h4 style="color;gold;">Follow-Up Care</h4>
                            <p>Regular monitoring ensures gradual improvement.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 5 Advanced Scar Treatments -->
            <h2 class="ttl123">Advanced Scar Removal Treatments</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-laser-pointer"></i>1. Laser Reduction</h3>
                    <p>Improve texture, collagen remodelling, reduce pigmentation.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-needle"></i>2. Microneedling</h3>
                    <p>Boost collagen, improve shallow/moderate scars, skin smoothness.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-vial"></i>3. Chemical Peels</h3>
                    <p>Lighten dark scars, improve tone, enhance clarity.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-mix"></i>4. Combination Therapy</h3>
                    <p>Multiple treatments for optimal texture and depth improvement.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-shield-alt"></i>5. Skin Maintenance</h3>
                    <p>Medical skincare, sun protection, scar prevention strategies.</p>
                </div>
            </div>
            <a href="/skin-glow-care-chandigarh/" class="btn123" style="display: block; text-align: center; margin: 2rem auto;">Skin Glow Care</a>

            <!-- Personalized Scar Treatment -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Personalised Scar Treatment</h3>
                <p>Customised based on:</p>
                <ul>
                    <li>Scar type and severity</li>
                    <li>Skin type and sensitivity</li>
                    <li>Age and healing response</li>
                    <li>Treatment goals</li>
                </ul>
                <p>Safe, gradual improvement rather than aggressive procedures.</p>
            </div>

            <!-- Who Should Visit -->
            <h2 class="ttl123">Who Needs Scar Treatment?</h2>
            <div class="box123">
                <p>Consult if you have:</p>
                <ul>
                    <li>Acne or pimple scars</li>
                    <li>Surgical or injury scars</li>
                    <li>Pigmented or uneven scars</li>
                    <li>Scars affecting confidence</li>
                </ul>
                <p>Early dermatological treatment improves outcomes significantly.</p>
            </div>

            <!-- Scar Clinic Trust -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Trusted Scar Clinic</h3>
                <p>Dermessence delivers <strong>scar removal Chandigarh</strong> through ethical practices and consistent results for all scar types.</p>
            </div>

            <!-- FAQ Complete -->
            <h2 class="ttl123">Frequently Asked Questions</h2>
            <div class="box123">
                <div class="faq123">
                    <div class="qst123">
                        <span>Q1. Can scars be completely removed?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Scars can be significantly reduced; complete removal depends on type/depth.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q2. Safe for sensitive skin?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, treatments selected based on skin sensitivity and suitability.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q3. How long does treatment take?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Duration varies by scar severity and chosen procedure.</div>
                </div>
            </div>

            <!-- Final CTA -->
            <div class="cta-final123">
                <h3 style="color: #D4AF37; margin-bottom: 1.5rem; font-size: 1.8rem;">
                    Book Scar Removal in Chandigarh
                </h3>
                <p style="margin-bottom: 2rem; opacity: 0.9;">Dermatology-led scar treatment for confident skin.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; align-items: center;">
                    <a href="tel:+919915930506" class="btn123 btn-big123">
                        <i class="fas fa-phone"></i> +91-9915930506, 8847491254
                    </a>
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">All Services</a>
                    <a href="/pimple-scar-removal-chandigarh/" class="btn123 btn-big123">Pimple Scars</a>
                    <a href="/skin-clinic-sector-21-chandigarh/" class="btn123 btn-big123">Sector 21</a>
                </div>
                <p style="margin-top: 2rem; opacity: 0.8; font-size: 1.1rem;">
                    <strong>Dermessence – Where Science Meets Confident Skin</strong><br>
                    Phone: +91-9915930506, 8847491254 | <a href="https://thedermessence.com/" style="color: #D4AF37;">thedermessence.com</a>
                </p>
            </div>
        </div>
    </div>

    <script>
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
