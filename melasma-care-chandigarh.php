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
    <title>Melasma Care in Chandigarh | Advanced Skin Treatment</title>
    <meta name="description" content="Expert melasma care in Chandigarh with personalised treatment plans, gentle therapies, and dermatologist supervision at Dermessence.">
    <meta name="keywords" content="Melasma Care Chandigarh, melasma treatment in Chandigarh, facial melasma specialist Chandigarh, hormonal pigmentation treatment Chandigarh, melasma skin clinic Chandigarh">
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
                <h1>Melasma Care in Chandigarh</h1>
                <p>Dermatologist-Led Treatment for Facial Pigmentation at Dermessence. Long-term melasma control.</p>
                <div style="margin-top: 2rem;">
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">👉 Complete Dermatology Services</a>
                    <a href="/pigmentation-care-chandigarh/" class="btn123 btn-big123">General Pigmentation</a>
                    <a href="tel:+919915930506" class="btn123 btn-big123"><i class="fas fa-phone"></i> Call Now</a>
                </div>
            </div>
        </section>

        <div class="cnt123">
            <!-- Complete Introduction -->
            <div class="box123">
                <p>Searching for <strong>melasma care in Chandigarh</strong>? Dermessence offers medically guided solutions for facial melasma affecting cheeks, forehead, and upper lip.</p>
                <p>Melasma requires careful treatment due to hormonal triggers. Our <strong>melasma treatment in Chandigarh</strong> follows evidence-based protocols to prevent relapse and protect skin barrier.</p>
                <p>Recognised as trusted <strong>melasma skin clinic Chandigarh</strong> using advanced dermatology technologies for sustainable results.</p>
                <a href="/dermatologist-chandigarh/" class="btn123" style="margin-top: 1rem; display: inline-block;">👉 Explore our complete dermatology services</a>
            </div>

            <!-- Why Professional Melasma Care -->
            <h2 class="ttl123">Why Professional Melasma Care</h2>
            <div class="box123">
                <p>Professional <strong>melasma care Chandigarh</strong> prevents worsening and ensures long-term control:</p>
                <ul>
                    <li>Accurate diagnosis of melasma type</li>
                    <li>Identifies hormonal/environmental triggers</li>
                    <li>Safe, skin-appropriate treatments</li>
                    <li>Prevents rebound pigmentation</li>
                    <li>Gradual, long-term improvement</li>
                </ul>
                <p>Every treatment begins with detailed dermatological evaluation.</p>
            </div>

            <!-- Why Chandigarh -->
            <h2 class="ttl123">Why Chandigarh Dermatologists</h2>
            <div class="box123">
                <p>Chandigarh specialists excel in complex pigmentation. People prefer our doctors because:</p>
                <ul>
                    <li>Experienced <strong>facial melasma specialist Chandigarh</strong></li>
                    <li>Advanced melasma and pigmentation treatments</li>
                    <li>High hygiene and patient safety standards</li>
                    <li>Evidence-based diagnosis and planning</li>
                    <li>Transparent consultation and follow-up</li>
                </ul>
            </div>

            <!-- Melasma Specific Concerns -->
            <h2 class="ttl123">Melasma & Related Concerns</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-sun"></i> Common Conditions</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Melasma and facial pigmentation</li>
                        <li>Post-acne pigmentation</li>
                        <li>Sun-induced tanning</li>
                        <li>Uneven skin tone</li>
                        <li>Sensitive and reactive skin</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-hair"></i> Hormonal Issues</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Hormonal imbalance</li>
                        <li>PCOS-related skin changes</li>
                        <li>Stress-related skin sensitivity</li>
                    </ul>
                    <a href="/hair-loss-doctor-chandigarh/" class="btn123" style="margin-top: 1rem;">Hair & Hormonal Care</a>
                </div>
            </div>
            <div style="text-align: center; margin: 2rem 0;">
                <a href="/pigmentation-care-chandigarh/" class="btn123">General Pigmentation</a>
                <a href="/pimple-scar-removal-chandigarh/" class="btn123">Post-Acne Pigmentation</a>
            </div>

            <!-- Doctor Section -->
            <h2 class="ttl123">Dr. Sukhmani – Melasma Specialist</h2>
            <div class="doc123">
                <div class="box123">
                    <h3 style="color: #D4AF37; margin-bottom: 1rem;"><strong>Hormonal Pigmentation Treatment Chandigarh</strong></h3>
                    <p>Dr. Sukhmani specializes in melasma with gentle, skin-safe protocols and patient education.</p>
                    <p>Areas of expertise:</p>
                    <ul>
                        <li>Hormonal melasma</li>
                        <li>Sun-induced facial pigmentation</li>
                        <li>Chronic/recurrent melasma</li>
                        <li>Sensitive skin pigmentation management</li>
                    </ul>
                </div>
                <div class="img123">
                    <img src="https://via.placeholder.com/400x500/1a1a1a/D4AF37?text=Dr.+Sukhmani" alt="Dr. Sukhmani - Melasma Specialist Chandigarh">
                </div>
            </div>

            <!-- 5-Step Melasma Process -->
            <section class="sec123">
                <div class="cnt123">
                    <h2 class="ttl123">Your Melasma Treatment Journey</h2>
                    <div class="stp123">
                        <div class="step123">
                            <div class="num123">1</div>
                            <h4 style="color:gold;">Melasma Consultation</h4>
                            <p>Pigmentation history, hormonal factors, sun exposure discussion.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">2</div>
                            <h4 style="color:gold;">Skin Examination</h4>
                            <p>Melasma type (epidermal, dermal, mixed), depth assessment.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">3</div>
                            <h4 style="color:gold;">Personalised Plan</h4>
                            <p>Treatment options, timeline, sun-protection guidance explained.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">4</div>
                            <h4 style="color:gold;">Safe Treatment</h4>
                            <p>Melasma-safe procedures using clinically approved methods.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">5</div>
                            <h4 style="color:gold;">Maintenance Care</h4>
                            <p>Regular follow-ups prevent relapse and maintain results.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 5 Advanced Melasma Treatments -->
            <h2 class="ttl123">Advanced Melasma Treatments</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-notes-medical"></i>1. Medical Management</h3>
                    <p>Control melanin, reduce intensity, prevent flare-ups.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-vial"></i>2. Chemical Peels</h3>
                    <p>Carefully selected peels for superficial pigmentation, skin clarity.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-laser-pointer"></i>3. Laser (Selected Cases)</h3>
                    <p>Deep pigmentation breakdown, texture improvement (carefully planned).</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-mix"></i>4. Combination Therapy</h3>
                    <p>Multi-modal approach for optimal, sustainable results.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-shield-alt"></i>5. Maintenance Care</h3>
                    <p>Medical skincare, sun protection, lifestyle/hormonal guidance.</p>
                </div>
            </div>
            <a href="/skin-glow-care-chandigarh/" class="btn123" style="display: block; text-align: center; margin: 2rem auto;">Skin Glow & Maintenance</a>

            <!-- Personalized Melasma Treatment -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Personalised Melasma Care</h3>
                <p>Customised based on:</p>
                <ul>
                    <li>Melasma type and depth</li>
                    <li>Skin sensitivity</li>
                    <li>Hormonal/lifestyle factors</li>
                    <li>Long-term skin goals</li>
                </ul>
                <p>Safe, gradual improvement without temporary lightening followed by relapse.</p>
            </div>

            <!-- Who Should Visit -->
            <h2 class="ttl123">Who Needs Melasma Care?</h2>
            <div class="box123">
                <p>Consult if you have:</p>
                <ul>
                    <li>Persistent facial pigmentation</li>
                    <li>Dark patches on cheeks/forehead/upper lip</li>
                    <li>Pigmentation worsening with sun</li>
                    <li>Recurring pigmentation despite treatment</li>
                </ul>
                <p>Early care controls melasma and prevents progression.</p>
            </div>

            <!-- Melasma Clinic Trust -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Trusted Melasma Clinic</h3>
                <p>Dermessence delivers <strong>melasma care Chandigarh</strong> through ethical practices, patient education, and long-term skin stability.</p>
            </div>

            <!-- FAQ Complete -->
            <h2 class="ttl123">Frequently Asked Questions</h2>
            <div class="box123">
                <div class="faq123">
                    <div class="qst123">
                        <span>Q1. Can melasma be permanently cured?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Melasma can be controlled and improved; long-term maintenance essential.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q2. Safe for sensitive skin?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, treatments selected based on skin sensitivity and melasma type.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q3. How long for results?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Gradual improvement varies by severity and triggers.</div>
                </div>
            </div>

            <!-- Final CTA -->
            <div class="cta-final123">
                <h3 style="color: #D4AF37; margin-bottom: 1.5rem; font-size: 1.8rem;">
                    Book Melasma Care in Chandigarh
                </h3>
                <p style="margin-bottom: 2rem; opacity: 0.9;">Long-term melasma control for even-toned skin confidence.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; align-items: center;">
                    <a href="tel:+919915930506" class="btn123 btn-big123">
                        <i class="fas fa-phone"></i> +91-9915930506, 8847491254
                    </a>
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">All Services</a>
                    <a href="/pigmentation-care-chandigarh/" class="btn123 btn-big123">Pigmentation Care</a>
                    <a href="/skin-clinic-sector-21-chandigarh/" class="btn123 btn-big123">Sector 21 Clinic</a>
                </div>
                <p style="margin-top: 2rem; opacity: 0.8; font-size: 1.1rem;">
                    <strong>Dermessence – Where Science Meets Even-Toned Skin Confidence</strong><br>
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
