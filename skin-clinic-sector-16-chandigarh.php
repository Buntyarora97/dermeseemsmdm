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
    <title>Skin Clinic in Sector 16 Chandigarh | skin care specalist</title>
    <meta name="description" content="Dermatologist-led skin clinic in Sector 16 Chandigarh offering acne, pigmentation, scar and skin renewal treatments with clinical expertise.">
    <meta name="keywords" content="Skin Clinic Sector 16 Chandigarh, dermatologist skin clinic Sector 16 Chandigarh, skin specialist near Sector 16 Chandigarh, dermatology clinic Sector 16 Chandigarh, clinical skin care Sector 16 Chandigarh, aesthetic skin treatments Sector 16 Chandigarh">
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
            <h1>Skin Clinic in <a href="/skin-clinic-sector-16-chandigarh/" class="sector-link-text">Sector 16</a> Chandigarh</h1>
            <p>Dermatologist-Led Skin Care at Dermessence</p>
            <a href="#book" class="btn123 btn-big123">Book Consultation Now</a>
        </section>

        <div class="box123">
            <p>Healthy skin is a reflection of internal balance, daily habits, and professional care. Consulting a <strong>Skin Clinic in <a href="/skin-clinic-sector-16-chandigarh/" class="sector-link-text">Sector 16</a> Chandigarh</strong> allows individuals to receive expert dermatological evaluation for concerns related to sun exposure, pollution, stress, aging, and medical conditions. Dermessence provides structured, dermatologist-led skin care built on clinical accuracy, ethical practice, and long-term skin health.</p>
            
            <p><a href="/skin-clinic-sector-16-chandigarh/" class="sector-link-text">Sector 16</a> is one of Chandigarh's most active and centrally located areas, surrounded by educational institutions, offices, hospitals, and residential zones. Constant outdoor exposure, irregular routines, and environmental stress often lead to concerns such as acne, pigmentation, uneven texture, and dull skin. At Dermessence, every concern is approached through medical diagnosis rather than cosmetic assumption, ensuring safe, consistent, and predictable outcomes.</p>
            
            <p>Dermessence is recognised across Chandigarh for its commitment to clinical dermatology and evidence-based aesthetic skin care, delivered under specialist supervision.</p>
            
            <a href="/skin-clinic-chandigarh/" class="btn123">👉 Explore complete Skin expertise</a>
        </div>

        <!-- Nearby Sectors BEFORE -->
        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">Nearby <strong>dermatologist skin clinic Sector 16 Chandigarh</strong></h3>
            <div class="sector-links">
                <a href="/skin-clinic-sector-15-chandigarh/" class="sector-link">Sector 15</a>
                <a href="/skin-clinic-sector-17-chandigarh/" class="sector-link">Sector 17</a>
            </div>
        </div>

        <h2 class="ttl123">Why Choose a Skin Clinic in <a href="/skin-clinic-sector-16-chandigarh/" class="sector-link-text">Sector 16</a> Chandigarh</h2>
        <div class="box123">
            <p>Proximity to a professional skin clinic is important for skin conditions that require follow-ups and long-term management. Residents and professionals in <a href="/skin-clinic-sector-16-chandigarh/" class="sector-link-text">Sector 16</a> Chandigarh prefer a nearby skin clinic because it offers:</p>
            <ul>
                <li>Easy access for consultations and reviews</li>
                <li>Continuity of care for chronic or recurring skin issues</li>
                <li>Individualised treatment planning</li>
                <li>Medically supervised and hygienic procedures</li>
            </ul>
            <p>Dermessence focuses on skin stability and prevention, ensuring treatments support long-term results rather than temporary cosmetic improvement.</p>
        </div>

        <h2 class="ttl123">Why People Prefer a Dermatologist in Chandigarh</h2>
        <div class="box123">
            <p>Chandigarh is known for its organised healthcare system and high clinical standards. People prefer consulting a dermatologist in Chandigarh because they receive scientific diagnosis, advanced treatment options, and ethical guidance.</p>
            <ul>
                <li>Dermatologists trained in medical and aesthetic skin conditions</li>
                <li>Availability of modern dermatology technologies</li>
                <li>Strict hygiene and patient safety protocols</li>
                <li>Evidence-based treatment planning</li>
                <li>Transparent consultation and follow-up systems</li>
            </ul>
            <p>A dermatologist-led skin clinic ensures safe, effective, and sustainable skin care outcomes.</p>
        </div>

        <h2 class="ttl123">Skin Concerns Commonly Seen at a Dermatologist in Chandigarh</h2>
        <div class="box123">
            <p>Environmental exposure, lifestyle habits, and genetics contribute to a wide range of skin concerns managed at professional dermatology clinics.</p>
        </div>

        <div class="grd123">
            <div class="crd123">
                <h3 style="color:gold;">Common Skin Conditions</h3>
                <ul>
                    <li>Acne and persistent breakouts</li>
                    <li>Acne scars and uneven skin texture</li>
                    <li>Pigmentation, tanning, and melasma</li>
                    <li>Dull skin and uneven tone</li>
                    <li>Open pores and rough texture</li>
                    <li>Skin sensitivity and allergic reactions</li>
                    <li>Chronic skin conditions such as eczema and psoriasis</li>
                </ul>
                <p style="margin-top: 1rem;">
                    <a href="/acne-care-chandigarh/" class="btn123">👉 Acne care services</a><br>
                    <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Acne scar & scar treatments</a> | 
                    <a href="/scar-removal-chandigarh/" class="btn123">Scar care</a><br>
                    <a href="/pigmentation-care-chandigarh/" class="btn123">👉 Pigmentation management</a> | 
                    <a href="/melasma-care-chandigarh/" class="btn123">Melasma care</a><br>
                    <a href="/open-pores-care-chandigarh/" class="btn123">👉 Open pores solutions</a> | 
                    <a href="/skin-glow-care-chandigarh/" class="btn123">👉 Skin glow programs</a>
                </p>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">Dr. Sukhmani Expertise</h3>
                <ul>
                    <li>Medical dermatology (acne, pigmentation, eczema)</li>
                    <li>Scar correction and texture refinement</li>
                    <li>Preventive and maintenance skin care</li>
                    <li>Aesthetic dermatology under medical supervision</li>
                </ul>
            </div>
        </div>

        <!-- Doctor Section with Image -->
        <div class="doctor-section">
            <h2 class="ttl123">Meet Dr. Sukhmani – Dermatologist Serving Chandigarh</h2>
            <img src="assets/sukhmani.jpg" alt="Dr. Sukhmani - Skin Clinic Sector 16 Chandigarh" class="doctor-image">
            <div class="box123" style="max-width: 800px; margin: 0 auto;">
                <p>Dr. Sukhmani leads dermatology care at Dermessence, known for her ethical, patient-focused, and evidence-based dermatology approach.</p>
                
                <h4 style="color: #D4AF37; margin: 1.5rem 0 1rem;">Her clinical philosophy includes:</h4>
                <ul>
                    <li>Detailed skin evaluation</li>
                    <li>Clear and transparent diagnosis</li>
                    <li>Use of dermatologist-approved technologies</li>
                    <li>Emphasis on skin safety and long-term care</li>
                </ul>
                
                <p>Patients value her approach for clarity, safety, and consistent outcomes.</p>
            </div>
        </div>

        <h2 class="ttl123">What to Expect During Your Visit in Chandigarh</h2>
        <div class="box123">
            <p>Dermessence follows a structured and patient-friendly consultation pathway.</p>
            <ol class="num-list" style="padding-left: 1rem; margin-top: 2rem;">
                <li><strong>Step 1: Consultation & History</strong><br>Discussion of skin concerns, lifestyle habits, medical background, and expectations.</li>
                <li><strong>Step 2: Clinical Skin Examination</strong><br>Professional assessment of skin type, condition severity, and underlying causes.</li>
                <li><strong>Step 3: Personalised Treatment Plan</strong><br>Explanation of: Diagnosis, Recommended treatments, Expected improvement timeline, Skin care and maintenance guidance.</li>
                <li><strong>Step 4: Ethical Treatment Delivery</strong><br>All treatments are performed using clinically approved protocols.</li>
                <li><strong>Step 5: Follow-Up & Skin Maintenance</strong><br>Scheduled reviews help maintain results and prevent recurrence.</li>
            </ol>
        </div>

        <h2 class="ttl123">Skin Treatments Available at Dermessence Near <a href="/skin-clinic-sector-16-chandigarh/" class="sector-link-text">Sector 16</a> Chandigarh</h2>
        <div class="grd123">
            <div class="crd123">
                <h3 style="color:gold;">1. Acne & Pimple Management</h3>
                <ul>
                    <li>Control of active acne</li>
                    <li>Reduction of inflammation</li>
                    <li>Long-term breakout prevention</li>
                </ul>
                <a href="/acne-care-chandigarh/" class="btn123">👉 Acne care programs</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">2. Acne Scar & Scar Treatment</h3>
                <ul>
                    <li>Pimple scar correction</li>
                    <li>Skin texture improvement</li>
                    <li>Resurfacing-based solutions</li>
                </ul>
                <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Pimple scar care</a>
                <a href="/scar-removal-chandigarh/" class="btn123">👉 Scar treatment options</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">3. Pigmentation & Melasma Care</h3>
                <ul>
                    <li>Reduction of dark patches</li>
                    <li>Management of melasma</li>
                    <li>Improvement of overall skin tone</li>
                </ul>
                <a href="/pigmentation-care-chandigarh/" class="btn123">👉 Pigmentation solutions</a>
                <a href="/melasma-care-chandigarh/" class="btn123">👉 Melasma care</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">4. Open Pores & Texture Refinement</h3>
                <ul>
                    <li>Reduction in pore appearance</li>
                    <li>Smoother, refined skin texture</li>
                </ul>
                <a href="/open-pores-care-chandigarh/" class="btn123">👉 Open pores treatment</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">5. Skin Glow & Rejuvenation</h3>
                <ul>
                    <li>Revitalisation of dull skin</li>
                    <li>Hydration-focused therapies</li>
                    <li>Preventive skin maintenance</li>
                </ul>
                <a href="/skin-glow-care-chandigarh/" class="btn123">👉 Skin glow therapies</a>
            </div>
        </div>

        <div class="box123">
            <h3 style="color: #D4AF37;">Personalised Skin Care for <a href="/skin-clinic-sector-16-chandigarh/" class="sector-link-text">Sector 16</a> Residents</h3>
            <p>Every patient at Dermessence receives a customised treatment plan based on:</p>
            <ul>
                <li>Skin type and sensitivity</li>
                <li>Severity of the condition</li>
                <li>Lifestyle and environmental exposure</li>
                <li>Long-term skin health goals</li>
            </ul>
            <p>This ensures safe, effective, and lasting skin care results.</p>
        </div>

        <!-- Nearby Sectors AFTER -->
        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">More <strong>skin specialist near Sector 16 Chandigarh</strong></h3>
            <div class="sector-links">
                <a href="/skin-clinic-sector-15-chandigarh/" class="sector-link">Sector 15</a>
                <a href="/skin-clinic-sector-17-chandigarh/" class="sector-link">Sector 17</a>
            </div>
        </div>

        <h2 class="ttl123" id="book">Book a Consultation at a Skin Clinic in <a href="/skin-clinic-sector-16-chandigarh/" class="sector-link-text">Sector 16</a> Chandigarh</h2>
        <div class="box123" style="text-align: center;">
            <h3 style="color: #D4AF37;">Trusted Skin Clinic in <a href="/skin-clinic-sector-16-chandigarh/" class="sector-link-text">Sector 16</a> Chandigarh</h3>
            <p>Dermessence has built long-term trust through clinical excellence, ethical dermatology practices, and patient-centred care. Residents of <a href="/skin-clinic-sector-16-chandigarh/" class="sector-link-text">Sector 16</a> Chandigarh rely on Dermessence for accurate diagnosis, safe treatments, and dependable follow-ups.</p>
            
            <p><strong>Dermessence provides professional, medically guided skin care for individuals focused on long-term skin health and confidence.</strong></p>
            
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
