<select name="" onchange="myFunction(event)">
    <option disabled selected>Choose Database Type</option>
    <option value="Green">green</option>
    <option value="Red">red</option>
    <option value="Orange">orange</option>
    <option value="Black">black</option>
</select>

<input id="myText" type="text" value="colors">

<script>
function myFunction(e) {
    document.getElementById("myText").value = e.target.value
}
</script>

<br>

<select name="" onchange="myFunction2(event)">
    <option disabled selected>Please Select</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select>

<input id="myText2" type="text" value="colors">

<script>
function myFunction2(e) {
    document.getElementById("myText2").value = e.target.value * 10
}
</script>