<?php
require_once 'includes/config.php';

$slug_or_custom = isset($_GET['slug']) ? $_GET['slug'] : '';

$treatment_data = null;
foreach($treatments as $t) {
    if($t['slug'] === $slug_or_custom || (isset($t['custom_url']) && $t['custom_url'] === $slug_or_custom)) {
        $treatment_data = $t;
        $slug = $t['slug']; // Actual slug for internal logic
        break;
    }
}

if(!$treatment_data) {
    header('Location: treatments.php');
    exit;
}

// SEO Metadata
$page_title = isset($treatment_data['meta_title']) ? $treatment_data['meta_title'] : $treatment_data['title'] . ' Treatment in Chandigarh';
$page_description = isset($treatment_data['meta_desc']) ? $treatment_data['meta_desc'] : $treatment_data['title'] . ' treatment at Dermessence clinic. ' . $treatment_data['short'] . '. Book your consultation for personalized skin care in Chandigarh.';
$page_keywords = isset($treatment_data['meta_keywords']) ? $treatment_data['meta_keywords'] : strtolower($treatment_data['title']) . ', ' . strtolower($treatment_data['title']) . ' treatment chandigarh, skin treatment, dermessence, dermatology clinic';

include 'includes/header.php';
?>

    <section class="page-banner">
        <div class="container">
            <h1><?php echo $treatment_data['title']; ?></h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <a href="treatments.php">Treatments</a>
                <span>/</span>
                <span class="active"><?php echo $treatment_data['title']; ?></span>
            </div>
        </div>
    </section>

    <section class="treatment-content">
        <div class="container">
            <div class="treatment-grid">
                <div class="treatment-main">
                    <img src="<?php echo getTreatmentImage($slug); ?>" alt="<?php echo $treatment_data['title']; ?>" style="width: 100%; border-radius: 15px; margin-bottom: 30px;">
                    
                    <?php echo getTreatmentContent($slug, $treatment_data); ?>
                </div>
                
                <aside class="treatment-sidebar">
                    <div class="sidebar-widget">
                        <h4>Our Treatments</h4>
                        <div class="treatment-list" style="max-height: 400px; overflow-y: auto;">
                            <?php foreach($treatments as $t): ?>
                            <a href="treatment/<?php echo isset($t['custom_url']) ? $t['custom_url'] : $t['slug']; ?>" class="<?php echo ($t['slug'] === $slug || (isset($t['custom_url']) && $t['custom_url'] === $slug_or_custom)) ? 'active' : ''; ?>">
                                <?php echo $t['title']; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                        <a href="treatments.php" class="btn-primary" style="width: 100%; margin-top: 15px; font-size: 14px;">
                            View All Treatments <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    
                    <div class="sidebar-widget booking-widget">
                        <h4>Book Consultation</h4>
                        <p>Ready to start your journey to beautiful skin?</p>
                        <a href="tel:<?php echo PHONE; ?>" class="phone"><?php echo PHONE; ?></a>
                        <a href="book-appointment.php" class="btn-primary" style="width: 100%;">
                            Book Now <i class="fas fa-calendar-alt"></i>
                        </a>
                    </div>
                    
                    <div class="sidebar-widget" style="background: var(--black); text-align: center;">
                        <h4 style="color: var(--white);">Working Hours</h4>
                        <p style="color: var(--gray-light);">
                            Monday - Saturday<br>
                            <strong style="color: var(--gold);">10:00 AM - 7:00 PM</strong>
                        </p>
                        <p style="color: var(--gray-light);">
                            Sunday<br>
                            <strong style="color: var(--gold);">Closed</strong>
                        </p>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Ready for Your <?php echo $treatment_data['title']; ?> Treatment?</h2>
            <p>Book your consultation today and let our experts create a personalized treatment plan for you.</p>
            <a href="book-appointment.php" class="btn-dark">
                <i class="fas fa-calendar-alt"></i> Book Your Appointment
            </a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

<?php
function getTreatmentImage($slug) {
    $images = [
        // 'botox' => 'assets/services/Botox.jpg',
        'fillers' => 'assets/services/Fillers.jpg',
        'laser-hair-removal' => 'assets/services/Lumenis Diode Laser Hair Removal.jpg',
        'luminous-diode' => 'assets/services/Lumenis Diode Laser Hair Removal.jpg',
        'morpheus8-treatment' => 'assets/services/Morpheus 8.jpg',
        'morpheus-pro' => 'assets/services/Morpheus 8.jpg',
        'hydrafacial' => 'assets/services/Medifacial.jpg',
        'medi-facials' => 'assets/services/Medifacial.jpg',
        'prp-hair' => 'assets/services/Hair Restoration.jpg',
        'tri-beam-laser' => 'assets/services/Tribeam O Switched Laser.jpg',
        'skin-boosters' => 'assets/services/skin booster.jpg',
        'hifu-treatment' => 'assets/services/hifu-treatment.png',
        'prp-face' => 'assets/services/prp-face.png',
        'vampire-facial' => 'assets/services/prp-face.png',
        'microneedling' => 'assets/services/microneedling.png',
        'chemical-peeling' => 'assets/services/chemical-peels.png',
        'chemical-peels' => 'assets/services/chemical-peels.png',
        'mesotherapy' => 'assets/services/mesotherapy.png',
        'profhilo' => 'assets/services/profhilo.png',
        'gfc-hair' => 'assets/services/Hair Restoration.jpg'
    ];
    
    return isset($images[$slug]) ? $images[$slug] : 'assets/beautiful-woman-getting-beauty-treatment.jpg';
}

function getTreatmentContent($slug, $data) {
    $title = $data['title'];
    $short = $data['short'];
    
    $content = <<<HTML
<h2>$title - Advanced Skin Treatment at Dermessence</h2>

<p>Welcome to Dermessence, the premier destination for $title treatment in Chandigarh. Our state-of-the-art facility combines cutting-edge technology with personalized care to deliver exceptional results. Whether you're seeking to address specific skin concerns or enhance your natural beauty, our expert dermatologists are here to guide you through every step of your transformation journey.</p>

<p>$short is designed to address a wide range of skin concerns, from aging signs to texture irregularities. At Dermessence, we understand that every patient is unique, which is why we create customized treatment plans tailored to your specific needs and goals. Our commitment to excellence ensures that you receive the highest quality care in a comfortable, professional environment.</p>

<h3>What is $title Treatment?</h3>

<p>$title is an advanced dermatological procedure that utilizes the latest technology to improve skin health and appearance. This treatment works by targeting specific skin concerns at the cellular level, promoting natural healing and regeneration processes. The procedure is designed to be safe, effective, and minimally invasive, allowing you to achieve remarkable results with minimal downtime.</p>

<p>Our clinic uses FDA-approved equipment and techniques to ensure the highest standards of safety and efficacy. The treatment process begins with a thorough consultation where our dermatologists assess your skin condition, discuss your goals, and create a personalized treatment plan. This comprehensive approach ensures that you receive the most appropriate and effective treatment for your unique needs.</p>

<h3>Benefits of $title Treatment</h3>

<ul>
<li>Significant improvement in skin texture and tone</li>
<li>Reduction of fine lines, wrinkles, and other aging signs</li>
<li>Enhanced collagen production for firmer, more youthful skin</li>
<li>Minimal downtime allowing quick return to daily activities</li>
<li>Long-lasting, natural-looking results</li>
<li>Safe and effective for all skin types</li>
<li>Customized treatment plans for optimal outcomes</li>
<li>Non-invasive or minimally invasive procedures</li>
<li>Improved skin confidence and self-esteem</li>
<li>Professional guidance throughout the treatment journey</li>
</ul>

<h3>How Does $title Work?</h3>

<p>The $title treatment works through a carefully designed protocol that addresses skin concerns at multiple levels. During the procedure, our advanced technology delivers targeted energy or therapeutic agents to the treatment area, stimulating the skin's natural healing response. This process triggers the production of new collagen and elastin, the proteins responsible for skin firmness and elasticity.</p>

<p>The treatment process typically involves the following steps:</p>

<ul>
<li><strong>Consultation:</strong> A comprehensive skin assessment to understand your concerns and goals</li>
<li><strong>Preparation:</strong> Skin cleansing and preparation for optimal treatment results</li>
<li><strong>Treatment:</strong> Application of the $title procedure using state-of-the-art equipment</li>
<li><strong>Post-care:</strong> Application of soothing products and detailed aftercare instructions</li>
<li><strong>Follow-up:</strong> Scheduled appointments to monitor progress and adjust treatment as needed</li>
</ul>

<h3>Who is an Ideal Candidate?</h3>

<p>$title treatment is suitable for individuals who are looking to improve their skin's appearance and health. Ideal candidates include those who:</p>

<ul>
<li>Experience signs of aging such as fine lines, wrinkles, or loss of skin elasticity</li>
<li>Have uneven skin texture, tone, or pigmentation</li>
<li>Suffer from acne scars or other skin irregularities</li>
<li>Desire a non-surgical approach to skin rejuvenation</li>
<li>Are in good overall health with realistic expectations</li>
<li>Are committed to following pre and post-treatment guidelines</li>
</ul>

<p>During your consultation, our dermatologists will assess your skin condition and medical history to determine if $title is the right treatment for you. We take the time to understand your concerns and answer all your questions, ensuring you feel confident and informed about your treatment choice.</p>

<h3>What to Expect During Treatment</h3>

<p>Your $title treatment at Dermessence will be a comfortable and professional experience. Upon arrival, you'll be welcomed by our friendly staff and escorted to our treatment room. The procedure typically takes between 30 to 60 minutes, depending on the treatment area and specific protocol.</p>

<p>During the treatment, you may experience mild sensations such as warmth or tingling, which are completely normal and indicate that the treatment is working. Our skilled practitioners ensure your comfort throughout the procedure, adjusting settings as needed to provide optimal results while minimizing discomfort.</p>

<h3>Recovery and Results</h3>

<p>One of the significant advantages of $title treatment is the minimal recovery time required. Most patients can resume their normal activities immediately after the procedure, although some may experience mild redness or sensitivity that typically subsides within a few hours to a few days.</p>

<p>Results from $title treatment are typically visible within a few weeks, with continued improvement over the following months as your skin's natural healing processes take effect. The number of sessions required varies depending on your specific concerns and goals, but most patients achieve optimal results with a series of treatments spaced several weeks apart.</p>

<h3>Pre-Treatment Guidelines</h3>

<ul>
<li>Avoid sun exposure and tanning for at least two weeks before treatment</li>
<li>Discontinue use of retinoids and certain active ingredients as advised</li>
<li>Stay well-hydrated and maintain a healthy skincare routine</li>
<li>Inform your dermatologist of any medications or supplements you're taking</li>
<li>Avoid alcohol consumption 24-48 hours before treatment</li>
</ul>

<h3>Post-Treatment Care</h3>

<ul>
<li>Apply recommended moisturizers and healing products as directed</li>
<li>Protect your skin with broad-spectrum sunscreen (SPF 30 or higher)</li>
<li>Avoid direct sun exposure and use protective clothing</li>
<li>Refrain from using harsh products or exfoliants for the recommended period</li>
<li>Follow up with your dermatologist as scheduled</li>
</ul>

<h3>Why Choose Dermessence for $title?</h3>

<p>At Dermessence, we pride ourselves on delivering exceptional skin care services in a welcoming, professional environment. Our clinic stands out for several reasons:</p>

<ul>
<li><strong>Expert Team:</strong> Our dermatologists are highly trained and experienced in the latest skin care techniques</li>
<li><strong>Advanced Technology:</strong> We invest in state-of-the-art equipment for optimal treatment outcomes</li>
<li><strong>Personalized Care:</strong> Every treatment plan is customized to your unique needs and goals</li>
<li><strong>Patient-Centric Approach:</strong> We prioritize your comfort, safety, and satisfaction</li>
<li><strong>Comprehensive Services:</strong> From consultation to follow-up, we're with you every step of the way</li>
</ul>

<h3>Frequently Asked Questions</h3>

<p><strong>How many sessions will I need?</strong></p>
<p>The number of sessions varies depending on your specific concerns and desired results. During your consultation, our dermatologists will recommend a treatment plan tailored to your needs. Most patients achieve optimal results with 3-6 sessions.</p>

<p><strong>Is the treatment painful?</strong></p>
<p>$title treatment is designed to be comfortable. Most patients experience minimal discomfort, often described as mild warmth or tingling. We use various techniques to ensure your comfort throughout the procedure.</p>

<p><strong>When will I see results?</strong></p>
<p>Initial results may be visible within 1-2 weeks, with continued improvement over 2-3 months as your skin produces new collagen. Results are long-lasting when combined with proper skincare and sun protection.</p>

<p><strong>Are there any side effects?</strong></p>
<p>Side effects are typically mild and temporary, including redness, slight swelling, or sensitivity. These usually resolve within a few hours to a few days. Our team will provide detailed aftercare instructions to minimize any discomfort.</p>

<h3>Book Your Consultation Today</h3>

<p>Ready to experience the transformative benefits of $title treatment? Schedule your consultation at Dermessence today. Our expert team is ready to help you achieve your skin goals with personalized care and advanced treatments.</p>

<p><strong>Contact Us:</strong><br>
Phone: +91-9915930506, 8847491254<br>
Address: SCO 81-82, 1st Floor, Udyan Path, Behind GMSH-16, Sector 16D, Chandigarh, 160015</p>
HTML;
    
    return $content;
}
?>
