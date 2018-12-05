<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/asset/partials/_header.php' ?>
<div class="fluid-container">
  <div class="row col-md-12">
    <div class="col-md-2">
      <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/asset/partials/_adminMenu.php' ?>
    </div>
    <div class="col-md-10">
      <h1>Create a Person</h1>
      <p>Use this form to create a person.</p>
      <div id='newPerson' class="col-md-12">
        <fieldset>
          <legend>Person Details</legend>
          <form class="form-group" action="index.html" method="post">
            <div class='form-row'>
              <!-- First Name -->
              <div class='col'>
                <label class='' for="p_firstName">First Name</label>
                <input class='form-control' type="text" name="p_firstName" placeholder="First Name" value="">
              </div>

              <!-- Last Name -->
              <div class='col'>
                <label class='' for="p_lastName">Last Name</label>
                <input class='form-control' type="text" name="p_lastName" placeholder="Last Name" value="">
              </div>

              <!-- DOB -->
              <div class='col'>
                <label class='' for="p_lastName">DOB</label>
                <input class='form-control' type="text" name="p_dob" placeholder="xx/xx/xxxx" value="">
              </div>
            </div>

            <div class='form-row'>
              <!-- Phone -->
              <div class='col'>
                <label class='' for="p_phoneNum">Phone Number</label>
                <input class='form-control' type="text" name="p_phoneNum" placeholder="Phone #" value="">
              </div>

              <!-- Email -->
              <div class='col'>
                <label class='' for="p_email">Email</label>
                <input class='form-control' type="text" name="p_email" placeholder="email@domain.com" value="">
              </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Company</legend>
            <div class='form-row'>
              <!-- Company Name -->
              <div class='col'>
                <label class='' for="p_compName">Company Name</label>
                <input class='form-control' type="text" name="p_compName" placeholder="Company Name" value="">
              </div>
            </div>

            <br>

            <!-- Save Button -->
            <button class='btn btn-primary' type="submit" name="p_create">Save</button>
          </form>
        </fieldset>
      </div>
    </div>
  </div>
</div>
</body>
<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/asset/partials/_footer.php' ?>
