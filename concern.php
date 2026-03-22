<?php
require_once 'includes/config.php';

$slug_or_custom = isset($_GET['slug']) ? $_GET['slug'] : '';

$concern_data = null;
foreach($concerns as $c) {
    if($c['slug'] === $slug_or_custom || (isset($c['custom_url']) && $c['custom_url'] === $slug_or_custom)) {
        $concern_data = $c;
        $slug = $c['slug']; // Actual slug for internal logic
        break;
    }
}

if(!$concern_data) {
    header('Location: concerns.php');
    exit;
}

// SEO Metadata
$page_title = isset($concern_data['meta_title']) ? $concern_data['meta_title'] : $concern_data['title'] . ' Treatment in Chandigarh';
$page_description = isset($concern_data['meta_desc']) ? $concern_data['meta_desc'] : 'Expert ' . $concern_data['title'] . ' treatment at Dermessence clinic. ' . $concern_data['short'] . '. Advanced solutions for your skin concerns in Chandigarh.';
$page_keywords = isset($concern_data['meta_keywords']) ? $concern_data['meta_keywords'] : strtolower($concern_data['title']) . ', ' . strtolower($concern_data['title']) . ' treatment, skin concern, dermessence chandigarh';

include 'includes/header.php';
?>

    <section class="page-banner">
        <div class="container">
            <h1><?php echo $concern_data['title']; ?></h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <a href="concerns.php">Concerns</a>
                <span>/</span>
                <span class="active"><?php echo $concern_data['title']; ?></span>
            </div>
        </div>
    </section>

    <section class="treatment-content">
        <div class="container">
            <div class="treatment-grid">
                <div class="treatment-main">
                    <?php echo getConcernContent($slug, $concern_data); ?>
                </div>
                
                <aside class="treatment-sidebar">
                    <div class="sidebar-widget">
                        <h4>All Concerns</h4>
                        <div class="treatment-list">
                            <?php foreach($concerns as $c): ?>
                            <a href="concern/<?php echo isset($c['custom_url']) ? $c['custom_url'] : $c['slug']; ?>" class="<?php echo ($c['slug'] === $slug || (isset($c['custom_url']) && $c['custom_url'] === $slug_or_custom)) ? 'active' : ''; ?>">
                                <?php echo $c['title']; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <div class="sidebar-widget booking-widget">
                        <h4>Book Consultation</h4>
                        <p>Get expert advice for your skin concerns</p>
                        <a href="tel:<?php echo PHONE; ?>" class="phone"><?php echo PHONE; ?></a>
                        <a href="book-appointment.php" class="btn-primary" style="width: 100%;">
                            Book Now <i class="fas fa-calendar-alt"></i>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Ready to Address Your <?php echo $concern_data['title']; ?> Concerns?</h2>
            <p>Book your consultation today and let our experts create a personalized treatment plan for you.</p>
            <a href="book-appointment.php" class="btn-dark">
                <i class="fas fa-calendar-alt"></i> Book Your Appointment
            </a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

<?php
function getConcernContent($slug, $data) {
    $title = $data['title'];
    $short = $data['short'];
    
    $content = <<<HTML
<h2>$title - Expert Solutions at Dermessence</h2>

<p>$title is one of the most common skin concerns that affects people of all ages and skin types. At Dermessence, we understand how this concern can impact your confidence and quality of life. That's why we offer comprehensive, personalized treatment plans designed to effectively address $title and help you achieve the healthy, radiant skin you deserve.</p>

<p>Our experienced dermatologists utilize the latest diagnostic tools and treatment technologies to accurately assess your condition and develop targeted solutions. We believe in a holistic approach to skin care, addressing not just the symptoms but also the underlying causes of your concerns.</p>

<h3>Understanding $title</h3>

<p>$title can manifest in various ways and may be caused by multiple factors including genetics, lifestyle, environmental exposure, hormonal changes, and aging. Understanding the root cause of your specific concern is crucial for effective treatment. During your consultation, our dermatologists will conduct a thorough assessment to identify the factors contributing to your condition.</p>

<p>Common factors that contribute to $title include:</p>

<ul>
<li>Genetic predisposition and family history</li>
<li>Sun exposure and UV damage</li>
<li>Hormonal fluctuations and imbalances</li>
<li>Lifestyle factors such as diet, stress, and sleep</li>
<li>Environmental pollutants and toxins</li>
<li>Aging and natural skin changes</li>
<li>Use of unsuitable skincare products</li>
<li>Underlying health conditions</li>
</ul>

<h3>Our Approach to $title Treatment</h3>

<p>At Dermessence, we take a comprehensive approach to treating $title. Our treatment plans are designed to:</p>

<ul>
<li>Address the underlying causes of your concern</li>
<li>Provide visible improvement in skin appearance</li>
<li>Prevent future recurrence or progression</li>
<li>Improve overall skin health and resilience</li>
<li>Boost your confidence and self-esteem</li>
</ul>

<h3>Treatment Options for $title</h3>

<p>Depending on the severity and specific characteristics of your $title concern, our dermatologists may recommend one or more of the following treatments:</p>

<p><strong>Advanced Laser Treatments:</strong> Our state-of-the-art laser systems can effectively target and treat various aspects of $title, promoting skin renewal and rejuvenation.</p>

<p><strong>Chemical Peels:</strong> Professional-grade chemical peels help remove damaged skin layers, revealing fresher, healthier skin underneath.</p>

<p><strong>Microneedling:</strong> This collagen-induction therapy stimulates the skin's natural healing process, improving texture and tone.</p>

<p><strong>Injectable Treatments:</strong> fillers, and other injectables can address specific concerns related to $title.</p>

<p><strong>Topical Treatments:</strong> Prescription-strength topical products can be highly effective in managing and improving $title.</p>

<p><strong>Combination Therapy:</strong> Often, the best results are achieved through a combination of treatments tailored to your specific needs.</p>

<h3>What to Expect During Your Consultation</h3>

<p>Your journey to addressing $title begins with a comprehensive consultation at Dermessence. During this appointment:</p>

<ul>
<li>Our dermatologist will examine your skin and discuss your concerns in detail</li>
<li>We'll review your medical history and any previous treatments</li>
<li>Advanced diagnostic tools may be used to assess your skin condition</li>
<li>You'll receive personalized treatment recommendations</li>
<li>We'll explain the expected outcomes, timeline, and costs</li>
<li>All your questions and concerns will be addressed</li>
</ul>

<h3>Prevention and Maintenance</h3>

<p>While treatment is important, prevention and maintenance are equally crucial for long-term results. Our team will provide you with:</p>

<ul>
<li>Customized skincare routine recommendations</li>
<li>Lifestyle modifications that can help prevent recurrence</li>
<li>Sun protection guidelines</li>
<li>Diet and nutrition advice for healthy skin</li>
<li>Maintenance treatment schedules</li>
</ul>

<h3>Why Choose Dermessence for $title Treatment?</h3>

<p>Dermessence is the preferred choice for $title treatment in Chandigarh for several reasons:</p>

<ul>
<li><strong>Expertise:</strong> Our dermatologists have extensive experience in treating $title</li>
<li><strong>Technology:</strong> We use the latest, most effective treatment technologies</li>
<li><strong>Personalization:</strong> Every treatment plan is tailored to your unique needs</li>
<li><strong>Results:</strong> Our patients consistently achieve excellent outcomes</li>
<li><strong>Care:</strong> We provide compassionate, patient-centered care</li>
<li><strong>Follow-up:</strong> We ensure continued support throughout your treatment journey</li>
</ul>

<h3>Patient Success Stories</h3>

<p>Many of our patients have successfully overcome their $title concerns with our treatments. While individual results may vary, our patients consistently report significant improvements in their skin appearance and quality of life. During your consultation, we can share relevant before-and-after examples that demonstrate what's possible with proper treatment.</p>

<h3>Frequently Asked Questions</h3>

<p><strong>How long does treatment take?</strong></p>
<p>Treatment duration varies depending on the severity of your concern and the chosen treatment approach. Some patients see improvement after a few sessions, while others may require ongoing treatment for optimal results.</p>

<p><strong>Are the treatments safe?</strong></p>
<p>All our treatments are FDA-approved and performed by trained professionals. We take every precaution to ensure your safety and comfort throughout the treatment process.</p>

<p><strong>Will the results be permanent?</strong></p>
<p>While many of our treatments provide long-lasting results, maintenance may be required to sustain outcomes. Our team will guide you on the best approach for maintaining your results.</p>

<h3>Schedule Your Consultation</h3>

<p>Don't let $title hold you back any longer. Take the first step towards healthier, more radiant skin by scheduling your consultation at Dermessence today.</p>

<p><strong>Contact Us:</strong><br>
Phone: +91-9915930506, 8847491254<br>
Address: SCO 81-82, 1st Floor, Udyan Path, Behind GMSH-16, Sector 16D, Chandigarh, 160015</p>
HTML;
    
    return $content;
}
?>
