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
    <title>Pigmentation Care in Chandigarh | Even Skin Tone Treatment</title>
    <meta name="description" content="Dark spots, tanning or uneven skin tone? Get expert pigmentation care in Chandigarh with safe dermatology-approved treatments.">
    <meta name="keywords" content="Pigmentation Care Chandigarh, pigmentation treatment in Chandigarh, dark spots treatment Chandigarh, skin pigmentation specialist Chandigarh, uneven skin tone treatment Chandigarh">
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
                <h1>Pigmentation Care in Chandigarh</h1>
                <p>Expert Treatment for Dark Spots & Uneven Skin Tone at Dermessence. Safe, dermatologist-led solutions.</p>
                <div style="margin-top: 2rem;">
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">👉 Complete Dermatology Services</a>
                    <a href="/acne-care-chandigarh/" class="btn123 btn-big123">Acne Care</a>
                    <a href="tel:+919915930506" class="btn123 btn-big123"><i class="fas fa-phone"></i> Call Now</a>
                </div>
            </div>
        </section>

        <div class="cnt123">
            <!-- Complete Introduction -->
            <div class="box123">
                <p>Searching for <strong>pigmentation care in Chandigarh</strong>? Dermessence offers dermatologist-led solutions for dark spots, tanning, and uneven skin tone.</p>
                <p>Different pigmentation types need specific treatments. Our <strong>pigmentation treatment in Chandigarh</strong> follows evidence-based methodology for skin safety and natural results.</p>
                <p>Recognised as trusted <strong>skin pigmentation specialist Chandigarh</strong> using advanced skin technologies.</p>
                <a href="/dermatologist-chandigarh/" class="btn123" style="margin-top: 1rem; display: inline-block;">👉 Explore our complete dermatology services</a>
            </div>

            <!-- Why Professional Pigmentation Care -->
            <h2 class="ttl123">Why Professional Pigmentation Care</h2>
            <div class="box123">
                <p>Professional <strong>pigmentation care Chandigarh</strong> ensures safe, effective results:</p>
                <ul>
                    <li>Identifies exact cause of pigmentation</li>
                    <li>Right treatment for your skin type</li>
                    <li>Prevents pigmentation recurrence</li>
                    <li>Improves skin tone evenly</li>
                    <li>Maintains long-term skin health</li>
                </ul>
                <p>Every treatment begins with detailed skin analysis.</p>
            </div>

            <!-- Why Chandigarh -->
            <h2 class="ttl123">Why Chandigarh Dermatologists</h2>
            <div class="box123">
                <p>Chandigarh offers advanced pigmentation treatments. People prefer our specialists because:</p>
                <ul>
                    <li>Experienced <strong>dark spots treatment Chandigarh</strong> experts</li>
                    <li>Advanced pigmentation and laser treatments</li>
                    <li>High hygiene and patient safety standards</li>
                    <li>Evidence-based diagnosis and treatment</li>
                    <li>Transparent consultation and follow-up</li>
                </ul>
            </div>

            <!-- Pigmentation Specific Concerns -->
            <h2 class="ttl123">Pigmentation & Related Concerns</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-sun"></i> Pigmentation Types</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Hyperpigmentation and dark spots</li>
                        <li>Sun tanning and uneven tone</li>
                        <li>Post-acne pigmentation</li>
                        <li>Melasma and patchy pigmentation</li>
                        <li>Dull and uneven complexion</li>
                        <li>Sensitive and inflamed skin</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-hair"></i> Related Issues</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Hormonal imbalance</li>
                        <li>Hair fall and scalp sensitivity</li>
                        <li>Stress-related skin concerns</li>
                    </ul>
                    <a href="/hair-loss-doctor-chandigarh/" class="btn123" style="margin-top: 1rem;">Hair Care Services</a>
                </div>
            </div>
            <div style="text-align: center; margin: 2rem 0;">
                <a href="/acne-care-chandigarh/" class="btn123">Acne Care</a>
                <a href="/pimple-scar-removal-chandigarh/" class="btn123">Pimple Scars</a>
                <a href="/scar-removal-chandigarh/" class="btn123">All Scars</a>
            </div>

            <!-- Doctor Section -->
            <h2 class="ttl123">Dr. Sukhmani – Pigmentation Specialist</h2>
            <div class="doc123">
                <div class="box123">
                    <h3 style="color: #D4AF37; margin-bottom: 1rem;"><strong>Skin Pigmentation Specialist Chandigarh</strong></h3>
                    <p>Dr. Sukhmani specializes in pigmentation management with patient-centric, ethical approach.</p>
                    <p>Areas of expertise:</p>
                    <ul>
                        <li>Post-acne pigmentation</li>
                        <li>Sun-induced tanning</li>
                        <li>Hormonal pigmentation</li>
                        <li>Sensitive skin pigmentation management</li>
                    </ul>
                </div>
                <div class="img123">
                    <img src="https://via.placeholder.com/400x500/1a1a1a/D4AF37?text=Dr.+Sukhmani" alt="Dr. Sukhmani - Pigmentation Specialist Chandigarh">
                </div>
            </div>

            <!-- 5-Step Pigmentation Process -->
            <section class="sec123">
                <div class="cnt123">
                    <h2 class="ttl123">Your Pigmentation Treatment Journey</h2>
                    <div class="stp123">
                        <div class="step123">
                            <div class="num123">1</div>
                            <h4>Pigmentation Consultation</h4>
                            <p>Pigmentation history, sun exposure, skincare routine discussion.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">2</div>
                            <h4>Skin Examination</h4>
                            <p>Pigmentation type, depth, spread, skin sensitivity assessment.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">3</div>
                            <h4>Personalised Plan</h4>
                            <p>Treatment options, timeline, sessions, post-care explained.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">4</div>
                            <h4>Safe Treatment</h4>
                            <p>Clinically approved procedures for pigmentation reduction.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">5</div>
                            <h4>Follow-Up Care</h4>
                            <p>Regular monitoring maintains results and prevents recurrence.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 5 Advanced Pigmentation Treatments -->
            <h2 class="ttl123">Advanced Pigmentation Treatments</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-notes-medical"></i>1. Medical Management</h3>
                    <p>Control melanin, improve clarity, prevent recurrence.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-vial"></i>2. Chemical Peels</h3>
                    <p>Lighten dark spots, improve tone, enhance brightness.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-laser-pointer"></i>3. Laser Treatment</h3>
                    <p>Deeper pigmentation, stubborn patches, collagen remodelling.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-mix"></i>4. Combination Therapy</h3>
                    <p>Multiple treatments for optimal tone, texture, radiance.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-shield-alt"></i>5. Skin Maintenance</h3>
                    <p>Medical skincare, sun protection, lifestyle guidance.</p>
                </div>
            </div>
            <a href="/skin-glow-care-chandigarh/" class="btn123" style="display: block; text-align: center; margin: 2rem auto;">Skin Glow Care</a>

            <!-- Personalized Pigmentation Treatment -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Personalised Pigmentation Care</h3>
                <p>Customised based on:</p>
                <ul>
                    <li>Type and cause of pigmentation</li>
                    <li>Skin type and sensitivity</li>
                    <li>Age and healing response</li>
                    <li>Treatment goals</li>
                </ul>
                <p>Safe treatment with visible, long-term improvement.</p>
            </div>

            <!-- Who Should Visit -->
            <h2 class="ttl123">Who Needs Pigmentation Care?</h2>
            <div class="box123">
                <p>Consult if you have:</p>
                <ul>
                    <li>Dark spots or <strong>uneven skin tone treatment Chandigarh</strong></li>
                    <li>Persistent tanning</li>
                    <li>Post-acne marks</li>
                    <li>Hormonal pigmentation</li>
                    <li>Dull or patchy complexion</li>
                </ul>
                <p>Early care prevents pigmentation from worsening.</p>
            </div>

            <!-- Pigmentation Clinic Trust -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Trusted Pigmentation Clinic</h3>
                <p>Dermessence delivers <strong>pigmentation care Chandigarh</strong> through ethical practices and consistent results for all pigmentation types.</p>
            </div>

            <!-- FAQ Complete -->
            <h2 class="ttl123">Frequently Asked Questions</h2>
            <div class="box123">
                <div class="faq123">
                    <div class="qst123">
                        <span>Q1. Can pigmentation be completely removed?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Pigmentation can be significantly reduced with right treatment and maintenance.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q2. Safe for sensitive skin?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, treatments chosen based on skin sensitivity and suitability.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q3. How long for results?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Improvement is gradual, depends on pigmentation depth and type.</div>
                </div>
            </div>

            <!-- Final CTA -->
            <div class="cta-final123">
                <h3 style="color: #D4AF37; margin-bottom: 1.5rem; font-size: 1.8rem;">
                    Book Pigmentation Care in Chandigarh
                </h3>
                <p style="margin-bottom: 2rem; opacity: 0.9;">Expert treatment for radiant, even-toned skin.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; align-items: center;">
                    <a href="tel:+919915930506" class="btn123 btn-big123">
                        <i class="fas fa-phone"></i> +91-9915930506, 8847491254
                    </a>
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">All Services</a>
                    <a href="/skin-glow-care-chandigarh/" class="btn123 btn-big123">Skin Glow</a>
                    <a href="/skin-clinic-sector-21-chandigarh/" class="btn123 btn-big123">Sector 21</a>
                </div>
                <p style="margin-top: 2rem; opacity: 0.8; font-size: 1.1rem;">
                    <strong>Dermessence – Where Science Meets Radiant Skin Confidence</strong><br>
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
