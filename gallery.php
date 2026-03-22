<?php
$page_title = 'Gallery';
$page_description = 'View our clinic gallery showcasing our state-of-the-art facilities, treatments, and patient transformations at Dermessence.';
$page_keywords = 'dermessence gallery, clinic photos, skin treatment results, before after';

include 'includes/header.php';
?>

    <section class="page-banner">
        <div class="container">
            <h1>Our Gallery</h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span class="active">Gallery</span>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <p class="subtitle">Visual Journey</p>
                <h2>See Our <span>Transformations</span></h2>
                <div class="divider"></div>
                <p>Browse through our gallery to see our facilities, treatments, and the amazing results we've achieved.</p>
            </div>
            
            <div class="gallery-grid" style="grid-template-columns: repeat(4, 1fr);">
                <div class="gallery-item">
                    <img src="assets/DSC00771.JPG" alt="Clinic Interior">
                    <div class="gallery-item-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="assets/DSC01298.JPG" alt="Treatment Room">
                    <div class="gallery-item-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="assets/beautician-protective-mask-doing-procedure-hair.jpg" alt="Treatment">
                    <div class="gallery-item-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="assets/beautiful-woman-getting-beauty-treatment.jpg" alt="Facial Treatment">
                    <div class="gallery-item-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="assets/woman-cosmetology-studio-laser-hair-removal.jpg" alt="Laser Treatment">
                    <div class="gallery-item-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="assets/cosmetologist-cleaning-woman-forehead-with-ultrasonic-scrubber.jpg" alt="Skin Care">
                    <div class="gallery-item-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="assets/laser-epilation-hair-removal-therapy.jpg" alt="Laser Therapy">
                    <div class="gallery-item-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="assets/person-getting-micro-needling-beauty-treatment.jpg" alt="Microneedling">
                    <div class="gallery-item-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <!--<div class="gallery-item">-->
                <!--    <img src="assets/beautiful-young-woman-getting-botox-cosmetic-injection-her-face.jpg" alt="Botox">-->
                <!--    <div class="gallery-item-overlay"><i class="fas fa-search-plus"></i></div>-->
                <!--</div>-->
                <div class="gallery-item">
                    <img src="assets/woman-receiving-laser-epilation-treatment-her-shoulder.jpg" alt="Laser">
                    <div class="gallery-item-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="assets/group.jpeg" alt="Team">
                    <div class="gallery-item-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="assets/before-after-portrait-mature-woman-retouched.jpg" alt="Results">
                    <div class="gallery-item-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
            </div>
        </div>
    </section>
    <section style="background:linear-gradient(180deg,#f7f7f7,#ffffff);padding:80px 20px;font-family:'Poppins',sans-serif;">

    <div style="max-width:1100px;margin:auto;text-align:center;margin-bottom:50px;">
        
        <h2 style="font-size:34px;font-weight:700;color:#111;margin-bottom:12px;letter-spacing:.5px;">
            Book Appointment with Skin & Hair Specialist in Chandigarh
        </h2>

        <p style="color:#666;font-size:16px;max-width:720px;margin:auto;line-height:1.8;">
            Experience advanced dermatology, laser, and aesthetic treatments at Dermessence Clinic. 
            Connect with our experts for personalized consultation and appointment booking.
        </p>

    </div>

    <div style="display:flex;gap:30px;flex-wrap:wrap;justify-content:center;max-width:1100px;margin:auto;">

        <?php include $_SERVER['DOCUMENT_ROOT'].'/contact_section/contact-form.php'; ?>

    </div>

</section>

<?php include 'includes/footer.php'; ?>
