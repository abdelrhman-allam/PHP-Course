<!doctype html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.3.1.js"  crossorigin="anonymous"></script>
</head>

<body>


<li><a href="/about.php">about</a></li>
<li><a href="/contact.php">contact</a></li>
<li><a href="/data.txt">data</a></li>
<li><a href="/data.json">json</a></li>

<div id="content">

</div>


<input type="button" id="getjson" value="Get json date">

<script>
    $(function(){
        $("a").on("click", function(e){
            e.preventDefault();
            
            $("#content").load($(this).attr("href"));
        });


        $("#getjson").on("click", function(e){
            $.get("data.php", function(r){
                console.log(r);
            });
        });
    });
</script>

</body>

</html>