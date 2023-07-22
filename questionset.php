<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>setquestion</title>
</head>
<body>
    <!-- <form > -->
        <label for="">qno</label>
        <input style="height: 30px; width: 200px; margin-top: 50px;" type="text" id="qno">
        <br>
        <label for="">time in seconds</label>
        <input style="height: 30px; width: 200px; margin-top: 50px;" type="text" id="time">
        <br>
        <label for="">body</label>
        <input style="height: 30px; width: 200px; margin-top: 50px;" type="text" id="qbody">
        <br>
        <label for="">image</label>
        <input style="height: 30px; width: 200px; margin-top: 50px;" type="text" id="image">
        <br>
        <label for="">op 1</label>
        <input style="height: 30px; width: 200px; margin-top: 50px;" type="text" id="op1">
        <br>
        <label for="">op 2</label>
        <input style="height: 30px; width: 200px; margin-top: 50px;" type="text" id="op2">
        <br>
        <label for="">op 3</label>
        <input style="height: 30px; width: 200px; margin-top: 50px;" type="text" id="op3">
        <br>
        <label for="">op 4</label>
        <input style="height: 30px; width: 200px; margin-top: 50px;" type="text" id="op4">
        <br>
        <label for="">correct</label>
        <input style="height: 30px; width: 200px; margin-top: 50px;" type="text" id="oc">
        <br>
        <button onclick="sub()" id="submit">submit</button>
    <!-- </form> -->
<div id="demo"></div>
<div id="demo1"></div>
<div id="demo2"></div>

</body>
<script>
    var temp1="";
    var temp2="";
    var array=[];
function sub(){
    var qno=document.getElementById("qno").value;
    var time=document.getElementById("time").value;
    var qbody=document.getElementById("qbody").value;
    var op1=document.getElementById("op1").value;
    var op2=document.getElementById("op2").value;
    var op3=document.getElementById("op3").value;
    var op4=document.getElementById("op4").value;
    var oc=document.getElementById("oc").value;
    // var qno=document.getElementById("qno").value;
    var image=document.getElementById("image").value;
    var obj={no:qno,time:time,body:qbody,op1:op1,op2:op2,op3:op3,op4:op4,oc:oc,image:image};
                    array.push(obj);
                    
    temp1 += '<br>question no:'+qno+'<br>ques:'+qbody+'<br>option 1:'+op1+'<br>option 2:'+op2+'<br>option 3:'+op3+'<br>option 4:'+op4+'<br>';
     temp2 += '<br>question no:  '+qno+'  correct option:'+oc;
    var ques=JSON.stringify(array, null, 4);
    localStorage.setItem("ques",ques);
    var quesg=localStorage.getItem("ques");
    var quesgo=JSON.parse(ques);
    document.getElementById("demo").innerHTML=ques;
    document.getElementById("demo1").innerHTML=temp1;
    document.getElementById("demo2").innerHTML=temp2;
    localStorage.setItem("quesprint",temp1);
    localStorage.setItem("ansprint",temp2);

    document.getElementById("qno").value="";
    document.getElementById("qbody").value="";
    document.getElementById("time").value="";
    document.getElementById("op1").value="";
    document.getElementById("op2").value="";
    document.getElementById("op3").value="";
    document.getElementById("op4").value="";
    document.getElementById("image").value="";
    document.getElementById("oc").value="";
    document.getElementById("qno").focus();

}
</script>
</html>