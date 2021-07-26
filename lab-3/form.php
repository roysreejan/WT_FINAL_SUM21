<html>
    <head></head>
    <body>
        <form>
            <input id="uname" onkeyup="writeOP(this)" type="text" placeholder="username"><br>
            <span id="op"></span><br>
            <input type="password" placeholder="Password"><br>
        </form>
        <button id="btn_g" onclick="viewGForm()" > Login with google</button>
        <form id="g_form" style="display:none;">
           <input type="text" placeholder="gmail"><br>
           <input type="password" placeholder="gmail password"><br>
        </form>
        <button onclick="turnOn()">Turn On </button>
        <img id="bulb" src="pic bulboff.gif">
        <button onclick="turnOff()">Turn Off</button>
        <br>
        <span onmouseover="showDetails()" onmouseout="hideDetails()" >Aiub</span>
        <p id="info" style="display:none">American International University-Bangladesh, commonly known by its acronym AIUB, is an accredited private university in Dhaka, Bangladesh.

        <script src="myjs.js"></script>
	</body>
</html>
