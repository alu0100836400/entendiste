<link rel="stylesheet" href="{{asset('css/mini-diagram.css')}}">
<div class="diagram">
    <div class="pieBackground">
        <div class="pieField"></div>
    </div>
    <div class="wrapper">
        <div class="object">
            <div class="round"></div>
        </div>
        <div class="object rotate">
            <div class="round"></div>
        </div>
        <div id="pieSlice1" class="hold">
            <div class="pie"></div>
        </div>
        <div id="pieSlice2" class="hold">
            <div class="pie"></div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    var p = 66;
    var deg = Math.round(3.6*p);

    if (deg <= 180 && deg > 0) {
        $("#pieSlice1 .pie").css("transform", "rotate(" + deg + "deg)");
        $(".object.rotate").css("transform", "rotate(" + deg + "deg)");
    } else if (deg > 180 && deg <=360) {
        $("#pieSlice1 .pie").css("transform", "rotate(180deg)");
        $("#pieSlice2 .pie").css("transform", "rotate(" + (deg - 180) + "deg)");
        $(".object.rotate").css("transform", "rotate(" + deg + "deg)");
    }
</script>