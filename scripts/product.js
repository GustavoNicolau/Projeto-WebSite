

function successReg(){
	alert('Cadastro Realizado com sucesso!');
	location.reload();
}

function validationReg(){
	if($("#txtName").val() == "" || !(isNaN($("#txtName").val())))
	{
		alert("Insira um nome válido");
		return false;
	}

	if($("#txtEmail").val() == "" || !(isNaN($("#txtEmail").val())))
	{
		alert("Insira um email válido");
		return false;
	}

	if($("#txtPass").val() == "" || $("#txtPass").val().length < 4 )
	{
		alert("Insira uma senha válida");
		return false;
	}

	if($("#txtPass").val() != $("#txtConfPass").val())
	{
		alert("As senhas devem ser iguais");
		return false;
	}
}



function validationLog(){
	if($("#email").val() == "" || !(isNaN($("#email").val())))
	{
		alert("Insira um email válido");
		return false;
	}

	if($("#senha").val() == "")
	{
		alert("Insira uma senha válido");
		return false;
	}
}

$(function () {

	$("#btnRegisterLogin").click(function(){
		if(validationReg() == false){
			return;
		}
		
		acao = "sistem/client/register.php";

		$.ajax({
			type: "POST",
			url: acao,
			data:{
				txtName:	$("#txtName").val(),
				txtEmail:	$("#txtEmail").val(),
				txtPass:	$("#txtPass").val(),

			},
			success:	  successReg
		})
	})


	/*$("#btnLogin").click(function(){
		if(validationLog() == false){
			return;
		}

		acao = "sistem/enter.php";

		$.ajax({
			type: "POST",
			url: acao,
			data:{
				email:	$("#email").val(),
				senha:	$("#senha").val()

			},
			success:	  successLog,
			error:	successLog("erro "),
		})
	})*/
})


function successLog(value){
	
	console.log(value);
}





var mainPictureWidth = 450;

function showProductImageLoadingIcon() {
	var imgHeight = $("#big-image").height();
	var imgWidth = $("#big-image").width();

	if (imgHeight != 0 && imgWidth != 0) {
		var _top = ((imgHeight - 32) / 2) + "px";
		var _left = ((450 - 32) / 2) + "px";

		$("#product-image-loading-icon").css({
			top : _top,
			left : _left
		});

		$("#product-image-loading-icon").show();
	}
}

function hideProductImageLoadingIcon() {
	$("#product-image-loading-icon").hide();
}

function loadThumb(thumbUrl, pictureId, productId, variationId) {
	showProductImageLoadingIcon();

	var img2 = new Image();
	$(img2).load(function() {
		$("#big-image").attr('src', this.src);
		$("#big-image-container").fadeIn("slow", function() {
		});
		hideProductImageLoadingIcon();
	}).error(function() {
	}).attr('src', thumbUrl);
	$("#big-image").attr("iluria-product-picture-id", pictureId);
	$("#big-image").attr("iluria-product-id", productId);
	$("#big-image").attr("iluria-product-variation-id", variationId);

	zoomImage = thumbUrl.replace("450xN", "850xN");
	$("#zoom01").attr("href", zoomImage);

	var cloudZoomInstance = $('#big-image').data('CloudZoom');
	if (typeof (cloudZoomInstance) != "undefined") {
		cloudZoomInstance.destroy();
	}
	if (typeof (CloudZoom) != "undefined") {
		CloudZoom.quickStart();
	}
}

function loadThumb2(el) {
	var mainPictureUrl = $(el).attr("mainPictureUrl");
	var pictureId = $(el).attr("pictureId");
	var variationId = $(el).attr("variationId");

	loadThumb(mainPictureUrl, pictureId, variationId);
}

function showZoomImageFancybox() {
	
	var links = [zoomImage];
	
	
	// imagens de produtos sem variação
	$("a.iluria-product-picture-fancybox").each(function(){
		
		var link = $(this).attr("href");
		link = link.replace("450xN", "850xN");
		if(link != zoomImage){
			links.push(link);
		}
	});
	
	// imagens de produtos com variação
	if(links.length <=1)
	{
		$("#thumbsContainer").find(".thumb-picture[src!='']").each(function(){
			
			var link = $(this).attr("mainpictureurl");
			if( link != "" && link!= "undefined"){
				link = link.replace("450xN", "850xN");
				if(link != zoomImage){
					links.push(link);
				}
			}
		});
	}
	
	$.fancybox
			.open( links
					,
					{
						modal : false,
						closeBtn : false,
						openEffect : "none",
						closeEffect : "none",
						nextEffect : "fade",
						prevEffect : "fade",
						padding : 0,
						helpers : {
							overlay : {
								closeClick : true,
								locked : false,
								speedOut : 0,
								css : {
									'z-index' : '10000'
								}
							}
						},
						afterShow : function() {
							$(".fancybox-wrap").css("z-index", "20000");
							$(".fancybox-outer").css("cursor", "hand");
							$(".fancybox-outer").css("cursor", "pointer");
							$(".fancybox-wrap")
									.prepend(
											"<div class='fancybox-custom-buttons-container'><div class='fancybox-custom-buttons-container-wrapper' style='width: 94px;'><div class='fancybox-close-button' style='margin-left: 0px'>Fechar</div></div></div>");
							$(".fancybox-close-button").click(function() {
								$.fancybox.close();
							});
						}
					});
}
