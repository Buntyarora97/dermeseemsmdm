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
    <title>Trusted Dermatologist in Chandigarh | Dermessence (Dr. Sukhmani)</title>
    <meta name="description" content="Searching for a trusted dermatologist in Chandigarh near you? Dermessence offers expert skin & hair care with clear diagnosis and follow-ups.">
    <meta name="keywords" content="Trusted Dermatologist in Chandigarh, best dermatologist in Chandigarh, trusted skin doctor in Chandigarh, hair fall specialist in Chandigarh, pimple scar removal, scar removal">
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
            max-width: 100%;
            margin: 0 auto;
            padding: 0 20px;
        }
        .main-content123 {
            min-height: 100vh;
        }
        /* Hero Section */
        .her123 {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 50%, #0a0a0a 100%);
            padding: 80px 0 60px;
            text-align: center;
            position: relative;
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
        .her123 p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        .btn123 {
            display: inline-block;
            background: linear-gradient(45deg, #D4AF37, #E6C147);
            color: #000;
            padding: 1rem 2.5rem;
            text-decoration: none;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.4);
            text-shadow: none;
        }
        .btn123:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(212, 175, 55, 0.6);
            color: #000;
        }
        /* Section Styles */
        .sec123 {
            padding: 80px 0;
            background: #111111;
        }
        .sec123:nth-of-type(odd) {
            background: #111111;
        }
        .sec123:nth-of-type(even) {
            background: #0f0f0f;
        }
        .ttl123 {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 3rem;
            background: linear-gradient(45deg, #D4AF37, #FADFA8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 20px rgba(212, 175, 55, 0.3);
        }
        .box123 {
            background: rgba(26, 26, 26, 0.8);
            border: 1px solid rgba(212, 175, 55, 0.2);
            border-radius: 20px;
            padding: 3rem;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(15px);
        }
        .box123:hover {
            border-color: #D4AF37;
            box-shadow: 0 20px 60px rgba(212, 175, 55, 0.15);
            transform: translateY(-8px);
        }
        ul {
            list-style: none;
            padding-left: 0;
        }
        ul li {
            padding: 1rem 0;
            position: relative;
            padding-left: 2.5rem;
            opacity: 0.95;
            border-bottom: 1px solid rgba(212, 175, 55, 0.1);
        }
        ul li:last-child {
            border-bottom: none;
        }
        ul li::before {
            content: '♦';
            position: absolute;
            left: 0;
            color: #D4AF37;
            font-size: 1rem;
            text-shadow: 0 0 10px rgba(212, 175, 55, 0.5);
        }
        .doc123 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            margin: 3rem 0;
        }
        .img123 {
            text-align: center;
        }
        .img123 img {
            width: 100%;
            max-width: 400px;
            border-radius: 20px;
            border: 3px solid rgba(212, 175, 55, 0.4);
            box-shadow: 0 20px 50px rgba(0,0,0,0.8);
        }
        .stp123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        .step123 {
            background: rgba(212, 175, 55, 0.08);
            padding: 2.5rem 2rem;
            border-radius: 20px;
            text-align: center;
            border: 1px solid rgba(212, 175, 55, 0.3);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        .step123::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.1), transparent);
            transition: left 0.5s;
        }
        .step123:hover::before {
            left: 100%;
        }
        .step123:hover {
            transform: translateY(-12px);
            border-color: #D4AF37;
            box-shadow: 0 25px 60px rgba(212, 175, 55, 0.2);
        }
        .num123 {
            width: 70px;
            height: 70px;
            background: linear-gradient(45deg, #D4AF37, #E6C147);
            color: #000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.6rem;
            margin: 0 auto 1.5rem;
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.5);
        }
        .grd123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
            margin-top: 2rem;
        }
        .crd123 {
            background: rgba(26, 26, 26, 0.7);
            padding: 2.5rem;
            border-radius: 20px;
            border: 1px solid rgba(212, 175, 55, 0.15);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        .crd123::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #D4AF37, #E6C147);
        }
        .crd123:hover {
            transform: translateY(-15px) scale(1.02);
            border-color: #D4AF37;
            box-shadow: 0 30px 70px rgba(212, 175, 55, 0.25);
        }
        .crd123 h3 {
            color: #D4AF37;
            margin-bottom: 1.5rem;
            font-size: 1.6rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .faq123 {
            background: rgba(18, 18, 18, 0.9);
            margin-bottom: 1.5rem;
            border-radius: 15px;
            border: 1px solid rgba(212, 175, 55, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .faq123:hover {
            border-color: rgba(212, 175, 55, 0.3);
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.15);
        }
        .qst123 {
            padding: 2rem 2.5rem;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(212, 175, 55, 0.05);
            transition: all 0.3s ease;
        }
        .qst123:hover {
            background: rgba(212, 175, 55, 0.12);
        }
        .ans123 {
            padding: 0 2.5rem 2rem;
            max-height: 0;
            overflow: hidden;
            transition: all 0.4s ease;
            background: rgba(212, 175, 55, 0.02);
        }
        .ans123.active {
            max-height: 300px;
            padding: 2rem 2.5rem;
        }
        @media (max-width: 768px) {
            .her123 h1 { font-size: 2.5rem; }
            .ttl123 { font-size: 2rem; }
            .doc123 { grid-template-columns: 1fr; gap: 2rem; }
            .grd123 { grid-template-columns: 1fr; }
            .box123 { padding: 2rem; }
            .her123 { padding: 60px 0 40px; }
        }
    </style>
</head>
<body>

    <!-- Main Page Content -->
    <div class="main-content123">
        <!-- Hero Section -->
        <section class="her123">
            <div class="cnt123">
                <h1>Trusted Dermatologist in Chandigarh</h1>
                <p>Advanced Skin, Hair & Aesthetic Care at Dermessence (Dr. Sukhmani)</p>
                <a href="#contact" class="btn123">Book Consultation Now</a>
            </div>
        </section>

        <!-- Main Content Sections -->
        <div class="cnt123">
            <div class="box123">
                <p>Healthy skin reflects overall wellness, confidence, and quality of life. If you are searching for a <strong>trusted dermatologist in Chandigarh</strong>, Dermessence offers comprehensive dermatology care backed by medical expertise, advanced technology, and ethical treatment practices. From common skin concerns to complex dermatological conditions, our clinic is dedicated to delivering safe, effective, and personalized care for every patient.</p>
                <p>Dermessence is recognized as a reliable destination for dermatology services, cosmetic skin treatments, and hair restoration solutions. Our patient-first approach, transparent consultation process, and evidence-based treatments make us a preferred choice for individuals looking for the <strong>best dermatologist in Chandigarh</strong>.</p>
                <a href="/dermatologist-chandigarh/" class="btn123" style="margin-top: 1.5rem; display: inline-block;">👉 Explore our main dermatology services here</a>
            </div>

            <h2 class="ttl123">Why People Prefer a Dermatologist in Chandigarh</h2>
            <div class="box123">
                <p>Chandigarh has emerged as a leading destination for advanced dermatology care due to its modern healthcare infrastructure, awareness of skin health, and access to experienced specialists. People prefer consulting a dermatologist in Chandigarh because they receive a combination of medical expertise, advanced treatments, and ethical care under one roof.</p>
                <ul>
                    <li>Availability of qualified and experienced dermatologists</li>
                    <li>Access to advanced skin, hair, and aesthetic technologies</li>
                    <li>High standards of hygiene and patient safety</li>
                    <li>Evidence-based treatment approaches</li>
                    <li>Personalized care for diverse skin types and concerns</li>
                </ul>
            </div>

            <h2 class="ttl123">Skin Concerns Commonly Seen</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-clinic-medical"></i> Common Skin Conditions</h3>
                    <ul style="padding-left: 0;">
                        <li>Acne and recurring pimples</li>
                        <li>Acne scars and post-acne marks</li>
                        <li>Pigmentation, tanning, and melasma</li>
                        <li>Uneven skin tone and dull skin</li>
                        <li>Fungal and bacterial skin infections</li>
                        <li>Eczema, dermatitis, and psoriasis</li>
                        <li>Skin allergies and sensitivity issues</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-hair"></i> Hair & Scalp Concerns</h3>
                    <ul style="padding-left: 0;">
                        <li>Excessive hair fall and thinning</li>
                        <li>Pattern hair loss in men and women</li>
                        <li>Dandruff and itchy scalp</li>
                        <li>Scalp infections and inflammation</li>
                        <li>Weak or damaged hair</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-spa"></i> Aesthetic & Aging Concerns</h3>
                    <ul style="padding-left: 0;">
                        <li>Fine lines and wrinkles</li>
                        <li>Open pores and uneven texture</li>
                        <li>Loss of skin firmness</li>
                        <li>Early signs of aging</li>
                    </ul>
                </div>
            </div>

            <h2 class="ttl123">Meet Dr. Sukhmani</h2>
            <div class="doc123">
                <div class="box123">
                    <p>Dr. Sukhmani at Dermessence is known for her patient-centric approach, clinical precision, and ethical dermatology practice. She provides comprehensive care for both medical and aesthetic skin concerns while ensuring that every treatment is tailored to individual skin needs.</p>
                    <ul>
                        <li>Detailed skin and scalp evaluation</li>
                        <li>Honest treatment recommendations</li>
                        <li>Use of medically approved technologies</li>
                        <li>Focus on skin safety and natural results</li>
                    </ul>
                </div>
                <div class="img123">
                    <img src="https://via.placeholder.com/400x500/1a1a1a/D4AF37?text=Dr.+Sukhmani" alt="Dr. Sukhmani">
                </div>
            </div>

            <section class="sec123">
                <div class="cnt123">
                    <h2 class="ttl123">What to Expect During Your Visit</h2>
                    <div class="stp123">
                        <div class="step123">
                            <div class="num123">1</div>
                            <h4 style="color: #f5f5f5; margin-bottom: 1rem;">Detailed Consultation</h4>
                            <p>One-on-one discussion about your concerns, history, and expectations.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">2</div>
                            <h4 style="color: #f5f5f5; margin-bottom: 1rem;">Clinical Examination</h4>
                            <p>Thorough skin/scalp examination for accurate diagnosis.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">3</div>
                            <h4 style="color: #f5f5f5; margin-bottom: 1rem;">Personalized Plan</h4>
                            <p>Custom treatment plan with options, results, and care guidance.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">4</div>
                            <h4 style="color: #f5f5f5; margin-bottom: 1rem;">Safe Treatment</h4>
                            <p>Clinically approved procedures in hygienic environment.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">5</div>
                            <h4 style="color: #f5f5f5; margin-bottom: 1rem;">Follow-Up</h4>
                            <p>Skincare guidance and follow-up for consistent results.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sec123">
                <div class="cnt123">
                    <h2 class="ttl123">Comprehensive Dermatology Services</h2>
                    <div class="grd123">
                        <div class="crd123"><h3><i class="fas fa-notes-medical"></i>Clinical Skin Treatments</h3><p>Acne, eczema, psoriasis, fungal infections, pigmentation disorders.</p></div>
                        <div class="crd123"><h3><i class="fas fa-bandage"></i>Acne & Scar Management</h3><p>Active acne control, prevention, scar treatment with peels, microneedling.</p></div>
                        <div class="crd123"><h3><i class="fas fa-palette"></i>Pigmentation Solutions</h3><p>Melasma, tanning, dark spots for even tone and radiance.</p></div>
                        <div class="crd123"><h3><i class="fas fa-syringe"></i>Hair Loss Treatments</h3><p>PRP therapy, scalp analysis, medical hair thinning management.</p></div>
                        <div class="crd123"><h3><i class="fas fa-clock-reverse"></i>Anti-Aging</h3><p>Non-surgical wrinkle reduction, skin firming, texture improvement.</p></div>
                        <div class="crd123"><h3><i class="fas fa-sparkles"></i>Aesthetic Procedures</h3><p>Chemical peels, microneedling, laser rejuvenation, open pores care.</p></div>
                    </div>
                </div>
            </section>

            <h2 class="ttl123">Frequently Asked Questions</h2>
            <div class="box123">
                <div class="faq123">
                    <div class="qst123">
                        <span>Why choose Dermessence as dermatologist in Chandigarh?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Experienced care, advanced treatments, ethical practices, personalized solutions.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Are treatments safe for sensitive skin?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes. Customized based on skin type using medically approved methods.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Medical and cosmetic conditions both treated?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes. Complete care: clinical, hair solutions, aesthetic dermatology.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>How long for results?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Varies by condition. Some weeks, others need consistent follow-up.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Consultation necessary before treatment?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes. Ensures accurate diagnosis and safe treatment plan.</div>
                </div>
            </div>

            <div style="text-align: center; margin: 4rem 0; padding: 2rem 0;">
                <a href="tel:+919915930506" class="btn123" style="font-size: 1.3rem; padding: 1.2rem 3rem;">
                    <i class="fas fa-phone"></i> +91-9915930506, 8847491254
                </a>
                <p style="margin-top: 1rem; opacity: 0.8; font-size: 1.1rem;">Trusted Dermatologist in Chandigarh | Dermessence</p>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.qst123').forEach(q => {
            q.addEventListener('click', () => {
                const ans = q.nextElementSibling;
                const icon = q.querySelector('i');
                ans.classList.toggle('active');
                icon.style.transform = ans.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0)';
            });
        });
        document.querySelectorAll('.btn123[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                e.preventDefault();
                document.query.querySelector(a.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
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
