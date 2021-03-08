$(document).ready(function () {

	var mxScor = $("#maximum_score").val();

	if (mxScor) {
		
		$.ajax({
			url : '/team-table/score/' + $("#id_table").val(),
			type : 'GET',
			success : function(result){
				var retorno =JSON.parse(result);

				for (var i = 0; i < retorno.length; i ++){

					var data = retorno[i];

					switch (data.score_team){
						case data.maximum_score:

						$(".modal-body").html(
								            "<h1>"+data.name_team+"</h1>"+
           									"<h1>é o VENCEDOR!!!</h1>"
           				);
						$("#modal-victory").modal("show");

					}

				}
			}
		});
	}
});

$(".del").click(function() {
	
	alert("Essa ação não poderá ser desfeita. Deseja prosseguir?");
});