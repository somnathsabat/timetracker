
<table>
<tr>
          <td class="projecterror" style="color:red">
          </td>
        </tr>
        <tr>
          <td class="categoryerror" style="color:red">
          </td>
        </tr>
        <tr>
          <td class="noteerror" style="color:red">
          </td>
        </tr>
</table>
<table>
{$formspopup.timeRecordpopupForm.open}
<tr>
            <td>{$i18n.label.project}:</td>
            <td>
            
            {$formspopup.timeRecordpopupForm.projectpopup.control}</td>
            </tr>
            <tr>
            <td>Category:</td>
            <td>
            
            {$formspopup.timeRecordpopupForm.categorypopup.control}</td>
            </tr>
            <tr>
            <td>Start:</td>
          <td>{$formspopup.timeRecordpopupForm.startpop.control}</td>
            </tr>
            <tr>
            <td>End:</td>
          <td>{$formspopup.timeRecordpopupForm.end.control}</td>
            </tr>
            <tr>
            <td>Duration:</td>
          <td style="width:240px;">{$formspopup.timeRecordpopupForm.durationone.control}&nbsp;{$i18n.form.time.duration_format}</td>
            </tr>
            <tr>
            <td>{$i18n.label.note}:</td>
          <td>{$formspopup.timeRecordpopupForm.notepopup.control}</td>
            </tr>
            <tr>
    <td align="center" colspan="2">{$formspopup.timeRecordpopupForm.btn_submitpopup.control}</td>
  </tr>
            
            
            {$formspopup.timeRecordpopupForm.close}
            </table>
            <script>
            $("#btn_submitpopup").click(function(){
            	var projectpopup = $("#projectpopup").val();
            	var categorypopup = $("#categorypopup").val();
            	var startpop = $("#startpop").val();
            	var end = $("#end").val();
            	var notepopup = $("#notepopup").val();
            	var durationone = $("#durationone").val();
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
    
            	//alert(startpop);
            	
            	$.ajax({
  	url: 'log.php',
  	type: 'post',
  	data: { "projectpopup": projectpopup , "categorypopup": categorypopup , "startpop": startpop , "end": end , "notepopup": notepopup , "durationone": durationone},

  })
            	.done(function(){
            		$("#add-edit-modal").modal("hide");
    


            	});
            	            });
            //
  
            </script>