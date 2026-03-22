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
    <title>Open Pores Care in Chandigarh | Smooth Skin Treatment</title>
    <meta name="description" content="Concerned about open pores and uneven skin texture? Get dermatologist-led open pores care in Chandigarh with safe, advanced skin treatments.">
    <meta name="keywords" content="Open Pores Care Chandigarh, open pores treatment in Chandigarh, large pores skin treatment Chandigarh, skin texture improvement clinic Chandigarh, dermatologist for open pores Chandigarh">
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
                <h1>Open Pores Care in Chandigarh</h1>
                <p>Dermatologist-Guided Treatment for Smooth & Refined Skin at Dermessence. Long-term texture improvement.</p>
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
                <p>Searching for <strong>open pores care in Chandigarh</strong>? Dermessence offers dermatologist-led solutions to refine enlarged pores and improve skin texture.</p>
                <p>Open pores need structural treatment, not temporary tightening. Our <strong>open pores treatment in Chandigarh</strong> focuses on collagen repair and oil control for natural results.</p>
                <p>Recognised as trusted <strong>skin texture improvement clinic Chandigarh</strong> using advanced skin technologies safely.</p>
                <a href="/dermatologist-chandigarh/" class="btn123" style="margin-top: 1rem; display: inline-block;">👉 Explore our complete dermatology services</a>
            </div>

            <!-- Why Professional Open Pores Care -->
            <h2 class="ttl123">Why Professional Open Pores Care</h2>
            <div class="box123">
                <p>Professional <strong>open pores care Chandigarh</strong> delivers lasting texture improvement:</p>
                <ul>
                    <li>Identifies underlying cause of enlarged pores</li>
                    <li>Skin-safe texture improvement treatments</li>
                    <li>Controls excess oil production</li>
                    <li>Stimulates collagen for pore refinement</li>
                    <li>Long-term results, not temporary tightening</li>
                </ul>
                <p>Every treatment begins with detailed dermatological evaluation.</p>
            </div>

            <!-- Why Chandigarh -->
            <h2 class="ttl123">Why Chandigarh Dermatologists</h2>
            <div class="box123">
                <p>Chandigarh offers advanced texture treatments. People prefer our specialists because:</p>
                <ul>
                    <li>Experienced <strong>dermatologist for open pores Chandigarh</strong></li>
                    <li>Advanced skin resurfacing treatments</li>
                    <li>High hygiene and patient safety standards</li>
                    <li>Evidence-based diagnosis and planning</li>
                    <li>Transparent consultation and follow-up</li>
                </ul>
            </div>

            <!-- Open Pores Specific Concerns -->
            <h2 class="ttl123">Texture & Related Concerns</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-search-plus"></i> Common Conditions</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Open and enlarged pores</li>
                        <li>Oily and acne-prone skin</li>
                        <li>Uneven skin texture</li>
                        <li>Post-acne marks and scars</li>
                        <li>Pigmentation and tanning</li>
                        <li>Early aging signs</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-hair"></i> Related Issues</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Dandruff and oily scalp</li>
                        <li>Hair thinning (hormonal)</li>
                        <li>Stress-related skin sensitivity</li>
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
            <h2 class="ttl123">Dr. Sukhmani – Texture Specialist</h2>
            <div class="doc123">
                <div class="box123">
                    <h3 style="color: #D4AF37; margin-bottom: 1rem;"><strong>Large Pores Skin Treatment Chandigarh</strong></h3>
                    <p>Dr. Sukhmani specializes in skin texture improvement with collagen-stimulating, skin-safe protocols.</p>
                    <p>Areas of expertise:</p>
                    <ul>
                        <li>Open pores and uneven texture</li>
                        <li>Post-acne skin refinement</li>
                        <li>Oily/combination skin care</li>
                        <li>Preventive anti-aging treatments</li>
                    </ul>
                </div>
                <div class="img123">
                    <img src="https://via.placeholder.com/400x500/1a1a1a/D4AF37?text=Dr.+Sukhmani" alt="Dr. Sukhmani - Open Pores Specialist Chandigarh">
                </div>
            </div>

            <!-- 5-Step Open Pores Process -->
            <section class="sec123">
                <div class="cnt123">
                    <h2 class="ttl123">Your Open Pores Treatment Journey</h2>
                    <div class="stp123">
                        <div class="step123">
                            <div class="num123">1</div>
                            <h4 style="color:gold;">Skin Consultation</h4>
                            <p>Skin concerns, oiliness, acne history, skincare routine discussion.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">2</div>
                            <h4 style="color:gold;">Clinical Examination</h4>
                            <p>Pore size, skin type, sensitivity, acne scars assessment.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">3</div>
                            <h4 style="color:gold;">Personalised Plan</h4>
                            <p>Treatment options, timeline, skincare advice explained.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">4</div>
                            <h4 style="color:gold;">Safe Treatment</h4>
                            <p>Skin-safe procedures using clinically approved methods.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">5</div>
                            <h4 style="color:gold;">Maintenance Care</h4>
                            <p>Regular follow-ups maintain refined texture results.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 5 Advanced Open Pores Treatments -->
            <h2 class="ttl123">Advanced Open Pores Treatments</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-needle"></i>1. Microneedling</h3>
                    <p>Stimulate collagen, improve texture, reduce pore appearance.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-vial"></i>2. Chemical Peels</h3>
                    <p>Control oil, improve smoothness, enhance clarity.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-laser-pointer"></i>3. Laser Resurfacing</h3>
                    <p>Enlarged pores, texture improvement, early aging correction.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-mix"></i>4. Combination Therapy</h3>
                    <p>Multiple treatments for optimal pore refinement and texture.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-shield-alt"></i>5. Skin Maintenance</h3>
                    <p>Dermatologist skincare, oil-control, sun protection strategies.</p>
                </div>
            </div>
            <a href="/skin-glow-care-chandigarh/" class="btn123" style="display: block; text-align: center; margin: 2rem auto;">Skin Glow Care</a>

            <!-- Personalized Open Pores Treatment -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Personalised Open Pores Care</h3>
                <p>Customised based on:</p>
                <ul>
                    <li>Skin type (oily, dry, combination)</li>
                    <li>Severity of enlarged pores</li>
                    <li>Acne and scar history</li>
                    <li>Long-term skin goals</li>
                </ul>
                <p>Gradual, natural-looking improvement without skin damage.</p>
            </div>

            <!-- Who Should Visit -->
            <h2 class="ttl123">Who Needs Open Pores Care?</h2>
            <div class="box123">
                <p>Consult if you have:</p>
                <ul>
                    <li>Visible open or enlarged pores</li>
                    <li>Oily skin with uneven texture</li>
                    <li>Post-acne skin roughness</li>
                    <li>Early skin aging signs</li>
                </ul>
                <p>Early care prevents pore worsening and maintains skin quality.</p>
            </div>

            <!-- Open Pores Clinic Trust -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Trusted Texture Clinic</h3>
                <p>Dermessence delivers <strong>open pores care Chandigarh</strong> through ethical practices and consistent texture improvement results.</p>
            </div>

            <!-- FAQ Complete -->
            <h2 class="ttl123">Frequently Asked Questions</h2>
            <div class="box123">
                <div class="faq123">
                    <div class="qst123">
                        <span>Q1. Can pores be permanently closed?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Pores cannot be permanently closed but appearance can be significantly reduced.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q2. Safe for sensitive skin?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, treatments selected based on skin sensitivity and suitability.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q3. How long for improvement?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Gradual improvement seen over multiple sessions.</div>
                </div>
            </div>

            <!-- Final CTA -->
            <div class="cta-final123">
                <h3 style="color: #D4AF37; margin-bottom: 1.5rem; font-size: 1.8rem;">
                    Book Open Pores Care in Chandigarh
                </h3>
                <p style="margin-bottom: 2rem; opacity: 0.9;">Professional treatment for smooth, refined skin texture.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; align-items: center;">
                    <a href="tel:+919915930506" class="btn123 btn-big123">
                        <i class="fas fa-phone"></i> +91-9915930506, 8847491254
                    </a>
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">All Services</a>
                    <a href="/skin-glow-care-chandigarh/" class="btn123 btn-big123">Skin Glow</a>
                    <a href="/skin-clinic-sector-21-chandigarh/" class="btn123 btn-big123">Sector 21</a>
                </div>
                <p style="margin-top: 2rem; opacity: 0.8; font-size: 1.1rem;">
                    <strong>Dermessence – Where Science Meets Refined Skin Confidence</strong><br>
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
