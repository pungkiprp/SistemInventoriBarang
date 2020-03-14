<!DOCTYPE html>
<html>
<head>

	<title>PAMAN TOYS (OWNER)</title>
	<style>
		.header{
			width: 100%;
			height: 100%;
			margin: 0.25%;
			background-color: blue;
			text-align: center;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.header a{
			font-size: 40px;
			font-style: bold;
			color: white;
		}

		.left{
			float: left;
			margin: 0.25%;
			width: 24%;
			height: 100%;
			border: 1px solid black;
		}

		.content{
			width: 74%;
			margin: 0.25%;
			float: right;
			overflow: auto;
			padding: 0.25%;
			border: 1px solid black;
		}

		.container-btn-tambah{
			margin-top : 10px;
			float : right;
		}

/*Dari sini style untuk popup*/

		.popup-tambah {
  			display: none; /* Hidden by default */
  			position: fixed; /* Stay in place */
  			z-index: 1; /* Sit on top */
  			left: 0;
  			top: 0;
  			width: 100%; /* Full width */
  			height: 100%; /* Full height */
  			overflow: auto; /* Enable scroll if needed */
  			background-color: rgb(0,0,0); /* Fallback color */
  			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  			padding-top: 60px;
		}

		.container-form {
  			background-color: #fefefe;
  			margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  			border: 1px solid #888;
  			width: 80%; /* Could be more or less, depending on screen size */
		}

		.close-container {
 			text-align: center;
 			margin: 12px 0 12px 0;
  			position: relative;
  			padding-bottom: 25px;
			}

		.close {
  			position: absolute;
  			right: 25px;
  			color: black;
  			font-size: 35px;
		}

		.close:hover {
  			color: red;
  			cursor: pointer;
		}

		input{
  			width: 100%;
  			padding: 12px;
  			margin: 8px 0 8px 0px;
  			border: 1px solid black;
  			box-sizing: border-box;
		}

	</style>
</head>

<body>

	<div class="header">
		<a>PAMAN TOYS</a>
	</div>

	<div class="left">
		<ul>
			<li><a href="gudang_stok.php">Stok</a></li>
			<li><a href="#">Barang Keluar</a></li>
			<li><a href="gudang_barangmasuk.php">Barang Masuk</a></li>
			<li><a href="gudang_supplier.php">Suppliers</a></li>
		</ul>

	</div>

