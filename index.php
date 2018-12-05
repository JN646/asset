<!-- Header -->
<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/asset/partials/_header.php' ?>
<div class="fluid-container">
  <div class="row col-md-12">
    <div class="col-md-2">
      <!-- Menu -->
      <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/asset/partials/_adminMenu.php' ?>
    </div>
    <div class="col-md-10">
      <br>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Home Page</h1>
      </div>
      <p>Welcome to Checkpoint Charlie, use the buttons below to get started.</p>

      <!-- Links -->
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="people/people_index.php">People</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="assets/assets_index.php">Assets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="assets/assets_index.php">Issue Asset</a>
        </li>
      </ul>

      <!-- Stats Table -->
      <table class='table table-bordered'>
        <thead>
          <tr>
            <th class='text-center' width='10px';>i</th>
            <th class='text-center'>Stat</th>
            <th class='text-center'>Count</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class='text-center'><i class="fas fa-box"></i></td>
            <td>Assets</td>
            <td>200</td>
          </tr>
          <tr>
            <td class='text-center'><i class="fas fa-users"></i></td>
            <td>People</td>
            <td>400</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
<!-- Footer -->
<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/asset/partials/_footer.php' ?>
