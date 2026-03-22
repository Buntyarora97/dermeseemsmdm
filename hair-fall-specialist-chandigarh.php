<?php
include "dermessence_optimizer.php";

$title = "Hair Specialist in Chandigarh | Hair Fall, Thinning & Scalp Care | Dermessence";
$meta_description = "Hair fall or thinning not improving despite oils and shampoos?...";
$meta_keywords = "hair specialist in Chandigarh, hair doctor in Chandigarh...";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <link rel="canonical" href="https://thedermessence.com/hair-specialist-chandigarh" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            line-height: 1.7;
            background: #fff;
        }
        .playfair {
            font-family: 'Playfair Display', serif;
        }
        .highlight {
            color: #c4a45a;
            font-weight: 600;
        }
        .text-link {
            color: #c4a45a;
            text-decoration: underline;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .text-link:hover {
            color: #a08040;
        }
        
        .hero-banner {
            position: relative;
            width: 100%;
            height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #2d2520 0%, #1a1512 100%);
            overflow: hidden;
        }
        .hero-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('assets/hair/hair-health.jpg') center/cover no-repeat;
            opacity: 0.25;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 0 20px;
            max-width: 900px;
        }
        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.2rem;
            font-weight: 600;
            color: #fff;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }
        .hero-content h1 span {
            color: #d4af37;
        }
        .hero-subtitle {
            font-size: 1.4rem;
            color: #d4af37;
            font-weight: 500;
            margin-bottom: 10px;
            font-style: italic;
        }
        .hero-tagline {
            font-size: 1.1rem;
            color: #ccc;
        }
        .hero-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-top: 25px;
        }
        .hero-divider span {
            width: 80px;
            height: 2px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
        }
        .hero-divider .diamond {
            width: 10px;
            height: 10px;
            background: #d4af37;
            transform: rotate(45deg);
        }

        .truth-section {
            background: linear-gradient(180deg, #faf9f7 0%, #fff 100%);
            padding: 100px 5%;
        }
        .truth-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            max-width: 1300px;
            margin: 0 auto;
            align-items: center;
        }
        .truth-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 25px;
        }
        .truth-content h2 span {
            color: #c4a45a;
        }
        .truth-content p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 18px;
            line-height: 1.8;
        }
        .truth-highlight-box {
            background: #fff;
            border-left: 4px solid #c4a45a;
            padding: 20px 25px;
            margin: 25px 0;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .truth-highlight-box p {
            font-size: 1.15rem;
            color: #c4a45a;
            font-style: italic;
            margin: 8px 0;
        }
        .truth-content .emphasis {
            font-size: 1.25rem;
            font-weight: 600;
            color: #c4a45a;
            margin-top: 20px;
        }
        .truth-image img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 30px 70px rgba(0,0,0,0.12);
        }

        .causes-section {
            background: #fff;
            padding: 100px 5%;
        }
        .causes-container {
            max-width: 1100px;
            margin: 0 auto;
        }
        .causes-header {
            text-align: center;
            margin-bottom: 50px;
        }
        .causes-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 15px;
        }
        .causes-header h2 span {
            color: #c4a45a;
        }
        .causes-header p {
            font-size: 1.15rem;
            color: #666;
        }
        .causes-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-top: 40px;
        }
        .cause-item {
            background: linear-gradient(145deg, #faf9f7, #fff);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }
        .cause-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(196,164,90,0.12);
            border-color: #c4a45a;
        }
        .cause-item span {
            font-size: 1.05rem;
            color: #555;
        }
        .cause-item::before {
            content: '\2726';
            display: block;
            font-size: 1.5rem;
            color: #c4a45a;
            margin-bottom: 10px;
        }
        .causes-bottom {
            text-align: center;
            margin-top: 40px;
        }
        .causes-bottom p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 10px;
        }
        .causes-bottom .emphasis {
            font-size: 1.3rem;
            font-weight: 600;
            color: #c4a45a;
        }

        .approach-section {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            padding: 100px 5%;
        }
        .approach-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 80px;
            max-width: 1300px;
            margin: 0 auto;
            align-items: center;
        }
        .approach-image img {
            width: 100%;
            height: 550px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 30px 70px rgba(0,0,0,0.3);
        }
        .approach-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 25px;
        }
        .approach-content h2 span {
            color: #d4af37;
        }
        .approach-content p {
            font-size: 1.1rem;
            color: #ccc;
            margin-bottom: 20px;
            line-height: 1.8;
        }
        .approach-content .doctor-name {
            color: #d4af37;
            font-weight: 600;
        }
        .approach-therapy-box {
            background: rgba(212,175,55,0.1);
            border-radius: 15px;
            padding: 25px;
            margin-top: 25px;
            border: 1px solid rgba(212,175,55,0.3);
        }
        .approach-therapy-box p {
            color: #ddd;
            margin-bottom: 15px;
        }
        .therapy-links {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        .therapy-link {
            display: inline-block;
            padding: 10px 25px;
            background: linear-gradient(135deg, #c4a45a, #d4af37);
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .therapy-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(196,164,90,0.4);
        }

        .concerns-section {
            background: #fff;
            padding: 100px 5%;
        }
        .concerns-header {
            text-align: center;
            max-width: 900px;
            margin: 0 auto 60px;
        }
        .concerns-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 15px;
        }
        .concerns-header h2 span {
            color: #c4a45a;
        }
        .concerns-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            max-width: 1400px;
            margin: 0 auto;
        }
        .concern-card {
            background: linear-gradient(145deg, #faf9f7, #fff);
            border-radius: 20px;
            padding: 35px;
            border: 1px solid #eee;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        .concern-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #c4a45a, #d4af37);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }
        .concern-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 60px rgba(196,164,90,0.12);
            border-color: #c4a45a;
        }
        .concern-card:hover::before {
            transform: scaleX(1);
        }
        .concern-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: #c4a45a;
            margin-bottom: 12px;
        }
        .concern-card .sub {
            font-size: 1rem;
            color: #888;
            font-style: italic;
            margin-bottom: 15px;
        }
        .concern-card p {
            font-size: 1rem;
            color: #666;
            line-height: 1.7;
        }
        .concern-card ul {
            list-style: none;
            padding: 0;
            margin: 15px 0 0 0;
        }
        .concern-card ul li {
            font-size: 0.95rem;
            color: #666;
            padding: 6px 0 6px 22px;
            position: relative;
        }
        .concern-card ul li::before {
            content: '\2713';
            position: absolute;
            left: 0;
            color: #c4a45a;
            font-weight: 700;
        }

        .prp-gfc-section {
            background: linear-gradient(180deg, #faf9f7 0%, #fff 100%);
            padding: 100px 5%;
        }
        .prp-gfc-container {
            max-width: 1100px;
            margin: 0 auto;
            text-align: center;
        }
        .prp-gfc-container h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 25px;
        }
        .prp-gfc-container h2 span {
            color: #c4a45a;
        }
        .prp-gfc-container > p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 15px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        .prp-gfc-checklist {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin: 30px 0;
        }
        .prp-gfc-checklist span {
            background: #fff;
            padding: 12px 25px;
            border-radius: 30px;
            font-size: 0.95rem;
            color: #555;
            border: 1px solid #eee;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        }
        .prp-gfc-checklist span::before {
            content: '\2713 ';
            color: #c4a45a;
            font-weight: 700;
        }
        .prp-gfc-links {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 40px;
        }
        .prp-gfc-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 35px;
            background: linear-gradient(135deg, #c4a45a, #d4af37);
            color: #fff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.05rem;
            transition: all 0.3s ease;
        }
        .prp-gfc-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(196,164,90,0.4);
        }
        .prp-gfc-link.outline {
            background: transparent;
            color: #c4a45a;
            border: 2px solid #c4a45a;
        }
        .prp-gfc-link.outline:hover {
            background: #c4a45a;
            color: #fff;
        }

        .why-choose-section {
            background: #fff;
            padding: 100px 5%;
        }
        .why-choose-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 80px;
            max-width: 1300px;
            margin: 0 auto;
            align-items: center;
        }
        .why-choose-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 25px;
        }
        .why-choose-content h2 span {
            color: #c4a45a;
        }
        .why-choose-content > p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 25px;
        }
        .why-list {
            display: grid;
            gap: 15px;
        }
        .why-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 15px 20px;
            background: linear-gradient(145deg, #faf9f7, #fff);
            border-radius: 12px;
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }
        .why-item:hover {
            border-color: #c4a45a;
            box-shadow: 0 10px 25px rgba(196,164,90,0.1);
        }
        .why-item .icon {
            width: 35px;
            height: 35px;
            background: linear-gradient(135deg, #c4a45a, #d4af37);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            flex-shrink: 0;
        }
        .why-item span {
            font-size: 1.05rem;
            color: #555;
        }
        .why-choose-content .note {
            font-size: 1.15rem;
            color: #c4a45a;
            font-style: italic;
            margin-top: 25px;
        }
        .why-choose-image img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 30px 70px rgba(0,0,0,0.12);
        }

        .when-consult-section {
            background: linear-gradient(180deg, #faf9f7 0%, #fff 100%);
            padding: 100px 5%;
        }
        .when-consult-container {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }
        .when-consult-container h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 15px;
        }
        .when-consult-container h2 span {
            color: #c4a45a;
        }
        .when-consult-container > p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 40px;
        }
        .consult-signs {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        .consult-sign {
            background: #fff;
            padding: 20px 25px;
            border-radius: 15px;
            border: 1px solid #eee;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.3s ease;
        }
        .consult-sign:hover {
            border-color: #c4a45a;
            box-shadow: 0 10px 30px rgba(196,164,90,0.1);
        }
        .consult-sign .check {
            width: 30px;
            height: 30px;
            background: linear-gradient(135deg, #c4a45a, #d4af37);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            flex-shrink: 0;
        }
        .consult-sign span {
            font-size: 1rem;
            color: #555;
            text-align: left;
        }
        .consult-note {
            font-size: 1.2rem;
            font-weight: 600;
            color: #c4a45a;
            font-style: italic;
        }

        .cta-section {
            background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
            padding: 80px 5%;
        }
        .cta-container {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }
        .cta-container h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 15px;
        }
        .cta-container h2 span {
            color: #d4af37;
        }
        .cta-container > p {
            font-size: 1.15rem;
            color: #ccc;
            margin-bottom: 15px;
        }
        .cta-container .highlight-text {
            font-size: 1.3rem;
            color: #d4af37;
            font-weight: 500;
            margin-bottom: 30px;
        }
        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .cta-btn {
            display: inline-block;
            padding: 16px 45px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }
        .cta-btn.primary {
            background: linear-gradient(135deg, #c4a45a, #d4af37);
            color: #fff;
        }
        .cta-btn.primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(196,164,90,0.4);
        }
        .cta-btn.outline {
            background: transparent;
            color: #d4af37;
            border: 2px solid #d4af37;
        }
        .cta-btn.outline:hover {
            background: #d4af37;
            color: #fff;
        }

        @media (max-width: 1024px) {
            .truth-grid,
            .approach-grid,
            .why-choose-grid {
                grid-template-columns: 1fr;
                gap: 50px;
            }
            .causes-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            .hero-banner {
                height: 350px;
            }
            .hero-subtitle {
                font-size: 1.1rem;
            }
            .truth-section,
            .causes-section,
            .approach-section,
            .concerns-section,
            .prp-gfc-section,
            .why-choose-section,
            .when-consult-section {
                padding: 60px 5%;
            }
            .truth-content h2,
            .causes-header h2,
            .approach-content h2,
            .concerns-header h2,
            .prp-gfc-container h2,
            .why-choose-content h2,
            .when-consult-container h2,
            .cta-container h2 {
                font-size: 1.8rem;
            }
            .causes-grid {
                grid-template-columns: 1fr;
            }
            .concerns-grid {
                grid-template-columns: 1fr;
            }
            .truth-image img,
            .approach-image img,
            .why-choose-image img {
                height: 350px;
            }
            .prp-gfc-links,
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            .prp-gfc-link,
            .cta-btn {
                width: 100%;
                max-width: 300px;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<?php 
$header_path = __DIR__ . '/includes/header.php';
if (file_exists($header_path)) {
    include $header_path;
} else {
    $script_dir = dirname($_SERVER['SCRIPT_FILENAME']);
    $alt_header = $script_dir . '/includes/header.php';
    if (file_exists($alt_header)) {
        include $alt_header;
    } else {
        include 'header.php';
    }
}
?>

<br><br><br><br>

<section class="hero-banner">
    <div class="hero-content">
        <h1 class="playfair">HAIR SPECIALIST IN <span>CHANDIGARH</span></h1>
        <p class="hero-subtitle">Hair Concerns That Go Beyond "Just Hair Fall"</p>
        <p class="hero-tagline">Because bad hair days should not become your normal</p>
        <div class="hero-divider">
            <span></span>
            <div class="diamond"></div>
            <span></span>
        </div>
    </div>
</section>

<section class="truth-section">
    <div class="truth-grid">
        <div class="truth-content">
            <h2 class="playfair">The Truth Most People Miss About <span>Hair Health</span></h2>
            <p>Most people treat hair fall as a hair problem.</p>
            
            <div class="truth-highlight-box">
                <p>A new oil.</p>
                <p>A different shampoo.</p>
                <p>A home remedy that promises fast results.</p>
            </div>
            
            <p>But <span class="highlight">healthy hair does not start at the ends. It starts at the scalp.</span></p>
            
            <p>Your hair health is influenced by <span class="highlight">genetics, nutrition, hormonal balance, stress levels, lifestyle habits, water quality, styling practices,</span> and daily routines that often go unnoticed.</p>
            
            <p>This is why hair concerns cannot be fixed with surface-level care alone.</p>
            
            <p class="emphasis">This is also why many people searching for a <a href="hair-fall-specialist-chandigarh.php" class="text-link">hair specialist in Chandigarh</a> feel frustrated before they finally consult one.</p>
        </div>
        <div class="truth-image">
            <img src="assets/1.webp" alt="Healthy Hair Care at Dermessence Chandigarh">
        </div>
    </div>
</section>

<section class="causes-section">
    <div class="causes-container">
        <div class="causes-header">
            <h2 class="playfair">Why Hair Fall Often Gets <span>Worse Before It Gets Better</span></h2>
            <p>Hair fall rarely appears overnight. It develops slowly due to:</p>
        </div>
        
        <div class="causes-grid">
            <div class="cause-item"><span>Ongoing stress</span></div>
            <div class="cause-item"><span>Nutritional deficiencies</span></div>
            <div class="cause-item"><span>Hormonal imbalance</span></div>
            <div class="cause-item"><span>Scalp inflammation</span></div>
            <div class="cause-item"><span>Improper hair practices</span></div>
            <div class="cause-item"><span>Genetic predisposition</span></div>
        </div>
        
        <div class="causes-bottom">
            <p>When care begins without identifying the trigger, results feel temporary. Something may slow hair fall briefly, but the concern returns.</p>
            <p class="emphasis">Hair does not need guessing. It needs direction.</p>
        </div>
    </div>
</section>

<section class="approach-section">
    <div class="approach-grid">
        <div class="approach-image">
            <img src="assets/main.png" alt="Hair Specialist Consultation at Dermessence">
        </div>
        <div class="approach-content">
            <h2 class="playfair">A Hair Specialist Approach That Starts With <span>Understanding</span></h2>
            <p>At Dermessence, hair care begins with <span class="highlight">evaluation - not assumption.</span></p>
            
            <p><span class="doctor-name">Dr. Sukhmani Brar Jugpal</span> follows a consultation-led process to understand scalp condition, hair density, internal health indicators, and lifestyle factors before planning any course of care.</p>
            
            <p>Where required, <span class="highlight">blood investigations and medical assessments</span> are advised to identify underlying causes. This allows hair care to become structured and personalised rather than reactive.</p>
            
            <div class="approach-therapy-box">
                <p>This clarity helps patients understand whether they need scalp correction, maintenance guidance, or supportive therapies such as:</p>
                <div class="therapy-links">
                    <a href="prp-hair-chandigarh.php" class="therapy-link">PRP Hair Treatment</a>
                    <a href="gfc-hair-chandigarh.php" class="therapy-link">GFC Hair Treatment</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="concerns-section">
    <div class="concerns-header">
        <h2 class="playfair">Common Hair Concerns Managed at <span>Dermessence</span></h2>
    </div>
    
    <div class="concerns-grid">
        <div class="concern-card">
            <h3>Hair Fall and Reduced Hair Density</h3>
            <p class="sub">Excessive hair shedding, thinning ponytail, or visible scalp are often early warning signs.</p>
            <p>Hair fall may be linked to internal deficiencies, stress, hormonal shifts, or genetics. <span class="highlight">Addressing it requires understanding the reason - not just slowing the symptom.</span></p>
        </div>
        
        <div class="concern-card">
            <h3>Hair Breakage and Weak Hair</h3>
            <p class="sub">Not all hair loss happens from the roots.</p>
            <p>Hair breakage can occur due to dryness, over-styling, chemical exposure, or poor scalp health. Improving strength involves <span class="highlight">correcting scalp environment and daily habits together.</span></p>
        </div>
        
        <div class="concern-card">
            <h3>Loss of Hair Shine and Texture</h3>
            <p class="sub">Dull, lifeless hair often signals poor scalp circulation or imbalance.</p>
            <p><span class="highlight">Hair shine is a reflection of scalp health, hydration, and hair fibre strength</span> - not cosmetic coating.</p>
        </div>
        
        <div class="concern-card">
            <h3>Split Ends and Rough Hair Texture</h3>
            <p class="sub">When hair loses moisture balance and protective integrity.</p>
            <p>This concern is common among individuals exposed to <span class="highlight">heat styling, pollution, or frequent chemical use.</span></p>
        </div>
        
        <div class="concern-card">
            <h3>Scalp Conditions</h3>
            <p class="sub">The scalp is living skin and reacts to stress, hygiene, and internal changes.</p>
            <p>Common scalp concerns include:</p>
            <ul>
                <li>Dandruff</li>
                <li>Itching and flaking</li>
                <li>Boils on the scalp</li>
                <li>Excess oiliness or sensitivity</li>
            </ul>
            <p style="margin-top:10px;"><span class="highlight">These conditions require medical evaluation rather than cosmetic fixes.</span></p>
        </div>
        
        <div class="concern-card">
            <h3>Patchy Hair Loss (Alopecia Areata)</h3>
            <p class="sub">Sudden patchy hair loss can be distressing.</p>
            <p><span class="highlight">Early consultation</span> helps understand immune-related triggers and plan responsible care before progression.</p>
        </div>
        
        <div class="concern-card">
            <h3>Pattern Hair Loss in Men and Women</h3>
            <p class="sub">Pattern hair loss affects both genders and often progresses gradually.</p>
            <p><span class="highlight">Early guidance</span> helps manage expectations and slow visible changes through structured care planning.</p>
        </div>
    </div>
</section>

<section class="prp-gfc-section">
    <div class="prp-gfc-container">
        <h2 class="playfair">When <span>PRP Hair</span> or <span>GFC Hair</span> Is Considered</h2>
        <p>At Dermessence, therapies such as <a href="prp-hair-chandigarh.php" class="text-link">PRP Hair</a> and <a href="gfc-hair-chandigarh.php" class="text-link">GFC Hair</a> are <span class="highlight">not positioned as default solutions.</span></p>
        <p>They are considered only after:</p>
        
        <div class="prp-gfc-checklist">
            <span>Scalp condition is evaluated</span>
            <span>Hair loss pattern is understood</span>
            <span>Internal triggers are addressed</span>
            <span>Suitability is assessed</span>
        </div>
        
        <p>Patients are guided toward dedicated treatment pages for deeper understanding when relevant.</p>
        
        <div class="prp-gfc-links">
            <a href="prp-hair-chandigarh.php" class="prp-gfc-link">Learn About PRP Hair Treatment</a>
            <a href="gfc-hair-chandigarh.php" class="prp-gfc-link outline">Learn About GFC Hair Treatment</a>
        </div>
    </div>
</section>

<section class="why-choose-section">
    <div class="why-choose-grid">
        <div class="why-choose-content">
            <h2 class="playfair">Why Patients Choose Dermessence for <span>Hair Care</span></h2>
            <p>Patients choose Dermessence because the experience feels different. They value:</p>
            
            <div class="why-list">
                <div class="why-item">
                    <div class="icon">1</div>
                    <span>Clear explanations</span>
                </div>
                <div class="why-item">
                    <div class="icon">2</div>
                    <span>No pressure decisions</span>
                </div>
                <div class="why-item">
                    <div class="icon">3</div>
                    <span>Ethical, medical hair care</span>
                </div>
                <div class="why-item">
                    <div class="icon">4</div>
                    <span>Direct involvement of <span class="highlight">Dr. Sukhmani Brar Jugpal</span></span>
                </div>
                <div class="why-item">
                    <div class="icon">5</div>
                    <span>Focus on scalp health and long-term maintenance</span>
                </div>
            </div>
            
            <p class="note">For many, it is the first time hair care feels logical and manageable.</p>
        </div>
        <div class="why-choose-image">
            <img src="assets/beautician-protective-mask-doing-procedure-hair.jpg" alt="Beautiful Healthy Hair Result">
        </div>
    </div>
</section>

<section class="when-consult-section">
    <div class="when-consult-container">
        <h2 class="playfair">When to Consult a <span>Hair Specialist in Chandigarh</span></h2>
        <p>You should consider consulting a hair specialist if:</p>
        
        <div class="consult-signs">
            <div class="consult-sign">
                <div class="check">&#10003;</div>
                <span>Hair fall has increased noticeably</span>
            </div>
            <div class="consult-sign">
                <div class="check">&#10003;</div>
                <span>Hair thinning is becoming visible</span>
            </div>
            <div class="consult-sign">
                <div class="check">&#10003;</div>
                <span>Scalp issues persist</span>
            </div>
            <div class="consult-sign">
                <div class="check">&#10003;</div>
                <span>Patchy hair loss appears</span>
            </div>
            <div class="consult-sign">
                <div class="check">&#10003;</div>
                <span>Hair quality has changed significantly</span>
            </div>
        </div>
        
        <p class="consult-note">Early clarity often prevents long-term damage.</p>
    </div>
</section>

<section class="cta-section">
    <div class="cta-container">
        <h2 class="playfair">An Invitation to Understand Your <span>Hair Better</span></h2>
        <p>Your hair reflects more than appearance - it reflects balance.</p>
        <p class="highlight-text">If hair fall, thinning, or scalp concerns are affecting your confidence, Dermessence offers a consultation-led <a href="hair-fall-specialist-chandigarh.php" class="text-link" style="color:#d4af37;">hair specialist approach</a> focused on understanding first and guiding responsibly.</p>
        
        <h3 class="playfair" style="color:#fff; margin: 40px 0 15px; font-size: 1.8rem;">Book Your Hair Specialist Consultation in Chandigarh</h3>
        <p>Take the first step toward healthier scalp and stronger hair.</p>
        
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
  line-height: 1.8;
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
<?php 
$footer_path = __DIR__ . '/includes/footer.php';
if (file_exists($footer_path)) {
    include $footer_path;
}
?>

</body>
</html>
