<?php
$page_title = 'Skin Concerns';
$page_description = 'Expert solutions for all skin concerns at Dermessence clinic. Aging, acne, pigmentation, hair loss, and more. Personalized treatments in Chandigarh.';
$page_keywords = 'skin concerns, acne treatment, anti-aging, pigmentation, hair loss, wrinkles treatment, dermessence chandigarh';

include 'includes/header.php';
?>

    <section class="page-banner">
        <div class="container">
            <h1>Skin Concerns</h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span class="active">Concerns</span>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <p class="subtitle">Expert Solutions</p>
                <h2>Address Your <span>Skin Concerns</span></h2>
                <div class="divider"></div>
                <p>Whatever your skin concern, our expert dermatologists have the solutions to help you achieve healthy, radiant skin.</p>
            </div>
            
            <div class="services-grid" style="grid-template-columns: repeat(4, 1fr);">
                <?php 
                $concern_images = [
                    'aging' => 'assets/before-after-portrait-mature-woman-retouched.jpg',
                    'acne' => 'assets/beautiful-woman-getting-beauty-treatment.jpg',
                    'acne-scars' => 'assets/person-getting-micro-needling-beauty-treatment.jpg',
                    'hair-loss-thinning' => 'assets/services/Hair Restoration.jpg'
                ];
                
                $default_images = [
                    'assets/beautiful-woman-getting-beauty-treatment.jpg',
                    'assets/cosmetologist-cleaning-woman-forehead-with-ultrasonic-scrubber.jpg',
                    'assets/person-getting-micro-needling-beauty-treatment.jpg',
                    'assets/beautiful-young-woman-getting-botox-cosmetic-injection-her-face.jpg'
                ];
                
                $index = 0;
                foreach($concerns as $concern): 
                    $image = isset($concern_images[$concern['slug']]) 
                        ? $concern_images[$concern['slug']] 
                        : $default_images[$index % count($default_images)];
                    $index++;
                ?>
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="<?php echo $image; ?>" alt="<?php echo $concern['title']; ?>">
                        <div class="service-card-overlay"></div>
                    </div>
                    <div class="service-card-content">
                        <h4><?php echo $concern['title']; ?></h4>
                        <p><?php echo $concern['short']; ?></p>
                        <a href="concern.php?slug=<?php echo $concern['slug']; ?>" class="read-more">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Have Multiple Skin Concerns?</h2>
            <p>Our dermatologists can create a comprehensive treatment plan addressing all your concerns.</p>
            <a href="book-appointment.php" class="btn-dark">
                <i class="fas fa-calendar-alt"></i> Book Consultation
            </a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
