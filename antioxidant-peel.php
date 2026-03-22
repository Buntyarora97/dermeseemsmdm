<?php
include 'dermessence_optimizer.php';
$title = "Best & Trusted Dermatologist in Chandigarh | Dermessence";
$meta_description = "Looking for the best dermatologist in Chandigarh? Dermessence offers expert skin, hair & laser treatments by top doctors. Book your consultation today. Now!";
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
 
</head>
<body>

    <?php 
    $header_path = __DIR__ . '/includes/header.php';
    if (file_exists($header_path)) {
        include $header_path;
    } else {
        // More robust path detection for shared hosting environments
        $script_dir = dirname($_SERVER['SCRIPT_FILENAME']);
        $alt_header = $script_dir . '/includes/header.php';
        if (file_exists($alt_header)) {
            include $alt_header;
        } else {
            include 'header.php';
        }
    }
    ?>

</head>
<body>
    
    <br><br><br><br><br>
    
    <style>
        body { background-color: #000; color: #d4af37; font-family: 'Playfair Display', serif; margin: 0; padding: 0; }
        .container { max-width: 100%; margin: 0 auto; padding: 50px 20px; line-height: 1.6; }
        h1 { color: #d4af37; border-bottom: 1px solid #d4af37; padding-bottom: 10px; font-size: 2.5rem; text-transform: uppercase; }
        h2 { color: #fff; margin-top: 30px; border-left: 4px solid #d4af37; padding-left: 15px; }
        h3 { color: #d4af37; margin-top: 20px; }
        p { color: #ccc; margin-bottom: 15px; }
        ul { list-style-type: none; padding: 0; }
        li { margin-bottom: 10px; color: #ccc; }
        li::before { content: "• "; color: #d4af37; }
        .back-link { display: inline-block; margin-top: 30px; color: #d4af37; text-decoration: none; border: 1px solid #d4af37; padding: 10px 20px; transition: all 0.3s; }
        .back-link:hover { background: #d4af37; color: #000; }
        .section-card { background: #111; padding: 25px; margin-bottom: 20px; border-radius: 8px; border: 1px solid #222; }
    </style>
    
    
      <div class="container">
        <h1>Antioxidant & Brightening Peel</h1>
        
        <div class="section-card">
            <h2>What Are Antioxidant & Brightening Peels?</h2>
            <p>Antioxidant and brightening peels are advanced chemical peel treatments designed to improve skin radiance, reduce dullness, and protect the skin from environmental damage. Suitable for dull, tired, uneven, and early-aging skin.</p>
        </div>

        <div class="section-card">
            <h2>How Does It Work?</h2>
            <ul>
                <li>Gently exfoliating dead skin cells</li>
                <li>Neutralizing free radicals that cause skin damage</li>
                <li>Boosting collagen stimulation</li>
                <li>Enhancing skin luminosity and tone</li>
                <li>Improving absorption of active ingredients</li>
            </ul>
        </div>

        <div class="section-card">
            <h2>What Is the Procedure Like?</h2>
            <ul>
                <li>Gentle cleansing of the skin</li>
                <li>Application of the antioxidant and brightening peel solution</li>
                <li>Controlled exposure based on skin type</li>
                <li>Neutralization (if required)</li>
                <li>Application of soothing and protective skincare</li>
            </ul>
        </div>

        <div class="section-card">
            <h2>What Can I Expect?</h2>
            <ul>
                <li>Instant skin freshness and glow</li>
                <li>Improved skin smoothness and clarity</li>
                <li>Reduced dullness and uneven tone</li>
                <li>Mild tingling or warmth during application</li>
            </ul>
        </div>

        <div class="section-card">
            <h2>Timeline & Results</h2>
            <h3>When Will I See Results?</h3>
            <p>Results are often visible immediately or within a few days after the first session. With repeated sessions, brightness continues to improve.</p>
            <h3>How Long Does the Result Last?</h3>
            <p>Results generally last 3–4 weeks. Regular sessions help maintain long-term health.</p>
        </div>

        <div class="section-card">
            <h2>Care & Enhancements</h2>
            <p><strong>Pre-Care:</strong> Avoid active skincare for 3-5 days. Limit sun exposure.</p>
            <p><strong>Post-Care:</strong> Apply sunscreen daily. Use gentle cleanser. Avoid heat.</p>
            <p><strong>Combinations:</strong> Medical facials, HydraFacial, LED light therapy, Mesotherapy</p>
            <p><strong>Supplements:</strong> Vitamin C, Glutathione, Collagen</p>
        </div>

        <a href="chemical-peels.php" class="back-link">Back to All Peels</a>
    </div>
</body>
 
    
    <?php 
    $footer_path = __DIR__ . '/includes/footer.php';
    if (file_exists($footer_path)) { include $footer_path; } else { include 'footer.php'; }
    ?>
    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                if (elementTop < windowHeight - 150) { reveals[i].classList.add("active"); }
            }
        }
        window.addEventListener("scroll", reveal);
        reveal();
    </script>
</html>
