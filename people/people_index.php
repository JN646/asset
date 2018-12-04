<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/asset/partials/_header.php' ?>
<div class="fluid-container">
  <div class="col-md-12">
    <h1>People</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <div id='newPerson' class="">
      <fieldset>
        <legend>New Person</legend>
        <!-- First Name -->
        <label for="p_firstName">First Name</label>
        <input type="text" name="p_firstName" placeholder="First Name" value="">

        <!-- Last Name -->
        <label for="p_lastName">Last Name</label>
        <input type="text" name="p_lastName" placeholder="Last Name" value="">

        <!-- DOB -->
        <label for="p_lastName">DOB</label>
        <input type="text" name="p_dob" placeholder="xx/xx/xxxx" value="">

        <!-- Company Name -->
        <label for="p_compName">Company Name</label>
        <input type="text" name="p_compName" placeholder="Company Name" value="">

        <!-- Phone -->
        <label for="p_phoneNum">Phone Number</label>
        <input type="text" name="p_phoneNum" placeholder="Phone #" value="">

        <!-- Email -->
        <label for="p_email">Email</label>
        <input type="text" name="p_email" placeholder="email@domain.com" value="">

        <!-- Save Button -->
        <button type="submit" name="p_create">Save</button>
      </fieldset>
    </div>
  </div>
</div>
</body>
<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/asset/partials/_footer.php' ?>
