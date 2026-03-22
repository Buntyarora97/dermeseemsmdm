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
    <title>PRP Hair Treatment in Chandigarh | Advanced Hair Regrowth</title>
    <meta name="description" content="PRP hair treatment in Chandigarh for hair thinning and hair loss. Dermatologist-led PRP therapy at Dermessence for safe, natural regrowth.">
    <meta name="keywords" content="PRP Hair Chandigarh, PRP hair treatment in Chandigarh, platelet rich plasma hair therapy Chandigarh, PRP for hair loss Chandigarh, dermatologist PRP hair clinic Chandigarh">
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
                <h1>PRP Hair Treatment in Chandigarh</h1>
                <p>Dermatologist-Led PRP Therapy for Natural Hair Regrowth at Dermessence. Safe, non-surgical hair restoration.</p>
                <div style="margin-top: 2rem;">
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">👉 Complete Dermatology Services</a>
                    <a href="/hair-loss-doctor-chandigarh/" class="btn123 btn-big123">Hair Loss Consultation</a>
                    <a href="tel:+919915930506" class="btn123 btn-big123"><i class="fas fa-phone"></i> Call Now</a>
                </div>
            </div>
        </section>

        <div class="cnt123">
            <!-- Complete Introduction -->
            <div class="box123">
                <p>Searching for <strong>PRP hair Chandigarh</strong>? Dermessence offers dermatologist-guided Platelet-Rich Plasma therapy for hair thinning and loss.</p>
                <p>PRP uses your own growth factors for natural regrowth. Our <strong>PRP hair treatment in Chandigarh</strong> follows strict medical protocols for safety and results.</p>
                <p>Recognised as trusted <strong>dermatologist PRP hair clinic Chandigarh</strong> delivering sustainable hair restoration.</p>
                <a href="/dermatologist-chandigarh/" class="btn123" style="margin-top: 1rem; display: inline-block;">👉 Explore our complete dermatology services</a>
            </div>

            <!-- What is PRP Section -->
            <h2 class="ttl123">What Is PRP Hair Treatment?</h2>
            <div class="box123">
                <p>PRP (Platelet-Rich Plasma) therapy extracts concentrated platelets from your blood:</p>
                <ul>
                    <li>Stimulates dormant hair follicles</li>
                    <li>Improves scalp blood circulation</li>
                    <li>Strengthens weak hair roots</li>
                    <li>Reduces excessive hair fall</li>
                </ul>
                <p>Best for early to moderate hair thinning, not complete baldness.</p>
            </div>

            <!-- Why PRP Popular -->
            <h2 class="ttl123">Why PRP Popular in Chandigarh</h2>
            <div class="box123">
                <p>Patients choose <strong>platelet rich plasma hair therapy Chandigarh</strong> because:</p>
                <ul>
                    <li>Minimally invasive procedure</li>
                    <li>Uses patient's own blood</li>
                    <li>Clinically proven for hair loss</li>
                    <li>Safe under dermatologist supervision</li>
                </ul>
                <p>Offered only after detailed dermatological evaluation.</p>
            </div>

            <!-- Why Chandigarh Doctors -->
            <h2 class="ttl123">Why Chandigarh Dermatologists</h2>
            <div class="box123">
                <p>Chandigarh offers advanced PRP expertise. People prefer our specialists because:</p>
                <ul>
                    <li>Experienced PRP dermatologists</li>
                    <li>Advanced hair restoration therapies</li>
                    <li>High hygiene & sterile protocols</li>
                    <li>Scientific PRP preparation</li>
                    <li>Structured follow-up care</li>
                </ul>
            </div>

            <!-- Hair Concerns -->
            <h2 class="ttl123">PRP for Hair Concerns</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-hair"></i> Common Conditions</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Hair thinning & excessive fall</li>
                        <li>Male/female pattern hair loss</li>
                        <li>Receding hairline & crown thinning</li>
                        <li>Weak hair shafts & breakage</li>
                        <li><strong>PRP for hair loss Chandigarh</strong></li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-skin"></i> Related Issues</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Dandruff & itchy scalp</li>
                        <li>Hormonal acne/pigmentation</li>
                    </ul>
                </div>
            </div>
            <div style="text-align: center; margin: 2rem 0;">
                <a href="/hair-loss-doctor-chandigarh/" class="btn123">Hair Loss Doctor</a>
                <a href="/hair-dermatologist-chandigarh/" class="btn123">Hair Dermatologist</a>
                <a href="/dandruff-scalp-care-chandigarh/" class="btn123">Scalp Care</a>
            </div>

            <!-- Doctor Section -->
            <h2 class="ttl123">Dr. Sukhmani – PRP Specialist</h2>
            <div class="doc123">
                <div class="box123">
                    <h3 style="color: #D4AF37; margin-bottom: 1rem;">PRP Hair Expertise</h3>
                    <p>Dr. Sukhmani specializes in medical PRP protocols with careful patient selection.</p>
                    <p>Areas of expertise:</p>
                    <ul>
                        <li>PRP for androgenetic alopecia</li>
                        <li>PRP for stress-related hair loss</li>
                        <li>PRP + medical hair therapy</li>
                        <li>Scalp health optimization</li>
                    </ul>
                </div>
                <div class="img123">
                    <img src="https://via.placeholder.com/400x500/1a1a1a/D4AF37?text=Dr.+Sukhmani" alt="Dr. Sukhmani - PRP Hair Specialist Chandigarh">
                </div>
            </div>

            <!-- 5-Step PRP Process -->
            <section class="sec123">
                <div class="cnt123">
                    <h2 class="ttl123">Your PRP Hair Treatment Journey</h2>
                    <div class="stp123">
                        <div class="step123">
                            <div class="num123">1</div>
                            <h4 style="color:gold;">Hair Consultation</h4>
                            <p>Hair loss history, lifestyle, stress, previous treatments discussion.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">2</div>
                            <h4 style="color:gold;">Scalp Assessment</h4>
                            <p>Hair density, scalp health, PRP suitability evaluation.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">3</div>
                            <h4 style="color:gold;">Personalised Plan</h4>
                            <p>Sessions required, timeline, combination therapy explained.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">4</div>
                            <h4 style="color:gold;">PRP Procedure</h4>
                            <p>Sterile blood processing & scalp injections by dermatologist.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">5</div>
                            <h4 style="color:gold;">Follow-Up Care</h4>
                            <p>Regular monitoring supports long-term hair regrowth.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PRP Procedure Details -->
            <h2 class="ttl123">How PRP Is Performed</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-syringe"></i> Step-by-Step</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Small blood sample drawn</li>
                        <li>Centrifuged to isolate platelets</li>
                        <li>PRP injected into scalp</li>
                        <li>Growth factors activate follicles</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-check-circle"></i> PRP Benefits</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Uses own biological material</li>
                        <li>Improves hair thickness</li>
                        <li>Reduces hair fall</li>
                        <li>No surgical downtime</li>
                    </ul>
                </div>
            </div>

            <!-- Ideal Candidates -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Who Is Ideal for PRP?</h3>
                <p>Best candidates:</p>
                <ul>
                    <li>Early/moderate hair thinning</li>
                    <li>Male & female pattern loss</li>
                    <li>Stress-related hair fall</li>
                    <li>Active hair follicles present</li>
                </ul>
                <p>Not suitable for completely bald areas. Dermatologist evaluation essential.</p>
            </div>

            <!-- PRP Clinic Trust -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Trusted PRP Clinic</h3>
                <p>Dermessence delivers <strong>PRP hair Chandigarh</strong> through ethical medical practices and consistent natural regrowth results.</p>
            </div>

            <!-- FAQ Complete -->
            <h2 class="ttl123">Frequently Asked Questions</h2>
            <div class="box123">
                <div class="faq123">
                    <div class="qst123">
                        <span>Q1. Is PRP treatment safe?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes, safe when performed by qualified dermatologist using sterile techniques.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q2. How many sessions needed?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Varies by hair loss severity and individual response.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q3. When will results show?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Visible improvement begins after few months with continued sessions.</div>
                </div>
            </div>

            <!-- Final CTA -->
            <div class="cta-final123">
                <h3 style="color: #D4AF37; margin-bottom: 1.5rem; font-size: 1.8rem;">
                    Book PRP Hair Treatment Today
                </h3>
                <p style="margin-bottom: 2rem; opacity: 0.9;">Safe, dermatologist-led PRP for natural hair regrowth.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; align-items: center;">
                    <a href="tel:+919915930506" class="btn123 btn-big123">
                        <i class="fas fa-phone"></i> +91-9915930506, 8847491254
                    </a>
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">All Services</a>
                    <a href="/hair-loss-doctor-chandigarh/" class="btn123 btn-big123">Hair Loss Care</a>
                    <a href="/skin-clinic-sector-21-chandigarh/" class="btn123 btn-big123">Sector 21 Clinic</a>
                </div>
                <p style="margin-top: 2rem; opacity: 0.8; font-size: 1.1rem;">
                    <strong>Dermessence – Where Science Meets Natural Hair Regrowth</strong><br>
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
