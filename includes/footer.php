<!-- Google reCAPTCHA Script (ADD ONCE ON PAGE) -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<section id="dermessence-dual-section" style="max-width:1000px; margin:40px auto; font-family: 'Poppins', sans-serif;">
    <div style="display:flex; flex-wrap:wrap; gap:20px; justify-content:center;">
        
        <!-- CONTACT FORM -->
        <div style="flex:1; min-width:300px; background:#000; color:#d4af37; border:1px solid #d4af37; border-radius:16px; padding:25px; box-shadow:0 10px 30px rgba(0,0,0,0.5);">
            <h2 style=" color:white;  text-align:center; font-size:22px; margin-bottom:20px; text-transform:uppercase; letter-spacing:1px;">Contact Us</h2>
            <form action="/contact_section/form-process.php" method="POST" style="display:flex; flex-direction:column; gap:12px;">
                <input type="hidden" name="form_type" value="contact">
                <input type="text" name="name" placeholder="Name" required style="padding:10px; border:1px solid #d4af37; border-radius:8px; background:#111; color:#fff; outline:none;">
                <div style="display:none;">
                    <input type="text" name="website_url" tabindex="-1" autocomplete="off">
                </div>
                <input type="text" name="mobile" placeholder="Mobile" required style="padding:10px; border:1px solid #d4af37; border-radius:8px; background:#111; color:#fff; outline:none;">
                <input type="email" name="email" placeholder="Email (Optional)" style="padding:10px; border:1px solid #d4af37; border-radius:8px; background:#111; color:#fff; outline:none;">
                <textarea name="description" rows="4" placeholder="Your Message" required style="padding:10px; border:1px solid #d4af37; border-radius:8px; background:#111; color:#fff; resize:none; outline:none;"></textarea>

                <!-- RECAPTCHA ADDED -->
                <div class="g-recaptcha" data-sitekey="6LcPuHAsAAAAAEdZrvB9UY6Eh6anbCGi0wS_LcFE"></div>

                <button type="submit" style="padding:12px; background:#d4af37; color:#000; border:none; border-radius:8px; font-weight:700; cursor:pointer; text-transform:uppercase;">Send Message</button>
            </form>
        </div>

        <!-- BOOKING FORM -->
        <div style="flex:1; min-width:300px; background:#000; color:#d4af37; border:1px solid #d4af37; border-radius:16px; padding:25px; box-shadow:0 10px 30px rgba(0,0,0,0.5);">
            <h2 style=" color:white; text-align:center; font-size:22px; margin-bottom:20px; text-transform:uppercase; letter-spacing:1px;">Book Appointment</h2>
            <form action="/contact_section/form-process.php" method="POST" style="display:flex; flex-direction:column; gap:12px;">
                <input type="hidden" name="form_type" value="booking">
                <input type="text" name="name" placeholder="Full Name" required style="padding:10px; border:1px solid #d4af37; border-radius:8px; background:#111; color:#fff; outline:none;">
                <div style="display:none;">
                    <input type="text" name="website_url" tabindex="-1" autocomplete="off">
                </div>
                <input type="text" name="mobile" placeholder="Mobile No" required style="padding:10px; border:1px solid #d4af37; border-radius:8px; background:#111; color:#fff; outline:none;">
                <div style="display:flex; gap:10px;">
                    <input type="number" name="age" placeholder="Age" required style="width:40%; padding:10px; border:1px solid #d4af37; border-radius:8px; background:#111; color:#fff; outline:none;">
                    <input type="text" name="city" placeholder="City" required style="width:60%; padding:10px; border:1px solid #d4af37; border-radius:8px; background:#111; color:#fff; outline:none;">
                </div>
                <div style="display:flex; gap:10px;">
                    <input type="date" name="date" required style="width:50%; padding:10px; border:1px solid #d4af37; border-radius:8px; background:#111; color:#fff; outline:none;">
                    <input type="time" name="time" required style="width:50%; padding:10px; border:1px solid #d4af37; border-radius:8px; background:#111; color:#fff; outline:none;">
                </div>
                <select name="service" required style="padding:10px; border:1px solid #d4af37; border-radius:8px; background:#111; color:#fff; outline:none;">
                    <option value="" disabled selected>Select Service</option>

<option value="Acne & Scars Treatment">Acne & Scars Treatment</option>
<option value="Chemical Peels">Chemical Peels</option>
<option value="Laser Hair Removal">Laser Hair Removal</option>
<option value="Skin Rejuvenation">Skin Rejuvenation</option>
<option value="Anti-Aging (Botox/Fillers)">Anti-Aging (Botox/Fillers)</option>
<option value="Pigmentation Treatment">Pigmentation Treatment</option>
<option value="Hair Loss (PRP/Mesotherapy)">Hair Loss (PRP/Mesotherapy)</option>
<option value="Tattoo Removal">Tattoo Removal</option>
<option value="Mole & Wart Removal">Mole & Wart Removal</option>
<option value="General Dermatology">General Dermatology</option>
<option value="Fillers">Fillers</option>
<option value="Laser Toning">Laser Toning</option>
<option value="PRP Hair">PRP Hair</option>
<option value="PRP Face">PRP Face</option>
<option value="Hydrafacial">Hydrafacial</option>
<option value="Skin Boosters">Skin Boosters</option>
<option value="Profhilo">Profhilo</option>
<option value="Medi Facials">Medi Facials</option>
<option value="MicroNeedling">MicroNeedling</option>
<option value="Chemical Peeling">Chemical Peeling</option>
<option value="HIFU Treatment">HIFU Treatment</option>
<option value="Morpheus8 Treatment">Morpheus8 Treatment</option>
<option value="Vampire Facial">Vampire Facial</option>
<option value="Fire & Ice Facial">Fire & Ice Facial</option>
<option value="GFC Hair">GFC Hair</option>
<option value="Detox Facial">Detox Facial</option>
<option value="Morpheus Pro">Morpheus Pro</option>
<option value="Luminous Diode">Luminous Diode</option>
<option value="Tri-Beam Laser">Tri-Beam Laser</option>
<option value="Mesotherapy">Mesotherapy</option>
<option value="Glow Facial">Glow Facial</option>
<option value="Collagen Facial">Collagen Facial</option>
<option value="360 Facial">360 Facial</option>
<option value="Pink Facial">Pink Facial</option>

                </select>

                <!-- RECAPTCHA ADDED -->
                <div class="g-recaptcha" data-sitekey="6LcPuHAsAAAAAEdZrvB9UY6Eh6anbCGi0wS_LcFE"></div>

                <button type="submit" style="padding:12px; background:#d4af37; color:#000; border:none; border-radius:8px; font-weight:700; cursor:pointer; text-transform:uppercase;">Book Now</button>
            </form>
        </div>

    </div>
</section>
    
    
    
    
    
    
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-grid">
                    <div class="footer-col footer-about">
                        <a href="index.php" class="footer-logo">
                            <img src="assets/logo gold.png" alt="Dermessence Logo">
                        </a>
                        <p>Dermessence is a premium dermatology clinic in Chandigarh offering world-class skin treatments, laser therapies, and aesthetic procedures with personalized care.</p>
                        <div class="footer-social">
                            <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="<?php echo YOUTUBE_URL; ?>" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                            <a href="https://wa.me/919915930506" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    
                    <div class="footer-col">
                        <h4>Quick Links</h4>
                        <ul class="footer-links">
                            <li><a href="index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
                            <li><a href="about.php"><i class="fas fa-chevron-right"></i> About Us</a></li>
                            <li><a href="treatments.php"><i class="fas fa-chevron-right"></i> Treatments</a></li>
                            <li><a href="concerns.php"><i class="fas fa-chevron-right"></i> Skin Concerns</a></li>
                            <li><a href="gallery.php"><i class="fas fa-chevron-right"></i> Gallery</a></li>
                            <li><a href="blog.php"><i class="fas fa-chevron-right"></i> Blog</a></li>
                            <li><a href="contact.php"><i class="fas fa-chevron-right"></i> Contact</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-col">
                        <h4>Popular Treatments</h4>
                        <ul class="footer-links">
                            <!--<li><a href="treatment.php?slug=botox"><i class="fas fa-chevron-right"></i> Botox</a></li>-->
                            <li><a href="treatment/fillers"><i class="fas fa-chevron-right"></i> Fillers</a></li>
                            <li><a href="treatment/laser-hair-removal"><i class="fas fa-chevron-right"></i> Laser Hair Removal</a></li>
                            <li><a href="treatment/hydrafacial"><i class="fas fa-chevron-right"></i> HydraFacial</a></li>
                            <li><a href="treatment/chemical-peels"><i class="fas fa-chevron-right"></i> Chemical Peels</a></li>
                            <li><a href="treatment/microneedling"><i class="fas fa-chevron-right"></i> Microneedling</a></li>
                            <li><a href="treatment/prp-face"><i class="fas fa-chevron-right"></i> PRP Face</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-col footer-contact">
                        <h4>Contact Info</h4>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Address</strong>
                                <p><?php echo ADDRESS; ?></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                          <div>
    <strong>Phone</strong>
    <p>
        <a href="tel:<?php echo PHONE; ?>"><?php echo PHONE; ?></a><br>
        <a href="tel:<?php echo PHONE2; ?>"><?php echo PHONE2; ?></a>
    </p>
</div>

                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email</strong>
                                <p><a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Working Hours</strong>
                                <p>Mon - Sat: 10:00 AM - 7:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
         <!-- SEO Pages Section - 3 Column Layout -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 50px; text-align: left; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 40px;">
            <div>
                <h4 style="color: #b08d57; margin-bottom: 20px; font-size: 1.1rem;">Skin & Hair Care</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 12px;"><a href="/dermatologist-in-chandigarh.php" style="color: #fff; text-decoration: none; opacity: 0.7; transition: 0.3s;" onmouseover="this.style.opacity='1'; this.style.color='#b08d57'" onmouseout="this.style.opacity='0.7'; this.style.color='#fff'">Best Dermatologist in Chandigarh</a></li>
                    <li style="margin-bottom: 12px;"><a href="/hair-specialist-in-chandigarh.php" style="color: #fff; text-decoration: none; opacity: 0.7; transition: 0.3s;" onmouseover="this.style.opacity='1'; this.style.color='#b08d57'" onmouseout="this.style.opacity='0.7'; this.style.color='#fff'">Top Hair Specialist in Chandigarh</a></li>
                    <li style="margin-bottom: 12px;"><a href="/skin-specialist-in-chandigarh.php" style="color: #fff; text-decoration: none; opacity: 0.7; transition: 0.3s;" onmouseover="this.style.opacity='1'; this.style.color='#b08d57'" onmouseout="this.style.opacity='0.7'; this.style.color='#fff'">Skin Specialist in Chandigarh</a></li>
                </ul>
            </div>
            <div>
                <h4 style="color: #b08d57; margin-bottom: 20px; font-size: 1.1rem;">Treatments</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 12px;"><a href="/acne-treatment-in-chandigarh.php" style="color: #fff; text-decoration: none; opacity: 0.7; transition: 0.3s;" onmouseover="this.style.opacity='1'; this.style.color='#b08d57'" onmouseout="this.style.opacity='0.7'; this.style.color='#fff'">Acne Treatment in Chandigarh</a></li>
                    <li style="margin-bottom: 12px;"><a href="/pigmentation-treatment-in-chandigarh.php" style="color: #fff; text-decoration: none; opacity: 0.7; transition: 0.3s;" onmouseover="this.style.opacity='1'; this.style.color='#b08d57'" onmouseout="this.style.opacity='0.7'; this.style.color='#fff'">Pigmentation Treatment in Chandigarh</a></li>
                    <li style="margin-bottom: 12px;"><a href="/laser-treatment-in-chandigarh.php" style="color: #fff; text-decoration: none; opacity: 0.7; transition: 0.3s;" onmouseover="this.style.opacity='1'; this.style.color='#b08d57'" onmouseout="this.style.opacity='0.7'; this.style.color='#fff'">Laser Treatment in Chandigarh</a></li>
                </ul>
            </div>
            <div>
                <h4 style="color: #b08d57; margin-bottom: 20px; font-size: 1.1rem;">Aesthetics</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 12px;"><a href="/anti-aging-treatment-in-chandigarh.php" style="color: #fff; text-decoration: none; opacity: 0.7; transition: 0.3s;" onmouseover="this.style.opacity='1'; this.style.color='#b08d57'" onmouseout="this.style.opacity='0.7'; this.style.color='#fff'">Anti-Aging Treatment in Chandigarh</a></li>
                    <!--<li style="margin-bottom: 12px;"><a href="/laser-treatment-in-chandigarh.php" style="color: #fff; text-decoration: none; opacity: 0.7; transition: 0.3s;" onmouseover="this.style.opacity='1'; this.style.color='#b08d57'" onmouseout="this.style.opacity='0.7'; this.style.color='#fff'">Laser Hair Removal Chandigarh</a></li>-->
                    <li style="margin-bottom: 12px;"><a href="/dermatologist-in-chandigarh.php#book" style="color: #fff; text-decoration: none; opacity: 0.7; transition: 0.3s;" onmouseover="this.style.opacity='1'; this.style.color='#b08d57'" onmouseout="this.style.opacity='0.7'; this.style.color='#fff'">Book Your Appointment</a></li>
                </ul>
            </div>
        </div>

        <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 30px; font-size: 0.9rem; opacity: 0.6; text-align: center;">
        
        
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All Rights Reserved.</p>
                    <div class="footer-bottom-links">
                        <a href="privacy-policy.php">Privacy Policy</a>
                        <a href="terms.php">Terms & Conditions</a>
                        <a href="sitemap.xml">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/919915930506" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="js/dermessence-new.js"></script>
    
    
<script>
document.addEventListener("DOMContentLoaded", function(){

const videos = document.querySelectorAll("video source[data-src]");

videos.forEach(function(video){

video.src = video.dataset.src;

video.parentElement.load();

});

});
</script>

</body>
</html>
