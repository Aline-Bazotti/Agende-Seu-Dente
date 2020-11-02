<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id = isset($_POST['prontuarioId']) ? $_POST['prontuarioId'] : null;
$d18 = isset($_POST['18']) ? $_POST['18'] : null;
$d17 = isset($_POST['17']) ? $_POST['17'] : null;
$d16 = isset($_POST['16']) ? $_POST['16'] : null;
$d15_55 = isset($_POST['15_55']) ? $_POST['15_55'] : null;
$d14_54 = isset($_POST['14_54']) ? $_POST['14_54'] : null;
$d13_53 = isset($_POST['13_53']) ? $_POST['13_53'] : null;
$d12_52 = isset($_POST['12_52']) ? $_POST['12_52'] : null;
$d11_51 = isset($_POST['11_51']) ? $_POST['11_51'] : null;
$d21_61 = isset($_POST['21_61']) ? $_POST['21_61'] : null;
$d22_62 = isset($_POST['22_62']) ? $_POST['22_62'] : null;
$d23_63 = isset($_POST['23_63']) ? $_POST['23_63'] : null;
$d24_64 = isset($_POST['24_64']) ? $_POST['24_64'] : null;
$d25_65 = isset($_POST['25_65']) ? $_POST['25_65'] : null;
$d26 = isset($_POST['26']) ? $_POST['26'] : null;
$d27 = isset($_POST['27']) ? $_POST['27'] : null;
$d28 = isset($_POST['28']) ? $_POST['28'] : null;
$d38 = isset($_POST['38']) ? $_POST['38'] : null;
$d37 = isset($_POST['37']) ? $_POST['37'] : null;
$d36 = isset($_POST['36']) ? $_POST['36'] : null;
$d35_75 = isset($_POST['35_75']) ? $_POST['35_75'] : null;
$d34_74 = isset($_POST['34_74']) ? $_POST['34_74'] : null;
$d33_73 = isset($_POST['33_73']) ? $_POST['33_73'] : null;
$d32_72 = isset($_POST['32_72']) ? $_POST['32_72'] : null;
$d31_71 = isset($_POST['31_71']) ? $_POST['31_71'] : null;
$d41_81 = isset($_POST['41_81']) ? $_POST['41_81'] : null;
$d42_82 = isset($_POST['42_82']) ? $_POST['42_82'] : null;
$d43_83 = isset($_POST['43_83']) ? $_POST['43_83'] : null;
$d44_84 = isset($_POST['44_84']) ? $_POST['44_84'] : null;
$d45_85 = isset($_POST['45_85']) ? $_POST['45_85'] : null;
$d46 = isset($_POST['46']) ? $_POST['46'] : null;
$d47 = isset($_POST['47']) ? $_POST['47'] : null;
$d48 = isset($_POST['48']) ? $_POST['48'] : null;
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

if (empty($id)) {
    echo "Preencha todos os campos.";
    exit;
}

$metodo->editProntuario($id,$erupcoes,$nodulos,$musculatura,$cadeia,$ganglionar,$cicatrizes,$assimetria_face_pescoco,$exoftalmia,$glandulas_salivares,$labios,$bochechas,
    $espaco_retromolar,$lingua,$base_lingua,$assoalho_bucal,$palato,$amigdalas,$limite_orofaringeo,$dentes_ausentes,$dentes_supranumerarios,$dentes_retidos,$diastema,$freios,$erosao,
    $hipoplasia_esmalte,$manchas,$induto,$tartaro,$retracao_gengival,$gengivas,$mobilidade_dental,$oclusao,$anomalidade_fala,$higiene_oral,$fluxo_salivar,$outros,$pulso,$pressao_arterial,
    $frequencia_respiratoria,$temperatura,$observacoes,$d18,$d17,$d16,$d15_55,$d14_54,$d13_53,$d12_52,$d11_51,$d21_61,$d22_62,$d23_63,$d24_64,$d25_65,$d26,$d27,$d28,$d38,$d37,$d36,$d35_75,
    $d34_74,$d33_73,$d32_72,$d31_71,$d41_81,$d42_82,$d43_83,$d44_84,$d45_85,$d46,$d47,$d48);

header("Location: ../../?page=prontuariosList");

?>