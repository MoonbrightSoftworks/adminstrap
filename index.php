<!DOCTYPE html>
<html lang="en">

  <!-- Head Start -->
  <?php include 'includes/head.php'; ?>
  <!-- Head End -->

  <title>Admin Area | Dashboard</title>
  <body>

    <!-- Nav Start -->
		<?php include 'includes/nav/nav1.php'; ?>
    <!-- Nav End -->

		<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
          </div>

          <!-- Header Start -->
          <?php include 'includes/header.php'; ?>
          <!-- Header End -->

        </div>
      </div>
    </header>

    <!-- Breadcrumb Start -->
		<?php include 'includes/breadcrumb/breadcrumb1.php'; ?>
    <!-- Breadcrumb End -->

		<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">

            <!-- Listgroup Start -->
            <?php include 'includes/listgroup.php'; ?>
            <!-- Listgroup End -->

            <!-- Space Start -->
						<?php include 'includes/space.php'; ?>
            <!-- Space End -->

          </div>

            <!-- Overview Start -->
						<?php include 'includes/overview/overview1.php'; ?>
            <!-- Overview End -->

					</div>

          <!-- Latest Start -->
					<?php include 'includes/latest.php'; ?>
          <!-- Latest End -->

				</div>
			</div>
		</div>
	</section>

  <!-- Footer Start -->
	<?php include 'includes/footer.php'; ?>
  <!-- Footer End -->

  <!-- Modal Start -->
  <?php include 'includes/modals.php'; ?>
  <!-- Modal End -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
