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
    <title>Advanced Skin Clinic in Sector 37 Chandigarh | Dermessence</title>
    <meta name="description" content="Advanced dermatologist skin clinic in Sector 37 Chandigarh providing clinical care for acne, pigmentation, scars, open pores and skin rejuvenation.">
    <meta name="keywords" content="Skin Clinic Sector 37 Chandigarh, advanced skin clinic Sector 37 Chandigarh, dermatologist skin specialist Sector 37 Chandigarh, clinical dermatology care Chandigarh Sector 37, professional skin treatment clinic Chandigarh, medical skin care services Sector 37 Chandigarh">
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
            <h1><a href="/skin-clinic-sector-37-chandigarh/" class="sector-link-text">Skin Clinic</a> in <a href="/skin-clinic-sector-37-chandigarh/" class="sector-link-text">Sector 37</a> Chandigarh</h1>
            <p>Dermatologist-Led Skin Care at Dermessence</p>
            <a href="#book" class="btn123 btn-big123">Book Consultation Now</a>
        </section>

        <div class="box123">
            <p>Healthy skin is not only about appearance but also about long-term skin function, protection, and confidence. A <strong><a href="/skin-clinic-sector-37-chandigarh/" class="sector-link-text">Skin Clinic in Sector 37 Chandigarh</a></strong> offers residents access to dermatologist-supervised care designed to treat skin conditions with medical accuracy and ethical responsibility. Dermessence provides comprehensive skin care solutions that focus on diagnosis, correction, and maintenance rather than short-term cosmetic fixes.</p>
            
            <p><a href="/skin-clinic-sector-37-chandigarh/" class="sector-link-text">Sector 37</a> is a busy residential zone of Chandigarh where pollution exposure, sun damage, lifestyle stress, and irregular skincare routines commonly lead to acne, pigmentation, uneven texture, open pores, and dull skin. At Dermessence, skin conditions are evaluated clinically to ensure safe, structured, and result-oriented dermatology care.</p>
            
            <a href="/skin-clinic-chandigarh/" class="btn123">👉 Explore complete Skin expertise</a>
        </div>

        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">Nearby <strong>advanced skin clinic Sector 37 Chandigarh</strong></h3>
            <div class="sector-links">
                <a href="/skin-clinic-sector-36-chandigarh/" class="sector-link">Sector 36</a>
                <a href="/skin-clinic-sector-38-chandigarh/" class="sector-link">Sector 38</a>
            </div>
        </div>

        <h2 class="ttl123">Why Choose a <a href="/skin-clinic-sector-37-chandigarh/" class="sector-link-text">Skin Clinic in Sector 37</a> Chandigarh</h2>
        <div class="box123">
            <p>Having a trusted skin clinic close to home allows timely consultation, regular monitoring, and consistent treatment outcomes. Residents of <a href="/skin-clinic-sector-37-chandigarh/" class="sector-link-text">Sector 37 Chandigarh</a> prefer dermatologist-led skin clinics because they provide:</p>
            <ul>
                <li>Accurate diagnosis instead of trial-based treatments</li>
                <li>Personalised treatment planning</li>
                <li>Professional supervision for all procedures</li>
                <li>Long-term skin health focus</li>
            </ul>
            <p>Dermessence follows medical dermatology principles to deliver gradual and reliable skin improvement.</p>
        </div>

        <h2 class="ttl123">Why People Prefer a Dermatologist in Chandigarh</h2>
        <div class="box123">
            <p>Chandigarh is widely recognised for high medical standards and patient awareness. People prefer consulting a dermatologist in Chandigarh because skin treatments here are guided by clinical evaluation, safety protocols, and ethical medical practices.</p>
            <ul>
                <li>Qualified dermatologists with clinical expertise</li>
                <li>Advanced diagnostic and treatment methods</li>
                <li>Evidence-based dermatology care</li>
                <li>Transparent consultation and follow-up processes</li>
                <li>Strict hygiene and patient safety standards</li>
            </ul>
            <p>Dermatologist-guided care ensures skin treatments are appropriate for individual skin types and conditions.</p>
        </div>

        <h2 class="ttl123">Skin Concerns Commonly Seen at a Dermatologist in Chandigarh</h2>
        <div class="grd123">
            <div class="crd123">
                <h3 style="color:gold;">Common Skin Conditions Treated</h3>
                <ul>
                    <li>Acne and recurring breakouts</li>
                    <li>Post-acne marks and scars</li>
                    <li>Pigmentation, tanning, and uneven skin tone</li>
                    <li>Melasma and hormonal discoloration</li>
                    <li>Open pores and rough texture</li>
                    <li>Dehydrated, dull, or sensitive skin</li>
                </ul>
                <p style="margin-top: 1rem;">
                    <a href="/acne-care-chandigarh/" class="btn123">👉 Dermatologist-guided acne care</a><br>
                    <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Acne scar correction</a> | 
                    <a href="/scar-removal-chandigarh/" class="btn123">Scar services</a><br>
                    <a href="/pigmentation-care-chandigarh/" class="btn123">👉 Pigmentation care</a> | 
                    <a href="/melasma-care-chandigarh/" class="btn123">Melasma care</a><br>
                    <a href="/open-pores-care-chandigarh/" class="btn123">👉 Open pores solutions</a> | 
                    <a href="/skin-glow-care-chandigarh/" class="btn123">👉 Skin glow therapies</a>
                </p>
            </div>
        </div>

        <div class="doctor-section">
            <h2 class="ttl123">Meet Dr. Sukhmani (Dermessence) – Dermatologist Serving Chandigarh</h2>
            <img src="assets/sukhmani.jpg" alt="Dr. Sukhmani - Skin Clinic Sector 37 Chandigarh" class="doctor-image">
            <div class="box123" style="max-width: 800px; margin: 0 auto;">
                <p>Dermessence is guided by Dr. Sukhmani, a dermatologist recognised for her ethical approach, medical precision, and patient-centric philosophy. Her practice focuses on clinical dermatology supported by modern treatment techniques, ensuring safety and natural-looking results.</p>
                
                <h4 style="color: #D4AF37; margin: 1.5rem 0 1rem;">Treatment Philosophy:</h4>
                <ul>
                    <li>In-depth skin assessment</li>
                    <li>Honest diagnosis and recommendations</li>
                    <li>Personalised treatment planning</li>
                    <li>Emphasis on long-term skin stability</li>
                </ul>
                
                <p>Patients value the clarity, transparency, and professionalism reflected in every consultation.</p>
            </div>
        </div>

        <h2 class="ttl123">What to Expect During Your Visit</h2>
        <div class="box123">
            <p>Dermessence ensures that every dermatology visit is structured, informative, and comfortable.</p>
            <ol class="num-list" style="padding-left: 1rem; margin-top: 2rem;">
                <li><strong>Step 1: Consultation</strong><br>Discussion of skin concerns, daily routine, environmental exposure, and medical history.</li>
                <li><strong>Step 2: Clinical Skin Evaluation</strong><br>Professional examination to identify skin type, severity, and underlying triggers.</li>
                <li><strong>Step 3: Treatment Planning</strong><br>Clear explanation of: Diagnosis, Recommended treatments, Expected timeline, Maintenance guidance.</li>
                <li><strong>Step 4: Safe Clinical Treatment</strong><br>All procedures performed under dermatologist supervision using medically approved techniques.</li>
                <li><strong>Step 5: Follow-Up & Skin Maintenance</strong><br>Regular reviews help monitor progress and maintain results over time.</li>
            </ol>
        </div>

        <h2 class="ttl123">Skin Treatments Available Near <a href="/skin-clinic-sector-37-chandigarh/" class="sector-link-text">Sector 37</a> Chandigarh</h2>
        <div class="grd123">
            <div class="crd123">
                <h3 style="color:gold;">Acne & Breakout Management</h3>
                <p>Dermatology-based acne care focusing on inflammation control and prevention.</p>
                <a href="/acne-care-chandigarh/" class="btn123">👉 Acne care Chandigarh</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Acne Scar & Scar Reduction</h3>
                <p>Advanced skin treatments designed to improve texture and reduce scar visibility.</p>
                <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Pimple scar care</a>
                <a href="/scar-removal-chandigarh/" class="btn123">👉 Scar reduction</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Pigmentation & Melasma Care</h3>
                <p>Structured dermatology solutions targeting uneven skin tone and pigmentation disorders.</p>
                <a href="/pigmentation-care-chandigarh/" class="btn123">👉 Pigmentation care</a>
                <a href="/melasma-care-chandigarh/" class="btn123">👉 Melasma care</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Open Pores & Texture Improvement</h3>
                <p>Clinical treatments aimed at refining skin texture and minimising enlarged pores.</p>
                <a href="/open-pores-care-chandigarh/" class="btn123">👉 Open pores treatment</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Skin Glow & Rejuvenation</h3>
                <p>Maintenance therapies that restore hydration, brightness, and skin balance.</p>
                <a href="/skin-glow-care-chandigarh/" class="btn123">👉 Skin glow treatments</a>
            </div>
        </div>

        <div class="box123">
            <h3 style="color: #D4AF37;">Personalised Skin Care for <a href="/skin-clinic-sector-37-chandigarh/" class="sector-link-text">Sector 37 Chandigarh</a> Residents</h3>
            <p>Dermessence designs skin care plans based on:</p>
            <ul>
                <li>Individual skin type and sensitivity</li>
                <li>Environmental exposure in Chandigarh</li>
                <li>Lifestyle habits and stress levels</li>
                <li>Long-term skin health goals</li>
            </ul>
            <p>This personalised approach ensures safe results with minimal risk.</p>
        </div>

        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">Nearby <strong>Skin Clinics in Chandigarh</strong></h3>
            <div class="sector-links">
                <a href="/skin-clinic-sector-36-chandigarh/" class="sector-link">Sector 36</a>
                <a href="/skin-clinic-sector-38-chandigarh/" class="sector-link">Sector 38</a>
            </div>
        </div>

        <h2 class="ttl123" id="book">Book a Consultation at a <a href="/skin-clinic-sector-37-chandigarh/" class="sector-link-text">Skin Clinic in Sector 37</a> Chandigarh</h2>
        <div class="box123" style="text-align: center;">
            <h3 style="color: #D4AF37;"><a href="/skin-clinic-sector-37-chandigarh/" class="sector-link-text">Trusted Skin Clinic</a> in <a href="/skin-clinic-sector-37-chandigarh/" class="sector-link-text">Sector 37</a> Chandigarh</h3>
            <p>Dermessence has established itself as a dependable skin clinic through ethical dermatology practices, consistent results, and patient trust. Residents of <a href="/skin-clinic-sector-37-chandigarh/" class="sector-link-text">Sector 37 Chandigarh</a> rely on the clinic for accurate diagnosis, safe procedures, and long-term skin care guidance.</p>
            
            <p><strong>Dermessence provides dermatologist-led skin care for individuals focused on skin health, confidence, and sustainable results.</strong></p>
            
            <div style="background: rgba(212, 175, 55, 0.1); padding: 2rem; border-radius: 15px; border: 2px solid rgba(212, 175, 55, 0.3); margin-top: 2rem;">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Dermessence – Where Clinical Dermatology Meets Skin Wellness</h3>
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
