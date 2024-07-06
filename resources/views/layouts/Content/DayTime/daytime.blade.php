<script>
$("#txtSearchNews").on("keyup", function(event) {
    if (event.keyCode == 13) {
        $("#btnSearchNews").get(0).click();
    }
});
$('#btnSearchNews').on('click', function(item) {
    // Select text search
    var txtSearch = $("#txtSearchNews").val();

    if (txtSearch != "") {
        // Open new tab
        var searchPageURL = "search.html?search=" + txtSearch;
        //window.open(searchPageURL);
        //window.location.href(searchPageURL);
        window.location.href = searchPageURL;
    }
});
</script>
<!--Script lấy ngày hiện tại-->
<script type="text/javascript">
$(document).ready(function() {
    ShowTime();
});

function ShowTime() {
    var currentDate = new Date();
    var year = currentDate.getFullYear();
    var month = currentDate.getMonth() + 1;
    if (month < 9) {
        month = "0" + month;
    }
    var date = currentDate.getDate();
    if (date < 9) {
        date = "0" + date;
    }

    var sessions = "SA";

    var hour = currentDate.getHours();

    if (hour >= 12) {
        sessions = "CH";
    }

    var hourday = new Array(7);
    hourday[13] = "1";
    hourday[20] = "8";
    hourday[14] = "2";
    hourday[21] = "9";
    hourday[15] = "3";
    hourday[22] = "10";
    hourday[16] = "4";
    hourday[23] = "11";
    hourday[17] = "5";
    hourday[24] = "12";
    hourday[18] = "6";
    hourday[19] = "7";
    if (hour > 12) {
        hour = hourday[hour];
    }
    if (hour < 9) {
        hour = "0" + hour;
    }
    var minute = currentDate.getMinutes();
    if (minute < 9) {
        minute = "0" + minute;
    }
    var second = currentDate.getSeconds();
    if (second < 9) {
        second = "0" + second;
    }
    var weekday = new Array(7);
    weekday[0] = "Chủ Nhật";
    weekday[1] = "Thứ Hai";
    weekday[2] = "Thứ Ba";
    weekday[3] = "Thứ Tư";
    weekday[4] = "Thứ Năm";
    weekday[5] = "Thứ Sáu";
    weekday[6] = "Thứ Bảy";

    var day = weekday[currentDate.getDay()];

    document.getElementById("txtShowTimer").innerHTML = day + ", ngày " + date + "/" + month + "/" + year +
        "  " + hour + ":" + minute + " " + sessions;

    window.setTimeout("ShowTime()", 1000);
    // Here 1000(milliseconds) means one 1 Sec
}
</script>
<!--Kết thúc script lấy ngày hiện tại-->
<form>
    <div class="row" style="margin-left: -5px;margin-right: -5px;">
        <div class="col-lg-16 padding-left-10 padding-right-10 box-search current-time"
            style="padding-left: 15px !important;padding-right: 10px;">
            <div class="col-sm-16 col-md-16 col-lg-16">
                <div class="pull-left">

                    <span id="txtShowTimer" class="showTime" style="font-weight:unset"></span>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <marquee behavior="scroll" align="center" direction="left" scrollamount="5" scrolldelay="5"
                        width="100%" onmouseover="this.stop()" onmouseout="this.start()">
                        <!--Chữ chạy top-->
                        <a id="chu-chay-top">
                            “Nhiệt liệt ch&#224;o mừng ng&#224;y Đo lường Việt Nam 20/01/2024 – Tăng cường
                            hoạt động đo lường để ph&#225;t triển Hạ tầng chất lượng quốc gia” </a>


                    </marquee>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
$("#txtSearchNews").on("keyup", function(event) {
    if (event.keyCode == 13) {
        $("#btnSearchNews").get(0).click();
    }
});
$('#btnSearchNews').on('click', function(item) {
    // Select text search
    var txtSearch = $("#txtSearchNews").val();
    if (txtSearch != "") {
        // Open new tab
        var searchPageURL = "search.html?search=" + htmlEncode(txtSearch);
        //window.open(searchPageURL);
        //window.location.href(searchPageURL);
        window.location.href = searchPageURL;
    }
});

function htmlEncode(html) {
    return document.createElement('a').appendChild(document.createTextNode(html)).parentNode.innerHTML;
};

function htmlDecode(html) {
    var a = document.createElement('a');
    a.innerHTML = html;
    return a.textContent;
};
</script>

<style>
.showTime {
    text-decoration: double;
    font-size: 14px;
    font-style: normal;
    font-weight: bold;
    color: red;

}
</style>