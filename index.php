<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>
<?php 
	include 'header.php' 
?>
<body class="hold-transition layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
<div class="wrapper">
  <?php include 'topbar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	 <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-body text-white">
	    </div>
	  </div>
    <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
    <!-- Content Header (Page header) -->
   
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-md">
         <?php 
          $page = isset($_GET['page']) ? $_GET['page'] : 'home';
          include $page.'.php';
          ?>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
    <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Developed By Niraj .</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>News Portal</b>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


// **** AutoScroll + ScrollSpy ****
var CORRECTION = 50;  // height of the navbar 
// don't forget to setup the data-offset attribute of the <body> tag

var DELAY_READING = 4000; // 4 seconds = 4000; 10 seconds = 10000
var DELAY_SCROLLING = 1500;

var links = [ '#section-start', '#section-green', '#section-blue', '#section-red', '#section-stop' ];
var timerId = 0;

delayLinks(0);

$( '#section-stop a' ).click(function(event) { 
  event.preventDefault();
  clearTimeout(timerId); 
});

$( '#navbar-1 li a' ).click(function(event) {
  event.preventDefault();
  scrollToLink( $(this).attr('href') );
});

function delayLinks( i ) {
  if( i >= links.length ) i = 0;
  scrollToLink( links[i] );
  
  var next = ( i == links.length - 1 ? 0 : i + 1);
  timerId = setTimeout(function() { delayLinks( next ) }, DELAY_READING ); 
}

function scrollToLink( link ) {
  selectLink = $( link );
  if ( selectLink.length ) {
    var top = selectLink.offset().top - CORRECTION;
    $('body,html').stop().animate({scrollTop: top}, DELAY_SCROLLING);
  } else {
    colnsole.log('The link is not found: ' + link);
  }

<!-- jQuery -->
<!-- Bootstrap -->
<?php include 'footer.php' ?>
</body>
</html>
