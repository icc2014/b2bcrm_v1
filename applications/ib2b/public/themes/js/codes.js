/**
 * CREATE CODES LIST EFFECT 
 * (:I BILLY 
*/
jQuery(function(){

	
	 jQuery(".box .tools a.codes_reload").click(function () {
           //
		    var e = jQuery(this).parents(".box");
            pm_id = jQuery(this).attr('data-pm-id');
			
			alert(pm_id);
			
			App.blockUI(e);
            window.setTimeout(function () {
                App.unblockUI(e);
            },
            1e3);
			
	 });
	
	jQuery("#btn_codes").click(function(){
			
			var ntype = $("#ntype").val();
			var client = $("#buid").val();
			var pmid = $("#pmid").val();
			var url_l = $(this).attr('data-url');
			var number=$('#number').val();
			
			if(number>10000)
			{
				alert('每次生产一万张');
				return;
			}
			
			jQuery.get(url_l,{ntype:ntype,client:client,client:pmid,client:url_l},function(data){
						alert(data);
			
			});
			//alert(data_list);
			/*
			jQuery.ajax({
				type:'get',
				url:,
				data:data_list,
				dataType:'text',
				contentType: "application/json;charset=utf-8",
				cache:false,
				success:function(data)
				{
					alert(data);
				}
				
			});
			*/
		
			var e = jQuery(".col-md-4 .box");
			App.blockUI(e);
            window.setTimeout(function () {
                App.unblockUI(e);
            },
            1e3);
			
			
	});
	
	
	
	

})