<?php include("includes/header.php") ?>


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
          <li><a href="#registration">Register to receive</a></li>
          <li><a href="#faqs">FAQs</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#registration" class="registration-btn scrollto">Login</a>

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to the blood bank</h1>
      <a href="#registration" class="btn-get-started scrollto">Register</a>
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

        <div class="row">
          <table id="blood-data-table" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="th-sm">Name
              </th>
              <th class="th-sm">Position
              </th>
              <th class="th-sm">Office
              </th>
              <th class="th-sm">Age
              </th>
              <th class="th-sm">Start date
              </th>
              <th class="th-sm">Salary
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>2011/04/25</td>
              <td>$320,800</td>
            </tr>
            <tr>
              <td>Garrett Winters</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>63</td>
              <td>2011/07/25</td>
              <td>$170,750</td>
            </tr>
            <tr>
              <td>Ashton Cox</td>
              <td>Junior Technical Author</td>
              <td>San Francisco</td>
              <td>66</td>
              <td>2009/01/12</td>
              <td>$86,000</td>
            </tr>
            <tr>
              <td>Cedric Kelly</td>
              <td>Senior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>22</td>
              <td>2012/03/29</td>
              <td>$433,060</td>
            </tr>
            <tr>
              <td>Airi Satou</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>33</td>
              <td>2008/11/28</td>
              <td>$162,700</td>
            </tr>
            <tr>
              <td>Brielle Williamson</td>
              <td>Integration Specialist</td>
              <td>New York</td>
              <td>61</td>
              <td>2012/12/02</td>
              <td>$372,000</td>
            </tr>
            <tr>
              <td>Herrod Chandler</td>
              <td>Sales Assistant</td>
              <td>San Francisco</td>
              <td>59</td>
              <td>2012/08/06</td>
              <td>$137,500</td>
            </tr>
            <tr>
              <td>Rhona Davidson</td>
              <td>Integration Specialist</td>
              <td>Tokyo</td>
              <td>55</td>
              <td>2010/10/14</td>
              <td>$327,900</td>
            </tr>
            <tr>
              <td>Colleen Hurst</td>
              <td>Javascript Developer</td>
              <td>San Francisco</td>
              <td>39</td>
              <td>2009/09/15</td>
              <td>$205,500</td>
            </tr>
            <tr>
              <td>Sonya Frost</td>
              <td>Software Engineer</td>
              <td>Edinburgh</td>
              <td>23</td>
              <td>2008/12/13</td>
              <td>$103,600</td>
            </tr>
            <tr>
              <td>Jena Gaines</td>
              <td>Office Manager</td>
              <td>London</td>
              <td>30</td>
              <td>2008/12/19</td>
              <td>$90,560</td>
            </tr>
            <tr>
              <td>Quinn Flynn</td>
              <td>Support Lead</td>
              <td>Edinburgh</td>
              <td>22</td>
              <td>2013/03/03</td>
              <td>$342,000</td>
            </tr>
            </tbody>
          </table>
        </div>

      </div>
    </section><!-- End Availability Section -->

    <!-- ======= Registration Section ======= -->
    <section id="registration" class="registration section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Registration</h2>
          <p>You can register yourself as a hospital representative or as receiver to get available blood groups.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="department" id="department" class="form-control">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="doctor" id="doctor" class="form-control">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your registration request has been sent successfully.</div>
          </div>
          <div class="text-center"><button type="submit">Submit</button></div>
        </form>

      </div>
    </section><!-- End Registration Section -->

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
    <section id="contact" class="contact">
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