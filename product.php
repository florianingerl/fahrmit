<html>

<head>
    <title>Product</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        function calcButtonClicked() {
            let fac1 = document.getElementById("fac1").value;
            let fac2 = document.getElementById("fac2").value;
            $.ajax({
			type:"GET",
			url:"calcproduct.php",
			data:"fac1=" + fac1 + "&fac2=" + fac2,
			beforeSend: function(){
				console.log("This request will soon be sent!");
			},
			success:function(datares){
				console.log("I receaved the reply!");
				document.getElementById("result").innerText = "Result = " + datares;
			}

		});
        }
    </script>
</head>

<body>
    <p>Factor 1:</p>
    <input type="text" id="fac1"></input>
    <p>Factor 2:</p>
    <input type="text" id="fac2"></input>
    <p id="result">Result = </p> <button onclick="calcButtonClicked()">Calculate</button>
</body>

</html>