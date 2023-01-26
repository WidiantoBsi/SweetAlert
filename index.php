<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SweetAlert</title>
	<link rel="stylesheet" href="sweet_alert/dist/sweetalert.css">
	<link rel="stylesheet" href="Stiles.css">
</head>
<body>
	<!-- <h2 align="center" style="margin: 30px;">SweetAlert</h2> -->
	<!-- <h2>SweetAlert | By Widianto</h2> -->
	<div class="header">
		<h2>SweetAlert | carapintar.web.id</h2>
	</div>
	<hr>
	<h3>Coba Salah satu aksi tombol dibawah!</h3>
	<div class="container">
		<div class="bisablog-info">
				<button class="frist" onclick="Primary()">Primary</button>
				<button class="frist" onclick="Standar()">success</button>
				<button class="frist" onclick="Error()">Error</button>
				<button class="frist" onclick="Error_Warning()">warning</button>
				<button class="frist" onclick="Info()">Info</button>
			</div>
		</div>
		<hr>
		<div class="bisablog-info"><h3>Original Examples</h3></div>
		<div class="bisablog-card" style="border: 1px;  overflow: auto; height: 310px;">
			<button class="frist" onclick="Basic()">Basic example</button>
			<p>
				<pre>
					swal('Ini adalah sweetalert Basic');
				</pre></p>
				<button class="frist" onclick="Custom()">title with a text under</button>
				<p>
					<pre>
						swal("Here's a message!", "It's pretty, isn't it?")
					</pre>
				</p>
				<button class="frist" onclick="Succes()">success message!</button>
				<p>
					<pre>
						swal("Good job!", "You clicked the button!", "success");
					</pre>
				</p>
				<button class="frist" onclick="Warning()">warning message</button>
				<p>
					<pre>
						swal({
						title: "Are you sure?",
						text: "Your will not be able to recover this imaginary file!",
						type: "warning",
						showCancelButton: true,
						confirmButtonClass: "btn-danger",
						confirmButtonText: "Yes, delete it!",
						closeOnConfirm: false
					},
					function(){
					swal("Deleted!", "Your imaginary file has been deleted.", "success");
				});
			</pre>
		</p>
		<button class="frist" onclick="Warning2()">warning message execute</button>
		<p>
			<pre>
				swal({
				title: "Are you sure?",
				text: "You will not be able to recover this imaginary file!",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Yes, delete it!",
				cancelButtonText: "No, cancel plx!",
				closeOnConfirm: false,
				closeOnCancel: false
			},
			function(isConfirm) {
			if (isConfirm) {
			swal("Deleted!", "Your imaginary file has been deleted.", "success");
		} else {
		swal("Cancelled", "Your imaginary file is safe :)", "error");
	}
});				
</pre>
</p>
<button class="frist" onclick="custom()">custom icon</button>
<p>
	<pre>
		swal({
		title: "Sweet!",
		text: "Here's a custom image.",
		imageUrl: 'thumbs-up.jpg'
	});
</pre>
</p>
<button class="frist" onclick="input()">input!</button>
<p>
	<pre>
		swal({
		title: "An input!",
		text: "Write something interesting:",
		type: "input",
		showCancelButton: true,
		closeOnConfirm: false,
		inputPlaceholder: "Write something"
	}, function (inputValue) {
	if (inputValue === false) return false;
	if (inputValue === "") {
	swal.showInputError("You need to write something!");
	return false
}
swal("Nice!", "You wrote: " + inputValue, "success");
});
</pre>
</p>
<button class="frist" onclick="requests()">AJAX requests</button>
<p>
	<pre>
		swal({
		title: "Ajax request example",
		text: "Submit to run ajax request",
		type: "info",
		showCancelButton: true,
		closeOnConfirm: false,
		showLoaderOnConfirm: true
	}, function () {
	setTimeout(function () {
	swal("Ajax request finished!");
}, 2000);
});
</pre>
</p>
</div>

<style>
	.bisablog-card {padding: 10; margin: 10; border:1px solid #eaeaea; background:#f4f4f4;}
	.bisablog-card p {color:#241414}
	.bisablog-positif {background:#c81135}
	.bisablog-sembuh {background:#49d6c8}
	.bisablog-meninggal {padding:10px 7px; background:#4f727d}
	.bisablog-positif, .bisablog-sembuh {padding:10px 7px; margin-bottom:1em}
	.bisablog-info {text-align:center}
	.bisablog-card p{font-weight:bold}
</style>
</body>
<script type="text/javascript">
	function Basic(){
		swal('Ini adalah sweetalert Basic');
	}
	function Custom(){
		swal("Here's a message!", "It's pretty, isn't it?")
	}
	function Succes(){
		swal("Good job!", "You clicked the button!", "success");
	}
	function Warning(){
		swal({
			title: "Are you sure?",
			text: "Your will not be able to recover this imaginary file!",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, delete it!",
			closeOnConfirm: false
		},
		function(){
			swal("Deleted!", "Your imaginary file has been deleted.", "success");
		});
	}
	function Warning2(){
		swal({
			title: "Are you sure?",
			text: "You will not be able to recover this imaginary file!",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, delete it!",
			cancelButtonText: "No, cancel plx!",
			closeOnConfirm: false,
			closeOnCancel: false
		},
		function(isConfirm) {
			if (isConfirm) {
				swal("Deleted!", "Your imaginary file has been deleted.", "success");
			} else {
				swal("Cancelled", "Your imaginary file is safe :)", "error");
			}
		});
	}
	function custom(){
		swal({
			title: "Sweet!",
			text: "Here's a custom image.",
			imageUrl: 'thumbs-up.jpg'
		});
	}
	function input(){
		swal({
			title: "An input!",
			text: "Write something interesting:",
			type: "input",
			showCancelButton: true,
			closeOnConfirm: false,
			inputPlaceholder: "Write something"
		}, function (inputValue) {
			if (inputValue === false) return false;
			if (inputValue === "") {
				Swal.showInputError("You need to write something!");
				return false;
			}
			swal("Nice!", "You wrote: " + inputValue, "success");
		});
	}
	function requests(){
		swal({
			title: "Ajax request example",
			text: "Submit to run ajax request",
			type: "info",
			showCancelButton: true,
				// closeOnConfirm: false,
				confirmButtonClass: "btn-danger",
				showLoaderOnConfirm: true,
				closeOnConfirm: false,
				closeOnCancel: false
			}, function (isConfirm) {
				if (isConfirm) {
					setTimeout(function () {
						swal("Ajax request finished!");
					}, 2000);
				}else{
					swal("Cancelled", "Your imaginary file is safe :)", "error");
				}
			});
	}
//=================================================//
function Primary(){
	swal({
		title: "Ini adalah judulnya",
		text: "Isi text nya!",
		type: "success",
		confirmButtonText: "OK",
		closeOnConfirm: false
	});
}
function Standar(){
	swal({
		title: "Are you sure?",
		text: "Your will not be able to recover this imaginary file!",
		type: "success",
		showCancelButton: true,
		confirmButtonClass: "btn-danger",
		confirmButtonText: "OK",
		closeOnConfirm: false
	});
}
function Error(){
	swal({
		title: "Oops...",
		text: "Something went wrong!",
		type: "error",
		showCancelButton: true,
		confirmButtonClass: "btn-danger",
		confirmButtonText: "OK",
		closeOnConfirm: false
	});
}
function Error_Warning(){
	swal({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: "btn-danger",
		confirmButtonText: "OK",
		closeOnConfirm: false
	});
}
function Info(){
	swal({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
		type: "info",
		showCancelButton: true,
		confirmButtonClass: "btn-danger",
		confirmButtonText: "OK",
		closeOnConfirm: false
	});
}
</script>
<script src="sweet_alert/dist/sweetalert.js"></script>
</html>