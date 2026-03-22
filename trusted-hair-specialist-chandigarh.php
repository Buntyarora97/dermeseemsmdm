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
    <title>Trusted Hair Specialist in Chandigarh | Dermessence Clinic</title>
    <meta name="description" content="Looking for a trusted hair specialist in Chandigarh? Dermessence offers expert hair loss diagnosis, PRP therapy, and personalised hair treatments.">
    <meta name="keywords" content="Trusted Hair Specialist in Chandigarh, hair fall specialist in Chandigarh, hair loss doctor in Chandigarh, PRP hair treatment Chandigarh, dermatologist for hair loss in Chandigarh">
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
                <h1>Trusted Hair Specialist in Chandigarh</h1>
                <p>Advanced Hair Loss & Scalp Care at Dermessence. Hair health is closely connected to confidence, appearance, and emotional well-being.</p>
                <div style="margin-top: 2rem;">
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">👉 Complete Dermatology Services</a>
                    <a href="/hair-fall-specialist-chandigarh/" class="btn123 btn-big123">Hair Fall Specialist</a>
                    <a href="tel:+919915930506" class="btn123 btn-big123"><i class="fas fa-phone"></i> Call Now</a>
                </div>
            </div>
        </section>

        <div class="cnt123">
            <!-- Complete Introduction -->
            <div class="box123">
                <p>If you are searching for a <strong>trusted hair specialist in Chandigarh</strong>, Dermessence provides expert, medically guided solutions for hair fall, thinning, and scalp disorders.</p>
                <p>At Dermessence, hair problems are approached as medical conditions, not cosmetic concerns. Our focus is on identifying the root cause of hair loss and providing ethical, evidence-based treatments that support long-term hair and scalp health.</p>
                <p>Recognised as a reliable dermatology and hair care clinic in Chandigarh, Dermessence combines clinical dermatology with advanced hair restoration techniques to deliver safe, effective, and personalised results.</p>
                <a href="/dermatologist-chandigarh/" class="btn123" style="margin-top: 1rem; display: inline-block;">👉 Explore complete dermatology services</a>
            </div>

            <!-- Why Trusted Specialist -->
            <h2 class="ttl123">Why Trusted Hair Specialist Matters</h2>
            <div class="box123">
                <p>Hair fall can be temporary or progressive, and incorrect or delayed treatment often leads to permanent hair thinning. Consulting a <strong>trusted hair specialist in Chandigarh</strong> ensures accurate diagnosis and appropriate medical care.</p>
                <ul>
                    <li>Identifying the exact cause of hair fall</li>
                    <li>Preventing unnecessary hair damage</li>
                    <li>Using clinically approved treatments</li>
                    <li>Slowing or stopping progressive hair loss</li>
                    <li>Improving scalp health and hair quality</li>
                </ul>
                <p>At Dermessence, every hair treatment begins with clinical evaluation and scalp analysis, ensuring responsible and effective care.</p>
            </div>

            <!-- Why Chandigarh -->
            <h2 class="ttl123">Why Dermatologists in Chandigarh</h2>
            <div class="box123">
                <p>Chandigarh has become a preferred destination for dermatology and hair care due to its advanced healthcare facilities and high medical standards.</p>
                <ul>
                    <li>Availability of experienced <strong>hair loss doctor in Chandigarh</strong></li>
                    <li>Access to advanced hair and scalp treatments</li>
                    <li>High hygiene and patient safety standards</li>
                    <li>Evidence-based diagnosis and treatment</li>
                    <li>Transparent consultation and follow-up process</li>
                </ul>
                <p>Patients trust dermatologists in Chandigarh for accurate diagnosis and long-term results, especially for chronic concerns like hair fall.</p>
            </div>

            <!-- Hair & Skin Concerns -->
            <h2 class="ttl123">Hair & Scalp Concerns We Treat</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-hair"></i> Hair & Scalp Problems</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li>Excessive hair fall and shedding</li>
                        <li>Androgenetic alopecia (male & female pattern hair loss)</li>
                        <li>Hair thinning and weak hair roots</li>
                        <li>Dandruff and itchy scalp</li>
                        <li>Scalp infections and inflammation</li>
                        <li>Hair loss due to stress or illness</li>
                    </ul>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-allergies"></i> Associated Skin Issues</h3>
                    <ul style="padding-left: 0; font-size: 0.95rem;">
                        <li><a href="/acne-care-chandigarh/">Acne</a> related to hormonal imbalance</li>
                        <li><a href="/skin-glow-care-chandigarh/">Pigmentation</a> and dull skin</li>
                        <li>Scalp dermatitis or psoriasis</li>
                    </ul>
                </div>
            </div>
            <div style="text-align: center; margin: 2rem 0;">
                <a href="/hair-loss-doctor-chandigarh/" class="btn123">Medical hair loss care</a>
                <a href="/hair-fall-specialist-chandigarh/" class="btn123">Hair fall specialist</a>
                <a href="/acne-care-chandigarh/" class="btn123">Acne care services</a>
            </div>

            <!-- Doctor Section -->
            <h2 class="ttl123">Meet Dr. Sukhmani – Hair Expert</h2>
            <div class="doc123">
                <div class="box123">
                    <h3 style="color: #D4AF37; margin-bottom: 1rem;"><strong>Dermatologist for hair loss in Chandigarh</strong></h3>
                    <p>Dr. Sukhmani is the lead dermatologist at Dermessence and is widely trusted for her expertise in hair fall diagnosis and medical hair restoration treatments. She follows a patient-centric and ethical approach.</p>
                    <p>Areas of Expertise:</p>
                    <ul>
                        <li>Medical hair loss management</li>
                        <li><strong>PRP hair treatment Chandigarh</strong></li>
                        <li>Scalp disorder treatment</li>
                        <li>Hormonal and stress-related hair fall</li>
                    </ul>
                    <p>Patients trust Dr. Sukhmani for her clear communication, honest treatment guidance, and focus on long-term hair health.</p>
                </div>
                <div class="img123">
                    <img src="https://via.placeholder.com/400x500/1a1a1a/D4AF37?text=Dr.+Sukhmani" alt="Dr. Sukhmani - Trusted Hair Specialist Chandigarh">
                </div>
            </div>

            <!-- 5-Step Process -->
            <section class="sec123">
                <div class="cnt123">
                    <h2 class="ttl123">What to Expect During Your Visit</h2>
                    <div class="stp123">
                        <div class="step123">
                            <div class="num123">1</div>
                            <h4>Detailed Consultation</h4>
                            <p>Discussion about hair fall history, lifestyle habits, diet, stress levels, medical background.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">2</div>
                            <h4>Scalp & Hair Examination</h4>
                            <p>Assess hair density, root strength, scalp condition, inflammation, loss severity.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">3</div>
                            <h4>Personalised Treatment Plan</h4>
                            <p>Treatments, timeline, duration, home care guidance all explained clearly.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">4</div>
                            <h4>Safe & Ethical Treatment</h4>
                            <p>All treatments use clinically approved, safe techniques.</p>
                        </div>
                        <div class="step123">
                            <div class="num123">5</div>
                            <h4>Follow-Up & Maintenance</h4>
                            <p>Regular follow-ups track progress and ensure long-term hair health.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 4 Advanced Treatments -->
            <h2 class="ttl123">Advanced Hair Treatments</h2>
            <div class="grd123">
                <div class="crd123">
                    <h3><i class="fas fa-pills"></i>1. Medical Hair Management</h3>
                    <p>Control excessive hair fall, strengthen roots, improve scalp circulation with prescribed therapies.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-syringe"></i>2. <strong>PRP Hair Treatment</strong></h3>
                    <p>Patient's own platelets stimulate follicles, improve thickness, slow thinning. <a href="/prp-hair-chandigarh/">Learn more about PRP</a></p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-bacteria"></i>3. Scalp & Dandruff Care</h3>
                    <p>Reduce inflammation, treat infections, improve scalp hygiene for better hair growth.</p>
                </div>
                <div class="crd123">
                    <h3><i class="fas fa-utensils"></i>4. Nutrition & Lifestyle</h3>
                    <p>Diet recommendations, lifestyle tips, proper hair care routines for lasting results.</p>
                </div>
            </div>

            <!-- Personalized Care -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Personalised Hair Care Plans</h3>
                <p>No two hair fall cases are the same. Treatment plans customised based on:</p>
                <ul>
                    <li>Type and severity of hair loss</li>
                    <li>Scalp condition and health</li>
                    <li>Age, gender, medical history</li>
                    <li>Treatment goals and expectations</li>
                </ul>
                <p>This personalised approach ensures safe treatment with visible, lasting results.</p>
            </div>

            <!-- Who Should Visit -->
            <h2 class="ttl123">Who Should Visit Hair Specialist?</h2>
            <div class="box123">
                <p>Consult a specialist if you experience:</p>
                <ul>
                    <li>Sudden or excessive hair fall</li>
                    <li>Visible thinning or widening part</li>
                    <li>Hair fall after illness, COVID, or stress</li>
                    <li>Persistent dandruff with hair loss</li>
                    <li>Family history of hair loss</li>
                </ul>
                <p>Early consultation helps prevent irreversible hair loss.</p>
            </div>

            <!-- Trust Section -->
            <div class="box123">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Trusted Hair Treatment Clinic</h3>
                <p>Dermessence has earned its reputation through consistent results, ethical care, and patient satisfaction. Solutions for early thinning to advanced hair loss you can rely on.</p>
            </div>

            <!-- FAQ Complete -->
            <h2 class="ttl123">Frequently Asked Questions (FAQs)</h2>
            <div class="box123">
                <div class="faq123">
                    <div class="qst123">
                        <span>Q1. Can hair fall be treated without surgery?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes. Most hair fall conditions managed medically if diagnosed early.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q2. Is PRP hair treatment safe?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Yes. PRP uses your own blood platelets, safe when performed by dermatologist.</div>
                </div>
                <div class="faq123">
                    <div class="qst123">
                        <span>Q3. When to expect results?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="ans123">Improvement usually seen within few months with regular treatment & follow-ups.</div>
                </div>
            </div>

            <!-- Final CTA -->
            <div class="cta-final123">
                <h3 style="color: #D4AF37; margin-bottom: 1.5rem; font-size: 1.8rem;">
                    Book with Trusted Hair Specialist
                </h3>
                <p style="margin-bottom: 2rem; opacity: 0.9;">Expert, ethical, result-oriented hair care at Dermessence.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; align-items: center;">
                    <a href="tel:+919915930506" class="btn123 btn-big123">
                        <i class="fas fa-phone"></i> +91-9915930506, 8847491254
                    </a>
                    <a href="/dermatologist-chandigarh/" class="btn123 btn-big123">All Services</a>
                    <a href="/hair-fall-specialist-chandigarh/" class="btn123 btn-big123">Hair Fall Specialist</a>
                    <a href="/hair-loss-doctor-chandigarh/" class="btn123 btn-big123">Hair Loss Doctor</a>
                </div>
                <p style="margin-top: 2rem; opacity: 0.8; font-size: 1.1rem;">
                    <strong>Dermessence – Where Science Meets Skin & Hair Confidence</strong><br>
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
