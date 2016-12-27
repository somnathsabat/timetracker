    

    </td>
  </tr>
  <tr>
    <td valign="bottom" width="100%" align="center">
      <p>&nbsp;</p>

      <table cellspacing="0" cellpadding="0" height="30" border="0" width="100%">
        <tr>
          <td width="100%" align="center" bgcolor="#eeeeee"><a href="https://www.anuko.com/lp/tt_8.htm" target="_blank">{$i18n.footer.contribute_msg}</a></td>
        </tr>
      </table>
      <br>
      <table cellspacing="0" cellpadding="4" width="100%" border="0">
        <tr>
          <td align="center">&nbsp;Anuko Time Tracker 1.9.28.3521 | Copyright &copy; <a href="https://www.anuko.com/lp/tt_3.htm" target="_blank">Anuko</a> |
            <a href="https://www.anuko.com/lp/tt_4.htm" target="_blank">{$i18n.footer.credits}</a> |
            <a href="https://www.anuko.com/lp/tt_5.htm" target="_blank">{$i18n.footer.license}</a> |
            <a href="https://www.anuko.com/lp/tt_7.htm" target="_blank">{$i18n.footer.improve}</a>
          </td>
        </tr>
      </table>
      <br>

    </td>
  </tr>
</table>
 
 {if !empty($user->name)} 
 { 
<div style="position: fixed;left: 1200px; top:500px">
<div id="timer" style="position: fixed;left: 1220px;top: 450px;color: darkblue" ></div>

<div id="additionalTime" style="display:none">0</div>
<span id="startButton"  role="button">Start</span>
<a id="pauseButton" role="button" >Pause</a>
<span id="clearButton" role="button">Clear</span>
<div class="modal fade bs-example-modal-lg"  data-backdrop="static" data-keyboard="false" id="add-edit-modal" style="background-color: initial; left: 50%; top: 15%;  display: none" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
<div class="modal-dialog modal-lg" >
            <div class="modal-content">
            
            <article class="span5 data-block" style="position: absolute; top: -90px;left: -245px;width: 1000px;">
            <header>
            <button type="button" style="float:right;" id="cross" class="close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </header>
            
             <!-- Output errors -->

      
<div id="some">
</article>

</div>
</div>
</div>
</div>
}
{/if}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<script src="js/index.js"></script>
<script src="js/bootstrap-modalmanager.js"></script>
<script src="js/bootstrap-modal.js"></script>

<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.js"></script>
<script src="js/migration.js"></script>

<script src="js/jsCookie.js"></script>
<script src="js/moment.js"></script>
<script type="text/javascript">
/*$('input:text').keydown(function(e) {
    if (e.keyCode == 0 || e.keyCode == 32)
      alert("hi");
event.stopImmediatePropagation();
console.log('space pressed');
});*/

 $(document).bind('keydown', 'space', function () {
  event.stopImmediatePropagation();
}) ; 
$('#startButton').mousedown(function(event) {
    $("#clearButton").trigger('click');
      $("#startButton").trigger('click');
    
  
}); 
$('#pauseButton').mousedown(function(e) {
  $("#pauseButton").trigger('click');
     $.ajax({
            type: "POST",
            url:  'footer.php',
            })
     .done(function(response) {
      $("#add-edit-modal").modal('show');
      $("#some").html(response); 
      var value = $("#timer").text();
    //alert(value);
      var end = moment().format('HH' + ':' + 'mm'); 
      var a = value.split(':');
      var time = a[0] + ":" + a[1];
  //alert(b[1]);
     $('#durationone').val(time);
     $('#end').val(end);
     var start = $('#end').val();
     var b = start.split(':');
  //var time = a[0] + ":" + a[1];
  //alert(b[1]);
  if( b[1] < a[1])
  {
    var c;
    c = a[1] - b[1];
  }
 if(b[1] > a[1])
  {
    var c;
    c = b[1] - a[1];
  }
  if(b[1] == a[1])
  {
    var c;
    c = b[1] - a[1];
  }
  var d;
  d =  b[0] - a[0];
  if(c.toString().length == 1)
  {
    c = "0" + c; 
  }

  var str;
   str = d + ":" + c;
   //alert(str);
   $('#startpop').val(str);
   var value = $("#timer").text();
    //alert(value);
  var end = moment().format('HH' + ':' + 'mm'); 
  var a = value.split(':');
  var time = a[0] + ":" + a[1];
  //alert(b[1]);
  $('#durationone').val(time);
   $('#end').val(end);
   var start = $('#end').val();
   var b = start.split(':');
  //var time = a[0] + ":" + a[1];
  //alert(b[1]);
  if( b[1] < a[1])
  {
    var c;
    c = a[1] - b[1];
  }
 if(b[1] > a[1])
  {
    var c;
    c = b[1] - a[1];
  }
  if(b[1] == a[1])
  {
    var c;
    c = b[1] - a[1];
  }
  var d;
  d =  b[0] - a[0];
  var str;
   str = d + ":" + c;
  //alert(str);
   $('#startpop').val(str);
   //$("#timer").text('00:00:00');
   $("#clearButton").trigger('click');
  })
  //alert(c);
});
  $("#btn_submitpopup").click(function(){


    if(!$("#projectpopup").val())
    {
      var error = "select project";

      $(".projecterror").html(error);
      }
    if(!$("#categorypopup").val())
    {
      var category = "select category";
      $(".categoryerror").html(category);
      
    
    }
    if(!$("#notepopup").val())
    {
      var note = "select note";
      $(".noteerror").html(note);
      
    
    }
    if(!$("#projectpopup").val() || !$("#categorypopup").val() || !$("#notepopup").val() )
    {
      return false;
    }
    $("#add-edit-modal").modal("hide");
    $("#clearButton").trigger('click');
    // 
    // else {
    //   $("#clearButton").trigger('click');
    // }
  });


</script>
<link id="styleSheet1" rel="stylesheet" href="stylesheets/light.css">
<link id="styleSheet1" rel="stylesheet" href="stylesheets/bootstrap-modal.css">

<link id="styleSheet1" rel="stylesheet" href="stylesheets/sangoma-orange.css">

</body>
</html>
