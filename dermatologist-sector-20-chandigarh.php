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
    <title>Dermatologist in Sector 20 Chandigarh | Skin Care Expert</title>
    <meta name="description" content="Sector 20 Chandigarh dermatologist providing advanced skin and hair treatments with personalised care and evidence-based dermatology solutions.">
    <meta name="keywords" content="Dermatologist Sector 20 Chandigarh, permanent hair reduction Chandigarh, dermatologist laser hair treatment Chandigarh, laser hair removal clinic Chandigarh, advanced hair removal treatment Chandigarh">
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
        .laser-sec123 {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(26, 26, 26, 0.9));
            padding: 4rem 0;
            margin: 4rem 0;
            border-radius: 25px;
            border: 1px solid rgba(212, 175, 55, 0.3);
        }
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
                <h1>Dermatologist in Sector 20 Chandigarh</h1>
                <p>Ethical Skin, Hair & Aesthetic Care at Dermessence. <strong>Laser hair removal clinic Chandigarh</strong> specialist.</p>
                <div style="margin-top: 2rem;">
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">👉 Core Dermatology Services</a>
                    <a href="/laser-hair-removal-chandigarh/" class="btn123 btn-big123">Laser Hair Removal</a>
                    <a href="tel:+919915930506" class="btn123 btn-big123"><i class="fas fa-phone"></i> Call Now</a>
                </div>
            </div>
        </section>

        <div class="cnt123">
            <!-- Complete Introduction -->
            <div class="box123">
                <p>Searching for <strong>dermatologist Sector 20 Chandigarh</strong>? Dermessence serves Sector 20's residential & commercial community with medical precision.</p>
                <p>Sector 20 residents trust Dermessence for <strong>permanent hair reduction Chandigarh</strong> and comprehensive skin solutions.</p>
                <p>Advanced <strong>dermatologist laser hair treatment Chandigarh</strong> with evidence-based protocols.</p>
                <a href="/dermatologist-chandigarh/" class="btn123" style="margin-top: 1rem; display: inline-block;">👉 Explore core dermatology services</a>
            </div>

            <!-- Why Local Dermatologist -->
            <h2 class="ttl123">Why Sector 20 Dermatologist</h2>
            <div class="box123">
                <p>Local <strong>advanced hair removal treatment Chandigarh</strong> specialist offers:</p>
                <ul>
                    <li>Convenient consultations & reviews</li>
                    <li>Faster follow-ups for chronic issues</li>
                    <li>Personalised long-term planning</li>
                    <li>Consistent care relationship</li>
                </ul>
                <p>Serving Sector 20's well-developed community.</p>
            </div>

            <!-- SPECIAL LASER HAIR SECTION -->
            <section class="laser-sec123">
                <div class="cnt123">
                    <h2 class="ttl123" style="text-align: center;">Advanced Laser Hair Solutions</h2>
                    <div class="grd123">
                        <div class="crd123">
                            <h3><i class="fas fa-laser-pointer"></i> Permanent Hair Reduction</h3>
                            <p>Safe, long-lasting <strong>permanent hair reduction Chandigarh</strong> for all skin types using advanced diode laser technology.</p>
                            <a href="/laser-hair-removal-chandigarh/" class="btn123" style="margin-top: 1rem; font-size: 0.85rem;">Book Laser Session</a>
                        </div>
                        <div class="crd123">
                            <h3><i class="fas fa-user-md"></i> Dermatologist-Led</h3>
                            <p><strong>Dermatologist laser hair treatment Chandigarh</strong> with medical supervision, not salon procedures.</p>
                            <a href="/dermatologist-chandigarh/" class="btn123" style="margin-top: 1rem; font-size: 0.85rem;">Meet Dr. Sukhmani</a>
                        </div>
                        <div class="crd123">
                            <h3><i class="fas fa-clinic-medical"></i> Medical Clinic</h3>
                            <p><strong>Laser hair removal clinic Chandigarh</strong> with hygienic standards and clinical protocols.</p>
                            <a href="/laser-hair-removal-chandigarh/" class="btn123" style="margin-top: 1rem; font-size: 0.85rem;">Advanced Technology</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Chandigarh -->
            <h2 class="ttl123">Why Chandigarh Dermatologists</h2>
            <div class="box123">
                <p>Chandigarh specialists trusted for:</p>
                <ul>
                    <li>Qualified dermatologists</li>
                    <li>Advanced skin/hair technologies</li>
                    <li>High hygiene standards</li>
                    <li>Evidence-based protocols</li>
                    <li>Transparent consultations</li>
                </ul>
            </div>

            <!-- Skin Conditions -->
            <h2 class="ttl123">Common Skin Conditions</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-layer-group"></i> Skin Issues</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Acne & recurring breakouts</li>
                        <li>Acne scars/post-acne marks</li>
                        <li>Pigmentation & melasma</li>
                        <li>Open pores/texture issues</li>
                        <li>Skin allergies/sensitivity</li>
                        <li>Eczema/psoriasis</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-hair"></i> Hair Concerns</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Excessive hair fall</li>
                        <li>Pattern hair loss</li>
                        <li>Dandruff/itchy scalp</li>
                        <li>Scalp infections</li>
                    </ul>
                </div>
            </div>
            <div style="text-align: center; margin: 2rem 0;">
                <a href="/acne-care-chandigarh/" class="btn123">Acne Care</a>
                <a href="/pigmentation-care-chandigarh/" class="btn123">Pigmentation</a>
                <a href="/hair-loss-doctor-chandigarh/" class="btn123">Hair Loss</a>
            </div>

            <!-- Doctor Section -->
            <h2 class="ttl123">Dr. Sukhmani – Sector 20 Specialist</h2>
            <div class="doc123">
                <div class="box123">
                    <h3 style="color: #D4AF37; margin-bottom: 1rem;">Laser & Dermatology Expertise</h3>
                    <p>Serving Sector 20 Chandigarh with advanced laser solutions.</p>
                    <p>Areas of expertise:</p>
                    <ul>
                        <li>Laser hair removal & skin treatments</li>
                        <li>Clinical dermatology (acne, eczema)</li>
                        <li>Hair/scalp disorders</li>
                        <li>Aesthetic rejuvenation</li>
                    </ul>
                </div>
                <div class="img123">
                    <img src="https://via.placeholder.com/400x500/1a1a1a/D4AF37?text=Dr.+Sukhmani" alt="Dr. Sukhmani - Dermatologist Sector 20 Chandigarh">
                </div>
            </div>

            <!-- 5-Step Process -->
            <section class="sec123">
                <div class="cnt123">
                    <h2 class="ttl123">Your Dermatology Visit</h2>
                    <div class="stp123">
                        <div class="step123">
                            <div class="num123">1</div>
                            <h4 style="color:gold;">Consultation</h4>
                            <p>Skin/hair concern, medical history discussed.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">2</div>
                            <h4 style="color:gold;">Clinical Exam</h4>
                            <p>Thorough examination ensures accurate diagnosis.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">3</div>
                            <h4 style="color:gold;">Treatment Plan</h4>
                            <p>Diagnosis, options, timeline explained.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">4</div>
                            <h4 style="color:gold;">Safe Treatment</h4>
                            <p>Advanced laser & clinical methods used.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">5</div>
                            <h4 style="color:gold;">Follow-Up</h4>
                            <p>Regular monitoring maintains results.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Grid -->
            <h2 class="ttl123">Complete Dermatology Services</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-clinic-medical"></i> Clinical Care</h3>
                    <p>Acne, infections, pigmentation, eczema treatment.</p>
                    <a href="/acne-care-chandigarh/" class="btn123" style="margin-top: 1rem; font-size: 0.85rem;">Acne Care</a>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-laser-pointer"></i> Laser Care</h3>
                    <p><strong>Advanced hair removal treatment Chandigarh</strong> solutions.</p>
                    <a href="/laser-hair-removal-chandigarh/" class="btn123" style="margin-top: 1rem; font-size: 0.85rem;">Laser Hair</a>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-hair-long"></i> Hair Care</h3>
                    <p>Hair fall diagnosis, PRP therapy.</p>
                    <a href="/hair-loss-doctor-chandigarh/" class="btn123" style="margin-top: 1rem; font-size: 0.85rem;">Hair Loss</a>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-magic"></i> Aesthetic Care</h3>
                    <p>Microneedling, skin brightening.</p>
                    <a href="/microneedling-chandigarh/" class="btn123" style="margin-top: 1rem; font-size: 0.85rem;">Microneedling</a>
                </div>
            </div>

            <!-- Who Should Visit -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">When to Consult</h3>
                <p>Visit for:</p>
                <ul>
                    <li>Persistent acne/pigmentation</li>
                    <li>Unwanted body/facial hair</li>
                    <li>Sudden hair fall</li>
                    <li>Chronic skin conditions</li>
                    <li>Skin sensitivity</li>
                </ul>
            </div>

            <!-- Trusted Clinic -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Trusted Sector 20 Clinic</h3>
                <p>Sector 20 residents choose Dermessence for <strong>permanent hair reduction Chandigarh</strong> and clinical excellence.</p>
            </div>

            <!-- FAQ Complete -->
            <h2 class="ttl123">Frequently Asked Questions</h2>
            <div class="box123">
                <div class="faq123">
                    <div class="qst123">
                        <span>Q1. Accessible from Sector 20?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, conveniently accessible from Sector 20 and nearby sectors.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q2. Laser hair removal safe?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, dermatologist-supervised with medical-grade lasers for all skin types.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q3. Consultation required?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, ensures accurate diagnosis and safe treatment planning.</div>
                </div>
            </div>

            <!-- Final CTA -->
            <div class="cta-final123">
                <h3 style="color: #D4AF37; margin-bottom: 1.5rem; font-size: 1.8rem;">
                    Book Your Consultation Today
                </h3>
                <p style="margin-bottom: 2rem; opacity: 0.9;"><strong>Dermatologist Sector 20 Chandigarh</strong> - Laser & Skin Specialists.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; align-items: center;">
                    <a href="tel:+919915930506" class="btn123 btn-big123">
                        <i class="fas fa-phone"></i> +91-9915930506, 8847491254
                    </a>
                    <a href="/laser-hair-removal-chandigarh/" class="btn123 btn-big123">Laser Hair Removal</a>
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">All Services</a>
                    <a href="/skin-clinic-sector-21-chandigarh/" class="btn123 btn-big123">Sector 21 Clinic</a>
                </div>
                <p style="margin-top: 2rem; opacity: 0.8; font-size: 1.1rem;">
                    <strong>Dermessence – Where Science Meets Trusted Skin Care</strong><br>
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
