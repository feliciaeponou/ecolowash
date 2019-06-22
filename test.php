<form>


<input type="radio" name="test" value="1"> Test1<br>
<input type="radio" name="test" value="2"> Test2<br>
<input type="radio" name="test" value="3"> Test3

</form>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {

    var tests = document.getElementsByName("test");
    for (i = 0; i < tests.length; i++) {
    if (tests[i].checked) {
        alert(tests[i].value);
    }
}
 
}
</script>


<script>


// var tests = document.getElementsByName("test"); 
// var test_value;

// for (i = 0; i < tests.length; i++) {
//     if (tests[i].checked) {
//         alert("checked");
//     }
// }

// var test = document.getElementsById('un');
// var test_value;

//     if(test.checked = true){
//         test_value = test.value;
//         alert("checked");
//     }

    


</script>
