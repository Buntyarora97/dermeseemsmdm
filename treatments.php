<?php
$page_title = 'All Skin Treatments';
$page_description = 'Explore our comprehensive range of advanced skin treatments at Dermessence clinic in Chandigarh. From fillers to laser treatments and facials.';
$page_keywords = 'skin treatments chandigarh, fillers, laser treatment, chemical peels, microneedling, dermessence treatments';

include 'includes/header.php';
?>

    <section class="page-banner">
        <div class="container">
            <h1>Our Treatments</h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span class="active">Treatments</span>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <p class="subtitle">Comprehensive Skin Care</p>
                <h2>Advanced <span>Treatments</span></h2>
                <div class="divider"></div>
                <p>Discover our full range of dermatological treatments designed to address all your skin concerns with precision and care.</p>
            </div>
            
            <div class="services-grid" style="grid-template-columns: repeat(4, 1fr);">
                <?php 
                $treatment_images = [
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
                    'skin-boosters' => 'assets/services/skin booster.jpg'
                ];
                
                $default_images = [
                    'assets/beautiful-woman-getting-beauty-treatment.jpg',
                    'assets/person-getting-micro-needling-beauty-treatment.jpg',
                    'assets/cosmetologist-cleaning-woman-forehead-with-ultrasonic-scrubber.jpg',
                    'assets/laser-epilation-hair-removal-therapy.jpg'
                ];
                
                $index = 0;
                foreach($treatments as $treatment): 
                    $image = isset($treatment_images[$treatment['slug']]) 
                        ? $treatment_images[$treatment['slug']] 
                        : $default_images[$index % count($default_images)];
                    $index++;
                ?>
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="<?php echo $image; ?>" alt="<?php echo $treatment['title']; ?>">
                        <div class="service-card-overlay"></div>
                    </div>
                    <div class="service-card-content">
                        <h4><?php echo $treatment['title']; ?></h4>
                        <p><?php echo $treatment['short']; ?></p>
                        <a href="treatment/<?php echo $treatment['slug']; ?>" class="read-more">
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
            <h2>Not Sure Which Treatment is Right for You?</h2>
            <p>Book a consultation with our expert dermatologists who will recommend the best treatment for your skin.</p>
            <a href="book-appointment.php" class="btn-dark">
                <i class="fas fa-calendar-alt"></i> Book Consultation
            </a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
