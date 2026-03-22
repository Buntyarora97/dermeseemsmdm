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
    <title>Skin Clinic in Sector 38 Chandigarh | Dermessence</title>
    <meta name="description" content="Dermatology-focused skin clinic in Sector 38 Chandigarh providing expert care for acne, pigmentation, scars, open pores and long-term skin health.">
    <meta name="keywords" content="Skin Clinic Sector 38 Chandigarh, dermatology skin clinic Sector 38 Chandigarh, skin specialist clinic in Sector 38 Chandigarh, professional skin care centre Sector 38 Chandigarh, clinical skin treatments in Sector 38 Chandigarh, dermatologist consultation Sector 38 Chandigarh">
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
            <h1><a href="/skin-clinic-sector-38-chandigarh/" class="sector-link-text">Skin Clinic</a> in <a href="/skin-clinic-sector-38-chandigarh/" class="sector-link-text">Sector 38</a> Chandigarh</h1>
            <p>Dermatologist-Supervised Skin Care at Dermessence</p>
            <a href="#book" class="btn123 btn-big123">Book Consultation Now</a>
        </section>

        <div class="box123">
            <p>Healthy skin is an important indicator of overall wellbeing, confidence, and lifestyle balance. Choosing a <strong><a href="/skin-clinic-sector-38-chandigarh/" class="sector-link-text">Skin Clinic in Sector 38 Chandigarh</a></strong> allows residents to access professional dermatology care that focuses on medical accuracy, safety, and long-term skin improvement. Dermessence provides dermatologist-supervised skin treatments designed to address common and complex skin concerns through evidence-based dermatology.</p>
            
            <p><a href="/skin-clinic-sector-38-chandigarh/" class="sector-link-text">Sector 38</a> is a well-developed residential area of Chandigarh where environmental exposure, sun damage, pollution, stress, and irregular skincare routines often contribute to acne, pigmentation, dullness, uneven texture, and premature skin aging. At Dermessence, every skin concern is approached through clinical evaluation rather than cosmetic guesswork, ensuring dependable and sustainable results.</p>
            
            <a href="/skin-clinic-chandigarh/" class="btn123">👉 Explore complete Skin expertise</a>
        </div>

        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">Nearby <strong>dermatology skin clinic Sector 38 Chandigarh</strong></h3>
            <div class="sector-links">
                <a href="/skin-clinic-sector-37-chandigarh/" class="sector-link">Sector 37</a>
                <a href="/skin-clinic-sector-40-chandigarh/" class="sector-link">Sector 40</a>
            </div>
        </div>

        <h2 class="ttl123">Why Choose a <a href="/skin-clinic-sector-38-chandigarh/" class="sector-link-text">Skin Clinic in Sector 38</a> Chandigarh</h2>
        <div class="box123">
            <p>Having a dermatologist-led skin clinic nearby allows consistent monitoring and structured care. Residents of <a href="/skin-clinic-sector-38-chandigarh/" class="sector-link-text">Sector 38 Chandigarh</a> prefer local skin clinics because they offer:</p>
            <ul>
                <li>Convenient access for consultations and follow-ups</li>
                <li>Continuity of dermatologist-supervised treatment</li>
                <li>Personalised skin care plans</li>
                <li>Professional evaluation of skin changes over time</li>
            </ul>
            <p>Dermessence follows a medical dermatology model where skin health is improved gradually and safely.</p>
        </div>

        <h2 class="ttl123">Why People Prefer a Dermatologist in Chandigarh</h2>
        <div class="box123">
            <p>Chandigarh is recognised for its organised healthcare system and strong patient awareness. People prefer consulting a dermatologist in Chandigarh because treatments are guided by clinical diagnosis, safety standards, and ethical medical practice.</p>
            <ul>
                <li>Qualified dermatologists with clinical expertise</li>
                <li>Advanced diagnostic tools and treatment protocols</li>
                <li>Evidence-based dermatology solutions</li>
                <li>Transparent consultation processes</li>
                <li>Emphasis on long-term skin health</li>
            </ul>
            <p>A dermatologist ensures that skin treatments are appropriate for the patient's skin type, age, and condition severity.</p>
        </div>

        <h2 class="ttl123">Skin Concerns Commonly Seen at a Dermatologist in Chandigarh</h2>
        <div class="grd123">
            <div class="crd123">
                <h3 style="color:gold;">Frequently Treated Conditions</h3>
                <ul>
                    <li>Acne and persistent breakouts</li>
                    <li>Acne scars and post-inflammatory marks</li>
                    <li>Pigmentation, tanning, and uneven skin tone</li>
                    <li>Melasma and hormonal pigmentation</li>
                    <li>Open pores and rough skin texture</li>
                    <li>Dehydrated, dull, or sensitive skin</li>
                </ul>
                <p style="margin-top: 1rem;">
                    <a href="/acne-care-chandigarh/" class="btn123">👉 Dermatologist-guided acne care</a><br>
                    <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Pimple scar correction</a> | 
                    <a href="/scar-removal-chandigarh/" class="btn123">Scar services</a><br>
                    <a href="/pigmentation-care-chandigarh/" class="btn123">👉 Pigmentation care</a> | 
                    <a href="/melasma-care-chandigarh/" class="btn123">Melasma solutions</a><br>
                    <a href="/open-pores-care-chandigarh/" class="btn123">👉 Open pores treatments</a> | 
                    <a href="/skin-glow-care-chandigarh/" class="btn123">👉 Skin glow therapies</a>
                </p>
            </div>
        </div>

        <div class="doctor-section">
            <h2 class="ttl123">Meet Dr. Sukhmani (Dermessence) – Dermatologist Serving Chandigarh</h2>
            <img src="assets/sukhmani.jpg" alt="Dr. Sukhmani - Skin Clinic Sector 38 Chandigarh" class="doctor-image">
            <div class="box123" style="max-width: 800px; margin: 0 auto;">
                <p>Dermessence is led by Dr. Sukhmani, a dermatologist known for her ethical practice, clinical precision, and patient-focused care. Her dermatology approach is rooted in accurate diagnosis, clear communication, and personalised treatment planning.</p>
                
                <h4 style="color: #D4AF37; margin: 1.5rem 0 1rem;">Treatment Philosophy:</h4>
                <ul>
                    <li>Detailed skin analysis</li>
                    <li>Honest explanation of skin conditions</li>
                    <li>Customised treatment recommendations</li>
                    <li>Focus on skin safety and long-term results</li>
                </ul>
                
                <p>Patients value the clarity, professionalism, and trust reflected in every consultation.</p>
            </div>
        </div>

        <h2 class="ttl123">What to Expect During Your Visit</h2>
        <div class="box123">
            <p>Dermessence follows a structured and patient-friendly dermatology process.</p>
            <ol class="num-list" style="padding-left: 1rem; margin-top: 2rem;">
                <li><strong>Step 1: Initial Consultation</strong><br>Discussion of skin concerns, daily routine, lifestyle habits, and medical background.</li>
                <li><strong>Step 2: Clinical Skin Examination</strong><br>Professional evaluation of skin type, condition severity, and underlying causes.</li>
                <li><strong>Step 3: Personalised Treatment Plan</strong><br>Explanation of: Skin diagnosis, Recommended treatments, Expected timeline, Maintenance guidance.</li>
                <li><strong>Step 4: Dermatologist-Supervised Treatment</strong><br>All procedures performed using medically approved methods under strict hygiene standards.</li>
                <li><strong>Step 5: Follow-Up & Skin Maintenance</strong><br>Regular reviews help track progress and ensure consistent improvement.</li>
            </ol>
        </div>

        <h2 class="ttl123">Skin Treatments Available Near <a href="/skin-clinic-sector-38-chandigarh/" class="sector-link-text">Sector 38</a> Chandigarh</h2>
        <div class="grd123">
            <div class="crd123">
                <h3 style="color:gold;">Acne & Breakout Control</h3>
                <p>Structured dermatology care to reduce inflammation and prevent recurrence.</p>
                <a href="/acne-care-chandigarh/" class="btn123">👉 Acne care Chandigarh</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Acne Scar & Scar Reduction</h3>
                <p>Advanced treatments focused on improving skin texture and reducing visible scars.</p>
                <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Pimple scar care</a>
                <a href="/scar-removal-chandigarh/" class="btn123">👉 Scar reduction</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Pigmentation & Melasma Care</h3>
                <p>Targeted dermatology solutions to correct uneven skin tone and pigmentation disorders.</p>
                <a href="/pigmentation-care-chandigarh/" class="btn123">👉 Pigmentation care</a>
                <a href="/melasma-care-chandigarh/" class="btn123">👉 Melasma care</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Open Pores & Texture Refinement</h3>
                <p>Clinical procedures designed to smooth skin texture and minimise enlarged pores.</p>
                <a href="/open-pores-care-chandigarh/" class="btn123">👉 Open pores treatment</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Skin Glow & Rejuvenation</h3>
                <p>Maintenance-based therapies that restore hydration, clarity, and natural radiance.</p>
                <a href="/skin-glow-care-chandigarh/" class="btn123">👉 Skin glow treatments</a>
            </div>
        </div>

        <div class="box123">
            <h3 style="color: #D4AF37;">Personalised Skin Care for <a href="/skin-clinic-sector-38-chandigarh/" class="sector-link-text">Sector 38 Chandigarh</a> Residents</h3>
            <p>Dermessence designs customised skin care plans based on:</p>
            <ul>
                <li>Individual skin type and sensitivity</li>
                <li>Environmental exposure within Chandigarh</li>
                <li>Lifestyle habits and stress levels</li>
                <li>Long-term skin health goals</li>
            </ul>
            <p>This personalised approach ensures safe outcomes with minimal risk.</p>
        </div>

        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">Nearby <strong>Skin Clinics in Chandigarh</strong></h3>
            <div class="sector-links">
                <a href="/skin-clinic-sector-37-chandigarh/" class="sector-link">Sector 37</a>
                <a href="/skin-clinic-sector-40-chandigarh/" class="sector-link">Sector 40</a>
            </div>
        </div>

        <h2 class="ttl123" id="book">Book a Consultation at a <a href="/skin-clinic-sector-38-chandigarh/" class="sector-link-text">Skin Clinic in Sector 38</a> Chandigarh</h2>
        <div class="box123" style="text-align: center;">
            <h3 style="color: #D4AF37;"><a href="/skin-clinic-sector-38-chandigarh/" class="sector-link-text">Trusted Skin Clinic</a> in <a href="/skin-clinic-sector-38-chandigarh/" class="sector-link-text">Sector 38</a> Chandigarh</h3>
            <p>Dermessence has earned trust across Chandigarh through ethical dermatology practices, consistent results, and transparent patient care. Residents of <a href="/skin-clinic-sector-38-chandigarh/" class="sector-link-text">Sector 38 Chandigarh</a> rely on the clinic for accurate diagnosis, safe treatments, and long-term skin guidance.</p>
            
            <p><strong>Dermessence offers dermatologist-supervised skin care for individuals focused on skin health, confidence, and sustainable improvement.</strong></p>
            
            <div style="background: rgba(212, 175, 55, 0.1); padding: 2rem; border-radius: 15px; border: 2px solid rgba(212, 175, 55, 0.3); margin-top: 2rem;">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Dermessence – Clinical Dermatology with Care and Precision</h3>
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
