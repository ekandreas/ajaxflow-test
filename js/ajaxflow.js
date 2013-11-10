
var ajaxflow_test_model1;
var ajaxflow_test_model2;
var ajaxflow_test_model3;

jQuery(document).ready(function ($) {

	$(document).ajaxStart(function () {
		$("#ajaxloader").show();
	}).ajaxStop(function () {
				$("#ajaxloader").hide();
			});

	//ajaxflow_test_model1 = new AjaxFlowTestModel();
	ajaxflow_test_model2 = new AjaxFlowTestModel();
	ajaxflow_test_model3 = new AjaxFlowTestModel();

	//ko.applyBindings( ajaxflow_test_model1, document.getElementById( "fast_lane1" ) );
	ko.applyBindings( ajaxflow_test_model2, document.getElementById( "fast_lane2" ) );
	ko.applyBindings( ajaxflow_test_model3, document.getElementById( "fast_lane3" ) );

});

var AjaxFlowTestModel = function () {

	var self = this;

	self.ajaxflow_result = ko.observable('');
	self.ajaxflow_time = ko.observable(0);

	self.callAjax = function( method, loop ) {

		var url = "ajaxflow/standard";
		//if( method == "fast" ) url = "/ajaxflow/fast";
		if( method == "standard" ) url = "/ajaxflow/standard";
		if( method == "traditional" ) url = "/wp-admin/admin-ajax.php?action=traditional";

		var params = new Array();

		params["message"] = "Method called: " + method;

		//if( method == "fast" ) params["shortinit"] = true;

		var end = 0;
		var start = new Date().getTime();
		for( var i=0; i<loop; i++ ){
			$.ajax({
				url: url,
				async: false,
				method: 'post',
				data: { "message": "Method called -> " + method, "shortinit": ( method == "fast" ) }
			}).success(function( data ) {
						self.ajaxflow_result( self.ajaxflow_result() + data );
					});
		}
		end = new Date().getTime();
		self.ajaxflow_time( end-start );

		return false;
	}

}
