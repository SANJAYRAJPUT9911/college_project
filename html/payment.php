<!-- header start -->
<?php
include('./header.php');
?>
<!-- header end -->
<div class="d-flex justify-content-center m-5">
  <h3 class="popularcourse ">Payment Status</h3>
</div>
<div class="container">
    <div class="paymentbox d-flex justify-content-center">
        <span>Order ID : </span>
        <input type="text" class="orderid" >
        <button type="button" class="btn btn-primary viewbtn">View</button>


    </div>
</div>
<style>
    .orderid{
        margin: 1em;
        padding: 1em;
        border-radius: 1em;
        height: 1em;
        position: relative;
        bottom: 1.2em;
    }
    .viewbtn{
        /* border-radius: 1em; */
        height: 2.5em;
        position: relative;
        bottom: 0.4em;
    }
</style>

<!-- contact us text -->
<div class="d-flex justify-content-center  m-5">
  <h2 class="popularcourse ">Contact Us</h2>
</div>
<!-- contact us form start -->


<!-- FORM STAR -->

<?php
// include('form.php');

?>
<!-- FORM END -->

<!-- Modal start -->
<?php
include '../html/popupform.php'
?>
<!-- modal end -->

<!-- link ajax -->
<!-- <script src="./js/ajaxmain.js"></script> -->





<!-- footer start -->
<?php
include('./footer.php');
?>
<!-- footer end -->