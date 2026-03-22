<?php
$title = "Morpheus8 Treatment in Chandigarh | Skin Tightening & Texture Care | Dermessence";
$meta_description = "Concerned about skin texture, fine lines or firmness? Learn how Morpheus8 treatment in Chandigarh at Dermessence supports collagen and skin quality through a structured, doctor-led approach.";
$meta_keywords = "Morpheus8 treatment Chandigarh, Morpheus8 skin tightening Chandigarh, radiofrequency microneedling Chandigarh, skin texture treatment Chandigarh, anti ageing Morpheus8 Chandigarh, Morpheus8 face treatment Chandigarh, skin tightening clinic Chandigarh";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <link rel="canonical" href="https://thedermessence.com/morpheus8-treatment-chandigarh" />
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
            background: url('assets/morpheus8/morpheus8-treatment.jpg') center/cover no-repeat; opacity: 0.3;
        }
        .hero-content { position: relative; z-index: 2; text-align: center; padding: 0 20px; max-width: 900px; }
        .hero-content h1 { font-family: 'Playfair Display', serif; font-size: 3rem; font-weight: 600; color: #fff; letter-spacing: 2px; margin-bottom: 20px; }
        .hero-content h1 span { color: #d4af37; }
        .hero-subtitle { font-size: 1.3rem; color: #d4af37; font-weight: 500; font-style: italic; margin-bottom: 10px; }
        .hero-divider { display: flex; align-items: center; justify-content: center; gap: 20px; margin-top: 25px; }
        .hero-divider span { width: 80px; height: 2px; background: linear-gradient(90deg, transparent, #d4af37, transparent); }
        .hero-divider .diamond { width: 10px; height: 10px; background: #d4af37; transform: rotate(45deg); }

        .problem-section { background: linear-gradient(180deg, #faf9f7 0%, #fff 100%);  }
        .problem-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; max-width: 1300px; margin: 0 auto; align-items: center; }
        .problem-content h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 25px; }
        .problem-content h2 span { color: #c4a45a; }
        .problem-content p { font-size: 1.1rem; color: #555; margin-bottom: 18px; line-height: 1.8; }
        .problem-list { background: #fff; border-left: 4px solid #c4a45a; padding: 20px 25px; margin: 25px 0; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .problem-list ul { list-style: none; padding: 0; margin: 0; }
        .problem-list ul li { font-size: 1.05rem; color: #666; padding: 8px 0 8px 25px; position: relative; }
        .problem-list ul li::before { content: '\2713'; position: absolute; left: 0; color: #c4a45a; font-weight: 700; }
        .problem-content .emphasis { font-size: 1.15rem; font-weight: 600; color: #c4a45a; font-style: italic; }
        .problem-image img { width: 100%; height: 500px; object-fit: cover; border-radius: 20px; box-shadow: 0 30px 70px rgba(0,0,0,0.12); }

        .why-section { background: #fff;   }
        .why-container { max-width: 1000px; margin: 0 auto; text-align: center; }
        .why-container h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 25px; }
        .why-container h2 span { color: #c4a45a; }
        .why-container > p { font-size: 1.1rem; color: #666; margin-bottom: 15px; }
        .why-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; margin: 40px 0; }
        .why-item { background: linear-gradient(145deg, #faf9f7, #fff); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid #eee; transition: all 0.3s ease; }
        .why-item:hover { transform: translateY(-5px); box-shadow: 0 15px 40px rgba(196,164,90,0.12); border-color: #c4a45a; }
        .why-item span { font-size: 1rem; color: #555; }
        .why-item::before { content: '\2726'; display: block; font-size: 1.5rem; color: #c4a45a; margin-bottom: 10px; }
        .why-note { font-size: 1.15rem; font-weight: 600; color: #c4a45a; }

        .what-section { background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); padding: 100px 5%; }
        .what-grid { display: grid; grid-template-columns: 1fr 1.2fr; gap: 80px; max-width: 1300px; margin: 0 auto; align-items: center; }
        .what-image img { width: 100%; height: 500px; object-fit: cover; border-radius: 20px; box-shadow: 0 30px 70px rgba(0,0,0,0.3); }
        .what-content h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #fff; margin-bottom: 25px; }
        .what-content h2 span { color: #d4af37; }
        .what-content p { font-size: 1.1rem; color: #ccc; margin-bottom: 20px; line-height: 1.8; }
        .what-combo { display: flex; gap: 20px; margin: 25px 0; }
        .what-combo-item { flex: 1; background: rgba(212,175,55,0.1); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(212,175,55,0.2); }
        .what-combo-item h4 { color: #d4af37; font-size: 1.1rem; margin-bottom: 10px; }
        .what-combo-item p { color: #ccc; font-size: 0.95rem; margin: 0; }
        .what-features { display: grid; gap: 12px; margin-top: 25px; }
        .what-feature { display: flex; align-items: center; gap: 15px; padding: 12px 18px; background: rgba(212,175,55,0.1); border-radius: 10px; border: 1px solid rgba(212,175,55,0.2); }
        .what-feature .icon { width: 30px; height: 30px; background: linear-gradient(135deg, #c4a45a, #d4af37); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; flex-shrink: 0; }
        .what-feature span { font-size: 1rem; color: #ddd; }
        .what-note { color: #d4af37; font-style: italic; margin-top: 20px; font-size: 1.1rem; }

        .nofix-section { background: linear-gradient(180deg, #faf9f7 0%, #fff 100%); padding: 100px 5%; }
        .nofix-container { max-width: 900px; margin: 0 auto; text-align: center; }
        .nofix-container h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 25px; }
        .nofix-container h2 span { color: #c4a45a; }
        .nofix-container > p { font-size: 1.1rem; color: #666; margin-bottom: 20px; }
        .nofix-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0; }
        .nofix-item { background: #fff; padding: 25px 20px; border-radius: 15px; border: 1px solid #eee; transition: all 0.3s ease; }
        .nofix-item:hover { border-color: #c4a45a; box-shadow: 0 10px 30px rgba(196,164,90,0.1); }
        .nofix-item::before { content: '\2713'; display: block; font-size: 1.2rem; color: #c4a45a; margin-bottom: 10px; }
        .nofix-item span { font-size: 1rem; color: #555; }
        .nofix-note { font-size: 1.15rem; font-style: italic; color: #c4a45a; }

        .approach-section { background: #fff; padding: 100px 5%; }
        .approach-container { max-width: 1000px; margin: 0 auto; }
        .approach-container h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 25px; text-align: center; }
        .approach-container h2 span { color: #c4a45a; }
        .approach-container > p { font-size: 1.1rem; color: #666; margin-bottom: 20px; text-align: center; }
        .approach-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin: 40px 0; }
        .approach-item { background: linear-gradient(145deg, #faf9f7, #fff); padding: 25px 20px; border-radius: 15px; border: 1px solid #eee; text-align: center; transition: all 0.3s ease; }
        .approach-item:hover { border-color: #c4a45a; box-shadow: 0 10px 30px rgba(196,164,90,0.1); }
        .approach-item::before { content: '\2713'; display: block; font-size: 1.2rem; color: #c4a45a; margin-bottom: 10px; }
        .approach-item span { font-size: 0.95rem; color: #555; }
        .approach-note { text-align: center; font-size: 1.15rem; font-weight: 600; color: #c4a45a; }

        .areas-section { background: linear-gradient(180deg, #faf9f7 0%, #fff 100%); padding: 100px 5%; }
        .areas-container { max-width: 900px; margin: 0 auto; text-align: center; }
        .areas-container h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 15px; }
        .areas-container h2 span { color: #c4a45a; }
        .areas-container > p { font-size: 1.1rem; color: #666; margin-bottom: 40px; }
        .areas-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; }
        .area-item { background: #fff; padding: 25px 20px; border-radius: 15px; border: 1px solid #eee; transition: all 0.3s ease; }
        .area-item:hover { border-color: #c4a45a; box-shadow: 0 10px 30px rgba(196,164,90,0.1); transform: translateY(-3px); }
        .area-item::before { content: '\2713'; display: block; font-size: 1.2rem; color: #c4a45a; margin-bottom: 10px; }
        .area-item span { font-size: 1rem; color: #555; }
        .areas-note { font-size: 1.1rem; font-style: italic; color: #c4a45a; margin-top: 30px; }

        .antiaging-section { background: #fff; padding: 80px 5%; }
        .antiaging-container { max-width: 900px; margin: 0 auto; text-align: center; }
        .antiaging-container h2 { font-family: 'Playfair Display', serif; font-size: 2.2rem; font-weight: 600; color: #1a1a1a; margin-bottom: 20px; }
        .antiaging-container h2 span { color: #c4a45a; }
        .antiaging-container p { font-size: 1.1rem; color: #666; margin-bottom: 25px; }
        .antiaging-links { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
        .antiaging-link { display: inline-flex; align-items: center; gap: 10px; padding: 15px 35px; background: linear-gradient(135deg, #c4a45a, #d4af37); color: #fff; text-decoration: none; border-radius: 50px; font-weight: 600; font-size: 1.05rem; transition: all 0.3s ease; }
        .antiaging-link:hover { transform: translateY(-3px); box-shadow: 0 15px 40px rgba(196,164,90,0.4); }
        .antiaging-link.outline { background: transparent; color: #c4a45a; border: 2px solid #c4a45a; }
        .antiaging-link.outline:hover { background: #c4a45a; color: #fff; }

        .choose-section { background: linear-gradient(180deg, #faf9f7 0%, #fff 100%); padding: 100px 5%; }
        .choose-container { max-width: 1000px; margin: 0 auto; text-align: center; }
        .choose-container h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 15px; }
        .choose-container h2 span { color: #c4a45a; }
        .choose-container > p { font-size: 1.1rem; color: #666; margin-bottom: 40px; }
        .choose-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px; }
        .choose-item { background: #fff; padding: 25px 20px; border-radius: 15px; border: 1px solid #eee; transition: all 0.3s ease; }
        .choose-item:hover { border-color: #c4a45a; box-shadow: 0 10px 30px rgba(196,164,90,0.1); }
        .choose-item::before { content: '\2713'; display: block; font-size: 1.2rem; color: #c4a45a; margin-bottom: 10px; }
        .choose-item span { font-size: 1rem; color: #555; }

        .suitable-section { background: #fff; padding: 100px 5%; }
        .suitable-container { max-width: 1000px; margin: 0 auto; text-align: center; }
        .suitable-container h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 15px; }
        .suitable-container h2 span { color: #c4a45a; }
        .suitable-container > p { font-size: 1.1rem; color: #666; margin-bottom: 40px; }
        .suitable-signs { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 40px; }
        .suitable-sign { background: linear-gradient(145deg, #faf9f7, #fff); padding: 20px 25px; border-radius: 15px; border: 1px solid #eee; display: flex; align-items: center; gap: 15px; transition: all 0.3s ease; }
        .suitable-sign:hover { border-color: #c4a45a; box-shadow: 0 10px 30px rgba(196,164,90,0.1); }
        .suitable-sign .check { width: 30px; height: 30px; background: linear-gradient(135deg, #c4a45a, #d4af37); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; flex-shrink: 0; }
        .suitable-sign span { font-size: 1rem; color: #555; text-align: left; }

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
            .problem-grid, .what-grid { grid-template-columns: 1fr; gap: 50px; }
            .why-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2rem; }
            .hero-banner { height: 380px; }
            .problem-section, .why-section, .what-section, .nofix-section, .approach-section, .areas-section, .choose-section, .suitable-section { padding: 60px 5%; }
            .problem-content h2, .why-container h2, .what-content h2, .nofix-container h2, .approach-container h2, .areas-container h2, .choose-container h2, .suitable-container h2, .cta-container h2 { font-size: 1.8rem; }
            .why-grid, .nofix-grid { grid-template-columns: 1fr; }
            .what-combo { flex-direction: column; }
            .problem-image img, .what-image img { height: 350px; }
            .antiaging-links, .cta-buttons { flex-direction: column; align-items: center; }
            .antiaging-link, .cta-btn { width: 100%; max-width: 300px; text-align: center; }
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
        <h1 class="playfair">MORPHEUS8 TREATMENT IN <span>CHANDIGARH</span></h1>
        <p class="hero-subtitle">When Skin Needs More Than Surface-Level Care</p>
        <div class="hero-divider"><span></span><div class="diamond"></div><span></span></div>
    </div>
</section>

<section class="problem-section">
    <div class="problem-grid">
        <div class="problem-content">
            <h2 class="playfair">The Skin Problem Many People <span>Can't Name</span></h2>
            <p>Sometimes skin doesn't look bad — <span class="highlight">it just doesn't look right.</span></p>
            
            <div class="problem-list">
                <ul>
                    <li>Texture feels uneven</li>
                    <li>Fine lines appear</li>
                    <li>Skin looks tired despite care</li>
                    <li>Firmness feels reduced</li>
                </ul>
            </div>
            
            <p>This is often when people start searching for advanced skin solutions — <span class="highlight">without wanting drastic change.</span></p>
            
            <p class="emphasis">This is where Morpheus8 fits in.</p>
        </div>
        <div class="problem-image">
            <img src="assets/morpheus8/skin-texture.jpg" alt="Morpheus8 Skin Texture Treatment at Dermessence Chandigarh">
        </div>
    </div>
</section>
<hr>
<section class="why-section">
    <div class="why-container">
        <h2 class="playfair">Why Texture and Firmness Are <span>Connected</span></h2>
        <p>Skin quality depends on:</p>
        
        <div class="why-grid">
            <div class="why-item"><span>Collagen support</span></div>
            <div class="why-item"><span>Elasticity</span></div>
            <div class="why-item"><span>Structural strength</span></div>
            <div class="why-item"><span>Skin renewal</span></div>
        </div>
        
        <p style="font-size: 1.1rem; color: #666; margin-top: 30px;">When collagen weakens, <span class="highlight">texture and firmness decline together.</span></p>
        <p class="why-note">Treating only the surface misses the deeper issue.</p>
    </div>
</section>
<hr>
<section class="what-section">
    <div class="what-grid">
        <div class="what-image">
            <img src="assets/morpheus8/morpheus8-treatment.jpg" alt="Morpheus8 Treatment Process at Dermessence">
        </div>
        <div class="what-content">
            <h2 class="playfair">What Morpheus8 Does <span>(In Simple Terms)</span></h2>
            <p><span class="highlight">Morpheus8 combines:</span></p>
            
            <div class="what-combo">
                <div class="what-combo-item">
                    <h4>Microneedling</h4>
                    <p>Creates micro-channels in skin</p>
                </div>
                <div class="what-combo-item">
                    <h4>Radiofrequency Energy</h4>
                    <p>Delivers heat to deeper layers</p>
                </div>
            </div>
            
            <p>Together, they work below the surface to <span class="highlight">tighten and rejuvenate</span> skin:</p>
            
            <div class="what-features">
                <div class="what-feature"><div class="icon">&#10003;</div><span>Support collagen production</span></div>
                <div class="what-feature"><div class="icon">&#10003;</div><span>Improve skin firmness</span></div>
                <div class="what-feature"><div class="icon">&#10003;</div><span>Refine texture</span></div>
                <div class="what-feature"><div class="icon">&#10003;</div><span>Strengthen skin structure</span></div>
            </div>
            
            <p class="what-note">The goal is not to change features — but to improve skin quality from within.</p>
        </div>
    </div>
</section>
<hr>
<section class="nofix-section">
    <div class="nofix-container">
        <h2 class="playfair">Why Morpheus8 Is Not a <span>"Quick Fix"</span></h2>
        <p>Morpheus8 does not give instant perfection. It works by:</p>
        
        <div class="nofix-grid">
            <div class="nofix-item"><span>Stimulating natural repair</span></div>
            <div class="nofix-item"><span>Supporting collagen remodeling</span></div>
            <div class="nofix-item"><span>Improving skin gradually</span></div>
        </div>
        
        <p class="nofix-note">This makes it ideal for those who want improvement without obvious intervention.</p>
    </div>
</section>
<hr>
<section class="approach-section">
    <div class="approach-container">
        <h2 class="playfair">How Dermessence Approaches <span>Morpheus8</span></h2>
        <p>At Dermessence, <span class="highlight">Morpheus8 is planned only after evaluating:</span></p>
        
        <div class="approach-grid">
            <div class="approach-item"><span>Skin thickness</span></div>
            <div class="approach-item"><span>Texture irregularities</span></div>
            <div class="approach-item"><span>Areas of concern</span></div>
            <div class="approach-item"><span>Healing capacity</span></div>
        </div>
        
        <p class="approach-note">Every session is customised — not standardised. We often combine this with <a href="hifu-treatment-chandigarh.php" class="text-link">HIFU Treatment</a> for deeper structural support. We often combine this with <a href="hifu-treatment-chandigarh.php" class="text-link">HIFU Treatment</a> for deeper structural support.</p>
    </div>
</section>
<hr>
<section class="areas-section">
    <div class="areas-container">
        <h2 class="playfair">Common Areas Evaluated for <span>Morpheus8</span></h2>
        <p>Morpheus8 may be discussed for:</p>
        
        <div class="areas-grid">
            <div class="area-item"><span>Face texture</span></div>
            <div class="area-item"><span>Lower face firmness</span></div>
            <div class="area-item"><span>Jawline support</span></div>
            <div class="area-item"><span>Neck skin quality</span></div>
        </div>
        
        <p class="areas-note">The aim is subtle refinement, not overcorrection.</p>
    </div>
</section>
<hr>
<section class="antiaging-section">
    <div class="antiaging-container">
        <h2 class="playfair">Morpheus8 and <span>Anti-Ageing</span> Skin Care</h2>
        <p>Morpheus8 works well as part of a broader <a href="anti-aging-treatment-chandigarh.php" class="text-link">anti-ageing strategy</a>, especially where texture and firmness need support together.</p>
        <p><span class="highlight">It complements other skin-focused care rather than replacing it.</span></p>
        
        <div class="antiaging-links">
            <a href="anti-aging-treatment-chandigarh.php" class="antiaging-link">Anti-Ageing Treatment</a>
            <a href="hifu-treatment-chandigarh.php" class="antiaging-link outline">HIFU Treatment</a>
        </div>
    </div>
</section>
<hr>
<section class="choose-section">
    <div class="choose-container">
        <h2 class="playfair">Why Patients Choose Morpheus8 at <span>Dermessence</span></h2>
        <p>Patients choose Dermessence because:</p>
        
        <div class="choose-grid">
            <div class="choose-item"><span>Procedures are doctor-evaluated</span></div>
            <div class="choose-item"><span>Skin is treated holistically</span></div>
            <div class="choose-item"><span>Expectations are realistic</span></div>
            <div class="choose-item"><span>Safety is prioritised</span></div>
            <div class="choose-item"><span>Results aim to look natural</span></div>
        </div>
    </div>
</section>
<hr>
<section class="suitable-section">
    <div class="suitable-container">
        <h2 class="playfair">Who May Consider <span>Morpheus8 Treatment</span></h2>
        <p>Morpheus8 may be suitable if:</p>
        
        <div class="suitable-signs">
            <div class="suitable-sign"><div class="check">&#10003;</div><span>Skin texture feels uneven</span></div>
            <div class="suitable-sign"><div class="check">&#10003;</div><span>Fine lines are noticeable</span></div>
            <div class="suitable-sign"><div class="check">&#10003;</div><span>Firmness has reduced</span></div>
            <div class="suitable-sign"><div class="check">&#10003;</div><span>You want non-surgical improvement</span></div>
            <div class="suitable-sign"><div class="check">&#10003;</div><span>You value gradual, natural results</span></div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="cta-container">
        <h2 class="playfair">An Invitation to <span>Strengthen Your Skin</span></h2>
        <p>Healthy skin is not about chasing trends. <span class="highlight">It's about supporting structure.</span></p>
        <p class="highlight-text">If you're considering <a href="morpheus8-treatment-chandigarh.php" class="text-link" style="color:#d4af37;">Morpheus8 treatment in Chandigarh</a>, Dermessence offers a consultation-led approach focused on understanding, balance, and long-term skin health.</p>
        
        <div class="cta-buttons">
            <a href="book-appointment.php" class="cta-btn primary">Book Consultation</a>
            <a href="tel:+919915930506" class="cta-btn outline">Call Now</a>
        </div>
    </div>
</section>

<?php $footer_path = __DIR__ . '/includes/footer.php'; if (file_exists($footer_path)) { include $footer_path; } ?>

</body>
</html>
