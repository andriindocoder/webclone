<script>
   $(document).ready(function () {
   $(".JlistTabStock li").find("a")[0].click();
   $(".btn-tab").on("click", function () {
   var a = "" + $(this).attr("attr-slide");
   $(".tab-pane").hide();
   $("#" + a).show();
   var swiper1 = new Swiper('#s' + a, {
   pagination: '.swiper-pagination' + a,
   paginationClickable: true
   });
   });
   $('.btn-tab')[0].click();
   });
</script>
<div class="modal fade modal-new-login" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <button type="button" class="close close-btn" data-dismiss="modal">×</button>
         <div class="modal-body">
            <iframe id="iframelogin" class="new-iframe-login fw" frameborder="0"></iframe>
         </div>
      </div>
   </div>
</div>
<div class="rfq-popup modal fade modal-rfq restyle-rfq" id="rfqpopup">
   <div class="modal-dialog dialog-rfq" role="document">
      <div class="modal-content content-rfq">
         <div class="modal-header header-rfq"></div>
         <div class="modal-body body-rfq">
            <button type="button" class="close close-btn-rfq" data-dismiss="modal" aria-label="Close">
            </button>
            <div class="logo-idt-container">
               <a href="/">
               <img src="//resources.indotrading.com/frontend/images/rfq/logorfq.png" class="logo-idt" alt="Logo Indotrading" /></a>
            </div>
            <iframe style="height: 100% !important;" class="iframe-rfq"></iframe>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="madModal" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content mdpsct" style="text-align: center">
         <button type="button" class="md-close md-button-close" data-dismiss="modal">&times;</button>
         <i class="fa fa-phone fa-3x md-mt modal-title"></i>
         <br>
         <h4>Nomor telepon</h4>
         <p>klik nomor untuk langsung menghubungi supplier</p>
         <div class="modal-body mdpb">
            <div class="colorred hidden2"></div>
         </div>
      </div>
   </div>
</div>
<div id="new-modal-rfq" class="modal fade new-modal-rfq" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <button type="button" class="close" data-dismiss="modal">&times</button>
         <div class="modal-body" style="padding: 0;">
            <iframe class="fw fh" id="rfqPopUp"  src="" frameborder="0"></iframe>
         </div>
      </div>
   </div>
</div>