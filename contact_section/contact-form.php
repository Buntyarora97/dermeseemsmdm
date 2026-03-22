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