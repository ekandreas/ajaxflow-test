
var ajaxflow_test_model;

jQuery(document).ready(function ($) {

	$(document).ajaxStart(function () {
		$("#ajaxloader").show();
	}).ajaxStop(function () {
				$("#ajaxloader").hide();
			});

	ajaxflow_test_model = new AjaxFlowTestModel();
	ko.applyBindings( ajaxflow_test_model );

});

var AjaxFlowTestModel = function () {

	var self = this;

	self.callAjaxFastFlow = function() {

		$.ajax({
			url: "/ajaxflow/fast",
			async: false,
			method: 'post',
			data: { "shortinit" : true }
		}).success(function( data ) {
				$("#ajaxresult1").prepend( data );
			});

		return false;
	}

	self.callAjaxFlow = function() {

		$.ajax({
			url: "/ajaxflow/standard",
			async: false,
			method: 'post'
		}).success(function( data ) {
					$("#ajaxresult2").prepend( data );
				});

		return false;
	}

	self.callAjax = function() {

		$.ajax({
			url: "/wp-admin/admin-ajax.php?action=traditional",
			async: false,
			method: 'post'
		}).success(function( data ) {
					$("#ajaxresult3").prepend( data );
				});

		return false;
	}

}
