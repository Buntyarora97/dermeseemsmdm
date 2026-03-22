<?php
include 'dermessence_optimizer.php';

$title = "Best & Trusted Dermatologist in Chandigarh | Dermessence";
$meta_description = "Looking for the best dermatologist in Chandigarh? Dermessence offers expert skin, hair & laser treatments by top doctors. Book your consultation today.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="dermatologist in chandigarh, best dermatologist in chandigarh, skin specialist in chandigarh, top dermatologist in chandigarh, dermatology clinic in chandigarh, skin doctor in chandigarh, Dr. Sukhmani Brar Jugpal, laser treatment chandigarh, acne treatment chandigarh, hair specialist chandigarh, chemical peels chandigarh, fillers chandigarh">
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
        <h1>Body Peel</h1>
        
        <div class="section-card">
            <h2>What is body peel?</h2>
            <p>The body peel is most commonly performed on areas such as the back, but it is also highly effective for the feet, hands, and shoulders. It is ideal for addressing concerns such as acne, acne marks, uneven skin texture, keratosis pilaris, dryness, or simply to enhance the skin’s appearance for special occasions. A body peel removes the skin’s outer barrier, allowing subsequent treatments to work more effectively.</p>
        </div>

        <div class="section-card">
            <h2>Our Celebrity Treatment</h2>
            <p>This procedure can be combined with various treatments, and we are renowned for delivering an instant glow that leaves you with radiant skin and no downtime. Since we cater to well-known personalities, including celebrities from the movie industry, sports, business, and politics, downtime is simply not an option for our clinic—or for our patients.</p>
            <p>Our unique combination treatment involves selecting the right type of peel tailored to your skin needs, followed by a laser treatment that enhances glow and brightness, and finishing with a hydrating facial. Each treatment plan is customized by Dr. Sukhmani jugpal Brar based on your individual skin needs and goals.</p>
        </div>

        <div class="section-card">
            <h2>How does it work?</h2>
            <p>A chemical peel works by applying a chemical solution to the skin to exfoliate and remove dead skin cells. This process stimulates the growth of new, healthier skin cells, improving texture, tone, and overall health. It helps to address issues like clogged pores, excess oils, and product buildup, promoting a smoother, clearer surface.</p>
        </div>

        <div class="section-card">
            <h2>What is procedure like?</h2>
            <ul>
                <li><strong>Cleansing:</strong> The area is thoroughly cleansed to remove dirt, oils, and makeup.</li>
                <li><strong>Application:</strong> A chemical solution is applied to the skin.</li>
                <li><strong>Action Time:</strong> The solution is left on for a specified time, allowing it to exfoliate and break down dead skin cells.</li>
                <li><strong>Neutralizing:</strong> The solution is neutralized or removed, depending on the type of peel.</li>
                <li><strong>Aftercare:</strong> The skin is moisturized, recovery cream and sunscreen is applied. Post-treatment care instructions are provided.</li>
            </ul>
        </div>

        <div class="section-card">
            <h2>What can I expect?</h2>
            <ul>
                <li>Smoother Skin & Improved Skin Tone</li>
                <li>Evened Skin Texture</li>
                <li>Reduced Acne and Breakouts</li>
                <li>Fewer Fine Lines and Wrinkles</li>
                <li>Diminished Pigmentation and Dark spots</li>
                <li>Increased Collagen Production</li>
            </ul>
        </div>

        <div class="section-card">
            <h2>Timeline & Results</h2>
            <h3>When will I see results?</h3>
            <p>Results from a chemical peel can typically be seen within 1 to 2 weeks as the skin starts to heal and regenerate. However, optimal results, especially for deeper peels, may take 4 to 6 weeks or more.</p>
            <h3>How long does the result last?</h3>
            <p>The results of a chemical peel can last anywhere from a few weeks to several months, depending on the depth of the peel and individual skin type. Lighter peels may last 1-2 months, while deeper peels can provide results for up to 6 months or longer.</p>
        </div>

        <div class="section-card">
            <h2>Pre & Post Procedure</h2>
            <h3>Pre – procedure:</h3>
            <ul>
                <li>Limit sun exposure for at least 1-2 weeks. Use a broad-spectrum sunscreen (SPF 30+).</li>
                <li>Stop using retinoids, AHAs, BHAs, or exfoliating agents 3-5 days before treatment.</li>
                <li>Avoid smoking and alcohol consumption for at least 48 hours.</li>
            </ul>
            <h3>Post – procedure:</h3>
            <ul>
                <li>Avoid sun exposure and always apply sunscreen with SPF 50+.</li>
                <li>Skip makeup, retinoids, AHAs/BHAs, and exfoliants for 24-72 hours.</li>
                <li>Avoid showering or activities that induce perspiration for at least 8 hours.</li>
                <li>Postpone other hair or skin treatments for one week.</li>
            </ul>
        </div>

        <div class="section-card">
            <h2>Enhancing Results</h2>
            <p><strong>Injectables:</strong> Skin booster, Profhilo, Skinvive,Fillers, NCTF, Mesotherapy, PDRN</p>
            <p><strong>Energy based devices:</strong> IPL, Q switched laser, MNRF</p>
            <p><strong>Supplements:</strong> Ra Hydrate, Ra Bright, Ra Defence, Ra Vitamin C+</p>
        </div>

        <a href="chemical-peels.html" class="back-link">Back to All Peels</a>
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
