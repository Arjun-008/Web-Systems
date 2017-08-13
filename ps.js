<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Math.random()</h1>

<p>Every time you click the button, getRndInteger(min, max) returns a random number between 0 (included) and 10 (excluded):</p>

<button onclick="document.getElementById('demo').innerHTML = getRndInteger(0,10)">Click Me</button>

<p id="demo"></p>

<script>
function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}
</script>

</body>
</html>
