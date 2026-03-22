<?php
include 'dermessence_optimizer.php';

$title = "Anti-Ageing Treatment in Chandigarh | Natural Skin Rejuvenation | Dermessence";
$meta_description = "Worried about wrinkles but don't want an artificial look?...";
$meta_keywords = "anti ageing treatment Chandigarh, anti aging clinic Chandigarh...";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <link rel="canonical" href="https://thedermessence.com/anti-aging-treatment-chandigarh" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; color: #333; line-height: 1.7; background: #fff; }
        .playfair { font-family: 'Playfair Display', serif; }
        .highlight { color: #c4a45a; font-weight: 600; }
        .text-link { color: #c4a45a; text-decoration: underline; font-weight: 500; transition: all 0.3s ease; }
        .text-link:hover { color: #a08040; }
        
        .hero-banner {
            position: relative; width: 100%; height: 480px;
            display: flex; align-items: center; justify-content: center;
            background: linear-gradient(135deg, #2d2520 0%, #1a1512 100%); overflow: hidden;
        }
        .hero-banner::before {
            content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: url('assets/antiaging/anti-aging-hero.jpg') center/cover no-repeat; opacity: 0.3;
        }
        .hero-content { position: relative; z-index: 2; text-align: center; padding: 0 20px; max-width: 900px; }
        .hero-content h1 { font-family: 'Playfair Display', serif; font-size: 3rem; font-weight: 600; color: #fff; letter-spacing: 2px; margin-bottom: 20px; }
        .hero-content h1 span { color: #d4af37; }
        .hero-subtitle { font-size: 1.4rem; color: #d4af37; font-weight: 500; font-style: italic; margin-bottom: 10px; }
        .hero-divider { display: flex; align-items: center; justify-content: center; gap: 20px; margin-top: 25px; }
        .hero-divider span { width: 80px; height: 2px; background: linear-gradient(90deg, transparent, #d4af37, transparent); }
        .hero-divider .diamond { width: 10px; height: 10px; background: #d4af37; transform: rotate(45deg); }

        .myth-section { background: linear-gradient(180deg, #faf9f7 0%, #fff 100%); padding: 100px 5%; }
        .myth-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; max-width: 1300px; margin: 0 auto; align-items: center; }
        .myth-content h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 25px; }
        .myth-content h2 span { color: #c4a45a; }
        .myth-content p { font-size: 1.1rem; color: #555; margin-bottom: 18px; line-height: 1.8; }
        .myth-highlight-box { background: #fff; border-left: 4px solid #c4a45a; padding: 20px 25px; margin: 25px 0; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .myth-highlight-box p { font-size: 1.1rem; color: #c4a45a; font-style: italic; margin: 8px 0; }
        .myth-content .emphasis { font-size: 1.2rem; font-weight: 600; color: #c4a45a; margin-top: 20px; }
        .myth-image img { width: 100%; height: 500px; object-fit: cover; border-radius: 20px; box-shadow: 0 30px 70px rgba(0,0,0,0.12); }

        .aging-section { background: #fff; padding: 100px 5%; }
        .aging-container { max-width: 1100px; margin: 0 auto; }
        .aging-header { text-align: center; margin-bottom: 50px; }
        .aging-header h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 15px; }
        .aging-header h2 span { color: #c4a45a; }
        .aging-header p { font-size: 1.15rem; color: #666; }
        .aging-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-top: 40px; }
        .aging-item { background: linear-gradient(145deg, #faf9f7, #fff); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid #eee; transition: all 0.3s ease; }
        .aging-item:hover { transform: translateY(-5px); box-shadow: 0 15px 40px rgba(196,164,90,0.12); border-color: #c4a45a; }
        .aging-item span { font-size: 1.05rem; color: #555; }
        .aging-item::before { content: '\2726'; display: block; font-size: 1.5rem; color: #c4a45a; margin-bottom: 10px; }
        .aging-bottom { text-align: center; margin-top: 40px; }
        .aging-bottom p { font-size: 1.1rem; color: #666; margin-bottom: 10px; }
        .aging-bottom .emphasis { font-size: 1.3rem; font-weight: 600; color: #c4a45a; }

        .philosophy-section { background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); padding: 100px 5%; }
        .philosophy-grid { display: grid; grid-template-columns: 1fr 1.2fr; gap: 80px; max-width: 1300px; margin: 0 auto; align-items: center; }
        .philosophy-image img { width: 100%; height: 550px; object-fit: cover; border-radius: 20px; box-shadow: 0 30px 70px rgba(0,0,0,0.3); }
        .philosophy-content h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #fff; margin-bottom: 25px; }
        .philosophy-content h2 span { color: #d4af37; }
        .philosophy-content p { font-size: 1.1rem; color: #ccc; margin-bottom: 20px; line-height: 1.8; }
        .philosophy-columns { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 25px; }
        .philosophy-col h4 { color: #888; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 15px; }
        .philosophy-col ul { list-style: none; padding: 0; }
        .philosophy-col ul li { color: #ddd; padding: 8px 0 8px 20px; position: relative; }
        .philosophy-col ul li::before { content: '\2717'; position: absolute; left: 0; color: #c4a45a; }
        .philosophy-col.do ul li::before { content: '\2713'; color: #d4af37; }

        .consultation-section { background: linear-gradient(180deg, #faf9f7 0%, #fff 100%); padding: 100px 5%; }
        .consultation-grid { display: grid; grid-template-columns: 1.2fr 1fr; gap: 80px; max-width: 1300px; margin: 0 auto; align-items: center; }
        .consultation-content h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 25px; }
        .consultation-content h2 span { color: #c4a45a; }
        .consultation-content > p { font-size: 1.1rem; color: #666; margin-bottom: 20px; }
        .consultation-list { display: grid; gap: 12px; margin: 25px 0; }
        .consultation-item { display: flex; align-items: center; gap: 15px; padding: 12px 18px; background: #fff; border-radius: 10px; border: 1px solid #eee; transition: all 0.3s ease; }
        .consultation-item:hover { border-color: #c4a45a; box-shadow: 0 8px 20px rgba(196,164,90,0.1); }
        .consultation-item .icon { width: 30px; height: 30px; background: linear-gradient(135deg, #c4a45a, #d4af37); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; flex-shrink: 0; font-size: 0.8rem; }
        .consultation-item span { font-size: 1rem; color: #555; }
        .doctor-note { font-size: 1.1rem; color: #c4a45a; font-style: italic; margin-top: 20px; }
        .doctor-note strong { font-weight: 600; }
        .consultation-image img { width: 100%; height: 500px; object-fit: cover; border-radius: 20px; box-shadow: 0 30px 70px rgba(0,0,0,0.12); }

        .areas-section { background: #fff; padding: 100px 5%; }
        .areas-header { text-align: center; max-width: 900px; margin: 0 auto 60px; }
        .areas-header h2 { font-family: 'Playfair Display', serif; font-size: 2.8rem; font-weight: 600; color: #1a1a1a; margin-bottom: 15px; }
        .areas-header h2 span { color: #c4a45a; }
        .areas-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; max-width: 1300px; margin: 0 auto; }
        .area-card { background: linear-gradient(145deg, #faf9f7, #fff); border-radius: 20px; padding: 35px; border: 1px solid #eee; transition: all 0.4s ease; position: relative; overflow: hidden; }
        .area-card::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #c4a45a, #d4af37); transform: scaleX(0); transition: transform 0.4s ease; }
        .area-card:hover { transform: translateY(-8px); box-shadow: 0 25px 60px rgba(196,164,90,0.12); border-color: #c4a45a; }
        .area-card:hover::before { transform: scaleX(1); }
        .area-card h3 { font-family: 'Playfair Display', serif; font-size: 1.5rem; color: #c4a45a; margin-bottom: 15px; }
        .area-card p { font-size: 1rem; color: #666; line-height: 1.7; margin-bottom: 12px; }
        .area-card ul { list-style: none; padding: 0; margin: 15px 0 0 0; }
        .area-card ul li { font-size: 0.95rem; color: #666; padding: 6px 0 6px 22px; position: relative; }
        .area-card ul li::before { content: '\2713'; position: absolute; left: 0; color: #c4a45a; font-weight: 700; }

        .tech-section { background: linear-gradient(180deg, #faf9f7 0%, #fff 100%); padding: 100px 5%; }
        .tech-container { max-width: 1000px; margin: 0 auto; text-align: center; }
        .tech-container h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 25px; }
        .tech-container h2 span { color: #c4a45a; }
        .tech-container > p { font-size: 1.1rem; color: #666; margin-bottom: 20px; max-width: 800px; margin-left: auto; margin-right: auto; }
        .tech-features { display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; margin: 30px 0; }
        .tech-features span { background: #fff; padding: 12px 25px; border-radius: 30px; font-size: 0.95rem; color: #555; border: 1px solid #eee; box-shadow: 0 5px 15px rgba(0,0,0,0.03); }
        .tech-features span::before { content: '\2713 '; color: #c4a45a; font-weight: 700; }
        .tech-note { font-size: 1.15rem; font-weight: 600; color: #c4a45a; margin-top: 25px; }
        .tech-links { display: flex; gap: 20px; justify-content: center; margin-top: 30px; }
        .tech-link { display: inline-flex; align-items: center; gap: 10px; padding: 15px 35px; background: linear-gradient(135deg, #c4a45a, #d4af37); color: #fff; text-decoration: none; border-radius: 50px; font-weight: 600; font-size: 1.05rem; transition: all 0.3s ease; }
        .tech-link:hover { transform: translateY(-3px); box-shadow: 0 15px 40px rgba(196,164,90,0.4); }
        .tech-link.outline { background: transparent; color: #c4a45a; border: 2px solid #c4a45a; }
        .tech-link.outline:hover { background: #c4a45a; color: #fff; }

        .why-section { background: #fff; padding: 100px 5%; }
        .why-container { max-width: 1000px; margin: 0 auto; text-align: center; }
        .why-container h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 15px; }
        .why-container h2 span { color: #c4a45a; }
        .why-container > p { font-size: 1.1rem; color: #666; margin-bottom: 40px; }
        .why-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px; }
        .why-item { background: linear-gradient(145deg, #faf9f7, #fff); padding: 25px 20px; border-radius: 15px; border: 1px solid #eee; transition: all 0.3s ease; }
        .why-item:hover { border-color: #c4a45a; box-shadow: 0 10px 30px rgba(196,164,90,0.1); }
        .why-item span { font-size: 1rem; color: #555; }
        .why-item::before { content: '\2713'; display: block; font-size: 1.2rem; color: #c4a45a; margin-bottom: 10px; }
        .why-note { font-size: 1.15rem; color: #c4a45a; font-style: italic; }

        .when-section { background: linear-gradient(180deg, #faf9f7 0%, #fff 100%); padding: 100px 5%; }
        .when-container { max-width: 1000px; margin: 0 auto; text-align: center; }
        .when-container h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 15px; }
        .when-container h2 span { color: #c4a45a; }
        .when-container > p { font-size: 1.1rem; color: #666; margin-bottom: 40px; }
        .when-signs { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 40px; }
        .when-sign { background: #fff; padding: 20px 25px; border-radius: 15px; border: 1px solid #eee; display: flex; align-items: center; gap: 15px; transition: all 0.3s ease; }
        .when-sign:hover { border-color: #c4a45a; box-shadow: 0 10px 30px rgba(196,164,90,0.1); }
        .when-sign .check { width: 30px; height: 30px; background: linear-gradient(135deg, #c4a45a, #d4af37); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; flex-shrink: 0; }
        .when-sign span { font-size: 1rem; color: #555; text-align: left; }
        .when-note { font-size: 1.2rem; font-weight: 600; color: #c4a45a; font-style: italic; }

        .cta-section { background: linear-gradient(135deg, #1a1a1a, #2d2d2d); padding: 80px 5%; }
        .cta-container { max-width: 900px; margin: 0 auto; text-align: center; }
        .cta-container h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #fff; margin-bottom: 15px; }
        .cta-container h2 span { color: #d4af37; }
        .cta-container > p { font-size: 1.15rem; color: #ccc; margin-bottom: 15px; }
        .cta-container .highlight-text { font-size: 1.3rem; color: #d4af37; font-weight: 500; margin-bottom: 30px; }
        .cta-buttons { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
        .cta-btn { display: inline-block; padding: 16px 45px; border-radius: 50px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; font-size: 1.1rem; }
        .cta-btn.primary { background: linear-gradient(135deg, #c4a45a, #d4af37); color: #fff; }
        .cta-btn.primary:hover { transform: translateY(-3px); box-shadow: 0 15px 40px rgba(196,164,90,0.4); }
        .cta-btn.outline { background: transparent; color: #d4af37; border: 2px solid #d4af37; }
        .cta-btn.outline:hover { background: #d4af37; color: #fff; }

        @media (max-width: 1024px) {
            .myth-grid, .philosophy-grid, .consultation-grid { grid-template-columns: 1fr; gap: 50px; }
            .aging-grid, .areas-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2rem; }
            .hero-banner { height: 380px; }
            .myth-section, .aging-section, .philosophy-section, .consultation-section, .areas-section, .tech-section, .why-section, .when-section { padding: 60px 5%; }
            .myth-content h2, .aging-header h2, .philosophy-content h2, .consultation-content h2, .areas-header h2, .tech-container h2, .why-container h2, .when-container h2, .cta-container h2 { font-size: 1.8rem; }
            .aging-grid, .areas-grid { grid-template-columns: 1fr; }
            .philosophy-columns { grid-template-columns: 1fr; }
            .myth-image img, .philosophy-image img, .consultation-image img { height: 350px; }
            .tech-links, .cta-buttons { flex-direction: column; align-items: center; }
            .tech-link, .cta-btn { width: 100%; max-width: 300px; text-align: center; }
        }
    </style>
</head>
<body>

<?php 
$header_path = __DIR__ . '/includes/header.php';
if (file_exists($header_path)) { include $header_path; }
else { $script_dir = dirname($_SERVER['SCRIPT_FILENAME']); $alt_header = $script_dir . '/includes/header.php'; if (file_exists($alt_header)) { include $alt_header; } else { include 'header.php'; } }
?>

<section class="hero-banner">
    <div class="hero-content">
        <h1 class="playfair">ANTI-AGEING TREATMENT IN <span>CHANDIGARH</span></h1>
        <p class="hero-subtitle">Looking Like Yourself — Just Refreshed, At Every Age</p>
        <div class="hero-divider"><span></span><div class="diamond"></div><span></span></div>
    </div>
</section>
<hr>
<section class="myth-section">
    <div class="myth-grid">
        <div class="myth-content">
            <h2 class="playfair">The Biggest Myth About <span>Anti-Ageing</span></h2>
            <p>Most people think anti-ageing means one of two things:</p>
            <div class="myth-highlight-box">
                <p>Freezing the face.</p>
                <p>Or erasing every line until nothing moves.</p>
            </div>
            <p>That fear is valid. We've all seen faces that look <span class="highlight">stretched, stiff, or unfamiliar</span> — where expressions disappear and confidence drops instead of rising.</p>
            <p><span class="highlight">That is not what ageing well looks like.</span></p>
            <p>True anti-ageing is not about changing how you look. It's about <span class="highlight">supporting how your skin, structure, and tissues change with time.</span> This includes addressing <a href="skin-hair-concerns-dermatologist-chandigarh.php" class="text-link">skin hair concerns</a> holistically. This includes addressing <a href="skin-hair-concerns-dermatologist-chandigarh.php" class="text-link">skin hair concerns</a> holistically.</p>
            <p class="emphasis">At Dermessence, anti-ageing is approached as restoration, not replacement.</p>
        </div>
        <div class="myth-image">
            <img src="assets/images.jpg" alt="Natural Anti-Ageing at Dermessence Chandigarh">
        </div>
    </div>
</section>
<hr>
<section class="aging-section">
    <div class="aging-container">
        <div class="aging-header">
            <h2 class="playfair">Ageing Is Natural — But How It Shows Is <span>Not Random</span></h2>
            <p>Ageing doesn't happen overnight. It unfolds gradually due to multiple changes happening beneath the surface:</p>
        </div>
            <div class="aging-grid">
                <div class="aging-item"><span><strong>Repeated Facial Expressions</strong> that crease the skin</span></div>
                <div class="aging-item"><span>Gradual loss of <strong>Collagen and Elasticity</strong></span></div>
                <div class="aging-item"><span>Changes in <strong>Facial Fat Distribution</strong></span></div>
                <div class="aging-item"><span>Subtle shifts in <strong>Bone Structure</strong></span></div>
                <div class="aging-item"><span>Reduced <strong>Hydration</strong> and skin renewal</span></div>
                <div class="aging-item"><span><strong>Environmental Exposure</strong> and lifestyle stress</span></div>
            </div>
        <div class="aging-bottom">
            <p>This is why <span class="highlight">ageing is never just about wrinkles.</span></p>
            <p class="emphasis">It's about skin, muscle, fat, and support tissues working together — or falling out of balance.</p>
        </div>
    </div>
</section>




<section style="padding:80px 20px; background:#0f0f0f;">
  <div style="max-width:100%; margin:auto; color:#fff; font-family:'Inter', sans-serif;">

    <h2 style="font-size:2.4rem; color:#d4af37; margin-bottom:25px;">
      Why “One-Size Anti-Ageing” Never Works
    </h2>

    <p style="font-size:1.1rem; line-height:1.9; color:#ddd;">
      Many people search for anti-ageing treatment in Chandigarh after trying:
    </p>

    <div style="margin-top:20px; padding:25px; border:1px solid rgba(212,175,55,0.3); border-radius:12px;">
      <ul style="margin:0; padding-left:0; list-style:none; line-height:2; color:#ccc;">
        <li>• Expensive creams</li>
        <li>• Facials with temporary glow</li>
        <li>• Advice that worked for someone else</li>
      </ul>
    </div>

    <p style="font-size:1.15rem; line-height:1.9; margin-top:25px; color:#d4af37; font-weight:600;">
      The problem is simple:  
      Ageing does not look the same on every face.
    </p>

    <p style="font-size:1.1rem; line-height:1.9; color:#ccc; margin-top:15px;">
      Some people notice fine lines first.  
      Some see sagging.  
      Others see dullness, tired skin, or changes in facial shape.
    </p>

    <p style="font-size:1.1rem; line-height:1.9; color:#ccc; margin-top:15px;">
      Treating ageing without understanding where it’s coming from often leads 
      to overdoing one area and neglecting another. That’s when faces start 
      to look unnatural.
    </p>

  </div>
</section>

<hr>
<section class="philosophy-section">
    <div class="philosophy-grid">
        <div class="philosophy-image">
            <img src="assets/antiaging/consultation.jpg" alt="Anti-Ageing Consultation at Dermessence">
        </div>
        <div class="philosophy-content">
            <h2 class="playfair">The Dermessence Philosophy: <span>Age Gracefully, Not Artificially</span></h2>
            <p>At Dermessence, the goal of anti-ageing is <span class="highlight">clarity and balance.</span></p>
            <div class="philosophy-columns">
                <div class="philosophy-col">
                    <h4>Not to:</h4>
                    <ul>
                        <li>Freeze expressions</li>
                        <li>Overcorrect features</li>
                        <li>Make you look like someone else</li>
                    </ul>
                </div>
                <div class="philosophy-col do">
                    <h4>But to:</h4>
                    <ul>
                        <li>Soften lines naturally</li>
                        <li>Support skin firmness</li>
                        <li>Improve texture and luminosity</li>
                        <li>Maintain facial harmony</li>
                        <li>Help you look rested, healthy, and confident</li>
                    </ul>
                </div>
            </div>
            <p style="margin-top: 25px;"><span class="highlight">This approach is guided by detailed consultation and realistic planning.</span></p>
        </div>
    </div>
</section>
<hr>
<section class="consultation-section">
    <div class="consultation-grid">
        <div class="consultation-content">
            <h2 class="playfair">A Consultation-Led <span>Anti-Ageing Approach</span></h2>
            <p>Every anti-ageing journey at Dermessence begins with understanding.</p>
            <p>During consultation, the focus is on:</p>
            <div class="consultation-list">
                <div class="consultation-item"><div class="icon">1</div><span>Skin quality and elasticity</span></div>
                <div class="consultation-item"><div class="icon">2</div><span>Pattern of wrinkles and folds</span></div>
                <div class="consultation-item"><div class="icon">3</div><span>Facial movement and expressions</span></div>
                <div class="consultation-item"><div class="icon">4</div><span>Structural support under the skin</span></div>
                <div class="consultation-item"><div class="icon">5</div><span>Neck and hand ageing</span></div>
                <div class="consultation-item"><div class="icon">6</div><span>Lifestyle and ageing triggers</span></div>
            </div>
            <p><span class="highlight">Anti-ageing care is never planned in isolation.</span> It is designed to respect facial anatomy and natural expression.</p>
            <p class="doctor-note">Consultations are personally guided by <strong>Dr. Sukhmani Brar Jugpal</strong>, who brings over a decade of clinical dermatology experience to every assessment.</p>
        </div>
        <div class="consultation-image">
            <img src="assets/group.jpeg" alt="Dr. Sukhmani Brar Jugpal Anti-Ageing Consultation">
        </div>
    </div>
</section>
<hr>
<section class="areas-section">
    <div class="areas-header">
        <h2 class="playfair">Areas of <span>Ageing Care</span></h2>
    </div>
    <div class="areas-grid">
        <div class="area-card">
            <h3>Skin Ageing</h3>
            <p>When Texture and Glow Begin to Change</p>
            <p>Skin ageing often appears first as:</p>
            <ul><li>Fine lines</li><li>Dryness</li><li>Loss of glow</li><li>Uneven texture</li></ul>
            <p style="margin-top: 15px;"><span class="highlight">Anti-ageing skin care focuses on improving skin strength, hydration, and surface quality — not masking it.</span></p>
        </div>
        <div class="area-card">
            <h3>Neck Ageing</h3>
            <p>The Most Overlooked Area</p>
            <p>The neck ages faster than the face. Thinner skin, constant movement, and sun exposure contribute to:</p>
            <ul><li>Fine lines</li><li>Crepey texture</li><li>Sagging appearance</li></ul>
            <p style="margin-top: 15px;"><span class="highlight">At Dermessence, neck ageing is evaluated as an essential part of anti-ageing planning.</span></p>
        </div>
        <div class="area-card">
            <h3>Hand Ageing</h3>
            <p>Where Age Often Shows First</p>
            <p>Hands reveal age more quickly than the face. Common signs include:</p>
            <ul><li>Thinning skin</li><li>Prominent veins</li><li>Loss of smoothness</li><li>Pigmentation</li></ul>
            <p style="margin-top: 15px;"><span class="highlight">Responsible anti-ageing considers hands as part of the overall rejuvenation process.</span></p>
        </div>
    </div>
</section>
<hr>
<section class="tech-section">
    <div class="tech-container">
        <h2 class="playfair">Technology as Support — <span>Not the Solution</span></h2>
        <p>At Dermessence, advanced cosmetic technologies are used carefully and selectively.</p>
        <p>Technology supports:</p>
        <div class="tech-features">
            <span>Skin tightening</span>
            <span>Texture refinement</span>
            <span>Collagen stimulation</span>
            <span>Structural support</span>
        </div>
        <p class="tech-note">But technology never replaces judgement. Every tool is used only when suitable — and always as part of a broader plan.</p>
        <p style="margin-top: 25px; font-size: 1.1rem; color: #666;">Advanced anti-ageing technologies used at Dermessence include skin tightening and collagen-support systems such as:</p>
        <div class="tech-links">
            <a href="hifu-treatment-chandigarh.php" class="tech-link">HIFU Treatment</a>
            <a href="morpheus8-treatment-chandigarh.php" class="tech-link outline">Morpheus8 Treatment</a>
        </div>
    </div>
</section>
<hr>
<section class="why-section">
    <div class="why-container">
        <h2 class="playfair">Why Patients Choose Dermessence for <span>Anti-Ageing</span></h2>
        <p>Patients choose Dermessence because the experience feels different. They value:</p>
        <div class="why-grid">
            <div class="why-item"><span>Honest guidance</span></div>
            <div class="why-item"><span>Natural-looking outcomes</span></div>
            <div class="why-item"><span>No pressure decisions</span></div>
            <div class="why-item"><span>Doctor-led planning</span></div>
            <div class="why-item"><span>Long-term skin health focus</span></div>
        </div>
        <p class="why-note">Many patients say they finally understand what their face needs — and what it doesn't.</p>
    </div>
</section>

<section style="padding:80px 20px; background:#151515;">
  <div style="max-width:1000px; margin:auto; color:#fff; font-family:'Inter', sans-serif; text-align:center;">

    <h2 style="font-size:2.5rem; color:#d4af37; margin-bottom:25px;">
      Anti-Ageing Is a Journey, Not a Shortcut
    </h2>

    <p style="font-size:1.2rem; line-height:1.9; color:#ddd;">
      Ageing doesn’t need to be fought.  
      It needs to be understood.
    </p>

    <div style="margin-top:30px; padding:30px; border:1px solid rgba(212,175,55,0.3); border-radius:14px; display:inline-block;">
      <p style="font-size:1.1rem; line-height:2; color:#ccc; margin:0;">
        Responsible anti-ageing helps you:
      </p>

      <ul style="margin-top:15px; list-style:none; padding-left:0; line-height:2; color:#ddd;">
        <li>• Feel confident at every stage</li>
        <li>• Maintain facial expression</li>
        <li>• Support skin health over time</li>
        <li>• Make informed choices</li>
      </ul>
    </div>

    <p style="font-size:1.25rem; line-height:1.9; margin-top:35px; color:#d4af37; font-weight:600;">
      That is what ageing gracefully truly means.
    </p>

  </div>
</section>

<hr>
<section class="when-section">
    <div class="when-container">
        <h2 class="playfair">When Anti-Ageing Care May Be <span>Right for You</span></h2>
        <p>You may consider consulting if:</p>
        <div class="when-signs">
            <div class="when-sign"><div class="check">&#10003;</div><span>Fine lines are becoming noticeable</span></div>
            <div class="when-sign"><div class="check">&#10003;</div><span>Skin feels thinner or dull</span></div>
            <div class="when-sign"><div class="check">&#10003;</div><span>Facial contours appear softer</span></div>
            <div class="when-sign"><div class="check">&#10003;</div><span>Neck or hands show ageing signs</span></div>
            <div class="when-sign"><div class="check">&#10003;</div><span>You want prevention, not correction</span></div>
        </div>
        <p class="when-note">Early clarity often leads to better long-term outcomes.</p>
    </div>
</section>
<hr>
<section class="cta-section">
    <div class="cta-container">
        <h2 class="playfair">An Invitation to Age on <span>Your Own Terms</span></h2>
        <p>Anti-ageing is not about stopping time. It's about moving through it with confidence.</p>
        <p class="highlight-text">If you're exploring <a href="anti-aging-treatment-chandigarh.php" class="text-link" style="color:#d4af37;">anti-ageing treatment in Chandigarh</a>, Dermessence offers a consultation-led, natural approach focused on balance, safety, and long-term skin health.</p>
        <h3 class="playfair" style="color:#fff; margin: 40px 0 15px; font-size: 1.8rem;">Book Your Anti-Ageing Consultation</h3>
        <p>Let your skin reflect how you feel — not just how old you are.</p>
        <div class="cta-buttons">
            <a href="tel:+919915930506" class="cta-btn primary">Call Now</a>
            <a href="book-appointment.php" class="cta-btn outline">Book Appointment</a>
        </div>
    </div>
</section>
<style>
    .cta-section {
  width: 100%;
  padding: 100px 20px;
  background: linear-gradient(135deg, #0b0b0b, #1a1a1a);
  position: relative;
  overflow: hidden;
}

.cta-section::before {
  content: "";
  position: absolute;
  top: -40%;
  left: -40%;
  width: 180%;
  height: 180%;
  background: radial-gradient(circle, rgba(212,175,55,0.18) 0%, transparent 60%);
  animation: ctaGlow 10s linear infinite;
}

@keyframes ctaGlow {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}

.cta-container {
  max-width: 900px;
  margin: 0 auto;
  text-align: center;
  color: #fff;
  position: relative;
  z-index: 1;
}

.cta-container h2 {
  font-size: 2.6rem;
  font-weight: 600;
  margin-bottom: 20px;
  color: #fff;
}

.cta-container h2 span {
  color: #d4af37;
}

.cta-container p {
  font-size: 1.1rem;
  color: #ddd;
  line-height: 1.7;
  margin-bottom: 15px;
}

.highlight-text {
  margin-top: 20px;
  font-size: 1.05rem;
  color: #ccc;
}

.text-link {
  color: #d4af37;
  text-decoration: none;
  font-weight: 600;
  position: relative;
}

.text-link::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -4px;
  width: 100%;
  height: 1px;
  background: #d4af37;
  transform: scaleX(0);
  transition: 0.3s;
}

.text-link:hover::after {
  transform: scaleX(1);
}

.cta-container h3 {
  margin-top: 50px;
  font-size: 1.9rem;
  color: #d4af37;
  font-weight: 600;
}

.cta-buttons {
  margin-top: 35px;
  display: flex;
  justify-content: center;
  gap: 25px;
  flex-wrap: wrap;
}

.cta-btn {
  padding: 14px 36px;
  border-radius: 50px;
  font-size: 1rem;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
  letter-spacing: 0.5px;
}

/* Primary Call Button */
.cta-btn.primary {
  background: linear-gradient(135deg, #d4af37, #f5d76e);
  color: #000;
  box-shadow: 0 10px 25px rgba(212,175,55,0.4);
}

.cta-btn.primary:hover {
  transform: translateY(-4px) scale(1.05);
  box-shadow: 0 18px 45px rgba(212,175,55,0.7);
}

/* Outline Button */
.cta-btn.outline {
  border: 2px solid #d4af37;
  color: #d4af37;
  background: transparent;
}

.cta-btn.outline:hover {
  background: #d4af37;
  color: #000;
  transform: translateY(-4px) scale(1.05);
}

/* Mobile */
@media (max-width: 768px) {
  .cta-container h2 {
    font-size: 1.9rem;
  }

  .cta-container h3 {
    font-size: 1.5rem;
  }

  .cta-buttons {
    flex-direction: column;
  }

  .cta-btn {
    width: 100%;
  }
}

</style>
<?php $footer_path = __DIR__ . '/includes/footer.php'; if (file_exists($footer_path)) { include $footer_path; } ?>

</body>
</html>
