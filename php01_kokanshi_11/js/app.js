$(document).ready(() => {
  $("#btn").on('click',() => {
    if($("#name").val()==""){
            alert("お名前を記入ください");
            eval("document.form['name'].focus()");  
            return false;     
    }else if($("#age").val()==""){
            alert("年齢を記入ください");
            eval("document.form['age'].focus()");  
            return false;   
    }else{
            document.form.submit();
        }
  })
})