<?php
include 'dermessence_optimizer.php';

$title = "Chemical Peels Treatment in Chandigarh | Dermessence";
$meta_description = "Professional chemical peel treatments in Chandigarh for acne, pigmentation and skin texture improvement.";
$meta_keywords = "chemical peels Chandigarh, skin peel treatment Chandigarh, acne peel Chandigarh";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="dermatologist in chandigarh, best dermatologist in chandigarh, skin specialist in chandigarh, top dermatologist in chandigarh, dermatology clinic in chandigarh, skin doctor in chandigarh, Dr. Sukhmani Brar Jugpal, laser treatment chandigarh, acne treatment chandigarh, hair specialist chandigarh, chemical peels chandigarh, botox chandigarh, fillers chandigarh">
    <link rel="canonical" href="https://thedermessence.com/dermatologist-in-chandigarh" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            background-color: #000;
            color: #d4af37;
            font-family: 'Playfair Display', serif;
            margin: 0;
            padding: 0;
        }
        
        /* Concerns Banner Styles */
        .concerns-banner {
            position: relative;
            width: 100%;
            height: 370px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: #e9e2db;
        }
        .concerns-bg {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: url('/assets/concern/q1.png') center center/cover no-repeat;
            opacity: 0.29;
            z-index: 1;
        }
        .concerns-inner {
            position: relative;
            z-index: 2;
            width: 96%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .concerns-inner h1 {
            font-family: 'Georgia', serif;
            font-size: 2.6rem;
            color: #181819;
            font-weight: 600;
            margin: 0 35px;
            letter-spacing: 2px;
            text-align: center;
            white-space: nowrap;
        }
        .concerns-inner .line {
            flex: 1 1 0%;
            border: none;
            border-top: 1.1px solid #e0dcd6;
            height: 0;
            margin: 0 5px;
        }
        
        /* Main Content Styles */
        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 60px 20px;
        }
        header {
            text-align: center;
            margin-bottom: 60px;
        }
        h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            letter-spacing: 3px;
            text-transform: uppercase;
            border-bottom: 2px solid #d4af37;
            display: inline-block;
            padding-bottom: 10px;
        }
        .intro-text {
            color: #ccc;
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 50px;
            line-height: 1.6;
        }
        .peel-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }
        .peel-card {
            background: #111;
            border: 1px solid #d4af37;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 300px;
            position: relative;
            overflow: hidden;
        }
        .peel-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(212, 175, 55, 0.1), transparent);
            transform: translateX(-100%);
            transition: 0.6s;
        }
        .peel-card:hover::before {
            transform: translateX(100%);
        }
        .peel-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 15px 30px rgba(212, 175, 55, 0.3);
            background: #1a1a1a;
            border-color: #fff;
        }
        .peel-card h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-transform: capitalize;
            letter-spacing: 1px;
            color: white;
        }
        .peel-card p {
            font-size: 1.1rem;
            color: #aaa;
            line-height: 1.5;
        }
        .card-footer {
            margin-top: 20px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 2px;
            opacity: 0;
            transition: 0.3s;
            color: white;
        }
        .peel-card:hover .card-footer {
            opacity: 1;
        }
        .back-home {
            display: block;
            text-align: center;
            margin-top: 80px;
            color: #d4af37;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            transition: 0.3s;
        }
        .back-home:hover {
            letter-spacing: 2px;
            color: #fff;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            .peel-grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 600px) {
            .concerns-banner { height: 90px; }
            .concerns-inner h1 { font-size: 1.3rem; margin: 0 10px;}
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

    <!-- Concerns Banner Section -->
    <section class="concerns-banner">
        <div class="concerns-bg"></div>
        <div class="concerns-inner">
            <hr class="line">
            <h1>Chemical Peels</h1>
            <hr class="line">
        </div>
    </section>

    <div class="container">
        <header>
            <h1>Chemical Peels</h1>
            <p class="intro-text">Discover our range of premium chemical peels tailored for every skin concern. From instant radiance to deep rejuvenation, experience the celebrity-preferred treatments at our clinic.</p>
        </header>

        <div class="peel-grid">
            <a href="face-peel.php" class="peel-card">
                <h3>Face Peel</h3>
                <p>Advanced exfoliation for facial rejuvenation and radiant glow.</p>
                <div class="card-footer">View Details →</div>
            </a>
            
            <a href="body-peel.php" class="peel-card">
                <h3>Body Peel</h3>
                <p>Perfect for back, hands, and feet to address acne and texture.</p>
                <div class="card-footer">View Details →</div>
            </a>
            
            <a href="scalp-peel.php" class="peel-card">
                <h3>Scalp Peel</h3>
                <p>Treat hairfall, dandruff, and oily scalp for healthy hair growth.</p>
                <div class="card-footer">View Details →</div>
            </a>
            
            <a href="hydrating-peel.php" class="peel-card">
                <h3>Hydrating Peel</h3>
                <p>Restore deep moisture and plumpness to dehydrated skin.</p>
                <div class="card-footer">View Details →</div>
            </a>
            
            <a href="pigment-peel.php" class="peel-card">
                <h3>Pigment Peel</h3>
                <p>Target melasma, sun spots, and uneven skin tone precisely.</p>
                <div class="card-footer">View Details →</div>
            </a>
            
            <a href="antioxidant-peel.php" class="peel-card">
                <h3>Antioxidant Peel</h3>
                <p>Brighten your complexion and protect against environmental damage.</p>
                <div class="card-footer">View Details →</div>
            </a>
            
            <a href="acne-peel.php" class="peel-card">
                <h3>Acne Peel</h3>
                <p>Control active breakouts, excess oil, and clogged pores.</p>
                <div class="card-footer">View Details →</div>
            </a>
            
            <a href="yellow-peel.php" class="peel-card">
                <h3>Yellow Peel</h3>
                <p>Deep rejuvenation targeting pigmentation and fine lines.</p>
                <div class="card-footer">View Details →</div>
            </a>
            
            <a href="black-peel.php" class="peel-card">
                <h3>Black Peel</h3>
                <p>Intensive pore cleansing and oil control for stubborn acne.</p>
                <div class="card-footer">View Details →</div>
            </a>
            
            <a href="party-peel.php" class="peel-card">
                <h3>Party Peel</h3>
                <p>Instant Glow for special events with zero downtime.</p>
                <div class="card-footer">View Details →</div>
            </a>
        </div>

        <a href="index.php" class="back-home">← RETURN TO HOME</a>
    </div>

    <?php 
    $footer_path = __DIR__ . '/includes/footer.php';
    if (file_exists($footer_path)) { 
        include $footer_path; 
    } else { 
        include 'footer.php'; 
    }
    ?>
    
    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                if (elementTop < windowHeight - 150) { 
                    reveals[i].classList.add("active"); 
                }
            }
        }
        window.addEventListener("scroll", reveal);
        reveal();
    </script>
</body>
</html>