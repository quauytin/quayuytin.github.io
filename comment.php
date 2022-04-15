 <input type="text" id="name" value="dsgfgfhfh"/>
 
 <input type="text" id="mess" value="sdgfdfgfffffffffsgdffg"/>
<script type="text/javascript">
 var data = {
        name : $('#name').val()
        mess : $('#mess').val()

    };
 $(document).ready(function( ){
   $.post("view/footer.php", {data ; data}, function(data){$("div#result").html(data);});
},1000);

</script>