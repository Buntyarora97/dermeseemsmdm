<?php
$page_title = 'Dermessence Blog – Skin & Hair Tips Chandigarh';
$page_description = 'Explore expert dermatology blogs in Chandigarh. Get tips, skin care advice, and latest updates on treatments, skincare, and healthy glowing skin.';
$page_keywords = 'skin care blog chandigarh, dermatology blog chandigarh, skin treatment tips, hair care blog chandigarh, aesthetic clinic blog, laser treatment blog, anti aging skin blog, beauty tips chandigarh, medispa blog, skin specialist blog';

include 'includes/header.php';
?>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --gold: #D4AF37;
            --black: #111111;
            --dark-gray: #1a1a1a;
            --white: #ffffff;
            --text-gray: #cccccc;
        }

        body {
            background-color: var(--black);
            margin: 0;
            padding: 50px 0;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-family: 'Playfair Display', serif;
            color: var(--white);
            font-size: 2.5rem;
            margin: 0;
        }

        .section-title h2 span {
            color: var(--gold);
        }

        .section-title .divider {
            width: 70px;
            height: 3px;
            background: var(--gold);
            margin: 15px auto;
        }

        /* --- Blog Grid --- */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .blog-card {
            background: var(--dark-gray);
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid rgba(212, 175, 55, 0.1);
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
            text-decoration: none;
        }

        .blog-card:hover {
            transform: translateY(-10px);
            border-color: var(--gold);
            box-shadow: 0 15px 30px rgba(0,0,0,0.5);
        }

        .card-image {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .blog-card:hover .card-image img {
            transform: scale(1.1);
        }

        .card-tag {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--gold);
            color: #000;
            font-size: 11px;
            font-weight: 700;
            padding: 5px 12px;
            border-radius: 50px;
            text-transform: uppercase;
        }

        .card-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-date {
            color: var(--gold);
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }

        .card-date i {
            margin-right: 6px;
            font-size: 0.75rem;
        }

        .card-content h3 {
            font-family: 'Playfair Display', serif;
            color: var(--white);
            margin: 0 0 15px 0;
            font-size: 1.3rem;
            line-height: 1.4;
            transition: 0.3s;
        }

        .blog-card:hover .card-content h3 {
            color: var(--gold);
        }

        .card-content p {
            color: var(--text-gray);
            font-size: 0.9rem;
            margin: 0 0 20px 0;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.6;
        }

        .read-more {
            margin-top: auto;
            color: var(--white);
            font-size: 0.85rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            transition: 0.3s;
        }

        .read-more i {
            margin-left: 8px;
            font-size: 12px;
            color: var(--gold);
            transition: 0.3s;
        }

        .blog-card:hover .read-more {
            color: var(--gold);
        }

        .blog-card:hover .read-more i {
            transform: translateX(5px);
        }

        /* --- Responsive --- */
        @media (max-width: 1100px) {
            .blog-grid { grid-template-columns: repeat(2, 1fr); }
        }

        @media (max-width: 600px) {
            .blog-grid { grid-template-columns: 1fr; }
            .section-title h2 { font-size: 2rem; }
        }
    </style>
    <section class="page-banner">
        <div class="container">
            <h1>Our Blog</h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span class="active">Blog</span>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <p class="subtitle">Latest Articles</p>
                <h2>Skin Care <span>Insights</span></h2>
                <div class="divider"></div>
                <p>Stay updated with the latest in dermatology, skin care tips, and treatment news.</p>
            </div>
            
            <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">
                   <!-- Card 1: Best Dermatologist -->
        <a href="/choose-best-dermatologist-in-Chandigarh/" class="blog-card">
            <div class="card-image">
                <span class="card-tag">Clinic Guide</span>
                <img src="assets/DSC00771.JPG" alt="Best Dermatologist">
            </div>
            <div class="card-content">
                <div class="card-date"><i class="far fa-calendar-alt"></i> February 05, 2026</div>
                <h3>How to Choose the Best Dermatologist in Chandigarh</h3>
                <p>Learn how to select the right skin doctor for acne, hair fall, and professional skincare solutions.</p>
                <div class="read-more">Read Article <i class="fas fa-arrow-right"></i></div>
            </div>
        </a>

        <!-- Card 2: When to Visit -->
        <a href="/when-to-visit-skin-doctor-in-Chandigarh/" class="blog-card">
            <div class="card-image">
                <span class="card-tag">Skin Care</span>
                <img src="assets/services/Medifacial.jpg" alt="Visit Skin Doctor">
            </div>
            <div class="card-content">
                <div class="card-date"><i class="far fa-calendar-alt"></i> February 12, 2026</div>
                <h3>When Should You Visit a Skin Doctor in Chandigarh?</h3>
                <p>Understand the warning signs and common skin problems that require expert dermatological attention.</p>
                <div class="read-more">Read Article <i class="fas fa-arrow-right"></i></div>
            </div>
        </a>

        <!-- Card 3: Hair Fall Specialist -->
        <a href="/hair-fall-specialist-Chandigarh/" class="blog-card">
            <div class="card-image">
                <span class="card-tag">Hair Health</span>
                <img src="assets/beautician-protective-mask-doing-procedure-hair.jpg" alt="Hair Fall Specialist">
            </div>
            <div class="card-content">
                <div class="card-date"><i class="far fa-calendar-alt"></i> February 18, 2026</div>
                <h3>Hair Fall in Men & Women: When to Visit a Specialist</h3>
                <p>Struggling with hair fall? Discover the common causes and advanced treatments like PRP therapy.</p>
                <div class="read-more">Read Article <i class="fas fa-arrow-right"></i></div>
            </div>
        </a>

        <!-- Card 4: Complete Care -->
        <a href="/complete-skin-and-hair-care-in-Chandigarh/" class="blog-card">
            <div class="card-image">
                <span class="card-tag">Expert Guide</span>
                <img src="assets/services/prp-face.png" alt="Complete Skin and Hair Care">
            </div>
            <div class="card-content">
                <div class="card-date"><i class="far fa-calendar-alt"></i> February 24, 2026</div>
                <h3>Complete Skin and Hair Care in Chandigarh | Expert Guide</h3>
                <p>Your ultimate roadmap to maintaining healthy skin and strong hair with professional dermatology.</p>
                <div class="read-more">Read Article <i class="fas fa-arrow-right"></i></div>
            </div>
        </a>
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="assets/services/Medifacial.jpg" alt="HydraFacial Benefits">
                        <div class="service-card-overlay"></div>
                    </div>
                    <div class="service-card-content">
                        <span style="color: var(--gold); font-size: 13px;">Dec 10, 2025</span>
                        <h4>The Complete Guide to HydraFacial</h4>
                        <p>Discover why HydraFacial is the most popular facial treatment worldwide.</p>
                        <a href="hydrafacial.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="assets/laser-epilation-hair-removal-therapy.jpg" alt="Laser Hair Removal">
                        <div class="service-card-overlay"></div>
                    </div>
                    <div class="service-card-content">
                        <span style="color: var(--gold); font-size: 13px;">Dec 8, 2025</span>
                        <h4>Laser Hair Removal: What to Expect</h4>
                        <p>Everything you need to know about permanent hair reduction.</p>
                        <a href="laser-hair-removal-permanent-results.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="assets/services/Fillers.jpg" alt="Hyaluronic Acid">
                        <div class="service-card-overlay"></div>
                    </div>
                    <div class="service-card-content">
                        <span style="color: var(--gold); font-size: 13px;">Dec 5, 2025</span>
                        <h4>Understanding Hyaluronic Acid</h4>
                        <p>The science behind this powerful skin hydrating ingredient.</p>
                        <a href="hyaluronic-acid.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="assets/person-getting-micro-needling-beauty-treatment.jpg" alt="Chemical Peels">
                        <div class="service-card-overlay"></div>
                    </div>
                    <div class="service-card-content">
                        <span style="color: var(--gold); font-size: 13px;">Dec 3, 2025</span>
                        <h4>Chemical Peels for Dark Skin</h4>
                        <p>Safe and effective peeling options for hyperpigmentation.</p>
                        <a href="chemical-peel-hyperpigmentation-dark-skin.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="assets/beautiful-woman-getting-beauty-treatment.jpg" alt="Skin Rejuvenation">
                        <div class="service-card-overlay"></div>
                    </div>
                    <div class="service-card-content">
                        <span style="color: var(--gold); font-size: 13px;">Dec 1, 2025</span>
                        <h4>Skin Rejuvenation by Age</h4>
                        <p>Best treatments for every decade of your life.</p>
                        <a href="skin-rejuvenation-by-age.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="assets/beautiful-young-woman-getting-botox-cosmetic-injection-her-face.jpg" alt="Lip Injections">
                        <div class="service-card-overlay"></div>
                    </div>
                    <div class="service-card-content">
                        <span style="color: var(--gold); font-size: 13px;">Nov 28, 2025</span>
                        <h4>Lip Fillers: Duration & Touch-ups</h4>
                        <p>How long do lip injections last and when to get touch-ups.</p>
                        <a href="lip-injections-duration-touchup.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
