<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Invoice</title>
	<style>
		.container {
			margin-bottom: 20px !important;
			height: 700px;
			/* margin: auto; */
			padding-top: 10px;
			width: 600px;
			box-shadow: 0 0 100px rgba(0, 0, 0, 0.2);
			max-width: 100%;
			padding-left: 30px;
			padding-right: 30px;
			background: white;
		}
	</style>
</head>

<body>
	<center>
		<div class="container">
			<table style="width: 100%;">
				<tr>
					<td style="font-family: monospace;" width="50%">
						<span style="color: #212e59;font-size: 2em;font-family:monospace;">RECEIPT</span>
					</td>
					<td style="font-family: monospace;">
						<img src="https://img.freepik.com/free-vector/illustration-circle-stamp-banner-vector_53876-27183.jpg?size=338&ext=jpg"
							alt="" ALIGN="right" style="height: 70px;">
					</td>
				</tr>
			</table>


			<table style="width: 100%;">
				<tr style="display: flex;flex-direction: column;font-family:monospace;font-size: 13px;">
					<td style="font-weight: 700;">East Repair Inc.</td>
					<td style="font-family: monospace;">1912 Harvest Lane</td>
					<td style="font-family: monospace;">New York City</td>
				</tr>
			</table>
			<table style="width:100%;font-family:monospace;padding-right: 30px;font-size: 12px;margin-top: 10px;">
				<tr>
					<td style="font-weight: 700;font-size: 15px;">BILL TO</td>
					<td style="font-weight: 700; font-size: 15px;">SHIP TO</td>
					<td style="font-weight: 700;font-size: 15px;">RECEIPT#</td>
					<td style="font-family: monospace;">US-001</td>
				</tr>
				<tr>
					<td style="font-family: monospace;">John Smith</td>
					<td style="font-family: monospace;">John Smith</td>
					<td style="font-weight: 700;">RECEIPT DATE</td>
					<td style="font-family: monospace;">11/02/2019</td>
				</tr>
				<tr>
					<td style="font-family: monospace;">2 Quart Square</td>
					<td style="font-family: monospace;">37 Drive</td>
					<td style="font-weight: 700;">P.O.#</td>
					<td style="font-family: monospace;">2023/2019</td>
				</tr>
				<tr>
					<td style="font-family: monospace;">New York, NY 1222</td>
					<td style="font-family: monospace;">Cambridge, MA 16543</td>
					<td style="font-weight: 700;">DUE DATE</td>
					<td style="font-family: monospace;">26/2/2019</td>
				</tr>
			</table>
			<table style="width: 100%;font-family:monospace;margin-top: 30px;">
				<tr style="border-top: 2px solid red;border-bottom: 2px solid red;color: #212e59;padding: 10px;">
					<th>QTY</th>
					<th style="text-align: left;">DESCRIPTION</th>
					<th style="text-align: left;">UNIT PRICE</th>
					<th style="text-align: left;">AMOUNT</th>
				</tr>
				<tr style="font-size: 13px!important;">
					<th>1</th>
					<td style="font-family: monospace;">Front and rear break cables</td>
					<td style="font-family: monospace;">$ 100.00</td>
					<td style="font-family: monospace;">$ 100.00</td>
				</tr>
				<tr style="font-size: 13px!important;">
					<th>2</th>
					<td style="font-family: monospace;">New set of pedal arms</td>
					<td style="font-family: monospace;">$ 15.00</td>
					<td style="font-family: monospace;">$ 30.00</td>
				</tr>
				<tr style="font-size: 13px!important;">
					<th>3</th>
					<td style="font-family: monospace;">Lollipops</td>
					<td style="font-family: monospace;">$ 5.00</td>
					<td style="font-family: monospace;">$ 15.00</td>
					<td style="font-family: monospace;"></td>
					<td style="font-family: monospace;"></td>
				</tr>
				<tr>
					<th></th>
					<td style="font-family: monospace;"></td>
					<td style="font-family: monospace;"></td>
					<td style="font-family: monospace;"></td>
				</tr>
				<tr>
					<th></th>
					<td style="font-family: monospace;"></td>
					<td style="font-family: monospace;"></td>
					<td style="font-family: monospace;"></td>
				</tr>
				<tr>
					<th></th>
					<td style="font-family: monospace;"></td>
					<td style="font-family: monospace;"></td>
					<td style="font-family: monospace;"></td>
				</tr>
				<tr>
					<th></th>
					<td style="font-family: monospace;"></td>
					<td style="font-family: monospace;"></td>
					<td style="font-family: monospace;"></td>
				</tr>
				<tr style="padding-top: 20px!important; font-size: 14px!important;">
					<th></th>
					<td style="font-family: monospace;"></td>
					<td >Subtotal</td>
					<td >$ 145.00</td>
				</tr>
				<tr style="font-size: 14px!important;">
					<th></th>
					<td style="font-family: monospace;"></td>
					<td style="font-family: monospace;">Sales Tax 6.25%</td>
					<td style="font-family: monospace;">9.06</td>
				</tr>
				<tr style="font-size: 13px!important;">
					<th></th>
					<td style="font-family: monospace;"></td>
					<td style="color: #212e59;font-size: 18px;font-weight: 700;">TOTAL</td>
					<td style="color: #212e59;font-size: 18px;font-weight: 700;">$ 154.06</td>
				</tr>
			</table>
			<div style="display: flex;margin-top: 40px;margin-left: 100px;">
				<h1 style="font-family: 'Oswald',cursive;
			  margin-right: 13px;margin-top: 56px; color: #212e59;"><i>Thank you</i></h1>
			</div>
		</div>
	</center>
</body>

</html>
