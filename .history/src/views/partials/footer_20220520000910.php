<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Versão</b> 1.0
    </div>
    <strong>Copyright &copy; 2022-<script>
        document.write(new Date().getFullYear());
        </script>
        <a href="http://www.sultec.eng.br/">IdiDeveloper&reg; - SULTEC Engenharia e Geotecnia </a>.</strong>
    Desenvolvido por: Idiframk Silva - Todos os direitos reservados.
</footer>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!--<script src="plugins/jquery/jquery.min.js"></script>-->
<script src="<?php echo $base; ?>/assets/plugins/jquery/jquery.min.js"></script>

<!-- Funções Modais-->
<script src="<?php echo $base; ?>/assets/dist/js/modais.js"></script>

<!-- Bootstrap 4 -->
<script src="<?php echo $base; ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo $base; ?>/assets/plugins/chart.js/Chart.min.js"></script>

<!-- Select2 -->
<script src="<?php echo $base; ?>/assets/plugins/select2/js/select2.full.min.js"></script>
<script src="<?php echo $base; ?>/assets/plugins/select2/js/select2.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $base; ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>

<!-- overlayScrollbars -->
<script src="<?php echo $base; ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo $base; ?>/assets/dist/js/adminlte.js"></script>


<!-- DataTables  & Plugins -->
<script src="<?php echo $base; ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $base; ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $base; ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $base; ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo $base; ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $base; ?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $base; ?>/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo $base; ?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo $base; ?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo $base; ?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $base; ?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $base; ?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<!-- Toastr -->
<script src="<?php echo $base; ?>/assets/plugins/toastr/toastr.min.js"></script>
<!-- bootbox -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

<!-- Page specific script -->
<script>
$(function() {
    $("#example1").DataTable({

        "language": {
            "emptyTable": "Nenhum registro encontrado",
            "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "infoEmpty": "Mostrando 0 até 0 de 0 registros",
            "infoFiltered": "(Filtrados de _MAX_ registros)",
            "infoThousands": ".",
            "loadingRecords": "Carregando...",
            "processing": "Processando...",
            "zeroRecords": "Nenhum registro encontrado",
            "search": "Pesquisar",
            "paginate": {
                "next": "Próximo",
                "previous": "Anterior",
                "first": "Primeiro",
                "last": "Último"
            },
            "aria": {
                "sortAscending": ": Ordenar colunas de forma ascendente",
                "sortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "1": "Selecionado 1 linha"
                },
                "cells": {
                    "1": "1 célula selecionada",
                    "_": "%d células selecionadas"
                },
                "columns": {
                    "1": "1 coluna selecionada",
                    "_": "%d colunas selecionadas"
                }
            },
            "buttons": {
                "copySuccess": {
                    "1": "Uma linha copiada com sucesso",
                    "_": "%d linhas copiadas com sucesso"
                },
                "collection": "Coleção  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                "colvis": "Visibilidade da Coluna",
                "colvisRestore": "Restaurar Visibilidade",
                "copy": "Copiar",
                "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
                "copyTitle": "Copiar para a Área de Transferência",
                "csv": "CSV",
                "excel": "Excel",
                "pageLength": {
                    "-1": "Mostrar todos os registros",
                    "_": "Mostrar %d registros"
                },
                "pdf": "PDF",
                "print": "Imprimir",
                "createState": "Criar estado",
                "removeAllStates": "Remover todos os estados",
                "removeState": "Remover",
                "renameState": "Renomear",
                "savedStates": "Estados salvos",
                "stateRestore": "Estado %d",
                "updateState": "Atualizar"
            },
            "autoFill": {
                "cancel": "Cancelar",
                "fill": "Preencher todas as células com",
                "fillHorizontal": "Preencher células horizontalmente",
                "fillVertical": "Preencher células verticalmente"
            },
            "lengthMenu": "Exibir _MENU_ resultados por página",
            "searchBuilder": {
                "add": "Adicionar Condição",
                "button": {
                    "0": "Construtor de Pesquisa",
                    "_": "Construtor de Pesquisa (%d)"
                },
                "clearAll": "Limpar Tudo",
                "condition": "Condição",
                "conditions": {
                    "date": {
                        "after": "Depois",
                        "before": "Antes",
                        "between": "Entre",
                        "empty": "Vazio",
                        "equals": "Igual",
                        "not": "Não",
                        "notBetween": "Não Entre",
                        "notEmpty": "Não Vazio"
                    },
                    "number": {
                        "between": "Entre",
                        "empty": "Vazio",
                        "equals": "Igual",
                        "gt": "Maior Que",
                        "gte": "Maior ou Igual a",
                        "lt": "Menor Que",
                        "lte": "Menor ou Igual a",
                        "not": "Não",
                        "notBetween": "Não Entre",
                        "notEmpty": "Não Vazio"
                    },
                    "string": {
                        "contains": "Contém",
                        "empty": "Vazio",
                        "endsWith": "Termina Com",
                        "equals": "Igual",
                        "not": "Não",
                        "notEmpty": "Não Vazio",
                        "startsWith": "Começa Com",
                        "notContains": "Não contém",
                        "notStarts": "Não começa com",
                        "notEnds": "Não termina com"
                    },
                    "array": {
                        "contains": "Contém",
                        "empty": "Vazio",
                        "equals": "Igual à",
                        "not": "Não",
                        "notEmpty": "Não vazio",
                        "without": "Não possui"
                    }
                },
                "data": "Data",
                "deleteTitle": "Excluir regra de filtragem",
                "logicAnd": "E",
                "logicOr": "Ou",
                "title": {
                    "0": "Construtor de Pesquisa",
                    "_": "Construtor de Pesquisa (%d)"
                },
                "value": "Valor",
                "leftTitle": "Critérios Externos",
                "rightTitle": "Critérios Internos"
            },
            "searchPanes": {
                "clearMessage": "Limpar Tudo",
                "collapse": {
                    "0": "Painéis de Pesquisa",
                    "_": "Painéis de Pesquisa (%d)"
                },
                "count": "{total}",
                "countFiltered": "{shown} ({total})",
                "emptyPanes": "Nenhum Painel de Pesquisa",
                "loadMessage": "Carregando Painéis de Pesquisa...",
                "title": "Filtros Ativos",
                "showMessage": "Mostrar todos",
                "collapseMessage": "Fechar todos"
            },
            "thousands": ".",
            "datetime": {
                "previous": "Anterior",
                "next": "Próximo",
                "hours": "Hora",
                "minutes": "Minuto",
                "seconds": "Segundo",
                "amPm": [
                    "am",
                    "pm"
                ],
                "unknown": "-",
                "months": {
                    "0": "Janeiro",
                    "1": "Fevereiro",
                    "10": "Novembro",
                    "11": "Dezembro",
                    "2": "Março",
                    "3": "Abril",
                    "4": "Maio",
                    "5": "Junho",
                    "6": "Julho",
                    "7": "Agosto",
                    "8": "Setembro",
                    "9": "Outubro"
                },
                "weekdays": [
                    "Domingo",
                    "Segunda-feira",
                    "Terça-feira",
                    "Quarta-feira",
                    "Quinte-feira",
                    "Sexta-feira",
                    "Sábado"
                ]
            },
            "editor": {
                "close": "Fechar",
                "create": {
                    "button": "Novo",
                    "submit": "Criar",
                    "title": "Criar novo registro"
                },
                "edit": {
                    "button": "Editar",
                    "submit": "Atualizar",
                    "title": "Editar registro"
                },
                "error": {
                    "system": "Ocorreu um erro no sistema (<a target=\"\\\" rel=\"nofollow\" href=\"\\\">Mais informações<\/a>)."
                },
                "multi": {
                    "noMulti": "Essa entrada pode ser editada individualmente, mas não como parte do grupo",
                    "restore": "Desfazer alterações",
                    "title": "Multiplos valores",
                    "info": "Os itens selecionados contêm valores diferentes para esta entrada. Para editar e definir todos os itens para esta entrada com o mesmo valor, clique ou toque aqui, caso contrário, eles manterão seus valores individuais."
                },
                "remove": {
                    "button": "Remover",
                    "confirm": {
                        "_": "Tem certeza que quer deletar %d linhas?",
                        "1": "Tem certeza que quer deletar 1 linha?"
                    },
                    "submit": "Remover",
                    "title": "Remover registro"
                }
            },
            "decimal": ",",
            "stateRestore": {
                "creationModal": {
                    "button": "Criar",
                    "columns": {
                        "search": "Busca de colunas",
                        "visible": "Visibilidade da coluna"
                    },
                    "name": "Nome:",
                    "order": "Ordernar",
                    "paging": "Paginação",
                    "scroller": "Posição da barra de rolagem",
                    "search": "Busca",
                    "searchBuilder": "Mecanismo de busca",
                    "select": "Selecionar",
                    "title": "Criar novo estado",
                    "toggleLabel": "Inclui:"
                },
                "duplicateError": "Já existe um estado com esse nome",
                "emptyError": "Não pode ser vazio",
                "emptyStates": "Nenhum estado salvo",
                "removeConfirm": "Confirma remover %s?",
                "removeError": "Falha ao remover estado",
                "removeJoiner": "e",
                "removeSubmit": "Remover",
                "removeTitle": "Remover estado",
                "renameButton": "Renomear",
                "renameLabel": "Novo nome para %s:",
                "renameTitle": "Renomear estado"
            }
        },

        "stateSave": true,
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


});

$(window).on('hashchange', function(e) {
    history.replaceState("", document.title, e.originalEvent.oldURL);
});

$(document).ready(function() {
    $("#menu-active a").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("active");
            $(this).parents().parent('li').addClass("menu-open");
            $(this).parent().parent().prev().addClass("active"); // adicionar classe ativa a uma âncora
        }
    });
});

/* validador de CPF ou CNPJ - start */
function formatarCampo(campoTexto) {
    if (campoTexto.value.length <= 11) {
        campoTexto.value = mascaraCpf(campoTexto.value);
    } else {
        campoTexto.value = mascaraCnpj(campoTexto.value);
    }
}

function retirarFormatacao(campoTexto) {
    campoTexto.value = campoTexto.value.replace(/(\.|\/|\-)/g, "");
}

function mascaraCpf(valor) {
    return valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g, "\$1.\$2.\$3\-\$4");
}

function mascaraCnpj(valor) {
    return valor.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/g, "\$1.\$2.\$3\/\$4\-\$5");
}

function somenteNumeros(num) {
    var er = /[^0-9.]/;
    er.lastIndex = 0;
    var campo = num;
    if (er.test(campo.value)) {
        campo.value = "";
    }
}
/* validador de CPF ou CNPJ - end */

function mascaraFone(event) {
    var valor = document.getElementById("telefone").attributes[0].ownerElement['value'];
    var retorno = valor.replace(/\D/g, "");
    retorno = retorno.replace(/^0/, "");
    if (retorno.length > 10) {
        retorno = retorno.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (retorno.length > 5) {
        if (retorno.length == 6 && event.code == "Backspace") {
            // necessário pois senão o "-" fica sempre voltando ao dar backspace
            return;
        }
        retorno = retorno.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (retorno.length > 2) {
        retorno = retorno.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
        if (retorno.length != 0) {
            retorno = retorno.replace(/^(\d*)/, "($1");
        }
    }
    document.getElementById("telefone").attributes[0].ownerElement['value'] = retorno;
}
</script>


</body>

</html>