<?php
require_once __DIR__ . '/../config.php';

if (!defined('SITE_NAME')) define('SITE_NAME', 'Dermessence');
if (!defined('SITE_TAGLINE')) define('SITE_TAGLINE', 'Premium Dermatology Clinic');
if (!defined('SITE_URL')) define('SITE_URL', 'https://thedermessence.com');
if (!defined('PHONE')) define('PHONE', '+91-8847491254');
if (!defined('PHONE2')) define('PHONE2', '+91-9915930506 ');


if (!defined('EMAIL')) define('EMAIL', 'info@thedermessence.com');
if (!defined('ADDRESS')) define('ADDRESS', 'SCO 81-82, 1st Floor, Udyan Path, Behind GMSH-16, Sector 16D, Chandigarh, 160015');

if (!defined('FACEBOOK_URL')) define('FACEBOOK_URL', 'https://www.facebook.com/profile.php?id=61577054230896');
if (!defined('INSTAGRAM_URL')) define('INSTAGRAM_URL', 'https://www.instagram.com/the_dermessence/');
if (!defined('YOUTUBE_URL')) define('YOUTUBE_URL', 'https://www.youtube.com/@dermessence');

$treatments = [
    [
        'slug' => 'fillers', 
        'title' => 'Fillers', 
        'short' => 'Dermal Fillers for Volume Restoration', 
        'custom_url' => 'skin-filters-treatment-chandigarh',
        'meta_title' => 'Skin Filter Therapy for Clear Skin in Chandigarh',
        'meta_desc' => 'Achieve camera-ready skin with advanced skin filter treatments in Chandigarh at Dermessence  . Safe, instant & glowing results.',
        'meta_keywords' => 'skin filters chandigarh, advanced facial filters, skin glow treatment chandigarh, flawless skin facial, aesthetic skin filter, skin polishing chandigarh, face glow treatment,   facial chandigarh, skin rejuvenation clinic, beauty clinic chandigarh'
    ],

    
    [
        'slug' => 'laser-toning', 
        'title' => 'Laser Toning', 
        'short' => 'Skin Brightening Laser', 
        'custom_url' => 'laser-toning-hospital-in-chandigarh',
        'meta_title' => 'Even Skin Tone Laser Therapy – Chandigarh Experts',
        'meta_desc' => 'Correct pigmentation and uneven skin tone with laser toning treatment in Chandigarh for brighter complexion, smooth texture, and long-lasting skin clarity.',
        'meta_keywords' => 'laser toning chandigarh, pigmentation removal, skin whitening laser, melasma treatment, uneven skin tone correction, glow laser therapy, skin brightening clinic, dermatology laser, aesthetic clinic, face laser treatment'
    ],
    
    [
        'slug' => 'prp-hair',
        'title' => 'PRP Hair',
        'short' => 'Hair Restoration Therapy',
        'custom_url' => 'prp-hair-doctors-in-chandigarh',
        'meta_title' => 'PRP Hair Revival – Thicker Hair Solutions Chandigarh',
        'meta_desc' => 'Stimulate natural hair regrowth and reduce hair fall with PRP hair treatment in Chandigarh performed by certified experts for thicker, healthier hair.',
        'meta_keywords' => 'prp hair treatment chandigarh, hair loss treatment, hair regrowth therapy, platelet rich plasma hair, thinning hair solution, hair fall control, scalp treatment chandigarh, non surgical hair therapy, aesthetic clinic, hair care clinic'
    ],
    
    
      [
        'slug' => 'prp-face',
        'title' => 'PRP Face',
        'short' => 'Vampire Facial PRP',
        'custom_url' => 'prp-facial-treatment-chandigarh',
        'meta_title' => 'PRP Facial Rejuvenation – Glow Skin Chandigarh',
        'meta_desc' => 'Rejuvenate tired skin naturally with PRP facial treatment in Chandigarh to boost collagen, improve texture, and restore a healthy, radiant glow.',
        'meta_keywords' => 'prp facial chandigarh, skin rejuvenation prp, collagen boost facial, anti aging prp treatment, glow facial therapy, dermatology facial, skin repair therapy, aesthetic clinic chandigarh, face rejuvenation,  '
    ],
    
    
    [
        'slug' => 'hydrafacial',
        'title' => 'Hydrafacial',
        'short' => 'Deep Cleansing Facial',
        'custom_url' => 'hydrafacial-deep-cleanse-chandigarh',
        'meta_title' => 'Hydrafacial Hydration – Deep Skin Glow Chandigarh',
        'meta_desc' => 'Cleanse, exfoliate, and deeply hydrate skin with Hydrafacial treatment in Chandigarh for instant freshness, improved texture, and a healthy glow.',
        'meta_keywords' => 'hydrafacial chandigarh, skin hydration facial, deep cleansing facial, glow facial treatment, instant glow facial, medical facial, dull skin solution, skin rejuvenation clinic,   chandigarh, skin polishing'
    ],
    
    [
        'slug' => 'laser-hair-removal',
        'title' => 'Laser Hair Removal',
        'short' => 'Permanent Hair Reduction',
        'custom_url' => 'laser-hair-removal-treatment-chandigarh',
        'meta_title' => 'Safe & Effective Laser Hair Removal in Chandigarh',
        'meta_desc' => 'Get smooth, hair-free skin with Laser Hair Removal in Chandigarh. Safe, effective, and long-lasting solution for unwanted facial and body hair.',
        'meta_keywords' => 'laser hair removal chandigarh, permanent hair reduction, full body laser hair removal, face hair removal, diode laser treatment, smooth skin solution, aesthetic clinic chandigarh, hair free skin, dermatology laser,  '
    ],
    
    
     [
        'slug' => 'skin-boosters',
        'title' => 'Skin Boosters',
        'short' => 'Hydration & Glow Treatment',
        'custom_url' => 'skin-booster-treatment-chandigarh',
        'meta_title' => 'Skin Booster Glow – Rejuvenate & Hydrate Chandigarh',
        'meta_desc' => 'Deeply hydrate and rejuvenate skin with advanced skin booster treatments in Chandigarh for long-lasting glow and elasticity.',
        'meta_keywords' => 'skin booster chandigarh, skin hydration treatment, glow injections chandigarh, dull skin solution, collagen hydration therapy, skin rejuvenation injection, anti aging skin care, radiant skin treatment,   chandigarh, aesthetic clinic'
    ],
    
    
      [
        'slug' => 'profhilo',
        'title' => 'Profhilo',
        'short' => 'Bio-Remodeling Treatment',
        'custom_url' => 'profhilo-treatment-chandigarh',
        'meta_title' => 'Profhilo for Skin Hydration & Youthful Glow in Chandigarh',
        'meta_desc' => 'Improve skin firmness and hydration with Profhilo anti-aging injections in Chandigarh for natural lifting, smoother texture, and youthful radiance.',
        'meta_keywords' => 'profhilo chandigarh, profhilo injections chandigarh, skin tightening therapy, collagen stimulation, anti aging treatment, sagging skin solution, hydration injection, face rejuvenation, aesthetic clinic chandigarh, skin lifting treatment'
    ],
    
     [
        'slug' => 'medi-facials',
        'title' => 'Medi Facials',
        'short' => 'Medical Grade Facials',
        'custom_url' => 'medical-facials-chandigarh',
        'meta_title' => 'Medi Facial Glow – Refresh Skin in Chandigarh',
        'meta_desc' => 'Enjoy medical-grade facials in Chandigarh customized for acne, aging, dullness, and sensitive skin, performed under expert dermatologist care.',
        'meta_keywords' => 'medi facial chandigarh, medical grade facial, acne facial treatment, anti aging facial, skin glow facial, dermatology facial clinic, customized facial, aesthetic facial, clinic facial treatment, skin care facial'
    ],
    
    
   [
        'slug' => 'MicroNeedling',
        'title' => 'MicroNeedling',
        'short' => 'Collagen Induction Therapy',
        'custom_url' => 'MicroNeedling-treatment-chandigarh',
        'meta_title' => 'MicroNeedling Skin Renewal – Chandigarh Experts',
        'meta_desc' => 'Improve acne scars and skin texture with MicroNeedling treatment in Chandigarh to boost collagen and achieve smoother, clearer-looking skin.',
        'meta_keywords' => 'MicroNeedling chandigarh, skin rejuvenation treatment, acne scars MicroNeedling, collagen induction therapy, pore reduction treatment, dermatology clinic chandigarh, skin texture improvement, anti aging MicroNeedling, aesthetic clinic, face rejuvenation'
    ],
    
    
      [
        'slug' => 'chemical-peeling',
        'title' => 'Chemical Peeling',
        'short' => 'Professional Skin Peels',
        'custom_url' => 'chemical-peeling-treatment-chandigarh',
        'meta_title' => 'Chemical Peel Magic – Brighten Skin Chandigarh',
        'meta_desc' => 'Exfoliate damaged skin and boost natural glow with chemical peel treatments in Chandigarh, customized to suit your skin type and concerns.',
        'meta_keywords' => 'chemical peeling chandigarh, skin peeling treatment, pigmentation removal peel, acne peel therapy, skin exfoliation treatment, dermatology clinic chandigarh, glow peel facial, aesthetic skin care, face peel treatment,   chandigarh'
    ],
    
    
   [
        'slug' => 'hifu-treatment',
        'title' => 'HIFU Treatment',
        'short' => 'High-Intensity Focused Ultrasound',
        'custom_url' => 'hifu-skin-tightening-chandigarh',
        'meta_title' => 'HIFU Lift Therapy – Non-Surgical Skin Tightening',
        'meta_desc' => 'Experience HIFU for firmer, lifted skin and youthful contours in Chandigarh. Non-invasive solution for natural skin rejuvenation and wrinkle reduction.',
        'meta_keywords' => 'hifu treatment chandigarh, non surgical facelift, skin tightening ultrasound, sagging skin lift, jawline tightening, anti aging treatment, face lifting therapy, aesthetic clinic chandigarh, collagen boost, skin lift treatment'
    ],
    
      [
        'slug' => 'morpheus8-treatment',
        'title' => 'Morpheus8 Treatment',
        'short' => 'RF MicroNeedling',
        'custom_url' => 'morpheus8-face-lift-in-chandigarh',
        'meta_title' => 'Morpheus8 Glow – Advanced Facial in Chandigarh',
        'meta_desc' => 'Achieve deep skin tightening and resurfacing with Morpheus8 treatment in Chandigarh for long-lasting firmness, smoother texture, and youthful skin.',
        'meta_keywords' => 'morpheus8 chandigarh, rf MicroNeedling, acne scar treatment, skin tightening therapy, wrinkle correction, face rejuvenation, aesthetic laser clinic, dermatology clinic chandigarh, collagen stimulation, anti aging treatment'
    ],
    
     [
        'slug' => 'vampire-facial',
        'title' => 'Vampire Facial',
        'short' => 'PRP Skin Rejuvenation',
        'custom_url' => 'vampire-facial-prp-treatment-chandigarh',
        'meta_title' => 'Next-Gen Vampire Facial for Youthful Glow and Collagen Boost',
        'meta_desc' => 'Vampire Facial in Chandigarh uses PRP to boost collagen, improve skin texture, soften fine lines and restore natural glow at Dermatology  .',
        'meta_keywords' => 'vampire facial chandigarh, prp facial treatment, skin rejuvenation prp, collagen boost facial, anti aging facial therapy, dermatology clinic chandigarh, glow skin treatment, aesthetic clinic, face rejuvenation,  '
    ],
    
     [
        'slug' => 'fire-ice-facial',
        'title' => 'Fire & Ice Facial',
        'short' => 'Dual-Action Resurfacing',
        'custom_url' => 'fire-and-ice-facial-chandigarh',
        'meta_title' => 'Fire & Ice Glow Facial – Refresh Skin Chandigarh',
        'meta_desc' => 'Experience instant skin resurfacing and glow with Fire & Ice facial treatment in Chandigarh for refreshed, smoother, and radiant-looking skin.',
        'meta_keywords' => 'fire and ice facial chandigarh, celebrity facial treatment, instant glow facial, skin resurfacing facial, anti aging facial therapy, dermatology clinic chandigarh, aesthetic facial, glow skin solution,   chandigarh, skin clinic'
    ],
    
     [
        'slug' => 'chemical-peels',
        'title' => 'Chemical Peels',
        'short' => 'Professional Peeling',
        'custom_url' => 'chemical-peels-chandigarh',
        'meta_title' => 'Reveal Fresh Skin with Chemical Peels – Chandigarh Clinic',
        'meta_desc' => 'Chemical Peels in Chandigarh help remove dead skin, reduce acne marks, pigmentation and dullness for brighter, smoother skin at Dermessence.',
        'meta_keywords' => 'chemical peels chandigarh, advanced skin peels, pigmentation correction treatment, acne peel therapy, skin resurfacing peel, dermatology clinic chandigarh, aesthetic skin care, glow peel facial,  , face peeling'
    ],
    
    
    [
        'slug' => 'gfc-hair',
        'title' => 'GFC Hair',
        'short' => 'Growth Factor Therapy',
        'custom_url' => 'gfc-hair-treatment-chandigarh',
        'meta_title' => 'GFC Hair Solutions for Hair Growth',
        'meta_desc' => 'Advanced GFC Hair therapy in Chandigarh for natural hair regrowth, skin repair, collagen boost, and long-term rejuvenation results.',
        'meta_keywords' => 'gfc hair therapy chandigarh, hair regrowth treatment, skin regeneration therapy, growth factor treatment, prp skin therapy, dermatology clinic chandigarh, hair fall control, anti aging therapy,  , aesthetic clinic'
    ],
    
   [
        'slug' => 'detox-facial',
        'title' => 'Detox Facial',
        'short' => 'Deep Cleansing Detox',
        'custom_url' => 'detox-facial-treatment-chandigarh',
        'meta_title' => 'Detox Facial Therapy – Purify Skin Chandigarh',
        'meta_desc' => 'Remove toxins and impurities with detox facial treatment in Chandigarh for clearer pores, healthier skin, and a fresh, natural glow.',
        'meta_keywords' => 'detox facial chandigarh, skin detox treatment, deep cleansing facial, pollution damage repair, glow skin facial, dermatology clinic chandigarh, aesthetic skin care, pore cleansing treatment,  , skin rejuvenation'
    ],
    
    
     [
        'slug' => 'morpheus-pro',
        'title' => 'Morpheus Pro',
        'short' => 'MicroNeedling + RF',
        'custom_url' => 'morpheus-pro-treatment-chandigarh',
        'meta_title' => 'Morpheus Pro Lift – Skin Rejuvenation Chandigarh',
        'meta_desc' => 'Advanced Morpheus Pro treatment in Chandigarh for deep skin tightening, acne scar reduction, and effective anti-aging skin correction.',
        'meta_keywords' => 'morpheus pro chandigarh, advanced rf MicroNeedling, deep skin tightening, acne scars removal, skin rejuvenation therapy, non surgical lift, aesthetic clinic chandigarh, dermatology treatment, face tightening, collagen therapy'
    ],
    
    
     [
        'slug' => 'luminous-diode',
        'title' => 'Luminous Diode',
        'short' => 'Diode Laser Hair Removal',
        'custom_url' => 'luminous-diode-laser-chandigarh',
        'meta_title' => 'Luminous Diode Laser – Hair & Glow Chandigarh',
        'meta_desc' => 'Enjoy painless hair reduction and skin rejuvenation with Luminous Diode Laser treatment in Chandigarh for smoother, radiant, and hair-free skin.',
        'meta_keywords' => 'luminous diode laser chandigarh, hair reduction laser, painless laser hair removal, diode laser technology, face and body laser, aesthetic clinic chandigarh, dermatology laser, smooth skin treatment, advanced laser,  '
    ],
    
    [
        'slug' => 'tri-beam-laser',
        'title' => 'Tri-Beam Laser',
        'short' => 'Advanced Laser Treatment',
        'custom_url' => 'tri-beam-laser-therapy-chandigarh',
        'meta_title' => 'Tri-Beam Laser Glow – Skin Rejuvenation Chandigarh',
        'meta_desc' => 'Advanced Tri-Beam Laser treatment in Chandigarh for pigmentation, acne scar reduction, and overall skin rejuvenation for smoother, radiant skin.',
        'meta_keywords' => 'tri beam laser chandigarh, skin rejuvenation laser, pigmentation correction, acne scar laser, face resurfacing treatment, aesthetic laser clinic, dermatology clinic chandigarh, skin glow laser, cosmetic laser,  '
    ],
    
    [
        'slug' => 'mesotherapy',
        'title' => 'Mesotherapy',
        'short' => 'Vitamin Injection Therapy',
        'custom_url' => 'advance-mesotherapy-chandigarh',
        'meta_title' => 'Mesotherapy Facial Fix – Pigmentation & Glow Chandigarh',
        'meta_desc' => 'Treat pigmentation, hair thinning, and aging skin with Mesotherapy in Chandigarh using targeted nutrients for rejuvenation, improved texture, and healthy glow.',
        'meta_keywords' => 'mesotherapy chandigarh, skin pigmentation treatment, hair mesotherapy therapy, anti aging injections, skin rejuvenation treatment, dermatology clinic chandigarh, aesthetic skin care, nutrient therapy,  , hair loss solution'
    ]
];

$concerns = [
    [
        'slug' => 'aging',
        'title' => 'Aging',
        'short' => 'Anti-Aging Solutions',
        'custom_url' => 'anti-aging-treatment-chandigarh',
        'meta_title' => 'Anti-Aging Skin Boost – Reduce Wrinkles Chandigarh',
        'meta_desc' => 'Slow down visible aging with advanced anti-aging skin treatments in Chandigarh for firmer, smoother skin and a naturally youthful, radiant appearance.',
        'meta_keywords' => 'anti aging treatment chandigarh, wrinkle reduction therapy, skin rejuvenation treatment, collagen boost therapy, dermatology anti aging, aesthetic clinic chandigarh, face tightening, youthful skin treatment, age control therapy,  '
    ],
    
    [
        'slug' => 'fine-lines-wrinkles',
        'title' => 'Fine Lines/Wrinkles',
        'short' => 'Wrinkle Reduction',
        'custom_url' => 'fine-lines-wrinkles-treatment-chandigarh',
        'meta_title' => 'Smooth Wrinkles & Fine Lines – Chandigarh Experts',
        'meta_desc' => 'Smooth fine lines and wrinkles with targeted treatments in Chandigarh for firmer, refreshed, and naturally youthful-looking skin.',
        'meta_keywords' => 'fine lines treatment chandigarh, wrinkle correction therapy, anti aging facial, skin tightening treatment, collagen stimulation, dermatology clinic chandigarh, aesthetic treatment, smooth skin solution, face rejuvenation,  '
    ],

   [
        'slug' => 'under-eye-darkening',
        'title' => 'Under Eye Darkening/Hollows',
        'short' => 'Dark Circle Treatment',
        'custom_url' => 'under-eye-dark-circles-treatment-chandigarh',
        'meta_title' => 'Under Eye Dark Circles Fix – Glow in Chandigarh',
        'meta_desc' => 'Reduce dark circles and under-eye hollows with specialized treatments in Chandigarh for brighter, refreshed, and youthful-looking eyes.',
        'meta_keywords' => 'under eye dark circles chandigarh, under eye hollows treatment, eye rejuvenation therapy, dark circle removal, under eye pigmentation, dermatology clinic chandigarh, aesthetic eye treatment, tired eyes solution,  , skin clinic'
    ],
    
   [
        'slug' => 'laugh-lines',
        'title' => 'Laugh Lines',
        'short' => 'Nasolabial Fold Treatment',
        'custom_url' => 'laugh-lines-treatment-chandigarh',
        'meta_title' => 'Laugh Lines Smooth – Anti-Aging Facial Chandigarh',
        'meta_desc' => 'Soften smile lines with non-surgical laugh line treatments in Chandigarh for natural facial balance, smoother skin, and a youthful, refreshed appearance.',
        'meta_keywords' => 'laugh lines treatment chandigarh, smile lines correction, anti aging facial, skin tightening therapy, collagen boost treatment, dermatology clinic chandigarh, aesthetic treatment, face rejuvenation, wrinkle reduction,  '
    ],
    
    [
        'slug' => 'thin-lips',
        'title' => 'Thin Lips',
        'short' => 'Lip Enhancement',
        'custom_url' => 'thin-lips-treatment-chandigarh',
        'meta_title' => 'Thin Lip Enhancement – Volumize Lips Chandigarh',
        'meta_desc' => 'Enhance thin lips naturally in Chandigarh. Achieve fuller, well-defined lips with expert cosmetic solutions for a youthful and attractive look.',
        'meta_keywords' => 'lip enhancement chandigarh, thin lips treatment, lip volume correction, lip fillers clinic, aesthetic lip treatment, dermatology clinic chandigarh, cosmetic lip enhancement, lip rejuvenation, face aesthetics,  '
    ],
    
    [
        'slug' => 'neck-lines',
        'title' => 'Neck Lines',
        'short' => 'Neck Rejuvenation',
        'custom_url' => 'reduce-neck-lines-chandigarh',
        'meta_title' => 'Neck Line Rejuvenation – Tighten Skin Chandigarh',
        'meta_desc' => 'Treat neck wrinkles and sagging with advanced neck rejuvenation treatments in Chandigarh for firmer, smoother skin and a youthful, contoured appearance.',
        'meta_keywords' => 'neck lines treatment chandigarh, neck skin tightening, anti aging neck therapy, sagging neck solution, collagen boost treatment, dermatology clinic chandigarh, aesthetic neck treatment, wrinkle reduction, skin rejuvenation,  '
    ],

    [
        'slug' => 'sagging',
        'title' => 'Sagging',
        'short' => 'Skin Tightening',
        'custom_url' => 'sagging-skin-doctor-chandigarh',
        'meta_title' => 'Sagging Skin Lift – Non-Surgical Glow Chandigarh',
        'meta_desc' => 'Lift and tighten sagging skin with non-invasive treatments in Chandigarh for firmer contours, smoother texture, and a naturally youthful appearance.',
        'meta_keywords' => 'sagging skin treatment chandigarh, skin lifting therapy, non surgical facelift, collagen stimulation, face tightening treatment, dermatology clinic chandigarh, aesthetic treatment, firm skin solution, anti aging therapy,  '
    ],
    
      [
        'slug' => 'uneven-skin-tone',
        'title' => 'Uneven Skin Tone',
        'short' => 'Skin Tone Correction',
        'custom_url' => 'skin-tone-correction-chandigarh',
        'meta_title' => 'Uneven Skin Tone Correction – Radiant Chandigarh',
        'meta_desc' => 'Correct uneven skin tone and pigmentation with expert skin treatments in Chandigarh for brighter, smoother, and rejuvenated, healthy-looking skin.',
        'meta_keywords' => 'uneven skin tone treatment chandigarh, pigmentation correction, skin brightening therapy, dark spots removal, melasma treatment, dermatology clinic chandigarh, aesthetic skin care, glow skin solution, laser toning,  '
    ],


     [
        'slug' => 'patchy-skin',
        'title' => 'Patchy Skin',
        'short' => 'Pigmentation Treatment',
        'custom_url' => 'patchy-skin-treatment-chandigarh',
        'meta_title' => 'Patchy Skin Repair – Smooth & Even Glow Chandigarh',
        'meta_desc' => 'Treat patchy and discolored skin with customized dermatology treatments in Chandigarh for even tone, smoother texture, and healthy, radiant skin.',
        'meta_keywords' => 'patchy skin treatment chandigarh, skin discoloration therapy, uneven pigmentation, skin repair treatment, dermatology clinic chandigarh, aesthetic skin care, tone correction therapy, glow skin solution, laser treatment,  '
    ],

    [
        'slug' => 'sensitive-skin',
        'title' => 'Sensitive Skin',
        'short' => 'Gentle Skin Care',
        'custom_url' => 'sensitive-skin-treatment-chandigarh',
        'meta_title' => 'Sensitive Skin Solutions – Gentle Care Chandigarh',
        'meta_desc' => 'Gentle treatments for sensitive skin in Chandigarh focused on repair, deep hydration, protection, and restoring healthy, calm, and radiant skin.',
        'meta_keywords' => 'sensitive skin treatment chandigarh, skin repair therapy, gentle skin care, hydration treatment, dermatology clinic chandigarh, aesthetic skin care, skin protection, calm skin solution,  , skin rejuvenation'
    ],

    [
        'slug' => 'acne',
        'title' => 'Acne',
        'short' => 'Clear Skin Solutions',
        'custom_url' => 'acne-specialist-in-chandigarh',
        'meta_title' => 'Acne Free Skin – Expert Treatment in Chandigarh',
        'meta_desc' => 'Get rid of acne and prevent future breakouts with customized acne treatments in Chandigarh for clear, healthy, and smooth skin.',
        'meta_keywords' => 'acne treatment chandigarh, pimple removal clinic, clear skin therapy, acne specialist chandigarh, dermatology acne care, aesthetic clinic, skin breakout solution, oily skin treatment,  , medical facial'
    ],

    [
        'slug' => 'acne-marks',
        'title' => 'Acne Marks',
        'short' => 'Spot Removal Therapy',
        'custom_url' => 'remove-acne-marks-chandigarh',
        'meta_title' => 'Remove Acne Marks – Clear Skin Chandigarh Clinic',
        'meta_desc' => 'Fade stubborn acne marks and achieve an even complexion with specialized skin treatments in Chandigarh for smoother, clearer-looking skin.',
        'meta_keywords' => 'acne marks treatment chandigarh, dark spots removal, pigmentation correction, skin rejuvenation treatment, dermatology clinic chandigarh, aesthetic skin care, glow skin solution, laser toning,  , medical facial'
    ],

    [
        'slug' => 'acne-scars',
        'title' => 'Acne Scars',
        'short' => 'Skin Resurfacing',
        'custom_url' => 'best-acne-scars-treatment-in-chandigarh',
        'meta_title' => 'Acne Scar Revision – Smooth Skin Experts Chandigarh',
        'meta_desc' => 'Smooth deep acne scars and improve skin texture with advanced scar revision treatments in Chandigarh for long-lasting, visible results.',
        'meta_keywords' => 'acne scar treatment chandigarh, skin resurfacing therapy, MicroNeedling scars, laser scar removal, dermatology clinic chandigarh, aesthetic scar revision, collagen boost, smooth skin solution,  , skin rejuvenation'
    ],

    [
        'slug' => 'open-pores',
        'title' => 'Open Pores',
        'short' => 'Pore Refinement',
        'custom_url' => 'open-pores-treatment-chandigarh',
        'meta_title' => 'Minimize Open Pores – Smooth Skin Chandigarh',
        'meta_desc' => 'Reduce the appearance of large pores and improve skin texture with targeted pore refinement treatments in Chandigarh for a smoother complexion.',
        'meta_keywords' => 'open pores treatment chandigarh, pore reduction therapy, skin texture improvement, dermatology clinic chandigarh, aesthetic skin care, smooth skin facial, collagen boost treatment,  , skin rejuvenation, face aesthetics'
    ],

    [
        'slug' => 'blackheads-whiteheads',
        'title' => 'Blackheads/Whiteheads',
        'short' => 'Deep Cleansing Therapy',
        'custom_url' => 'blackhead-removal-treatment-chandigarh',
        'meta_title' => 'Blackhead & Whitehead Removal – Chandigarh Experts',
        'meta_desc' => 'Deep cleanse your skin and remove blackheads and whiteheads with professional treatments in Chandigarh for clearer, smoother, and healthier skin.',
        'meta_keywords' => 'blackhead removal chandigarh, whitehead removal therapy, deep cleansing facial, pore extraction treatment, dermatology clinic chandigarh, aesthetic skin care, clear skin treatment,  , medical facial, skin polishing'
    ],

    [
        'slug' => 'pigmentation',
        'title' => 'Pigmentation',
        'short' => 'Skin Clarity Solutions',
        'custom_url' => 'best-pigmentation-treatment-in-chandigarh',
        'meta_title' => 'Pigmentation Fix – Brighter Skin Chandigarh Clinic',
        'meta_desc' => 'Correct skin pigmentation, melasma, and dark spots with expert dermatology treatments in Chandigarh for a clearer, more even-toned complexion.',
        'meta_keywords' => 'pigmentation treatment chandigarh, melasma removal, dark spots correction, skin whitening therapy, dermatology clinic chandigarh, aesthetic laser therapy, glow skin solution,  , laser toning, medical facial'
    ],

    [
        'slug' => 'melasma',
        'title' => 'Melasma',
        'short' => 'Melasma Correction',
        'custom_url' => 'melasma-skin-treatment-chandigarh',
        'meta_title' => 'Melasma Control Therapy – Chandigarh Skin Experts',
        'meta_desc' => 'Effectively manage and reduce melasma with customized dermatology treatments in Chandigarh for clear, even-toned, and radiant-looking skin.',
        'meta_keywords' => 'melasma treatment chandigarh, skin pigmentation therapy, dark patches removal, dermatology clinic chandigarh, aesthetic skin care, skin brightening treatment, melasma management,  , laser toning, medical facial'
    ],

    [
        'slug' => 'freckles-lentigines',
        'title' => 'Freckles/Lentigines',
        'short' => 'Spot Correction Therapy',
        'custom_url' => 'remove-freckles-chandigarh',
        'meta_title' => 'Remove Freckles & Lentigines – Chandigarh Clinic',
        'meta_desc' => 'Clear freckles and sun spots with advanced skin treatments in Chandigarh for a flawless, even-toned complexion and rejuvenated appearance.',
        'meta_keywords' => 'freckles removal chandigarh, lentigines treatment, sun spots correction, skin clearing therapy, dermatology clinic chandigarh, aesthetic laser therapy, glow skin solution,  , laser toning, medical facial'
    ],

    [
        'slug' => 'double-chin',
        'title' => 'Double Chin',
        'short' => 'Jawline Contouring',
        'custom_url' => 'double-chin-reduction-chandigarh',
        'meta_title' => 'Double Chin Reduction – Contoured Jawline Chandigarh',
        'meta_desc' => 'Reduce double chin and enhance your jawline with non-surgical treatments in Chandigarh for a more defined, youthful, and attractive facial profile.',
        'meta_keywords' => 'double chin reduction chandigarh, jawline contouring therapy, non surgical face lift, skin tightening treatment, dermatology clinic chandigarh, aesthetic treatment, face aesthetics,  , hifu treatment, morpheus8'
    ],

    [
        'slug' => 'facial-volume-loss',
        'title' => 'Facial Volume Loss',
        'short' => 'Volume Restoration',
        'custom_url' => 'restore-facial-volume-chandigarh',
        'meta_title' => 'Restore Facial Volume – Youthful Glow Chandigarh',
        'meta_desc' => 'Address facial volume loss and sagging with advanced dermal fillers and lifting treatments in Chandigarh for natural, youthful-looking results.',
        'meta_keywords' => 'facial volume loss treatment chandigarh, dermal fillers therapy, volume restoration, anti aging face lift, dermatology clinic chandigarh, aesthetic treatment, face rejuvenation,  , fillers chandigarh, skin lifting'
    ],

    [
        'slug' => 'unwanted-body-facial-hair',
        'title' => 'Unwanted Body/Facial Hair',
        'short' => 'Permanent Hair Reduction',
        'custom_url' => 'permanent-hair-reduction-chandigarh',
        'meta_title' => 'Permanent Hair Reduction – Smooth Skin Chandigarh',
        'meta_desc' => 'Get rid of unwanted facial and body hair permanently with safe and effective laser hair removal treatments in Chandigarh at Dermessence.',
        'meta_keywords' => 'permanent hair reduction chandigarh, laser hair removal therapy, full body laser hair removal, face hair removal, dermatology clinic chandigarh, aesthetic laser, smooth skin solution,  , diode laser, hair free skin'
    ],

    [
        'slug' => 'hair-fall-thinning',
        'title' => 'Hair Fall/Thinning',
        'short' => 'Hair Regrowth Therapy',
        'custom_url' => 'hair-fall-treatment-chandigarh',
        'meta_title' => 'Hair Fall Control & Regrowth – Chandigarh Experts',
        'meta_desc' => 'Stimulate natural hair regrowth and control hair fall with expert PRP and hair restoration therapies in Chandigarh for thicker, healthier hair.',
        'meta_keywords' => 'hair fall treatment chandigarh, hair regrowth therapy, prp hair treatment, thinning hair solution, dermatology clinic chandigarh, hair restoration clinic, scalp treatment, hair care therapy,  , non surgical hair therapy'
    ]
];
