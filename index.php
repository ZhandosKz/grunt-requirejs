<?php
$staticPath = !empty($_GET['static_path']) ? $_GET['static_path'] : 'static';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= $staticPath ?>/styles/main.css">
    <title>Index</title>
</head>
<body class="alimero-application">
<div class="hello">Hello World! (color must be red)</div>
<div class="alert alert-danger" id="some_alert">
    <button class="close" aria-label="Close" data-dismiss="alert" type="button">
        <span aria-hidden="true">×</span>
    </button>
    Closeable alert
</div>
<div class="home-app"></div>

<script>
    window.require = {baseUrl: "<?= $staticPath ?>"};
    window.requireCoreModulesLoad = {
        eventName: "requirejs-loaded",
        bodyElem: document.getElementsByClassName("alimero-application")[0],
        loaded: function() {
            var event;

            if (document.createEvent) {
                event = document.createEvent("HTMLEvents");
                event.initEvent(this.eventName, true, true);
            } else {
                event = document.createEventObject();
                event.eventType = this.eventName;
            }

            event.eventName = this.eventName;

            if (document.createEvent) {
                this.bodyElem.dispatchEvent(event);
            } else {
                this.bodyElem.fireEvent("on" + event.eventType, event);
            }
        },
        on: function(callback) {
            this.bodyElem.addEventListener(this.eventName, callback);
        }
    };
</script>
<script src="<?= $staticPath ?>/require.js" data-main="entries/home"></script>
<script>
    // Эмулимурием in-line скрипты, например от yii2 - form, validation etc
    window.requireCoreModulesLoad.on(function() {
        $(".hello").css({color: "red"});
        $("#some_alert").alert();
    });
</script>
</body>
</html>