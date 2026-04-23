<section class="book_section layout_padding" id="contact">
  <div class="container">
    <div class="row">
      <div class="col">
        <form method="post" action="">
          <h4>
            BOOK <span>APPOINTMENT</span>
          </h4>
          <div class="form-row ">
            <div class="form-group col-lg-4">
              <label for="patientName">Patient Name </label>
              <input type="text" class="form-control" id="patientName" name="patient_name" placeholder="Your Name" required>
            </div>
            <div class="form-group col-lg-4">
              <label for="doctorName">Doctor's Name</label>
              <select class="form-control wide" id="doctorName" name="doctor_name" required>
                <option value="" disabled selected>Select Doctor</option>
                <?php foreach ($appointmentDoctors as $doctorName): ?>
                  <option value="<?= e($doctorName) ?>"><?= e($doctorName) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col-lg-4">
              <label for="departmentName">Department's Name</label>
              <select class="form-control wide" id="departmentName" name="department_name" required>
                <option value="" disabled selected>Select Department</option>
                <?php foreach ($appointmentDepartments as $department): ?>
                  <option value="<?= e($department) ?>"><?= e($department) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-row ">
            <div class="form-group col-lg-4">
              <label for="phoneNumber">Phone Number</label>
              <input type="text" class="form-control" id="phoneNumber" name="phone" placeholder="XXXXXXXXXX" required>
            </div>
            <div class="form-group col-lg-4">
              <label for="symptoms">Symptoms</label>
              <input type="text" class="form-control" id="symptoms" name="symptoms" placeholder="Describe symptoms" required>
            </div>
            <div class="form-group col-lg-4">
              <label for="inputDate">Choose Date </label>
              <div class="input-group date" id="inputDate" data-date-format="yyyy-mm-dd">
                <input type="date" class="form-control" name="appointment_date" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" required>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <button type="submit" class="btn" name="appointment_submit">Submit Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
