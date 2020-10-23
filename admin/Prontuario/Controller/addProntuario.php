<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$paciente = isset($_POST['id_paciente']) ? $_POST['id_paciente'] : null;
$erupcoes = isset($_POST['erupcoes']) ? $_POST['erupcoes'] : null;
$nodulos = isset($_POST['nodulos']) ? $_POST['nodulos'] : null;
$musculatura = isset($_POST['musculatura']) ? $_POST['musculatura'] : null;
$cadeia = isset($_POST['cadeia']) ? $_POST['cadeia'] : null;
$ganglionar = isset($_POST['ganglionar']) ? $_POST['ganglionar'] : null;
$cicatrizes = isset($_POST['cicatrizes']) ? $_POST['cicatrizes'] : null;
$assimetria_face_pescoco = isset($_POST['assimetria_face_pescoco']) ? $_POST['assimetria_face_pescoco'] : null;
$exoftalmia = isset($_POST['exoftalmia']) ? $_POST['exoftalmia'] : null;
$glandulas_salivares = isset($_POST['glandulas_salivares']) ? $_POST['glandulas_salivares'] : null;
$labios = isset($_POST['labios']) ? $_POST['labios'] : null;
$bochechas = isset($_POST['bochechas']) ? $_POST['bochechas'] : null;
$espaco_retromolar = isset($_POST['espaco_retromolar']) ? $_POST['espaco_retromolar'] : null;
$lingua = isset($_POST['lingua']) ? $_POST['lingua'] : null;
$base_lingua= isset($_POST['base_lingua']) ? $_POST['base_lingua'] : null;
$assoalho_bucal = isset($_POST['assoalho_bucal']) ? $_POST['assoalho_bucal'] : null;
$palato = isset($_POST['palato']) ? $_POST['palato'] : null;
$amigdalas = isset($_POST['amigdalas']) ? $_POST['amigdalas'] : null;
$limite_orofaringeo = isset($_POST['limite_orofaringeo']) ? $_POST['limite_orofaringeo'] : null;
$dentes_ausentes = isset($_POST['dentes_ausentes']) ? $_POST['dentes_ausentes'] : null;
$dentes_supranumerarios = isset($_POST['dentes_supranumerarios']) ? $_POST['dentes_supranumerarios'] : null;
$dentes_retidos = isset($_POST['dentes_retidos']) ? $_POST['dentes_retidos'] : null;
$diastema = isset($_POST['diastema']) ? $_POST['diastema'] : null;
$freios = isset($_POST['freios']) ? $_POST['freios'] : null;
$erosao = isset($_POST['erosao']) ? $_POST['erosao'] : null;
$hipoplasia_esmalte = isset($_POST['hipoplasia_esmalte']) ? $_POST['hipoplasia_esmalte'] : null;
$manchas = isset($_POST['manchas']) ? $_POST['manchas'] : null;
$induto = isset($_POST['induto']) ? $_POST['induto'] : null;
$tartaro = isset($_POST['tartaro']) ? $_POST['tartaro'] : null;
$retracao_gengival = isset($_POST['retracao_gengival']) ? $_POST['retracao_gengival'] : null;
$gengivas = isset($_POST['gengivas']) ? $_POST['gengivas'] : null;
$mobilidade_dental = isset($_POST['mobilidade_dental']) ? $_POST['mobilidade_dental'] : null;
$oclusao = isset($_POST['oclusao']) ? $_POST['oclusao'] : null;
$anomalidade_fala = isset($_POST['anomalidade_fala']) ? $_POST['anomalidade_fala'] : null;
$higiene_oral = isset($_POST['higiene_oral']) ? $_POST['higiene_oral'] : null;
$fluxo_salivar = isset($_POST['fluxo_salivar']) ? $_POST['fluxo_salivar'] : null;
$outros = isset($_POST['outros']) ? $_POST['outros'] : null;
$pulso = isset($_POST['pulso']) ? $_POST['pulso'] : null;
$pressao_arterial = isset($_POST['pressao_arterial']) ? $_POST['pressao_arterial'] : null;
$frequencia_respiratoria = isset($_POST['frequencia_respiratoria']) ? $_POST['frequencia_respiratoria'] : null;
$temperatura = isset($_POST['temperatura']) ? $_POST['temperatura'] : null;
$observacoes= isset($_POST['observacoes']) ? $_POST['observacoes'] : null;



if (empty($paciente)) {
    echo "Preencha todos os campos.";
    exit;
}

$metodo->addProntuario($paciente,$erupcoes,$nodulos,$musculatura,$cadeia,$ganglionar,$cicatrizes,$assimetria_face_pescoco,$exoftalmia,$glandulas_salivares,$labios,$bochechas,
$espaco_retromolar,$lingua,$base_lingua,$assoalho_bucal,$palato,$amigdalas,$limite_orofaringeo,$dentes_ausentes,$dentes_supranumerarios,$dentes_retidos,$diastema,$freios,$erosao,
$hipoplasia_esmalte,$manchas,$induto,$tartaro,$retracao_gengival,$gengivas,$mobilidade_dental,$oclusao,$anomalidade_fala,$higiene_oral,$fluxo_salivar,$outros,$pulso,$pressao_arterial,
$frequencia_respiratoria,$temperatura,$observacoes);

header("Location: ../../?page=prontuariosList");

?>