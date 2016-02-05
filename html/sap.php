<?php if($_GET['q'] != 'bl39ad') exit; ?>
<!DOCTYPE HTML>
<html>

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta charset="UTF-8">
		
		<title>SAP</title>

		<script id="sap-ui-bootstrap"
			src="https://sapui5.hana.ondemand.com/resources/sap-ui-core.js"
			data-sap-ui-theme="sap_bluecrystal"
			data-sap-ui-libs="sap.m,sap.ui.commons,sap.suite.ui.commons">
		</script>
		
		<script>
		function openLink(url) {}

		function onClickItem(e) {}

		<?php if($_GET['m']=='0') { ?>

			var model = new sap.ui.model.json.JSONModel();
			model.setData({ date: "93.1532" });

			var txtDate = new sap.ui.commons.TextView({
				text: {
					path: '/date',
					type: 'sap.ui.model.type.Float',
					formatOptions: {
						maxFractionDigits: 2
					}
				}
			});

			txtDate.setModel(model);

			txtDate.placeAt("content");
		<?php } elseif($_GET['m'] == '1') { ?>
			var data = {
				nodes: [
					{id: 1,  lane: 0,  title: "Sales Order 1", children: [10], state: sap.suite.ui.commons.ProcessFlowNodeState.Positive, stateText: "Completed"},
					{id: 10, lane: 1 , title: "Outbound Delivery 5", children: [20], state: sap.suite.ui.commons.ProcessFlowNodeState.Neutral, stateText: "In Progress", focused:true},
					{id: 20, lane: 2 , title: "Invoice 23", children: [30], state: sap.suite.ui.commons.ProcessFlowNodeState.Planned, stateText: "Planned"},
					{id: 30, lane: 3 , title: "Accounting Document 2", children: [40], state: sap.suite.ui.commons.ProcessFlowNodeState.Planned, stateText: "Planned"},
					{id: 40, lane: 4 , title: "Payment Document 75", children: [50], state: sap.suite.ui.commons.ProcessFlowNodeState.Planned, stateText: "Planned"},
					{id: 50, lane: 5 , title: "Acceptance Letter 14", children: null, state: sap.suite.ui.commons.ProcessFlowNodeState.Planned, stateText: "Planned"}
				],
				lanes: [
					{id: 0, icon: "sap-icon://shelf", label: "In Order", position: 0},
					{id: 1, icon: "sap-icon://basket", label: "In Delivery", position: 1},
					{id: 2, icon: "sap-icon://retail-store", label: "In Invoice", position: 2},
					{id: 3, icon: "sap-icon://payment-approval", label: "In Accounting", position: 3},
					{id: 4, icon: "sap-icon://nurse", label: "In Payment", position: 4},
					{id: 5, icon: "sap-icon://shipping-status", label: "Delivered", position: 5}
				]
			};

			var model = new sap.ui.model.json.JSONModel();
			model.setData(data);

			var pflow = new sap.suite.ui.commons.ProcessFlow({
				wheelZoomable: false
			});
			pflow.setModel(model);
			pflow.bindAggregation("nodes", {
				path: "/nodes",
				template: new sap.suite.ui.commons.ProcessFlowNode({
						laneId: "{lane}",
						nodeId: "{id}",
						title: "{title}",
						titleAbbreviation: "{titleAbbreviation}",
						children: "{children}",
						isTitleClickable: "{isTitleClickable}",
						state: "{state}",
						stateText: "{stateText}",
						texts: "{texts}", 
						highlighted: "{highlighted}", 
						focused: "{focused}"
					})
			});

			pflow.bindAggregation("lanes", {
				path: "/lanes",
				template: new sap.suite.ui.commons.ProcessFlowLaneHeader({
						laneId: "{id}",
						iconSrc: "{icon}",
						text: "{label}",
						position: "{position}"
					})
			});
			pflow.placeAt("content");

      <?php } elseif($_GET['m'] =='2') { ?>
				var tileContainer = new sap.m.TileContainer({
					tiles: [
						new sap.m.StandardTile({
							title: 'Back to map',
							icon: "sap-icon://world",
							press: function(e) { openLink('/sap?q=bl39ad&m=1') }
						}),
						new sap.m.StandardTile({
							title: 'Title 1',
							info: 'Info here',
							icon: "sap-icon://bbyd-dashboard",
							number: '8',
							numberUnit: 'times'
						}),
						new sap.m.StandardTile({
							title: 'Title 1',
							info: 'Info here',
							icon: "sap-icon://bbyd-dashboard",
							number: '8',
							numberUnit: 'times'
						}),
						new sap.m.StandardTile({
							title: 'Title 1',
							info: 'Info here',
							icon: "sap-icon://bbyd-dashboard",
							number: '8',
							numberUnit: 'times'
						}),
						new sap.m.StandardTile({
							title: 'Title 1',
							info: 'Info here',
							icon: "sap-icon://bbyd-dashboard",
							number: '8',
							numberUnit: 'times'
						}),
						new sap.m.StandardTile({
							title: 'Title 1',
							info: 'Info here',
							icon: "sap-icon://bbyd-dashboard",
							number: '8',
							numberUnit: 'times'
						}),
						new sap.m.StandardTile({
							title: 'Title 1',
							info: 'Info here',
							icon: "sap-icon://bbyd-dashboard",
							number: '8',
							numberUnit: 'times'
						}),
						new sap.m.StandardTile({
							title: 'Title 1',
							info: 'Info here',
							icon: "sap-icon://bbyd-dashboard",
							number: '8',
							numberUnit: 'times'
						}),
						new sap.m.StandardTile({
							title: 'Title 1',
							info: 'Info here',
							icon: "sap-icon://bbyd-dashboard",
							number: '8',
							numberUnit: 'times'
						})
					]
				})

				// Create App
				new sap.m.App({
					pages: [ 
						new sap.m.Page({
							showHeader: false,
							showSubHeader: false,
							enableScrolling: false,
							showFooter: false,
							content: [ tileContainer ]
						})
					]
				}).placeAt("content");

			<?php } ?>
		</script>
	</head>
	
	<body>
		<div id="header"></div>
		<div id="content"></div>
	</body>
	
</html>