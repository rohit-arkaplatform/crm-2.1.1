<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin.js') }}"></script>
<script src="{{ asset('assets/js/custom-select.min.js') }}" type="text/javascript"></script>	
<!-- Clock Plugin JavaScript -->
<script src="{{ asset('assets/js/jquery-clockpicker.min.js') }}"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="{{ asset('assets/js/lightbox-plus-jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Date range Plugin JavaScript -->

<!-- <script>
$(".datepicker").datepicker({
    autoclose: true,
	todayHighlight: true,
	//gotoCurrent:true, 
	setDate: new Date(), //format: 'MM/DD/YYYY'
	format: 'dd-mm-yyyy',
	}).on("changeDate", function (e) {
		//alert("Working");
		var selected = $(this).val();
		$(".sel_date").val(selected);
	});
	
	
	
$(".datepicker_sort").datepicker({
autoclose: true,
todayHighlight: true,
//gotoCurrent:true, 
setDate: new Date(), //format: 'MM/DD/YYYY'
format: 'dd-mm-yyyy',
}).on("changeDate", function (e) {
	//alert("Working");
	var selected = $(this).val();
	$(".sel_date").val(selected);
	var date_id = this.id;
	//alert(date_id);
	var row_id = date_id.replace(/\D/g,'');
	//alert(datecount);
	$.ajax({
		type:"post",
		url: "/updateDateSort.php",
		data:"selected="+selected+"&row_id="+row_id,
		success:function(result){
			if(parseInt(result)=='1'){
				//$("#"+id).hide();
				location.reload();
			}
			else{
				alert("Something went wrong.Pleas try again.")
			}
		}
	})
});


// Date Picker
$('.datepicker111').datepicker({
        autoclose: true,
        todayHighlight: true,
		//gotoCurrent:true, 
		setDate: new Date(), //format: 'MM/DD/YYYY'
		format: 'yyyy-mm-dd',
		//startDate: '-0d',
	});
	
	
	
	$('#start_date').datepicker({
        autoclose: true,
        todayHighlight: true,
		//gotoCurrent:true, 
		setDate: new Date(), //format: 'MM/DD/YYYY'
		format: 'yyyy-mm-dd',
		//startDate: '-0d',
	});
      
	$('#end_date').datepicker({
		autoclose: true,
        todayHighlight: true,
		//gotoCurrent:true, 
		setDate: new Date(), //format: 'MM/DD/YYYY'
		format: 'yyyy-mm-dd',
		//startDate: '-0d',
	});
	
    $('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true,
        endDate: "today" //diable future date
		//startDate:'+0d' //present and future
      });
      
    

           
</script> -->
<script type="text/javascript">
      

    //sidebarCollapse
    $(document).ready(function () {
      $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(".caret").toggleClass('rotate-180');
      });
     
    });




// popup img js
$(".click-here").on('click', function() {
  $(".custom-model-main").addClass('model-open');
}); 
$(".close-btn, .bg-overlay").click(function(){
  $(".custom-model-main").removeClass('model-open');
});

   $("#vertical-menu h3").click(function () {
    //slide up all the link lists
    $("#vertical-menu ul ul").slideUp();
    $('.plus',this).html('+');
    //slide down the link list below the h3 clicked - only if its closed
    if (!$(this).next().is(":visible")) {
        $(this).next().slideDown();
        //$(this).remove("span").append('<span class="minus">-</span>');
        $('.plus').html('+');
        $('.plus',this).html('-');
    }
}) 
      $("form").on("change", ".file-upload-field", function () {
        $(this)
          .parent(".file-upload-wrapper")
          .attr(
            "data-text",
            $(this)
              .val()
              .replace(/.*(\/|\\)/, "")
          );
      });

      $(".checkbox-dropdown").click(function () {
      $(this).toggleClass("is-active");
    });

    $(".checkbox-dropdown ul").click(function (e) {
      e.stopPropagation();
    });
	
</script>

<!-- <script>
function checkSessionExists(){
	$.ajax({ 
		url: '<?//=SITE_PATH_ADM?>check_session.php', 
		type: 'post', 
		success: function(response){
			if(response==1){
				location.href = '<?//=SITE_PATH_ADM?>';
			}
		} 
	}); 
} 
$(document).ready(function(){ 
	setInterval(checkSessionExists,50000); 
});
</script> -->

