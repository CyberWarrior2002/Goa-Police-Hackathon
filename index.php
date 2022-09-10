<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual finder</title>
</head>
<body>
<form onsubmit="doSearch16(this.Search16aa.value, this.Search16a.value, this.Search16b.value, this.Search16c.value); return false;">
    +
    <input type="text" name="Search16aa" id="Search16aa" size="3" placeholder="1" maxlength="3">
    <input type="text" name="Search16a" id="Search16a" size="4" placeholder="618" maxlength="3">
    <input type="text" name="Search16b" id="Search16b" size="4" placeholder="555" maxlength="3">
    <input type="text" name="Search16c" id="Search16c" size="5" placeholder="1212" maxlength="4">
    <input type="submit" style="width:140px" value="Reverse Lookup" >
</form>

<iframe src="" frameborder="0" name="box" id="box"></iframe>
 <embed type="text/html" src="snippet.html" width="500" height="200" name="box" id="box"> 
 
 <div id="data" class="fetchedData" name="data"> </div>
 

<script type="text/javascript">
// const box=document.getElementById('Search16aa')+document.getElementById('Search16a')+document.getElementById('Search16b')+document.getElementById('Search16c');
function doSearch16(Search16aa, Search16a, Search16b, Search16c)
{
   // var box=document.getElementById('box');
    //box.src=('https://www.reverse-lookup.co/lookup/+' + Search16aa + Search16a + Search16b + Search16c);
   // window.open('https://www.reverse-lookup.co/lookup/+' + Search16aa + Search16a + Search16b + Search16c, 'Search16window');
var myHeaders = new Headers();
myHeaders.append("apikey", "5Rp76JYIVh5dC9ZIDnLxqmeVCQj6dtAa");

var requestOptions = {
  method: 'GET',
  redirect: 'follow',
  headers: myHeaders
};

fetch("https://api.apilayer.com/number_verification/validate?number="+ Search16aa + Search16a + Search16b + Search16c, requestOptions)
  .then(response => response.text())
  .then(result => {
    document.getElementById("data").innerHTML = result;
      console.log(result);
  })
  .catch(error => console.log('error', error));
}
</script>
</body>
</html>
