<?php include("includes/header.php") ?>
<?php include("database/connection.php") ?>
<?php include("database/getAlldata.php") ?>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- logo -->
      <a href="index.php" class="logo mr-auto"><img src="assets/images/logo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="#info">Info</a></li>
          <li><a href="#availability">Availability</a></li>
          <?php if(!(isset($_SESSION['receiver'])) && !(isset($_SESSION['hospital']))){ ?>
          <li><a href="#registration">Register to receive</a></li>
          <?php } ?>
          <li><a href="#faqs">FAQs</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contacts">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <?php if(isset($_SESSION['receiver']) || isset($_SESSION['hospital'])){ ?>
      <a href="<?php if(isset($_SESSION['receiver'])){ echo "receivers/index.php"; } else{ echo "hospitals/index.php"; }?>" class="registration-btn scrollto viewRequests">Dashboard</a>
      <a href="database/logout.php" class="registration-btn scrollto">Logout</a>
      <?php }
      else{ ?>
      <a href="login.html" class="registration-btn scrollto">Login</a>
      <?php } ?>

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to the blood bank</h1>
      <?php if(!(isset($_SESSION['receiver'])) && !(isset($_SESSION['hospital']))){ ?>
      <a href="#registration" class="btn-get-started scrollto">Register</a>
      <?php } ?>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  <!-- ======= caraousel Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/images/Caraousel-1.jpg" class="img-fluid" alt="">
              
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/images/Caraousel-2.jpg" class="img-fluid" alt="">
              
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/images/Caraousel-3.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/images/Caraousel-4.jpg" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End caraousel Section -->

    <!-- ======= Info Section ======= -->
    <section id="info" class="info">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex flex-column align-items-stretch">
            <div class="content">
              <h3>LEARN ABOUT DONATION </h3>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-6 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                <img src="assets/images/learn-about-1.jpg" class="img-fluid" alt="">
                <p>After donating blood, the body works to replenish the blood loss. This stimulates the production of new blood cells and in turn, helps in maintaining good health.</p>  
                </div>
              </div>
                <div class="col-xl-6 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <img src="assets/images/learn-about-2.png" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Info Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
              <span data-toggle="counter-up">85</span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-patient-bed"></i>
              <span data-toggle="counter-up">18</span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-laboratory"></i>
              <span data-toggle="counter-up">8</span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-award"></i>
              <span data-toggle="counter-up">150</span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Availability Section ======= -->
    <section id="availability" class="availability">
      <div class="container">

        <div class="section-title">
          <h2>Availability</h2>
          <p>List of all the hospitals with available blood groups.</p>
        </div>

        <div class="row" style="width: 100% ;">
          
          <table id="blood-data-table" class="table table-striped table-bordered table-hover table-sm" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="th-sm">Name
              </th>
              <th class="th-sm">Address
              </th>
              <th class="th-sm">Email
              </th>
              <th class="th-sm">Contact
              </th>
              <th class="th-sm">A+
              </th>
              <th class="th-sm">A-
              </th>
              <th class="th-sm">B+
              </th>
              <th class="th-sm">B-
              </th>
              <th class="th-sm">AB+
              </th>
              <th class="th-sm">AB-
              </th>
              <th class="th-sm">O+
              </th>
              <th class="th-sm">O-
              </th>
              <th class="th-sm">Action
              </th>
            </tr>
          </thead>
          <tbody>
            <?php 
            if(is_array($rows)){ ?>
            <div id="modal">
              <button class="closeBtn">X</button>
              <input type="number" name="quantity" id="quantity" placeholder="Enter required quantity">
              <button class="requestBtn">REQUEST</button>
            </div>
            <div id="overlay"></div>
            <?php  foreach($rows as $row){ ?>
            <tr>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['address'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['contact'] ?></td>
              <td><?php echo $row['A+'] ?></td>
              <td><?php echo $row['A-'] ?></td>
              <td><?php echo $row['B+'] ?></td>
              <td><?php echo $row['B-'] ?></td>
              <td><?php echo $row['AB+'] ?></td>
              <td><?php echo $row['AB-'] ?></td>
              <td><?php echo $row['O+'] ?></td>
              <td><?php echo $row['O-'] ?></td>
              <td><button class="bookBtn" data-id='<?php echo $row['id'] ?>'>BOOK</button></td>
            <?php  
              } 
            }
            ?>
            
            
            
              
            </tbody>
          </table>
        </div>

      </div>
      
    </section><!-- End Availability Section -->

    <!-- ======= Registration Section ======= -->
    <?php if(!(isset($_SESSION['receiver'])) && !(isset($_SESSION['hospital']))){ ?>
    <section id="registration" class="registration section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Registration</h2>
          <p>You can register yourself as a hospital representative or as receiver to get available blood groups.</p>
        </div>

        <form id="registration" action="forms/registration.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-2 form-group">
              <select name="acc-type" id="acc-type" class="form-control">
                <option value="">Select Account type</option>
                <option value="Receiver">Receiver</option>
                <option value="Hospital">Hospital</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" data-rule="minlen:8" data-msg="Please enter at least 8 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="contact" id="contact" placeholder="Contact" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-2 form-group">
              <select name="blood_group" id="blood_group" class="form-control">
                <option value="">Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="address" rows="5" placeholder="Enter address"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Successfully registered. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Submit</button></div>
        </form>

      </div>
    </section>
    <?php } ?>
    <!-- End Registration Section -->

    <!-- ======= FAQ Section ======= -->
    <section id="faqs" class="faqs">
      <div class="container">

        <div class="section-title">
          <h2>TYPES OF DONATION</h2>
          <p>The human body contains five liters of blood, which is made of several useful components i.e. Whole blood, Platelet, and Plasma. Each type of component has several medical uses and can be used for different medical treatments. your blood donation determines the best donation for you to make. For plasma and platelet donation you must have donated whole blood in past two years.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Whole Blood</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Plasma</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Platelet</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row faq section-bg" >
                  <div class="faq-list">
                  <ul>

                    <li data-aos="fade-up" data-aos-delay="100">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">What is it ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                        <p>
                          Blood Collected straight from the donor after its donation usually separated into red blood cells, platelets, and plasma.                </p>
                      </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Who can donate ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                        <p>
                          You need to be 18-65 years old, weigh 45kg or more and be fit and healthy.                        </p>
                      </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">User For ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                        <p>
                        Stomach disease, kidney disease, childbirth, operations, blood loss, trauma, cancer, blood diseases, haemophilia, anemia, heart disease.                        </p>
                      </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Lasts For ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                        <p>Red cells can be stored for 42 days. </p>
                      </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-6" class="collapsed">How long does it take ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                        <p>15 minutes to donate. </p>
                      </div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="400">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-7" class="collapsed">How often can I donate ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-7" class="collapse" data-parent=".faq-list">
                        <p>Every 12 weeks. </p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
              <div class="tab-pane" id="tab-2">
                <div class="row faq section-bg" >
                  <div class="faq-list">
                  <ul>

                    <li data-aos="fade-up" data-aos-delay="100">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">What is it ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                        <p>The straw-coloured liquid in which red blood cells, white blood cells, and platelets float in.Contains special nutrients which can be used to create 18 different type of medical products to treat many different medical conditions.</p>
                      </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Who can donate ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                        <p>You need to be 18-70 (men) or 20-70 (women) years old, weigh 50kg or more and must have given successful whole blood donation in last two years.</p>
                      </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">User For ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                        <p>Immune system conditions, pregnancy (including anti-D injections), bleeding, shock, burns, muscle and nerve conditions, haemophilia, immunisations.</p>
                      </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Lasts For ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                        <p>Plasma can last up to one year when frozen. </p>
                      </div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="400">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-6" class="collapsed">How does it work ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                        <p>We collect your blood, keep plasma and return rest to you by apheresis donation. </p>
                      </div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="400">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-7" class="collapsed">How long does it take ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-7" class="collapse" data-parent=".faq-list">
                        <p>15 minutes to donate. </p>
                      </div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="400">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-8" class="collapsed">How often can I donate ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-8" class="collapse" data-parent=".faq-list">
                        <p>Every 2-3 weeks. </p>
                      </div>
                    </li>
                  </ul>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-3">
              <div class="row faq section-bg" >
                  <div class="faq-list">
                  <ul>

                    <li data-aos="fade-up" data-aos-delay="100">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">What is it ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                        <p>The tiny 'plates' in blood that wedge together to help to clot and reduce bleeding. Always in high demand, Vital for people with low platelet count, like malaria and cancer patients.</p>
                      </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Who can donate ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                        <p>You need to be 18-70 years old (men), weigh 50kg or more and have given a successful plasma donation in the past 12 months.</p>
                      </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">User For ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                        <p>Cancer, blood diseases, haemophilia, anaemia, heart disease, stomach disease, kidney disease, childbirth, operations, blood loss, trauma, burns.</p>
                      </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Lasts For ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                        <p>Just five days. </p>
                      </div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="400">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-6" class="collapsed">How does it work ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                        <p>We collect your blood, keep plasma and return rest to you by apheresis donation. </p>
                      </div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="400">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-7" class="collapsed">How long does it take ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-7" class="collapse" data-parent=".faq-list">
                        <p>45 minutes to donate. </p>
                      </div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="400">
                      <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-8" class="collapsed">How often can I donate ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="faq-list-8" class="collapse" data-parent=".faq-list">
                        <p>Every 2 weeks. </p>
                      </div>
                    </li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End FAQ Section -->

    

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/images/gallery-1.jpeg" class="venobox" data-gall="gallery-item">
                <img src="assets/images/gallery-1.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/images/gallery-2.jpeg" class="venobox" data-gall="gallery-item">
                <img src="assets/images/gallery-2.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/images/gallery-3.jpeg" class="venobox" data-gall="gallery-item">
                <img src="assets/images/gallery-3.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/images/gallery-4.jpeg" class="venobox" data-gall="gallery-item">
                <img src="assets/images/gallery-4.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/images/gallery-5.jpeg" class="venobox" data-gall="gallery-item">
                <img src="assets/images/gallery-5.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/images/gallery-6.jpeg" class="venobox" data-gall="gallery-item">
                <img src="assets/images/gallery-6.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/images/gallery-7.jpeg" class="venobox" data-gall="gallery-item">
                <img src="assets/images/gallery-7.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/images/gallery-8.jpeg" class="venobox" data-gall="gallery-item">
                <img src="assets/images/gallery-8.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contacts" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Center For Development of Advanced Computing
C-56/1, Anusandhan Bhawan , Sector-62, Noida, Uttar Pardesh-201307</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 8527890830</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span><a href="https://github.com/Farhan9182/Blood-bank-WebApp">Farhan9182</a></span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by Farhaan Khaan</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/profile.php?id=100001398178179" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/farhan9182/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/farhan-khan-7796061b1/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>