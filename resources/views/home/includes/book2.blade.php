<section id="appointment" class="appointment section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Make an Appointment</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="department" id="department" class="form-select">
              <option value="">Select Department</option>
              <option value="Department 1">Department 1</option>
              <option value="Department 2">Department 2</option>
              <option value="Department 3">Department 3</option>
            </select>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="doctor" id="doctor" class="form-select">
              <option value="">Select Doctor</option>
              <option value="Doctor 1">Doctor 1</option>
              <option value="Doctor 2">Doctor 2</option>
              <option value="Doctor 3">Doctor 3</option>
            </select>
          </div>
        </div>

        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Make an Appointment</button></div>
      </form>

    </div>
  </section><!-- End Appointment Section -->

  <!-- ======= Departments Section ======= -->
  <section id="departments" class="departments">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Departments</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                <h4>Cardiology</h4>
                <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                <h4>Neurology</h4>
                <p>Voluptas vel esse repudiandae quo excepturi.</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                <h4>Hepatology</h4>
                <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                <h4>Pediatrics</h4>
                <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <h3>Cardiology</h3>
              <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
              <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
              <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
            </div>
            <div class="tab-pane" id="tab-2">
              <h3>Neurology</h3>
              <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
              <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
              <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
            </div>
            <div class="tab-pane" id="tab-3">
              <h3>Hepatology</h3>
              <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
              <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
              <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
            </div>
            <div class="tab-pane" id="tab-4">
              <h3>Pediatrics</h3>
              <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
              <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
              <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>