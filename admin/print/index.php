<?php
if (!isset($_GET["fiche"]) || empty($_GET["fiche"]))
	header("location:../index.php");
extract($_GET);
require_once "stimulsoft/helper.php";
?>
<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>GestPerm - Fiche de permutation</title>
	<link rel="stylesheet" type="text/css" href="css/stimulsoft.viewer.office2013.whiteblue.css">
	<script type="text/javascript" src="scripts/stimulsoft.reports.js"></script>
	<script type="text/javascript" src="scripts/stimulsoft.reports.maps.js"></script>
	<script type="text/javascript" src="scripts/stimulsoft.viewer.js"></script>
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">

	<?php
		$options = StiHelper::createOptions();
		$options->handler = "handler.php";
		$options->timeout = 30;
		StiHelper::initialize($options);
	?>
	<script type="text/javascript">
		function Start() {
			Stimulsoft.Base.StiLicense.key =
				"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" +
				"+m1qqs8t0m89vdK7k8nJTw==";

			var report = new Stimulsoft.Report.StiReport();
			report.loadFile("reports/FichePermutation.mrt");

			data=JSON.parse(localStorage.getItem('PrintFiche'));
			report.getComponentByName("txtTutel").text=data["tutel"];
			report.getComponentByName("txtProgramme").text=data["programme"];
			report.getComponentByName("txtLibProjet").text=data["projet"];
			report.getComponentByName("txtAbrevProjet").text=data["abrev"];
			report.getComponentByName("txtNumOpDef").text="N° "+data["numopd"];
			report.getComponentByName("txtExercice").text=data["exercice"];
			report.getComponentByName("txtNumOpProv").text=data["numopp"];
			report.getComponentByName("txtDate").text=data["date"];
			report.getComponentByName("txtBenef").text=data["benef"];
			report.getComponentByName("txtCC").text=data["cc"];
			report.getComponentByName("txtObjet").text=data["obj"];
			report.getComponentByName("txtPieces").text=data["piece"];
			report.getComponentByName("txtMTotal").text=data["mtotal"];
			report.getComponentByName("txtImpBudget").text=data["impbudget"];
			report.getComponentByName("txtDotation").text=data["dodation"];
			report.getComponentByName("txtEngagAnte").text=data["engant"];
			report.getComponentByName("txtMOpProv").text=data["mopp"];
			report.getComponentByName("txtEngagActuel").text=data["engact"];
			report.getComponentByName("txtEngagCumul").text=data["engcum"];
			report.getComponentByName("txtDispoBudget").text=data["dispobudget"];
			if(data["bailleur"].toString().toUpperCase()=="TRESOR")
			{
				report.getComponentByName("txtTresor").text="X";
			}else
			{
				report.getComponentByName("txtBailleur").text="X";
			}
			if(data["modepaie"].toString().toUpperCase()=="CHEQUE")
				report.getComponentByName("txtCheque").text="X";
			else if(data["modepaie"].toString().toUpperCase()=="VIREMENT")
				report.getComponentByName("txtVirement").text="X";
			else
				report.getComponentByName("txtEspece").text="X";

			var options = new Stimulsoft.Viewer.StiViewerOptions();
			var viewer = new Stimulsoft.Viewer.StiViewer(options, "StiViewer", false);

			viewer.onBeginProcessData = function (args, callback) {
				<?php StiHelper::createHandler(); ?>
			}

			viewer.report = report;
			viewer.renderHtml("viewerContent");
		}
	</script>
</head>
<body onload="Start()">
	<div id="viewerContent"></div>
</body>
</html>