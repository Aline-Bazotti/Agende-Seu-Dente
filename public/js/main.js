$(document).ready(function () {

  $("#delete-modal").on("show.bs.modal", function (event) {
    var button = $(event.relatedTarget);
    var id = button.data("id");
    var grupo = button.data("grupo");
    var modal = $(this);
    modal.find(".modal-title").text("Excluir Registro #" + id);
    if(grupo == 1) {
      modal.find("#confirm").attr("href", "../Grupos/Controller/delGrupo.php?id=" + id);
    } else {
      modal.find("#confirm").attr("href", "../Grupos/Controller/delGrupo.php?id=" + id);
    }
  });

  $(".imgProduto").on("click", function () {
    $("#imagepreview").attr("src", $(this).attr("src")); 
    $("#imagemodal").modal("show"); 
  });

  $("#produto_quantidade").change(function (e) {
    $("#valorPedido").html($(this).val() * $("#valorProduto").html());
  });
});