<?php

$xmlStringRect = "<Shape ID='1' Type='Shape' LineStyle='3' FillStyle='3' TextStyle='3'>
	<Cell N='PinX' V='4.133858267716536'/>
	<Cell N='PinY' V='6.496062992125985'/>
	<Cell N='Width' V='1.181102362204724'/>
	<Cell N='Height' V='0.78740157480315'/>
	<Cell N='LocPinX' V='0.590551181102362' F='Width*0.5'/>
	<Cell N='LocPinY' V='0.393700787401575' F='Height*0.5'/>
	<Cell N='Angle' V='0'/>
	<Cell N='FlipX' V='0'/>
	<Cell N='FlipY' V='0'/>
	<Cell N='ResizeMode' V='0'/>
	<Section N='Geometry' IX='0'>
		<Cell N='NoFill' V='0'/>
		<Cell N='NoLine' V='0'/>
		<Cell N='NoShow' V='0'/>
		<Cell N='NoSnap' V='0'/>
		<Cell N='NoQuickDrag' V='0'/>
		<Row T='RelMoveTo' IX='1'>
			<Cell N='X' V='0'/>
			<Cell N='Y' V='0'/>
		</Row>
		<Row T='RelLineTo' IX='2'>
			<Cell N='X' V='1'/>
			<Cell N='Y' V='0'/>
		</Row>
		<Row T='RelLineTo' IX='3'>
			<Cell N='X' V='1'/>
			<Cell N='Y' V='1'/>
		</Row>
		<Row T='RelLineTo' IX='4'>
			<Cell N='X' V='0'/>
			<Cell N='Y' V='1'/>
		</Row>
		<Row T='RelLineTo' IX='5'>
			<Cell N='X' V='0'/>
			<Cell N='Y' V='0'/>
		</Row>
	</Section>
</Shape>";

$xmlObjRect = simplexml_load_string($xmlStringRect);

?>