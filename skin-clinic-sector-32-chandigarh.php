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
    <title>Advanced Skin Clinic in Sector 32 Chandigarh | Dermessence</title>
    <meta name="description" content="Advanced dermatologist-led skin clinic in Sector 32 Chandigarh providing acne care, pigmentation management, scar correction and skin rejuvenation.">
    <meta name="keywords" content="Skin Clinic Sector 32 Chandigarh, advanced skin clinic Sector 32 Chandigarh, dermatologist skin clinic Chandigarh Sector 32, skin specialist doctor Sector 32 Chandigarh, clinical dermatology services Chandigarh Sector 32, professional skin care clinic Chandigarh Sector 32">
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
            <h1><a href="/skin-clinic-sector-32-chandigarh/" class="sector-link-text">Skin Clinic</a> in <a href="/skin-clinic-sector-32-chandigarh/" class="sector-link-text">Sector 32</a> Chandigarh</h1>
            <p>Dermatologist-Led Skin Care at Dermessence</p>
            <a href="#book" class="btn123 btn-big123">Book Consultation Now</a>
        </section>

        <div class="box123">
            <p>Healthy skin supports comfort, confidence, and long-term wellbeing. Choosing a <strong><a href="/skin-clinic-sector-32-chandigarh/" class="sector-link-text">Skin Clinic in Sector 32 Chandigarh</a></strong> ensures access to professional dermatology care for concerns influenced by pollution, sun exposure, lifestyle habits, stress, and natural aging. Dermessence offers structured, dermatologist-supervised skin treatments grounded in clinical accuracy, ethical practice, and sustainable skin health outcomes.</p>
            
            <p><a href="/skin-clinic-sector-32-chandigarh/" class="sector-link-text">Sector 32</a> is a centrally connected area of Chandigarh with residential and institutional surroundings. Daily exposure to environmental stressors can contribute to acne, pigmentation, uneven texture, open pores, and dull skin. At Dermessence, each concern is approached through medical evaluation rather than cosmetic assumptions, ensuring safe and predictable improvement.</p>
            
            <p>Dermessence is trusted across Chandigarh for delivering evidence-based dermatology protocols, transparent consultations, and patient-centred skin care.</p>
            
            <a href="/skin-clinic-chandigarh/" class="btn123">👉 Explore complete Skin expertise</a>
        </div>

        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">Nearby <strong>advanced skin clinic Sector 32 Chandigarh</strong></h3>
            <div class="sector-links">
                <a href="/skin-clinic-sector-31-chandigarh/" class="sector-link">Sector 31</a>
                <a href="/skin-clinic-sector-33-chandigarh/" class="sector-link">Sector 33</a>
            </div>
        </div>

        <h2 class="ttl123">Why Choose a <a href="/skin-clinic-sector-32-chandigarh/" class="sector-link-text">Skin Clinic in Sector 32</a> Chandigarh</h2>
        <div class="box123">
            <p>A nearby professional skin clinic supports continuity of care, especially for concerns that need monitoring and gradual improvement. Residents of <a href="/skin-clinic-sector-32-chandigarh/" class="sector-link-text">Sector 32 Chandigarh</a> prefer local dermatology services because they offer:</p>
            <ul>
                <li>Convenient access for consultations and follow-ups</li>
                <li>Consistent monitoring of skin conditions</li>
                <li>Personalised treatment planning</li>
                <li>Dermatologist-supervised procedures</li>
            </ul>
            <p>Dermessence focuses on long-term skin stability rather than short-term cosmetic fixes, helping patients maintain healthier skin over time.</p>
        </div>

        <h2 class="ttl123">Why People Prefer a Dermatologist in Chandigarh</h2>
        <div class="box123">
            <p>Chandigarh is known for its organised healthcare infrastructure and high medical standards. People prefer consulting a dermatologist in Chandigarh because they receive scientific diagnosis, advanced treatment options, and ethical guidance.</p>
            <ul>
                <li>Dermatologists trained in medical and aesthetic dermatology</li>
                <li>Access to modern dermatology technologies</li>
                <li>Strict hygiene and patient safety protocols</li>
                <li>Evidence-based treatment planning</li>
                <li>Transparent consultation and follow-up care</li>
            </ul>
            <p>A dermatologist-led skin clinic ensures safe, effective, and sustainable outcomes.</p>
        </div>

        <h2 class="ttl123">Skin Concerns Commonly Seen at a Dermatologist in Chandigarh</h2>
        <div class="box123">
            <p>Environmental exposure, lifestyle patterns, and genetic factors contribute to a wide range of skin concerns treated by dermatologists in Chandigarh.</p>
        </div>

        <div class="grd123">
            <div class="crd123">
                <h3 style="color:gold;">Common Skin Conditions</h3>
                <ul>
                    <li>Acne and persistent breakouts</li>
                    <li>Acne scars and uneven skin texture</li>
                    <li>Pigmentation, tanning, and melasma</li>
                    <li>Dull or uneven skin tone</li>
                    <li>Open pores and rough skin surface</li>
                    <li>Sensitive or reactive skin</li>
                    <li>Chronic conditions such as eczema and psoriasis</li>
                </ul>
                <p style="margin-top: 1rem;">
                    <a href="/acne-care-chandigarh/" class="btn123">👉 Acne care in Chandigarh</a><br>
                    <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Acne scar & scar correction in Chandigarh</a> | 
                    <a href="/scar-removal-chandigarh/" class="btn123">Scar care</a><br>
                    <a href="/pigmentation-care-chandigarh/" class="btn123">👉 Pigmentation & melasma care in Chandigarh</a> | 
                    <a href="/melasma-care-chandigarh/" class="btn123">Melasma care</a><br>
                    <a href="/open-pores-care-chandigarh/" class="btn123">👉 Open pores treatment in Chandigarh</a> | 
                    <a href="/skin-glow-care-chandigarh/" class="btn123">👉 Skin glow therapies in Chandigarh</a>
                </p>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Dr. Sukhmani Expertise</h3>
                <ul>
                    <li>Medical dermatology</li>
                    <li>Acne and scar management</li>
                    <li>Pigmentation and melasma treatment</li>
                    <li>Preventive and maintenance skin care</li>
                </ul>
            </div>
        </div>

        <div class="doctor-section">
            <h2 class="ttl123">Meet Dr. Sukhmani – Dermatologist Serving Chandigarh</h2>
            <img src="assets/sukhmani.jpg" alt="Dr. Sukhmani - Skin Clinic Sector 32 Chandigarh" class="doctor-image">
            <div class="box123" style="max-width: 800px; margin: 0 auto;">
                <p>Dr. Sukhmani leads dermatology services at Dermessence and is known for her ethical, patient-centric, and clinically precise approach to skin care.</p>
                
                <h4 style="color: #D4AF37; margin: 1.5rem 0 1rem;">Her dermatology philosophy includes:</h4>
                <ul>
                    <li>Detailed skin assessment</li>
                    <li>Clear explanation of diagnosis and options</li>
                    <li>Use of medically approved protocols</li>
                    <li>Emphasis on skin safety and long-term improvement</li>
                </ul>
                
                <h4 style="color: #D4AF37; margin: 1.5rem 0 1rem;">Clinical Expertise:</h4>
                <ul>
                    <li>Medical dermatology</li>
                    <li>Acne and scar management</li>
                    <li>Pigmentation and melasma treatment</li>
                    <li>Preventive and maintenance skin care</li>
                </ul>
                
                <p>Patients trust Dr. Sukhmani for clarity, consistency, and long-term skin health planning.</p>
            </div>
        </div>

        <h2 class="ttl123">What to Expect During Your Visit in Chandigarh</h2>
        <div class="box123">
            <p>Dermessence follows a structured, transparent, and patient-friendly consultation process.</p>
            <ol class="num-list" style="padding-left: 1rem; margin-top: 2rem;">
                <li><strong>Step 1: Consultation & History</strong><br>Discussion of skin concerns, lifestyle habits, medical background, and expectations.</li>
                <li><strong>Step 2: Clinical Skin Examination</strong><br>Professional evaluation of skin type, severity, and underlying causes.</li>
                <li><strong>Step 3: Personalised Treatment Plan</strong><br>Clear explanation of: Diagnosis, Recommended treatment options, Expected improvement timeline, Skin care and maintenance guidance.</li>
                <li><strong>Step 4: Ethical Treatment Delivery</strong><br>All treatments are performed using clinically approved methods in a hygienic environment.</li>
                <li><strong>Step 5: Follow-Up & Skin Maintenance</strong><br>Planned follow-ups support long-term improvement and prevention of recurrence.</li>
            </ol>
        </div>

        <h2 class="ttl123">Skin Treatments Available at Dermessence Near <a href="/skin-clinic-sector-32-chandigarh/" class="sector-link-text">Sector 32</a> Chandigarh</h2>
        <div class="grd123">
            <div class="crd123">
                <h3 style="color:gold;">1. Acne & Pimple Management</h3>
                <ul>
                    <li>Control of active breakouts</li>
                    <li>Reduction of inflammation</li>
                    <li>Prevention of future acne</li>
                </ul>
                <a href="/acne-care-chandigarh/" class="btn123">👉 Acne care Chandigarh</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">2. Acne Scar & Scar Reduction</h3>
                <ul>
                    <li>Pimple scar correction</li>
                    <li>Improvement in skin texture</li>
                    <li>Gradual resurfacing solutions</li>
                </ul>
                <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Pimple scar care Chandigarh</a>
                <a href="/scar-removal-chandigarh/" class="btn123">👉 Scar treatment Chandigarh</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">3. Pigmentation & Melasma Care</h3>
                <ul>
                    <li>Reduction of dark patches</li>
                    <li>Melasma management</li>
                    <li>Balanced and even skin tone</li>
                </ul>
                <a href="/pigmentation-care-chandigarh/" class="btn123">👉 Pigmentation care Chandigarh</a>
                <a href="/melasma-care-chandigarh/" class="btn123">👉 Melasma care Chandigarh</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">4. Open Pores & Texture Refinement</h3>
                <ul>
                    <li>Reduction in pore visibility</li>
                    <li>Smoother skin texture</li>
                </ul>
                <a href="/open-pores-care-chandigarh/" class="btn123">👉 Open pores treatment Chandigarh</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">5. Skin Glow & Rejuvenation</h3>
                <ul>
                    <li>Revitalisation of dull skin</li>
                    <li>Hydration-focused maintenance therapies</li>
                </ul>
                <a href="/skin-glow-care-chandigarh/" class="btn123">👉 Skin glow treatments Chandigarh</a>
            </div>
        </div>

        <div class="box123">
            <h3 style="color: #D4AF37;">Personalised Skin Care for <a href="/skin-clinic-sector-32-chandigarh/" class="sector-link-text">Sector 32 Chandigarh</a> Residents</h3>
            <p>Each patient receives a customised plan based on:</p>
            <ul>
                <li>Skin type and sensitivity</li>
                <li>Severity of the condition</li>
                <li>Environmental exposure</li>
                <li>Long-term skin health goals</li>
            </ul>
            <p>This ensures safe, effective, and lasting skin care results.</p>
        </div>

        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">Nearby <strong>Skin Clinics & Sector Coverage in Chandigarh</strong></h3>
            <div class="sector-links">
                <a href="/skin-clinic-sector-31-chandigarh/" class="sector-link">Sector 31</a>
                <a href="/skin-clinic-sector-33-chandigarh/" class="sector-link">Sector 33</a>
            </div>
        </div>

        <h2 class="ttl123" id="book">Book a Consultation at a <a href="/skin-clinic-sector-32-chandigarh/" class="sector-link-text">Skin Clinic in Sector 32</a> Chandigarh</h2>
        <div class="box123" style="text-align: center;">
            <h3 style="color: #D4AF37;"><a href="/skin-clinic-sector-32-chandigarh/" class="sector-link-text">Trusted Skin Clinic</a> in <a href="/skin-clinic-sector-32-chandigarh/" class="sector-link-text">Sector 32</a> Chandigarh</h3>
            <p>Dermessence has earned long-term trust through clinical excellence, ethical dermatology practices, and consistent care standards. Residents of <a href="/skin-clinic-sector-32-chandigarh/" class="sector-link-text">Sector 32 Chandigarh</a> rely on Dermessence for accurate diagnosis, safe treatments, and dependable follow-ups.</p>
            
            <p><strong>Dermessence offers professional, dermatologist-guided skin care for individuals focused on long-term skin health and confidence.</strong></p>
            
            <div style="background: rgba(212, 175, 55, 0.1); padding: 2rem; border-radius: 15px; border: 2px solid rgba(212, 175, 55, 0.3); margin-top: 2rem;">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Dermessence – Where Clinical Dermatology Meets Skin Confidence</h3>
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
