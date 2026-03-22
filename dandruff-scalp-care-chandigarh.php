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
    <title>Dandruff Scalp Care in Chandigarh | Healthy Scalp Care</title>
    <meta name="description" content="Suffering from dandruff or itchy scalp? Get dermatologist-led dandruff scalp care in Chandigarh with safe, long-term treatment at Dermessence.">
    <meta name="keywords" content="Dandruff Scalp Care Chandigarh, dandruff treatment in Chandigarh, itchy scalp treatment Chandigarh, scalp care dermatologist Chandigarh, flaky scalp treatment Chandigarh">
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
                <h1>Dandruff & Scalp Care in Chandigarh</h1>
                <p>Dermatologist-Guided Treatment for Healthy, Flake-Free Scalp at Dermessence. Stop itching & hair fall.</p>
                <div style="margin-top: 2rem;">
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">👉 Complete Dermatology Services</a>
                    <a href="/hair-loss-doctor-chandigarh/" class="btn123 btn-big123">Hair Loss Treatment</a>
                    <a href="tel:+919915930506" class="btn123 btn-big123"><i class="fas fa-phone"></i> Call Now</a>
                </div>
            </div>
        </section>

        <div class="cnt123">
            <!-- Complete Introduction -->
            <div class="box123">
                <p>Searching for <strong>dandruff scalp care Chandigarh</strong>? Dermessence offers medical treatment for persistent flakes, itching, and scalp irritation.</p>
                <p>Dandruff is a medical scalp condition, not cosmetic. Our <strong>dandruff treatment in Chandigarh</strong> treats fungal overgrowth, inflammation, and oil imbalance.</p>
                <p>Recognised as trusted <strong>scalp care dermatologist Chandigarh</strong> preventing hair fall from scalp disorders.</p>
                <a href="/dermatologist-chandigarh/" class="btn123" style="margin-top: 1rem; display: inline-block;">👉 Explore our complete dermatology services</a>
            </div>

            <!-- Why Professional Scalp Care -->
            <h2 class="ttl123">Why Professional Scalp Care</h2>
            <div class="box123">
                <p>Medical <strong>dandruff scalp care Chandigarh</strong> delivers lasting results:</p>
                <ul>
                    <li>Identifies exact dandruff type</li>
                    <li>Treats fungal/inflammatory conditions</li>
                    <li>Reduces itching/redness/flakes safely</li>
                    <li>Prevents recurrence & scalp damage</li>
                    <li>Improves scalp & hair health</li>
                </ul>
                <p>Every treatment begins with detailed dermatological evaluation.</p>
            </div>

            <!-- Why Chandigarh -->
            <h2 class="ttl123">Why Chandigarh Dermatologists</h2>
            <div class="box123">
                <p>Chandigarh scalp specialists preferred because:</p>
                <ul>
                    <li>Experienced <strong>itchy scalp treatment Chandigarh</strong></li>
                    <li>Advanced scalp & hair treatments</li>
                    <li>High hygiene & patient safety</li>
                    <li>Accurate diagnosis, no trial-error</li>
                    <li>Transparent follow-up care</li>
                </ul>
            </div>

            <!-- Scalp & Hair Concerns -->
            <h2 class="ttl123">Scalp & Hair Conditions</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-bacteria"></i> Common Scalp Issues</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Dry/oily dandruff</li>
                        <li><strong>Flaky scalp treatment Chandigarh</strong></li>
                        <li>Seborrheic dermatitis</li>
                        <li>Scalp fungal infections</li>
                        <li>Scalp inflammation/redness</li>
                        <li>Dandruff-related hair fall</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-skin"></i> Related Skin Issues</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Acne & oily skin</li>
                        <li>Pigmentation/stress skin changes</li>
                    </ul>
                </div>
            </div>
            <div style="text-align: center; margin: 2rem 0;">
                <a href="/hair-loss-doctor-chandigarh/" class="btn123">Hair Loss Doctor</a>
                <a href="/hair-dermatologist-chandigarh/" class="btn123">Hair Dermatologist</a>
                <a href="/prp-hair-chandigarh/" class="btn123">PRP Therapy</a>
            </div>

            <!-- Doctor Section -->
            <h2 class="ttl123">Dr. Sukhmani – Scalp Specialist</h2>
            <div class="doc123">
                <div class="box123">
                    <h3 style="color: #D4AF37; margin-bottom: 1rem;">Scalp Care Expertise</h3>
                    <p>Dr. Sukhmani specializes in chronic dandruff and scalp disorder management.</p>
                    <p>Areas of expertise:</p>
                    <ul>
                        <li>Chronic dandruff & seborrheic dermatitis</li>
                        <li>Fungal scalp infections</li>
                        <li>Dandruff-related hair fall</li>
                        <li>Sensitive/inflamed scalp conditions</li>
                    </ul>
                </div>
                <div class="img123">
                    <img src="https://via.placeholder.com/400x500/1a1a1a/D4AF37?text=Dr.+Sukhmani" alt="Dr. Sukhmani - Scalp Care Specialist Chandigarh">
                </div>
            </div>

            <!-- 5-Step Scalp Care Process -->
            <section class="sec123">
                <div class="cnt123">
                    <h2 class="ttl123">Your Dandruff Treatment Journey</h2>
                    <div class="stp123">
                        <div class="step123">
                            <div class="num123">1</div>
                            <h4 style="color:gold;">Scalp Consultation</h4>
                            <p>Dandruff duration, itching, hair fall, previous treatments discussion.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">2</div>
                            <h4 style="color:gold;">Clinical Examination</h4>
                            <p>Dandruff type, scalp redness, infection, hair health assessment.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">3</div>
                            <h4 style="color:gold;">Personalised Plan</h4>
                            <p>Diagnosis, treatment options, therapy duration explained.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">4</div>
                            <h4 style="color:gold;">Safe Treatment</h4>
                            <p>Clinically approved dermatologist-guided scalp therapy.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">5</div>
                            <h4 style="color:gold;">Maintenance Care</h4>
                            <p>Follow-ups prevent recurrence & maintain scalp health.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 5 Advanced Scalp Treatments -->
            <h2 class="ttl123">Advanced Scalp Treatments</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-notes-medical"></i>1. Medical Management</h3>
                    <p>Control fungal overgrowth, reduce inflammation, restore balance.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-bandage"></i>2. Scalp Therapies</h3>
                    <p>Deep-clean scalp, improve circulation, enhance effectiveness.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-hair"></i>3. Hair Fall Treatment</h3>
                    <p>Strengthen roots, reduce breakage, support hair growth.</p>
                    <a href="/prp-hair-chandigarh/" class="btn123" style="margin-top: 0.5rem;">PRP Option</a>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-pills"></i>4. Seborrheic Care</h3>
                    <p>Chronic dandruff long-term control strategies.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-clock"></i>5. Maintenance Plans</h3>
                    <p>Recommended shampoos, hygiene routines, lifestyle guidance.</p>
                </div>
            </div>

            <!-- Personalized Scalp Care -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Personalised Treatment</h3>
                <p>Customised based on:</p>
                <ul>
                    <li>Dandruff type & severity</li>
                    <li>Scalp sensitivity</li>
                    <li>Hair fall association</li>
                    <li>Lifestyle/environmental factors</li>
                </ul>
                <p>Lasting relief, not short-term suppression.</p>
            </div>

            <!-- Who Should Visit -->
            <h2 class="ttl123">Who Needs Scalp Care?</h2>
            <div class="box123">
                <p>Consult if you have:</p>
                <ul>
                    <li>Persistent dandruff despite shampoos</li>
                    <li>Severe scalp itching/redness</li>
                    <li>White/yellow scalp flakes</li>
                    <li>Dandruff with hair fall</li>
                    <li>Recurring scalp irritation</li>
                </ul>
                <p>Early care prevents chronic damage & hair loss.</p>
            </div>

            <!-- Scalp Clinic Trust -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Trusted Scalp Clinic</h3>
                <p>Dermessence delivers <strong>dandruff scalp care Chandigarh</strong> through ethical medical practices and consistent scalp health results.</p>
            </div>

            <!-- FAQ Complete -->
            <h2 class="ttl123">Frequently Asked Questions</h2>
            <div class="box123">
                <div class="faq123">
                    <div class="qst123">
                        <span>Q1. Is dandruff serious?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Untreated dandruff causes scalp inflammation & hair fall.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q2. Can dandruff be cured permanently?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Controlled long-term with proper medical treatment & care.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q3. Is treatment safe?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Prescribed based on medical evaluation & scalp condition.</div>
                </div>
            </div>

            <!-- Final CTA -->
            <div class="cta-final123">
                <h3 style="color: #D4AF37; margin-bottom: 1.5rem; font-size: 1.8rem;">
                    Book Dandruff Consultation Now
                </h3>
                <p style="margin-bottom: 2rem; opacity: 0.9;">Stop flakes, itching & hair fall with medical scalp care.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; align-items: center;">
                    <a href="tel:+919915930506" class="btn123 btn-big123">
                        <i class="fas fa-phone"></i> +91-9915930506, 8847491254
                    </a>
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">All Services</a>
                    <a href="/hair-loss-doctor-chandigarh/" class="btn123 btn-big123">Hair Loss Care</a>
                    <a href="/skin-clinic-sector-21-chandigarh/" class="btn123 btn-big123">Sector 21 Clinic</a>
                </div>
                <p style="margin-top: 2rem; opacity: 0.8; font-size: 1.1rem;">
                    <strong>Dermessence – Where Science Meets Healthy Scalp & Strong Hair</strong><br>
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
