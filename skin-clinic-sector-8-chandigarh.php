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
    <title>Skin Clinic in Sector 8 Chandigarh | Expert Dermatology Care</title>
    <meta name="description" content="Looking for a trusted skin clinic in Sector 8 Chandigarh? Dermessence offers advanced dermatology solutions for acne, pigmentation, hair loss, and skin health.">
    <meta name="keywords" content="Skin Clinic Sector 8 Chandigarh, Dermatologist in Sector 8 Chandigarh, Best skin doctor in Sector 8 Chandigarh, Acne treatment Sector 8 Chandigarh, Pigmentation clinic Chandigarh, Skin specialist in Chandigarh">
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
        .crd123:hover { border-color: #D4AF37; transform: translateY(-5px); box-shadow: 0 10px 30px rgba(212, 175, 55, 0.3); }
        .num-list li { counter-increment: step-counter; }
        .num-list { counter-reset: step-counter; }
        .num-list li::before {
            content: counter(step-counter);
            background: linear-gradient(45deg, #D4AF37, #E6C147);
            color: #000;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-weight: 600;
            font-size: 0.9rem;
        }
        a { color: #D4AF37; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .nearby-sectors {
            background: rgba(26, 26, 26, 0.9);
            border: 2px solid rgba(212, 175, 55, 0.3);
            border-radius: 15px;
            padding: 2rem;
            margin: 3rem 0;
            text-align: center;
        }
        .sector-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        .sector-link {
            background: rgba(212, 175, 55, 0.1);
            color: #D4AF37;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 1px solid rgba(212, 175, 55, 0.3);
        }
        .sector-link:hover {
            background: #D4AF37;
            color: #000;
            transform: translateY(-2px);
            text-decoration: none;
        }
        .doctor-section {
            text-align: center;
            margin: 4rem 0;
        }
        .doctor-image {
            width: 250px;
            height: 300px;
            border-radius: 20px;
            object-fit: cover;
            border: 4px solid rgba(212, 175, 55, 0.3);
            margin-bottom: 2rem;
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.2);
        }
        .sector-link-text {
            color: #D4AF37;
            font-weight: 600;
            text-decoration: none;
            background: rgba(212, 175, 55, 0.1);
            padding: 0.2rem 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .sector-link-text:hover {
            background: #D4AF37;
            color: #000;
            text-decoration: none;
        }
        @media (max-width: 768px) {
            .her123 h1 { font-size: 2.2rem; }
            .ttl123 { font-size: 2rem; }
            .sector-links { flex-direction: column; align-items: center; }
            .doctor-image { width: 200px; height: 250px; }
        }
    </style>
</head>
<body>
    <div class="cnt123">
        <section class="her123">
            <h1>Skin Clinic in <a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> Chandigarh</h1>
            <p>Comprehensive Skin, Hair & Aesthetic Care at Dermessence</p>
            <a href="#book" class="btn123 btn-big123">Book Consultation Now</a>
        </section>

        <div class="box123">
            <p>Healthy skin is a reflection of overall wellness, confidence, and quality of life. For individuals visiting a <strong>Skin Clinic in <a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> Chandigarh</strong>, Dermessence offers comprehensive dermatology care built on medical expertise, ethical practice, and long-term skin health planning.</p>
            
            <p><a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> is one of Chandigarh's prime and well-established areas, home to professionals, families, and senior residents. Environmental exposure, sun damage, pollution, lifestyle stress, and hormonal changes commonly lead to skin and scalp concerns that require expert dermatological evaluation. At Dermessence, every concern is approached as a medical condition, ensuring accurate diagnosis and evidence-based treatment rather than short-term cosmetic solutions.</p>
            
            <p>Dermessence is recognised across Chandigarh as a trusted skin clinic providing integrated care in clinical dermatology, hair disorders, and aesthetic dermatology, all under specialist supervision.</p>
            
            <a href="/skin-clinic-chandigarh/" class="btn123">👉 Explore full Skin services</a>
        </div>

        <!-- Nearby Sectors BEFORE -->
        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">Nearby <strong>Dermatologist in Sector 8 Chandigarh</strong></h3>
            <div class="sector-links">
                <!-- <a href="/skin-clinic-sector-7-chandigarh/" class="sector-link">Sector 7</a> -->
                <a href="/skin-clinic-sector-9-chandigarh/" class="sector-link">Sector 9</a>
            </div>
        </div>

        <h2 class="ttl123">Why Choose a Skin Clinic in <a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> Chandigarh</h2>
        <div class="box123">
            <p>Choosing a nearby skin clinic allows patients to maintain continuity of care and follow-up, especially for chronic or progressive skin and hair conditions. Residents of <a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> Chandigarh prefer a local skin clinic because it provides:</p>
            <ul>
                <li>Easy access for consultations and follow-up visits</li>
                <li>Consistent monitoring of skin and hair conditions</li>
                <li>Personalised, long-term treatment planning</li>
                <li>Professional care in a hygienic clinical environment</li>
            </ul>
            <p>Dermessence serves <a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> and surrounding areas with specialist-level dermatology services, ensuring comfort, privacy, and medical safety at every visit.</p>
        </div>

        <h2 class="ttl123">Why People Prefer a Dermatologist in Chandigarh</h2>
        <div class="box123">
            <p>Chandigarh is known for its organised healthcare infrastructure and high standards of medical practice. People prefer consulting a dermatologist in Chandigarh because they receive expert diagnosis, advanced treatment options, and ethical care under professional supervision.</p>
            <ul>
                <li>Qualified dermatologists with clinical expertise</li>
                <li>Access to modern skin, hair, and laser technologies</li>
                <li>Strict hygiene and patient safety protocols</li>
                <li>Evidence-based dermatology treatments</li>
                <li>Transparent consultations and structured follow-ups</li>
            </ul>
            <p>A professional skin clinic in Chandigarh focuses on long-term skin health, not just cosmetic improvement.</p>
        </div>

        <h2 class="ttl123">Skin Concerns Commonly Seen at a Dermatologist in Chandigarh</h2>
        <div class="box123">
            <p>Environmental factors, lifestyle habits, and genetic predisposition contribute to a wide range of skin and scalp concerns treated at dermatology clinics.</p>
        </div>

        <div class="grd123">
            <div class="crd123">
                <h3 style="color:gold;">Common Skin Conditions</h3>
                <ul>
                    <li>Acne and recurring pimples</li>
                    <li>Acne scars and post-acne marks</li>
                    <li>Pigmentation, tanning, and melasma</li>
                    <li>Uneven skin tone and dull complexion</li>
                    <li>Open pores and texture irregularities</li>
                    <li>Skin allergies and sensitivity</li>
                    <li>Eczema, dermatitis, and psoriasis</li>
                </ul>
                <p style="margin-top: 1rem;">
                    <a href="/acne-care-chandigarh/" class="btn123">👉 Acne care services</a><br>
                    <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Scar correction treatments</a> | 
                    <a href="/scar-removal-chandigarh/" class="btn123">Scar removal</a><br>
                    <a href="/pigmentation-care-chandigarh/" class="btn123">👉 Pigmentation management</a> | 
                    <a href="/melasma-care-chandigarh/" class="btn123">Melasma care</a>
                </p>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Hair & Scalp Concerns</h3>
                <ul>
                    <li>Excessive hair fall and thinning</li>
                    <li>Male and female pattern hair loss</li>
                    <li>Dandruff and itchy scalp</li>
                    <li>Scalp infections and inflammation</li>
                </ul>
                <p style="margin-top: 1rem;">
                    <a href="/open-pores-care-chandigarh/" class="btn123">👉 Open pores care</a><br>
                    <a href="/skin-glow-care-chandigarh/" class="btn123">👉 Skin glow care</a>
                </p>
                <p>A dermatologist focuses on root-cause diagnosis to provide safe and sustainable hair and scalp solutions.</p>
            </div>
        </div>

        <!-- Doctor Section with Image -->
        <div class="doctor-section">
            <h2 class="ttl123">Meet Dr. Sukhmani – Dermatologist Serving <a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> Chandigarh</h2>
            <img src="assets/sukhmani.jpg" alt="Dr. Sukhmani - Skin Clinic Sector 8 Chandigarh" class="doctor-image">
            <div class="box123" style="max-width: 800px; margin: 0 auto;">
                <p>Dr. Sukhmani is the lead dermatologist at Dermessence, respected for her ethical, patient-centric, and evidence-based dermatology approach.</p>
                
                <h4 style="color: #D4AF37; margin: 1.5rem 0 1rem;">Her treatment philosophy includes:</h4>
                <ul>
                    <li>Detailed skin and scalp assessment</li>
                    <li>Honest diagnosis with realistic outcomes</li>
                    <li>Use of medically approved technologies</li>
                    <li>Focus on long-term skin and hair health</li>
                </ul>

                <h4 style="color: #D4AF37; margin: 1.5rem 0 1rem;">Areas of Expertise:</h4>
                <ul>
                    <li>Clinical dermatology (acne, pigmentation, eczema)</li>
                    <li>Hair and scalp disorders</li>
                    <li>Aesthetic dermatology and rejuvenation</li>
                    <li>Preventive and maintenance skin care</li>
                </ul>
                
                <p>Patients from <a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> Chandigarh trust her for clarity, safety, and consistent clinical results.</p>
            </div>
        </div>

        <h2 class="ttl123">What to Expect During Your Visit in Chandigarh</h2>
        <div class="box123">
            <p>Dermessence follows a structured, transparent consultation process to ensure patient comfort and confidence.</p>
            <ol class="num-list" style="padding-left: 1rem; margin-top: 2rem;">
                <li><strong>Step 1: Detailed Consultation</strong><br>A one-on-one discussion covering skin or hair concerns, medical history, lifestyle factors, and expectations.</li>
                <li><strong>Step 2: Clinical Examination</strong><br>A thorough examination of the skin or scalp to determine the exact cause and severity of the condition.</li>
                <li><strong>Step 3: Personalised Treatment Plan</strong><br>Clear explanation of: Diagnosis and contributing factors, Treatment options and procedures, Expected results timeline, Post-treatment care and precautions.</li>
                <li><strong>Step 4: Safe & Ethical Treatment</strong><br>All treatments are performed using clinically approved methods in a hygienic setting.</li>
                <li><strong>Step 5: Follow-Up & Maintenance</strong><br>Scheduled follow-ups support sustained improvement and prevent recurrence.</li>
            </ol>
        </div>

        <h2 class="ttl123">Dermatology Services Available at Dermessence Near <a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> Chandigarh</h2>
        <div class="grd123">
            <div class="crd123">
                <h3 style="color:gold;">1. Clinical Skin Treatments</h3>
                <ul>
                    <li>Acne and chronic pimples</li>
                    <li>Skin infections and allergies</li>
                    <li>Pigmentation and melasma</li>
                    <li>Eczema and psoriasis</li>
                </ul>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">2. Acne & Scar Management</h3>
                <ul>
                    <li>Active acne control</li>
                    <li>Scar reduction treatments</li>
                    <li>Skin texture refinement</li>
                </ul>
                <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Acne scar care</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">3. Pigmentation & Skin Brightening</h3>
                <ul>
                    <li>Dark spots and tanning</li>
                    <li>Uneven skin tone</li>
                    <li>Sun-induced pigmentation</li>
                </ul>
                <a href="/skin-glow-care-chandigarh/" class="btn123">👉 Skin glow therapies</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">4. Hair Loss & Scalp Treatments</h3>
                <ul>
                    <li>Hair fall diagnosis</li>
                    <li>Medical hair therapy</li>
                    <li>PRP hair treatment</li>
                </ul>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">5. Anti-Aging & Skin Rejuvenation</h3>
                <ul>
                    <li>Fine lines and wrinkles</li>
                    <li>Open pores</li>
                    <li>Dull and tired skin</li>
                </ul>
                <a href="/microneedling-chandigarh/" class="btn123">👉 Microneedling therapy</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">6. Laser & Aesthetic Procedures</h3>
                <ul>
                    <li>Laser hair reduction</li>
                    <li>Skin rejuvenation procedures</li>
                </ul>
                <a href="/laser-hair-removal-chandigarh/" class="btn123">👉 Laser hair removal</a>
            </div>
        </div>

        <div class="box123">
            <h3 style="color: #D4AF37;">Personalised Skin Care for <a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> Residents</h3>
            <p>Every patient visiting Dermessence receives a customised treatment plan based on:</p>
            <ul>
                <li>Skin type and sensitivity</li>
                <li>Severity of concern</li>
                <li>Age and lifestyle factors</li>
                <li>Long-term skin health goals</li>
            </ul>
            <p>This approach ensures safe, effective, and lasting dermatology outcomes.</p>
        </div>

        <!-- Nearby Sectors AFTER -->
        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">More <strong>Best skin doctor in Sector 8 Chandigarh</strong></h3>
            <div class="sector-links">
                <!-- <a href="/skin-clinic-sector-15-chandigarh/" class="sector-link">Sector 15</a> -->
                <a href="/skin-clinic-sector-17-chandigarh/" class="sector-link">Sector 9</a>
            </div>
        </div>

        <h2 class="ttl123" id="book">Book a Consultation at a Skin Clinic in <a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> Chandigarh</h2>
        <div class="box123" style="text-align: center;">
            <h3 style="color: #D4AF37;">Trusted Skin Clinic in <a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> Chandigarh for Long-Term Skin Health</h3>
            <p>Dermessence has built strong patient trust through clinical excellence, ethical dermatology practices, and consistent treatment results. Residents of <a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> Chandigarh rely on Dermessence for accurate diagnosis, safe treatment, and dependable follow-up care.</p>
            
            <p><strong>Dermessence offers professional, ethical, and result-oriented skin and hair care for patients in and around <a href="/skin-clinic-sector-8-chandigarh/" class="sector-link-text">Sector 8</a> Chandigarh.</strong></p>
            
            <div style="background: rgba(212, 175, 55, 0.1); padding: 2rem; border-radius: 15px; border: 2px solid rgba(212, 175, 55, 0.3); margin-top: 2rem;">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Dermessence – Where Science Meets Trusted Skin Care</h3>
                <p><strong>📞 Phone:</strong> <a href="tel:+919915930506" style="font-size: 1.2rem;">+91-9915930506, 8847491254</a></p>
                <p><strong>🌐 Website:</strong> <a href="https://thedermessence.com/" target="_blank" style="font-size: 1.1rem;">thedermessence.com</a></p>
                <a href="tel:+919915930506" class="btn123 btn-big123">🚀 Call Now to Book</a>
            </div>
        </div>
    </div>

    <?php  
        $footer_path = __DIR__ . '/includes/footer.php';
        if (file_exists($footer_path)) { 
            include $footer_path; 
        } else { 
            include 'footer.php'; 
        }
    ?>
</body>
</html>
