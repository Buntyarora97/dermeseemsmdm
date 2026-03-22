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
        <h1>Black Peel</h1>
        
        <div class="section-card">
            <h2>What Are Black Peels?</h2>
            <p>Black peels are advanced chemical peel treatments primarily used to treat acne, oily skin, acne scars, enlarged pores, and post-acne pigmentation. Especially beneficial for recurrent acne and stubborn marks.</p>
        </div>

        <div class="section-card">
            <h2>How Does It Work?</h2>
            <ul>
                <li>Penetrating deep into the pores</li>
                <li>Reducing excess oil and sebum production</li>
                <li>Controlling acne-causing bacteria</li>
                <li>Promoting rapid skin cell renewal</li>
                <li>Lightening acne marks and pigmentation</li>
            </ul>
        </div>

        <div class="section-card">
            <h2>What Is the Procedure Like?</h2>
            <ul>
                <li>Thorough cleansing and degreasing of the skin</li>
                <li>Application of the black peel solution</li>
                <li>Monitored exposure or leave-on protocol</li>
                <li>Neutralization or wash-off after time</li>
                <li>Application of soothing and oil-control products</li>
            </ul>
        </div>

        <div class="section-card">
            <h2>What Can I Expect?</h2>
            <ul>
                <li>Mild burning or tingling during application</li>
                <li>Redness or tightness for a short period</li>
                <li>Peeling or flaking over the next few days</li>
                <li>Gradual reduction in acne, oiliness, and marks</li>
            </ul>
        </div>

        <div class="section-card">
            <h2>Timeline & Results</h2>
            <h3>When Will I See Results?</h3>
            <p>Initial improvement within 7–10 days. Noticeable reduction occurs after multiple sessions.</p>
            <h3>How Long Does the Result Last?</h3>
            <p>Results can last several months with proper skincare and maintenance.</p>
        </div>

        <div class="section-card">
            <h2>Care & Enhancements</h2>
            <p><strong>Pre-Care:</strong> Stop retinoids 5–7 days prior. Avoid sun exposure.</p>
            <p><strong>Post-Care:</strong> Use non-comedogenic products. Apply sunscreen daily. Avoid heat and steam.</p>
            <p><strong>Combinations:</strong> Medical acne facials, LED therapy, Laser acne treatments, Microneedling</p>
            <p><strong>Supplements:</strong> Zinc, Omega-3, Antioxidants, Vitamins</p>
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
