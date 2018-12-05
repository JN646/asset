<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/asset/partials/_header.php' ?>
<div class="fluid-container">
  <div class="row col-md-12">
    <div class="col-md-2">
      <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/asset/partials/_adminMenu.php' ?>
    </div>
    <div class="col-md-10">
      <h1>Asset Home</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <ul>
        <li><a href='<?php echo $environment; ?>assets/assets_edit.php'>Asset List</a></li>
        <li><a href='<?php echo $environment; ?>assets/assets_list.php'>Asset Edit</a></li>
      </ul>
    </div>
  </div>
</div>
</body>
<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/asset/partials/_footer.php' ?>
