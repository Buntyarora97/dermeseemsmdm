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
    <title>Dermatologist in Sector 17 Chandigarh | Dermessence</title>
    <meta name="description" content="Looking for a dermatologist in Sector 17 Chandigarh? Dermessence offers expert skin & hair treatments with advanced care, clear diagnosis, and follow-ups.">
    <meta name="keywords" content="dermatologist sector 17 chandigarh, dermatologist near Sector 17 Chandigarh, skin specialist in Sector 17 Chandigarh, best dermatologist in Chandigarh, hair fall specialist near Sector 17">
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
                <h1>Dermatologist in Sector 17 Chandigarh</h1>
                <p>Expert Skin, Hair & Aesthetic Care at Dermessence. Perfectly serving Sector 17 and nearby areas with medical expertise.</p>
                <div style="margin-top: 2rem;">
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">👉 Main Dermatology Services</a>
                    <a href="/trusted-skin-doctor-chandigarh/" class="btn123 btn-big123">Skin Doctor</a>
                    <a href="tel:+919915930506" class="btn123 btn-big123"><i class="fas fa-phone"></i> Call Now</a>
                </div>
            </div>
        </section>

        <div class="cnt123">
            <!-- Complete Introduction -->
            <div class="box123">
                <p>Searching for a <strong>dermatologist in Sector 17 Chandigarh</strong>? Dermessence provides comprehensive dermatology care supported by medical expertise, advanced technology, and ethical treatment standards.</p>
                <p>Sector 17, being the heart of Chandigarh, is home to people who value quality healthcare. Dermessence caters to these expectations by offering reliable <strong>skin specialist in Sector 17 Chandigarh</strong> solutions under expert supervision for acne, pigmentation, hair fall, and chronic skin conditions.</p>
                <p>At Dermessence, dermatology focuses on accurate diagnosis, personalized treatment planning, and long-term skin health rather than cosmetic improvements.</p>
                <a href="/dermatologist-chandigarh/" class="btn123" style="margin-top: 1rem; display: inline-block;">👉 Explore our main dermatology services</a>
            </div>

            <!-- Why Dermessence Near Sector 17 -->
            <h2 class="ttl123">Why Dermessence for Sector 17</h2>
            <div class="box123">
                <p>Choosing the right <strong>dermatologist near Sector 17 Chandigarh</strong> is essential. Dermessence is preferred by patients living or working near Sector 17 due to:</p>
                <ul>
                    <li>Experienced <strong>best dermatologist in Chandigarh</strong></li>
                    <li>Advanced diagnostic and treatment equipment</li>
                    <li>Evidence-based dermatology protocols</li>
                    <li>Strict hygiene and patient safety standards</li>
                    <li>Honest advice and ethical care</li>
                    <li>Customized treatment plans</li>
                </ul>
                <p>Patients searching for a dermatologist near Sector 17 Chandigarh value Dermessence for treating root causes rather than temporary solutions.</p>
            </div>

            <!-- Why Chandigarh -->
            <h2 class="ttl123">Why Chandigarh Dermatologists</h2>
            <div class="box123">
                <p>Chandigarh is known for its modern healthcare infrastructure. People prefer consulting a dermatologist in Chandigarh because:</p>
                <ul>
                    <li>Availability of qualified and experienced dermatologists</li>
                    <li>Access to advanced skin, hair, and laser treatments</li>
                    <li>High standards of hygiene and patient safety</li>
                    <li>Evidence-based treatment approaches</li>
                    <li>Transparent consultation and follow-up systems</li>
                </ul>
            </div>

            <!-- ALL Skin Concerns -->
            <h2 class="ttl123">Common Skin Concerns We Treat</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-allergies"></i> Skin Conditions</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Acne and recurring pimples</li>
                        <li>Acne scars and post-acne marks</li>
                        <li>Pigmentation, tanning, and melasma</li>
                        <li>Uneven skin tone and dull complexion</li>
                        <li>Fungal and bacterial skin infections</li>
                        <li>Eczema, dermatitis, and psoriasis</li>
                        <li>Skin allergies and sensitivity issues</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-hair"></i> Hair & Scalp</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Excessive hair fall and thinning</li>
                        <li><strong>Hair fall specialist near Sector 17</strong></li>
                        <li>Male and female pattern hair loss</li>
                        <li>Dandruff and itchy scalp</li>
                        <li>Scalp infections and inflammation</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-magic"></i> Aesthetic Concerns</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Fine lines and wrinkles</li>
                        <li>Open pores and uneven skin texture</li>
                        <li>Loss of skin firmness</li>
                        <li>Early signs of aging</li>
                    </ul>
                </div>
            </div>
            <div style="text-align: center; margin: 2rem 0;">
                <a href="/acne-care-chandigarh/" class="btn123">Acne care services</a>
                <a href="/pimple-scar-removal-chandigarh/" class="btn123">Scar treatments</a>
                <a href="/hair-loss-doctor-chandigarh/" class="btn123">Hair fall specialist</a>
                <br><br>
                <a href="/skin-glow-care-chandigarh/" class="btn123">Skin glow treatments</a>
                <a href="/scar-removal-chandigarh/" class="btn123">Scar removal</a>
                <a href="/open-pores-care-chandigarh/" class="btn123">Open pores care</a>
            </div>

            <!-- Doctor Section -->
            <h2 class="ttl123">Meet Dr. Sukhmani – Sector 17 Specialist</h2>
            <div class="doc123">
                <div class="box123">
                    <h3 style="color: #D4AF37; margin-bottom: 1rem;">Dermatologist Serving Sector 17</h3>
                    <p>Dr. Sukhmani is the lead dermatologist at Dermessence, known for her patient-centric approach, clinical precision, and ethical practice. Patients from Sector 17 Chandigarh trust her expertise.</p>
                    <p>She provides expert care for:</p>
                    <ul>
                        <li>Clinical skin disorders</li>
                        <li>Acne, pigmentation, and scar management</li>
                        <li>Hair loss and scalp conditions</li>
                        <li>Advanced skin rejuvenation treatments</li>
                    </ul>
                </div>
                <div class="img123">
                    <img src="https://via.placeholder.com/400x500/1a1a1a/D4AF37?text=Dr.+Sukhmani" alt="Dr. Sukhmani - Dermatologist Sector 17 Chandigarh">
                </div>
            </div>

            <!-- 5-Step Process -->
            <section class="sec123">
                <div class="cnt123">
                    <h2 class="ttl123">What to Expect at Your Visit</h2>
                    <div class="stp123">
                        <div class="step123">
                            <div class="num123">1</div>
                            <h4>Detailed Consultation</h4>
                            <p>One-on-one discussion about your skin/hair concern, medical history, lifestyle, expectations.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">2</div>
                            <h4>Clinical Examination</h4>
                            <p>Thorough examination of skin or scalp to diagnose condition accurately.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">3</div>
                            <h4>Personalized Treatment Plan</h4>
                            <p>Treatment options, expected results, duration, post-treatment instructions explained.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">4</div>
                            <h4>Safe & Ethical Treatment</h4>
                            <p>All treatments use clinically approved techniques in hygienic environment.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">5</div>
                            <h4>Follow-Up & Guidance</h4>
                            <p>Skincare routines, lifestyle advice, follow-up schedules for improvement.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 6 Complete Services -->
            <h2 class="ttl123">Comprehensive Dermatology Services</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-notes-medical"></i>1. Clinical Skin Care</h3>
                    <p>Acne, pigmentation, melasma, rashes, eczema, psoriasis. Tailored to your skin needs.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-bandage"></i>2. Acne & Scar Management</h3>
                    <p>Control acne, treat scars/marks, improve texture and clarity.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-palette"></i>3. Pigmentation Solutions</h3>
                    <p>Reduce sun pigmentation, improve tone, enhance natural radiance.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-syringe"></i>4. Hair Loss Treatments</h3>
                    <p>Medical hair fall treatment, PRP therapy, scalp care. <a href="/prp-hair-chandigarh/">PRP services</a></p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-clock-reverse"></i>5. Anti-Aging Care</h3>
                    <p>Reduce wrinkles, improve firmness, restore youthful appearance.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-sparkles"></i>6. Aesthetic Procedures</h3>
                    <p>Peels, microneedling, laser rejuvenation. Medical supervision.</p>
                </div>
            </div>

            <!-- Personalized Care -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Personalized Dermatology Care</h3>
                <p>Treatment plans customized based on:</p>
                <ul>
                    <li>Skin type and sensitivity</li>
                    <li>Medical history</li>
                    <li>Lifestyle and environmental exposure</li>
                    <li>Individual treatment goals</li>
                </ul>
                <p>This ensures safe care with long-term results.</p>
            </div>

            <!-- Who Should Visit -->
            <h2 class="ttl123">Who Should Visit Dermatologist?</h2>
            <div class="box123">
                <p>Consult if you experience:</p>
                <ul>
                    <li>Persistent acne or scarring</li>
                    <li>Hair fall or scalp problems</li>
                    <li>Pigmentation or uneven skin tone</li>
                    <li>Chronic skin conditions</li>
                    <li>Early signs of aging</li>
                </ul>
                <p>Early consultation prevents complications and improves outcomes.</p>
            </div>

            <!-- Sector 17 Trust -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Trusted Dermatologist Near Sector 17</h3>
                <p>Dermessence has earned its reputation through clinical excellence, ethical care, and patient satisfaction from Sector 17 Chandigarh and nearby areas.</p>
            </div>

            <!-- FAQ Complete -->
            <h2 class="ttl123">Frequently Asked Questions</h2>
            <div class="box123">
                <div class="faq123">
                    <div class="qst123">
                        <span>Q1. Accessible from Sector 17 Chandigarh?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, Dermessence is conveniently accessible from <strong>Sector 17 Chandigarh</strong> and nearby areas.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q2. Skin + hair both treated?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, complete skin, hair, and aesthetic dermatology care provided.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q3. Safe for sensitive skin?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, all treatments customized and medically approved for all skin types.</div>
                </div>
            </div>

            <!-- Final CTA -->
            <div class="cta-final123">
                <h3 style="color: #D4AF37; margin-bottom: 1.5rem; font-size: 1.8rem;">
                    Book Dermatologist in Sector 17 Chandigarh
                </h3>
                <p style="margin-bottom: 2rem; opacity: 0.9;">Reliable dermatologist near Sector 17 with expert care and long-term solutions.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; align-items: center;">
                    <a href="tel:+919915930506" class="btn123 btn-big123">
                        <i class="fas fa-phone"></i> +91-9915930506, 8847491254
                    </a>
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">All Services</a>
                    <a href="/trusted-skin-doctor-chandigarh/" class="btn123 btn-big123">Skin Doctor</a>
                    <a href="/hair-loss-doctor-chandigarh/" class="btn123 btn-big123">Hair Specialist</a>
                </div>
                <p style="margin-top: 2rem; opacity: 0.8; font-size: 1.1rem;">
                    <strong>Dermessence – Where Science Meets Skin Confidence</strong><br>
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
