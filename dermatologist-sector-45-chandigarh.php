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
    <title>Dermatologist in Sector 45 Chandigarh | Clinical Skin Care</title>
    <meta name="description" content="Clinical dermatology services in Sector 45 Chandigarh offering skin, hair and aesthetic treatments with accurate diagnosis and structured care plans.">
    <meta name="keywords" content="Dermatologist Sector 45 Chandigarh, skin doctor Sector 45 Chandigarh, dermatologist clinic Sector 45 Chandigarh, skin specialist near Sector 45 Chandigarh, hair and scalp treatment Sector 45 Chandigarh, dermatology consultation Sector 45 Chandigarh">
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
            <h1>Dermatologist in <a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> Chandigarh</h1>
            <p>Clinical Skin, Hair & Aesthetic Care at Dermessence</p>
            <a href="#book" class="btn123 btn-big123">Book Consultation Now</a>
        </section>

        <div class="box123">
            <p>Healthy skin and a balanced scalp contribute significantly to comfort, confidence, and overall wellbeing. For individuals consulting a <strong>Dermatologist in <a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> Chandigarh</strong>, Dermessence provides comprehensive dermatology care based on clinical accuracy, ethical medical practice, and long-term skin health planning.</p>
            
            <p><a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> is a well-established residential area of Chandigarh with families, professionals, and students. Daily exposure to sunlight, pollution, stress, and lifestyle changes often leads to persistent skin and hair concerns. At Dermessence, every concern is approached as a medical condition, ensuring accurate diagnosis and evidence-based treatment rather than short-term cosmetic solutions.</p>
            
            <p>Dermessence is recognised across Chandigarh for delivering integrated care in clinical dermatology, hair disorders, and aesthetic dermatology, all under experienced dermatologist supervision.</p>
            
            <a href="/dermatologist-chandigarh/" class="btn123">👉 View all dermatology services</a>
        </div>

        <!-- Nearby Sectors BEFORE - Only Sector 44 -->
        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">Nearby <strong>dermatologist clinic Sector 45 Chandigarh</strong></h3>
            <div class="sector-links">
                <a href="/dermatologist-sector-44-chandigarh/" class="sector-link">Sector 44</a>
            </div>
        </div>

        <h2 class="ttl123">Why Choose a Dermatologist in <a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> Chandigarh</h2>
        <div class="box123">
            <p>Access to a nearby dermatologist helps maintain continuity of care, especially for skin and hair conditions that require regular monitoring. Residents of <a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> Chandigarh prefer consulting a local dermatologist because it offers:</p>
            <ul>
                <li>Convenient access for consultations and reviews</li>
                <li>Consistent follow-ups for chronic skin and scalp conditions</li>
                <li>Personalised treatment planning</li>
                <li>Long-term dermatologist–patient care continuity</li>
            </ul>
            <p>Dermessence serves <a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> and surrounding areas with specialist-level <strong>dermatology consultation Sector 45 Chandigarh</strong> services in a hygienic and professional clinical environment.</p>
        </div>

        <h2 class="ttl123">Why People Prefer a Dermatologist in Chandigarh</h2>
        <div class="box123">
            <p>Chandigarh is known for its organised healthcare infrastructure and high medical standards. People prefer consulting a dermatologist in Chandigarh because they receive expert evaluation, advanced treatment options, and ethical medical care.</p>
            <ul>
                <li>Qualified dermatologists with strong clinical expertise</li>
                <li>Access to advanced skin, hair, and laser technologies</li>
                <li>Strict hygiene and patient safety protocols</li>
                <li>Evidence-based dermatology practices</li>
                <li>Transparent consultations and structured follow-ups</li>
            </ul>
            <p>Dermatologists in Chandigarh are trusted for managing medical skin disorders and aesthetic concerns with stable, long-term outcomes.</p>
        </div>

        <h2 class="ttl123">Skin Concerns Commonly Seen at a Dermatologist in Chandigarh</h2>
        <div class="box123">
            <p>Environmental exposure, sun damage, pollution, and lifestyle stress contribute to a wide range of dermatological conditions.</p>
        </div>

        <div class="grd123">
            <div class="crd123">
                <h3 style="color:gold;">Common Skin Conditions</h3>
                <ul>
                    <li>Acne and recurrent breakouts</li>
                    <li>Acne scars and post-acne pigmentation</li>
                    <li>Pigmentation, tanning, and melasma</li>
                    <li>Open pores and uneven skin texture</li>
                    <li>Skin allergies and sensitivity</li>
                    <li>Eczema, dermatitis, and psoriasis</li>
                </ul>
                <p style="margin-top: 1rem;">
                    <a href="/acne-care-chandigarh/" class="btn123">👉 Acne treatment services</a><br>
                    <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Scar correction</a> | 
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
                    <a href="/hair-loss-doctor-chandigarh/" class="btn123">👉 Hair fall evaluation</a><br>
                    <a href="/prp-hair-chandigarh/" class="btn123">👉 PRP hair therapy</a><br>
                    <a href="/dandruff-scalp-care-chandigarh/" class="btn123">👉 Dandruff & scalp care</a>
                </p>
                <p>A dermatologist focuses on root-cause diagnosis to ensure effective and sustainable <strong>hair and scalp treatment Sector 45 Chandigarh</strong>.</p>
            </div>
        </div>

        <!-- Doctor Section with Image -->
        <div class="doctor-section">
            <h2 class="ttl123">Meet Dr. Sukhmani – Dermatologist Serving <a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> Chandigarh</h2>
            <img src="https://images.unsplash.com/photo-1625285994073-1625285994073?w=400&fit=crop&crop=face" alt="Dr. Sukhmani - Dermatologist Sector 45 Chandigarh" class="doctor-image">
            <div class="box123" style="max-width: 800px; margin: 0 auto;">
                <p>Dr. Sukhmani is the lead dermatologist at Dermessence, known for her ethical, patient-centric, and evidence-based dermatology approach.</p>
                
                <h4 style="color: #D4AF37; margin: 1.5rem 0 1rem;">Her clinical philosophy includes:</h4>
                <ul>
                    <li>Detailed dermatological evaluation</li>
                    <li>Honest diagnosis with realistic outcomes</li>
                    <li>Use of medically approved technologies</li>
                    <li>Long-term skin and hair health planning</li>
                </ul>

                <h4 style="color: #D4AF37; margin: 1.5rem 0 1rem;">Areas of Expertise:</h4>
                <ul>
                    <li>Clinical dermatology (acne, pigmentation, eczema)</li>
                    <li>Hair and scalp disorders</li>
                    <li>Aesthetic dermatology and rejuvenation</li>
                    <li>Preventive and maintenance skin care</li>
                </ul>
                
                <p>Patients from <a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> Chandigarh trust her for clarity, safety, and consistent clinical results.</p>
            </div>
        </div>

        <h2 class="ttl123">What to Expect During Your Visit in Chandigarh</h2>
        <div class="box123">
            <p>Dermessence follows a structured and transparent consultation pathway to ensure patient comfort and confidence.</p>
            <ol class="num-list" style="padding-left: 1rem; margin-top: 2rem;">
                <li><strong>Step 1: Detailed Consultation</strong><br>Discussion of skin or hair concerns, medical history, lifestyle factors, and expectations.</li>
                <li><strong>Step 2: Clinical Examination</strong><br>Thorough examination of the skin or scalp to establish an accurate diagnosis.</li>
                <li><strong>Step 3: Personalised Treatment Plan</strong><br>Clear explanation of: Diagnosis and cause, Treatment options, Expected improvement timeline, Post-treatment care.</li>
                <li><strong>Step 4: Safe & Ethical Treatment</strong><br>All treatments are performed using clinically approved methods.</li>
                <li><strong>Step 5: Follow-Up & Maintenance</strong><br>Planned follow-ups help maintain results and prevent recurrence.</li>
            </ol>
        </div>

        <h2 class="ttl123">Dermatology Services Available Near <a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> Chandigarh</h2>
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
                    <li>Scar reduction</li>
                    <li>Texture refinement</li>
                </ul>
                <a href="/pimple-scar-removal-chandigarh/" class="btn123">👉 Acne scar treatments</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">3. Pigmentation & Skin Brightening</h3>
                <ul>
                    <li>Dark spots</li>
                    <li>Uneven tone</li>
                    <li>Sun damage</li>
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
                    <li>Dull skin</li>
                </ul>
                <a href="/microneedling-chandigarh/" class="btn123">👉 Microneedling therapy</a>
            </div>
            <div class="crd123">
                <h3 style="color:gold;">6. Laser & Aesthetic Procedures</h3>
                <ul>
                    <li>Laser hair reduction</li>
                    <li>Skin rejuvenation</li>
                </ul>
                <a href="/laser-hair-removal-chandigarh/" class="btn123">👉 Laser hair removal</a>
            </div>
        </div>

        <div class="box123">
            <h3 style="color: #D4AF37;">Personalised Dermatology Care for <a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> Residents</h3>
            <p>Each treatment plan at Dermessence is customised based on:</p>
            <ul>
                <li>Skin type and sensitivity</li>
                <li>Severity of concern</li>
                <li>Lifestyle and age factors</li>
                <li>Long-term skin goals</li>
            </ul>
            <p>This ensures safe, effective, and sustainable dermatology outcomes.</p>
        </div>

        <!-- Nearby Sectors AFTER - Only Sector 46 -->
        <div class="nearby-sectors">
            <h3 style="color: #D4AF37; margin-bottom: 1rem;">More <strong>skin specialist near Sector 45 Chandigarh</strong></h3>
            <div class="sector-links">
                <a href="/dermatologist-sector-46-chandigarh/" class="sector-link">Sector 46</a>
            </div>
        </div>

        <h2 class="ttl123" id="book">Book a Consultation with a Dermatologist in <a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> Chandigarh</h2>
        <div class="box123" style="text-align: center;">
            <h3 style="color: #D4AF37;">Trusted Dermatologist in <a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> Chandigarh for Long-Term Skin Health</h3>
            <p>Dermessence has earned its reputation through clinical excellence, ethical dermatology practices, and patient trust. Residents of <a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> Chandigarh rely on Dermessence for accurate diagnosis, safe treatment, and consistent follow-up care.</p>
            
            <p><strong>Dermessence provides professional, ethical, and result-focused dermatology care for patients in and around <a href="/dermatologist-sector-45-chandigarh/" class="sector-link-text">Sector 45</a> Chandigarh.</strong></p>
            
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
