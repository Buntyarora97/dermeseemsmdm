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
    <title>Trusted Skin Specialist in Chandigarh | Dermessence Clinic</title>
    <meta name="description" content="Looking for a trusted skin specialist in Chandigarh? Dermessence offers expert diagnosis, ethical skin treatments and consistent follow-ups.">
    <meta name="keywords" content="Trusted Skin Specialist in Chandigarh, best skin specialist in Chandigarh, skin doctor in Chandigarh, dermatologist for skin problems, acne scar specialist Chandigarh, pigmentation treatment Chandigarh">
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
        .link-sec123 {
            text-align: center;
            margin: 3rem 0;
            padding: 2rem;
            background: rgba(212, 175, 55, 0.05);
            border-radius: 15px;
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
                <h1>Trusted Skin Specialist in Chandigarh</h1>
                <p>Comprehensive Skin, Hair & Aesthetic Care at Dermessence. Healthy skin is essential for comfort, confidence, and long-term well-being.</p>
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
                <p>If you are looking for a <strong>trusted skin specialist in Chandigarh</strong>, Dermessence offers expert dermatology care backed by clinical experience, advanced technology, and ethical medical practices.</p>
                <p>At Dermessence, we provide complete solutions for skin, hair, and aesthetic concerns, ranging from common conditions like <a href="/acne-care-chandigarh/">acne</a> and <a href="/skin-glow-care-chandigarh/">pigmentation</a> to advanced dermatological and cosmetic procedures. Our focus is not only on treatment but on accurate diagnosis, patient education, and long-term skin health.</p>
                <p>Recognized as a reliable <strong>skin doctor in Chandigarh</strong>, Dermessence follows a patient-first approach with transparent consultations and evidence-based treatments that deliver safe and lasting results.</p>
                <a href="/dermatologist-chandigarh/" class="btn123" style="margin-top: 1rem; display: inline-block;">👉 Explore our main dermatology services</a>
            </div>

            <!-- Why Trusted Specialist -->
            <h2 class="ttl123">Why Choosing Trusted Skin Specialist Matters</h2>
            <div class="box123">
                <p>Skin problems often reflect deeper medical, hormonal, or lifestyle-related issues. Consulting a qualified and <strong>trusted skin specialist in Chandigarh</strong> ensures that treatment goes beyond surface-level solutions.</p>
                <ul>
                    <li>Accurate diagnosis of skin and scalp conditions</li>
                    <li>Medically approved and safe treatments</li>
                    <li>Long-term improvement instead of temporary relief</li>
                    <li>Prevention of complications and skin damage</li>
                    <li>Personalized care based on skin type and sensitivity</li>
                </ul>
                <p>At Dermessence, every treatment begins with a thorough clinical evaluation, ensuring that care is both effective and medically responsible.</p>
            </div>

            <!-- Why Chandigarh -->
            <h2 class="ttl123">Why People Prefer Chandigarh Dermatologists</h2>
            <div class="box123">
                <p>Chandigarh has become a preferred destination for dermatology care due to its advanced healthcare infrastructure and growing awareness of skin health. People prefer consulting a <strong>best skin specialist in Chandigarh</strong> because they receive a combination of medical expertise, advanced technology, and ethical treatment standards.</p>
                <ul>
                    <li>Availability of experienced and qualified skin specialists</li>
                    <li>Access to advanced skin, hair, and laser treatments</li>
                    <li>High standards of hygiene and patient safety</li>
                    <li>Evidence-based treatment protocols</li>
                    <li>Transparent consultation and structured follow-ups</li>
                </ul>
                <p>Patients trust dermatologists in Chandigarh for their clear diagnosis, honest advice, and consistent long-term outcomes, which is why people from nearby regions also seek care here.</p>
            </div>

            <!-- ALL Skin Concerns -->
            <h2 class="ttl123">Skin Concerns Commonly Seen</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-allergies"></i> Common Skin Conditions</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Acne and frequent pimples</li>
                        <li>Acne scars and post-acne marks</li>
                        <li><strong>Acne and scar specialist Chandigarh</strong></li>
                        <li>Pigmentation, tanning, and melasma</li>
                        <li>Uneven skin tone and dull complexion</li>
                        <li>Fungal and bacterial skin infections</li>
                        <li>Eczema, dermatitis, and psoriasis</li>
                        <li>Skin allergies and sensitivity reactions</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-hair"></i> Hair & Scalp Concerns</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Excessive hair fall and thinning</li>
                        <li>Male and female pattern hair loss</li>
                        <li>Dandruff and itchy scalp</li>
                        <li>Scalp infections and inflammation</li>
                        <li>Weak, damaged, or brittle hair</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-magic"></i> Aesthetic & Aging</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Fine lines and wrinkles</li>
                        <li>Open pores and uneven skin texture</li>
                        <li>Loss of skin firmness and elasticity</li>
                        <li>Early signs of aging</li>
                    </ul>
                </div>
            </div>
            <div style="text-align: center; margin: 2rem 0;">
                <a href="/acne-care-chandigarh/" class="btn123">Dedicated acne care services</a>
                <a href="/pimple-scar-removal-chandigarh/" class="btn123">Scar treatments</a>
                <a href="/scar-removal-chandigarh/" class="btn123">Pimple mark solutions</a>
                <br><br>
                <a href="/hair-loss-doctor-chandigarh/" class="btn123">Hair care services</a>
                <a href="/skin-glow-care-chandigarh/" class="btn123">Pigmentation treatment Chandigarh</a>
                <a href="/open-pores-care-chandigarh/" class="btn123">Skin glow treatments</a>
            </div>

            <!-- Doctor Section -->
            <h2 class="ttl123">Meet Dr. Sukhmani – Lead Dermatologist</h2>
            <div class="doc123">
                <div class="box123">
                    <h3 style="color: #D4AF37; margin-bottom: 1rem;">Dermatologist for Skin Problems</h3>
                    <p>Dr. Sukhmani is the lead dermatologist at Dermessence and is known for her patient-centric approach, clinical precision, and ethical dermatology practice. She provides expert care for both medical and aesthetic skin concerns, ensuring that every treatment plan is tailored to the patient's skin type, condition, and long-term goals.</p>
                    <p>Areas of Expertise:</p>
                    <ul>
                        <li>Clinical dermatology and chronic skin disorders</li>
                        <li>Acne, <a href="/pimple-scar-removal-chandigarh/">pigmentation</a>, and scar management</li>
                        <li><a href="/hair-loss-doctor-chandigarh/">Hair loss treatment</a> and PRP therapy</li>
                        <li>Advanced skin rejuvenation procedures</li>
                    </ul>
                    <p>Patients trust Dr. Sukhmani for her clear communication, honest treatment recommendations, and commitment to long-term skin health, making Dermessence a reliable choice for a <strong>trusted skin specialist in Chandigarh</strong>.</p>
                </div>
                <div class="img123">
                    <img src="https://via.placeholder.com/400x500/1a1a1a/D4AF37?text=Dr.+Sukhmani" alt="Dr. Sukhmani - Trusted Skin Specialist">
                </div>
            </div>

            <!-- Visit Process -->
            <section class="sec123">
                <div class="cnt123">
                    <h2 class="ttl123">What to Expect During Your Visit</h2>
                    <div class="stp123">
                        <div class="step123">
                            <div class="num123">1</div>
                            <h4>Detailed Consultation</h4>
                            <p>A one-on-one discussion to understand your skin or hair concern, medical history, lifestyle factors, and expectations.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">2</div>
                            <h4>Clinical Examination</h4>
                            <p>A thorough examination of the skin or scalp to diagnose the condition accurately and assess severity.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">3</div>
                            <h4>Personalized Treatment Plan</h4>
                            <p>Based on diagnosis: Recommended treatment options, Expected outcomes, Duration of treatment, Post-treatment care guidelines.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">4</div>
                            <h4>Safe & Ethical Treatment</h4>
                            <p>All treatments performed using clinically approved methods in hygienic environment.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">5</div>
                            <h4>Follow-Up & Guidance</h4>
                            <p>Skincare advice, lifestyle recommendations, follow-up schedules for long-term improvement.</p>
                        </div>
                    </div>
                    <p style="text-align: center; margin-top: 2rem; opacity: 0.9;">This structured approach ensures every patient feels informed, confident, and well cared for.</p>
                </div>
            </section>

            <!-- 6 Complete Services -->
            <h2 class="ttl123">Comprehensive Skin Care Services</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-notes-medical"></i>1. Clinical Skin Treatments</h3>
                    <p>Expert care for: Acne and chronic pimples, Pigmentation disorders, Melasma and uneven skin tone, Skin rashes and infections, Eczema, dermatitis, and psoriasis. Tailored to individual skin needs.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-bandage"></i>2. Acne & Scar Management</h3>
                    <p>Focus: Controlling active acne, Preventing breakouts, Treating <a href="/pimple-scar-removal-chandigarh/">acne scars</a>, Improving texture. Medications, peels, microneedling, lasers.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-palette"></i>3. Pigmentation Solutions</h3>
                    <p>Reduce sun pigmentation, Improve tone uniformity, Enhance radiance, Restore texture. <a href="/skin-glow-care-chandigarh/">Pigmentation treatment Chandigarh</a>.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-syringe"></i>4. Hair & Scalp Care</h3>
                    <p>Hair fall diagnosis, Medical regrowth, PRP therapy, Dandruff care. <a href="/hair-loss-doctor-chandigarh/">Hair fall specialist</a> services.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-clock-reverse"></i>5. Anti-Aging</h3>
                    <p>Reduce wrinkles, Improve elasticity, Enhance contours, Natural results. Non-surgical solutions.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-sparkles"></i>6. Aesthetic Procedures</h3>
                    <p>Peels, microneedling, laser rejuvenation, <a href="/open-pores-care-chandigarh/">open pores</a>, maintenance. Medical supervision.</p>
                </div>
            </div>

            <!-- Personalized Care -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Personalized Dermatology Care</h3>
                <p>No two skin types are the same. Treatment plans customized based on:</p>
                <ul>
                    <li>Skin type and sensitivity</li>
                    <li>Medical history</li>
                    <li>Lifestyle and environmental exposure</li>
                    <li>Individual treatment goals</li>
                </ul>
                <p>This approach ensures maximum results with minimal side effects.</p>
            </div>

            <!-- Who Should Visit -->
            <h2 class="ttl123">Who Should Visit Skin Specialist?</h2>
            <div class="box123">
                <p>Consult a <strong>dermatologist for skin problems</strong> if you experience:</p>
                <ul>
                    <li>Persistent acne or scarring</li>
                    <li>Sudden or excessive <a href="/hair-loss-doctor-chandigarh/">hair fall</a></li>
                    <li><a href="/skin-glow-care-chandigarh/">Pigmentation</a> or uneven skin tone</li>
                    <li>Chronic skin conditions</li>
                    <li>Early signs of aging</li>
                    <li>Skin allergies or scalp issues</li>
                </ul>
                <p>Early consultation leads to better outcomes and prevents complications.</p>
            </div>

            <!-- Trust Badge -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Trusted Skin Clinic in Chandigarh</h3>
                <p>Dermessence has earned its reputation through consistent patient satisfaction, clinical excellence, and ethical practices. Committed to medical skin care, hair treatment, and aesthetic enhancement you can rely on.</p>
            </div>

            <!-- FAQ Complete -->
            <h2 class="ttl123">Frequently Asked Questions (FAQs)</h2>
            <div class="box123">
                <div class="faq123">
                    <div class="qst123">
                        <span>Q1. Why choose Dermessence <strong>skin specialist in Chandigarh</strong>?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Experienced dermatologists, advanced treatments, ethical practices, and personalized care.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q2. Safe for sensitive skin?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, treatments customized using medically approved techniques.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q3. Skin + hair both treated?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, complete skin, <a href="/hair-loss-doctor-chandigarh/">hair</a>, and aesthetic dermatology care.</div>
                </div>
            </div>

            <!-- Final CTA -->
            <div class="cta-final123">
                <h3 style="color: #D4AF37; margin-bottom: 1.5rem; font-size: 1.8rem;">
                    Book with Trusted Skin Specialist in Chandigarh
                </h3>
                <p style="margin-bottom: 2rem; opacity: 0.9;">Professional, ethical, result-oriented skin care at Dermessence.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; align-items: center;">
                    <a href="tel:+919915930506" class="btn123 btn-big123">
                        <i class="fas fa-phone"></i> +91-9915930506, 8847491254
                    </a>
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">All Services</a>
                    <a href="/trusted-skin-doctor-chandigarh/" class="btn123 btn-big123">Skin Doctor</a>
                    <a href="/best-dermatologist-chandigarh/" class="btn123 btn-big123">Best Specialist</a>
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
