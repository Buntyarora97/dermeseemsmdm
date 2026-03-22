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
    <title>Skin Clinic in Sector 36 Chandigarh | Dermessence</title>
    <meta name="description" content="Dermatologist-led skin clinic in Sector 36 Chandigarh delivering structured care for acne, pigmentation, scars, open pores and overall skin health.">
    <meta name="keywords" content="Skin Clinic Sector 36 Chandigarh, dermatologist skin clinic Sector 36 Chandigarh, skin specialist clinic Chandigarh Sector 36, clinical skin treatments Sector 36 Chandigarh, professional dermatology care Chandigarh Sector 36, advanced skin care clinic Sector 36 Chandigarh">
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
            <h1><a href="/skin-clinic-sector-36-chandigarh/" class="sector-link-text">Skin Clinic</a> in <a href="/skin-clinic-sector-36-chandigarh/" class="sector-link-text">Sector 36</a> Chandigarh</h1>
            <p>Dermatologist-Guided Skin Care at Dermessence</p>
            <a href="#book" class="btn123 btn-big123">Book Consultation Now</a>
        </section>

        <div class="box123">
            <p>Healthy skin reflects overall wellness, self-confidence, and long-term care. Choosing a <strong><a href="/skin-clinic-sector-36-chandigarh/" class="sector-link-text">Skin Clinic in Sector 36 Chandigarh</a></strong> ensures access to professional dermatology services that address skin concerns caused by pollution, climate, lifestyle habits, and natural aging. Dermessence offers clinically guided, dermatologist-supervised skin care with a focus on safety, accuracy, and sustainable results.</p>
            
            <p><a href="/skin-clinic-sector-36-chandigarh/" class="sector-link-text">Sector 36</a> is a well-connected residential and commercial area of Chandigarh. Daily exposure to sunlight, dust, stress, and changing weather often contributes to acne, pigmentation, uneven tone, enlarged pores, and dull skin. At Dermessence, skin conditions are treated through medical diagnosis rather than cosmetic assumptions, ensuring reliable improvement.</p>
            
            <a href="/skin-clinic-chandigarh/" class="btn123">👉 Explore complete Skin expertise</a>
        </div>

        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">Nearby <strong>dermatologist skin clinic Sector 36 Chandigarh</strong></h3>
            <div class="sector-links">
                <a href="/skin-clinic-sector-35-chandigarh/" class="sector-link">Sector 35</a>
                <a href="/skin-clinic-sector-37-chandigarh/" class="sector-link">Sector 37</a>
            </div>
        </div>

        <h2 class="ttl123">Why Choose a <a href="/skin-clinic-sector-36-chandigarh/" class="sector-link-text">Skin Clinic in Sector 36</a> Chandigarh</h2>
        <div class="box123">
            <p>A nearby dermatologist-led skin clinic allows consistent follow-ups and structured treatment planning. Residents of <a href="/skin-clinic-sector-36-chandigarh/" class="sector-link-text">Sector 36 Chandigarh</a> prefer local skin clinics because they provide:</p>
            <ul>
                <li>Easy access for regular consultations</li>
                <li>Continuity of dermatological care</li>
                <li>Personalised skin treatment plans</li>
                <li>Professional monitoring of skin progress</li>
            </ul>
            <p>Dermessence focuses on long-term skin stability, not temporary surface-level fixes.</p>
        </div>

        <h2 class="ttl123">Why People Prefer a Dermatologist in Chandigarh</h2>
        <div class="box123">
            <p>Chandigarh is known for its organised healthcare ecosystem and high clinical standards. People prefer consulting a dermatologist in Chandigarh because of the city's emphasis on medical accuracy, ethical practice, and patient safety.</p>
            <ul>
                <li>Dermatologists trained in medical dermatology</li>
                <li>Advanced diagnostic and treatment protocols</li>
                <li>Strict hygiene and safety standards</li>
                <li>Evidence-based treatment planning</li>
                <li>Transparent consultation processes</li>
            </ul>
            <p>A dermatologist ensures that skin treatments are safe, effective, and suitable for individual skin types.</p>
        </div>

        <h2 class="ttl123">Skin Concerns Commonly Seen at a Dermatologist in Chandigarh</h2>
        <div class="grd123">
            <div class="crd123">
                <h3 style="color:gold;">Frequently Treated Conditions</h3>
                <ul>
                    <li>Acne and persistent breakouts</li>
                    <li>Acne scars and uneven skin texture</li>
                    <li>Pigmentation, tanning, and dark patches</li>
                    <li>Melasma and hormonal pigmentation</li>
                    <li>Open pores and rough skin texture</li>
                    <li>Dull, dehydrated, or uneven skin tone</li>
                </ul>
                <p style="margin-top: 1rem;">
                    <a href="/acne-care-chandigarh/" class="btn123">👉 Acne care services</a><br>
                    <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Pimple scar management</a> | 
                    <a href="/scar-removal-chandigarh/" class="btn123">Scar treatment</a><br>
                    <a href="/pigmentation-care-chandigarh/" class="btn123">👉 Pigmentation treatment</a> | 
                    <a href="/melasma-care-chandigarh/" class="btn123">Melasma care</a><br>
                    <a href="/open-pores-care-chandigarh/" class="btn123">👉 Open pores treatment</a> | 
                    <a href="/skin-glow-care-chandigarh/" class="btn123">👉 Skin glow therapies</a>
                </p>
            </div>
        </div>

        <div class="doctor-section">
            <h2 class="ttl123">Meet Dr. Sukhmani (Dermessence) – Dermatologist Serving Chandigarh</h2>
            <img src="assets/sukhmani.jpg" alt="Dr. Sukhmani - Skin Clinic Sector 36 Chandigarh" class="doctor-image">
            <div class="box123" style="max-width: 800px; margin: 0 auto;">
                <p>Dermessence is led by Dr. Sukhmani, a dermatologist known for her ethical approach, clinical precision, and patient-focused care. She believes in building skin health through accurate diagnosis, transparent communication, and structured treatment plans.</p>
                
                <h4 style="color: #D4AF37; margin: 1.5rem 0 1rem;">Clinical Approach:</h4>
                <ul>
                    <li>Detailed skin assessment</li>
                    <li>Clear explanation of skin conditions</li>
                    <li>Personalised treatment strategies</li>
                    <li>Focus on long-term skin maintenance</li>
                </ul>
                
                <p>Her expertise allows patients to achieve gradual, natural, and sustainable skin improvement.</p>
            </div>
        </div>

        <h2 class="ttl123">What to Expect During Your Visit</h2>
        <div class="box123">
            <p>Dermessence follows a systematic and patient-friendly dermatology process.</p>
            <ol class="num-list" style="padding-left: 1rem; margin-top: 2rem;">
                <li><strong>Step 1: Initial Consultation</strong><br>Discussion of skin concerns, lifestyle habits, medical history, and expectations.</li>
                <li><strong>Step 2: Clinical Skin Examination</strong><br>Professional evaluation of skin type, condition severity, and underlying causes.</li>
                <li><strong>Step 3: Personalised Treatment Plan</strong><br>Explanation of: Diagnosis, Recommended treatments, Expected timelines, Home-care guidance.</li>
                <li><strong>Step 4: Dermatologist-Supervised Treatment</strong><br>All procedures performed using medically approved techniques under strict hygiene standards.</li>
                <li><strong>Step 5: Follow-Up & Maintenance</strong><br>Planned reviews help track improvement and maintain long-term results.</li>
            </ol>
        </div>

        <h2 class="ttl123">Skin Treatments Available Near <a href="/skin-clinic-sector-36-chandigarh/" class="sector-link-text">Sector 36</a> Chandigarh</h2>
        <div class="grd123">
            <div class="crd123">
                <h3 style="color:gold;">Acne & Breakout Control</h3>
                <p>Focused dermatology care to manage inflammation, reduce breakouts, and prevent recurrence.</p>
                <a href="/acne-care-chandigarh/" class="btn123">👉 Acne care Chandigarh</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Acne Scar & Scar Reduction</h3>
                <p>Structured treatments aimed at improving skin texture and reducing visible scars.</p>
                <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Pimple scar care</a>
                <a href="/scar-removal-chandigarh/" class="btn123">👉 Scar treatment</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Pigmentation & Melasma Care</h3>
                <p>Targeted solutions to correct uneven tone and manage pigmentation disorders.</p>
                <a href="/pigmentation-care-chandigarh/" class="btn123">👉 Pigmentation care</a>
                <a href="/melasma-care-chandigarh/" class="btn123">👉 Melasma care</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Open Pores & Texture</h3>
                <p>Professional care focused on pore minimisation and smoother skin texture.</p>
                <a href="/open-pores-care-chandigarh/" class="btn123">👉 Open pores treatment</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Skin Glow & Rejuvenation</h3>
                <p>Maintenance-based therapies that restore hydration and enhance natural radiance.</p>
                <a href="/skin-glow-care-chandigarh/" class="btn123">👉 Skin glow treatments</a>
            </div>
        </div>

        <div class="box123">
            <h3 style="color: #D4AF37;">Personalised Skin Care for <a href="/skin-clinic-sector-36-chandigarh/" class="sector-link-text">Sector 36 Chandigarh</a> Residents</h3>
            <p>Every skin type is different. Dermessence designs personalised plans based on:</p>
            <ul>
                <li>Skin sensitivity and condition severity</li>
                <li>Environmental exposure in Chandigarh</li>
                <li>Lifestyle habits and stress factors</li>
                <li>Long-term skin health goals</li>
            </ul>
            <p>This ensures safe and consistent skin improvement.</p>
        </div>

        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">Nearby <strong>Skin Clinics in Chandigarh</strong></h3>
            <div class="sector-links">
                <a href="/skin-clinic-sector-35-chandigarh/" class="sector-link">Sector 35</a>
                <a href="/skin-clinic-sector-37-chandigarh/" class="sector-link">Sector 37</a>
            </div>
        </div>

        <h2 class="ttl123" id="book">Book a Consultation at a <a href="/skin-clinic-sector-36-chandigarh/" class="sector-link-text">Skin Clinic in Sector 36</a> Chandigarh</h2>
        <div class="box123" style="text-align: center;">
            <h3 style="color: #D4AF37;"><a href="/skin-clinic-sector-36-chandigarh/" class="sector-link-text">Trusted Skin Clinic</a> in <a href="/skin-clinic-sector-36-chandigarh/" class="sector-link-text">Sector 36</a> Chandigarh</h3>
            <p>Dermessence has earned trust across Chandigarh through ethical dermatology practices, clinical excellence, and consistent patient care. Residents of <a href="/skin-clinic-sector-36-chandigarh/" class="sector-link-text">Sector 36</a> rely on the clinic for accurate diagnosis, safe treatments, and dependable follow-ups.</p>
            
            <p><strong>Dermessence offers dermatologist-guided skin care for individuals focused on long-term skin health, confidence, and clarity.</strong></p>
            
            <div style="background: rgba(212, 175, 55, 0.1); padding: 2rem; border-radius: 15px; border: 2px solid rgba(212, 175, 55, 0.3); margin-top: 2rem;">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Dermessence – Clinical Dermatology with a Personal Touch</h3>
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
