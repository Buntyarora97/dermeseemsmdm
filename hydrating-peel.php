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
        <h1>Hydrating Peel</h1>
        
        <div class="section-card">
            <h2>What are Hydrating Peels?</h2>
            <p>Hydrating peels are advanced chemical peel treatments specially designed to restore moisture, improve skin texture, and enhance overall skin radiance. Unlike traditional peels that focus mainly on exfoliation, hydrating peels gently remove dead skin cells while simultaneously infusing the skin with essential hydrating and nourishing ingredients.</p>
            <p>They are ideal for dehydrated, dull, sensitive, or tired-looking skin and help strengthen the skin barrier.</p>
        </div>

        <div class="section-card">
            <h2>How Does It Work?</h2>
            <p>Hydrating peels work by using mild exfoliating acids combined with humectants, antioxidants, and soothing agents. These ingredients:</p>
            <ul>
                <li>Gently exfoliate the outer dead skin layer</li>
                <li>Boost water retention in the skin</li>
                <li>Improve penetration of active ingredients</li>
                <li>Enhance skin smoothness and glow</li>
            </ul>
        </div>

        <div class="section-card">
            <h2>What Is the Procedure Like?</h2>
            <ul>
                <li>Skin cleansing to remove oil and impurities</li>
                <li>Application of the hydrating peel solution</li>
                <li>Controlled exposure time based on skin type</li>
                <li>Neutralization (if required)</li>
                <li>Application of calming and hydrating products</li>
            </ul>
            <p>The session usually takes 20–30 minutes and requires no downtime.</p>
        </div>

        <div class="section-card">
            <h2>What Can I Expect?</h2>
            <ul>
                <li>Instantly refreshed and plump skin</li>
                <li>Improved softness and smooth texture</li>
                <li>Reduced dryness and tightness</li>
                <li>A healthy, dewy glow</li>
            </ul>
        </div>

        <div class="section-card">
            <h2>Timeline & Results</h2>
            <h3>When Will I See Results?</h3>
            <p>Results are often visible immediately after the first session. The skin appears more hydrated, radiant, and revitalized. With multiple sessions, improvements become more noticeable.</p>
            <h3>How Long Do the Results Last?</h3>
            <p>Results typically last 2–4 weeks. For long-term benefits, a series of sessions combined with proper home care is recommended.</p>
        </div>

        <div class="section-card">
            <h2>Instructions & Care</h2>
            <h3>Pre-Procedure Instructions</h3>
            <ul>
                <li>Avoid active skincare products (retinoids, exfoliants) for 3–5 days</li>
                <li>Do not undergo waxing or laser treatments on the treated area</li>
                <li>Keep skin well-hydrated</li>
            </ul>
            <h3>Post-Procedure Care</h3>
            <ul>
                <li>Use a gentle cleanser and hydrating moisturizer</li>
                <li>Apply sunscreen daily</li>
                <li>Avoid harsh products and exfoliation for a few days</li>
                <li>Do not pick or rub the skin</li>
            </ul>
        </div>

        <div class="section-card">
            <h2>Enhancing Results</h2>
            <p><strong>Combinations:</strong> HydraFacial, Skin boosters, LED light therapy, Mesotherapy</p>
            <p><strong>Supplements:</strong> Collagen peptides, Hyaluronic acid, Omega-3 fatty acids</p>
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
