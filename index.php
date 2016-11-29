<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxc3ee0e1eb6027e76", "cd5da2430345202d628f56b5a8feb92f");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

</body>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
    function weixinShare() {
        wx.onMenuShareTimeline({
            title: "溧阳天淼山庄",
            desc: "欢迎来到溧阳天淼山庄",
            link: "www.tianmiaoshanzhuang.com",
            imgUrl: "http://www.youjiaxingapp.com/m/public/images/m_all_ico/scout-big.png",
            success: function (res) {
                alert("success");
            },
            fail: function (res) {
                alert("fail");
            },
            cancel: function (res) {
                alert("cancel");
            },
        }),

        wx.onMenuShareAppMessage({
            title: '溧阳天淼山庄',
            desc: '欢迎来到溧阳天淼山庄',
            link: 'www.tianmiaoshanzhuang.com',
            imgUrl: 'http://www.youjiaxingapp.com/m/public/images/m_all_ico/scout-big.png',
            type: '',
            dataUrl: '',
            success: function () {

            },
            cancel: function () {

            }
        });
    }

    wx.config({
        debug: true,
        appId: '<?php echo $signPackage["appId"];?>',
        timestamp: <?php echo $signPackage["timestamp"];?>,
        nonceStr: '<?php echo $signPackage["nonceStr"];?>',
        signature: '<?php echo $signPackage["signature"];?>',
        jsApiList: [
            "onMenuShareTimeline",
            "onMenuShareAppMessage",
        ]
    });
    wx.ready(function () {
        weixinShare();
    });

    wx.error(function(res) {
       alert("something goes wrong");
    });
</script>
</html>
