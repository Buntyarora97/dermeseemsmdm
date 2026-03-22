<?php
$title = "HIFU Treatment in Chandigarh | Non-Surgical Skin Tightening | Dermessence";
$meta_description = "Noticing sagging skin but not ready for surgery? Discover how HIFU treatment in Chandigarh at Dermessence supports skin tightening and firmness through a consultation-led, non-surgical approach.";
$meta_keywords = "HIFU treatment Chandigarh, HIFU skin tightening Chandigarh, non surgical skin tightening Chandigarh, HIFU face treatment Chandigarh, skin tightening clinic Chandigarh, anti ageing HIFU Chandigarh, HIFU dermatologist Chandigarh";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">

    <link rel="canonical" href="https://thedermessence.com/hifu-treatment-chandigarh" />

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
            background: url('assets/hifu/hifu-treatment.jpg') center/cover no-repeat; opacity: 0.3;
        }
        .hero-content { position: relative; z-index: 2; text-align: center; padding: 0 20px; max-width: 900px; }
        .hero-content h1 { font-family: 'Playfair Display', serif; font-size: 3rem; font-weight: 600; color: #fff; letter-spacing: 2px; margin-bottom: 20px; }
        .hero-content h1 span { color: #d4af37; }
        .hero-subtitle { font-size: 1.3rem; color: #d4af37; font-weight: 500; font-style: italic; margin-bottom: 10px; }
        .hero-tagline { font-size: 1.1rem; color: #ccc; }
        .hero-divider { display: flex; align-items: center; justify-content: center; gap: 20px; margin-top: 25px; }
        .hero-divider span { width: 80px; height: 2px; background: linear-gradient(90deg, transparent, #d4af37, transparent); }
        .hero-divider .diamond { width: 10px; height: 10px; background: #d4af37; transform: rotate(45deg); }

        .intro-section { background: linear-gradient(180deg, #faf9f7 0%, #fff 100%); padding: 100px 5%; }
        .intro-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; max-width: 1300px; margin: 0 auto; align-items: center; }
        .intro-content h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 25px; }
        .intro-content h2 span { color: #c4a45a; }
        .intro-content p { font-size: 1.1rem; color: #555; margin-bottom: 18px; line-height: 1.8; }
        .intro-highlight-box { background: #fff; border-left: 4px solid #c4a45a; padding: 20px 25px; margin: 25px 0; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .intro-highlight-box p { font-size: 1.1rem; color: #666; margin: 8px 0; }
        .intro-highlight-box p strong { color: #c4a45a; }
        .intro-image img { width: 100%; height: 500px; object-fit: cover; border-radius: 20px; box-shadow: 0 30px 70px rgba(0,0,0,0.12); }

        .why-section { background: #fff; padding: 100px 5%; }
        .why-container { max-width: 100%; margin: 0 auto; }
        .why-header { text-align: center; margin-bottom: 50px; }
        .why-header h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 15px; }
        .why-header h2 span { color: #c4a45a; }
        .why-header p { font-size: 1.15rem; color: #666; }
        .why-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; margin-top: 40px; }
        .why-item { background: linear-gradient(145deg, #faf9f7, #fff); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid #eee; transition: all 0.3s ease; }
        .why-item:hover { transform: translateY(-5px); box-shadow: 0 15px 40px rgba(196,164,90,0.12); border-color: #c4a45a; }
        .why-item span { font-size: 1rem; color: #555; }
        .why-item::before { content: '\2726'; display: block; font-size: 1.5rem; color: #c4a45a; margin-bottom: 10px; }
        .why-bottom { text-align: center; margin-top: 40px; }
        .why-bottom p { font-size: 1.1rem; color: #666; margin-bottom: 10px; }
        .why-bottom .emphasis { font-size: 1.2rem; font-weight: 600; color: #c4a45a; }

        .what-section { background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); padding: 100px 5%; }
        .what-grid { display: grid; grid-template-columns: 1fr 1.2fr; gap: 80px; max-width: 1300px; margin: 0 auto; align-items: center; }
        .what-image img { width: 100%; height: 500px; object-fit: cover; border-radius: 20px; box-shadow: 0 30px 70px rgba(0,0,0,0.3); }
        .what-content h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #fff; margin-bottom: 25px; }
        .what-content h2 span { color: #d4af37; }
        .what-content p { font-size: 1.1rem; color: #ccc; margin-bottom: 20px; line-height: 1.8; }
        .what-features { display: grid; gap: 12px; margin-top: 25px; }
        .what-feature { display: flex; align-items: center; gap: 15px; padding: 12px 18px; background: rgba(212,175,55,0.1); border-radius: 10px; border: 1px solid rgba(212,175,55,0.2); }
        .what-feature .icon { width: 30px; height: 30px; background: linear-gradient(135deg, #c4a45a, #d4af37); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; flex-shrink: 0; }
        .what-feature span { font-size: 1rem; color: #ddd; }
        .what-note { color: #d4af37; font-style: italic; margin-top: 20px; }

        .supports-section { background: linear-gradient(180deg, #faf9f7 0%, #fff 100%); padding: 100px 5%; }
        .supports-container { max-width: 1000px; margin: 0 auto; text-align: center; }
        .supports-container h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 25px; }
        .supports-container h2 span { color: #c4a45a; }
        .supports-container > p { font-size: 1.1rem; color: #666; margin-bottom: 20px; }
        .supports-columns { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; margin: 40px 0; text-align: left; }
        .supports-col h4 { font-size: 1.1rem; color: #888; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px; }
        .supports-col ul { list-style: none; padding: 0; }
        .supports-col ul li { font-size: 1.05rem; color: #555; padding: 10px 0 10px 25px; position: relative; border-bottom: 1px solid #eee; }
        .supports-col ul li::before { content: '\2717'; position: absolute; left: 0; color: #c4a45a; }
        .supports-col.do ul li::before { content: '\2713'; color: #c4a45a; }

        .consultation-section { background: #fff; padding: 100px 5%; }
        .consultation-container { max-width: 1000px; margin: 0 auto; }
        .consultation-container h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 25px; text-align: center; }
        .consultation-container h2 span { color: #c4a45a; }
        .consultation-container > p { font-size: 1.1rem; color: #666; margin-bottom: 20px; text-align: center; }
        .eval-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 20px; margin: 40px 0; }
        .eval-item { background: linear-gradient(145deg, #faf9f7, #fff); padding: 25px 20px; border-radius: 15px; border: 1px solid #eee; text-align: center; transition: all 0.3s ease; }
        .eval-item:hover { border-color: #c4a45a; box-shadow: 0 10px 30px rgba(196,164,90,0.1); }
        .eval-item::before { content: '\2713'; display: block; font-size: 1.2rem; color: #c4a45a; margin-bottom: 10px; }
        .eval-item span { font-size: 0.95rem; color: #555; }
        .consultation-note { text-align: center; font-size: 1.15rem; font-weight: 600; color: #c4a45a; margin-top: 20px; }

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

        .choose-section { background: #fff; padding: 100px 5%; }
        .choose-container { max-width: 1000px; margin: 0 auto; text-align: center; }
        .choose-container h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 15px; }
        .choose-container h2 span { color: #c4a45a; }
        .choose-container > p { font-size: 1.1rem; color: #666; margin-bottom: 40px; }
        .choose-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px; }
        .choose-item { background: linear-gradient(145deg, #faf9f7, #fff); padding: 25px 20px; border-radius: 15px; border: 1px solid #eee; transition: all 0.3s ease; }
        .choose-item:hover { border-color: #c4a45a; box-shadow: 0 10px 30px rgba(196,164,90,0.1); }
        .choose-item::before { content: '\2713'; display: block; font-size: 1.2rem; color: #c4a45a; margin-bottom: 10px; }
        .choose-item span { font-size: 1rem; color: #555; }
        .choose-note { font-size: 1.15rem; color: #c4a45a; font-style: italic; }

        .antiaging-section { background: linear-gradient(180deg, #faf9f7 0%, #fff 100%); padding: 80px 5%; }
        .antiaging-container { max-width: 100%; margin: 0 auto; text-align: center; }
        .antiaging-container h2 { font-family: 'Playfair Display', serif; font-size: 2.2rem; font-weight: 600; color: #1a1a1a; margin-bottom: 20px; }
        .antiaging-container h2 span { color: #c4a45a; }
        .antiaging-container p { font-size: 1.1rem; color: #666; margin-bottom: 25px; }
        .antiaging-links { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
        .antiaging-link { display: inline-flex; align-items: center; gap: 10px; padding: 15px 35px; background: linear-gradient(135deg, #c4a45a, #d4af37); color: #fff; text-decoration: none; border-radius: 50px; font-weight: 600; font-size: 1.05rem; transition: all 0.3s ease; }
        .antiaging-link:hover { transform: translateY(-3px); box-shadow: 0 15px 40px rgba(196,164,90,0.4); }
        .antiaging-link.outline { background: transparent; color: #c4a45a; border: 2px solid #c4a45a; }
        .antiaging-link.outline:hover { background: #c4a45a; color: #fff; }

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
        .cta-container { max-width: 100%; margin: 0 auto; text-align: center; }
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
            .intro-grid, .what-grid { grid-template-columns: 1fr; gap: 50px; }
            .why-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2rem; }
            .hero-banner { height: 380px; }
            .intro-section, .why-section, .what-section, .supports-section, .consultation-section, .areas-section, .choose-section, .suitable-section { padding: 60px 5%; }
            .intro-content h2, .why-header h2, .what-content h2, .supports-container h2, .consultation-container h2, .areas-container h2, .choose-container h2, .suitable-container h2, .cta-container h2 { font-size: 1.8rem; }
            .why-grid { grid-template-columns: 1fr; }
            .supports-columns { grid-template-columns: 1fr; }
            .intro-image img, .what-image img { height: 350px; }
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
        <h1 class="playfair">HIFU TREATMENT IN <span>CHANDIGARH</span></h1>
        <p class="hero-subtitle">When Skin Starts to Loosen — But You're Not Ready to Change Your Face</p>
        <div class="hero-divider"><span></span><div class="diamond"></div><span></span></div>
    </div>
</section>
<hr>
<section class="intro-section">
    <div class="intro-grid">
        <div class="intro-content">
            <h2 class="playfair">The Question Most People <span>Ask Quietly</span></h2>
            <p><span class="highlight">"What can I do about sagging skin… without surgery?"</span></p>
            <p>This question usually comes before wrinkles feel severe. Before lines deepen. Before the face looks tired — not because of age, but because <span class="highlight">firmness has reduced.</span></p>
            
            <div class="intro-highlight-box">
                <p>Many people hesitate because they don't want:</p>
                <p><strong>Surgery</strong></p>
                <p><strong>Long downtime</strong></p>
                <p><strong>Artificial-looking results</strong></p>
            </div>
            
            <p>This is where <a href="hifu-treatment-chandigarh.php" class="text-link">HIFU treatment</a> becomes relevant — <span class="highlight">not as a shortcut, but as a support system for ageing skin.</span> It is often paired with <a href="morpheus8-treatment-chandigarh.php" class="text-link">Morpheus8</a> for skin texture refinement.</p>
        </div>
        <div class="intro-image">
            <img src="assets/hifu/skin-firmness.jpg" alt="HIFU Skin Tightening at Dermessence Chandigarh">
        </div>
    </div>
</section>
<hr>
<section class="why-section">
    <div class="why-container">
        <div class="why-header">
            <h2 class="playfair">Why Skin Loses <span>Firmness Over Time</span></h2>
            <p>Skin doesn't sag suddenly. It loosens gradually because:</p>
        </div>
        <div class="why-grid">
            <div class="why-item"><span>Collagen production slows</span></div>
            <div class="why-item"><span>Supporting tissues weaken</span></div>
            <div class="why-item"><span>Skin elasticity reduces</span></div>
            <div class="why-item"><span>Facial structure shifts subtly</span></div>
        </div>
        <div class="why-bottom">
            <p>Topical products work on the surface. <span class="highlight">HIFU works deeper — where firmness actually comes from.</span></p>
            <p class="emphasis">Understanding this difference is crucial before choosing any <strong>Skin Tightening</strong> procedure.</p>
        </div>
    </div>
</section>
<hr>
<section class="what-section">
    <div class="what-grid">
        <div class="what-image">
            <img src="assets/hifu/hifu-treatment.jpg" alt="HIFU Treatment Process at Dermessence">
        </div>
        <div class="what-content">
            <h2 class="playfair">What HIFU Actually Does <span>(Simply Explained)</span></h2>
            <p><span class="highlight">HIFU stands for High-Intensity Focused Ultrasound.</span></p>
            <p>Instead of working on the skin surface, HIFU delivers focused energy to deeper layers of the skin that support firmness and lift.</p>
            
            <div class="what-features">
                <div class="what-feature"><div class="icon">&#10003;</div><span>Stimulates <strong>Collagen Production</strong></span></div>
                <div class="what-feature"><div class="icon">&#10003;</div><span>Supports <strong>Skin Tightening</strong></span></div>
                <div class="what-feature"><div class="icon">&#10003;</div><span>Improves <strong>Firmness</strong> over time</span></div>
            </div>
            
            <p style="margin-top: 25px;">There are <span class="highlight">no cuts. No injections. No surgical alteration.</span></p>
            <p class="what-note">HIFU supports the skin's natural tightening response — gradually.</p>
        </div>
    </div>
</section>
<hr>
<section class="supports-section">
    <div class="supports-container">
        <h2 class="playfair">Why HIFU Is Not About <span>Instant Transformation</span></h2>
        <p>HIFU does not "change" your face.</p>
        
        <div class="supports-columns">
            <div class="supports-col">
                <h4>It does not:</h4>
                <ul>
                    <li>Freeze expressions</li>
                    <li>Stretch features</li>
                    <li>Overcorrect natural contours</li>
                </ul>
            </div>
            <div class="supports-col do">
                <h4>Instead, it supports:</h4>
                <ul>
                    <li>Jawline firmness</li>
                    <li>Cheek support</li>
                    <li>Lower face tightening</li>
                    <li>Neck firmness</li>
                </ul>
            </div>
        </div>
        
        <p style="font-size: 1.15rem; color: #c4a45a; font-weight: 600;">Results develop progressively as collagen rebuilds — which is why proper evaluation matters.</p>
    </div>
</section>
<hr>
<section class="consultation-section">
    <div class="consultation-container">
        <h2 class="playfair">A Consultation-Led HIFU Approach at <span>Dermessence</span></h2>
        <p>At Dermessence, <span class="highlight">HIFU is never offered as a default solution.</span></p>
        <p>Every patient is evaluated for:</p>
        
        <div class="eval-grid">
            <div class="eval-item"><span>Skin thickness</span></div>
            <div class="eval-item"><span>Degree of laxity</span></div>
            <div class="eval-item"><span>Facial structure</span></div>
            <div class="eval-item"><span>Age-related changes</span></div>
            <div class="eval-item"><span>Expectations</span></div>
        </div>
        
        <p class="consultation-note">Only if HIFU is suitable is it discussed as an option. This ensures results look natural — not forced.</p>
    </div>
</section>

<section class="areas-section">
    <div class="areas-container">
        <h2 class="playfair">Areas Commonly Evaluated for <span>HIFU</span></h2>
        <p>HIFU may be considered for:</p>
        
        <div class="areas-grid">
            <div class="area-item"><span>Face sagging</span></div>
            <div class="area-item"><span>Jawline definition</span></div>
            <div class="area-item"><span>Neck laxity</span></div>
            <div class="area-item"><span>Lower face heaviness</span></div>
        </div>
        
        <p class="areas-note">The focus is always balance, not exaggeration.</p>
    </div>
</section>

<section class="choose-section">
    <div class="choose-container">
        <h2 class="playfair">Why People Choose HIFU in Chandigarh at <span>Dermessence</span></h2>
        <p>Patients choose Dermessence for HIFU because:</p>
        
        <div class="choose-grid">
            <div class="choose-item"><span>Decisions are doctor-led</span></div>
            <div class="choose-item"><span>Skin is evaluated holistically</span></div>
            <div class="choose-item"><span>Expectations are explained clearly</span></div>
            <div class="choose-item"><span>Results aim for subtle improvement</span></div>
            <div class="choose-item"><span>Safety and suitability come first</span></div>
        </div>
        
        <p class="choose-note">For many, HIFU becomes part of a broader anti-ageing plan rather than a standalone procedure.</p>
    </div>
</section>

<section class="antiaging-section">
    <div class="antiaging-container">
        <h2 class="playfair">HIFU and <span>Anti-Ageing</span>: How They Fit Together</h2>
        <p>HIFU supports deeper skin layers, while other <a href="anti-aging-treatment-chandigarh.php" class="text-link">anti-ageing approaches</a> focus on surface quality, hydration, and texture.</p>
        <p>This is why HIFU is often discussed alongside anti-ageing skin care — <span class="highlight">not as a replacement, but as reinforcement.</span></p>
        
        <div class="antiaging-links">
            <a href="anti-aging-treatment-chandigarh.php" class="antiaging-link">Anti-Ageing Treatment</a>
            <a href="morpheus8-treatment-chandigarh.php" class="antiaging-link outline">Morpheus8 Treatment</a>
        </div>
    </div>
</section>

<section class="suitable-section">
    <div class="suitable-container">
        <h2 class="playfair">Who May Consider <span>HIFU Treatment</span></h2>
        <p>HIFU may be suitable if:</p>
        
        <div class="suitable-signs">
            <div class="suitable-sign"><div class="check">&#10003;</div><span>Skin feels less firm</span></div>
            <div class="suitable-sign"><div class="check">&#10003;</div><span>Jawline has softened</span></div>
            <div class="suitable-sign"><div class="check">&#10003;</div><span>Neck shows early sagging</span></div>
            <div class="suitable-sign"><div class="check">&#10003;</div><span>You prefer non-surgical options</span></div>
            <div class="suitable-sign"><div class="check">&#10003;</div><span>You want gradual, natural-looking tightening</span></div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="cta-container">
        <h2 class="playfair">An Invitation to Understand Your <span>Skin Better</span></h2>
        <p>HIFU is not about chasing youth. It's about <span class="highlight">supporting skin strength as it changes.</span></p>
        <p class="highlight-text">If you're exploring <a href="hifu-treatment-chandigarh.php" class="text-link" style="color:#d4af37;">HIFU treatment in Chandigarh</a>, Dermessence offers a consultation-led approach focused on clarity, safety, and realistic outcomes.</p>
        
        <div class="cta-buttons">
            <a href="book-appointment.php" class="cta-btn primary">Book Consultation</a>
            <a href="tel:+919915930506" class="cta-btn outline">Call Now</a>
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
  line-height: 1.8;
  margin-bottom: 15px;
}

.highlight {
  color: #d4af37;
  font-weight: 600;
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

.cta-buttons {
  margin-top: 40px;
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

/* Primary button */
.cta-btn.primary {
  background: linear-gradient(135deg, #d4af37, #f5d76e);
  color: #000;
  box-shadow: 0 10px 25px rgba(212,175,55,0.4);
}

.cta-btn.primary:hover {
  transform: translateY(-4px) scale(1.05);
  box-shadow: 0 18px 45px rgba(212,175,55,0.7);
}

/* Outline button */
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

/* Mobile Responsive */
@media (max-width: 768px) {
  .cta-container h2 {
    font-size: 1.9rem;
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
