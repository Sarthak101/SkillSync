<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SkillSync</title>
    <meta property="og:title" content="Character NFT template" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);
      }
    </style>
        <link rel="icon" type="image/x-icon" href="../public/Icons/Bgtp.ico">

    <link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
  </head>
  <body>
    <link rel="stylesheet" href="../css/style.css" />
    <div>
      <link href="../css/index.css" rel="stylesheet" />

      <div class="home-container">
        <header data-thq="thq-navbar" class="home-navbar">
          <span class="home-logo">
            <img src = "../public/Icons/logo.png" alt = "logo">
            SkillSync
          </span>
          <div
            data-thq="thq-navbar-nav"
            data-role="Nav"
            class="home-desktop-menu"
          >
            <nav
              data-thq="thq-navbar-nav-links"
              data-role="Nav"
              class="home-nav"
            >
              <button class="home-button button-clean button" onclick="scrollToSection('about-section')">About</button>
              <button class="home-button1 button-clean button" onclick="scrollToSection('feature-section')">Features</button>
              <button class="home-button2 button-clean button" onclick="scrollToSection('FAQ-section')">FAQ</button>
            </nav>
          </div>
          <div data-thq="thq-navbar-btn-group" class="home-btn-group">
            <!-- <a href="register-login.php" class="home-view button">Register</a> -->
            <a href="register-login.php" class="home-view button">Login</a>
          </div>

          <!-- mobile menu button -->
          <div data-thq="thq-burger-menu" class="home-burger-menu">
            <button class="button home-button5">
              <svg viewBox="0 0 1024 1024" class="home-icon">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </button>
          </div>
          <div data-thq="thq-mobile-menu" class="home-mobile-menu">
            <div
              data-thq="thq-mobile-menu-nav"
              data-role="Nav"
              class="home-nav1"
            >
              <div class="home-container1">
                <span class="home-logo1">SkillSync</span>
                <div data-thq="thq-close-menu" class="home-menu-close">
                  <svg viewBox="0 0 1024 1024" class="home-icon02">
                    <path
                      d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                    ></path>
                  </svg>
                </div>
              </div>
              <!-- Navbar for mobile width -->
              <nav
                data-thq="thq-mobile-menu-nav-links"
                data-role="Nav"
                class="home-nav2"
              >
                <span class="home-text" onclick="scrollToSection('about-section')">About</span>
                <span class="home-text01" onclick="scrollToSection('features-section')">Features</span>
                <span class="home-text02" onclick="scrollToSection('FAQ-section')">FAQ</span>
              </nav>
              <div class="home-container2">
              <a href="base-login.php" class="home-view button">Login</a>
                <button class="button">Register</button>
              </div>
            </div>
            <div class="home-icon-group">
              <svg viewBox="0 0 950.8571428571428 1024" class="home-icon04">
                <path
                  d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                ></path></svg
              ><svg viewBox="0 0 877.7142857142857 1024" class="home-icon06">
                <path
                  d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                ></path></svg
              ><svg viewBox="0 0 602.2582857142856 1024" class="home-icon08">
                <path
                  d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                ></path>
              </svg>
            </div>
          </div>
        </header>
        <section class="home-hero">
          <div class="home-heading">
            <h1 class="home-header">Find work that works for you.</h1>
            
            <p class="home-caption">
              Generating job opportunities and ensuring income stability for workers.
            </p>
          </div>
          <!-- integrating registration in main page -->
          <?php include('userRegistration.php') ?>
        </section>
        <section class="home-description">
          <img
            alt="image"
            src="../public/hero-divider-1500w.png"
            class="home-divider-image"
          />
        </section>
        <section id="about-section">
          <div class="home-container3">
            <div class="home-description01">
              <div class="home-content">
                <h2 class="home-header04">About us</h2>
                <p class="home-paragraph">
                  SkillSync pioneers a revolutionary shift in the unorganized sector by seamlessly
                  connecting employers with skilled workers using location data. Our platform simplifies
                  hiring, offering a user-friendly interfaces for ideal matches. By organizing this
                  sector, SkillSync generates job opportunities, ensuring income stability for workers and
                  improving economic growth
                </p>
                <p class="home-paragraph1">
                  SkillSync's impact extends beyond convenience, reshaping the socioeconomic fabric
                  Emphasizing collaboration and partnerships, we foster a harmonized marketplace, promoting
                  transparency and mutual benefit. Our commitment to innovation and collaboration drives us to
                  create a connected, fair, and prosperous ecosystem, propelling sustainable economic growth
                  and empowerment in this evolving sector.
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="home-cards">
          <div class="home-row">
            <div class="home-card">
              <div class="home-avatar">
                <img
                  alt="image"
                  src="../public/Avatars/avatar.svg"
                  class="home-avatar1"
                />
              </div>
              <div class="home-main">
                <div class="home-content01">
                  <h2 class="home-header01">Connecting Talent and Opportunity</h2>
                  <p class="home-description02">
                    SkillSync serves as a dynamic bridge connecting employers with skilled
                    workers effortlessly. Discover the right talent seamlessly with the help of
                    our user-friendly interface. 
                  </p>
                </div>
                <button class="home-learn1 button">
                  <span class="home-text07">Learn more</span>
                  <img
                    alt="image"
                    src="../public/Icons/arrow.svg"
                    class="home-image02"
                  />
                </button>
              </div>
            </div>
            <div class="home-card01">
              <div class="home-avatar2">
                <img
                  alt="image"
                  src="../public/Avatars/default-avatar.svg"
                  class="home-avatar3"
                />
              </div>
              <div class="home-main1">
                <div class="home-content02">
                  <h2 class="home-header02">
                    Empowering Skilled Workers
                  </h2>
                  <p class="home-description03">
                    At SkillSync, we're on a mission to empower skilled workers in the  
                    unorganized sector. Our platform connects them with meaningful job
                    opportunities, creating a pathway to income stability and a thriving
                    work environment.
                  </p>
                </div>
                <button class="home-learn2 button">
                  <span class="home-text08">Learn more</span>
                  <img
                    alt="image"
                    src="../public/Icons/arrow-2.svg"
                    class="home-image03"
                  />
                </button>
              </div>
            </div>
          </div>
          <div class="home-card02">
            <div class="home-avatar4">
              <img
                alt="image"
                src="../public/Avatars/light-avatar.svg"
                class="home-avatar5"
              />
            </div>
            <div class="home-row1">
              <div class="home-main2">
                <div class="home-content03">
                  <h2 class="home-header03">
                    Shaping the Future of Unorganized Sectors
                  </h2>
                  <p class="home-description04">
                    SkillSync envisions a future where the unorganized sector is 
                    transformed. Beyond mere job matching, we aim to centralize and organize
                    the sector, driving economic growth.
                  </p>
                </div>
                <button class="home-learn3 button">
                  <span class="home-text09">Learn more</span>
                  <img
                    alt="image"
                    src="../public/Icons/arrow-2.svg"
                    class="home-image04"
                  />
                </button>
              </div>
              <img
                alt="image"
                src="../public/group%202262.svg"
                class="home-image05"
              />
            </div>
          </div>
        </section>
        <section class="home-collection">
          <div class="home-main3">
            <div class="home-card03">
              <div class="home-image06">
                <img
                  alt="image"
                  src="../public/Characters/character-1.svg"
                  class="home-image07"
                />
              </div>
              <div class="home-content05">
                <span class="home-caption02">Mani</span>
                <h3 class="home-title">Domestic helper</h3>
              </div>
            </div>
            <div class="home-card04">
              <div class="home-image08">
                <img
                  alt="image"
                  src="../public/Characters/character-2.svg"
                  class="home-image09"
                />
              </div>
              <div class="home-content06">
                <span class="home-caption03">Kumar</span>
                <h3 class="home-title1">Content writer</h3>
              </div>
            </div>
            <div class="home-card05">
              <div class="home-image10">
                <img
                  alt="image"
                  src="../public/Characters/character-3.svg"
                  class="home-image11"
                />
              </div>
              <div class="home-content07">
                <span class="home-caption04">Dev</span>
                <h3 class="home-title2">Freelance artisan</h3>
              </div>
            </div>
            <div class="home-card06">
              <div class="home-image12">
                <img
                  alt="image"
                  src="../public/Characters/character-4.svg"
                  class="home-image13"
                />
              </div>
              <div class="home-content08">
                <span class="home-caption05">
                  <span>Naveen</span>
                  <br />
                </span>
                <h3 class="home-title3">Delivery driver</h3>
              </div>
            </div>
            <div class="home-card07">
              <div class="home-image14">
                <img
                  alt="image"
                  src="../public/Characters/character-5.svg"
                  class="home-image15"
                />
              </div>
              <div class="home-content09">
                <span class="home-caption06">Mahesh</span>
                <h3 class="home-title4">Fitness trainer</h3>
              </div>
            </div>
            <div class="home-card08">
              <div class="home-image16">
                <img
                  alt="image"
                  src="../public/Characters/character-6.svg"
                  class="home-image17"
                />
              </div>
              <div class="home-content10">
                <span class="home-caption07">Gopal</span>
                <h3 class="home-title5">Electrician</h3>
              </div>
            </div>
            <div class="home-card09">
              <div class="home-image18">
                <img
                  alt="image"
                  src="../public/Characters/character-7.svg"
                  class="home-image19"
                />
              </div>
              <div class="home-content11">
                <span class="home-caption08">Shashank</span>
                <h3 class="home-title6">Pet Sitter</h3>
              </div>
            </div>
            <div class="home-card10">
              <div class="home-image20">
                <img
                  alt="image"
                  src="../public/Characters/character-8.svg"
                  class="home-image21"
                />
              </div>
              <div class="home-content12">
                <span class="home-caption09">Sarvesh</span>
                <h3 class="home-title7">Car Washer</h3>
              </div>
            </div>
          </div>
        </section>
        <section class="home-roadmap" id="feature-section">
          <div class="home-heading04">
            <h2 class="home-header10">Features</h2>
            <p class="home-header11">
              Explore the Distinctive Features That Set Us Apart and
              help you find the work you need
            </p>
          </div>
          <div class="home-list">
            <div class="home-step">
              <span class="home-caption12">01</span>
              <div class="home-heading05">
                <h2 class="home-header12">Location-Based Shortlisting</h2>
                <p class="home-header13">
                  SkillSync integrates a sophisticated location-based shortlisting
                  feature. enabling employers and employees to efficiently narrow down
                  their choices based on geographic proximity. thereby optimizing the
                  hiring process.
                </p>
              </div>
            </div>
            <div class="home-step1">
              <span class="home-caption13">02</span>
              <div class="home-heading06">
                <h2 class="home-header14">Registration via QR Codes</h2>
                <p class="home-header15">
                  <span>
                    SkillSync Incorporates QR codes to facilitate a direct and 
                    efficient registration process for individuals interested in
                    utilizing the platform, enhancing accessibility and simplifying
                    the onboarding experience
                  </span>
                </p>
              </div>
            </div>
            <div class="home-step2">
              <span class="home-caption14">03</span>
              <div class="home-heading07">
                <h2 class="home-header16">Flexible Work Options</h2>
                <p class="home-header17">
                  <span>
                    SkillSync Provides workers with the option to choose between
                    working independently or through an intermediary, allowing for
                    a versatile and adaptable work arrangement.
                  </span>
                </p>
              </div>
            </div>
            <div class="home-step3">
              <span class="home-caption15">04</span>
              <div class="home-heading08">
                <h2 class="home-header18">Specialized Module for Intermediaries</h2>
                <p class="home-header19">
                  SkillSync utilizes a dedicated module tailored for intermediaries,
                  facilitating their engagement with the platform to connect individuals
                  with job opportunities, especially in collaboration with
                  non-governmental organizations (NGOs).
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="home-join-us">
          <div class="home-content15">
            <div class="home-main4">
              <div class="home-heading09">
                <h2 class="home-header23">Register with SkillSync now</h2>
                <p class="home-caption16">
                  Unlock Opportunities: Register with SkillSync today!
                </p>
              </div>
              <a href="register-login.php"><button class="home-view5 button">Sign up</button></a>
            </div>
            <img
              alt="image"
              src="../public/group%202273.svg"
              class="home-image29"
            />
          </div>
        </section>
        <section class="home-faq" id="FAQ-section">
          <h2 class="home-header24">We have all the answers</h2>
          <div class="home-accordion">
            <div data-role="accordion-container" class="home-element accordion">
              <div class="home-content16">
                <span class="home-header26">
                  How does SkillSync support income stability for skilled workers?
                </span>
                <span data-role="accordion-content" class="home-description05">
                  SkillSync supports income stability by creating a centralized platform
                  that connects skilled workers with job opportunities. This not only 
                  ensures a steady flow of work for workers but also contributes to their
                  overall economic well-being.
                </span>
              </div>
            </div>
            <div
              data-role="accordion-container"
              class="home-element1 accordion"
            >
              <div class="home-content17">
                <span class="home-header26">
                  How does SkillSync leverage location data for optimal connections?
                </span>
                <span data-role="accordion-content" class="home-description06">
                  SkillSync uses location data to ensure optimal connections between
                  employers and employees. This data-driven approach enhances efficiency
                  by facilitating matches that are not only suitable in terms of skills
                  but also geographically convenient, optimizing productivity for both
                  parties.
                </span>
              </div>
            </div>
            <div
              data-role="accordion-container"
              class="home-element2 accordion"
            >
              <div class="home-content18">
                <span class="home-header27">
                  Can SkillSync be used by both independent workers and those seeking
                  mediated work?
                </span>
                <span data-role="accordion-content" class="home-description07">
                  Yes, SkillSync is designed to cater to a diverse audience. It provides 
                  flexibility for both independent workers and those seeking mediated work,
                  offering a versatile platform that accommodates different work preferences.
                </span>
              </div>
            </div>
            <div
              data-role="accordion-container"
              class="home-element3 accordion"
            >
              <div class="home-content19">
                <span class="home-header28">
                  What features make SkillSync stand out in the market?
                </span>
                <span data-role="accordion-content" class="home-description08">
                  SkillSync stands out with features such as a location-based connection
                  system, ensuring optimal matches between employers and workers. The platform
                  also offers a versatile interface, making it easy for users to find ideal
                  matches, fostering a dynamic and efficient ecosystem.
                </span>
              </div>
            </div>
            <div
              data-role="accordion-container"
              class="home-element4 accordion"
            >
              <div class="home-content20">
                <span class="home-header29">
                  How does SkillSync enhance the hiring process for employers and skilled
                  workers?
                </span>
                <span data-role="accordion-content" class="home-description09">
                  SkillSync streamlines the hiring process by providing a user-friendly
                  platform where employers can easily find and connect with skilled
                  workers based on their specific needs. The platform's emphasis on
                  collaboration and partnerships fosters a harmonized marketplace,
                  promoting transparency and mutual benefit.
                </span>
              </div>
            </div>
          </div>
        </section>
        <footer class="home-footer">
          <div class="home-main5">
            <div class="home-branding">
              <div class="home-heading10">
                <h2 class="home-logo2">Stay Connected with SkillSync</h2>
                <p class="home-caption17">
                  Explore more opportunities, stay updated, and be part of the SkillSync
                  community.
                </p>
              </div>
            </div>
            <div class="home-links1">
              <div class="home-list1">
                <h3 class="home-heading11">Site</h3>
                <div class="home-items">
                  <button class="home-link02 button-clean button" onclick="scrollToSection('about-section')">About</button>
                  <button class="home-link03 button-clean button" onclick="scrollToSection('feature-section')">
                    Features
                  </button>
                  <button class="home-link04 button-clean button" onclick="scrollToSection('FAQ-section')">
                    FAQ
                  </button>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script>
      function scrollToSection(sectionId) {
        var section = document.getElementById(sectionId);
        if (section) {
          section.scrollIntoView({ behavior: 'smooth' });
        }
      }
    </script>

    <!-- mobile navbar scripting -->
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>