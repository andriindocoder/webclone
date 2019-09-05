<script>
   var DomainName = "https://www.indotrading.com";
   var input = document.getElementById("txtSearchForm");
   // Execute a function when the user releases a key on the keyboard
   input.addEventListener("keyup", function (event) {
   // Number 13 is the "Enter" key on the keyboard
   if (event.keyCode === 13) {
   // Cancel the default action, if needed
   event.preventDefault();
   return GoSubmit();
   }
   });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('/indotrading/js/main.js') }}"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.0/js/swiper.min.js"></script>
<script src="{{ asset('/indotrading/js/productlist.js') }}"></script>
<script src="{{ asset('/indotrading/js/jquery.unveil.js') }}"></script>
<script type="text/javascript" src="{{ asset('/indotrading/js/jquery.ui.min.js') }}"></script>
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsSocials/1.5.0/jssocials.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jsSocials/1.5.0/jssocials.min.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsSocials/1.5.0/jssocials-theme-flat.min.css" />
<script src="{{ asset('/indotrading/js/scripts-Master.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
<script type="text/javascript">
   $(".share-idt").jsSocials({
   showLabel: false,
   showCount: false,
   shares: ["twitter", "facebook", "googleplus", "linkedin", "whatsapp"]
   });
   $(".popupiframe").on("click", function () {
   if (getCookie('UserID') != null) {
   var dataUrl = $(this).attr("data-src");
   $("#new-modal-rfq").modal('show');
   document.getElementById('rfqPopUp').src = dataUrl;
   }
   else {
   LoginMe();
   }
   });
   $(".numberonly").keydown(function (e) {
   if ($.inArray(e.keyCode, [46, 8]) !== -1 ||
   (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
   (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
   (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
   (e.keyCode >= 35 && e.keyCode <= 39)) {
   return;
   }
   if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
   e.preventDefault();
   }
   });
   $(".showme").on("click", function () {
   var myCookie = getCookie("UserID");
   //var PhoneLeads = TryParseInt(getCookie("UserPhoneLeads"), 1);
   if (myCookie == null) {
   LoginMe();
   }
   else {
   $("#madModal").modal('show');
   var productId = $('.hiddenProdId').text();
   var token = $('#hdToken').val();
   var compid = $(this).attr("compid");
   var prodid = $(this).attr("prodid");
   //$(this).hide();
   $(".hidden2").html("<img src='//resources.indotrading.com/frontend/images/ajax-loader.gif'/>");
   $.ajax({
   type: "POST",
   url: DomainName + "/AjaxMethod.asmx/UpdateCompanyPhoneLeads",
   data: "{'Token': '" + token + "','EncCompanyID': '" + compid + "','ProductID':'" + prodid + "'}",
   contentType: "application/json; charset=utf-8",
   dataType: "json",
   success: function (response) {
   var parsed = JSON.parse(response.d);
   var phoneStr = "";
   if (parsed.Phone) phoneStr += "<a type='button' class='font-black shadow p-3 mb-5 bg-white rounded' href='tel:" + parsed.Phone + "'>" + parsed.Phone + "</a><br /><br /> <br />";
   if (parsed.Phone2) phoneStr += "<a type='button' class='font-black shadow p-3 mb-5 bg-white rounded' href='tel:" + parsed.Phone2 + "'>" + parsed.Phone2 + "</a><br />";
   $(".hidden2").html(phoneStr);
   $(".hidden2").show();
   $(".hidden2").parent().css("border", "white");
   $(".hidden2").parent().css("background-color");
   setCookie("UserPhoneLeads", PhoneLeads + 1, 1, "indotrading.com");
   },
   failure: function (msg) {
   }
   });
   }
   });
   var ueInterest = "Gold Member";
   $(document).ready(function () {
   $("img").unveil();
   if (getCookie('UserID') == null) {
   document.getElementById("afterLogin").style.display = "none";
   document.getElementById("liMember").style.display = "none";
   document.getElementById("liLogout").style.display = "none";
   }
   else {
   document.getElementById("beforeLogin").style.display = "none";
         }
   })
   function LoginMe() {
   $('.modal-new-login').modal('show');
   document.getElementById('iframelogin').src = "/newloginv2.aspx/login?popup=1";
   }
</script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?ignore=yes&v=345345" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('/indotrading/css/autocomplete.css') }}">
<link rel="stylesheet" href="{{ asset('/indotrading/css/stylesheet.min.css') }}">
<link rel="stylesheet" href="{{ asset('/indotrading/css/mainstyles.min.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800">