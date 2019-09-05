var ProductList = function () {
    var HandleLeads = function () {
        $(".showphone").on("click", function () {
            var PhoneLeads = TryParseInt(getCookie("UserPhoneLeads"), 0);
                if (PhoneLeads < 10) {
                    if(gold == "True"){
                        var That = $(this);
                        That.find('.fakePhone').hide();
                        $(".fakeFax").hide();
                        var CompanyID = That.attr("data-company");
                        var classShow = ".PhoneValue";
                        var token = $('#hdToken').val();
                        $.ajax({
                        type: "POST",
                        url: "/AjaxMethod.asmx/UpdateCompanyPhoneLeads",
                        data: "{'Token':'" + token + "','EncCompanyID': '" + CompanyID + "','ProductID':''}",
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        success: function (response) {
                            var parsed = JSON.parse(response.d);
                            var phoneStr = "";
                            if (parsed.Phone) phoneStr += "<div>" + parsed.Phone + "</div>";
                            if (parsed.Phone2) phoneStr += "<div>" + parsed.Phone2 + "</div>";
                            if (parsed.Phone3) phoneStr += "<div>" + parsed.Phone3 + "</div>";
                            if (parsed.Phone4) phoneStr += "<div>" + parsed.Phone4 + "</div>";
                            if (parsed.Phone5) phoneStr += "<div>" + parsed.Phone5 + "</div>";
                            That.find(classShow).removeClass('hidden');
                            That.find(classShow).html(phoneStr);
                            That.find(".FaxValue").removeClass('hidden');
                            $(".FaxValue").html(parsed.Fax);
                            setCookie("UserPhoneLeads", PhoneLeads + 1, 1, "indotrading.com");
                        },
                        failure: function (msg) {
                        }
                        });
                    }
                    else{
                        $('.afiliet .popupiframe').click();
                    }
                }
                else{
                    if(gold == "True")$('.popup-login').click();
                    else $('.afiliet .popupiframe').click();
                }
        });
    };

    var HandleShowMore = function () {
        $(".more").click(function () {
            if ($(this).hasClass("showMore")) {
                $(this).addClass("hideMore").removeClass("showMore");
                $(this).text(HideMore);
                $(this).siblings("span.arrow").addClass("lessArrow");
                $(this).parent().siblings("li.liExtra").removeClass("liHide");

            }
            else {
                $(this).addClass("showMore").removeClass("hideMore");
                $(this).text(ShowMore);
                $(this).siblings("span.arrow").removeClass("lessArrow");
                $(this).parent().siblings("li.liExtra").addClass("liHide");

            }
        });
    };

    return {
        init: function () {
            HandleShowMore();
            HandleLeads();
        }
    }
}();
var PopulateKeyword = function (UserID, Keyword) {
    $.ajax({
        type: "POST",
        url: DomainName + "/AjaxMethod.asmx/PopulateKeywords",
        data: "{'userID': '" + UserID + "','keyword': '" + Keyword + "'}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
        },
        failure: function (msg) {
        }
    });
};

$(document).ready(function () {
    ProductList.init();
});